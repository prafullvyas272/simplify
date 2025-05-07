<template>
    <div class="flex min-h-screen font-popins p-8 justify-center items-start">
        <div class="bg-white rounded-lg p-10 border-2 border-pink-500 text-center w-full max-w-3xl">
            <h1 class="text-4xl font-bold text-[#091532]">
                Want to Get Simplify
            </h1>

            <p class="text-lg mb-2 mt-4">
                Take things further with Simplify — your AI assistant for parenting.
            </p>
            <p class="text-lg mb-2 mt-4">
                Add Simplify to your account for just 20 USD/month.
            </p>
            <p class="text-lg mb-4 mt-4">
                👇 Tap below to activate it now.
            </p>
            <a :href="route('assessments.pay', { id: authUserId, user_id: authUserId, pakage_id: pakageId })"
                class="unify_button py-2 px-10 inline-block">
                Sign up
            </a>
        </div>
    </div>


</template>

<script>
import ReportLayout from "@/Layouts/ReportLayout.vue";
import { Link } from "@inertiajs/vue3";

export default {
    name: "AddSimplify",
    layout: ReportLayout,
    components: { Link },
    props: {
        authUserId: Number,
        pakageId: Number,
    }
};




</script>

<style scoped></style>
