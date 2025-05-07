<template>

    <div class="w-full mt-20">
        <table class="table-fixed w-full border-spacing-y-2 ">
            <thead class="h-16">
            <tr >
                <th class="p-5  w-1/4">Leader's Style</th>
                <th class="p-5  w-1/4">How to Lead Them Effectively</th>
                <th class="p-5  w-1/4">Phrases to Use</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Dominant (D)</td>
                <td v-html="this.assessment.d_insight"></td>
                <td v-html="this.assessment.d_phrases"></td>
            </tr>
            <tr>
                <td>Influential  (I)</td>
                <td v-html="this.assessment.i_insight"></td>
                <td v-html="this.assessment.i_phrases"></td>
            </tr>
            <tr>
                <td>Supportive   (S)</td>
                <td v-html="this.assessment.s_insight"></td>
                <td v-html="this.assessment.s_phrases"></td>
            </tr>
            <tr>
                <td>Cautious    (C)</td>
                <td v-html="this.assessment.c_insight"></td>
                <td v-html="this.assessment.c_phrases"></td>
            </tr>
            </tbody>
        </table>
    </div>


</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentLeadershipInsight",
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
        padding: 20px 20px;
        line-height:25px;

    }

}
</style>
