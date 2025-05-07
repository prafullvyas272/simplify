

<template xmlns="http://www.w3.org/1999/html">
    <div class="w-full flex flex-col border-2 border-gray-300 rounded-xl px-3 gap-6 py-10">
        <div class="w-full group flex flex-row gap-6">
            <div  class="peer border-r-2  border-gray-300 mx-2 w-1/5">
                <p class="first_group w-[95%] px-2 font-bold rounded-xl py-5 mr-1 words justify-evenly text-lg  text-center" >Introduction and self understanding</p>
            </div>
            <div class="w-full flex-row flex gap-x-5">
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 first_group_always rounded-xl break-words items-center text-md font-bold text-center  justify-center flex"   >
                    <Link :href="route('assessments.single', {type: 'disc'})"> DISC Introduction </Link>
                </p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 first_group_always rounded-xl break-words items-center text-md font-bold text-center justify-center flex " >
                    <Link :href="route('assessments.single', {type: 'intro'})"> My Intro </Link>
                </p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 first_group_always rounded-xl break-words items-center text-md font-bold text-center justify-center flex" >
                    <Link :href="route('assessments.single', {type: 'desc'})"> Descriptive Words </Link>
                </p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 first_group_always rounded-xl break-words items-center text-md font-bold text-center justify-center flex" >
                    <Link :href="route('assessments.single', {type: 'strength'})"> My Strength</Link>
                    </p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 first_group_always rounded-xl break-words items-center text-md font-bold text-center justify-center flex" >
                    <Link :href="route('assessments.single', {type: 'continuum'})">Trait Continuum </Link>
                </p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 first_group_always rounded-xl break-words items-center text-md font-bold text-center justify-center flex" >
                    <Link :href="route('assessments.single', {type: 'graph'})"> My DISC Graphs </Link>
                </p>
            </div>
        </div>

        <div  class="w-full group flex flex-row gap-6">
            <div  class="peer border-r-2  border-gray-300 mx-2 w-1/5">
                <p class="second_group w-[95%] px-2 font-bold rounded-xl py-5 mr-1 words justify-evenly text-lg  text-center" >Team Dynamics and Collaboration</p>
            </div>
            <div class="w-full flex-row flex gap-x-5">
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 second_group_always rounded-xl break-words items-center text-md font-bold text-center  justify-center flex"   >
                    <Link :href="route('assessments.single', {type: 'team'})">Me On a Team </Link>
                </p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 second_group_always rounded-xl break-words items-center text-md font-bold text-center justify-center flex " >
                    <Link :href="route('assessments.single', {type: 'working'})"> Working With Me </Link>
                </p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 second_group_always rounded-xl break-words items-center text-md font-bold text-center justify-center flex" >
                    <Link :href="route('assessments.single', {type: 'other'})"> Relating To Other </Link></p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 second_group_always rounded-xl break-words items-center text-md font-bold text-center justify-center flex" >
                    <Link :href="route('assessments.single', {type: 'reading'})">Reading Others </Link></p>
            </div>
        </div>
        <div  class="w-full group flex flex-row gap-6">
            <div  class="peer border-r-2  border-gray-300 mx-2 w-1/5">
                <p class="third_group w-[95%] px-2 font-bold rounded-xl py-5 mr-1 words justify-evenly text-lg  text-center" >Communication and Interaction Styles</p>
            </div>
            <div class="w-full flex-row flex gap-x-5">
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 third_group_always rounded-xl break-words items-center text-sm font-bold text-center justify-center flex"  >
                    <Link :href="route('assessments.single', {type: 'motivation-style'})"> Basic Motivator Style </Link>
                </p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 third_group_always rounded-xl break-words items-center text-sm font-bold text-center justify-center flex" >
                    <Link :href="route('assessments.single', {type: 'com-style'})"> Communication Style </Link>
                </p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 third_group_always rounded-xl break-words items-center text-sm font-bold text-center justify-center flex" >
                    <Link :href="route('assessments.single', {type: 'priorities'})"> Priorities and Decisions Style </Link>
                </p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 third_group_always rounded-xl break-words items-center text-sm font-bold text-center justify-center flex" >
                    <Link :href="route('assessments.single', {type: 'emphasize'})"> What to Emphasize with Each Style </Link></p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 third_group_always rounded-xl break-words items-center text-sm font-bold text-center justify-center flex" >
                    <Link :href="route('assessments.single', {type: 'com-tips'})"> Communication Tips </Link></p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 third_group_always rounded-xl break-words items-center text-sm font-bold text-center justify-center flex" >
                    <Link :href="route('assessments.single', {type: 'perception'})"> Perceptions of Each Style </Link></p>
            </div>
        </div>
        <div  class="w-full group flex flex-row gap-6">
            <div  class="peer border-r-2  border-gray-300 mx-2 w-1/5">
                <p  class="fourth_group w-[95%] px-2 font-bold rounded-xl py-5 mr-1 words justify-evenly text-lg  text-center" >Professional Growth and Success</p>
            </div>
            <div class="w-full flex-row flex gap-x-5">
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 fourth_group_always rounded-xl break-words items-center text-sm font-bold text-center justify-center flex"  >
                    <Link :href="route('assessments.single', {type: 'excel'})"> Keys to Excellence</Link>
                </p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 fourth_group_always rounded-xl break-words items-center text-sm font-bold text-center justify-center flex" >
                    <Link :href="route('assessments.single', {type: 'growth'})"> Insights for Professional Growth </Link>
                </p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 fourth_group_always rounded-xl break-words items-center text-sm font-bold text-center justify-center flex" >
                    <Link :href="route('assessments.single', {type: 'leadership'})"> Leadership Insights </Link></p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 fourth_group_always rounded-xl break-words items-center text-sm font-bold text-center justify-center flex" >
                    <Link :href="route('assessments.single', {type: 'sales'})"> Success in Sales </Link></p>
                <p class="max-w-[15%] min-h-[120px] w-1/6 py-5 fourth_group_always rounded-xl break-words items-center text-sm font-bold text-center justify-center flex" >3 Tips to Remember</p>
            </div>
        </div>

    </div>
</template>

<script>
import UserLayout from "@/Layouts/UserLayout.vue";
import {Link} from "@inertiajs/vue3";
export default {
    name: "AssessmentsSingle",
    layout: UserLayout,
    components:{Link},

}
</script>

<style scoped>
.first_group:hover, .first_group_always {
    background: linear-gradient(180deg, #FFEFBE 0%, #FFA1E7 105.8%)
}

.second_group:hover, .second_group_always {
    background: linear-gradient(180deg, #97F8FF 0%, #CE97FF 105.8%);
}

.third_group:hover, .third_group_always {
    background: linear-gradient(180deg, #FF92E3 0%, #4DF3FF 100%);
}

.fourth_group:hover, .fourth_group_always {
    background: linear-gradient(180deg, #C585FF 0%, #6899FF 100%);

}
</style>
