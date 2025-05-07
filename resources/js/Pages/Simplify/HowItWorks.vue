<template>
    <!-- Main Content -->
    <main class="mt-10 flex-1 p-8">
      <h2 class="text-3xl font-black mb-6 text-[#091532] text-center">How Simplify Works</h2>
      <div class="space-y-8">
        <div class="grid grid-cols-3 gap-3 items-stretch">
            <div class=""><img src="/images/step-1.png" width="220"></div>
            <div class="text-l col-span-2 flex items-center">
                <p>
                    Send Simplify your school emails, reminders messages, PDFs - either by forwarding emails to <b><a class="mailto" href="mailto:simplify@useunify.com">simplify@useunify.com</a></b> or sending messages directly into the Simplify WhatsApp chat!
                </p>
            </div>

            <div class="text-l col-span-2  flex items-center">
                <p>Simplify extracts the key details and adds them to your calendar. You'll also receive reminders tailored to your family's schedule.</p>
            </div>
            <div><img src="/images/step-2.png" width="220"></div>
            <div><img src="/images/step-3.png" width="220"></div>
            <div class="text-l col-span-2 flex items-center">
                <p>Get helpful suggestions based on your child’s activities, learning styles, and preferences—like planning ahead for school projects or activities.</p>
            </div>
        </div>
      </div>
    </main>
    <div class="mt-8 flex justify-between">
        <Link :href="route('simplify.index')" class="commen_btn px-8 py-3 bg-gray-300 text-gray-800 rounded-lg shadow-sm font-semibold hover:bg-gray-400">
            Back
        </Link>
        <Link class="commen_btn px-8 py-3 bg-gray-300 text-gray-800 rounded-lg shadow-sm font-semibold hover:bg-gray-400"  :href="$page.props.auth.user.simplify_status ? route('simplify.activate.user') :  route('simplify.activate.user')" @click="$parent.handleLinkClick($page.props.auth.user.simplify_status ? route('simplify.activate.FamilyPersonalizationPartTwo') :  route('simplify.activate.user'))" >Next</Link>
    </div>
</template>

<script>

//import NavBar from "@/Components/Navigation/NavBar.vue";
import SimplifyLayout from "@/Layouts/SimplifyLayout.vue";
import {Link} from "@inertiajs/vue3";
export default {
    name: "AssessmentBefore",
    layout:SimplifyLayout,
    components: {Link},

}
</script>


<style scoped>
 .mailto {
    color : black;
 }



</style>
