<template>

    <div v-html="this.assessment.intro" class="mt-10"> </div>

    <div class="w-full px-4 li_layout mt-10"   v-html="assessment.words">
    </div>
    <div class="w-full border-4 py-10  mt-20 border-purple-700 flex flex-row">
        <div class="w-1/6 bg-white -mt-16 px-30 ">
            <svg xmlns="http://www.w3.org/2000/svg"  class="m-auto" width="80" height="80" viewBox="0 0 30.281 30"><path d="M23.342,0H6.939A6.948,6.948,0,0,0,0,6.939V18.295a6.948,6.948,0,0,0,6.939,6.939H8.754l5.173,4.325a1.893,1.893,0,0,0,2.428,0l5.173-4.325h1.814a6.948,6.948,0,0,0,6.939-6.939V6.939A6.948,6.948,0,0,0,23.342,0ZM26.5,18.295a3.154,3.154,0,0,1-3.154,3.154h-2.5a1.893,1.893,0,0,0-1.214.442l-4.485,3.75-4.485-3.75a1.893,1.893,0,0,0-1.214-.442h-2.5a3.154,3.154,0,0,1-3.154-3.154V6.939A3.154,3.154,0,0,1,6.939,3.785h16.4A3.154,3.154,0,0,1,26.5,6.939Z" fill="#6d2ef126"/><path d="M8.6,11.2h5.2a2.6,2.6,0,1,0,0-5.2H8.6a2.6,2.6,0,1,0,0,5.2Z" transform="translate(0.625 1.161)" fill="#6d2ef126"/><path d="M14.285,11h-7.1C6.53,11,6,12.165,6,13.6s.53,2.6,1.184,2.6h7.1c.654,0,1.184-1.165,1.184-2.6s-.53-2.6-1.184-2.6Z" transform="translate(4.406 2.128)" fill="#6d2ef126"/></svg>
        </div>
        <div class="w-5/6 text-purple-800 px-10 items-center text-sm flex">
            Please remember that these words may reflect your characteristics to varying degrees depending on different circumstances. This information is generally 85-95% accurate but feel free to modify it to better align with your unique personality style.
        </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentDescriptive",
    layout: AssessmentTypes,
    props:{
        assessment: Object
    },

}
</script>


<style scoped>
.li_layout :deep ul {
    list-style: unset;
    max-height: 200px;
    display: grid;
    grid-template-rows: repeat(5, min-content);
    grid-auto-flow: column;
}
.li_layout :deep li::marker {
    color: mediumpurple;
    font-size: 20px;
}
</style>
