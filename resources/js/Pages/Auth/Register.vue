<script setup>
import Dropdown from "primevue/dropdown";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { Head, useForm } from "@inertiajs/vue3";
import InputField from "@/Components/InputField.vue";
import Checkbox from "@/Components/Checkbox.vue";
import { onMounted, ref, computed, onUnmounted } from "vue";
import TodaiInputBox from "@/Components/Todai/TodaiInputBox.vue";
import TodaiButton from "@/Components/Todai/TodaiButton.vue";

const props = defineProps({
    countries: Object,
    schools: Array, // Ensure `schools` is an array
    type: {
        type: String,
        required: true, // Ensure `type` is a string and required
    },
    pakage_id: {
        type: String,
        required: true,
    },
});

const schoolsWithOther = computed(() => {
    return props.schools
        ? [...props.schools, { id: 0, name: "Other" }]
        : [{ id: 0, name: "Other" }];
});

const selectedGender = ref("");

const pageTitle = computed(() => {
    const titleMap = {
        1: "Register - Unify Kids",
        5: "Register - Unify Teens",
    };
    return titleMap[props.pakage_id] || "Default Title";
});

const form = useForm({
    name: "",
    parent_last_name: "",
    email: "",
    password: "",
    password_confirmation: "",
    agree: false,
    first_name: "",
    last_name: "",
    country_id: "",
    dob: "",
    gender: "",
    role_id: 3,
    school_id: "",
    grade: "",
    child_type: props.type,
    pakage_id: props.pakage_id,
    other_school: "",
    hasTriedSubmit: false,
    hasTriedSubmitStep2: false,
    hasTriedSubmitStep3: false,
    hasTriedSubmitStep4: false,
    hasTriedSubmitStep5: false,
});

const current_step = ref(1);

const submit = () => {
    // form.post(route('register'), {
    //     onFinish: () => form.reset('password', 'password_confirmation'),
    // });

    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
        onError: (errors) => {
            current_step.value = 1;
        },
    });
};

const last_step = () => {
    submit();
};

// Handle "Other" selection
const handleSchoolChange = (value) => {
    if (value === "other") {
        form.other_school = ""; // Clear any existing "Other" input when selecting "Other"
    } else {
        form.other_school = ""; // Clear if a school from the list is selected
    }
};

const selectGender = (gender) => {
    if (gender === "male") {
        selectedGender.value = "Male"; // Use selectedGender.value
        form.gender = "male";
    } else if (gender === "female") {
        selectedGender.value = "Female"; // Use selectedGender.value
        form.gender = "female";
    } else {
        selectedGender.value = "not_to_say"; // Use selectedGender.value
    }
};

const validateEmail = () => {
    // Simple email validation regex
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Check if email is valid
    if (emailPattern.test(form.email)) {
        // Clear error message if valid
        form.errors.email = null;
    } else {
        // Set error message if invalid
        form.errors.email = "Please enter a valid email address";
    }
};

// First step validation (called when clicking the Next button on step 1)
const validateFirstStep = () => {
    form.hasTriedSubmit = true;

    // Validation logic
    form.nameValid = !!form.name;
    form.parentLastNameValid = !!form.parent_last_name;
    form.emailValid = !!form.email;
    form.passwordValid = form.password && form.password.length >= 8;
    form.passwordConfirmValid = form.password === form.password_confirmation;
    form.agreeValid = form.agree;

    if (
        form.nameValid &&
        form.parentLastNameValid &&
        form.emailValid &&
        form.passwordValid &&
        form.passwordConfirmValid &&
        form.agreeValid
    ) {
        current_step.value = 2;
    }
};

//Step 2
const validateSecoundStep = () => {
    form.hasTriedSubmitStep2 = true;
    form.firstNameValid = !!form.first_name;
    form.lastNameValid = !!form.last_name;

    if (form.firstNameValid && form.lastNameValid) {
        current_step.value = 3; // Move to Step 3
    }
};

//Step 3
const validateThirdStep = () => {
    console.log(form.country_id);
    form.hasTriedSubmitStep3 = true;
    form.countryValid = !!form.country_id;
    if (form.countryValid) {
        current_step.value = 4; // Move to Step 4
    }
};

//Step 4
const validateForStep = () => {
    form.hasTriedSubmitStep4 = true;
    form.dobValid = !!form.dob;
    console.log("country_id" + form.country_id);
    console.log("current_step" + current_step.value);
    if (form.dobValid) {
        if (form.country_id == 247) {
            current_step.value = 5; // Move to Step 5
        } else {
            current_step.value = 6; // Move to Step 6
        }
    }
};

