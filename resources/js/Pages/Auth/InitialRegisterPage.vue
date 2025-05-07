<script setup>

import Dropdown from "primevue/dropdown";
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, useForm } from '@inertiajs/vue3';
import InputField from "@/Components/InputField.vue";
import Checkbox from "@/Components/Checkbox.vue";
import { onMounted, ref, computed } from 'vue';
import NavLink from "@/Components/NavLink.vue";
import TodaiInputBox from "@/Components/Todai/TodaiInputBox.vue";
import TodaiButton from "@/Components/Todai/TodaiButton.vue";
import { onUnmounted } from 'vue';
import TodaiNavLink from "@/Components/Todai/TodaiNavLink.vue";

const props = defineProps({
    kidsUrl: {
        type: String,
        required: true,
    },
    teensUrl: {
        type: String,
        required: true,
    },
    isAssessmentsOnly: {
        type: Boolean,
        required: true,
    },
});


const pageTitle = computed(() => {
    const titleMap = {
        '1': 'Register - Unify Kids',
        '5': 'Register - Unify Teens'
    };
    return titleMap[props.pakage_id] || 'Default Title';
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

.gender_img {
    display: flex;
    justify-content: center;
}

.sign_data {
    /* margin-top:135px; */
}

.brd_gender {
    height: 150px;
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
    border: 3px solid #9645DF !important;
}

.child_txt {
    font-family: 'Poppins', sans-serif;
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

@media screen and (min-width:1920px) {
    .login_bg .first_page {
        width: 670px;
    }
}
</style>

<template>

    <Head :title="pageTitle" />

    <div class="flex flex-col md:flex-row w-full h-full min-h-screen overflow-hidden">

        <div class="w-full h-full bg-white text-black">

            <div class="md:px-18 lg:px-28 flex flex-col justify-center items-center w-full h-full px-5"
                :class="{ 'px-4 mb-4': !isMdOrLarger }">
                <img src="/images/simplify-logo-crop.png" class="mt-3" alt="Logo"
                    style="width: 220px; align-self: center;" />

                <h2 class="text-4xl font-bold">Let’s get you started!</h2>
                <h3 class="text-lg font-semibold">
                    Dont have an account?
                    <a href="/register/1" class="text-blue-500">Sign Up.</a>
                </h3>
                <div class="w-full flex flex-col gap-4 mt-10">
                    <h5 class="text-2xl font-bold"> Please let us know the age of your child that will be taking the
                        learning style
                        assessment</h5>

                    <div class="w-full flex flex-col md:flex-row items-center justify-center text-center mt-3 gap-2">
                        <TodaiNavLink :href="kidsUrl" :text="'Kids (6-12)'" class="w-full md:w-1/2" />
                        <TodaiNavLink :href="teensUrl" :text="'Teens (13-18)'" class="w-full md:w-1/2" />
                    </div>

                </div>
            </div>
        </div>

        <div class="w-full">
            <img :src="'/images/todai-layout-right2.jpg'" class="w-full h-full object-cover" height="300px" alt="" />
        </div>
    </div>
</template>
