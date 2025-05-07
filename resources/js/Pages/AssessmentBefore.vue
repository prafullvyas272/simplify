<template>
    <div>
        <NavBar />
    </div>

    <div class="mt-20 w-full flex flex-col bg-[url('/images/signup_bg.jpg')] pt-20 bg-cover items-center h-[90vh] ">
        <div class="w-[50%] px-20 bg-white rounded-xl flex flex-col  py-10">
            <p>
                Please find a quiet, comfortable space where you can focus without distractions. Take your time and answer each of the 30    questions honestly for the most accurate results. Please do not refresh or close the page.
            </p>
            <a :href="route('assessments.create')" class="unify_button py-2 px-10 max-w-40 mt-10 mx-auto">  Lets Begin </a>

        </div>
    </div>




</template>

<script>

import NavBar from "@/Components/Navigation/NavBar.vue";
import {Link} from "@inertiajs/vue3";
export default {
    name: "AssessmentBefore",
    components: {Link, NavBar},
}
</script>


<style scoped>

tbody:before {
    content:"@";
    display:block;
    line-height:10px;
    text-indent:-99999px;
}


</style>
