<template>

    <div class="w-full border-2 border-gray-300 rounded-l-xl p-5">
        <h1 class="w-full text-3xl">Session Summary</h1>
        <div class="w-full flex flex-row mt-10 px-5 flex-wrap">
            <div class="w-1/2">
                <h2 class="text-2xl font-bold">Tasks</h2>
                <section  class="w-full flex p-5 flex-col gap-6">
                    <template v-for="(goal,index) in this.coach_user.goals" >
                        <template v-if="goal.tasks && ((this.filtered_goal === goal.id && this.filtered_goal) || !this.filtered_goal) " v-for="task in goal.tasks" >
                            <div class="rounded-2xl w-full border-2 border-gray-300 flex  flex-row">
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
                        </template>
                    </template>
                </section>




            </div>

            <div class="w-1/2">
                <h2 class="text-2xl font-bold">Goals</h2>
                <div class="w-full flex p-5 flex-col gap-6">
                    <div v-for="goal in this.coach_user.goals" class="rounded-2xl w-full border-2 border-gray-300 flex  flex-row">
                        <div class="w-3/4 flex flex-col p-5">
                            <span class="text-white max-w-[100px] text-center"  :class="card_status(goal.status)">  {{goals_statuses.get_name(goal.status)}} </span>
                            <h1 class="w-full text-2xl font-bold">
                                {{goal.name}}
                            </h1>
                            <p class="w-full text-xs">
                                {{goal.description}}
                            </p>
                        </div>
                        <div class="w-1/4 flex flex-col  py-5">
                            <span> {{ Math.floor((new Date() - new Date(goal.created_at)) / (1000 * 60 * 60 * 24))}} Days Ago</span>
                            <Button @click="set_filter_goal(goal.id)" class="hover:bg-purple-600 hover:text-white mt-5 mr-2 border-purple-600 shadow-none rounded-full text-purple-700" variant="outline">Filter Tasks</Button>
                        </div>
                    </div>
                </div>
            </div>



            <section class="w-full">
                <h1 class="text-2xl font-bold">Notes</h1>
                <div class="w-full flex flex-wrap gap-6 flex-row mt-10 ">
                    <div  v-for="(note,index) in this.coach_user.notes" class="w-[45%]  gap-5 flex flex-wrap  ">
                        <div  class="rounded-2xl w-full border-2 border-gray-300 flex  flex-row">
                            <div class="w-3/4 flex flex-col p-5">
                                <h1 class="w-full text-2xl font-bold">
                                    {{note.note}}
                                </h1>
                            </div>
                            <div class="w-1/4 flex flex-col  py-5">
                            </div>
                        </div>
                    </div>
                </div>


            </section>

        </div>
    </div>
</template>

<script>
import UserLayout from "@/Layouts/UserLayout.vue";
import CoachLayout from "@/Layouts/SimplifyLayout.vue";
import goals_statuses from "@/Helpers/GoalsStatuses.js";
import {Button} from "@/shadcn/ui/button/index.js";
export default {
    name: "CoachUsersSingle",
    components: {Button},
    layout:CoachLayout,
    props:{
        coach_user: Object
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
        set_filter_goal(goal){
            this.filtered_goal=goal
        }
    }
}
</script>

<style scoped>

</style>
