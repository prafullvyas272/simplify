<template>
    <MainLayout>
        <div class="max-w-4xl bg-white shadow-md rounded-lg border border-gray-200 mx-auto px-6 py-8 mt-6">

            <section class="space-y-8">
                <!-- Header -->
                <div class="text-center">
                    <h2 class="text-2xl sm:text-3xl font-semibold mb-4">How to generate your Calendly token</h2>
                </div>

                <!-- Intro Paragraphs -->
                <div class="space-y-3 text-base text-gray-700">
                    <p>
                        If you do not have a Calendly account, please set one up at
                        <a target="blank" href="https://calendly.com/"><b>https://calendly.com/</b></a>
                        and link your email that you want to use in Simplify.
                    </p>
                    <p>Please note, this should be the email address you have signed up with.</p>
                    <p>
                        Once you have set your account up, or if you already have an account, please follow these steps:
                    </p>
                </div>

                <!-- Steps (Full-Width Column Layout) -->
                <div v-for="(step, index) in steps" :key="index" class="space-y-4 border-t pt-6">
                    <p class="text-gray-800 text-lg font-medium"><b>Step {{ index + 1 }}. </b> {{ step.text }}</p>
                    <img :src="step.image" :alt="`Step ${index + 1}`"
                        class="w-full max-w-2xl mx-auto rounded-md shadow-md" />
                </div>

                <div>
                    <button @click="goBack()"
                        class="px-6 py-2 bg-purple-700 text-white rounded-lg hover:bg-purple-800 transition-colors flex items-center gap-2">
                        Go Back
                    </button>
                </div>
            </section>



        </div>
    </MainLayout>
</template>

<script>
import MainLayout from '@/Layouts/MainLayout.vue';
import { Link } from 'lucide-vue-next';
import { Button } from '@/shadcn/ui/button';
export default {
    name: 'CalendlyTokenInstructions',
    layout: MainLayout,
    components: [Link, Button],

    data() {
        return {
            calendlyLink: 'https://calendly.com/',
            steps: [
                {
                    text: 'On the left hand navigation, please click “Integrations & apps”.',
                    image: '/images/calendly/c1.jpg',
                },
                {
                    text: 'Then search “API & Webhooks”.',
                    image: '/images/calendly/c2.jpg',
                },
                {
                    text: 'Click “Get a token Now”.',
                    image: '/images/calendly/c3.jpg',
                },
                {
                    text: 'Click continue and name your token “Simplify”, then click “Create Token”.',
                    image: '/images/calendly/c4.jpg',
                },
                {
                    text: 'Enter the verification code that gets sent to your email.',
                    image: '/images/calendly/c5.jpg',
                },
                {
                    text: 'Click “Copy Token” and paste it into the field given in your Simplify dashboard.',
                    image: '/images/calendly/c6.jpg',
                },
            ],
        };
    },
    methods: {
        goBack() {
            this.$inertia.visit('profile');
        }
    }
};
</script>

<style scoped>
/* Optional: Add styles for step indicators or animations here */
</style>