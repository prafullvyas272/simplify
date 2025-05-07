<template>
    <div class="p-6">
        <div class="p-6">
            <div class=" ">
                <h1 class="font-bold mb-4 text-center">Teaching Insights</h1>
            </div>
            <div class=" ">
                <div class="flex justify-center items-center mb-4">
                    <img
                        class="w-96 h-auto object-contain"
                        :src="'/images/reports-svg-images/Page 34.svg'"
                        alt=""
                    />
                </div>
            </div>
            <div class=" ">
                <h2 class="text-3xl font-bold mb-4">
                    Understanding Different Styles
                </h2>
                <p class="mb-6">
                    To provide teachers with insights and strategies for
                    effectively teaching students with different DISC
                    personality styles, this guide includes information on
                    strengths, potential challenges, and corrective measures for
                    Dominant (D), Influential (I), Supportive (S), and Cautious
                    (C) students.
                </p>
                <p>
                    Please refer to each section that corresponds to your
                    students' blend.
                </p>
                <div class="flex justify-center items-center mb-4">
                    <img
                        class="w-120 h-auto object-contain"
                        :src="'/images/reports-images/parental-insight-kids.svg'"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
/* Add styles here */
/* h2, h2, h2, h4 {
    color: rgb(55 48 163 );
    font-weight: bold !important;
} */
div.col-6 > h4.font-medium,
li > div > h4,
div.space-y-2 > h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    font-size: 19px;
}

div.col-6 > h4.font-medium,
li > div > h4,
strong,
span,
b,
div.space-y-2 > h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    /* font-size: 19px; */
}

h2,
h4,
.p-6 > .row > .col-6 > h2,
.sc-heading {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

ul > li {
    margin-top: 17px;
}

/* Add these new mobile responsive styles */
@media (max-width: 768px) {
    .row {
        display: flex;
        flex-direction: column;
    }

    .row:nth-of-type(2) {
        flex-direction: column-reverse;
    }

    .col-6 {
        width: 100%;
        margin-bottom: 2rem;
    }

    strong {
        font-size: 1rem !important;
    }
    .p-6 {
        padding: 1rem;
    }

    h2,
    h3,
    h4 {
        font-size: 1.5rem !important;
    }

    /* Adjust image container on mobile */
    .col-6 .flex.justify-center.items-center {
        margin: 1rem 0;
    }

    /* Adjust spacing between sections */
    .row + .row {
        margin-top: 1rem;
    }

    ul.list-disc {
        padding-left: 1rem;
    }
}

ul {
    padding: 0%;
}
</style>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "TeachingInsightFirst",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>
