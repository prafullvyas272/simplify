<template>
    <div class="w-full flex">
        <div class="w-full h-64 ">
            <img class="object-top h-full w-full -ml-15 object-cover  " src="/images/assessments/reading.jpg" alt="">
        </div>
    </div>

    <div class="w-full mt-10">
        <p>
            Use the chart below to help you quickly identify a person's primary personality style.
        </p>
    </div>

    <div class="w-full mt-20">
        <table class="table-fixed w-full border-spacing-y-2 ">
            <thead class="h-16">
            <tr >
                <th class="p-5  w-1/4">Observation</th>
                <th class="p-5  w-1/4">Dominant</th>
                <th class="p-5  w-1/4">Inspiring</th>
                <th class="p-5  w-1/4">Supportive</th>
                <th class="p-5  w-1/4">Cautious</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Likes to do things</td>
                <td>The FAST way</td>
                <td>The FUN way</td>
                <td>The TRADITIONAL way</td>
                <td>The PROPER way</td>
            </tr>
            <tr>
                <td>Personal Decor</td>
                <td>Large desk, awards, useful accessories</td>
                <td>Flashy, trendy, with fun pictures</td>
                <td>Family pictures, personal mementos</td>
                <td>Aesthetically pleasing, unique, functional</td>
            </tr>
            <tr>
                <td>Body Language</td>
                <td>Big gestures, leans forward, advancing</td>
                <td>Expressive, friendly posture, amusing</td>
                <td>Gentle gestures, reassuring</td>
                <td>Unemotional, controlled gestures, assessing</td>
            </tr>
            <tr>
                <td>Speech Pattern</td>
                <td>Directive tones, abrupt, interrupting, intentional</td>
                <td>Talkative, varied tones, personal, easily distracted</td>
                <td>Conversational, warm tones, friendly, prefers listening</td>
                <td>Clarifying, monotone, logical, focused, questioning</td>
            </tr>
            <tr>
                <td>Processes by asking</td>
                <td>What?</td>
                <td>Who?</td>
                <td>How?</td>
                <td>Why?</td>
            </tr>
            <tr>
                <td>Personal Strength</td>
                <td>Firm</td>
                <td>Fun</td>
                <td>Friendly</td>
                <td>Factual</td>
            </tr>
            </tbody>
        </table>
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
