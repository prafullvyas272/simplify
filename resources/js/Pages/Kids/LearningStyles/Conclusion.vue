<template>
    <div class="p-6">

    <div class="container mx-auto p-4">
        <h1 class="font-bold text-center">Conclusion</h1>
    </div>

    <!-- Report 1 Conclusion will be same -->
    <div>
        <!-- Content for Report 1 -->
        <div class="p-6 space-y-8">
            <!-- Understanding Child's Learning Style Section -->
            <div class="row">
                <div class="col-12">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page16.svg'" alt="" />
                    </div>
                </div>
                <p class=" mb-4">
                    Understanding your child's unique learning style is
                    key to helping them succeed academically and
                    personally. By recognising your child’s style, you
                    can tailor their learning environment to match their
                    strengths and enhance their ability to absorb and
                    retain information - making learning a more
                    enjoyable and productive experience.
                </p>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/16.svg'" alt="" />
                    </div>

                </div>
                <div class="col-6">
                    <!-- Next Steps Section -->
                    <div>
                        <h2 class="text-2xl font-bold mb-4">
                            Next Steps: What to Keep in Mind
                        </h2>
                        <ul class="list-disc pl-6  space-y-4">
                            <li>
                                <strong>Tailored Support:</strong>
                                <p>
                                    Use the strategies outlined in this report
                                    to provide targeted support that aligns with
                                    your child’s learning style. Choose
                                    activities and resources that cater to how
                                    they best absorb and process information.
                                </p>
                            </li>
                            <li>
                                <strong>Effective Communication:</strong>
                                <p>
                                    Keep in mind how your child prefers to
                                    receive information and use the
                                    communication methods that resonate most
                                    with them.
                                </p>
                            </li>
                            <li>
                                <strong>Creating the Right Environment:</strong>
                                <p>
                                    Ensure that your child’s learning
                                    environment at home is set up to reinforce
                                    their strengths.
                                </p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <li>
                                <strong>Ongoing Engagement:</strong>
                                <p>
                                    Remember that supporting your child’s
                                    learning style is an ongoing process.
                                    Continuously observe how they respond to
                                    different approaches and be ready to adapt
                                    as needed to keep them motivated and
                                    engaged.
                                </p>
                            </li>
                            <li>
                                <strong>Building Confidence:</strong>
                                <p>
                                    Keep in mind that understanding and
                                    supporting your child’s unique learning
                                    style will boost their confidence. Celebrate
                                    their successes and encourage them to
                                    explore new ways to learn and grow,
                                    recognising the value of their individual
                                    strengths.
                                </p>
                            </li>
            </div>

            <!-- Final Message Section -->
            <div>
                <p class="">
                    By keeping these points in mind and integrating the insights
                    from this report into your daily routines, you can help your
                    child thrive in their learning journey and beyond.
                    <br /><br />
                    Remember, every child is unique, and your ongoing support
                    and encouragement are vital to their success.
                </p>
            </div>
        </div>
    </div>
</div>


</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "Conclusion",
    layout: AssessmentTypes,
    props: {
        style: String,
        childName: String,
        image: String,
    },
};
</script>

<style scoped>
/* Add styles here */
div.col-6>h4.font-medium,
li>div>h4,
div.space-y-2>h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    font-size: 19px;
}

div.col-6>h4.font-medium,
li>div>h4,
strong,
div.space-y-2>h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color:#fa25c4
    /* font-size: 19px; */
}

h2,.p-6>.row>.col-6>h2{
    color: rgb(55 48 163 );
    font-weight: bold !important;
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

    .p-6 {
        padding: 1rem;
    }

    h2 {
        font-size: 1.5rem !important;
    }

    /* Adjust image on mobile */
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
