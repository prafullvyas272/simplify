<template>


    <Button @click="this.prepare_task_form" variant="outline" class="shadow-none rounded-full border-[1px] border-[#19D3E0] text-[#19D3E0] hover:text-[#19D3E0]" >
        <svg  class="mr-2"  width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45001 10.5V18.5H10.45V10.5H18V8.5L10.45 8.5V0.5H8.45001V8.5L0 8.5V10.5H8.45001Z" fill="#19D3E0"/>
        </svg>
        Add Task
    </Button>

    <Dialog v-model:visible="open_task" modal header="Add Task" :style="{ width: '25rem' }">
        <div class="flex flex-col gap-y-5 w-full py-4">
            <div class="w-full flex flex-col">
                <InputLabel value="Title" />
                <InputText
                    type="text"
                    class="mt-1 block w-full border-[1px] border-black h-12 rounded-xl "
                    v-model="this.new_task_form.name"
                    required
                    autofocus
                />
                <InputError class="mt-2" :message="this.new_task_form.errors.name" />
            </div>
            <div class="w-full flex flex-col">
                <InputLabel value="Description" />
                <InputArea
                    type="text"
                    rows="3"
                    class="mt-1 block w-full "
                    v-model="this.new_task_form.description"
                    required
                    autofocus
                />
                <InputError class="mt-2" :message="this.new_task_form.errors.description" />
            </div>
            <div class="w-full flex flex-col">
                <InputLabel value="Due Date" />
                <InputText
                    type="date"
                    class="mt-1 block w-full border-[1px] border-black h-12 rounded-xl"
                    v-model="this.new_task_form.due_at"
                    required
                    autofocus
                />
                <InputError class="mt-2" :message="this.new_task_form.errors.due_at" />
            </div>
            <div class="w-full flex flex-col">
                <Dropdown
                    v-model="this.new_task_form.goal_id"
                    :options="this.available_goals"
                    option-label="name"
                    filter
                    option-value="id"
                    placeholder="Goals"
                    class="mt-5  w-full border-black rounded-full px-3  border-[1px] bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "/>
                <InputError class="mt-2" :message="this.new_task_form.errors.goal_id" />
            </div>
        </div>
        <div class="flex justify-end gap-2">
            <Button  @click="submit_task" class="unify_button px-5 py-2"> Submit </Button>
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
    name: "AddTask",
    components: {
        InputArea,
        InputText,
        InputError,
        Dropdown,
        Button,Dialog, InputField, InputLabel},
    setup(){
        const new_task_form= useForm({
            name:null,
            description:null,
            goal_id:null,
            due_at:null
        })
        return {new_task_form}
    },
    data(){
        return {
            open_task:false,
            available_goals:null,
        }
    },

    methods:{
        submit_task() {
            this.new_task_form.post(route("tasks.store"), {
                onSuccess: () => {
                    this.new_task_form.reset()
                    this.open_task=false
                    this.$emit('task_added')
                }
            })
        },
        prepare_task_form(){
            this.open_task=true;
            this.available_goals=[];
            axios.get(route("goals.index_json"))
                .then((resp)=>{
                    this.available_goals=resp.data
                })
        }
    }

}
</script>


<style scoped>

</style>
