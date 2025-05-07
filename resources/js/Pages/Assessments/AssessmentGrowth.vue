<template>



    <div class="w-full  mt-10 leading-7 space-y-10 ">
        <p>{{this.assessment.intro}}</p>
    </div>

    <div class="w-full leading-5  mt-20 gap-10 flex flex-row flex-wrap">
        <div class="w-[45%] li_layout space-y-5" v-for="single in this.assessment.details" >
            <h4 class="text-xl font-bold capitalize ">{{single.key}}</h4>
            <div class="li_layout" v-html="single.value"></div>
        </div>
    </div>

    <div class="mt-10">
        <p>By focusing on these professional growth insights, you can enhance your effectiveness, build stronger relationships, and achieve sustained success in your career. Embrace these strategies to reach your full potential as a ({{this.type}}) personality type.</p>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentGrowth",
    layout: AssessmentTypes,
    props:{
        assessment: Object,
        type: String,

    },

}
</script>


<style scoped>

.li_layout :deep ul {
    list-style: unset;
    display: grid;
    grid-template-rows: repeat(5, min-content);
    grid-auto-flow: column;

}
.li_layout :deep li {
    margin: 0px 1rem;

}
.li_layout :deep li::marker {
    color: mediumpurple;
    font-size: 20px;
    margin:20px 0;
}
</style>
