<script setup>
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm } from '@inertiajs/vue3';
import InputField from "@/Components/InputField.vue";
import {Link} from '@inertiajs/vue3';

const props = defineProps({
    authUser: Object,
});
const form = useForm({
    calendly_access_token: props.authUser?.calendly_access_token,
    recentlySuccessful: false,
});

const updateCalendlyAccessToken = () => {
    form.post(route('profile.updateCalendlyToken'), {
        preserveScroll: true,
        onSuccess: () => {
            alert('Calendly Access Token updated successfully!');
        },
        onError: (errors) => {
            // Optional: error handling
            console.error(errors);
        }
    });
};
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg  text-black">Save Calendly Access Token</h2>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-600">
                If you do not have a calendly account, please set one up at <a target="blank"
                    href="https://calendly.com/"><b>https://calendly.com/</b></a> and link your email that you want to
                use in Simplify. Please note, this should be the email address you have signed up with.
            </p>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-600">
                Want to learn more about, how to create calendly account
                <Link :href="route('profile.showAddCalendlyPage')" >
                    <b>Click here</b>
                </Link>
            </p>
        </header>

        <form @submit.prevent="updateCalendlyAccessToken" class="mt-6 space-y-6">
            <div>
                <InputField id="calendly_access_token" ref="calendly_access_token" v-model="form.calendly_access_token"
                    type="text" placeholder="Add your calendly access token" class="mt-1 block w-full" />
            </div>

            <div class="flex items-center gap-4">
                <PrimaryButton class="unify_button rounded-full text-white" :disabled="form.processing">Save
                </PrimaryButton>

                <Transition enter-active-class="transition ease-in-out" enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out" leave-to-class="opacity-0">
                    <p v-if="form.recentlySuccessful" class="text-sm text-gray-600 dark:text-gray-400">Saved.</p>
                </Transition>
            </div>
        </form>
    </section>
</template>
