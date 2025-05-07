<template>

        <div class="proposal-create w-full flex flex-row mt-10 max-w-[90vw] py-10 px-20 mx-auto border-2 border-gray-300 rounded-3xl">
            <div class="w-4/5">
                    <img class="max-w-24" :src="'/storage/' + this.coach.image" alt="">
                    <h1 class=" mt-5 text-3xl font-bold"> {{this.coach.first_name}} {{this.coach.last_name}} </h1>
                    <div class="w-full space-y-5 mt-10">
                        <h2 class="font-bold text-4xl text-purple-600"> About </h2>
                        <p>{{this.coach.data?.about}}</p>
                    </div>

                    <div class="w-full mt-10">
                        <h2 class="font-bold text-4xl text-purple-600"> Work Experience </h2>
                        <template v-for="i in 2">
                            <div class=" mt-5  w-full flex flex-col" v-if="this.coach.data?.work_experiences[i-1]">
                                <h3 class="text-xl font-bold"> {{this.coach.data?.work_experiences[i-1].title}}</h3>
                                <h4 class="text-lg text-purple-600"> {{this.coach.data.work_experiences[i-1].company_name}}</h4>
                                <p class="mt-5"> {{this.coach.data.work_experiences[i-1].description}} </p>
                            </div>
                        </template>
                    </div>
                    <div class="w-full mt-10" v-if="this.coach.data?.education?.length >0">
                        <h2 class="font-bold text-4xl text-purple-600"> Education </h2>
                        <template v-for="i in 2">
                            <div class=" mt-5  w-full flex flex-col" v-if="this.coach.data?.education[i-1]">
                                <h3 class="text-xl font-bold"> {{this.coach.data.education[i-1].school}}</h3>
                                <h4 class="text-lg text-purple-600"> {{this.coach.data.education[i-1].field_of_study}}</h4>
                                <p class="mt-5"> {{this.coach.data.education[i-1].description}} </p>
                            </div>
                        </template>
                    </div>
            </div>

            <div class="w-1/5 flex flex-col gap-y-5">
                <h4 class="font-bold text-xl text-purple-600" v-if="this.coach.data?.current_job_level">
                    Job Level: <span class="text-lg text-black font-none">{{job_levels.get_name(this.coach.data?.current_job_level[0])}}</span>
                </h4>
                <h4 class="font-bold text-xl text-purple-600">
                    Rate : <span class="text-lg text-black font-none">${{this.coach.data?.rate}}/Hour</span>
                </h4>
            </div>
        </div>

        <div class="w-full flex  max-w-[90vw] py-10 px-20 mx-auto flex-col mt-20 border-2 border-gray-300 rounded-3xl">
            <div class="w-full">
                <h2 class="text-3xl font-bold text-purple-600">
                    Proposal Information
                </h2>
            </div>

            <div class="w-full flex flex-col  mt-10">
                <div class="flex flex-row items-center">
                    <InputLabel class="font-bold  float-left !text-xl text-purple-500" value="Hours :" />
                    <Slider class="float-left ml-5 w-[200px]" v-model="this.create_proposal_form.number_of_sessions" :max="10" :step="1"/>
                    <InputLabel class="font-bold ml-5 " :value="'Total Price : $' +  (this.create_proposal_form.number_of_sessions * this.coach.data?.rate) " />
                </div>

                <InputLabel class="font-bold mt-5 " :value="'Total Hours : ' +  this.create_proposal_form.number_of_sessions  " />
                <InputError class="mt-2" :message="create_proposal_form.errors.number_of_sessions" />

            </div>

            <div class="w-full mt-10">
                <InputLabel class="font-bold !text-xl text-purple-500" value="Cover Letter" />

                <Textarea class="mt-4 border-2 px-2 py-2 border-purple-300 w-full" v-model="this.create_proposal_form.cover_letter" autoResize rows="5" cols="30" />
                <InputError class="mt-2" :message="create_proposal_form.errors.cover_letter" />


            </div>

            <div class="w-full flex justify-end mt-10">
                <button class="unify_button px-10 py-2" @click="submit_form"> Submit Proposal  </button>
            </div>


        </div>
</template>



<script>

import MainLayout from "@/Layouts/MainLayout.vue";
import job_levels from "@/Helpers/JobLevels.js";
import {useForm} from "@inertiajs/vue3";
import Slider from "primevue/slider";
import InputLabel from "@/Components/InputLabel.vue";
import Textarea from 'primevue/textarea';
import InputError from "@/Components/InputError.vue";


export default {
    name: "ProposalsCreate",
    layout: MainLayout,
    components:{InputError, Textarea, Slider , InputLabel},
    setup(){
        const create_proposal_form=useForm({
            cover_letter:null,
            number_of_sessions:null,
        });

        return {create_proposal_form}
    },
    props:{
        coach: Object,
    },
    data(){
        return {
            job_levels: job_levels
        }
    },
    methods:{
        submit_form(){
            this.create_proposal_form.post(route('proposals.store' , this.coach.id))
        }
    }

}
</script>

<style scoped>
    
</style>
