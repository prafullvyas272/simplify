<template>
    <div class=" p-6  pt-0">
        

        <div class="p-6">


            <h2 class="text-4xl font-semibold mb-4">
                How to Interpret Your Child's Results
            </h2>

            <p class="mb-4">
                The results of the DISC assessment are designed to provide a snapshot of your child's personality. It is
                important to remember that there are no right or wrong results. Each style has its own strengths and
                areas for growth.
            </p>

            <p class="mb-4">
                The goal is to understand your child's natural tendencies and use this knowledge to support their
                development.

            </p>

            <ul class="list-none pl-6 mb-6">
                <li>
                    <strong>Primary Style:</strong>
                    This is the style your child exhibits most strongly and will be the focus of the detailed analysis
                    in this report.

                </li>
                <li>
                    <strong>Secondary Styles:</strong>
                    These represent other styles your child may also display, though to a lesser extent. Understanding
                    these can give a more well-rounded view of your child's behaviour.

                </li>
            </ul>

            <p class="mb-4">
                We hope this report provides you with valuable insights and
                practical advice to help your child thrive.
            </p>

            <p class="text-lg font-semibold mb-4">
                Let’s begin this journey of understanding and supporting your
                child’s unique personality!
            </p>
        </div>
    </div>
</template>


<script>

import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "IntroductionSecond",
    layout: AssessmentTypes,

    props: {
        style: String,
        childName: String,
        image: String,
        discScores: Object,
    },


};
</script>
