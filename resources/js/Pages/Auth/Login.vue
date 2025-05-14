<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import InputField from "@/Components/InputField.vue";
import TodaiInputBox from "@/Components/Todai/TodaiInputBox.vue";
import TodaiButton from "@/Components/Todai/TodaiButton.vue";
import { ref, onMounted, onUnmounted } from 'vue';
import TodaiPasswordInputBox from "@/Components/Todai/TodaiPasswordInputBox.vue";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
    flash: {
        type: Object,
    },
    error_message: {
        type: String,
    }
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
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

<template>

    <Head title="Log in" />

    <div class="flex flex-col md:flex-row w-full h-full min-h-screen overflow-hidden">

        <div class="w-full h-full bg-white text-black">

            <div class="md:px-18 lg:px-28 flex flex-col justify-center items-center w-full h-full" :class="{'px-4 mb-4' : !isMdOrLarger}">
                <img src="/images/simplify-logo-crop.png" class="mt-3" alt="Logo" style="width: 220px; align-self: center;" />

                <h2 class="text-4xl font-bold">Let’s get you started!</h2>
                <h3 class="text-lg font-semibold">
                    Dont have an account?

                    <a href="/register/1" class="text-blue-500">Sign Up.</a>
                </h3>
                <div class="w-full flex flex-col gap-4">
                    <form @submit.prevent="submit" class="mt-10">
                        <div class="flex-1">
                            <TodaiInputBox id="email" type="email" v-model="form.email" required autofocus
                                placeholder="Email" autocomplete="username" />

                            <InputError class="mt-2" :message="form.errors.email" />
                            <InputError v-if="error_message != null" class="mt-2" :message="error_message" />

                        </div>

                        <div class="mt-4">

                            <TodaiPasswordInputBox id="password" type="password" v-model="form.password" required
                                placeholder="Password" autocomplete="current-password" />
                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>



                        <div class="flex items-center justify-center mt-2">
                            <Link v-if="canResetPassword" :href="route('password.request')"
                                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            Forgot your password?
                            </Link>
                        </div>
                        <div class="w-full items-center justify-center flex text-center mt-3">
                            <TodaiButton :class="{ 'opacity-25': form.processing }" :text="'Login'"
                                :disabled="form.processing" />
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="w-full">
            <img :src="'/images/todai-layout-right2.jpg'"   class="w-full h-full object-cover" height="300px"

                alt="" />
        </div>
    </div>




</template>
