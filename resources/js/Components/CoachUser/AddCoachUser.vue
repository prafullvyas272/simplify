<template>

    <Dialog>
        <DialogTrigger class=" ml-5">
            <Button  variant="outline" class="unify_button text-lg border-0 py-2">
                  Get Started
            </Button>
        </DialogTrigger>
        <DialogContent class="sm:max-w-[425px]">
            <DialogHeader>
                <DialogTitle>Send Session Request</DialogTitle>
                <DialogDescription>
                    Please chat with the coach before reserving a session.
                </DialogDescription>
            </DialogHeader>
            <div class="grid gap-4 py-4">

                <div class="grid grid-cols-4 items-center gap-4">
                    <InputLabel for="username" class="text-right">
                        From Date / Time
                    </InputLabel>
                    <input type="datetime-local"  v-model="this.add_coach_user_form.from_date" class="col-span-3 border-2 border-gray-300 px-2 rounded" />
                    <InputError class="mt-2" :message="this.add_coach_user_form.errors.from_date" />
                </div>

                <div class="grid grid-cols-4 items-center gap-4">
                    <InputLabel for="username" class="text-right">
                        To Date / Time
                    </InputLabel>
                    <input type="datetime-local"  v-model="this.add_coach_user_form.to_date" class="col-span-3 border-2 border-gray-300 px-2 rounded" />
                    <InputError class="mt-2" :message="this.add_coach_user_form.errors.to_date" />
                </div>

            </div>
            <DialogFooter>
                <DialogDescription>
                    Your Reservation will be totally of {{calculate_hours}} hours, with total price {{ calculate_hours * this.rate}}
                </DialogDescription>

                <Button @click="submit_goal" type="submit">
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
import InputField from "@/Components/InputField.vue";
export default {
    name: "AddCoachUser",
    components: {
        InputField,
        InputLabel,
        InputArea,
        InputError, Button, Dialog, DialogTrigger ,DialogTitle,  DialogContent , DialogHeader, DialogFooter, DialogDescription} ,

    setup(){
        const add_coach_user_form= useForm({
            from_date:null,
            to_date:null,
        })

        return {add_coach_user_form}
    },
    data(){
        return {
            show_goals_dialog:false,
        }
    },
    props:{
        rate:Number,
        coach_id:Number
    },
    methods:{
        submit_goal(){
            this.add_coach_user_form.post(route("sessions.store" , this.coach_id),{
                onSuccess:(data)=>{

                }
            })
        }
    },

    computed:{
        calculate_hours(){
            var from_date = new Date(this.add_coach_user_form.from_date);
            var to_date = new Date(this.add_coach_user_form.to_date);
            //get difference in millis
            var difference = Math.abs(from_date - to_date);
            //convert millis to hours
            return (difference/(1000*3600)).toFixed(2);
        }
    }

}
</script>



<style scoped>

</style>
