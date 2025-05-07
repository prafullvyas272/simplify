<template>

    <div class="w-full mt-10">
        <p>{{this.assessment.intro}}</p>
    </div>


    <div class="w-full flex flex-row items-center  flex-wrap">

        <section class="w-1/2 flex flex-col flex-wrap">
            <div class="w-full mt-10 space-y-5" v-for="i in 2 ">
                <h4 class="text-xl font-bold">{{ this.assessment.details[i-1]["key"]}}</h4>
                <div class="li_layout" v-html="this.assessment.details[i-1]['value']"></div>
            </div>
        </section>

        <div class="w-1/2">
            <img class="pl-4" src="/images/assessments/motivate_1.png" alt="">
        </div>

    </div>


    <div class="w-full flex flex-row items-center  flex-wrap">
        <div class="w-1/2">
            <img class="pr-4" src="/images/assessments/motivate_2.png" alt="">
        </div>


        <section class="w-1/2 pl-5 flex flex-col flex-wrap">
            <div class="w-full mt-10 space-y-5" v-for="i in 2 ">
                <h4 class="text-xl font-bold">{{ this.assessment.details[i+1]["key"]}}</h4>
                <div class="li_layout" v-html="this.assessment.details[i+1]['value']"></div>
            </div>
        </section>

    </div>


    <div class="w-full flex flex-row items-center  flex-wrap">

        <section class="w-1/2 flex flex-col flex-wrap">
            <div class="w-full mt-10 space-y-5" v-for="i in 2 ">
                <h4 class="text-xl font-bold">{{ this.assessment.details[i+3]["key"]}}</h4>
                <div class="li_layout" v-html="this.assessment.details[i+3]['value']"></div>
            </div>
        </section>

        <div class="w-1/2">
            <img class="pl-4" src="/images/assessments/motivate_3.png" alt="">
        </div>

    </div>



    <div class="w-full flex flex-row items-center  flex-wrap">


        <div class="w-1/2">
            <img class="pr-4" src="/images/assessments/motivate_4.png" alt="">
        </div>


        <section class="w-1/2 pl-5 flex flex-col flex-wrap">
            <div class="w-full mt-10 space-y-5" v-for="i in 2 ">
                <h4 class="text-xl font-bold">{{ this.assessment.details[i+5]["key"]}}</h4>
                <div class="li_layout" v-html="this.assessment.details[i+5]['value']"></div>
            </div>
        </section>

    </div>




    <div class="mt-10">
        By understanding and implementing these strategies, managers can effectively motivate and inspire  ({{this.type}}) personality types, helping them achieve their full potential.
    </div>


</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentKeysMotivate",
    layout: AssessmentTypes,
    props:{
        assessment: Object,
        type: String,
    },

}
</script>


<style scoped>

table{
    td:nth-child(2),th:nth-child(2){
        background-color: #e0eee5;
    }
    td:nth-child(3), th:nth-child(3){
        background-color: #f3e8e9;
    }
    td:nth-child(4),th:nth-child(4){
        background-color: #d3e9f1;
    }
    td:nth-child(5),th:nth-child(5){
        background-color: #fdfbd4;
    }

    td {
        border: 1px #ced4db solid;
        padding: 10px 20px;
    }

}
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
