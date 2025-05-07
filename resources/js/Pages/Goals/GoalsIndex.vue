<template>
    <div class="w-full flex flex-row border-2 border-gray-300 rounded">
        <div class="w-2/3 flex flex-row flex-wrap ">
            <div class="w-1/2 flex flex-col p-5">
                <h1 class="font-semibold text-xl my-5">
                    Goals And Tasks
                </h1>
                <div class="w-full border-2 border-gray-300 p-4 rounded-xl">
                    <Tabs  default-value="goals" class="w-full flex justify-end flex-wrap ">
                        <TabsList  class=" absolute bg-white active:bg-none p-[1px] border-2 border-gray-300 rounded-full">
                            <TabsTrigger  value="goals"  class="data-[state=active]:!bg-purple-700 data-[state=active]:!text-white data-[state=active]:rounded-full  text-purple-700 rounded-r-full">
                                Goals
                            </TabsTrigger>
                            <TabsTrigger  value="tasks" class="data-[state=active]:!bg-purple-700  data-[state=active]:!text-white data-[state=active]:rounded-full text-purple-700 rounded-r-full">
                                Tasks
                            </TabsTrigger>
                        </TabsList>
                        <TabsContent value="goals" class="w-full " >
                               <TotalGoalsPie
                                   :goals="goals"
                                   :goals_statuses="this.goals_statuses"
                               />
                        </TabsContent>
                        <TabsContent value="tasks"  class="w-full " >
                                <TotalTasksPie
                                    :tasks="tasks"
                                    :tasks_statuses="this.goals_statuses"/>

                        </TabsContent>


                    </Tabs>
                </div>

            </div>

            <div class="w-1/2 p-5">
                    <Calendar v-model="date" class="rounded-md border " >
                        <template #footer >

                            <div class="w-full flex justify-between mt-5">
                                <AddTask @task_added="this.prepare_data" />
                                <AddGoal @goal_added="this.prepare_data " />
                            </div>

                        </template>
                    </Calendar>

            </div>

            <h1 class="w-full text-3xl font-bold pl-5">Goals</h1>

            <div class="w-full p-5">
                <Tabs  default-value="in_progress" class="w-full ">
                    <TabsList  class="bg-white  active:bg-none">
                        <TabsTrigger  value="in_progress" class="focus:pb-4 focus:-mt-2 !bg-[#FB23C4] text-lg  rounded-t-md rounded-b-none !text-white font-bold">
                            In-Progress
                        </TabsTrigger>
                        <TabsTrigger  value="upcoming"  class="focus:pb-4 focus:-mt-2 !bg-[#9645DF] text-lg rounded-t-md rounded-b-none !text-white font-bold ">
                            UpComing
                        </TabsTrigger>
                        <TabsTrigger  value="completed" class="focus:pb-4 focus:-mt-2 !bg-[#19D3E0] text-lg  rounded-t-md rounded-b-none !text-white font-bold">
                            Complete
                        </TabsTrigger>
                    </TabsList>

                    <TabsContent value="in_progress" >
                        <div class="w-full -mt-2 rounded-md p-5 flex-wrap  border-2 border-gray-300  flex-col  justify-start items-center ">
                            <div class="w-full mb-2 " v-for="(goal) in in_progress_goals" >
                                <Link :href="route('goals.show' , goal.id)">
                                    <div class="w-full  px-5 flex flex-row justify-center items-center rounded-lg h-24 bg-amber-300">
                                            <div class="w-1/4 break-words text-lg font-bold">{{goal.name}}</div>
                                            <div class="w-1/2">
                                                <progress   :value="goal.task_percent" max="100" class="w-[80%] rounded-full max-h-2 mr-2" style="" />{{goal.task_percent }}%
                                            </div>
                                            <div class="w-1/4 break-words text-xl">
                                                <svg class="m-auto" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.85736 10V18H11.8574V10H19.8547V8H11.8574V0H9.85736V8H0.912842V10H9.85736Z" fill="#061534"/>
                                                </svg>
                                            </div>
                                    </div>
                                </Link>
                            </div>
                        </div>
                    </TabsContent>
                    <TabsContent value="upcoming" >
                        <div class="w-full -mt-2 rounded-md p-5 flex-wrap  border-2 border-gray-300  flex-col  justify-start items-center ">

                            <div class="w-full mb-2 " v-for="(goal) in upcoming_goals" >
                                <Link :href="route('goals.show' , goal.id)">
                                    <div class="w-full  px-5 flex flex-row justify-center items-center rounded-lg h-24 bg-amber-300">
                                        <div class="w-1/4 break-words text-lg font-bold">{{goal.name}}</div>
                                        <div class="w-1/2">
                                            <progress   :value="goal.task_percent" max="100" class="w-[80%] rounded-full max-h-2 mr-2" style="" />  {{goal.task_percent}}%
                                        </div>
                                        <div class="w-1/4 break-words text-xl">
                                            <svg class="m-auto" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.85736 10V18H11.8574V10H19.8547V8H11.8574V0H9.85736V8H0.912842V10H9.85736Z" fill="#061534"/>
                                            </svg>
                                        </div>

                                    </div>
                                </Link>
                            </div>

                        </div>
                    </TabsContent>
                    <TabsContent value="completed" >
                        <div class="w-full -mt-2 rounded-md p-5 flex-wrap  border-2 border-gray-300  flex-col  justify-start items-center ">
                            <div class="w-full mb-2 " v-for="(goal) in completed_goals" >
                                <Link :href="route('goals.show' , goal.id)">
                                    <div class="w-full  px-5 flex flex-row justify-center items-center rounded-lg h-24 bg-amber-300">
                                        <div class="w-1/4 break-words text-lg font-bold">{{goal.name}}</div>
                                        <div class="w-1/2">
                                            <progress   :value="goal.task_percent" max="100" class="w-[80%] rounded-full max-h-2 mr-2" style="" /> {{goal.task_percent}}%
                                        </div>
                                        <div class="w-1/4 break-words text-xl">
                                            <svg class="m-auto" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.85736 10V18H11.8574V10H19.8547V8H11.8574V0H9.85736V8H0.912842V10H9.85736Z" fill="#061534"/>
                                            </svg>
                                        </div>

                                    </div>
                                </Link>
                            </div>
                        </div>
                    </TabsContent>


                </Tabs>

            </div>
        </div>

        <div class="w-1/3 border-l border-gray-300 my-4  px-4 flex flex-col">
            <h1 class="text-3xl"> Tasks</h1>
            <h1 class="text-xl mt-3"> Upcoming </h1>

            <div class="w-full mt-10">
                <UpcomingTaskCard
                    v-for="task in upcoming_tasks"
                    :task="task"
                />
                <Link class="text-center mt-3 m-auto w-full block text-gray-500" :href="route('tasks.index')"> See All </Link>

                <div class="w-full">
                    <h1 class="text-3xl"> Assigned </h1>
                    <div class="w-full mt-10">
                        <UpcomingTaskCard
                            v-for="task in in_progress_tasks"
                            :task="task"
                        />
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
import {Link, router} from '@inertiajs/vue3';
import TabsList from "@/shadcn/ui/tabs/TabsList.vue";
import Tabs from "@/shadcn/ui/tabs/Tabs.vue";
import TabsContent from "@/shadcn/ui/tabs/TabsContent.vue";
import TabsTrigger from "@/shadcn/ui/tabs/TabsTrigger.vue";
import CoachLayout from "@/Layouts/SimplifyLayout.vue";
import TotalGoalsPie from "@/Components/Charts/TotalGoalsPie.vue";
import TotalTasksPie from "@/Components/Charts/TotalTasksPie.vue";

