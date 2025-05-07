<template>
    <div class="w-full flex mt-4">
        <div class="w-1/2">
            <img class="object-center max-h-96 h-full w-full -ml-15 object-cover  " src="/images/assessments/team.jpg" alt="">
        </div>

        <div class="w-1/2  p-10 px-10 leading-7  max-h-52">
            <div class="mt-10" v-html="this.assessment.intro"></div>
        </div>
    </div>

    

    <section class=" flex flex-row flex-wrap">
        <div class="w-[48%] mt-10 space-y-5" v-for="single in this.assessment.details ">
            <h4 class="text-xl font-bold">{{single["key"]}}</h4>
            <p >{{single["value"]}}</p>
        </div>
    </section>

    <div class="mt-10 space-y-5 li_layout">
        <h3 class="text-2xl font-bold">Things to be Aware of (possible blind spots):</h3>
        <div v-html="this.assessment.blind"></div>
    </div>

    <div class="mt-10 space-y-5 li_layout">
        <h3 class="text-2xl font-bold">Complementary Personality Styles:</h3>
        <div v-html="this.assessment.comp"></div>
    </div>

    <p class="mt-10">
        By leveraging your strengths and being mindful of these insights, you can enhance your effectiveness as a team member and contribute to a more cohesive and successful team dynamic.
    </p>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentTeam",
    layout: AssessmentTypes,
    props:{
        assessment: Object
    },
    data(){
        return {
            available_sections:[
                {
                    header:"Main Motivation",
                    key:"motivation",
                },
                {
                    header:"Individual Talents and Gifts",
                    key:"talent",
                },
                {
                    header:"Value as a Team Member",
                    key:"value",
                },
                {
                    header:"Ideal Environment",
                    key:"env",
                },
                {
                    header:"Key to Motivate",
                    key:"key_motivate",
                },
                {
                    header:"Key to Manage",
                    key:"manage",
                },
                {
                    header:"How You Act Best Under Pressure (your perception)",
                    key:"pressure",
                },
                {
                    header:"How Others May MISUNDERSTAND and MISREAD Your Actions Under Pressure (if they do not understand you)",
                    key:"misunderstand",
                },
                {
                    header:"Things to be aware of (possible blind spots)",
                    key:"blind",
                },
                {
                    header:"Complementary Personality Styles",
                    key:"comp",
                },
            ]
        }
    }

}
</script>


<style scoped>

tbody:before {
    content:"@";
    display:block;
    line-height:10px;
    text-indent:-99999px;
}
tbody tr td{
    padding: 10px;
}
.li_layout :deep ul {
    list-style: unset;
    max-height: 200px;
    display: grid;
    grid-template-rows: repeat(5, min-content);
    grid-auto-flow: column;
}
.li_layout :deep li::marker {
    color: mediumpurple;
    font-size: 20px;
}
</style>
