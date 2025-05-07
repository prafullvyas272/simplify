

<template xmlns="http://www.w3.org/1999/html">
    <div class="mt-10 w-full flex flex-col rounded-xl px-10 gap-6 py-10">
        <div class="flex flex-col">
            <div id="ai_window" :class="{'h-[40vh] py-5 mb-20': this.user_messages?.length > 0 || this.show_history}"
                 class="px-10  flex  flex-col gap-y-5 text-white overflow-auto rounded-3xl  transition-all ease-in duration-200  bg-[#061534]">
                <div  v-for="response in this.user_messages">
                    <div class="w-full gap-x-4 flex flex-row">
                            <img class="rounded-full flex  w-10 h-10 bg-white object-contain" @error="$event.target.src='/images/default/placeholder.png'"  :src="'/storage/'+ this.$page.props.auth.user.image " alt="">
                            <div class=" flex flex-col gapy-y-5">
                                <p class="color-white font-bold">You</p>
                                <p class="color-white">{{response.prompt}}</p>
                            </div>
                    </div>
                    <div class="w-full gap-x-4 mt-5  flex flex-row">
                            <img class="rounded-full flex  w-10 h-10  bg-[#9645DF] object-contain" @error="$event.target.src='/images/default/placeholder.png'"  src="/images/logo-white-color-dot-p-500.png" alt="">
                            <div class=" flex flex-col gapy-y-5">
                                <p class="color-white font-bold">Unify</p>
                                <p class="color-white">{{response.message}}</p>
                            </div>
                    </div>

                    </div>
            </div>

            <div class="w-full h-16 flex flex-row items-center rounded-full bg-[#061534] px-5">
                <div class=" w-1/12 rounded-full">
                    <img class="rounded-full flex  w-10 h-10 object-contain" @error="$event.target.src='/images/default/placeholder.png'"  :src="'/storage/'+ this.$page.props.auth.user.image " alt="">
                </div>
                <div v-show="this.sending" class="w-5/6 ps-10 relative">
                    <div class='flex space-x-2 justify-start items-center h-screen dark:invert'>
                        <div class='h-2 w-2 bg-[#9645DF] rounded-full animate-bounce [animation-delay:-0.3s]'></div>
                        <div class='h-2 w-2 bg-[#9645DF] rounded-full animate-bounce [animation-delay:-0.15s]'></div>
                        <div class='h-2 w-2 bg-[#9645DF] rounded-full animate-bounce'></div>
                    </div>

                </div>
                <div v-show="!this.sending" class="w-5/6 ps-10">
                    <input @keydown.enter="this.send_message"  v-model="this.message" placeholder="Type in Your Prompt Here" class="placeholder:text-white w-full bg-transparent text-white focus-visible:outline-none">
                </div>
                <div class="w-1/12  text-right">
                    <button @click="this.send_message" class="bg-[#9645DF] rounded-full w-10 h-10 hover:opacity-80">
                        <svg class="w-8 h-8 mx-auto" viewBox="0 0 41 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M39.4961 1.94141C40.6387 2.99609 40.6387 4.8418 39.4961 5.89648L16.9961 28.3965C15.9414 29.5391 14.0957 29.5391 13.041 28.3965L1.79102 17.1465C0.648438 16.0918 0.648438 14.2461 1.79102 13.1914C2.8457 12.0488 4.69141 12.0488 5.74609 13.1914L14.9746 22.4199L35.541 1.94141C36.5957 0.798828 38.4414 0.798828 39.4961 1.94141Z" fill="#061534"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>



        <div class="w-full flex flex-row flex-wrap mt-10 gap-x-5 gap-y-10" v-if="!this.show_history">
            <template  v-for="command in this.history_commands">
                <div

                    @click="this.prepare_history"
                     class="w-[30%] rounded-xl h-56 single_card px-5 flex items-center
               text-xl text-white font-bold bg-gradient-to-br from-violet-900 to-fuchsia-700
                cursor-pointer">
                    {{command.user_message}}
                </div>
            </template>

        </div>
    </div>

</template>

<script>
import AskAILayout from "@/Layouts/AskAILayout.vue";
import {Link} from "@inertiajs/vue3";
export default {
    name: "AskAI",
    layout: AskAILayout,
    components:{Link},
    data(){
        return {
            sending:false,
            message:null,
            user_messages:[],
            history_commands:[],
            show_history:false,
            ai_window:null,
        }
    },
    methods:{
            send_message(){
                this.sending= true
                axios.post(route("ask_ai.send_message"),{
                    message:this.message
                }).then((response) => {
                    if (response.data.status.toLowerCase() === "success") {
                        this.user_messages.push({
                            prompt:this.message,
                            message:response.data.data.bot_reply
                        })
                        this.message = null;
                        console.log(this.user_messages)
                    }
                    this.sending=false;
                }).then(()=>{
                        this.scroll_down()})
            },
            prepare_history(){
                this.show_history=true
                this.history_commands.forEach((single)=>{
                    this.user_messages.push({
                        prompt:single.user_message,
                        message:single.bot_message
                    })
                })

                setTimeout(() => {
                    this.scroll_down();
                }, 1);
            },
        scroll_down() {
            setTimeout(() => {
                document.getElementById("ai_window").scrollTop =document.getElementById("ai_window").scrollHeight
            }, 1);
        }
    },
    mounted() {
        axios.post(route("ask_ai.history"))
            .then((resp)=>{
                this.history_commands = resp.data.data;
            })
    }

}
</script>

<style scoped>
.color-white{
    color:#ffffff !important;
}
</style>
