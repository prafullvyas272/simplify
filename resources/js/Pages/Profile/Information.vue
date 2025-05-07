<template>
        <div class=" bg-[url('/images/signup_bg.jpg')] py-10  bg-cover
        min-h-[95vh]
    bg-no-repeat">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 bg-white py-20 px-20 rounded-xl">

                <Stepper linear>
                    <StepperPanel header="About You">
                        <template #content="{ nextCallback }">
                            <div class="flex flex-col  h-12rem">
                                <div class="w-full surface-border border-round surface-ground flex-col flex gap-y-10 font-medium">
                                    <div class="w-1/4">
                                        <InputLabel value="Picture"   />
                                        <inputField
                                            id="name"
                                            @input="user_information_form.image = $event.target.files[0]"
                                            type="file"
                                            class="mt-1 block w-full "
                                            required
                                            autofocus
                                        />
                                    </div>
                                    <div  class="w-1/2">
                                        <InputLabel value="Short Introduction"   />
                                        <InputArea
                                            id="name"
                                            type="text"
                                            rows="3"
                                            class="mt-1 block w-full "
                                            v-model="this.user_information_form.about"
                                            required
                                            autofocus
                                            placeholder="About You"
                                        />
                                    </div>

                                    <div class="w-1/4">
                                        <InputLabel value="Country"/>

                                        <Dropdown filter v-model="this.user_information_form.country_id"
                                                  :options="this.countries"
                                                  option-label="name"
                                                  option-value="id"
                                                  placeholder="Choose You Country"
                                                  class="mt-1 w-full border-black rounded-full px-3  border-[1px] bg-transparent
                                                  focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 ">
                                            <template #option="slotProps">
                                                <div class="flex align-items-center items-center">
                                                    <img  src="https://primefaces.org/cdn/primevue/images/flag/flag_placeholder.png" :class="`mr-2 flag flag-${slotProps.option.code.toLowerCase()}`"  />
                                                    <div>{{ slotProps.option.name }}</div>
                                                </div>
                                            </template>
                                        </Dropdown>
                                    </div>

                                    <div class="w-[45%] flex flex-col" >
                                        <InputLabel value="Languages"/>
                                        <MultiSelect
                                            v-model="this.user_information_form.languages"
                                            :options="this.languages"
                                            option-label="name"
                                            option-value="id"
                                            placeholder="Languages"
                                            class="mt-1  w-full border-black rounded-full px-3   border-[1px] bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "
                                        />
                                    </div>

                                    <div class="w-1/4">
                                        <InputLabel value="Current Experience"/>
                                        <Dropdown
                                            v-model="this.user_information_form.current_exp"
                                            :options="this.available_experiences.data"
                                            option-label="name"
                                            option-value="id"
                                            placeholder="Current Experience"
                                            class="mt-1 w-full border-black rounded-full px-3   border-[1px] bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "
                                        />

                                    </div>

<!--                                    <div class="w-1/4" v-show="this.user_information_form.current_status =='s' ">-->
<!--                                        <InputLabel value="Studying Level"/>-->
<!--                                        <Dropdown-->
<!--                                            v-model="this.user_information_form.qualification"-->
<!--                                            :options="this.qualifications"-->
<!--                                            option-label="name"-->
<!--                                            option-value="id"-->
<!--                                            placeholder="Studying Level"-->
<!--                                            class="mt-1  w-full border-black rounded-full px-3   border-[1px] bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "-->
<!--                                        />-->

