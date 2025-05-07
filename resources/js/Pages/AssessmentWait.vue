<template>
    <div class=" absolute top-0 left-10 w-1/4">
        <img class="w-32 h-auto   mt-2" src="/images/img_1.png" alt="">
        <img class="w-32 mt-2" src="/images/img_2.png" alt="">
    </div>

    <div class="w-full flex flex-col justify-center bg-[url('/images/signup_bg.jpg')]  bg-cover items-center h-[100vh] ">
        <div class="w-[50%] px-20 bg-white rounded-xl flex flex-col  py-10">
            <p>
                Please Wait until we process your assessment, it might take up to 24 hours.
            </p>
        </div>
    </div>




</template>

<script>

import NavBar from "@/Components/Navigation/NavBar.vue";
import {Link} from "@inertiajs/vue3";
export default {
    name: "AssessmentWait",
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