export default {
    name: "GoalsIndex",
    layout: CoachLayout,
    components: {
        TotalTasksPie, TotalGoalsPie, Tabs, UpcomingTaskCard,
        AddTask, AddGoal, Calendar, Link, TabsTrigger, TabsContent,
        TabsList},
    props: {
        goals: Object,
        tasks:Object,

    },
    data(){
        return {
            date: new Date(),
            goals_statuses: goals_statuses,
            upcoming_tasks:null,
            in_progress_tasks:null,
            upcoming_goals:[],
            completed_goals:[],
            in_progress_goals:[],

        }
    },

    methods:{
        prepare_data(){
            this.upcoming_goals=[]
            this.completed_goals=[]
            this.in_progress_goals=[]
            this.upcoming_tasks=[]
            this.in_progress_tasks=[]

            for (const [key, value] of Object.entries(this.goals)) {
                var completed=0;
                var total=0;

                value.tasks.forEach((task)=>{
                    total+=1
                    if (task.status==="c")
                        completed+=1
                })

                value["task_percent"]= (total) ?  (completed/total) * 100: 0 ;

                switch(value.status){
                    case 'u':this.upcoming_goals.push(value);break;
                    case 'c': this.completed_goals.push(value);break;
                    case 'i': this.in_progress_goals.push(value);break;
                }
            }

            axios.get(route("tasks.upcoming"))
                .then((response) => {
                    this.upcoming_tasks=response.data
                })
            axios.get(route("tasks.in_progress"))
                .then((response) => {
                    this.in_progress_tasks=response.data
                })
        }
    },
    async mounted() {
        this.prepare_data()

    },

}
</script>

<style scoped>

progress::-moz-progress-bar { background: #19D3E0; }
progress::-webkit-progress-value { background: #19D3E0; }
progress { color: #19D3E0; }
</style>
