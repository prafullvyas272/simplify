<template>

    <div class="w-full mt-10">
        <p>{{this.assessment.intro}}</p>
    </div>



    <section class=" flex flex-row flex-wrap">
        <div class="w-[48%] mt-10 space-y-5" v-for="single in this.assessment.details ">
            <h4 class="text-xl font-bold">{{single["key"]}}</h4>
            <p v-html="single.value" class="assesment-content li_layout"></p>
        </div>
    </section>


    <div class="mt-10">
        By being aware of these potential misinterpretations, you can take steps to clarify your intentions and communicate more effectively. This awareness will help you ensure that your positive traits are recognized and that your contributions are valued and understood by your team    </div>


</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentMisunderstanding",
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
