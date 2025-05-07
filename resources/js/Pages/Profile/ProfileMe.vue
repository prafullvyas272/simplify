

<template>
    <div class="w-full flex flex-row border-2 border-gray-300 rounded-xl px-3 gap-6 py-10">
        <div class="w-1/4 border-2 border-gray-300 flex flex-col  rounded-2xl pt-5">
            <div class="w-40 h-40 flex justify-center items-end bg-blue-400 rounded-full m-auto mt-5 mb-5" >
                <img 
                    :src="'/storage/' + this.user.image" 
                    @error="$event.target.src='/images/default/placeholder.png'" 
                    class="rounded-full object-top object-cover w-36 h-36" 
                    alt="User Profile"
                    />

            </div>
            <div class="w-full mt-1 text-center border-gray-300  font-bold text-3xl">
                <span class="text-blue-300">{{this.user.assessment && this.user.assessment.type && this.user.assessment.type.slice(0,1)}}</span><span class="text-pink-400">{{this.user.assessment && this.user.assessment.type && this.user.assessment.type.slice(1)}}</span>
            </div>
            <div class="w-full break-words text-xl text-center font-bold">
                {{this.user.first_name}} {{this.user.last_name}}
            </div>

            <div class="w-full flex flex-row justify-center text-sm flex-wrap items-center">
                <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.9375 12.2188C2.71875 10.6953 0 7.0625 0 5C0 2.51562 1.99219 0.5 4.5 0.5C6.98438 0.5 9 2.51562 9 5C9 7.0625 6.25781 10.6953 5.03906 12.2188C4.75781 12.5703 4.21875 12.5703 3.9375 12.2188ZM4.5 6.5C5.32031 6.5 6 5.84375 6 5C6 4.17969 5.32031 3.5 4.5 3.5C3.65625 3.5 3 4.17969 3 5C3 5.84375 3.65625 6.5 4.5 6.5Z" fill="#19D3E0"/>
                </svg>
                <span class=" ml-2 font-bold">{{ this.user.country.name }}</span>
            </div>

            <div class="w-full flex flex-row flex-center mt-2 justify-evenly items-center text-center" >
                <div class="w-[30%]">
                    <p class="font-bold text-sm">{{current_age()}}</p>
                    <p class="text-xs">Age</p>
                    </div>
                <div class="w-[30%]">
                    <p class="font-bold text-sm">{{ this.user.country.name }}</p>
                    <p class="text-xs">Nationality</p>
                </div>
                <div class="w-[30%]">
                    <p class="font-bold">{{current_experiences.get_name(this.user.data.current_exp)}}</p>
                    <p class="text-xs">Experience</p>
                </div>
            </div>

            <!-- <div class="w-full mt-4 flex items-center justify-center text-center">
                <h4 class="font-bold text-xl text-purple-600">
                    <Link class=" text-sm unify_button px-5 py-2" :href="route('profile.information')"> Edit Profile </Link>
                </h4>
            </div> -->

            <div class="w-full px-5 mt-5 pb-4 border-b-[1px] ">
                <p> <span class="font-bold">Current Status: </span> {{current_statuses.get_name(this.user.data.current_status) }} </p>
                <p> <span class="font-bold break-words">Languages: </span> {{this.user_languages}}</p>
                <p> <span class="font-bold break-words">Gender: </span> {{this.user_gender}}</p>
            </div>
            <div class="w-full px-5 mt-5 pb-10 " v-if="$page.props.auth.user.role_id==3">
                <p class="font-bold"> Personal Goals </p>

                <!-- <div class="w-full mt-2">
                    <p v-for="goal in goals">{{goal.name}} </p>
                </div> -->
                <div class="w-full mt-2">
                    <p>{{this.personal_goals}} </p>
                </div>
            </div>
        </div>


        <div class="w-[70%] flex flex-row justify-between flex-wrap">
            <div class="w-[45%] border-2 border-gray-300 flex flex-col p-4  rounded-2xl max-h-42">
                <h1 class="text-2xl"> About </h1>
                <p class="overflow-auto mt-4">
                    {{this.user.data?.about}}
                </p>
            </div>
            <div class="w-[45%] border-2 border-gray-300 flex flex-col p-4  rounded-2xl max-h-42" v-if="$page.props.auth.user.role_id==3">
                <h1 class="text-2xl"> Career Fields Interested In </h1>
                <div class="flex flex-col gap-y-4 mt-4 overflow-auto">
                    <p v-for="industry in this.user.industries">
                        {{industry.name}}
                    </p>
                </div>

            </div>
            <div class="w-[45%] border-2 border-gray-300 flex flex-col p-4  rounded-2xl max-h-42" v-if="$page.props.auth.user.role_id==2">
                <h1 class="text-2xl">Rate: </h1>
                <div class="flex flex-col gap-y-4 mt-4 overflow-auto flex items-center justify-center text-4xl">
                    ${{this.user.data.rate}}

                </div>

            </div>

            <div class="w-full flex flex-row mt-5 rounded-2xl relative justify-center border-2 border-gray-300  items-center px-[10%] h-64">
                    <h1 class="font-bold text-2xl absolute top-5 left-5">Experience</h1>
                    <div class="w-[80%]  h-3 absolute
