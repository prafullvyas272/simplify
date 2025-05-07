<template>

        <div class="w-full flex flex-row mt-10 max-w-[90vw] py-10 px-16 mx-auto border-2 border-gray-300 rounded-3xl">
            <div class="w-4/5">
                    <img class="max-w-24" :src="'/storage/' + this.proposal.student.image" alt="">
                    <h1 class=" mt-5 text-3xl font-bold"> {{this.proposal.student.first_name}} {{this.proposal.student.last_name}} </h1>
                    <div class="w-full space-y-5 mt-10">
                        <h2 class="font-bold text-4xl text-purple-600"> About </h2>
                        <p>{{this.proposal.student.data?.about}}</p>
                    </div>

                    <div class="w-full mt-10" v-if="this.proposal.student.data?.work_experiences?.length >0">
                        <h2 class="font-bold text-4xl text-purple-600"> Work Experience </h2>
                        <template v-for="i in 2">
                            <div class=" mt-5  w-full flex flex-col" v-if="this.proposal.student.data.work_experiences[i-1]">
                                <h3 class="text-xl font-bold"> {{this.proposal.student.data.work_experiences[i-1].title}}</h3>
                                <h4 class="text-lg text-purple-600"> {{this.proposal.student.data.work_experiences[i-1].company_name}}</h4>
                                <p class="mt-5"> {{this.proposal.student.data.work_experiences[i-1].description}} </p>
                            </div>
                        </template>
                    </div>
                    <div class="w-full mt-10" v-if="this.proposal.student.data?.education?.length >0">
                        <h2 class="font-bold text-4xl text-purple-600"> Education </h2>
                        <template v-for="i in 2">
                            <div class=" mt-5  w-full flex flex-col" v-if="this.proposal.student.data.education[i-1]">
                                <h3 class="text-xl font-bold"> {{this.proposal.student.data.education[i-1].school}}</h3>
                                <h4 class="text-lg text-purple-600"> {{this.proposal.student.data.education[i-1].field_of_study}}</h4>
                                <p class="mt-5"> {{this.proposal.student.data.education[i-1].description}} </p>
                            </div>
                        </template>
                    </div>
            </div>

            <div class="w-1/5 flex flex-col gap-y-5">
                <h3 class="text-3xl font-bold text-green-500" v-if="this.proposal.status=='a'">
                    Accepted
                </h3>
                <h3 class="text-3xl font-bold text-red-500" v-if="this.proposal.status=='d'">
                    Rejected
                </h3>

                <h4 class="font-bold text-xl text-purple-600" v-if="this.proposal.student.dat?.current_job_level">
                    Job Level: <span class="text-lg text-black font-none">{{job_levels.get_name(this.proposal.student.data.current_job_level[0])}}</span>
                </h4>
                <h4 class="font-bold text-xl text-purple-600">
                    <Link class=" text-sm unify_button px-5 py-2" :href="route('students.show', this.proposal.student_id)"> Show Profile </Link>
                </h4>
            </div>
        </div>

        <div class="w-full flex  max-w-[90vw] py-10 px-20 mx-auto flex-col mt-20 border-2 border-gray-300 rounded-3xl">
            <div class="w-full">
                <h2 class="text-3xl font-bold text-purple-600">
                    Proposal Information
                </h2>
            </div>

            <div class="w-full flex flex-col font-bold  mt-10">
                <p>Total Sessions : <span class="text-purple-500"> {{this.proposal.hours}} Hours </span></p>
                <p   >Total Cost : <span class="text-purple-500"> ${{this.proposal.hours * $page.props.auth.user.data?.rate}}</span> </p>

            </div>

            <div class="w-full mt-10">
                <InputLabel class="font-bold !text-xl text-purple-500" value="Cover Letter" />
                <p class="mt-4 border-2 px-2 py-2 rounded-xl border-purple-300 w-full">{{this.proposal.cover_letter}}</p>


            </div>

            <div class="w-full flex justify-between mt-10" v-if="this.proposal.status=='r'">
                    <Link :href="route('proposals.reject' , this.proposal.id)" class="hover:bg-white hover:text-purple-600 text-sm border-2 border-purple-600 rounded-full px-5 py-2 "> Reject</Link>
                    <Link :href="route('proposals.accept' , this.proposal.id)" class="hover:opacity-80 text-sm unify_button px-5 py-2 "> Accept </Link>
            </div>


        </div>
</template>



<script>

import MainLayout from "@/Layouts/MainLayout.vue";
import job_levels from "@/Helpers/JobLevels.js";
import {useForm , Link} from "@inertiajs/vue3";
import Slider from "primevue/slider";
import InputLabel from "@/Components/InputLabel.vue";
import Textarea from 'primevue/textarea';
import InputError from "@/Components/InputError.vue";


export default {
    name: "ProposalsSingle",
    layout: MainLayout,
    components:{InputError, Textarea, Slider , InputLabel , Link},
    props:{
        proposal: Object,
    },
    data(){
        return {
            job_levels: job_levels
        }
    },

}
</script>

<style scoped>

</style>