<!--                                    </div>-->
<!--                                    <div  class="w-1/4" v-show="this.user_information_form.current_status =='s' ">-->
<!--                                        <InputLabel value="Graduating Date (approx)"   />-->
<!--                                        <inputField-->
<!--                                            id="name"-->
<!--                                            type="date"-->
<!--                                            class="mt-1 block w-full "-->
<!--                                            v-model="this.user_information_form.graduating_date"-->
<!--                                            required-->
<!--                                            autofocus-->
<!--                                        />-->
<!--                                    </div>-->
                                </div>
                            </div>

                            <div class="flex pt-4 w-full justify-end">
                                <button :disabled="this.about_part_check"  class="disabled:opacity-50 unify_button py-2 px-10" @click="nextCallback"  > Next </button>
                            </div>
                        </template>
                    </StepperPanel>

                    <StepperPanel header="Work Experience">
                        <template #content="{ prevCallback, nextCallback }">
                            <div class="flex flex-column h-12rem">
                                <div class="surface-ground w-full flex-col flex gap-y-10 font-medium">

                                    <div class="w-full flex flex-row justify-between">
                                        <div class="w-[45%] flex flex-col" >
                                            <InputLabel value="Job Levels"/>
                                            <Dropdown
                                                v-model="this.user_information_form.current_job_level"
                                                :options="this.job_levels"
                                                option-label="name"
                                                option-value="id"
                                                placeholder="Current Job Level"
                                                class="mt-1  w-full border-black rounded-full px-3   border-[1px] bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "
                                            />
                                        </div>

                                    </div>

                                    <div class="w-full flex justify-start">
                                        <Dialog :open="open_work" >
                                            <DialogTrigger class="mt-5 ml-5">
                                                <div @click="add_work" class="px-10 py-5 w-full h-32 border-2 flex-col border-gray-300 flex justify-center items-center">
                                                    <Button class="unify_button w-8 h-8 " >+</Button>
                                                    Add Experience
                                                </div>
                                            </DialogTrigger>
                                            <DialogContent
                                                @escape-key-down="this.open_work=false"
                                                @pointer-down-outside="this.open_work=false"
                                                @interact-outside="this.open_work=false"
                                                class="sm:max-w-[425px]">
                                                <DialogHeader>
                                                    <DialogTitle >Add Experience</DialogTitle>
                                                    <DialogDescription>
                                                        Create New Work Experience
                                                    </DialogDescription>
                                                </DialogHeader>
                                                <div class="flex flex-col gap-y-5 w-full py-4">
                                                    <div class="w-full flex flex-col">
                                                        <InputLabel value="Company Name"  />
                                                        <InputField
                                                            id="from"
                                                            type="text"
                                                            class="mt-1 block w-full "
                                                            v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences.length-1].company_name"
                                                            required
                                                            autofocus
                                                        />
                                                    </div>
                                                    <div class="w-full flex flex-col gap-x-5">
                                                            <InputLabel value="Job Title / Project Title"  />
                                                            <InputField
                                                                id="from"
                                                                type="text"
                                                                class="mt-1 block w-full "
                                                                v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences.length-1].title"
                                                                required
                                                                autofocus
                                                            />
                                                    </div>
                                                    <div class="w-full flex flex-row justify-between gap-x-5">
                                                        <div class="w-[45%]">
                                                            <InputLabel value="Start Date"  />
                                                            <InputField
                                                                id="from"
                                                                type="date"
                                                                class="mt-1 block w-full "
                                                                v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences.length-1].from"
                                                                required
                                                                autofocus
                                                            />
                                                        </div>
                                                        <div class="w-[45%]">
                                                            <InputLabel value="End Date"  />
                                                            <InputField
                                                                id="ro"
                                                                type="date"
                                                                class="mt-1 block w-full "
                                                                v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences.length-1].to"
                                                                required
                                                                autofocus
                                                            />
                                                        </div>

                                                    </div>
                                                    <div class="w-full flex flex-col">
                                                        <InputLabel value="Short Description" />
                                                        <InputArea
                                                            id="from"
                                                            type="text"
                                                            class="mt-1 block w-full "
                                                            v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences.length-1].short_description"
                                                            required
                                                            autofocus
                                                        />
                                                    </div>
                                                </div>
                                                <DialogFooter>
                                                    <Button @click="check_work_data" type="submit" class="unify_button px-5 py-2">
                                                        Submit
                                                    </Button>
                                                </DialogFooter>
                                            </DialogContent>
                                        </Dialog>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex-col my-20">
                                <template v-for="(single_exp , index ) in this.user_information_form.work_experiences">
                                    <div class="mt-5 w-full justify-between flex  flex-row" v-if="single_exp.title">
                                        <div class="w-3/6">{{single_exp.title}}</div>
                                        <div class="w-1/6">{{single_exp.from}}</div>
                                        <div class="w-1/6">{{single_exp.to}}</div>
                                        <div class="w-1/6 text-right">
                                            <button class="unify_button px-5 py-2 " @click="this.edit_work_open=true; this.selected_work_index=index"> Edit </button>
                                        </div>
                                    </div>

                                </template>

                            </div>



                            <div class="flex pt-4 w-full justify-between">
                                <button  class="unify_button py-2 px-10" @click="prevCallback" > Previous </button>
                                <button :disabled="this.work_experience_check"  class="disabled:opacity-50 unify_button py-2 px-10" @click="nextCallback"  > Next </button>
                            </div>

                        </template>
                    </StepperPanel>


                    <StepperPanel  header="Education Qualification">
                        <template #content="{ prevCallback , nextCallback }">
                            <div class="flex flex-col h-12rem" >

                                <div class="w-full surface-ground  flex-col flex gap-y-10 font-medium">
                                    <div class="w-full flex ">
                                        <Dialog :open="open_education" >
                                            <DialogTrigger class="mt-5 ml-5">
                                                <div @click="add_education" class="px-10 py-5 w-full h-32 border-2 flex-col border-gray-300 flex justify-center items-center">
                                                    <Button class="unify_button w-8 h-8 " >+</Button>
                                                    Add Education
                                                </div>
                                            </DialogTrigger>

                                            <DialogContent
                                                @escape-key-down="this.open_education=false"
                                                @pointer-down-outside="this.open_education=false"
                                                @interact-outside="this.open_education=false"
                                                class="sm:max-w-[425px]">
                                                <DialogHeader>
                                                    <DialogTitle >Add Education</DialogTitle>
                                                    <DialogDescription>
                                                        Create New Education Qualification
                                                    </DialogDescription>
                                                </DialogHeader>
                                                <div class="flex flex-col gap-y-5 w-full py-4">
                                                    <div class="w-full flex flex-col">
                                                        <InputLabel value="School Name"  />
                                                        <InputField
                                                            id="from"
                                                            type="text"
                                                            class="mt-1 block w-full "
                                                            v-model="this.user_information_form.education[this.user_information_form.education.length-1].school"
                                                            required
                                                            autofocus
                                                        />
                                                    </div>

                                                    <div class="w-full flex flex-row justify-between gap-x-5">
                                                        <div class="w-[45%]">
                                                            <InputLabel value="Start Date"  />
                                                            <InputField
                                                                id="from"
                                                                type="date"
                                                                class="mt-1 block w-full "
                                                                v-model="this.user_information_form.education[this.user_information_form.education.length-1].from"
                                                                required
                                                                autofocus
                                                            />
                                                        </div>
                                                        <div class="w-[45%]">
                                                            <InputLabel value="End Date (or Expected)"  />
                                                            <InputField
                                                                id="ro"
                                                                type="date"
                                                                class="mt-1 block w-full "
                                                                v-model="this.user_information_form.education[this.user_information_form.education.length-1].to"
                                                                required
                                                                autofocus
                                                            />
                                                        </div>
                                                    </div>

                                                    <div class="w-full flex flex-col gap-x-5">
                                                        <InputLabel value="Field Of Study"  />
                                                        <InputField
                                                            id="from"
                                                            type="text"
                                                            class="mt-1 block w-full "
                                                            v-model="this.user_information_form.education[this.user_information_form.education.length-1].field_of_study"
                                                            required
                                                            autofocus
                                                        />
                                                    </div>

                                                    <div class="w-full flex flex-col">
                                                        <InputLabel value="Description (Optional)" />
                                                        <InputArea
                                                            id="from"
                                                            type="text"
                                                            class="mt-1 block w-full "
                                                            v-model="this.user_information_form.education[this.user_information_form.education.length-1].short_description"
                                                            required
                                                            autofocus
                                                        />
                                                    </div>
                                                </div>
                                                <DialogFooter>
                                                    <Button @click="check_education_data" type="submit" class="unify_button px-5 py-2">
                                                        Submit
                                                    </Button>
                                                </DialogFooter>
                                            </DialogContent>
                                        </Dialog>
                                    </div>
                                </div>
                                <div class="w-full flex-col  mt-10">
                                <template v-for="(single_edu , index ) in this.user_information_form.education">
                                    <div class="mt-5 w-full justify-between flex  flex-row" v-if="single_edu.school">
                                        <div class="w-3/6">{{single_edu.school}}</div>
                                        <div class="w-1/6">{{single_edu.from}}</div>
                                        <div class="w-1/6">{{single_edu.to}}</div>
                                        <div class="w-1/6 text-right">
                                            <button class="unify_button px-5 py-2" @click="this.edit_education_open=true; this.selected_education_index=index"> Edit </button>
                                        </div>
                                    </div>

                                </template>

                            </div>

                        </div>
                            <div class="flex pt-4 mt-20 w-full justify-between">
                                <button  class="unify_button py-2 px-10" @click="prevCallback" > Previous </button>
                                <button  class="unify_button py-2 px-10" @click="nextCallback" > Next </button>
                            </div>
                        </template>
                    </StepperPanel>

                    <StepperPanel header="Final">
                        <template #content="{  prevCallback, nextCallback }">
                            <div class="flex flex-col  h-[12rem]">
                                <div class="w-full surface-border border-round surface-ground flex-col flex gap-y-10 font-medium">
                                        <div class="w-[45%] flex flex-col"  v-if="$page.props.auth.user.role_id==3">
                                            <InputLabel value="Industries Interested In"/>
                                            <MultiSelect
                                                v-model="this.user_information_form.interested_in_industries"
                                                :options="this.industries"
                                                option-label="name"
                                                option-value="id"
                                                placeholder="Industries Interested In"
                                                class="mt-1  w-full border-black rounded-full px-3   border-[1px] bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "
                                            />
                                        </div>
                                        <div v-if="$page.props.auth.user.role_id==2" class="w-[45%] flex flex-col" >
                                            <InputLabel class="font-bold" :value="'Current Rate: $' +  (this.user_information_form.rate ?? 0) + '/hour'" />
                                            <Slider class="mt-5" v-model="this.user_information_form.rate" :max="2000" :step="5"/>
                                            <InputLabel class="font-bold mt-5 text-purple-600" :value="'You will Receive: $' +  (this.user_information_form.rate * 0.8 ?? 0) + '/hour'" />

                                        </div>


                                        <div class="w-full" v-if="$page.props.auth.user.role_id==3">
                                            <p class="text-red-600">Please add 3 goals</p>
                                            <AddGoal />
                                        </div>
                                </div>
                            </div>

                            <div class="flex pt-4 w-full justify-between mt-20">
                                <button  class="unify_button py-2 px-10" @click="prevCallback" > Previous </button>
                                <button class="unify_button py-2 px-10" @click="this.submit_information" > Submit </button>
                            </div>
                        </template>
                    </StepperPanel>
                </Stepper>

            </div>
        </div>




    <Dialog :open="edit_work_open" >
        <DialogContent
            @escape-key-down="this.edit_work_open=false"
            @pointer-down-outside="this.edit_work_open=false"
            @interact-outside="this.edit_work_open=false"
            class="sm:max-w-[425px]">

            <DialogHeader>
                <DialogTitle >Edit Experience</DialogTitle>
            </DialogHeader>
            <div class="flex flex-col gap-y-5 w-full py-4" >
                <div class="w-full flex flex-col">
                    <InputLabel value="Company Name"  />
                    <InputField
                        id="from"
                        type="text"
                        class="mt-1 block w-full "
                        v-model="this.user_information_form.work_experiences[selected_work_index].company_name"
                        required
                        autofocus
                    />
                </div>
                <div class="w-full flex flex-col gap-x-5">
                    <InputLabel value="Job Title"  />
                    <InputField
                        id="from"
                        type="text"
                        class="mt-1 block w-full "
                        v-model="this.user_information_form.work_experiences[selected_work_index].title"
                        required
                        autofocus
                    />
                </div>
                <div class="w-full flex flex-row justify-between gap-x-5">
                    <div class="w-[45%]">
                        <InputLabel value="Start Date"  />
                        <InputField
                            id="from"
                            type="date"
                            class="mt-1 block w-full "
                            v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences.length-1].from"
                            required
                            autofocus
                        />
                    </div>
                    <div class="w-[45%]">
                        <InputLabel value="End Date"  />
                        <InputField
                            id="ro"
                            type="date"
                            class="mt-1 block w-full "
                            v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences.length-1].to"
                            required
                            autofocus
                        />
                    </div>

                </div>
                <div class="w-full flex flex-col">
                    <InputLabel value="Short Description" />
                    <InputArea
                        id="from"
                        type="text"
                        class="mt-1 block w-full "
                        v-model="this.user_information_form.work_experiences[selected_work_index].short_description"
                        required
                        autofocus
                    />
                </div>
            </div>
            <DialogFooter>
                <Button @click="check_work_data" type="submit" class="unify_button px-5 py-2">
                    Submit
                </Button>
            </DialogFooter>
        </DialogContent>
    </Dialog>

    <Dialog :open="edit_education_open" >
        <DialogContent
            @escape-key-down="this.edit_education_open=false"
            @pointer-down-outside="this.edit_education_open=false"
            @interact-outside="this.edit_education_open=false"
            class="sm:max-w-[425px]">
            <DialogHeader>
                <DialogTitle >Edit Education</DialogTitle>
            </DialogHeader>
            <div class="flex flex-col gap-y-5 w-full py-4">
                <div class="w-full flex flex-col">
                    <InputLabel value="School Name"  />
                    <InputField
                        id="from"
                        type="text"
                        class="mt-1 block w-full "
                        v-model="this.user_information_form.education[selected_education_index].school"
                        required
                        autofocus
                    />
                </div>

                <div class="w-full flex flex-row justify-between gap-x-5">
                    <div class="w-[45%]">
                        <InputLabel value="Start Date"  />
                        <InputField
                            id="from"
                            type="date"
                            class="mt-1 block w-full "
                            v-model="this.user_information_form.education[selected_education_index].from"
                            required
                            autofocus
                        />
                    </div>
                    <div class="w-[45%]">
                        <InputLabel value="End Date (or Expected)"  />
                        <InputField
                            id="ro"
                            type="date"
                            class="mt-1 block w-full "
                            v-model="this.user_information_form.education[selected_education_index].to"
                            required
                            autofocus
                        />
                    </div>
                </div>

                <div class="w-full flex flex-col gap-x-5">
                    <InputLabel value="Field Of Study"  />
                    <InputField
                        id="from"
                        type="text"
                        class="mt-1 block w-full "
                        v-model="this.user_information_form.education[selected_education_index].field_of_study"
                        required
                        autofocus
                    />
                </div>

                <div class="w-full flex flex-col">
                    <InputLabel value="Description (Optional)" />
                    <InputArea
                        id="from"
                        type="text"
                        class="mt-1 block w-full "
                        v-model="this.user_information_form.education[selected_education_index].short_description"
                        required
                        autofocus
                    />
                </div>
            </div>
            <DialogFooter>
                <Button @click="check_education_data" type="submit" class="unify_button px-5 py-2">
                    Submit
                </Button>
            </DialogFooter>
        </DialogContent>
    </Dialog>

