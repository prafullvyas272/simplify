<template>
    <div>
        <NavBar />
    </div>

    <div class="w-full flex flex-col bg-[url('/images/signup_bg.jpg')] pt-20 bg-cover items-center h-[90vh] ">
        <div class="w-[50%] px-20 bg-white rounded-xl flex flex-col  py-10">
            <p class="capitalize">
                You need to pay for the assessment before you are able to use the website
            </p>
            <a :href="route('assessments.pay')" class="unify_button py-2 px-10 max-w-40 mt-10 mx-auto">  Pay  </a>

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
