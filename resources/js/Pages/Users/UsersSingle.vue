
<template>

    <div class="w-full px-20 flex flex-col gap-4 flex-wrap mt-10 ">
        <div class="w-full rounded-xl border-2 border-gray-300 h-40 flex justify-center items-center">
            <div class="w-1/3 flex ps-20  justify-evenly items-center py-5">
                <div class="w-1/3 flex">
                    <img class="rounded-full w-24 h-24" :src="'/storage/'+ user.image" alt="">
                </div>
                <div class="w-2/3 pl-10">
                    <div class="text-xl font-bold">
                        {{this.user.first_name}} {{this.user.last_name}} <span class="text-blue-300">{{this.user.assessment?.type.slice(0,1)}}</span><span class="text-pink-400">{{this.user.assessment?.type.slice(1)}}</span>
                    </div>
                    <div class="text-md" >
                        {{this.user.country.name}}
                    </div>
                </div>
            </div>

            <div class="w-2/3 flex px-20 justify-start items-center py-5">
                <div class="w-full flex flex-row gap-6 justify-center items-center">
                    <!-- <h2 class="text-md mr-10">
                       Best Coach Match:
                    </h2> -->
                        <div v-for="coach in this.best_coaches" class="max-w-16 grid columns-4 gap-y-2" >
                            <img class="rounded-full w-12 h-12 mx-auto" :src="'/storage/' + coach.coach_image" alt="">
                            <!-- <Link :href="route('users.show_coach', coach.coach_id)" class="unify_button text-center text-[10px] py-0 w-16 h-5">Request</Link> -->
                        </div>
                </div>
            </div>
        </div>

        <div class="w-full h-12 mt-5">
            <h1 class="text-4xl font-bold">
                About
            </h1>
        </div>

        <section  class="w-full ">
                <div id="main_element" class="w-full px-[5%] py-[2%] rounded-xl flex items-center  border-2 border-gray-300">
                    <div class="w-full relative py-[5%]">
                        <svg width="w-full" viewBox="0 0 1251 377" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 368.5H188.5V143.5H416.5V270.5H636V8H914.5V248.5H1162.5V82.5H1242.5" stroke="url(#paint0_linear_878_248)" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"/>
                            <defs>
                                <linearGradient id="paint0_linear_878_248" x1="8" y1="188.25" x2="1242.5" y2="188.25" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FFD964"/>
                                    <stop offset="0.229" stop-color="#FB23C4"/>
                                    <stop offset="0.484" stop-color="#9645DF"/>
                                    <stop offset="0.744" stop-color="#061534"/>
                                    <stop offset="1" stop-color="#19D3E0"/>
                                </linearGradient>
                                asdasd
                            </defs>
                        </svg>


<!-- First Career-->
                        <div class="w-[5%] aspect-square bg-[#ffffff87] shadow-lg  rounded-full flex items-center justify-center absolute left-[12.5%] top-[55%]" @mouseover="hoveredCareer = 0" @mouseleave="hoveredCareer = null">
                            <div class="w-1/2 aspect-square bg-white  z-10 rounded-full"></div>

                        </div>
                        <div class="bg-[#FFD964] px-4 py-2 rounded-full text-black absolute text-xs mt-20 left-[10%] top-[55%]" @mouseover="hoveredCareer = 0" @mouseleave="hoveredCareer = null">
                            {{this.user.data.career_roadmap[0].career_name}}
                        </div>
                        <transition name="fade">
                            <div v-if="hoveredCareer === 0" class=" bg-white max-h-[30%] text-xs max-w-[15%] px-4 py-2  text-black absolute  left-[-5%] top-[45%]">
                                {{this.user.data.career_roadmap[0].description}}
                            </div>
                        </transition>

<!-- Second Career-->
                        <div @mouseover="hoveredCareer = 1" @mouseleave="hoveredCareer = null" class="w-[5%] aspect-square bg-[#ffffff87] shadow-lg  rounded-full flex items-center justify-center absolute left-[22%] top-[35%]">
                            <div class="w-1/2 aspect-square bg-white  z-10 rounded-full"></div>
                        </div>
                        <div @mouseover="hoveredCareer = 1" @mouseleave="hoveredCareer = null" class="bg-[#FB23C4] px-4 py-2 rounded-full text-black absolute text-xs left-[19%] top-[23%]">
                            {{this.user.data.career_roadmap[1].career_name}}
                        </div>
                        <transition name="fade">
                            <div v-if="hoveredCareer === 1" class=" bg-white max-h-[30%] text-xs max-w-[20%] px-4 py-2  text-black absolute  left-[24%] top-[53%]">
                                {{this.user.data.career_roadmap[1].description}}
                            </div>
                        </transition>

<!-- Third Career-->


                        <div @mouseover="hoveredCareer = 2" @mouseleave="hoveredCareer = null" class="w-[5%] aspect-square bg-[#ffffff87] shadow-lg  rounded-full flex items-center justify-center absolute left-[48.5%] top-[30%]">
                            <div class="w-1/2 aspect-square bg-white  z-10 rounded-full"></div>
                        </div>
                        <div @mouseover="hoveredCareer = 2" @mouseleave="hoveredCareer = null" class="bg-[#FB23C4] px-4 py-2 rounded-full text-black absolute text-xs mt-20 mx-auto left-[51%] top-[30%]" style="transform: translateX(-50%);">
                            {{this.user.data.career_roadmap[2].career_name}}
                        </div>
                        <transition name="fade">
                            <div  v-if="hoveredCareer === 2" class=" bg-white max-h-[30%] text-xs max-w-[20%] px-4 py-2 text-black absolute left-[50%] top-[0%]" style="transform: translateX(-50%);">
                                {{this.user.data.career_roadmap[2].description}}
                            </div> 
                        </transition>
<!-- Fourth Career-->
                        <div @mouseover="hoveredCareer = 3" @mouseleave="hoveredCareer = null" class="w-[5%] aspect-square bg-[#ffffff87] shadow-lg  rounded-full flex items-center justify-center absolute left-[70.5%] top-[30%]">
                            <div class="w-1/2 aspect-square bg-white  z-10 rounded-full"></div>
                        </div>
                        <div @mouseover="hoveredCareer = 3" @mouseleave="hoveredCareer = null" class="bg-[#9645DF] px-4 py-2 rounded-full text-black absolute text-xs  mx-auto left-[73.5%] top-[15%]" style="transform: translateX(-50%);">
                            {{this.user.data.career_roadmap[3].career_name}}
                        </div>
                        <transition name="fade">
                            <div  v-if="hoveredCareer === 3" class=" bg-white max-h-[30%] text-xs max-w-[20%] px-4 py-2 mt-20 text-black absolute left-[73.5%] top-[30%]" style="transform: translateX(-50%);">
                                {{this.user.data.career_roadmap[3].description}}
                            </div>
                        </transition>
<!-- Fifth Career-->


                        <div @mouseover="hoveredCareer = 4" @mouseleave="hoveredCareer = null" class="w-[5%] aspect-square bg-[#ffffff87] shadow-lg  rounded-full flex items-center justify-center absolute left-[90.5%] top-[22%]">
                            <div class="w-1/2 aspect-square bg-white  z-10 rounded-full"></div>
                        </div>
                        <div @mouseover="hoveredCareer = 4" @mouseleave="hoveredCareer = null" class="bg-[#19D3E0] px-4 py-2 rounded-full text-black absolute text-xs  mx-auto left-[92.5%] min-w-[12%] top-[13%]" style="transform: translateX(-50%);">
                            {{this.user.data.career_roadmap[4].career_name}}
                        </div>
                        <transition name="fade">
                            <div  v-if="hoveredCareer === 4" class=" bg-white max-h-[30%] text-xs max-w-[20%] px-4 py-2 mt-20 text-black absolute left-[92.5%] min-w-[15%] top-[22%]" style="transform: translateX(-50%);">
                                {{this.user.data.career_roadmap[4].description}}
                            </div>
                        </transition>
                    </div>
                </div>
        </section>

    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import {Link} from "@inertiajs/vue3";
import {Button} from "@/shadcn/ui/button/index.js";
import job_levels from "@/Helpers/JobLevels.js";
export default {
    name: "UsersSingle",
    layout:MainLayout,
    components: {Button, Link},
    props:{
        user:Object,
        best_coaches:Array,
    },
    data(){
        return {
            job_levels:job_levels,
            main_element: null,
            first_ball:null,
            second_ball:null,
            third_ball:null,
            fourth_ball:null,
            fifth_ball:null,
            hoveredCareer: null,
        }
    },

    methods: {
        animate_first(){
            this.first_ball.style.top= 15.6 * this.main_element.style.height+"px";
            this.first_ball.style.left= 20 * this.main_element.style.width+"px";
        },
        current_age(){
            var today = new Date();
            var birthDate = new Date(this.user.birthday);
            var age = today.getFullYear() - birthDate.getFullYear();
            var month = today.getMonth() - birthDate.getMonth();
            if (month < 0 || (month === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            return age;
        }
    },
    mounted() {
        this.main_element = document.getElementById("main_element");
        this.first_ball= document.getElementById("first_ball")
        this.second_ball= document.getElementById("second_ball")
        this.third_ball= document.getElementById("third_ball")
        this.fourth_ball= document.getElementById("fourth_ball")
        this.fifth_ball= document.getElementById("fifth_ball")
    }
}
</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
  opacity: 0;
}
</style>
