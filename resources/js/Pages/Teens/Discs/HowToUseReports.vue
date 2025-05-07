<template>
     <div class="p-6">
    <div class="space-y-6 mt-3">
        <h1 class="font-bold text-center">How to Use Your Report</h1>
    </div>
    <!-- For C Style Report -->
    <div class="p-6">
        <!-- Content for C -->
        <div class="p-6 pt-1 mt-5">
            <p class="mb-3">
                Your DISC profile is a stepping stone in your journey of
                self-discovery. This report offers a personalised roadmap to
                understanding your unique combination of traits, helping you
                uncover how you naturally approach tasks, build relationships,
                and make decisions. Here's how to make the most of your report:
            </p>

            <div
                class="flex flex-col md:flex-row items-start space-y-4 md:space-y-0 mb-3"
            >
                <div class="hidden md:flex md:w-1/4 justify-center">
                    <img
                        class="md:w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/tick.png'"
                        alt=""
                    />
                </div>
                <div class="w-full md:w-3/4 pink md:mt-7">
                    <h2 class="text-md font-semibold mb-4">
                        Gain Self-Awareness
                    </h2>
                    <p class="mb-2">
                        Explore the detailed descriptions of your DISC style and
                        what makes you unique. Use this understanding to embrace
                        your strengths and identify areas for growth in personal
                        and social settings.
                    </p>
                </div>
            </div>

            <div
                class="flex flex-col md:flex-row items-start space-y-4 md:space-y-0 mb-3"
            >
                <div class="hidden md:flex md:w-1/4 justify-center">
                    <img
                        class="md:w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/tick.png'"
                        alt=""
                    />
                </div>
                <div class="w-full md:w-3/4 pink md:mt-7">
                    <h2 class="text-md font-semibold mb-4">
                        Practical Applications for Everyday Life
                    </h2>
                    <p class="mb-2">
                        Discover actionable insights into how your traits
                        influence your study habits, relationships, and
                        problem-solving approaches. This section is designed to
                        help you turn understanding into action.
                    </p>
                </div>
            </div>

            <div
                class="flex flex-col md:flex-row items-start space-y-4 md:space-y-0 mb-3"
            >
                <div class="hidden md:flex md:w-1/4 justify-center">
                    <img
                        class="md:w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/tick.png'"
                        alt=""
                    />
                </div>
                <div class="w-full md:w-3/4 pink md:mt-7">
                    <h2 class="text-md font-semibold mb-4">
                        Tailored Recommendations for Parents and Teachers
                    </h2>
                    <p class="mb-2">
                        A special section provides practical tips for parents
                        and teachers on how to support you based on your DISC
                        profile. This ensures everyone around you can work
                        together to help you thrive.
                    </p>
                </div>
            </div>

            <div
                class="flex flex-col md:flex-row items-start space-y-4 md:space-y-0 mb-3"
            >
                <div class="hidden md:flex md:w-1/4 justify-center">
                    <img
                        class="md:w-90 h-auto object-contain"
                        :src="'/images/reports-svg-images/tick.png'"
                        alt=""
                    />
                </div>
                <div class="w-full md:w-3/4 pink md:mt-7">
                    <h2 class="text-md font-semibold mb-4">
                        A Holistic Approach
                    </h2>
                    <p class="mb-2">
                        Pair your DISC report with your Learning Styles report
                        to gain a complete picture of how you learn and engage
                        with the world. This dual perspective can guide you in
                        making better decisions about study techniques, hobbies,
                        and even career interests.
                    </p>
                </div>
            </div>
            </div>
        </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "HowToUseReports",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>

<style scoped>
.p {
    font-weight: 500 !important;
}

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
div.space-y-2 > h4.font-medium,
.pink > h2 {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    font-size: 24px;
}

.p-6 > h2,
.p-6 > .row > .col-6 > h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

ol,
ul {
    padding-left: 0px !important;
}

.pink {
    margin-top: 28px;
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

    strong{
        font-size: 1rem !important;
    }
    .row:nth-of-type(2) {
        flex-direction: column-reverse;
    }

    .col-6 {
        width: 100%;
        margin-bottom: 2rem;
    }

    .p-6 {
        padding: 1rem;
    }

    h2,
    h3,
    h4 {
        font-size: 1rem !important;
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

</style>
