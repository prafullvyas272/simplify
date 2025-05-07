<template>


    <Button @click="this.open_goal=true" variant="outline" class="shadow-none rounded-full border-[1px] border-[#9747FF] text-[#9747FF] hover:text-[#9747FF]" >
        <svg class="mr-2" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45001 10.5V18.5H10.45V10.5H18V8.5L10.45 8.5V0.5H8.45001V8.5L0 8.5V10.5H8.45001Z" fill="#9747FF"/>
        </svg>
        Add Goal
    </Button>

    <Dialog v-model:visible="open_goal" modal header="Add Goal" :style="{ width: '25rem' }">
        <div class="flex flex-col gap-y-5 w-full py-4">
            <div class="w-full flex flex-col">
                <InputLabel value="Title" />
                <InputText
                    type="text"
                    class="mt-1 block w-full border-[1px] border-black h-12 rounded-xl "
                    v-model="this.new_goal_form.name"
                    required
                    autofocus
                />
                <InputError class="mt-2" :message="this.new_goal_form.errors.name" />
            </div>
            <div class="w-full flex flex-col">
                <InputLabel value="Description" />
                <InputArea
                    type="text"
                    rows="3"
                    class="mt-1 block w-full "
                    v-model="this.new_goal_form.description"
                    required
                    autofocus
                />
                <InputError class="mt-2" :message="this.new_goal_form.errors.description" />
            </div>
            <div class="w-full flex flex-col">
                <InputLabel value="Due At" />
                <InputText
                    type="date"
                    class="mt-1 block w-full border-[1px] border-black h-12 rounded-xl"
                    v-model="this.new_goal_form.due_at"
                    required
                    autofocus
                />
                <InputError class="mt-2" :message="this.new_goal_form.errors.due_at" />
            </div>
        </div>
        <div class="flex justify-end gap-2">
            <Button  @click="submit_goal" class="unify_button px-5 py-2"> Submit </Button>
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
import InputText from "primevue/inputtext";
export default {
    name: "AddGoal",
    components: {
        InputArea,
        InputText,
        InputError,
        Dropdown,
        Button,Dialog, InputField, InputLabel},
    setup(){

        const new_goal_form= useForm({
            name:null,
            description:null,
            due_at:null
        })

        return {new_goal_form}
    },
    data(){
        return {
            open_goal:false,
        }
    },

    methods:{
        submit_goal() {
            this.new_goal_form.post(route("goals.store"), {
                onSuccess: () => {
                    this.new_goal_form.reset()
                    this.open_goal=false
                    this.$emit('goal_added')
                }
            })
        }
    }

}
</script>


<style scoped>

</style>
