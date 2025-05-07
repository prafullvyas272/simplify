<template>

    <div class="w-full border-2 border-gray-300 rounded-l-xl p-5">
        <h1 class="w-full text-3xl">All Up Coming Tasks</h1>
        <div class="w-full flex flex-wrap gap-6 flex-row mt-10 px-5">
            <div  v-for="(task,index) in this.tasks" class="w-[45%]  gap-5 flex flex-wrap  ">
                <div  class="rounded-2xl w-full border-2 border-gray-300 flex  flex-row">
                    <div class="w-3/4 flex flex-col p-5">
                        <span class="text-white max-w-[100px] text-center"  :class="card_status(task?.status)">{{goals_statuses.get_name(task?.status)}} </span>
                        <h1 class="w-full text-2xl font-bold">
                            {{task?.name}}
                        </h1>
                        <p class="w-full text-xs">
                            {{task?.description}}
                        </p>
                    </div>
                    <div class="w-1/4 flex flex-col  py-5">
                        <span>  {{ Math.floor((new Date() - new Date(task?.created_at)) / (1000 * 60 * 60 * 24))}} Days Ago</span>
                        <Button  class="hover:bg-purple-600 hover:text-white mt-5 mr-2 border-purple-600 shadow-none rounded-full text-purple-700" variant="outline">View Details</Button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import UserLayout from "@/Layouts/UserLayout.vue";
import goals_statuses from "@/Helpers/GoalsStatuses.js";
import {Button} from "@/shadcn/ui/button/index.js";
import CoachLayout from "@/Layouts/SimplifyLayout.vue";
export default {
    name: "TasksIndex",
    components: {Button},
    // layout:UserLayout,
    layout: CoachLayout,
    props:{
        tasks: Array
    },
    data(){
        return{
            goals_statuses:goals_statuses,
            filtered_goal:null
        }
    },
    methods:{
        card_status(status){

            switch(status){
                case "i": return 'bg-indigo-200 text-indigo-500';
                case "u": return 'bg-pink-200 text-pink-500';
                case "c": return  'bg-sky-200 text-sky-500';
            }
        },

    }
}
</script>

<style scoped>

</style>
