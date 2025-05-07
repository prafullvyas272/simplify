<template>
    <div class="w-full flex flex-row border-2 border-gray-300 rounded flex-wrap pb-10">
            <div class="w-full flex flex-row justify-between p-5">
                <h1 class="font-semibold text-xl my-5">
                    My Journal
                </h1>

                <AddTask/>
                <AddGoal/>
                <AddNote/>

            </div>


        <div class="w-full flex flex-wrap gap-6 flex-row mt-10 px-5">
            <div  v-for="(note,index) in this.notes" class="w-[45%]  gap-5 flex flex-wrap  ">
                <div  class="rounded-2xl w-full border-2 border-gray-300 flex  flex-row">
                    <div class="w-3/4 flex flex-col p-5">
                        <h1 class="w-full text-2xl font-bold">
                            {{note.note}}
                        </h1>
                        <p class="w-full text-xs">
                            {{note.coach_user.coach.name}}
                        </p>
                    </div>
                    <div class="w-1/4 flex flex-col  py-5">
                    </div>
                </div>
            </div>
        </div>



    </div>
</template>
<script>
import goals_statuses from "@/Helpers/GoalsStatuses.js";
import Calendar from   "@/shadcn/ui/calendar/Calendar.vue"
import AddGoal from "@/Components/Goals/AddGoal.vue";
import AddTask from "@/Components/Tasks/AddTask.vue";
import UpcomingTaskCard from "@/Components/Tasks/UpcomingTaskCard.vue";
import { Link } from '@inertiajs/vue3';
import TabsList from "@/shadcn/ui/tabs/TabsList.vue";
import Tabs from "@/shadcn/ui/tabs/Tabs.vue";
import TabsContent from "@/shadcn/ui/tabs/TabsContent.vue";
import TabsTrigger from "@/shadcn/ui/tabs/TabsTrigger.vue";
import CoachLayout from "@/Layouts/SimplifyLayout.vue";
import TotalGoalsPie from "@/Components/Charts/TotalGoalsPie.vue";
import TotalTasksPie from "@/Components/Charts/TotalTasksPie.vue";
import AddNote from "@/Components/Notes/AddNote.vue";

export default {
    name: "NotesIndex",
    layout: CoachLayout,
    components: {
        AddNote,
        TotalTasksPie, TotalGoalsPie, Tabs, UpcomingTaskCard,
        AddTask, AddGoal, Calendar, Link, TabsTrigger, TabsContent,
        TabsList},
    props: {
        goals: Object,
        tasks:Object,
        notes:Object,

    },

}
</script>

<style scoped>

progress::-moz-progress-bar { background: #19D3E0; }
progress::-webkit-progress-value { background: #19D3E0; }
progress { color: #19D3E0; }
</style>