bg-gradient-to-r from-[#9645DF] via-[#FB23C4] via-[#FFD964]  via-[#19D3E0]  to-[#061534] "></div>
                    <div class="w-full flex flex-row justify-center items-center px-[10%] h-64">
                        <template v-for="i in 5" >
                            <div v-if="this.user.data?.work_experiences[i-1]" class="w-1/5 flex items-center justify-center flex-col" :class=" i === 1 ? 'z-99' : 'z-10'">
                                <div  class=" group rounded-full bg-white shadow-xl border-[1px] border-gray-200 flex justify-center items-center flex-col h-10 w-10  " @mouseover="showDetails(user.data.work_experiences[i-1],i-1)" @mouseleave="hideDetails">
                                    <div class="w-full text-center justify-center mb-10 flex max-h-20 overflow-hidden absolute -mt-24  pt-6 -z-10 max-w-32 text-sm " :class="{'mt-32': i % 2 ===0}">
                                        {{ this.user.data.work_experiences[i-1]?.title}}
                                    </div>
                                    <span class="text-[10px]">{{ this.user.data.work_experiences[i-1]?.from?.slice(0,4)}}</span>
                                    <div v-if="showIndex === i-1" class="absolute bg-white border shadow-lg p-4 rounded-md w-1/2 mt-50 text-sm z-99">
                                        <p><strong>Company Name:</strong> {{ hoveredExperience.company_name }}</p>
                                        <p><strong>Title:</strong> {{ hoveredExperience.title }}</p>
                                        <p><strong>From:</strong> {{ hoveredExperience.from }}</p>
                                        <p><strong>To:</strong> {{ hoveredExperience.to ?? 'Present' }}</p>
                                        <p><strong>Description:</strong> {{ hoveredExperience.short_description }}</p>
                                        <!-- Add more fields if needed -->
                                    </div>
                                </div>
                            </div>
                        </template>

                    </div>

            </div>

            <div class="w-full flex flex-row mt-5 rounded-2xl relative justify-center border-2 border-gray-300  items-center px-[10%] h-64">
                    <h1 class="font-bold text-2xl absolute top-5 left-5">Education</h1>
                    <div class="w-[80%]  h-3 absolute
bg-gradient-to-r from-[#9645DF] via-[#FB23C4] via-[#FFD964]  via-[#19D3E0]  to-[#061534] "></div>
                    <div class="w-full flex flex-row justify-center items-center px-[10%] h-64">
                        <template v-for="i in this.user.data?.qualifications.length" >
                            <div v-if="this.user.data?.qualifications[i-1]" class="w-1/5 flex items-center justify-center flex-col" :class=" i === 1 ? 'z-99' : 'z-10'">
                                <div  class=" group rounded-full bg-white shadow-xl border-[1px] border-gray-200 flex justify-center items-center flex-col h-10 w-10  " @mouseover="showEducation(user.data.qualifications[i-1],i-1)" @mouseleave="hideEducation">
                                    <div class="w-full text-center justify-center mb-10 flex max-h-20 overflow-hidden absolute -mt-24  pt-6 -z-10 max-w-32 text-sm " :class="{'mt-32': i % 2 ===0}">
                                        {{ this.user.data.qualifications[i-1]?.subject}}
                                    </div>
                                    <span class="text-[10px]">{{ this.user.data.qualifications[i-1]?.graduating_date}}</span>
                                    <div v-if="showEducationIndex === i-1" class="absolute bg-white border shadow-lg p-4 rounded-md w-1/2 mt-40 text-sm z-99">
                                        <p><strong>Subject:</strong> {{ hoveredEducation.subject }}</p>
                                        <p><strong>Year:</strong> {{ hoveredEducation.graduating_date }}</p>
                                        <p><strong>Qualification:</strong> {{ this.getQualificationName(hoveredEducation.qualification) }}</p>
                                        <!-- Add more fields if needed -->
                                    </div>
                                </div>
                            </div>
                        </template>

                    </div>

            </div>
        </div>

    </div>
</template>

<script>
import UserLayout from "@/Layouts/UserLayout.vue";
import {Link} from "@inertiajs/vue3";
import current_experiences from "@/Helpers/CurrentExperiences.js";
import current_statuses from "@/Helpers/CurrentStatuses.js";
import genders from "@/Helpers/Genders.js";
export default {
    name: "ProfileMe",
    layout: UserLayout,
    components:{Link},
    data(){
        return {
            current_experiences:current_experiences,
            current_statuses:current_statuses,
            user_languages:"",
            user_gender:"",
            personal_goals:"",
            hoveredExperience: null,
            showIndex : null,
            hoveredEducation: null,
            showEducationIndex : null,
            qualifications:[
                {
                    id: "p",
                    name: "Post Grad"
                },
                {
                    id: "b",
                    name: "Bachelor"
                },
                {
                    id: "m",
                    name: "Masters"
                },
                {
                    id: "h",
                    name: "High School"
                },
                {
                    id: "o",
                    name: "Other"
                },
            ],
        }
    },
    props:{
        user: Object,
        goals: Object
    },
    methods:{
        sortQualificationsByDate() {
            this.user?.data?.qualifications.sort((a, b) => {
                return new Date(a.graduating_date) - new Date(b.graduating_date);
            });
        },
        sortExperiencesByDate() {
            this.user?.data?.work_experiences.sort((a, b) => {
                return new Date(a.from) - new Date(b.from);
            });
        },
        showDetails(experience,index) {
            this.hoveredExperience = experience;
            this.showIndex = index;
        },
        hideDetails() {
            this.hoveredExperience = null;
            this.showIndex = null;
        },
        showEducation(education,index) {            
            this.hoveredEducation = education;
            this.showEducationIndex = index;
        },
        hideEducation() {
            this.hoveredEducation = null;
            this.showEducationIndex = null;
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
        },

        setGenderName() {
            if (this.user.gender) {
            this.user_gender = genders.get_name(this.user.gender);
            } else {
            this.user_gender = '';
            }
        },

        setGoals() {
            if (this.user.data.personal_goals) {
            this.personal_goals = this.user.data.personal_goals;
            } else {
            this.personal_goals = '';
            }
        },
        logWorkExperiences() {
            console.log(this.user.data.work_experiences);
        },
        getQualificationName(id) {
            const qualification = this.qualifications.find(q => q.id === id);
            return qualification ? qualification.name : '';
        },
    },
    mounted() {
        console.log(this.user.data)
        this.sortQualificationsByDate();
        this.sortExperiencesByDate();
        this.user.languages?.forEach((lang, index)=>{
            this.user_languages += `${lang.name}` + (index === this.user.languages.length - 1 ? " " : ", ")
        })

        this.setGoals()
        this.setGenderName();
        this.logWorkExperiences();
    }

}
</script>
<style scoped>
.mt-50{
    margin-top: 26%;
}
.mt-200{
    margin-top: 45%;
}
.z-99{
    z-index: 99999;
}
</style>
