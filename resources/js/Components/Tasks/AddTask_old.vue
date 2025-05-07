<template>

    <Dialog>
        <DialogTrigger class="mt-5 mr-5">
            <Button  variant="outline" class="shadow-none rounded-full border-[1px] border-[#19D3E0] text-[#19D3E0] hover:text-[#19D3E0]">
                <svg  class="mr-2"  width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45001 10.5V18.5H10.45V10.5H18V8.5L10.45 8.5V0.5H8.45001V8.5L0 8.5V10.5H8.45001Z" fill="#19D3E0"/>
                </svg>

                Add Task
            </Button>
        </DialogTrigger>
        <DialogContent class="sm:max-w-[425px]">
            <DialogHeader>
                <DialogTitle>Add Goal</DialogTitle>
                <DialogDescription>
                    Create New Task
                </DialogDescription>
            </DialogHeader>
            <div class="grid gap-4 py-4">
                <div class="grid grid-cols-4 items-center gap-4">
                    <InputLabel for="name" class="text-right">
                        Name
                    </InputLabel>
                    <input id="name" v-model="this.add_task_form.name" class="col-span-3" />
                </div>
                <InputError class="mt-2 w-full" :message="this.add_task_form.errors.name" />
                <div class="grid grid-cols-4 items-center gap-4">
                    <InputLabel for="username" class="text-right">
                        Description
                    </InputLabel>
                    <textarea rows="3" id="name" v-model="this.add_task_form.description" class="col-span-3" />
                    <InputError class="mt-2 w-full" :message="this.add_task_form.errors.description" />
                </div>
                <div class="grid grid-cols-4 items-center gap-4">
                    <InputLabel for="username" class="text-right">
                        Due Date
                    </InputLabel>
                    <input   type="datetime-local"  v-model="this.add_task_form.due_date" class="col-span-3" />
                    <InputError class="mt-2" :message="this.add_task_form.errors.due_date" />
                </div>
            </div>
            <DialogFooter>
                <Button @click="submit_task" type="submit">
                    Submit
                </Button>
            </DialogFooter>
        </DialogContent>
    </Dialog>
</template>

<script>
import Button from "@/shadcn/ui/button/Button.vue";
import Dialog from "@/shadcn/ui/dialog/Dialog.vue";
import DialogTrigger from "@/shadcn/ui/dialog/DialogTrigger.vue";
import DialogHeader from "@/shadcn/ui/dialog/DialogHeader.vue";
import DialogContent from "@/shadcn/ui/dialog/DialogContent.vue";
import DialogFooter from "@/shadcn/ui/dialog/DialogFooter.vue";
import DialogDescription from "@/shadcn/ui/dialog/DialogDescription.vue";
import DialogTitle from "@/shadcn/ui/dialog/DialogTitle.vue";
import {useForm} from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import InputArea from "@/Components/InputArea.vue";
import InputLabel from "@/Components/InputLabel.vue";
export default {
    name: "AddTask_old",
    components: {
        InputLabel,
        InputArea,
        InputError, Button, Dialog, DialogTrigger ,DialogTitle,  DialogContent , DialogHeader, DialogFooter, DialogDescription} ,

    setup(){

    },
    methods:{
        submit_task(){
            this.$inertia.post(route("tasks.store") , this.add_task_form)
            this.add_task_form.post(route("tasks.store"))
        }
    }

}
</script>



<style scoped>

</style>
