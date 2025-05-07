<template>
    <div class="w-full mt-10 leading-7 space-y-10 ">
        <div class="mt-10" v-html="this.assessment.intro"></div>
    </div>

    <div class="w-full flex flex-row items-center  flex-wrap" v-if="this.assessment.details.length >=2">

        <section class="w-1/2 flex flex-col flex-wrap">
            <div class="w-full mt-10 space-y-5" v-for="i in 2 ">
                <h4 class="text-xl font-bold capitalize ">{{this.assessment.details[i-1].key}}</h4>
                <p>{{this.assessment.details[i-1].description}}</p>
                <div class="li_layout" v-html="this.assessment.details[i-1].value"></div>

            </div>
        </section>

        <div class="w-1/2">
            <img class="pl-4" src="/images/assessments/ideal_1.png" alt="">
        </div>

    </div>

    <div class="w-full flex flex-row items-center  flex-wrap" v-if="this.assessment.details.length >=4">


        <div class="w-1/2">
            <img class="pr-4" src="/images/assessments/ideal_2.png" alt="">
        </div>


        <section class="w-1/2 pl-5 flex flex-col flex-wrap" >
            <div class="w-full mt-10 space-y-5" v-for="i in 2 ">
                <h4 class="text-xl font-bold capitalize ">{{this.assessment.details[i+1].key}}</h4>
                <p>{{this.assessment.details[i+1].description}}</p>
                <div class="li_layout" v-html="this.assessment.details[i+1].value"></div>
            </div>
        </section>

    </div>

    <div class="w-full flex flex-row items-center  flex-wrap" v-if="this.assessment.details.length >=6">

        <section class="w-1/2 flex flex-col flex-wrap">
            <div class="w-full mt-10 space-y-5" v-for="i in 2 ">
                <h4 class="text-xl font-bold capitalize ">{{this.assessment.details[i+3].key}}</h4>
                <p>{{this.assessment.details[i+3].description}}</p>
                <div class="li_layout" v-html="this.assessment.details[i+3].value"></div>

            </div>
        </section>

        <div class="w-1/2">
            <img class="pl-4" src="/images/assessments/ideal_3.png" alt="">
        </div>

    </div>

    <div class="w-full flex flex-row items-center  flex-wrap" v-if="this.assessment.details.length >=8">


        <div class="w-1/2">
            <img class="pr-4" src="/images/assessments/ideal_4.png" alt="">
        </div>


        <section class="w-1/2 pl-5 flex flex-col flex-wrap" v-if="this.assessment.details.length > 5">
            <div class="w-full mt-10 space-y-5" v-for="i in 2 ">
                <h4 class="text-xl font-bold capitalize ">{{this.assessment.details[i+5].key}}</h4>
                <p>{{this.assessment.details[i+5].description}}</p>
                <div class="li_layout" v-html="this.assessment.details[i+5].value"></div>

            </div>
        </section>

    </div>

    <div class="w-full flex flex-row items-center  flex-wrap" v-if="this.assessment.details.length >=10"   >

        <section class="w-1/2 flex flex-col flex-wrap">
            <div class="w-full mt-10 space-y-5" v-for="i in 2 ">
                <h4 class="text-xl font-bold capitalize ">{{this.assessment.details[i+7].key}}</h4>
                <p>{{this.assessment.details[i+7].description}}</p>
                <div class="li_layout" v-html="this.assessment.details[i+7].value"></div>
x
            </div>
        </section>

        <div class="w-1/2">
            <img class="pl-4" src="/images/assessments/ideal_5.png" alt="">
        </div>

    </div>

    <div class="mt-10">
        By focusing on these long-term development insights, you can enhance your effectiveness, build stronger relationships, and achieve sustained success in your career. Embrace these strategies to reach your full potential as a  ({{this.type}}) personality type.
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentLongGrowth",
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
