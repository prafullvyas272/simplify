<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
            <div class="w-full relative mb-10 text-center">
                <h1 class="text-3xl sm:text-5xl font-bold">Introduction</h1>
                <div class="absolute right-0 top-1/2 transform -translate-y-1/2 hidden sm:block">
                    <Button @click="downloadPdf">Download PDF</Button>
                </div>
                <div class="block sm:hidden mt-4">
                    <Button @click="downloadPdf">Download PDF</Button>
                </div>
            </div>
        </div>
    <div class="p-6">
        <!-- Content for Report 2 -->
        <div class="p-6">
            <header class="text-center mb-6">
                <h1 class="text-3xl font-bold">
                    Welcome to Your Personalised Learning Guide
                </h1>
                <p class="text-lg mt-2">
                    <!-- Nurture your child's unique way of learning with helpful
                    insights and practical tips. -->
                </p>
            </header>

            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img
                            class="w-96 h-auto object-contain"
                            :src="'/images/reports-svg-images/Kids/LearningStyles/4.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-6">
                    <section class="mb-8">
                        <h2 class="text-2xl font-semibold">Welcome Message</h2>
                        <p class="mt-4">
                            Hello and welcome to your personalised guide on
                            understanding and supporting your child! We are
                            excited to share insights and tips that will help
                            you nurture your child's unique way of learning.
                            This guide is designed to be both informative and
                            practical, providing you with the tools you need to
                            help your child thrive in their educational journey.
                        </p>
                    </section>
                    <section class="mb-8">
                        <h2 class="text-2xl font-semibold">
                            Purpose of the Report
                        </h2>
                        <p class="mt-4">
                            The purpose of this report is to help you understand
                            your child’s learning style and provide strategies
                            to support them both at school and at home. By
                            recognising how your child learns best, you can
                            create a supportive and engaging environment that
                            makes learning enjoyable and effective.
                        </p>
                    </section>
                    <section class="mb-8">
                        <h2 class="text-2xl font-semibold">
                            Explanation of Learning Styles
                        </h2>
                        <p class="mt-4">
                            Learning styles are the different ways in which
                            children prefer to receive and process information.
                            There are four main learning styles:
                        </p>
                    </section>
                </div>
            </div>
            <ul class="list-inside list-disc mt-4 space-y-2">
                <li>
                    <strong>Visual Learners:</strong> These learners understand
                    and remember information best when it is presented visually.
                    They love pictures, diagrams, charts, and videos.
                </li>
                <li>
                    <strong>Auditory Learners:</strong> These learners excel
                    when they can hear information. They enjoy listening to
                    stories, discussions, and audio recordings.
                </li>
                <li>
                    <strong>Kinaesthetic Learners:</strong> These learners need
                    to move and do. They learn best through hands-on activities
                    and physical experiences.
                </li>
                <li>
                    <strong>Reading/Writing Learners:</strong> These learners
                    prefer to interact with text. They thrive on reading and
                    writing activities.
                </li>
            </ul>
            <div class="my-4"></div>

            <section class="mb-8">
                <div class="row">
                    <div class="col-6">
                        <p class="mt-4">
                            It is also possible for children to have a blend of
                            learning styles. For example, your child might be a
                            visual learner but also benefit from auditory or
                            kinaesthetic learning techniques.
                        </p>
                        <p class="mt-4">
                            Understanding this blend can help you tailor their
                            educational experience to suit their diverse needs.
                        </p>
                        <p class="mt-4">
                            In the following sections, we will focus on your
                            child's specific learning style, providing detailed
                            tips and strategies to support their educational
                            journey.
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img
                                class="w-64 h-auto object-contain"
                                :src="'/images/reports-svg-images/Kids/LearningStyles/5.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <LoadingSpinner
        :visible="downloading"
        :message="'Downloading Report..... '"
    />

    <div id="pdfPages" ref="pdfPages" :hidden="!downloading">
        <!-- Intro  page -->
        <div class="pdf-page" id="1">
            <div class="p-6">
                <h1 class="text-center flex-1 font-bold">Introduction</h1>
                <!-- Content for Report 2 -->
                <div class="p-6">
                    <header class="text-center mb-6">
                        <h1 class="text-3xl font-bold">
                            Welcome to Your Personalised Learning Guide
                        </h1>
                        <p class="text-lg mt-2">
                            <!-- Nurture your child's unique way of learning with helpful
                    insights and practical tips. -->
                        </p>
                    </header>

                    <div class="row">
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img
                                    class="w-96 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Kids/LearningStyles/4.svg'"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <section class="mb-8">
                                <h2 class="text-2xl font-semibold">
                                    Welcome Message
                                </h2>
                                <p class="mt-4">
                                    Hello and welcome to your personalised guide
                                    on understanding and supporting your child!
                                    We are excited to share insights and tips
                                    that will help you nurture your child's
                                    unique way of learning. This guide is
                                    designed to be both informative and
                                    practical, providing you with the tools you
                                    need to help your child thrive in their
                                    educational journey.
                                </p>
                            </section>
                            <section class="mb-8">
                                <h2 class="text-2xl font-semibold">
                                    Purpose of the Report
                                </h2>
                                <p class="mt-4">
                                    The purpose of this report is to help you
                                    understand your child’s learning style and
                                    provide strategies to support them both at
                                    school and at home. By recognising how your
                                    child learns best, you can create a
                                    supportive and engaging environment that
                                    makes learning enjoyable and effective.
                                </p>
                            </section>
                            <section class="mb-8">
                                <h2 class="text-2xl font-semibold">
                                    Explanation of Learning Styles
                                </h2>
                                <p class="mt-4">
                                    Learning styles are the different ways in
                                    which children prefer to receive and process
                                    information. There are four main learning
                                    styles:
                                </p>
                            </section>
                        </div>
                    </div>
                    <ul class="list-inside list-disc mt-4 space-y-2">
                        <li>
                            <strong>Visual Learners:</strong> These learners
                            understand and remember information best when it is
                            presented visually. They love pictures, diagrams,
                            charts, and videos.
                        </li>
                        <li>
                            <strong>Auditory Learners:</strong> These learners
                            excel when they can hear information. They enjoy
                            listening to stories, discussions, and audio
                            recordings.
                        </li>
                        <li>
                            <strong>Kinaesthetic Learners:</strong> These
                            learners need to move and do. They learn best
                            through hands-on activities and physical
                            experiences.
                        </li>
                        <li>
                            <strong>Reading/Writing Learners:</strong> These
                            learners prefer to interact with text. They thrive
                            on reading and writing activities.
                        </li>
                    </ul>
                    <div class="my-4"></div>

                    <section class="mb-8">
                        <div class="row">
                            <div class="col-6">
                                <p class="mt-4">
                                    It is also possible for children to have a
                                    blend of learning styles. For example, your
                                    child might be a visual learner but also
                                    benefit from auditory or kinaesthetic
                                    learning techniques.
                                </p>
                                <p class="mt-4">
                                    Understanding this blend can help you tailor
                                    their educational experience to suit their
                                    diverse needs.
                                </p>
                                <p class="mt-4">
                                    In the following sections, we will focus on
                                    your child's specific learning style,
                                    providing detailed tips and strategies to
                                    support their educational journey.
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="flex justify-center items-center">
                                    <img
                                        class="w-64 h-auto object-contain"
                                        :src="'/images/reports-svg-images/Kids/LearningStyles/5.svg'"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- Your child learning profile page -->
        <div class="pdf-page" id="2" v-if="currentPageId === 2">
            <ChildLearningProfile
                :learnScores="learnScores"
                :style="style"
                :childName="childName"
            />
        </div>

        <div class="pdf-page" id="3" v-if="currentPageId === 3">
            <AuditoryOverview
                :learnScores="learnScores"
                :style="style"
                :childName="childName"
            />
        </div>

        <div class="pdf-page" id="4" v-if="currentPageId === 4">
            <TeachingTips :style="style" :childName="childName" />
        </div>

        <div class="pdf-page" id="5" v-if="currentPageId === 5">
            <HomeSupportStrategies :style="style" :childName="childName" />
        </div>

        <div class="pdf-page" id="6" v-if="currentPageId === 6">
            <PracticalExercises :style="style" :childName="childName" />
        </div>

        <div class="pdf-page" id="7" v-if="currentPageId === 7">
            <Communication :style="style" :childName="childName" />
        </div>

        <div class="pdf-page" id="8" v-if="currentPageId === 8">
            <Conclusion :style="style" :childName="childName" />
        </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";
