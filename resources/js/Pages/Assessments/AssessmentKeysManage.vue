<template>

    <div class="w-full mt-10">
        <p>{{this.assessment.intro}}</p>
    </div>



    <section class=" flex flex-row flex-wrap">
        <div class="w-[48%] mt-10 space-y-5" v-for="single in this.assessment.details ">
            <h4 class="text-xl font-bold">{{single["key"]}}</h4>
            <p >{{single["value"]}}</p>
        </div>
    </section>



</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentKeysManage",
    layout: AssessmentTypes,
    props:{
        assessment: Object
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
</style>
