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
                    <DialogTitle >Student Information </DialogTitle>
                </DialogHeader>
                <div class="flex flex-row justify-between w-full py-4">

                <div class="w-1/4">
                    <img :src="'/storage/' + current_student.image" alt="">
                </div>
                <div class="w-1/2 flex flex-col gap-y-5 ">
                    <p class="text-2xl font-bold"> {{current_student.first_name}} {{current_student.last_name}}</p>
                    <div class="w-full flex flex-row justify-between">
                        <Link :href="route('sessions.reject' , this.current_session_id)" class="hover:bg-white hover:text-purple-600 text-sm border-2 border-purple-600 rounded-full px-5 py-2 "> Reject</Link>
                        <Link :href="route('sessions.accept' , this.current_session_id)" class="hover:opacity-80 text-sm unify_button px-5 py-2 "> Accept </Link>

                    </div>
                </div>

                </div>
                <DialogFooter>

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
import {Link, useForm} from "@inertiajs/vue3";
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
    components: {
        Link,
        InputError, InputArea, DialogHeader, InputLabel, InputField, DialogFooter, FullCalendar, Dialog , DialogTrigger, DialogContent, DialogTitle},
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
            current_student:null,
            current_session_id:null,
            calendar_options: {
                plugins: [timeGridPlugin, interactionPlugin],
                eventClick: this.accept_or_reject,
                slotDuration:"00:30:00",
                nowIndicator:true,
                events: [],
                expandRows:true,
                heightParent : 'parent'
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
                        title: session.student.first_name + ' ' + session.student.last_name,
                        start: session.from_date,
                        end: session.to_date,
                        extendedProps:{
                            session_id: session.id,
                            current_status: session.status,
                            current_student: session.student,
                        },

                        className: this.status_class(session.status),
                    },
                )
        })
    },

    methods:{
        status_class(status){

            switch(status){
                case "r" : return "requested" ; break;
                case "s" : return "paid_successfully"; break;
                case "a" : return "accepted"; break;
            }

        },

        accept_or_reject(arg){
            if (arg.event.extendedProps.current_status === "r")
                this.calendar_view=true

            this.current_student=arg.event.extendedProps.current_student;
            this.current_session_id=arg.event.extendedProps.session_id;
        },

    }

}
</script>



<style scoped>

:deep .reserved , :deep .requested{
    background-color:#9f239d;
    border:0
}

:deep .accepted{
    background-color:blue;
    border:0
}

:deep .paid_successfully{
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