</template>

<script>
import {Link} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import {useForm} from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import InputField from "@/Components/InputField.vue";
import InputArea from "@/Components/InputArea.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import NavLink from "@/Components/NavLink.vue";
import {Button} from "@/shadcn/ui/button/index.js";
import Stepper from 'primevue/stepper';
import StepperPanel from 'primevue/stepperpanel';
import Dropdown from 'primevue/dropdown';

import Dialog from "@/shadcn/ui/dialog/Dialog.vue";
import DialogTrigger from "@/shadcn/ui/dialog/DialogTrigger.vue";
import DialogHeader from "@/shadcn/ui/dialog/DialogHeader.vue";
import DialogContent from "@/shadcn/ui/dialog/DialogContent.vue";
import DialogFooter from "@/shadcn/ui/dialog/DialogFooter.vue";
import DialogDescription from "@/shadcn/ui/dialog/DialogDescription.vue";
import DialogTitle from "@/shadcn/ui/dialog/DialogTitle.vue";

import MultiSelect from "primevue/multiselect";
import Slider from 'primevue/slider';

import current_experiences from "@/Helpers/CurrentExperiences.js";
import AddGoal from "@/Components/Goals/AddGoal.vue";
export default {
    name: "Information",
    components: {
        AddGoal,
        Slider, MultiSelect,Dropdown, Button, NavLink, PrimaryButton, InputLabel, InputArea, InputField, InputError, Link, Stepper, StepperPanel,
        Dialog, DialogTrigger ,DialogTitle,  DialogContent , DialogHeader, DialogFooter, DialogDescription
    },
    layout:MainLayout,
    setup() {
        const  user_information_form=useForm({
            //first part
            image:null,
            about:null,
            birthday:null,
            country_id:null,
            current_exp:null,
            languages:[],

            //work experience
            work_experiences:[{
                from:null,
                to : null,
                title:null,
                company_name:null,
                description:null,
            }],
            current_job_level:null,

            //education experience
            education:[{
                from:null,
                to : null,
                school:null,
                description:null,
                qualification_type:null,
                field_of_study:null,
            }],

            qualification:null,
            graduating_date:null,

            rate:null,
            interested_in_industries:[],
        })

        return {user_information_form}
    },
    data(){
        return {
            open_work:false,
            edit_work_open:false,
            open_education:false,
            edit_education_open:false,
            selected_work_index:null,
            selected_education_index:null,
            available_experiences: current_experiences,
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
            ],
            job_levels:[
                {
                    id:"e",
                    name:"Entry Level"
                },
                {
                    id:"j",
                    name:"Junior"
                },
                {
                    id:"m",
                    name:"Mid-Level"
                },
                {
                    id:"s",
                    name:"Senior"
                },
                {
                    id:"g",
                    name:"Managerial"
                },
                {
                    id:"x",
                    name:"Executive"
                },







            ],
        }
    },
    props:{
        user: {
            type: Object,
            default:null
        },
        industries:Array,
        countries:Object,
        languages:Object,
    },
    methods:{

        check_work_data(){
           this.open_work=false;
           this.edit_work_open=false;
        },

        check_education_data(){
           this.open_education=false;
           this.edit_education_open=false;
        },

        submit_information(){
            this.user_information_form.post(route('profile.store_information'))
        },
        add_work (){
            this.open_work=true;
            this.user_information_form.work_experiences.push({
                from:null,
                to:null,
                title: null,
                company_name:null,
                description:null
            });
        },
        add_education (){
            this.open_education=true;
            this.user_information_form.education.push({
                from:null,
                to : null,
                school:null,
                description:null,
                qualification_type:null,
                field_of_study:null,
            });
        }
    },
    computed:{
        about_part_check(){

            return !this.user_information_form.about  ||
                !this.user_information_form.country_id ||
                this.user_information_form.languages.length <=0 ||
                !this.user_information_form.current_exp
        },
        work_experience_check(){
            return !this.user_information_form.current_job_level
        },

    },


    mounted() {

        //about me part
        this.user_information_form.about=this.user.data.about
        this.user_information_form.birthday=this.user.birthday
        this.user_information_form.country_id=this.user.country_id


        this.user.languages.forEach((language)=>{
            this.user_information_form.languages.push(language.id)
        })

        this.user_information_form.current_exp=this.user.data?.current_exp
        this.user_information_form.rate=this.user.data?.rate
        this.user_information_form.current_job_level=this.user.data?.current_job_level

        this.user.data.work_experiences?.forEach((work_experience)=>{
            this.user_information_form.work_experiences.push(work_experience)
        })
        this.user.data.education?.forEach((education)=>{
            this.user_information_form.education.push(education)
        })

        this.user.industries?.forEach((industry)=>{
            this.user_information_form.interested_in_industries.push(industry.id)
        })

    }

}
</script>

<style scoped>

</style>
