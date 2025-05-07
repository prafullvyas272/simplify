<template>

    <div class="w-full mt-10">
        <p>
            Use the chart below to help you quickly identify a person's primary personality style.
        </p>
    </div>

    <div class="w-full mt-20">
        <table class="table-fixed w-full border-spacing-y-2 ">
            <thead class="h-16">
            <tr >
                <th class="p-5  w-1/4">Manager's Style</th>
                <th class="p-5  w-1/4">How to Relate to Them</th>
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
                <td>Inspiring  (I)</td>
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

    <div class="mt-10">
        <p>These tables provide insights on how to effectively relate to a manager with different personality styles. Adjusting your approach based on the specific needs and preferences of each style can lead to more productive and harmonious interactions.</p>
    </div>

</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentRelateManager",
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
        line-height:25px;

    }

}
</style>