import Button from "@/shadcn/ui/button/Button.vue";
import ChildLearningProfile from "./ChildLearningProfile.vue";
import AuditoryOverview from "./AuditoryOverview.vue";
import TeachingTips from "./TeachingTips.vue";
import HomeSupportStrategies from "./HomeSupportStrategies.vue";
import PracticalExercises from "./PracticalExercises.vue";
import Communication from "./Communication.vue";
import Conclusion from "./Conclusion.vue";
import LoadingSpinner from "@/Components/LoadingSpinner.vue";
import generatePdf from "@/Helpers/PdfGenerateService.js";

export default {
    name: "Introduction",
    layout: AssessmentTypes,
    components: {
        Button,
        LoadingSpinner,
        ChildLearningProfile,
        AuditoryOverview,
        TeachingTips,
        HomeSupportStrategies,
        PracticalExercises,
        Communication,
        Conclusion,
    },
    props: {
        style: String,
        childName: String,
        image: String,
        learnScores: Object,
    },
    data() {
        return {
            currentPageId: 1,
            downloading: false,
            totalPage: 8,
            maxHeightPdf: 2000,
            generatePdfName: "learning-report.pdf",
        };
    },
    methods: {
        disableScroll() {
            document.body.style.overflow = "hidden";
        },
        enableScroll() {
            document.body.style.overflow = "";
        },
        async downloadPdf() {
            try {
                this.disableScroll();
                this.downloading = true;
                await generatePdf(
                    this.totalPage,
                    this.maxHeightPdf,
                    this.generatePdfName,
                    (id) => (this.currentPageId = id),
                    this.$nextTick
                );
            } catch (error) {
                console.error("PDF Generation Failed:", error);
            } finally {
                this.downloading = false;
                this.enableScroll();
            }
        },
    },
};
</script>

<style scoped>
/* Add styles here */
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
div.space-y-2 > h4.font-medium {
    color: rgb(36, 168, 250);
    font-weight: bold;
    color: #fa25c4;
    /* font-size: 19px; */
}

h2,
.p-6 > .row > .col-6 > h2,
header > h1 {
    color: rgb(55 48 163);
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
        /* margin-bottom: 2rem; */
    }

    .p-6 {
        padding: 1rem;
    }

    h2 {
        font-size: 1.25rem !important;
    }

    /* Adjust image container on mobile */
    .col-6 .flex.justify-center.items-center {
        margin: 1rem 0;
    }

    .mb-8 {
        margin-bottom: 0 !important;
    }

    .mt-4 {
        margin-top: 2px !important;
    }

    /* Adjust spacing between sections */
    .row + .row {
        margin-top: 1rem;
    }

    ul.list-disc {
        padding-left: 1rem;
    }
}

.pdf-page::after {
    content: "";
    display: block;
    height: 20mm; /* Reserved footer space */
}
</style>
