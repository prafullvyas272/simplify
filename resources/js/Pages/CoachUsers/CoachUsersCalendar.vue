<template>

    <div class=" border-2 mt-20 border-2-gray-300 rounded-3xl w-4/5 mx-auto h-[95vh]">

        <div class="calendar-container">
            <FullCalendar :options="this.calendar_options" class="full-calendar"></FullCalendar>
        </div>

        <Dialog :open="calendar_view" >
            <DialogContent
                @escape-key-down="this.calendar_view=false"
                @pointer-down-outside="this.calendar_view=false"
                @interact-outside="this.calendar_view=false"
                class="sm:max-w-[425px]">
                <DialogHeader>
                    <DialogTitle >Request a Session </DialogTitle>
                </DialogHeader>
                <div class="flex flex-col gap-y-5 w-full py-4">

                    <div class="grid grid-cols-4 items-center gap-4">
                        <InputLabel for="username" class="text-right">
                            From Time
                        </InputLabel>
                        <input type="datetime-local"  v-model="this.request_session_form.from_date" class="col-span-3 border-2 border-gray-300 px-2 rounded" />
                        <InputError class="mt-2" :message="this.request_session_form.errors.from_date" />
                    </div>

                    <div class="grid grid-cols-4 items-center gap-4">
                        <InputLabel for="username" class="text-right">
                            To  Time
                        </InputLabel>
                        <input type="datetime-local"  v-model="this.request_session_form.to_date" class="col-span-3 border-2 border-gray-300 px-2 rounded" />
                        <InputError class="mt-2" :message="this.request_session_form.errors.to_date" />
                    </div>


                </div>
                <DialogFooter>
                    <Button @click="submit_session_request" type="submit" class="unify_button px-5 py-2">
                        Submit
                    </Button>
                </DialogFooter>
            </DialogContent>
        </Dialog>


    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import FullCalendar from '@fullcalendar/vue3'
import interactionPlugin from '@fullcalendar/interaction'
import timeGridPlugin from '@fullcalendar/timegrid'
import InputField from "@/Components/InputField.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputArea from "@/Components/InputArea.vue";
import {useForm} from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";

import Dialog from "@/shadcn/ui/dialog/Dialog.vue";
import DialogTrigger from "@/shadcn/ui/dialog/DialogTrigger.vue";
import DialogHeader from "@/shadcn/ui/dialog/DialogHeader.vue";
import DialogContent from "@/shadcn/ui/dialog/DialogContent.vue";
import DialogFooter from "@/shadcn/ui/dialog/DialogFooter.vue";
import DialogTitle from "@/shadcn/ui/dialog/DialogTitle.vue";

export default {
    name: "CoachUsersCalendar",
    layout:MainLayout,
    components: {InputError, InputArea, DialogHeader, InputLabel, InputField, DialogFooter, FullCalendar, Dialog , DialogTrigger, DialogContent, DialogTitle},
    setup(){
        const request_session_form=useForm({
            from_date:null,
            to_date:null,
            coach_id:null,
        })

        return {request_session_form}
    },
    data(){
        return {
            calendar_view:false,
            calendar_options: {
                plugins: [timeGridPlugin, interactionPlugin],
                dateClick: this.add_new_session,
                slotDuration:"00:30:00",
                nowIndicator:true,
                events: [],
                expandRows:true,
            }
        }
    },

    props:{
        sessions: Array,
        coach_id:Number
    },

    mounted() {


        this.sessions.forEach((session)=>{
                this.calendar_options.events.push( {
                        title: "Reserved",
                        start: session.from_date,
                        end: session.to_date,
                        className: 'reserved'
                    },
                )
        })
    },

    methods:{
        add_new_session(arg){
            this.calendar_view=true;
            this.request_session_form.from_date = arg.dateStr.replace("T" , " ").split("+")[0];
            this.request_session_form.to_date =  arg.dateStr.replace("T" , " ").split("+")[0];
        },

        submit_session_request(){
            this.request_session_form.post(route('sessions.store' , this.coach_id))
        }
    }

}
</script>



<style scoped>

:deep .reserved{
    background-color:#9f239d;
    border:0
}

:deep .accepted{
    background-color:green;
    border:0
}

.calendar-container {
  overflow: hidden;
  width: 100%;
  height: 100%;
  position: relative;
  border-radius: 10px;
}

.full-calendar {
  width: 100%;
  height: 100%;
  
}

</style>
