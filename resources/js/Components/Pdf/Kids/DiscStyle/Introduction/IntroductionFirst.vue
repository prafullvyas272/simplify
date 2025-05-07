<template>
    <div class=" p-6  pt-0">
        <div class="flex flex-col">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-center flex-1 font-bold">Introduction</h1>
            </div>
        </div>
        <h2 class="text-4xl font-semibold mb-4 text-center">
            Welcome to Your Child’s DISC Assessment Report!
        </h2>
        <div class="row p-6">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'" alt="" />
                </div>
            </div>
            <div class="col-6">
                <p class="mb-4">Dear Parents,</p>

                <p class="mb-4">

                    We are delighted to share the results of your child's DISC assessment. This report offers insights
                    into your child's unique personality traits, helping you understand how they engage with the world
                    around them. Our aim is to provide valuable information that will support you in nurturing and
                    guiding your child's growth and development.

                </p>
            </div>
        </div>

        <div class="row mt-4 p-6">
            <div class="col-6">
                <h2 class="text-4xl font-semibold mb-4">
                    Explanation of DISC Styles
                </h2>

                <p class="mb-4">
                    The DISC model is a highly effective tool for understanding behaviour and personality. It
                    categorises behaviour into four main styles: Dominant (D), Influential (I), Supportive (S), and
                    Cautious (C). Each style comes with its own strengths and areas for growth. By understanding your
                    child's DISC style, you can better support their learning, social interactions, and overall
                    development.

                </p>
            </div>
            <div class="col-6 flex justify-center items-center">
                <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page28.svg'" alt="" />
            </div>
        </div>

        <ul class="list-none pl-6 mb-6">
            <li>
                <strong>Dominant (D):</strong> Children with a dominant style
                are often confident, assertive, and enjoy taking charge. They
                are driven by results and thrive in competitive environments.
            </li>
            <li>
                <strong>Influential (I):</strong> Influential children are
                outgoing, enthusiastic, and enjoy being around others. They are
                natural communicators and excel in social settings.
            </li>
            <li>
                <strong>Supportive (S):</strong> Children with a supportive style
                are calm, reliable, and enjoy working in stable environments.
                They are team players and value cooperation.
            </li>
            <li>
                <strong>Cautious (C):</strong> Cautious children are
                detail-oriented, organised, and enjoy tasks that require
                precision. They are driven by quality and accuracy.
            </li>
        </ul>
        <!-- Placeholder for Image -->
        <div class="my-4">
            <div class="flex justify-center items-center">
                <img class="w-240 h-auto object-contain" :src="'/images/reports-svg-images/page2.svg'" alt="" />
            </div>
        </div>

    </div>
</template>


<script>

import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "IntroductionFirst",
    layout: AssessmentTypes,

    props: {
        style: String,
        childName: String,
        image: String,
        discScores: Object,
    },


};
</script>
