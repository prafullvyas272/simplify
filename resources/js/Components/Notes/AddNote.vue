<template>


    <Button @click="prepare_note_form" class="unify_button " >Create New Note</Button>

    <Dialog v-model:visible="open_note" modal header="Add Note" :style="{ width: '25rem' }">
        <div class="flex flex-col gap-y-5 w-full py-4">
            <div class="w-full flex flex-col">
                <InputLabel value="Note" />
                <InputArea
                    type="text"
                    class="mt-1 block w-full "
                    v-model="this.new_note_form.note"
                    required
                    autofocus
                />
                <InputError class="mt-2" :message="this.new_note_form.errors.note" />
            </div>
            <div class="w-full flex flex-col">
                <Dropdown
                    v-model="this.new_note_form.coach_user_id"
                    :options="this.available_sessions"
                    option-label="name"
                    filter
                    option-value="id"
                    placeholder="Session"
                    @show="console.log(this.new_note_form.coach_user_id)"
                    class="mt-5  w-full border-black rounded-full px-3  border-[1px] bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "/>
                <InputError class="mt-2" :message="this.new_note_form.errors.coach_user_id" />
            </div>
        </div>
        <div class="flex justify-end gap-2">
            <Button  @click="submit_note" class="unify_button px-5 py-2"> Save </Button>
        </div>
    </Dialog>

</template>


<script>
import InputLabel from "@/Components/InputLabel.vue";
import InputField from "@/Components/InputField.vue";
import InputArea from "@/Components/InputArea.vue";
import {useForm} from "@inertiajs/vue3";
import Dialog from "primevue/dialog";
import Button from "@/shadcn/ui/button/Button.vue"
import InputError from "@/Components/InputError.vue";
import Dropdown from "primevue/dropdown";
export default {
    name: "AddNote",
    components: {
        InputArea,
        InputError,
        Dropdown,
        Button,Dialog, InputField, InputLabel},
    setup(){
        const new_note_form=useForm({
            note:"",
            coach_user_id:0,
        })
        return {new_note_form}
    },
    data(){
        return {
            open_note:false,
            available_sessions:null,
        }
    },

    methods:{
        submit_note(){
            this.new_note_form.post(route("notes.store"),{
                onSuccess: ()=>{
                    this.open_note=false
                    this.new_note_form.reset()
                }
            })
        },
        prepare_note_form(){
            this.open_note=true;
            this.available_sessions=[];
            axios.get(route("notes.sessions"))
                .then((resp)=>{
                    resp.data.forEach((value)=>{
                        if(this.$page.props.auth.user.role_id === 2){
                            var optionName = value.student.name;
                        }else{
                            var optionName = value.coach.name
                        }
                        this.available_sessions.push({
                            name: `Session `+optionName,
                            id: value.id
                        })

                    })
                })
        }
    }

}
</script>


<style scoped>

</style>
