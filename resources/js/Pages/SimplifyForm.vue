<template>


    <div class="w-full flex flex-row px-20 mt-20">
<!--        Side Menu-->
        <div class="w-48 mt-10 items-center flex-col flex space-y-10">
            <div class="group hover:cursor-pointer border border-gray-400 rounded " :class="{'button_gradient' : this.current_step==1}"  @click="this.current_step=1">
                <div class="bg-white rounded-[calc(0.3rem-1px)] py-4 w-35">
                    Child Information
                </div>
            </div>
            <div :class="{'button_gradient' : this.current_step==2}" class="group hover:cursor-pointer border border-gray-400 rounded " @click="this.current_step=2">
                <div   class="bg-white rounded-[calc(0.3rem-1px)] py-4 w-28">
                    Parent Detail
                </div>
            </div>
            <div :class="{'button_gradient' : this.current_step==3}" class="group hover:cursor-pointer border border-gray-400 rounded " @click="this.current_step=3">
                <div   class="bg-white rounded-[calc(0.3rem-1px)] py-4 w-28">
                    <svg class="mx-auto" width="82" height="76" viewBox="0 0 82 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4_1782)">
                            <path class="group-hover:stroke-[#9645DF]" :class="{'stroke-[#9E9E9E]' : current_step!=3 , 'stroke-[#9645DF]': current_step ==3}" d="M24.4695 64.6385H1.55917V1.57263H80.4408V64.6385H57.2441" stroke="#9E9E9E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path class="group-hover:stroke-[#9645DF]" :class="{'stroke-[#9E9E9E]' : current_step!=3 , 'stroke-[#9645DF]': current_step ==3}" d="M21.8285 18.5828H60.1715M41.0159 42.3007C46.3617 42.3007 50.6892 46.6655 50.6892 52.0574C50.6892 57.4493 46.3617 61.8142 41.0159 61.8142C35.6702 61.8142 31.3427 57.4493 31.3427 52.0574C31.3427 46.6655 35.6702 42.3007 41.0159 42.3007ZM31.1199 55.3311L32.1063 55.9088C33.3791 58.9257 36.1475 61.1723 39.4567 61.6858L32.17 74.4274L29.9426 67.8801L23.1967 69.1959L31.1517 55.3311H31.1199ZM50.8801 55.3311L49.8937 55.9088C48.6209 58.9257 45.8525 61.1723 42.5433 61.6858L49.83 74.4274L52.0574 67.8801L58.8033 69.1959L50.8483 55.3311H50.8801Z" stroke="#9E9E9E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path class="group-hover:stroke-[#9645DF]" :class="{'stroke-[#9E9E9E]' : current_step!=3 , 'stroke-[#9645DF]': current_step ==3}" d="M26.5696 31.8699H55.4303" stroke="#9E9E9E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_4_1782">
                                <rect width="82" height="76" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>

                </div>
            </div>
            <div :class="{'button_gradient' : this.current_step==4}" v-if=" this.$page.props.auth.user.role_id ==3"  class="group  hover:cursor-pointer border border-gray-400 rounded " @click="this.current_step=4">
                <div class="bg-white rounded-[calc(0.3rem-1px)] py-4 w-28">
                    <svg class="mx-auto" width="47" height="82" viewBox="0 0 47 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4_1789)">
                            <path class="group-hover:stroke-[#9645DF]" :class="{'stroke-[#9E9E9E]' : current_step!=4 , 'stroke-[#9645DF]': current_step ==4}" d="M23.5 38.5046L29.9806 52.9399L45.49 54.5509L33.8186 65.1957L37.0904 80.4839L23.4056 72.6503L9.9411 80.4839L13.1499 65.0062L1.5415 54.5825L17.2082 52.8452L23.5 38.5362V38.5046ZM23.5 38.5046L2.64257 26.0909V8.78123M23.5 38.5046L44.3574 26.0909V8.78123M2.64257 8.78123H44.326V1.54779H2.64257V8.78123ZM14.4712 8.78123V32.9769M32.1513 8.78123V32.9769" stroke="#9E9E9E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_4_1789">
                                <rect width="47" height="82" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>

                </div>
            </div>

            <div :class="{'button_gradient' : this.current_step==4}" v-if=" this.$page.props.auth.user.role_id ==2"  class="group hover:cursor-pointer border border-gray-400 rounded " @click="this.current_step=4">
                <div class="bg-white rounded-[calc(0.3rem-1px)] py-4 w-28">
                    <svg class="mx-auto" width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path :class="{'stroke-[#9E9E9E]' : current_step!=4 , 'stroke-[#9645DF]': current_step ==4}" class="group-hover:stroke-[#9645DF]" d="M58.0329 44.0011C57.1696 42.9939 56.1826 42.1246 55.0988 41.4172C54.0277 40.7187 52.9029 40.1485 51.7545 39.7229L51.735 39.7162C50.5281 39.3067 49.1047 38.8751 47.5046 38.434C46.8618 38.2572 46.1646 38.0736 45.4384 37.8874V24.474C49.7058 25.2936 52.0026 27.7773 52.4215 32.009L52.4867 32.67H59.783L59.7696 31.9236C59.7272 29.5993 59.2357 27.4955 58.3086 25.6708C57.3827 23.8494 56.1073 22.2956 54.5178 21.0517C52.9398 19.8173 51.0236 18.8646 48.8217 18.2184C47.7479 17.9038 46.6164 17.6671 45.4377 17.5064V11.979H38.5596V17.4486C37.2055 17.612 35.9179 17.8722 34.7272 18.2541C32.6489 18.921 30.847 19.8583 29.3719 21.041C27.88 22.2371 26.7154 23.6967 25.9113 25.3796C25.1065 27.0619 24.6984 28.9075 24.6984 30.8654C24.6984 32.6209 24.9727 34.2177 25.5139 35.6115C26.0653 37.0322 26.9763 38.3063 28.2208 39.3988C29.4358 40.4665 31.0299 41.4146 32.9576 42.2167C34.5362 42.8742 36.4202 43.4565 38.5596 43.9547V59.2124C38.4251 59.1808 38.2859 59.1566 38.1535 59.1216C36.673 58.7377 35.3572 58.1514 34.2431 57.3782C33.1485 56.6191 32.2523 55.6348 31.5799 54.4521C30.9055 53.2674 30.4974 51.836 30.367 50.1988L30.3132 49.5245H23.0874L23.1076 50.2768C23.1701 52.6206 23.6233 54.8233 24.455 56.8242C25.2954 58.8466 26.5729 60.6196 28.2518 62.0947C29.9219 63.5618 32.0391 64.7176 34.5456 65.5298C35.774 65.9278 37.116 66.2284 38.5603 66.4307V72.02H45.4384V66.6432C47.1704 66.4933 48.815 66.1665 50.3385 65.6488C52.486 64.9193 54.3625 63.8987 55.9157 62.6138C57.4809 61.3189 58.7174 59.761 59.5901 57.9827C60.4668 56.1962 60.9112 54.2148 60.9112 52.0928C60.9112 50.4402 60.647 48.916 60.1266 47.5625C59.8285 46.7873 59.5 46 59 45L58.0329 44.0011ZM36.8034 35.676C35.5145 35.2518 34.4898 34.7832 33.759 34.2836C33.0893 33.8264 32.6268 33.306 32.3834 32.7352C32.1232 32.126 31.9914 31.3743 31.9914 30.4996C31.9914 28.6332 32.7854 27.1573 34.4186 25.9875C35.4762 25.2304 36.8626 24.7073 38.5609 24.4222V36.2018C37.9155 36.0243 37.3272 35.8488 36.8034 35.676ZM52.8161 55.5534C52.3139 56.4302 51.6059 57.1826 50.713 57.789C49.7973 58.4103 48.6785 58.8903 47.3876 59.2137C46.7703 59.3684 46.1182 59.4847 45.4391 59.5674V45.5905C45.8022 45.6894 46.1558 45.7882 46.49 45.885C48.2435 46.396 49.6709 46.9776 50.7325 47.6143C51.7383 48.2181 52.4685 48.9153 52.9035 49.6858C53.3392 50.4577 53.5597 51.4326 53.5597 52.5837C53.5597 53.7347 53.3096 54.6908 52.8161 55.5534Z" stroke="#9E9E9E" stroke-width="2" stroke-miterlimit="10"/>
                        <path :class="{'stroke-[#9E9E9E]' : current_step!=4 , 'stroke-[#9645DF]': current_step ==4}" class="group-hover:stroke-[#9645DF]" d="M42 82.9665C19.411 82.9665 1.03363 64.5891 1.03363 42.0001C1.03363 19.4111 19.411 1.03369 42 1.03369C64.589 1.03369 82.9664 19.4111 82.9664 42.0001C82.9664 64.5891 64.589 82.9665 42 82.9665Z" stroke="#9E9E9E" stroke-width="2" stroke-miterlimit="10"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="w-full px-20 hidden flex-wrap" :class="{'!flex': this.current_step===1 }" >
            <div class="w-full mb-10">
                <h2 class="text-2xl font-bold">Add Child</h2>
            </div>

            <div class="w-1/2 flex px-10 items-center flex-col">
                <div class="w-full flex flex-col relative my-3">
                    <InputLabel class="absolute -top-2 px-2 bg-white left-4"  />
                    <span class="text-gray-400 text-xs ">
                        Child first name
                    </span>
                    <inputField
                        v-model="this.user_information_form.qualifications[this.user_information_form.qualifications?.length-1].subject"
                        id="from"
                        type="text"
                        placeholder="Enter child first name"
                        class="mt-1 block w-full !border-gray-400"
                        required
                        autofocus
                        />
                </div>
                
                <div class="w-full flex flex-col relative my-3">
                    <InputLabel class="absolute -top-2 px-2 bg-white left-4"  />
                    <span class="text-gray-400 text-xs ">
                        Child last name
                    </span>
                    <inputField
                        v-model="this.user_information_form.qualifications[this.user_information_form.qualifications?.length-1].subject"
                        id="from"
                        type="text"
                        placeholder="Enter child last name"
                        class="mt-1 block w-full !border-gray-400"
                        required
                        autofocus
                        />
                </div>

                <div class="w-full flex flex-col space-y-2 transition-all my-3">
                    <InputLabel class="absolute -top-2 px-2 bg-white left-4" value="Date of birth"/>
                    <span class="text-gray-400 text-xs ">
                        Select child DOB
                    </span>

                    <inputField
                        id="name"
                        type="date"
                        class="mt-1 block w-full "
                        :max="max_date"
                        placeholder="Enter child DOB"
                        v-model="this.user_information_form.birthday"
                        required
                        autofocus
                    />
    
                </div>

                <div v-if="this.$page.props.auth.user.role_id ==3" class="w-full flex flex-col space-y-2" >
                    <InputLabel class="!text-xl font-bold" />
                    <span class="text-gray-400 text-xs ">
                        Select child gender
                    </span>
                    <Dropdown
                        v-model="this.user_information_form.current_status"
                        :options="this.current_statuses"
                        option-label="name"
                        option-value="id"
                        placeholder="Select geneder"
                        class="mt-1  w-full border-gray-300 rounded-full px-3   border-2 bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "/>
                </div>

            </div>

            <div class="w-1/2 flex px-10 items-center flex-col space-y-10">
                <div class="w-full flex flex-col space-y-2">
                    <InputLabel class="!text-xl font-bold  " value="Country"/>
                    <span class="text-gray-400 text-xs ">
                        Select your country of residence
                    </span>

                        <Dropdown filter v-model="this.user_information_form.country_id"
                                  :options="this.countries"
                                  option-label="name"
                                  option-value="id"
                                  placeholder="Select your country"
                                  class="mt-1  w-full border-gray-300 rounded-full px-3 border-2 bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 ">
                            <template #option="slotProps">
                                <div class="flex align-items-center items-center">
                                    <img  src="https://primefaces.org/cdn/primevue/images/flag/flag_placeholder.png" :class="`mr-2 flag flag-${slotProps.option.code.toLowerCase()}`"  />
                                    <div>{{ slotProps.option.name }}</div>
                                </div>
                            </template>
                        </Dropdown>
                    </div>

                <div class="w-full flex flex-col space-y-2">
                    <InputLabel class="!text-xl font-bold  " value="Languages"/>
                    <span class="text-gray-400 text-xs ">
                            Select your native language and any other languages you speak!
                    </span>
                    <MultiSelect
                        v-model="this.user_information_form.languages"
                        :options="this.languages"
                        option-label="name"
                        option-value="id"
                        placeholder="+ add your languages"
                        class="mt-1  w-full border-gray-300 rounded-full px-3   border-2 bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "
                    />
                </div>
            
                <div v-if="this.$page.props.auth.user.role_id ==3" class="w-full flex flex-col space-y-2" >
                    <InputLabel class="!text-xl font-bold  " value="I am currently"/>
                    <span class="text-gray-400 text-xs ">
                        Select your status
                    </span>
                    <Dropdown
                        v-model="this.user_information_form.current_status"
                        :options="this.current_statuses"
                        option-label="name"
                        option-value="id"
                        placeholder="Working"
                        class="mt-1  w-full border-gray-300 rounded-full px-3   border-2 bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "/>
                </div>


                <!-- <div class="w-full flex flex-col space-y-2" >
                    <InputLabel class="!text-xl font-bold  " value="About"/>
                    <InputArea id="from" type="text" class="mt-1 block w-full h-32 " v-model="this.user_information_form.about" required autofocus />
                </div> -->

                <div class="w-full flex flex-col items-start" v-if="this.$page.props.auth.user.role_id ==2">
                        <InputLabel class="!text-xl font-bold text-center " value="About"/>

                        <InputArea
                            class=" mt-4 w-full h-32 border-gray-300"
                            placeholder="Write a brief introduction about yourself."
                            v-model="this.user_information_form.about"/>
                    </div>

            </div>
        </div>

        <div class="hidden w-full px-20 flex-wrap flex-col " :class="{'!flex': this.current_step===2}" >
            <h2 class="text-2xl font-bold w-full pb-10">Educational Qualifications.</h2>
            <div class="w-full flex  flex-row flex-wrap">
                <div class="flex ps-8 flex-col space-y-10" :class="this.$page.props.auth.user.role_id === 2 ? 'w-full' : this.$page.props.auth.user.role_id === 3 ? 'w-1/2' : ''">
                    <div class="w-full flex flex-col space-y-2 ">
                        <!-- <InputLabel class="!text-xl font-bold  " value="Add your current and past work experience"/> -->
                        <div class="w-full flex flex-col space-y-10 max-h-[50vh] overflow-auto" v-if="this.user_information_form.qualifications.length > 1">
                            <template v-for="(exp, index) in this.user_information_form.qualifications">
                                <div v-if="exp.qualification" :class="{'border-2 text-gray-400 rounded-2xl border-[#D9D9D9] p-4': true, 'active': this.selectedEducationIndex === index}"  @click="this.handleQualificationClick(index)">
                                    <p> {{ this.getQualificationName(exp.qualification) }}</p>   
                                    <p> {{exp.other_qualification}}</p>
                                    <p> {{exp.subject}}</p>
                                    <p> {{exp.graduating_date}}</p>
                                </div>
                            </template>
                        </div>

                        <div class="w-full">
                            <div class="w-full flex justify-between">
                                <div class="button_gradient !rounded-3xl" v-if="this.user_information_form.qualifications.length > 1">
                                    <Button class="text-gray-400 bg-white px-8 py-2 hover:bg-white rounded-[calc(1.2rem-1px)] "
                                        @click="this.edit_qualification_open=true; this.checkOtherOption();"
                                    >Edit </Button>
                                </div>
                                <div class="button_gradient !rounded-3xl" v-if="this.user_information_form.qualifications.length > 1">
                                    <Button class="text-gray-400 bg-white px-8 py-2 hover:bg-white rounded-[calc(1.2rem-1px)] " @click="this.handleEducationRemove">Delete </Button>
                                </div>
                                <div class="button_gradient !rounded-3xl">
                                    <Button class="unify_button px-8 py-2" @click="add_qualification">Add</Button>
                                </div>


                                <Dialog v-model:visible="open_qualification"
                                        modal header="Add Qualifications"
                                        class="w-1/3">
                                    <template #header>
                                        <div class="inline-flex items-center justify-center gap-2">
                                            <span class="font-bold whitespace-nowrap">Add Qualifications</span>
                                        </div>
                                    </template>
                                    <div class="flex flex-col gap-y-5 w-full py-4">
                                        <div class="w-full flex flex-col relative">
                                            <Dropdown
                                                v-model="this.user_information_form.qualifications[this.user_information_form.qualifications?.length-1].qualification"
                                                @change="checkOtherOption"
                                                :options="this.qualifications"
                                                option-label="name"
                                                option-value="id"
                                                placeholder="Select qualification"
                                                class="z-50 mt-1 w-full border-black rounded-full px-3  border-[1px] bg-transparent focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "
                                            />
                                        </div>

                                        <div v-if="showFreeText" class="w-full flex flex-col relative">
                                            <InputLabel for="otherQualification" value="Please specify:" />
                                            <inputField
                                                id="from"
                                                type="text"
                                                placeholder="Specify"
                                                class="mt-1 block w-full !border-gray-400"
                                                v-model="this.user_information_form.qualifications[this.user_information_form.qualifications?.length-1].other_qualification"
                                                required
                                                autofocus
                                            />
                                        </div>

                                        <div class="w-full flex flex-col relative">
                                            <InputLabel value="Please enter the subject" class="absolute -top-2 px-2 bg-white left-4"  />
                                            <inputField
                                                v-model="this.user_information_form.qualifications[this.user_information_form.qualifications?.length-1].subject"
                                                id="from"
                                                type="text"
                                                placeholder="Specify the subject you are studying"
                                                class="mt-1 block w-full !border-gray-400"
                                                required
                                                autofocus
                                                />
                                        </div>
                                        
                                        <div class="w-full flex flex-col relative">
                                            <InputLabel value="Year of Completion" class="absolute -top-2 px-2 bg-white left-4"  />
                                            <inputField
                                                id="name"
                                                :type="number"
                                                @input="validateYear"
                                                maxlength="4"
                                                pattern="\d{4}"
                                                placeholder="Year of Completion"
                                                class="mt-1 block w-full !border-gray-400"
                                                v-model="this.user_information_form.qualifications[this.user_information_form.qualifications?.length-1].graduating_date"
                                                required
                                                autofocus
                                            />
                                        </div>
                                    </div>
                                    
                                    <template #footer>
                                        <Button @click="check_qualification_data" type="submit" class="unify_button px-5 py-2">
                                            Submit
                                        </Button>
                                    </template>
                                </Dialog>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="hidden w-full px-20 flex-wrap flex-col " :class="{'!flex': this.current_step===2 && this.$page.props.auth.user.role_id ==2}" >
            <h2 class="text-2xl font-bold w-full pb-10">How are you qualified?</h2>
            <span class="text-gray-400 text-xs ">
                Please select your qualification method and provide the necessary details:
            </span>


            <div class="full flex   flex-col">
                <div class="w-full flex items-center mt-5">
                    <Checkbox
                        v-model="temp_coach_certificate"
                        :pt:box:class="'!border-[1px] rounded-none !border-black !shadow-none '"
                        :binary="true" />
                    <label  class="ml-4 w-full text-xl">Professional Coaching Certification</label>
                </div>
                <span class="text-gray-400 text-xs mt-5">
                        Upload a copy of your certification.
                </span>

                <div class="w-1/2 mt-5">
                    <input type="file"
                           class="p-4 w-full border rounded-3xl"
                           @change="handleFileUpload($event,'professional_certificate')"
                           @input="user_information_form.professional_certificate = $event.target.files[0]"
                           required
                    />
                </div>

                <div class="w-full flex items-center mt-5">
                    <Checkbox
                        v-model="temp_experience"
                        :pt:box:class="'!border-[1px] rounded-none !border-black !shadow-none '"
                        :binary="true" />
                    <label  class="ml-4 w-full text-xl">Through Experience</label>
                </div>
                <span class="text-gray-400 text-xs mt-5">
                        Select the number of years of industry experience you have
                </span>

                <Dropdown
                    v-model="this.user_information_form.current_exp"
                    :options="this.current_experiences"
                    option-label="name"
                    option-value="id"
                    placeholder="Select from the drop-down menu"
                    class="w-1/2 mt-5   border-gray-300 rounded-full px-3   border-[1px] bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "
                />
                
                <!-- <div class="w-full flex flex-col space-y-2 transition-all mt-10  ">
                    <label  class="w-full text-xl">Education Qualification Details</label>
                    <span class="text-gray-400 text-xs mt-5">
                        Please enter your education qualifications.
                    </span>
                    <Dropdown
                        v-model="this.chooseSelectedCoachQualification"
                        :options="this.qualifications"
                        option-label="name"
                        option-value="id"
                        placeholder="Select from the drop-down menu"
                        class="mt-5  w-1/2 border-gray-300 rounded-full px-3   border-[1px] bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "
                    />
                </div> -->
            </div>
        </div>

        <div class="hidden w-full px-20 flex-wrap flex-col " :class="{'!flex': this.current_step===3 && this.$page.props.auth.user.role_id ==3}" >
            <h2 class="text-2xl font-bold w-full pb-10">Work Experience</h2>

            <div class="w-full flex  flex-row flex-wrap">

                <div class="w-1/2 flex pe-8 flex-col space-y-10 ">
                    <div class="w-full flex flex-col space-y-2 ">
                        <InputLabel class="!text-xl font-bold" value="Do you have any previous work experience?"/>
                            <Dropdown
                                v-model="this.temp_work_exp"
                                :options="[
                                    {
                                        id:'y',
                                        name:'yes'
                                    },{
                                        id:'n',
                                        name:'none'
                                    },
                                ]"
                                option-label="name"
                                option-value="id"
                                placeholder="None"
                                class="mt-1  w-full border-gray-300 rounded-full px-3   border-[1px] bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "
                            />
                    </div>
                    <div class="w-full flex flex-col space-y-2 " v-if="this.temp_work_exp==='y'">
                        <InputLabel class="!text-xl font-bold  " value="Select the number of years of industry  experience you have:"/>

                        <Dropdown
                            v-model="this.user_information_form.current_exp"
                            :options="this.current_experiences"
                            option-label="name"
                            option-value="id"
                            placeholder="None"
                            class="mt-1  w-full border-gray-300 rounded-full px-3   border-[1px] bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "
                        />

                    </div>
                </div>

                <div class="w-1/2 flex ps-8 flex-col space-y-10" v-if="this.temp_work_exp==='y'">
                    <div class="w-full flex flex-col space-y-2 ">
                        <InputLabel class="!text-xl font-bold  " value="Add your current and past work experience"/>
                        <!-- <div class="w-full flex flex-col space-y-10 max-h-[50vh] overflow-auto">
                            <template v-for="exp in this.user_information_form.work_experiences">
                                <div v-if="exp.title" class="border-2 text-gray-400 rounded-2xl border-[#D9D9D9] p-4" >
                                    <p> {{exp.title}}</p>
                                    <p> {{exp.company_name}}</p>
                                    <p> {{this.convertToMonthYear(exp.from)}} - {{this.convertToMonthYear(exp.to)}} - {{getDateDiffInYearsMonths(exp.from , exp.to)}} </p>
                                </div>

                            </template>
                        </div> -->

                        <div class="w-full flex flex-col space-y-10 max-h-[50vh] overflow-auto" v-if="this.user_information_form.work_experiences.length > 1">
                            <template v-for="(exp, index) in this.user_information_form.work_experiences">
                                <div v-if="exp.title" :class="{'border-2 text-gray-400 rounded-2xl border-[#D9D9D9] p-4': true, 'active': this.selected_work_index === index}"  @click="this.handleWorkExperiencesClick(index)">
                                    <p> {{exp.title}}</p>
                                    <p> {{exp.company_name}}</p>
                                    <!-- <p> {{this.convertToMonthYear(exp.from)}} - {{this.convertToMonthYear(exp.to)}} - {{getDateDiffInYearsMonths(exp.from , exp.to)}} </p> -->
                                    <p> 
                                    {{ this.convertToMonthYear(exp.from) }} - 
                                    <span v-if="exp.currently_working_here">Present</span>
                                    <span v-else>{{ this.convertToMonthYear(exp.to) }}</span> - 
                                    {{ exp.currently_working_here ? getDateDiffInYearsMonths(exp.from, new Date()) : getDateDiffInYearsMonths(exp.from , exp.to) }} 
                                    </p>
                                </div>
                            </template>
                        </div>

                        
                        <div class="w-full">
                            <div class="w-full flex justify-between">
                                <!-- <div class="button_gradient !rounded-3xl">
                                    <Button class="text-gray-400 bg-white px-8 py-2 hover:bg-white rounded-[calc(1.2rem-1px)] "
                                        @click="this.edit_work_open=true; this.selected_work_index=this.user_information_form.work_experiences?.length-1;"
                                    >Edit </Button>
                                </div>
                                <div class="button_gradient !rounded-3xl">
                                    <Button class="text-gray-400 bg-white px-8 py-2 hover:bg-white rounded-[calc(1.2rem-1px)] " @click="this.user_information_form.work_experiences.pop()">Delete </Button>
                                </div>
                                <div class="button_gradient !rounded-3xl">
                                    <Button class="unify_button px-8 py-2" @click="add_work">Add </Button>
                                </div> -->
                                
                                <div class="button_gradient !rounded-3xl" v-if="this.user_information_form.work_experiences.length > 1">
                                    <Button class="text-gray-400 bg-white px-8 py-2 hover:bg-white rounded-[calc(1.2rem-1px)] "
                                        @click="this.edit_work_open=true; this.checkOtherOption();"
                                    >Edit </Button>
                                </div>

                                <div class="button_gradient !rounded-3xl" v-if="this.user_information_form.work_experiences.length > 1">
                                    <Button class="text-gray-400 bg-white px-8 py-2 hover:bg-white rounded-[calc(1.2rem-1px)] " @click="this.handleWorkExperiencesRemove">Delete </Button>
                                </div>
                                <div class="button_gradient !rounded-3xl">
                                    <Button class="unify_button px-8 py-2" @click="add_work">Add</Button>
                                </div>
                                
                                <Dialog v-model:visible="open_work"
                                        modal header="Add Experience"
                                        class="w-1/3"
                                >
                                    <template #header>
                                        <div class="inline-flex items-center justify-center gap-2">
                                            <span class="font-bold whitespace-nowrap">Experience</span>
                                        </div>
                                    </template>
                                    <span class="text-surface-500 dark:text-surface-400 block mb-8">Add Your Current and past work experience</span>
                                    <div class="flex flex-col gap-y-5 w-full py-4">

                                        <div class="w-full flex flex-col relative">
                                            <InputLabel value="Job Title" class="absolute -top-2 px-2 bg-white left-4 "  />
                                            <InputField
                                                id="from"
                                                type="text"
                                                class="mt-1 block w-full !border-gray-400"
                                                placeholder="Type your job title"
                                                v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].title"
                                                required
                                                autofocus
                                            />
                                        </div>

                                        <div class="w-full flex flex-col relative">
                                            <InputLabel value="Company Name" class="absolute -top-2 px-2 bg-white left-4"  />
                                            <InputField
                                                id="from"
                                                type="text"
                                                class="mt-1 block w-full !border-gray-400"
                                                placeholder="type your past or current company name"
                                                v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].company_name"
                                                required
                                                autofocus
                                            />
                                        </div>



                                        <div class="w-full flex flex-col ">
                                            <Dropdown filter v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].country_id"
                                                      :options="this.countries"
                                                      option-label="name"
                                                      option-value="id"
                                                      placeholder="Country"
                                                      class="z-50 mt-1 w-full border-black rounded-full px-3  border-[1px] bg-transparent
                                                  focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 ">
                                                <template #option="slotProps">
                                                    <div class=" flex align-items-center items-center">
                                                        <img  src="https://primefaces.org/cdn/primevue/images/flag/flag_placeholder.png" :class="`mr-2 flag flag-${slotProps.option.code.toLowerCase()}`"  />
                                                        <div>{{ slotProps.option.name }}</div>
                                                    </div>
                                                </template>
                                            </Dropdown>

                                        </div>

                                        <div class="w-full flex flex-col relative">
                                            <InputLabel value="Short Description" class="absolute -top-2 px-2 bg-white left-4"  />
                                            <InputArea
                                                id="from"
                                                type="text"
                                                class="mt-1 block w-full h-32 "

                                                v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].short_description"
                                                required
                                                autofocus
                                            />
                                        </div>

                                        <div class="w-full flex flex-row justify-between gap-x-5">
                                            <div class="w-[45%] relative">
                                                <InputLabel value="Start Date"  class="absolute -top-2 px-2 bg-white left-4"  />
                                                <InputField
                                                    id="from"
                                                    type="date"
                                                    class="mt-1 block w-full "
                                                    v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].from"
                                                    required
                                                    autofocus
                                                />
                                            </div>
                                            <div class="w-[45%] relative">
                                                <InputLabel value="End Date" class="absolute -top-2 px-2 bg-white left-4"  />
                                                <InputField
                                                    id="ro"
                                                    type="date"
                                                    class="mt-1 block w-full "
                                                    v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].to"
                                                    :class="{ 'disabled-datepicker': this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].currently_working_here }"
                                                    :disabled="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].currently_working_here"
                                                    required
                                                    autofocus />
                                            </div>

                                        </div>


                                        <div class="w-full flex items-center currently-working">
                                            <Checkbox
                                                v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].currently_working_here"
                                                :pt:box:class="'!border-[1px] rounded-none !border-black !shadow-none '"
                                                :binary="true" />
                                                <label  class="ml-4 w-full text-sm">I am currently working here</label>
                                        </div>

                                    </div>




                                    <template #footer>
                                        <Button @click="check_work_data" type="submit" class="unify_button px-5 py-2">
                                            Submit
                                        </Button>
                                    </template>
                                </Dialog>


                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>


        <div class="hidden w-full px-20 flex-wrap flex-col " :class="{'!flex': this.current_step===3 && this.$page.props.auth.user.role_id ==2}" >
            <h2 class="text-2xl font-bold w-full pb-10">Work Experience</h2>

            <div class="w-full flex  flex-row flex-wrap">

                <div class="w-1/2 flex pe-8 flex-col space-y-10 ">
                    <div class="w-full flex flex-col space-y-2 ">
                        <InputLabel class="!text-xl font-bold" value="Do you have any previous work experience?"/>
                            <Dropdown
                                v-model="this.temp_work_exp"
                                :options="[
                                    {
                                        id:'y',
                                        name:'yes'
                                    },{
                                        id:'n',
                                        name:'none'
                                    },
                                ]"
                                option-label="name"
                                option-value="id"
                                placeholder="None"
                                class="mt-1  w-full border-gray-300 rounded-full px-3   border-[1px] bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "
                            />
                    </div>
                    <div class="w-full flex flex-col space-y-2 " v-if="this.temp_work_exp==='y'">
                        <div class="w-full flex flex-col space-y-2 ">
                            <InputLabel class="!text-xl font-bold  " value="Add your current and past work experience"/>
                            <!-- <div class="w-full flex flex-col space-y-10 max-h-[50vh] overflow-auto">
                                <template v-for="exp in this.user_information_form.work_experiences">
                                    <div v-if="exp.title" class="border-2 text-gray-400 rounded-2xl border-[#D9D9D9] p-4" >
                                        <p> {{exp.title}}</p>
                                        <p> {{exp.company_name}}</p>
                                        <p> {{this.convertToMonthYear(exp.from)}}  - {{this.convertToMonthYear(exp.to)}}  - {{getDateDiffInYearsMonths(exp.from , exp.to)}}</p>
                                    </div>

                                </template>
                            </div> -->

                            <div class="w-full flex flex-col space-y-10 max-h-[50vh] overflow-auto" v-if="this.user_information_form.work_experiences.length > 1">
                            <template v-for="(exp, index) in this.user_information_form.work_experiences">
                                <div v-if="exp.title" :class="{'border-2 text-gray-400 rounded-2xl border-[#D9D9D9] p-4': true, 'active': this.selected_work_index === index}"  @click="this.handleWorkExperiencesClick(index)">
                                    <p> {{exp.title}}</p>
                                    <p> {{exp.company_name}}</p>
                                    <!-- <p> {{this.convertToMonthYear(exp.from)}} - {{ exp.currently_working_here }} {{ this.convertToMonthYear(exp.to)}} - {{getDateDiffInYearsMonths(exp.from , exp.to)}} </p> -->
                                    <p> 
                                    {{ this.convertToMonthYear(exp.from) }} - 
                                    <span v-if="exp.currently_working_here">Present</span>
                                    <span v-else>{{ this.convertToMonthYear(exp.to) }}</span> - 
                                    {{ exp.currently_working_here ? getDateDiffInYearsMonths(exp.from, new Date()) : getDateDiffInYearsMonths(exp.from , exp.to) }} 
                                    </p>

                                </div>
                            </template>
                        </div>

                            <div class="w-full">
                                <div class="w-full flex justify-between">
                                    <!-- <div class="button_gradient !rounded-3xl">
                                        <Button class="text-gray-400 bg-white px-8 py-2 hover:bg-white rounded-[calc(1.2rem-1px)] "
                                                @click="this.edit_work_open=true; this.selected_work_index=this.user_information_form.work_experiences?.length-1;"
                                        >Edit </Button>
                                    </div>
                                    <div class="button_gradient !rounded-3xl">
                                        <Button class="text-gray-400 bg-white px-8 py-2 hover:bg-white rounded-[calc(1.2rem-1px)] " @click="this.user_information_form.work_experiences.pop()">Delete </Button>
                                    </div>
                                    <div class="button_gradient !rounded-3xl">
                                        <Button class="unify_button px-8 py-2" @click="add_work">Add </Button>
                                    </div> -->
                                    
                                    <div class="button_gradient !rounded-3xl" v-if="this.user_information_form.work_experiences.length > 1">
                                        <Button class="text-gray-400 bg-white px-8 py-2 hover:bg-white rounded-[calc(1.2rem-1px)] "
                                            @click="this.edit_work_open=true; this.checkOtherOption();"
                                        >Edit </Button>
                                    </div>

                                    <div class="button_gradient !rounded-3xl" v-if="this.user_information_form.work_experiences.length > 1">
                                        <Button class="text-gray-400 bg-white px-8 py-2 hover:bg-white rounded-[calc(1.2rem-1px)] " @click="this.handleWorkExperiencesRemove">Delete </Button>
                                    </div>
                                    <div class="button_gradient !rounded-3xl">
                                        <Button class="unify_button px-8 py-2" @click="add_work">Add</Button>
                                    </div>


                                    <Dialog v-model:visible="open_work"
                                            modal header="Add Experience"
                                            class="w-1/3"
                                    >
                                        <template #header>
                                            <div class="inline-flex items-center justify-center gap-2">
                                                <span class="font-bold whitespace-nowrap">Experience</span>
                                            </div>
                                        </template>
                                        <span class="text-surface-500 dark:text-surface-400 block mb-8">Add Your Current and past work experience</span>
                                        <div class="flex flex-col gap-y-5 w-full py-4">

                                            <div class="w-full flex flex-col relative">
                                                <InputLabel value="Job Title" class="absolute -top-2 px-2 bg-white left-4 "  />
                                                <InputField
                                                    id="from"
                                                    type="text"
                                                    class="mt-1 block w-full !border-gray-400"
                                                    placeholder="Type your job title"
                                                    v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].title"
                                                    required
                                                    autofocus
                                                />
                                            </div>

                                            <div class="w-full flex flex-col relative">
                                                <InputLabel value="Company Name" class="absolute -top-2 px-2 bg-white left-4"  />
                                                <InputField
                                                    id="from"
                                                    type="text"
                                                    class="mt-1 block w-full !border-gray-400"
                                                    placeholder="type your past or current company name"
                                                    v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].company_name"
                                                    required
                                                    autofocus
                                                />
                                            </div>



                                            <div class="w-full flex flex-col ">
                                                <Dropdown filter v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].country_id"
                                                          :options="this.countries"
                                                          option-label="name"
                                                          option-value="id"
                                                          placeholder="Country"
                                                          class="z-50 mt-1 w-full border-black rounded-full px-3  border-[1px] bg-transparent
                                                  focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 ">
                                                    <template #option="slotProps">
                                                        <div class=" flex align-items-center items-center">
                                                            <img  src="https://primefaces.org/cdn/primevue/images/flag/flag_placeholder.png" :class="`mr-2 flag flag-${slotProps.option.code.toLowerCase()}`"  />
                                                            <div>{{ slotProps.option.name }}</div>
                                                        </div>
                                                    </template>
                                                </Dropdown>

                                            </div>

                                            <div class="w-full flex flex-col relative">
                                                <InputLabel value="Short Description" class="absolute -top-2 px-2 bg-white left-4"  />
                                                <InputArea
                                                    id="from"
                                                    type="text"
                                                    class="mt-1 block w-full h-32 "

                                                    v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].short_description"
                                                    required
                                                    autofocus
                                                />
                                            </div>

                                            <div class="w-full flex flex-row justify-between gap-x-5">
                                                <div class="w-[45%] relative">
                                                    <InputLabel value="Start Date"  class="absolute -top-2 px-2 bg-white left-4"  />
                                                    <InputField
                                                        id="from"
                                                        type="date"
                                                        class="mt-1 block w-full "
                                                        v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].from"
                                                        required
                                                        autofocus
                                                    />
                                                </div>
                                                <div class="w-[45%] relative">
                                                    <InputLabel value="End Date" class="absolute -top-2 px-2 bg-white left-4"  />
                                                    <InputField
                                                        id="ro"
                                                        type="date"
                                                        class="mt-1 block w-full "
                                                        v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].to"
                                                        :class="{ 'disabled-datepicker': this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].currently_working_here }"
                                                        :disabled="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].currently_working_here"
                                                        required
                                                        autofocus
                                                    />
                                                </div>

                                            </div>

                                            <div class="w-full flex items-center currently-working">
                                                <Checkbox
                                                    v-model="this.user_information_form.work_experiences[this.user_information_form.work_experiences?.length-1].currently_working_here"
                                                    :pt:box:class="'!border-[1px] rounded-none !border-black !shadow-none '"
                                                    :binary="true" />
                                                    <label  class="ml-4 w-full text-sm">I am currently working here</label>
                                            </div>
                                        </div>




                                        <template #footer>
                                            <Button @click="check_work_data" type="submit" class="unify_button px-5 py-2">
                                                Submit
                                            </Button>
                                        </template>
                                    </Dialog>


                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>

        </div>

        <div class="w-full px-20 hidden flex-wrap flex-col" :class="{'!flex': this.current_step===4 && this.$page.props.auth.user.role_id ==3}" >
            <h2 class="text-2xl font-bold">Your intro & Goals</h2>
            <div class="w-full flex  flex-row flex-wrap">
                <div class="w-1/2 flex px-10 items-start justify-start flex-col space-y-10">
                    <div class="w-full flex flex-col items-start ">
                        <InputLabel class="!text-xl font-bold text-center " value="What would you like to do?"/>
                        <div v-for="category of categories" :key="category.id" class="flex mt-4  items-center flex-row  space-x-5">
                            <Checkbox
                                v-model="this.user_information_form.what_to_do"

                                :pt:box:class="'!border-[1px] rounded-none !border-black !shadow-none '"
                                inputId="category.id" name="category" :value="category.id" />

                            <label :for="category.key" class="!text-gray-400 ">{{ category.name }}</label>
                        </div>
                    </div>

                    <div class="w-full flex flex-col items-start">
                        <InputLabel class="!text-xl font-bold text-center " value="Short Introduction"/>

                        <InputArea
                            class=" mt-4 w-full h-32 border-gray-300"
                            placeholder="Write a brief introduction about yourself."
                            v-model="this.user_information_form.about"/>
                    </div>
                </div>
                <div class="w-1/2 flex px-10 items-start justify-start flex-col space-y-10">
                    <div class="w-full flex flex-col items-start">
                        <InputLabel class="!text-xl font-bold text-center " value="Personal Goals (optional)"/>
                        <span class="text-gray-400 text-xs ">
                            Share any professional goals you're currently working towards
                            or aspiring to achieve on your profile. It could be anything from
                            learning a new skill to reaching a specific career milestone.
                            Let others know what drives you and how you're striving to
                            grow in your career.
                        </span>
                        <InputArea
                            class=" mt-4 w-full h-32 border-gray-300"
                            placeholder="Write a brief introduction about yourself."
                            v-model="this.user_information_form.personal_goals"/>
                    </div>


                    <div class="w-full flex flex-col">
                        <InputLabel class="!text-xl font-bold text-center " value="Careers interested in"/>
                        <MultiSelect
                            v-model="this.user_information_form.interested_in_industries"
                            :options="this.industries"
                            option-label="name"
                            option-value="id"
                            placeholder="Industries Interested In"
                            class="mt-1  w-full border-gray-300 rounded-full px-3   border-[1px] bg-transparent   focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "
                        />
                    </div>
                </div>

            </div>

        </div>

        <div class="w-full px-20 hidden flex-wrap flex-col" :class="{'!flex': this.current_step===4 && this.$page.props.auth.user.role_id ==2}" >
            <h2 class="text-2xl font-bold">Show me the money!</h2>
            <h4 class="text-lg ">Enter the amount you would like to charge per hour for your services. This will appear on your profile as your standard hourly rate. You can change this at any time.</h4>
            <div class="w-full flex flex-row flex-wrap border-b-2 border-gray-400 mt-10 pb-5 space-y-5">
                <div class="w-3/5">
                    <p class="text-xl text-black font-bold">Hourly Rate</p>
                    <span class="text-gray-400 text-xs ">
                        Total amount the client will See
                    </span>
                </div>
                <div class="w-2/5 flex flex-row items-center">
                    <InputNumber
                        outline
                        v-model="this.user_information_form.rate"
                        mode="currency"
                        pt:root:class="rounded-2xl border-gray-300 border mr-2 h-12 px-2 no_focus"
                        currency="USD"
                        locale="en-US"
                        fluid />
                    <span class="inline text-gray-300 "> / Hour</span>

                </div>
            </div>
            <div class="w-full flex flex-row flex-wrap border-b-2 border-gray-400 mt-10 pb-5 space-y-5">
                <div class="w-3/5">
                    <p class="text-xl text-black font-bold">Unify Service Fee</p>
                    <span class="text-gray-400 text-xs ">
                        The Unify service fee is 20% for each coaching engagement. Ones you bill over $500 with your client, the fee will be 10%.
                    </span>
                </div>
                <div class="w-2/5 flex flex-row items-center">
                    <InputNumber
                        outline
                        v-model="unify_share"
                        mode="currency"
                        pt:root:class="rounded-2xl border-gray-300 border mr-2 h-12 px-2 "
                        currency="USD"
                        locale="en-US"
                        fluid />
                    <span class="inline text-gray-300 "> / Hour</span>
                </div>
            </div>
            <div class="w-full flex flex-row flex-wrap border-b-2 border-gray-400 mt-10 pb-5 space-y-5">
                <div class="w-3/5">
                    <p class="text-xl text-black font-bold">You'll Receive</p>
                    <span class="text-gray-400 text-xs ">
                         The Unify service fee is 20% for each coaching engagement. Ones you bill over $500 with your client, the fee will be 10%.
                    </span>
                </div>
                <div class="w-2/5 flex flex-row items-center">
                    <InputNumber
                        outline
                        v-model="freelancer_share"
                        mode="currency"
                        pt:root:class="rounded-2xl border-gray-300 border mr-2 h-12 px-2 "
                        currency="USD"
                        locale="en-US"
                        fluid />
                    <span class="inline text-gray-300 "> / Hour</span>
                </div>
            </div>

        </div>



    </div>

    <div class="w-full pl-64 justify-between flex items-center  pt-20 pb-24">

        <svg v-if="current_step > 1" @click="current_step-=1"   class="hover:cursor-pointer absolute left-82" width="250" height="51" viewBox="0 0 250 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="1" y="1" width="248" height="49" rx="24.5" stroke="url(#paint0_linear_6_2090)" stroke-width="2"/>
            <path d="M100.455 23.86C100.455 24.47 100.315 25.03 100.035 25.54C99.755 26.04 99.325 26.445 98.745 26.755C98.165 27.065 97.445 27.22 96.585 27.22H94.995V31H92.43V20.47H96.585C97.425 20.47 98.135 20.615 98.715 20.905C99.295 21.195 99.73 21.595 100.02 22.105C100.31 22.615 100.455 23.2 100.455 23.86ZM96.39 25.18C96.88 25.18 97.245 25.065 97.485 24.835C97.725 24.605 97.845 24.28 97.845 23.86C97.845 23.44 97.725 23.115 97.485 22.885C97.245 22.655 96.88 22.54 96.39 22.54H94.995V25.18H96.39ZM104.355 24.025C104.655 23.565 105.03 23.205 105.48 22.945C105.93 22.675 106.43 22.54 106.98 22.54V25.255H106.275C105.635 25.255 105.155 25.395 104.835 25.675C104.515 25.945 104.355 26.425 104.355 27.115V31H101.79V22.63H104.355V24.025ZM116.096 26.68C116.096 26.92 116.081 27.17 116.051 27.43H110.246C110.286 27.95 110.451 28.35 110.741 28.63C111.041 28.9 111.406 29.035 111.836 29.035C112.476 29.035 112.921 28.765 113.171 28.225H115.901C115.761 28.775 115.506 29.27 115.136 29.71C114.776 30.15 114.321 30.495 113.771 30.745C113.221 30.995 112.606 31.12 111.926 31.12C111.106 31.12 110.376 30.945 109.736 30.595C109.096 30.245 108.596 29.745 108.236 29.095C107.876 28.445 107.696 27.685 107.696 26.815C107.696 25.945 107.871 25.185 108.221 24.535C108.581 23.885 109.081 23.385 109.721 23.035C110.361 22.685 111.096 22.51 111.926 22.51C112.736 22.51 113.456 22.68 114.086 23.02C114.716 23.36 115.206 23.845 115.556 24.475C115.916 25.105 116.096 25.84 116.096 26.68ZM113.471 26.005C113.471 25.565 113.321 25.215 113.021 24.955C112.721 24.695 112.346 24.565 111.896 24.565C111.466 24.565 111.101 24.69 110.801 24.94C110.511 25.19 110.331 25.545 110.261 26.005H113.471ZM121.215 28.6L123.03 22.63H125.76L122.79 31H119.625L116.655 22.63H119.4L121.215 28.6ZM128.129 21.76C127.679 21.76 127.309 21.63 127.019 21.37C126.739 21.1 126.599 20.77 126.599 20.38C126.599 19.98 126.739 19.65 127.019 19.39C127.309 19.12 127.679 18.985 128.129 18.985C128.569 18.985 128.929 19.12 129.209 19.39C129.499 19.65 129.644 19.98 129.644 20.38C129.644 20.77 129.499 21.1 129.209 21.37C128.929 21.63 128.569 21.76 128.129 21.76ZM129.404 22.63V31H126.839V22.63H129.404ZM135.073 31.12C134.253 31.12 133.513 30.945 132.853 30.595C132.203 30.245 131.688 29.745 131.308 29.095C130.938 28.445 130.753 27.685 130.753 26.815C130.753 25.955 130.943 25.2 131.323 24.55C131.703 23.89 132.223 23.385 132.883 23.035C133.543 22.685 134.283 22.51 135.103 22.51C135.923 22.51 136.663 22.685 137.323 23.035C137.983 23.385 138.503 23.89 138.883 24.55C139.263 25.2 139.453 25.955 139.453 26.815C139.453 27.675 139.258 28.435 138.868 29.095C138.488 29.745 137.963 30.245 137.293 30.595C136.633 30.945 135.893 31.12 135.073 31.12ZM135.073 28.9C135.563 28.9 135.978 28.72 136.318 28.36C136.668 28 136.843 27.485 136.843 26.815C136.843 26.145 136.673 25.63 136.333 25.27C136.003 24.91 135.593 24.73 135.103 24.73C134.603 24.73 134.188 24.91 133.858 25.27C133.528 25.62 133.363 26.135 133.363 26.815C133.363 27.485 133.523 28 133.843 28.36C134.173 28.72 134.583 28.9 135.073 28.9ZM149.079 22.63V31H146.514V29.86C146.254 30.23 145.899 30.53 145.449 30.76C145.009 30.98 144.519 31.09 143.979 31.09C143.339 31.09 142.774 30.95 142.284 30.67C141.794 30.38 141.414 29.965 141.144 29.425C140.874 28.885 140.739 28.25 140.739 27.52V22.63H143.289V27.175C143.289 27.735 143.434 28.17 143.724 28.48C144.014 28.79 144.404 28.945 144.894 28.945C145.394 28.945 145.789 28.79 146.079 28.48C146.369 28.17 146.514 27.735 146.514 27.175V22.63H149.079ZM154.326 31.12C153.596 31.12 152.946 30.995 152.376 30.745C151.806 30.495 151.356 30.155 151.026 29.725C150.696 29.285 150.511 28.795 150.471 28.255H153.006C153.036 28.545 153.171 28.78 153.411 28.96C153.651 29.14 153.946 29.23 154.296 29.23C154.616 29.23 154.861 29.17 155.031 29.05C155.211 28.92 155.301 28.755 155.301 28.555C155.301 28.315 155.176 28.14 154.926 28.03C154.676 27.91 154.271 27.78 153.711 27.64C153.111 27.5 152.611 27.355 152.211 27.205C151.811 27.045 151.466 26.8 151.176 26.47C150.886 26.13 150.741 25.675 150.741 25.105C150.741 24.625 150.871 24.19 151.131 23.8C151.401 23.4 151.791 23.085 152.301 22.855C152.821 22.625 153.436 22.51 154.146 22.51C155.196 22.51 156.021 22.77 156.621 23.29C157.231 23.81 157.581 24.5 157.671 25.36H155.301C155.261 25.07 155.131 24.84 154.911 24.67C154.701 24.5 154.421 24.415 154.071 24.415C153.771 24.415 153.541 24.475 153.381 24.595C153.221 24.705 153.141 24.86 153.141 25.06C153.141 25.3 153.266 25.48 153.516 25.6C153.776 25.72 154.176 25.84 154.716 25.96C155.336 26.12 155.841 26.28 156.231 26.44C156.621 26.59 156.961 26.84 157.251 27.19C157.551 27.53 157.706 27.99 157.716 28.57C157.716 29.06 157.576 29.5 157.296 29.89C157.026 30.27 156.631 30.57 156.111 30.79C155.601 31.01 155.006 31.12 154.326 31.12Z" fill="#061534"/>
            <defs>
                <linearGradient id="paint0_linear_6_2090" x1="0" y1="25.5" x2="250" y2="25.5" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFE48D"/>
                    <stop offset="1" stop-color="#FF74DC"/>
                </linearGradient>
            </defs>
        </svg>


        <svg v-if="current_step < 4" @click="current_step+=1;" class="absolute right-10 hover:cursor-pointer right" width="250" height="51" viewBox="0 0 250 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="250" height="51" rx="25.5" fill="url(#paint0_linear_6_2079)"/>
            <path d="M117.35 31H114.785L110.495 24.505V31H107.93V20.47H110.495L114.785 26.995V20.47H117.35V31ZM127.099 26.68C127.099 26.92 127.084 27.17 127.054 27.43H121.249C121.289 27.95 121.454 28.35 121.744 28.63C122.044 28.9 122.409 29.035 122.839 29.035C123.479 29.035 123.924 28.765 124.174 28.225H126.904C126.764 28.775 126.509 29.27 126.139 29.71C125.779 30.15 125.324 30.495 124.774 30.745C124.224 30.995 123.609 31.12 122.929 31.12C122.109 31.12 121.379 30.945 120.739 30.595C120.099 30.245 119.599 29.745 119.239 29.095C118.879 28.445 118.699 27.685 118.699 26.815C118.699 25.945 118.874 25.185 119.224 24.535C119.584 23.885 120.084 23.385 120.724 23.035C121.364 22.685 122.099 22.51 122.929 22.51C123.739 22.51 124.459 22.68 125.089 23.02C125.719 23.36 126.209 23.845 126.559 24.475C126.919 25.105 127.099 25.84 127.099 26.68ZM124.474 26.005C124.474 25.565 124.324 25.215 124.024 24.955C123.724 24.695 123.349 24.565 122.899 24.565C122.469 24.565 122.104 24.69 121.804 24.94C121.514 25.19 121.334 25.545 121.264 26.005H124.474ZM133.402 31L131.797 28.675L130.447 31H127.672L130.432 26.725L127.597 22.63H130.477L132.082 24.94L133.432 22.63H136.207L133.402 26.845L136.282 31H133.402ZM141.936 28.825V31H140.631C139.701 31 138.976 30.775 138.456 30.325C137.936 29.865 137.676 29.12 137.676 28.09V24.76H136.656V22.63H137.676V20.59H140.241V22.63H141.921V24.76H140.241V28.12C140.241 28.37 140.301 28.55 140.421 28.66C140.541 28.77 140.741 28.825 141.021 28.825H141.936Z" fill="#061534"/>
            <defs>
                <linearGradient id="paint0_linear_6_2079" x1="0" y1="25.5" x2="250" y2="25.5" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFE48D"/>
                    <stop offset="1" stop-color="#FF74DC"/>
                </linearGradient>
            </defs>
        </svg>


        <svg v-if="this.current_step >=4" @click="this.submit_information" class="absolute right-10 hover:cursor-pointer right" width="250" height="51"  viewBox="0 0 250 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="250" height="51" rx="25.5" fill="url(#paint0_linear_4_1250)"/>
            <path d="M101.74 31.105C100.97 31.105 100.28 30.98 99.67 30.73C99.06 30.48 98.57 30.11 98.2 29.62C97.84 29.13 97.65 28.54 97.63 27.85H100.36C100.4 28.24 100.535 28.54 100.765 28.75C100.995 28.95 101.295 29.05 101.665 29.05C102.045 29.05 102.345 28.965 102.565 28.795C102.785 28.615 102.895 28.37 102.895 28.06C102.895 27.8 102.805 27.585 102.625 27.415C102.455 27.245 102.24 27.105 101.98 26.995C101.73 26.885 101.37 26.76 100.9 26.62C100.22 26.41 99.665 26.2 99.235 25.99C98.805 25.78 98.435 25.47 98.125 25.06C97.815 24.65 97.66 24.115 97.66 23.455C97.66 22.475 98.015 21.71 98.725 21.16C99.435 20.6 100.36 20.32 101.5 20.32C102.66 20.32 103.595 20.6 104.305 21.16C105.015 21.71 105.395 22.48 105.445 23.47H102.67C102.65 23.13 102.525 22.865 102.295 22.675C102.065 22.475 101.77 22.375 101.41 22.375C101.1 22.375 100.85 22.46 100.66 22.63C100.47 22.79 100.375 23.025 100.375 23.335C100.375 23.675 100.535 23.94 100.855 24.13C101.175 24.32 101.675 24.525 102.355 24.745C103.035 24.975 103.585 25.195 104.005 25.405C104.435 25.615 104.805 25.92 105.115 26.32C105.425 26.72 105.58 27.235 105.58 27.865C105.58 28.465 105.425 29.01 105.115 29.5C104.815 29.99 104.375 30.38 103.795 30.67C103.215 30.96 102.53 31.105 101.74 31.105ZM115.424 22.63V31H112.859V29.86C112.599 30.23 112.244 30.53 111.794 30.76C111.354 30.98 110.864 31.09 110.324 31.09C109.684 31.09 109.119 30.95 108.629 30.67C108.139 30.38 107.759 29.965 107.489 29.425C107.219 28.885 107.084 28.25 107.084 27.52V22.63H109.634V27.175C109.634 27.735 109.779 28.17 110.069 28.48C110.359 28.79 110.749 28.945 111.239 28.945C111.739 28.945 112.134 28.79 112.424 28.48C112.714 28.17 112.859 27.735 112.859 27.175V22.63H115.424ZM119.831 23.815C120.071 23.425 120.416 23.11 120.866 22.87C121.316 22.63 121.831 22.51 122.411 22.51C123.101 22.51 123.726 22.685 124.286 23.035C124.846 23.385 125.286 23.885 125.606 24.535C125.936 25.185 126.101 25.94 126.101 26.8C126.101 27.66 125.936 28.42 125.606 29.08C125.286 29.73 124.846 30.235 124.286 30.595C123.726 30.945 123.101 31.12 122.411 31.12C121.821 31.12 121.306 31.005 120.866 30.775C120.426 30.535 120.081 30.22 119.831 29.83V31H117.266V19.9H119.831V23.815ZM123.491 26.8C123.491 26.16 123.311 25.66 122.951 25.3C122.601 24.93 122.166 24.745 121.646 24.745C121.136 24.745 120.701 24.93 120.341 25.3C119.991 25.67 119.816 26.175 119.816 26.815C119.816 27.455 119.991 27.96 120.341 28.33C120.701 28.7 121.136 28.885 121.646 28.885C122.156 28.885 122.591 28.7 122.951 28.33C123.311 27.95 123.491 27.44 123.491 26.8ZM138.127 22.54C139.167 22.54 139.992 22.855 140.602 23.485C141.222 24.115 141.532 24.99 141.532 26.11V31H138.982V26.455C138.982 25.915 138.837 25.5 138.547 25.21C138.267 24.91 137.877 24.76 137.377 24.76C136.877 24.76 136.482 24.91 136.192 25.21C135.912 25.5 135.772 25.915 135.772 26.455V31H133.222V26.455C133.222 25.915 133.077 25.5 132.787 25.21C132.507 24.91 132.117 24.76 131.617 24.76C131.117 24.76 130.722 24.91 130.432 25.21C130.152 25.5 130.012 25.915 130.012 26.455V31H127.447V22.63H130.012V23.68C130.272 23.33 130.612 23.055 131.032 22.855C131.452 22.645 131.927 22.54 132.457 22.54C133.087 22.54 133.647 22.675 134.137 22.945C134.637 23.215 135.027 23.6 135.307 24.1C135.597 23.64 135.992 23.265 136.492 22.975C136.992 22.685 137.537 22.54 138.127 22.54ZM144.616 21.76C144.166 21.76 143.796 21.63 143.506 21.37C143.226 21.1 143.086 20.77 143.086 20.38C143.086 19.98 143.226 19.65 143.506 19.39C143.796 19.12 144.166 18.985 144.616 18.985C145.056 18.985 145.416 19.12 145.696 19.39C145.986 19.65 146.131 19.98 146.131 20.38C146.131 20.77 145.986 21.1 145.696 21.37C145.416 21.63 145.056 21.76 144.616 21.76ZM145.891 22.63V31H143.326V22.63H145.891ZM152.414 28.825V31H151.109C150.179 31 149.454 30.775 148.934 30.325C148.414 29.865 148.154 29.12 148.154 28.09V24.76H147.134V22.63H148.154V20.59H150.719V22.63H152.399V24.76H150.719V28.12C150.719 28.37 150.779 28.55 150.899 28.66C151.019 28.77 151.219 28.825 151.499 28.825H152.414Z" fill="#061534"/>
            <defs>
                <linearGradient id="paint0_linear_4_1250" x1="0" y1="25.5" x2="250" y2="25.5" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFE48D"/>
                    <stop offset="1" stop-color="#FF74DC"/>
                </linearGradient>
            </defs>
        </svg>


    </div>


    <Dialog v-model:visible="edit_work_open"
            modal header="Add Experience"
            class="w-1/3"
    >
        <template #header>
            <div class="inline-flex items-center justify-center gap-2">
                <span class="font-bold whitespace-nowrap">Experience</span>
            </div>
        </template>
        <span class="text-surface-500 dark:text-surface-400 block mb-8">Edit Experience</span>
        <div class="flex flex-col gap-y-5 w-full py-4">

            <div class="w-full flex flex-col relative">
                <InputLabel value="Job Title" class="absolute -top-2 px-2 bg-white left-4 "  />
                <InputField
                    id="from"
                    type="text"
                    class="mt-1 block w-full !border-gray-400"
                    placeholder="Type your job title"
                    v-model="this.user_information_form.work_experiences[selected_work_index].title"
                    required
                    autofocus
                />
            </div>

            <div class="w-full flex flex-col relative">
                <InputLabel value="Company Name" class="absolute -top-2 px-2 bg-white left-4" />
                <InputField
                    id="from"
                    type="text"
                    class="mt-1 block w-full !border-gray-400"
                    placeholder="type your past or current company name"
                    v-model="this.user_information_form.work_experiences[selected_work_index].company_name"
                    required
                    autofocus
                />
            </div>

            <div class="w-full flex flex-col ">
                <Dropdown filter v-model="this.user_information_form.work_experiences[selected_work_index].country_id"
                          :options="this.countries"
                          option-label="name"
                          option-value="id"
                          placeholder="Country"
                          class="z-50 mt-1 w-full border-black rounded-full px-3  border-[1px] bg-transparent
                                                  focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 ">
                    <template #option="slotProps">
                        <div class=" flex align-items-center items-center">
                            <img  src="https://primefaces.org/cdn/primevue/images/flag/flag_placeholder.png" :class="`mr-2 flag flag-${slotProps.option.code.toLowerCase()}`"  />
                            <div>{{ slotProps.option.name }}</div>
                        </div>
                    </template>
                </Dropdown>

            </div>

            <div class="w-full flex flex-col relative">
                <InputLabel value="Short Description" class="absolute -top-2 px-2 bg-white left-4"  />
                <InputArea
                    id="from"
                    type="text"
                    class="mt-1 block w-full h-32 "

                    v-model="this.user_information_form.work_experiences[selected_work_index].short_description"
                    required
                    autofocus
                />
            </div>

            <div class="w-full flex flex-row justify-between gap-x-5">
                <div class="w-[45%] relative">
                    <InputLabel value="Start Date"  class="absolute -top-2 px-2 bg-white left-4"  />
                    <InputField
                        id="from"
                        type="date"
                        class="mt-1 block w-full "
                        v-model="this.user_information_form.work_experiences[selected_work_index].from"
                        required
                        autofocus
                    />
                </div>
                <div class="w-[45%] relative">
                    <InputLabel value="End Date" class="absolute -top-2 px-2 bg-white left-4"  />
                    <InputField
                        id="ro"
                        type="date"
                        class="mt-1 block w-full "
                        v-model="this.user_information_form.work_experiences[selected_work_index].to"
                        :class="{ 'disabled-datepicker': this.user_information_form.work_experiences[selected_work_index].currently_working_here }"
                        :disabled="this.user_information_form.work_experiences[selected_work_index].currently_working_here"
                        required
                        autofocus
                    />
                </div>

            </div>

            <div class="w-full flex items-center currently-working">
                <Checkbox v-model="this.user_information_form.work_experiences[selected_work_index].currently_working_here" :pt:box:class="'!border-[1px] rounded-none !border-black !shadow-none '" :binary="true" />
                <label  class="ml-4 w-full text-sm">I am currently working here</label>
            </div>

        </div>

        <template #footer>
            <Button @click="check_work_data" type="submit" class="unify_button px-5 py-2">
                Submit
            </Button>
        </template>
    </Dialog>
    
    <Dialog v-model:visible="edit_qualification_open" modal header="Add Qualification" class="w-1/3">
        <template #header>
            <div class="inline-flex items-center justify-center gap-2">
                <span class="font-bold whitespace-nowrap">Edit Qualifications</span>
            </div>
        </template>
        <span class="text-surface-500 dark:text-surface-400 block mb-8">Edit Qualifications</span>
        <div class="flex flex-col gap-y-5 w-full py-4">
            <div class="w-full flex flex-col relative">
                <Dropdown
                v-model="this.user_information_form.qualifications[selectedEducationIndex].qualification"
                @change="checkOtherOption"
                :options="this.qualifications"
                option-label="name"
                option-value="id"
                placeholder="Select qualification"
                class="z-50 mt-1 w-full border-black rounded-full px-3  border-[1px] bg-transparent focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-600 "
                />
            </div>

            <div v-if="showFreeText" class="w-full flex flex-col relative">
                <InputLabel for="otherQualification" value="Please specify:" />
                <inputField
                    id="from"
                    type="text"
                    placeholder="Specify"
                    class="mt-1 block w-full !border-gray-400"
                    v-model="this.user_information_form.qualifications[selectedEducationIndex].other_qualification"
                    required
                    autofocus
                />
            </div>

            <div class="w-full flex flex-col relative">
                <InputLabel value="Please enter the subject" class="absolute -top-2 px-2 bg-white left-4"  />
                <inputField
                    v-model="this.user_information_form.qualifications[selectedEducationIndex].subject"
                    id="from"
                    type="text"
                    placeholder="Specify the subject you are studying"
                    class="mt-1 block w-full !border-gray-400"
                    required
                    autofocus
                    />
            </div>

            <div class="w-full flex flex-col relative">
                <InputLabel value="Year of Completion" class="absolute -top-2 px-2 bg-white left-4"  />
                <inputField
                    id="name"
                    :type="number"
                    @input="validateYear"
                    maxlength="4"
                    pattern="\d{4}"
                    placeholder="Year of Completion"
                    class="mt-1 block w-full !border-gray-400"
                    v-model="this.user_information_form.qualifications[selectedEducationIndex].graduating_date"
                    required
                    autofocus
                />
            </div>
        </div>

        <template #footer>
            <Button @click="check_qualification_data" type="submit" class="unify_button px-5 py-2">
                Submit
            </Button>
        </template>
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
import Checkbox from 'primevue/checkbox';
import Dialog from 'primevue/dialog';
import InputNumber from 'primevue/inputnumber'

import MultiSelect from "primevue/multiselect";
import Slider from 'primevue/slider';

import current_experiences from "@/Helpers/CurrentExperiences.js";
import AddGoal from "@/Components/Goals/AddGoal.vue";
import axios from 'axios';
export default {
    name: "NewInformation",
    components: {
        AddGoal,Checkbox,
        InputNumber,

        Slider, MultiSelect,Dropdown, Button, NavLink, PrimaryButton, InputLabel, InputArea, InputField, InputError, Link, Stepper, StepperPanel,
        Dialog
    },
    layout:MainLayout,
    setup() {
        const  user_information_form=useForm({
            //first part
            image:null,
            professional_certificate:null,
            birthday:null,
            country_id:null,
            current_exp:null,
            languages:[],
            current_status:null,

            //second section
            

            //fourth section
            what_to_do:null,
            about: null,
            personal_goals:null,


            //work experience
            work_experiences:[{
                from:null,
                to : null,
                title:null,
                company_name:null,
                description:null,
                country_id:null,
                currently_working_here:null,
            }],
            current_job_level:null,

            //qualification experience
            qualifications:[{
                qualification:null,
                graduating_date:null,
                subject:null,
                professional_certificate:null,
                other_qualification:null,
            }],
            rate:null,
            interested_in_industries:[],
        })

        return {user_information_form}
    },
    data(){
        return {
            edit_qualification_open:false,
            showFreeText: false,
            chooseSelectedCoachQualification : "",
            isEditing: false,
            selected_qualification_index:0,
            selectedEducationIndex : 0,
            currentQualification: {
                qualification: null,
                other_qualification: '',
                subject: '',
                graduating_date: ''
            },
            user_information_form: {
                qualifications: []
            },
            categories:[{
                id:1,
                name:"Find out more about myself through the assessment"
            },{
                id:2,
                name:"Get coaching to help to get me to the next level in my career"
            },{
                id:3,
                name:"Explore a career change"
            },{
                id:4,
                name:"Not sure yet"
            }],
            temp_coach_certificate:false,
            temp_experience:false,
            temp_work_exp: (this.user.data.work_experiences?.length > 0) ? "y" : null,
            temp_qualification_list: (this.user.data.qualifications?.length > 0) ? "y" : null,
            current_step:1,
            open_work:false,
            edit_work_open:false,
            open_qualification:false,
            selected_work_index:0,
            current_experiences: current_experiences.data,
            max_date:null,
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
            
            otherQualification: '',
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
            current_statuses:[
                {
                    id:"w",
                    name:"I’m working!"
                },
                {
                    id:"s",
                    name:"I’m still in school!"
                },
                {
                    id:"l",
                    name:"I’m looking for work!"
                },
                {
                    id:"n",
                    name:"None of the above"
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

        validateYear() {
            const year = this.user_information_form.graduating_date;
            if (year.length > 4) {
                this.yearError = 'Year must be a 4-digit number';
            } else if (year < 1900 || year > new Date().getFullYear()) {
                this.yearError = `Year must be between 1900 and ${new Date().getFullYear()}`;
            } else {
                this.yearError = '';
            }
        },
        getDateDiffInYearsMonths(date1, date2) {
                // Parse the input dates
                const d1 = new Date(date1);
                const d2 = new Date(date2);

                // Calculate the difference in months
                let diffMonths = (d2.getFullYear() - d1.getFullYear()) * 12;
                diffMonths -= d1.getMonth(); // Adjust for starting month
                diffMonths += d2.getMonth(); // Adjust for ending month

                // Calculate the number of years and months
                const years = Math.floor(diffMonths / 12);
                const months = diffMonths % 12;

                // Format the result
                let result;
                if (years > 0) {
                    result = `${years} yrs ${months} mos`;
                } else {
                    result = `${months} mos`;
                }

                return result;

        },
        convertToMonthYear(dateStr) {
            try {
                // Parse the date string into a Date object
                const dateObj = new Date(dateStr);

                // Get month and year
                const month = dateObj.toLocaleString('default', { month: 'long' }); // 'long' gives full month name
                const year = dateObj.getFullYear();

                // Combine month and year in the desired format
                return `${month} ${year}`;
            } catch (error) {
                return "Invalid date format";
            }
        },

        check_work_data(){
           this.open_work=false;
           this.edit_work_open=false;
        },

        check_qualification_data(){
           this.open_qualification=false;
           this.edit_qualification_open=false;
        },

        handleFileUpload(event,field) {
            const file = event.target.files[0];
            //this.user_information_form.professional_certificate = event.target.files[0];
            this.user_information_form[field] = file;
        },
        submit_information() {
            let formData = new FormData();
            formData.append('professional_certificate', this.user_information_form.professional_certificate);
            formData.append('image', this.user_information_form.image);
            
            Object.entries(this.user_information_form).forEach(([key, value]) => {
                formData.append(key, value);
            });

            // formData.append('professional_certificate', this.user_information_form.professional_certificate);
            // // // Append other form data if necessary
            //  formData.append('other_field', this.user_information_form.other_field);

            axios.post(route('profile.store_information'), formData, {
                headers: {
                'Content-Type': 'multipart/form-data',
                },
            })
            .then(response => {
                console.log('File uploaded successfully', response.data);
                // Handle success, e.g., display a success message or redirect
            })
            .catch(error => {
                console.error('Error uploading file', error.response.data);
                // Handle error, e.g., display an error message
            });
        },


        submit_information(){
           // console.log(this.selectedCategories)
            this.user_information_form.post(route('profile.store_information'))
        },
        add_work (){
            this.open_work=true;
            this.user_information_form.work_experiences.push({
                from:null,
                to:null,
                title: null,
                company_name:null,
                description:null,
                currently_working_here:null,
            });
            this.selected_work_index = this.user_information_form.work_experiences.length - 1;
        },
        add_qualification (){
            this.open_qualification=true;
            
            this.user_information_form.qualifications.push({
                qualification:null,
                graduating_date : null,
                subject:null,
                professional_certificate:null,
                other_qualification:null,
            });
            this.selectedEducationIndex = this.user_information_form.qualifications.length - 1;
        },
        checkOtherOption() {
            
            this.showFreeText = (this.user_information_form.qualifications[this.selectedEducationIndex].qualification === 'o');
        },
        handleEducationRemove(){
           if(confirm('Are you sure you want to remove ?')){
                this.user_information_form.qualifications.splice(this.selectedEducationIndex,1);
           }
        },

        handleWorkExperiencesRemove(){
           if(confirm('Are you sure you want to remove ?')){
                this.user_information_form.work_experiences.splice(this.selected_work_index,1);
           }
        },

        getQualificationName(id) {
            const qualification = this.qualifications.find(q => q.id === id);
            return qualification ? qualification.name : '';
        },

        handleQualificationClick(index) {
            this.selectedEducationIndex = index;
        },
        
        handleWorkExperiencesClick(index) {
            this.selected_work_index = index;
        },
        // watch: {
        //     'user_information_form.qualifications[selected_qualification_index].qualification': function(newVal, oldVal) {
        //         this.checkOtherOption();
        //     }
        // },
    
    },
    watch: {
        'user_information_form.qualifications[this.selectedEducationIndex].qualification': function(newVal) {
            this.checkOtherOption();
        }
    },
    computed:{
        unify_share(){
            if (this.user_information_form.rate >500)
                return this.user_information_form.rate * 10 /100


            return this.user_information_form.rate * 20 /100
        },

        freelancer_share(){
            if (this.user_information_form.rate >500)
                return this.user_information_form.rate * 90 /100

            return this.user_information_form.rate * 80 /100
        },

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

        let today = new Date();
        let minDate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());
        this.max_date   =minDate.toISOString().split('T')[0]
        

        //console.log(this.user)
        //first section
        this.user_information_form.birthday=this.user.birthday
        this.user_information_form.country_id=this.user.country_id
        this.user.languages.forEach((language)=>{
            this.user_information_form.languages.push(language.id)
        })
        //this.user_information_form.current_status=this.user.data.current_status[0] ?? ""
        this.user_information_form.current_status = Array.isArray(this.user.data.current_status) && this.user.data.current_status.length > 0 ? this.user.data.current_status[0] : "";

        // console.log(this.user.data.qualifications)
        // console.log(this.user.data.graduating_date)
        //second section
        // this.user_information_form.qualification=(this.user.data["qualification"] == undefined) ? [] : this.user.data.qualification[0];
        // this.user_information_form.otherQualification=(this.user.data["other_qualification"] == undefined) ? [] : this.user.data.other_qualification;
        // this.user_information_form.graduating_date=(this.user.data["graduating_date"] == undefined) ? null : this.user.data.graduating_date
        // this.user_information_form.subject=(this.user.data["subject"] == undefined) ? [] : this.user.data["subject"]

        // Ensure this.user_information_form.qualifications is an array
        // Check if this.user.data["qualifications"] is not undefined
        if (this.user.data["qualifications"] != undefined) {
            // Iterate over the qualifications and push them into the array
            this.chooseSelectedCoachQualification = "";
            if (Array.isArray(this.user.data.qualifications)) {
                this.user.data.qualifications.forEach((qualification) => {
                    this.user_information_form.qualifications.push(qualification);
                    if(qualification.qualifications){
                        this.chooseSelectedCoachQualification = qualification.qualifications
                    }
                });
            }
        }

        if (this.user.data["work_experiences"] != undefined)
            //third part
            this.user.data.work_experiences?.forEach((work_experience)=>{
            this.user_information_form.work_experiences.push(work_experience)
        })

        //fourth part
        this.user_information_form.about=this.user.data.about ?? ""
        this.user_information_form.personal_goals=this.user.data.personal_goals
        this.user_information_form.what_to_do= this.user.data.what_to_do
        this.user.industries?.forEach((industry)=>{
            this.user_information_form.interested_in_industries.push(industry.id)
        })


        this.temp_coach_certificate=(this.user.data["professional_certificate"] != undefined)
        this.temp_experience=(this.user.data["current_exp"] != undefined)




        this.user_information_form.current_exp=this.user.data?.current_exp
        this.user_information_form.rate=this.user.data?.rate
        this.user_information_form.current_job_level=this.user.data?.current_job_level

        /** For coach profile only */
        this.user_information_form

        // this.user.data.education?.forEach((education)=>{
        //     this.user_information_form.education.push(education)
        // })

        this.checkOtherOption()


    }

}
</script>

<style scoped>
#files::-webkit-file-upload-button {
    display: none;
}
#files::file-selector-button {
    display: none;
}


.p-checkbox-box{
    border-bottom:1px solid black !important;
    border-radius:0;
}

.currently-working{
  padding-left:40%;
}
.disabled-datepicker {
  background-color: #f0f0f0; /* Example style for disabled datepicker */
}
.active.p-4.rounded-2xl.text-gray-400{
    border: 2px solid gray;
}

</style>
