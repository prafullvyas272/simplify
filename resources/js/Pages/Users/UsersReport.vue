

<template>
    <div class="w-full flex flex-col border-2 border-gray-300 rounded-xl px-3 gap-6 py-10">
        <div @mouseleave="open_1=false" class="w-full group flex flex-row gap-6">
            <div  class="peer border-r-2  border-gray-300 mx-2 w-1/5">
                <p @mouseenter="open_1=true;" class="first_group w-[95%] px-2 font-bold rounded-xl py-5 mr-1 words justify-evenly text-lg  text-center" >Introduction and self understanding</p>
            </div>
            <div class="w-full flex-row flex gap-x-5">
                <p class="invisible w-1/6 py-5 first_group_always rounded-xl break-words items-center text-lg text-center  justify-center flex"  :class="{'!visible': open_1}" > DISC Introduction</p>
                <p class="invisible w-1/6 py-5 first_group_always rounded-xl break-words items-center text-lg text-center justify-center flex " :class="{'!visible': open_1}">My Intro</p>
                <p class="invisible w-1/6 py-5 first_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_1}">Descriptive Words</p>
                <p class="invisible w-1/6 py-5 first_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_1}">My Strength</p>
                <p class="invisible w-1/6 py-5 first_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_1}">Trait Continuum</p>
                <p class="invisible w-1/6 py-5 first_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_1}">My DISC Graphs</p>
            </div>
        </div>

        <div @mouseleave="open_2=false" class="w-full group flex flex-row gap-6">
            <div  class="peer border-r-2  border-gray-300 mx-2 w-1/5">
                <p @mouseenter="open_2=true;" class="second_group w-[95%] px-2 font-bold rounded-xl py-5 mr-1 words justify-evenly text-lg  text-center" >Team Dynamics and Collaboration</p>
            </div>
            <div class="w-full flex-row flex gap-x-5">
                <p class="invisible w-1/6 py-5 second_group_always rounded-xl break-words items-center text-lg text-center  justify-center flex"  :class="{'!visible': open_2}" > Me On a Team</p>
                <p class="invisible w-1/6 py-5 second_group_always rounded-xl break-words items-center text-lg text-center justify-center flex " :class="{'!visible': open_2}">Working With Me</p>
                <p class="invisible w-1/6 py-5 second_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_2}">Relating To Other</p>
                <p class="invisible w-1/6 py-5 second_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_2}">Reading Others</p>
            </div>
        </div>
        <div @mouseleave="open_3=false" class="w-full group flex flex-row gap-6">
            <div  class="peer border-r-2  border-gray-300 mx-2 w-1/5">
                <p @mouseenter="open_3=true;" class="third_group w-[95%] px-2 font-bold rounded-xl py-5 mr-1 words justify-evenly text-lg  text-center" >Communication and Interaction Styles</p>
            </div>
            <div class="w-full flex-row flex gap-x-5">
                <p class="invisible w-1/6 py-5 third_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_3}" > Basic Motivator Style</p>
                <p class="invisible w-1/6 py-5 third_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_3}">Communication Style</p>
                <p class="invisible w-1/6 py-5 third_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_3}">Priorities and Decisions Style</p>
                <p class="invisible w-1/6 py-5 third_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_3}">What to Emphasize with Each Style</p>
                <p class="invisible w-1/6 py-5 third_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_3}">Communication Tips</p>
                <p class="invisible w-1/6 py-5 third_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_3}">Perceptions of Each Style</p>
            </div>
        </div>
        <div @mouseleave="open_4=false" class="w-full group flex flex-row gap-6">
            <div  class="peer border-r-2  border-gray-300 mx-2 w-1/5">
                <p @mouseenter="open_4=true;" class="fourth_group w-[95%] px-2 font-bold rounded-xl py-5 mr-1 words justify-evenly text-lg  text-center" >Professional Growth and Success</p>
            </div>
            <div class="w-full flex-row flex gap-x-5">
                <p class="invisible w-1/6 py-5 fourth_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_4}" > Keys to Excellence</p>
                <p class="invisible w-1/6 py-5 fourth_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_4}">Insights for Professional Growth</p>
                <p class="invisible w-1/6 py-5 fourth_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_4}">Leadership Insights</p>
                <p class="invisible w-1/6 py-5 fourth_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_4}">Success in Sales</p>
                <p class="invisible w-1/6 py-5 fourth_group_always rounded-xl break-words items-center text-lg text-center justify-center flex" :class="{'!visible': open_4}">3 Tips to Remember</p>
            </div>
        </div>

    </div>
</template>

<script>
import UserLayout from "@/Layouts/UserLayout.vue";

export default {
    name: "UsersReport",
    layout: UserLayout,
    data(){
        return {
            open_1:false,
            open_2:false,
            open_3:false,
            open_4:false,
            open_5:false,
        }
    }

}
</script>

<style scoped>
    .first_group:hover, .first_group_always{
        background :linear-gradient(180deg, #FFEFBE 0%, #FFA1E7 105.8%)
    }

    .second_group:hover, .second_group_always{
        background: linear-gradient(180deg, #97F8FF 0%, #CE97FF 105.8%);
    }

    .third_group:hover, .third_group_always{
        background: linear-gradient(180deg, #FF92E3 0%, #4DF3FF 100%);
    }

    .fourth_group:hover, .fourth_group_always{
        background: linear-gradient(180deg, #C585FF 0%, #6899FF 100%);

    }
</style>
