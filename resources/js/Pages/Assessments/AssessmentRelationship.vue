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
                <th class="p-5  w-1/4">Style</th>
                <th class="p-5  w-1/4">Strengths They Share</th>
                <th class="p-5  w-1/4">Struggles They Face</th>
                <th class="p-5  w-1/4">Strategies for Relating</th>
                <th class="p-5  w-1/4">Conflict Resolution</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Dominant (D)</td>
                <td v-html="this.assessment.dominant_strength"></td>
                <td v-html="this.assessment.dominant_struggle"></td>
                <td v-html="this.assessment.dominant_strategies"></td>
                <td v-html="this.assessment.dominant_resolution"></td>
            </tr>
            <tr>
                <td>Inspiring  (I)</td>
                <td v-html="this.assessment.inspiring_strength"></td>
                <td v-html="this.assessment.inspiring_struggle"></td>
                <td v-html="this.assessment.inspiring_strategies"></td>
                <td v-html="this.assessment.inspiring_resolution"></td>
            </tr>
            <tr>
                <td>Supportive   (S)</td>
                <td v-html="this.assessment.supportive_strength"></td>
                <td v-html="this.assessment.supportive_struggle"></td>
                <td v-html="this.assessment.supportive_strategies"></td>
                <td v-html="this.assessment.supportive_resolution"></td>
            </tr>
            <tr>
                <td>Cautious    (C)</td>
                <td v-html="this.assessment.cautious_strength"></td>
                <td v-html="this.assessment.cautious_struggle"></td>
                <td v-html="this.assessment.cautious_strategies"></td>
                <td v-html="this.assessment.cautious_resolution"></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="mt-10">
        <p>By understanding and leveraging these insights, you can enhance your relationships and effectively collaborate with each DISC personality style.</p>
    </div>

</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentRelationship",
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
    }

}
</style>
