
<template>
    <div class="w-full px-20 flex flex-row gap-4 flex-wrap mt-10">
        <div class="w-1/5 border-2 border-gray-300 flex flex-col p-4 rounded-lg">
            <div class="flex justify-between px-5">
                <h3 class="text-lg">Coaches</h3>
                <h3 class="text-lg p-2 bg-gray-200 flex justify-center items-center rounded-full">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5781 16.8594C19.1055 17.4219 19.1055 18.3008 18.5781 18.8633C18.0156 19.3906 17.1367 19.3906 16.5742 18.8633L12.3906 14.6445C10.9492 15.5938 9.19141 16.0859 7.29297 15.8398C4.05859 15.3828 1.45703 12.7461 1.03516 9.54688C0.4375 4.76562 4.48047 0.722656 9.26172 1.32031C12.4609 1.74219 15.0977 4.34375 15.5547 7.57812C15.8008 9.47656 15.3086 11.2344 14.3594 12.6406L18.5781 16.8594ZM3.77734 8.5625C3.77734 11.0586 5.78125 13.0625 8.27734 13.0625C10.7383 13.0625 12.7773 11.0586 12.7773 8.5625C12.7773 6.10156 10.7383 4.0625 8.27734 4.0625C5.78125 4.0625 3.77734 6.10156 3.77734 8.5625Z" fill="#061534"/>
                </svg>
                </h3>

            </div>

            <div class="w-full flex flex-col gap-y-5">
                <div v-for="coach in active_coaches" class="w-full flex flex-col gap-y-5">
                    {{coach.name}}
                </div>
            </div>
        </div>


        <div class="w-[78%] gap-8 px-10 flex flex-row border-2 border-gray-300 p-4 rounded-lg flex-wrap ">
            <div class="flex flex-col font-bold border-2 border-gray-300 p-4 rounded-lg w-[30%]">
                <h1 class="text-xl w-full">
                    Hours Coached
                </h1>
                <Tabs  default-value="today" class="w-full flex justify-end flex-wrap mt-2">
                    <TabsList  class="flex flex-row gap-x-2 text-xs bg-white">
                        <TabsTrigger  value="today"  class="rounded bg-purple-200 text-purple-700 px-3 ">
                            Day
                        </TabsTrigger>
                        <TabsTrigger  value="week" class="rounded bg-sky-200 text-sky-500 px-3">
                            Week
                        </TabsTrigger>
                        <TabsTrigger  value="month" class="rounded bg-pink-200 text-pink-500 px-3">
                            Month
                        </TabsTrigger>
                    </TabsList>
                    <TabsContent value="today" class="w-full" >
                        <div class="w-full min-h-[200px] flex justify-center items-center">
                            <span class="text-3xl">
                                {{ total_hours.today }}
                            </span>
                        </div>
                    </TabsContent>
                    <TabsContent value="week" class="w-full ">
                        <div class="w-full min-h-[200px] flex justify-center items-center">
                            <span class="text-3xl">
                                {{ total_hours.week }}
                            </span>
                        </div>
                    </TabsContent>
                    <TabsContent value="month" class="w-full ">
                        <div class="w-full min-h-[200px] flex justify-center items-center">
                            <span class="text-3xl">
                                {{ total_hours.month }}
                            </span>
                        </div>
                    </TabsContent>

                </Tabs>

                <a target="_blank" class="text-xs text-sky-300 text-right" :href="route('filament.admin.resources.coach-users.index')">See All</a>


            </div>


            <div class="flex flex-col font-bold border-2 border-gray-300  rounded-lg w-[30%]">
                 <h1 class="text-xl p-4">
                    Total Users
                </h1>
                <div class="w-full h-[60%] flex justify-center items-center border-b-2">
                    <span class="text-3xl">
                        {{total_users[2] + total_users[3]}}
                    </span>
                </div>
                <div class="w-full h-[40%] flex ">
                    <div class="w-1/2 h-full relative justify-center items-center flex flex-col border-r-2 border-gray-300 px-5">
                        <h1 class="font-bold text-lg text-center">Coaches</h1>
                        <div class="w-full flex justify-center items-center">
                            {{total_users[2]}}
                        </div>
                        <a target="_blank" class="text-xs text-sky-300 absolute bottom-2 right-2  text-right mt-5 w-full" :href="route('filament.admin.resources.users.index')">See All</a>

                    </div>
                    <div class="w-1/2 h-full px-5 relative justify-center items-center flex flex-col">
                        <h1 class="font-bold text-lg text-center ">Learners</h1>
                        <div class="w-full flex justify-center items-center">
                            {{total_users[3]}}
                        </div>
                        <a target="_blank" class="text-xs absolute bottom-2 right-2  text-sky-300 text-right mt-5 w-full" :href="route('filament.admin.resources.users.index')">See All</a>

                    </div>
                </div>
            </div>

            <div class="flex flex-col font-bold border-2 border-gray-300  rounded-lg w-[30%]">
                 <h1 class="text-xl p-4">
                    Assessment
                </h1>
                <div class="w-full h-[60%] flex justify-center items-center border-b-2">
                    <span class="text-3xl">
                        {{total_assessments[2] + total_assessments[3]}}
                    </span>
                </div>
                <div class="w-full h-[40%] flex ">
                    <div class="w-1/2 h-full justify-center relative items-center flex flex-col border-r-2 border-gray-300 px-5">
                        <h1 class="font-bold text-lg text-center">Coaches</h1>
                        <div class="w-full flex justify-center items-center">
                            {{total_assessments[2]}}
                        </div>
                        <a target="_blank" class="text-xs absolute bottom-2 right-2  text-sky-300 text-right mt-5 w-full" :href="route('filament.admin.resources.assessments.index')">See All</a>

                    </div>
                    <div class="w-1/2 h-full px-5  justify-center items-center flex relative flex-col">
                        <h1 class="font-bold text-lg text-center ">Learners</h1>
                        <div class="w-full flex justify-center items-center">
                            {{total_assessments[3]}}
                        </div>
                        <a target="_blank" class=" absolute bottom-2 right-2  text-xs text-sky-300 text-right mt-5 w-full" :href="route('filament.admin.resources.assessments.index')">See All</a>

                    </div>
                </div>
            </div>

            <div class="flex flex-col font-bold border-2 border-gray-300  rounded-lg w-[66%%]">
                <h1 class="text-xl p-4">
                    Assessment
                </h1>
                <div class="w-full h-[60%] flex justify-center items-center border-b-2">
                    <span class="text-3xl">
                        {{total_assessments[2] + total_assessments[3]}}
                    </span>
                </div>
                <div class="w-full h-[40%] flex ">
                    <div class="w-1/2 h-full justify-center items-center flex flex-col border-r-2 border-gray-300 px-5">
                        <h1 class="font-bold text-lg text-center">Coaches</h1>
                        <div class="w-full flex justify-center items-center">
                            {{total_assessments[2]}}
                        </div>
                    </div>
                    <div class="w-1/2 h-full px-5  justify-center items-center flex flex-col">
                        <h1 class="font-bold text-lg text-center ">Learners</h1>
                        <div class="w-full flex justify-center items-center">
                            {{total_assessments[3]}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col font-bold border-2 border-gray-300  rounded-lg w-[33%%]">
                <h1 class="text-xl p-4">
                    Filters
                </h1>
                <GendersPieCharts
                    :chart_data="this.total_users_gender"
                />

            </div>


        </div>



    </div>

</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import GendersPieCharts from "@/Components/Charts/GendersPieCharts.vue";
import TotalTasksPie from "@/Components/Charts/TotalTasksPie.vue";
import TotalGoalsPie from "@/Components/Charts/TotalGoalsPie.vue";
import {TabsList , Tabs , TabsTrigger ,TabsContent} from "@/shadcn/ui/tabs"
import {Link} from "@inertiajs/vue3";
export default {
    name: "AdminDashboard",
    components: {TotalGoalsPie, TotalTasksPie, Tabs, GendersPieCharts, TabsTrigger, TabsContent, TabsList, Link},
    layout: MainLayout,
    props:{
        total_users:Object,
        total_users_gender:Object,
        total_assessments:Object,
        active_coaches: Array,
        total_hours: Object,

    }
}
</script>

<style scoped>

</style>