//Step 4
const validateFiveStep = () => {
    form.hasTriedSubmitStep5 = true;
    form.schoolValid = !!form.school_id;
    if (form.schoolValid) {
        current_step.value = 6; // Move to Step 6
    }
};

const isMdOrLarger = ref(false);

const checkScreenSize = () => {
    isMdOrLarger.value = window.innerWidth >= 768;
};

const handleResize = () => {
    checkScreenSize();
};

onMounted(() => {
    checkScreenSize(); // set initial value
    window.addEventListener('resize', handleResize);
});

onUnmounted(() => {
    window.removeEventListener('resize', handleResize);
});


</script>
<style scoped>
/* @media screen and (max-width: 767px) {
    .bg_img_brd {
        width: auto;
        height: 500px;
        padding: 50px 20px;
        border-radius: 20px;
        background-size: 687px 590px
        background-position: center;
        margin: 0;
    }
} */

ismrorlarger .special_input {
    width: 626px;
}

.special_center_box {
    width: 100%;
}

.gender_img {
    display: flex;
    justify-content: center;
}

.sign_data {
    /* margin-top:135px; */
}

.brd_gender {
    height: 200px;
    padding: 28px;
}

.step6-bg {
    background: white;
    background-repeat: no-repeat;
    background-size: 100%;
    padding: 0px 16px;
    position: absolute;
    width: 650px;
    left: 0;
    right: 0;
    margin: auto;
    height: 557px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

/* .commen_btn {
    padding: 10px 20px;
    border-radius: 5px;
    background-color: rgba(255, 231, 155, 1);
    color: #fff;
    text-decoration: none;
    display: inline-block;
} */

.ab_btn {
    position: relative;
    /* Ensure it follows the container */
}

.bg_img_brd {
    background-position: center;
    padding: 55px 0px;
    border-radius: 20px;
    /* padding-bottom: 100px; */
    /* Adjust to prevent overlap */
}

.input-error {
    border: 2px solid red !important;
}

.error-text {
    color: red;
}

.selected-border {
    border: 3px solid #9645df !important;
}

.child_txt {
    font-family: "Poppins", sans-serif;
    font-weight: 900;
}

.login_bg .first_page {
    height: 575px;
}

.login_bg .sign_top {
    /* width: 30vw; */
    margin-left: 15px;
    margin-right: 15px;
}

.mobile-device-height {
    background: transparent;
    min-height: 50vh;
}

@media screen and (min-width: 1920px) {
    .login_bg .first_page {
        width: 670px;
    }
}
</style>

<template>
    <div class="flex flex-col md:flex-row w-screen h-screen">
        <div class=" w-full h-full bg-white text-black">
            <div class="md:px-18 lg:px-28 flex flex-col justify-center items-center w-full h-full"
                :class="{ 'px-4 mb-4': !isMdOrLarger }">
                <div class="w-full flex flex-col gap-4">
                    <img src="/images/simplify-logo-crop.png" alt="Logo" style="width: 220px; align-self: center;" />
                    <!-- First Step Code -->
                    <div v-if="current_step === 1" class="flex flex-col gap-3 ">
                        <h2 class="text-4xl font-bold">Let’s get you started!</h2>
                        <h3 class="text-lg font-semibold">
                            Already a member?
                            <a href="/login" class="text-blue-500">Log in.</a>
                        </h3>
                        <div class="flex w-full gap-2">
                            <div class="flex-1">
                                <div class="flex justify-between mb-1">
                                    <label class="flex-1 text-sm text-brand-primary-text ml-1 font-medium">First
                                        Name</label>
                                </div>
                                <TodaiInputBox id="name" type="text" placeholder="First Name"
                                    :class="{ ' mr-2': true, 'input-error': form.hasTriedSubmit && !form.nameValid }"
                                    v-model="form.name" required autofocus autocomplete="name" />
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between mb-1">
                                    <label class="flex-1 text-sm text-brand-primary-text ml-1 font-medium">Last
                                        Name</label>
                                </div>
                                <TodaiInputBox id="parent_last_name" type="text" placeholder="Last Name"
                                    :class="{ '': true, 'input-error': form.hasTriedSubmit && !form.parentLastNameValid }"
                                    v-model="form.parent_last_name" required autocomplete="parent_last_name" />
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between mb-1">
                                <label class="flex-1 text-sm text-brand-primary-text ml-1 font-medium">Email</label>
                            </div>
                            <TodaiInputBox id="email" type="email" placeholder="Email"
                                :class="{ '': true, 'input-error': form.hasTriedSubmit && !form.emailValid }"
                                v-model="form.email" @input="validateEmail" required autocomplete="email" />
                            <InputError v-if="form.errors.email" class="mt-2" :message="form.errors.email" />
                        </div>
                        <div class="flex gap-2">
                            <div class="flex-1">
                                <div class="flex justify-between mb-1">
                                    <label
                                        class="flex-1 text-sm text-brand-primary-text ml-1 font-medium">Password</label>
                                </div>
                                <TodaiInputBox id="password" type="password"
                                    :class="{ '': true, 'input-error': form.hasTriedSubmit && !form.passwordValid }"
                                    v-model="form.password" required placeholder="Password" />
                                <InputError class="mt-2"
                                    v-if="form.hasTriedSubmit && (form.password.length < 8 || form.errors.password)"
                                    :message="form.password.length > 0 && form.password.length < 8 ? 'Password must be at least 8 characters long' : form.errors.password" />
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between mb-1">
                                    <label class="flex-1 text-sm text-brand-primary-text ml-1 font-medium">Confirm
                                        Password</label>
                                </div>
                                <TodaiInputBox id="password_confirmation" type="password"
                                    :class="{ '': true, 'input-error': form.hasTriedSubmit && !form.passwordConfirmValid }"
                                    v-model="form.password_confirmation" required placeholder="Confirm Password" />
                                <InputError class="mt-2"
                                    :message="form.password_confirmation !== form.password && 'Passwords do not match'" />
                            </div>
                        </div>

                        <div class="flex-1">
                            <div class="form-group chkbox" style="flex-direction: column; ">
                                <Checkbox name="terms" id="terms" class="" v-model:checked="form.agree" />
                                <label for="terms">
                                    <span>I have read and agree with the
                                        <a href="https://assessment.useunify.com/terms" target="_blank">Terms of
                                            Service</a> and
                                        <a href="https://assessment.useunify.com/privacy" target="_blank">Privacy
                                            Policy</a>
                                    </span>
                                </label>
                                <!-- <InputError v-if="form.hasTriedSubmit && !form.agreeValid" class="mt-2 error-text mb-0" :message="!form.agree && 'You must agree to the terms'" /> -->
                                <span v-if="form.hasTriedSubmit && !form.agreeValid"
                                    class="text-sm text-red-600 dark:text-red-400 error-text">You must
                                    agree to the terms.</span>
                            </div>
                        </div>
                        <TodaiButton @click="validateFirstStep" :text="'Get Started'" />
                    </div>

                    <!-- Second Step Code -->
                    <div v-if="current_step === 2" class="flex flex-col gap-3 mt-2">

                        <div class="flex-1">
                            <h1 class="text-4xl mt-3 font-bold">Sign Up</h1>
                            <h2 class="text-3xl font-semibold">Let’s get you started!</h2>
                            <h3 class="mt-3 mb-3">Enter your child’s Name</h3>

                            <TodaiInputBox id="first_name" type="text" placeholder="First name"
                                :class="{ ' mb-2': true, 'input-error': form.hasTriedSubmitStep2 && !form.firstNameValid }"
                                v-model="form.first_name" required autofocus autocomplete="first_name" />
                            <InputError v-if="form.hasTriedSubmitStep2" class="error-text"
                                :message="!form.first_name && 'First Name is required'" />
                        </div>

                        <div class="flex-1">
                            <TodaiInputBox id="last_name" type="text" placeholder="Last name"
                                :class="{ 'mb-2': true, 'input-error': form.hasTriedSubmitStep2 && !form.lastNameValid }"
                                v-model="form.last_name" required autocomplete="last_name" />
                            <InputError v-if="form.hasTriedSubmitStep2" class="error-text"
                                :message="!form.last_name && 'Last Name is required'" />
                        </div>

                        <div class="flex w-full gap-2">
                            <div class="flex-1">
                                <TodaiButton @click="current_step = 1" :text="'Back'" />
                            </div>
                            <div class="flex-1">
                                <TodaiButton @click="validateSecoundStep" :text="'Next'" />
                            </div>
                        </div>



                    </div>

                    <!-- Third Step Code -->
                    <div v-if="current_step === 3" class="flex flex-col gap-3 mt-2">

                        <div class="flex-1">
                            <h1 class="text-4xl mt-3 font-bold">Sign Up</h1>
                            <h2 class="text-3xl font-semibold">Let’s get you started!</h2>
                            <h3 class="mt-3 mb-3">Choose Your Country of Residence</h3>

                            <Dropdown class="w-full mb-4" filter v-model="form.country_id" :options="countries"
                                :style="{ width: isMdOrLarger ? '626px' : '378px' }" option-label="name"
                                option-value="id" placeholder="Select your country"
                                :class="{ 'special_input': true, 'input-error': form.hasTriedSubmitStep3 && !form.countryValid }">

                                <!-- This section displays the selected value -->
                                <template #value="slotProps">
                                    <span>
                                        <!-- If a country is selected, display its name; otherwise, show the placeholder -->
                                        {{slotProps.value ? countries.find(country => country.id ===
                                            slotProps.value)?.name : slotProps.placeholder}}
                                    </span>
                                </template>

                                <!-- This section renders each option -->
                                <template #option="slotProps">
                                    <div class="flex align-items-center items-center">
                                        <img src="https://primefaces.org/cdn/primevue/images/flag/flag_placeholder.png"
                                            :class="`mr-2 flag flag-${slotProps.option.code.toLowerCase()}`" />
                                        <div>{{ slotProps.option.name }}</div>
                                    </div>
                                </template>
                            </Dropdown>
                        </div>

                        <div class="flex w-full gap-2">
                            <div class="flex-1">
                                <TodaiButton @click="current_step = 2" :text="'Back'" />
                            </div>
                            <div class="flex-1">
                                <TodaiButton @click="validateThirdStep" :text="'Next'" />
                            </div>
                        </div>
                    </div>

                    <!-- Fourth Step Code -->
                    <div v-if="current_step === 4" class="flex flex-col gap-3 mt-2">

                        <div class="flex-1">
                            <h1 class="text-4xl mt-3 font-bold">Sign Up</h1>
                            <h2 class="text-3xl font-semibold">Let’s get you started!</h2>
                            <h3 class="mt-3 mb-3">Select your Child’s DOB
                            </h3>

                            <TodaiInputBox class="mb-5" id="dob" type="date" placeholder="Enter Birthdate"
                                :style="{ width: isMdOrLarger ? '626px' : '378px' }"
                                :class="{ 'special_input mb-3': true, 'input-error': !form.dob }" v-model="form.dob"
                                :max="new Date().toISOString().split('T')[0]" required autofocus autocomplete="dob" />
                        </div>

                        <div class="flex w-full gap-2">
                            <div class="flex-1">
                                <TodaiButton @click="current_step = 3" :text="'Back'" />
                            </div>
                            <div class="flex-1">
                                <TodaiButton @click="validateForStep" :text="'Next'" />
                            </div>
                        </div>
                    </div>

                    <!-- Fifth Step Code -->
                    <div v-if="current_step === 5" class="flex flex-col gap-3 mt-2">

                        <div class="flex-1">
                            <h1 class="text-4xl mt-3 font-bold">Sign Up</h1>
                            <h2 class="text-3xl font-semibold">Let’s get you started!</h2>


                            <Dropdown filter filterBy="name" filterMatchMode="contains"
                                filterPlaceholder="Type to search..." v-model="form.school_id"
                                :options="schoolsWithOther" option-label="name" option-value="id"
                                placeholder="Select your school"
                                :style="{ width: isMdOrLarger ? '626px' : '378px' }"
                                :class="{ 'special_input': true, 'input-error': form.hasTriedSubmitStep5 && !form.schoolValid }"
                                @change="handleSchoolChange($event)">
                                <!-- Display selected value -->
                                <template #value="slotProps">
                                    <span>
                                        {{slotProps.value && slotProps.value !== 'other' ?
                                            props.schools.find(school => school.id === slotProps.value)?.name :
                                            'Select your school'}}
                                    </span>
                                </template>

                                <!-- Render each option -->
                                <template #option="slotProps">
                                    <div class="flex align-items-center items-center">
                                        <div>{{ slotProps.option.name }}</div>
                                    </div>
                                </template>
                            </Dropdown>

                            <!-- Input field for "Other" school name -->
                            <div v-if="form.school_id === 'other'" class="mt-3">
                                <h3 class="mt-3 mb-3">Or enter the school name below:</h3>
                                <TodaiInputBox id="other_school" type="text" placeholder="Enter the school name"
                                    :style="{ width: isMdOrLarger ? '626px' : '378px' }"
                                    :class="{ 'special_input mb-3': true, 'input-error': form.hasTriedSubmitStep5 && !form.other_school }"
                                    v-model="form.other_school" required autofocus autocomplete="other_school" />
                            </div>

                            <div>
                                <h3 class="mt-3 mb-3">School Year/Grade:</h3>
                                <TodaiInputBox id="grade" type="text" style="font-size: 15px;"
                                    :style="{ width: isMdOrLarger ? '626px' : '378px' }"
                                    placeholder="Please enter your child’s school grade"
                                    :class="{ 'special_input mb-3': true, 'input-error': form.hasTriedSubmitStep5 && !form.grade }"
                                    v-model="form.grade" required autofocus autocomplete="grade" />
                            </div>
                        </div>

                        <div class="flex w-full gap-2">
                            <div class="flex-1">
                                <TodaiButton @click="current_step = 4" :text="'Back'" />
                            </div>
                            <div class="flex-1">
                                <TodaiButton @click="validateFiveStep" :text="'Next'" />
                            </div>
                        </div>
                    </div>

                    <!-- Sixth Step Code -->
                    <div v-if="current_step === 6" class="flex flex-col gap-3 mt-2">

                        <div class="flex-1">
                            <h1 class="text-4xl mt-3 font-bold">Sign Up</h1>
                            <h2 class="text-3xl font-semibold">Let’s get you started!</h2>
                            <h3 class="mt-3 mb-3">Choose your Child’s Gender</h3>

                            <div class="special_center_box">
                                <div class="row">
                                    <div @click="selectGender('female');" class="col-6">
                                        <div class="brd_gender"
                                            :class="{ 'selected-border': selectedGender === 'Female' }">
                                            <div class="gender_img">
                                                <svg width="65" height="93" viewBox="0 0 65 93" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M64.125 32.125C64.125 47.7578 52.8047 60.5156 38.25 63.2109V69.5H46.875C48.3125 69.5 49.75 70.7578 49.75 72.375V78.125C49.75 79.5625 48.3125 81 46.875 81H38.25V89.625C38.25 91.0625 36.8125 92.5 35.375 92.5H29.625C28.0078 92.5 26.75 91.0625 26.75 89.625V81H18.125C16.5078 81 15.25 79.5625 15.25 78.125V72.375C15.25 70.7578 16.5078 69.5 18.125 69.5H26.75V63.2109C12.0156 60.5156 0.875 47.7578 0.875 32.125C0.875 14.6953 14.8906 0.5 32.5 0.5C49.9297 0.5 64.125 14.6953 64.125 32.125ZM32.5 49.375C41.8438 49.375 49.75 41.6484 49.75 32.125C49.75 22.7812 41.8438 14.875 32.5 14.875C22.9766 14.875 15.25 22.7812 15.25 32.125C15.25 41.6484 22.9766 49.375 32.5 49.375Z"
                                                        fill="#FF74DC" />
                                                </svg>
                                            </div>
                                            <p class="font-bold text-center m-1">Female</p>
                                        </div>
                                    </div>
                                    <div @click="selectGender('male');" class="col-6">
                                        <div class="brd_gender"
                                            :class="{ 'selected-border': selectedGender === 'Male' }">
                                            <div class="gender_img">
                                                <!-- SVG for Male -->
                                                <svg width="85" height="93" viewBox="0 0 84 81" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M80.6953 0.25C82.3125 0.25 83.75 1.6875 83.75 3.125V23.4297C83.75 25.9453 81.5938 27.7422 79.2578 27.7422C78.1797 27.7422 77.1016 27.3828 76.2031 26.4844L70.9922 21.0938L60.75 31.3359C69.375 43.5547 68.1172 60.625 57.1562 71.5859C50.8672 77.6953 42.7812 80.75 34.6953 80.75C26.4297 80.75 18.1641 77.6953 11.875 71.0469C0.375 59.3672 0.015625 40.1406 10.9766 27.9219C17.2656 20.9141 25.8906 17.5 34.5156 17.5C40.8047 17.5 47.0938 19.2969 52.4844 23.0703L62.7266 12.8281L57.3359 7.61719C54.6406 4.74219 56.6172 0.25 60.3906 0.25H80.6953ZM46.9141 61.3438C53.7422 54.6953 53.7422 43.7344 46.9141 37.0859C43.5 33.6719 39.1875 32.0547 34.6953 32.0547C30.2031 32.0547 25.8906 33.6719 22.4766 37.0859C15.6484 43.7344 15.6484 54.6953 22.4766 61.3438C25.8906 64.7578 30.2031 66.375 34.6953 66.375C39.1875 66.375 43.5 64.7578 46.9141 61.3438Z"
                                                        fill="#4285F4" />
                                                </svg>
                                            </div>
                                            <p class="font-bold text-center m-1">Male</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="flex w-full gap-2">
                            <div class="flex-1">
                                <TodaiButton @click="current_step = form.country_id === 247 ? 5 : 4;" :text="'Back'" />
                            </div>
                            <div class="flex-1">
                                <TodaiButton @click="last_step()" :text="'Next'" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full">
            <img :src="'/images/todai-layout-right2.jpg'" class="w-full h-full object-cover" height="300px" alt="" />
        </div>
    </div>
</template>
