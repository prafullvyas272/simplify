<template>

    <div class="mt-10" v-html="this.assessment.intro"></div>


    <div class="w-full leading-5  mt-20 gap-10 flex flex-row flex-wrap">
        <div class="w-[45%] space-y-2" v-for="single in this.assessment.details" >
            <h4 class="text-xl font-bold capitalize ">{{single.key}}</h4>
            <p>{{single.value}}</p>
        </div>
    </div>

    <div class="mt-10" v-html="this.assessment.footer"></div>


    <!--    -->
<!--    <div class="w-full flex mt-10">-->
<!--        <div class="w-1/2  py-10 pb-0 leading-7 space-y-10 ">-->
<!--            <p class="text-6xl font-bold">Long-Term Development Insights </p>-->
<!--            <p>{{this.assessment.paragraph}}</p>-->
<!--        </div>-->

<!--        <div class="w-1/2">-->
<!--            <img class="h-[35rem]  mx-auto   " src="/images/assessments/excel.jpg" alt="">-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="w-full  mt-10 li_layout "  v-html="assessment.points"></div>-->
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentExcel",
    layout: AssessmentTypes,
    props:{
        assessment: Object
    },

}
</script>


<style scoped>

.li_layout :deep ul{
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
}
</style>
