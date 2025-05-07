<template>
    <div class="p-6">
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
        <div>
            <!-- Content for Report 1 -->

            <div class="p-4">
                <h1 class="text-xl md:text-3xl font-bold mb-4 text-indigo-800 text-center">
                    Welcome to Your Learning Styles Report
                </h1>
                <p class="mb-4 text-center">
                    Congratulations on completing your Learning Styles
                    Assessment! This report is designed to give you valuable
                    insights into your preferred learning style, helping you
                    understand how you best process and retain information.
                    Understanding your learning style can enhance your study
                    habits, improve your academic performance, and help you make
                    the most of your educational experiences.
                </p>
                <div class="row">
                    <div class="col-6">
                        <h2 class="text-xl md:text-3xl font-bold mb-2 text-indigo-800">
                            What This Report Covers
                        </h2>
                        <p class="mb-6">
                            In this report, you will find a detailed analysis of
                            your learning style, including:
                        </p>
                        <ul class="list-disc pl-6 mb-4">
                            <li>
                                An introduction to your specific learning style.
                            </li>
                            <li>
                                Key characteristics and strengths associated
                                with your style.
                            </li>
                            <li>
                                Tips for enhancing your learning based on your
                                style.
                            </li>
                            <li>
                                Strategies for creating an ideal learning
                                environment.
                            </li>
                            <li>
                                Practical advice for parents and teachers to
                                support you in your learning journey.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img class="w-64 h-auto object-contain"
                                :src="'/images/reports-svg-images/Teens/LearningStyles/2STYLES/2.png'" alt="" />
                        </div>
                    </div>
                </div>

                <h2 class="text-xl font-bold mb-2 text-indigo-800">
                    The Four Learning Styles
                </h2>
                <div class="row">
                    <div class="col-12">
                        <p class="mb-4">
                            There are four primary learning styles, each with
                            its unique approach to processing information:
                        </p>

                        <div class="flex justify-center items-center">
                            <img class="w-96 h-auto object-contain"
                                :src="'/images/reports-svg-images/Teens/LearningStyles/2STYLES/31.svg'" alt="" />
                        </div>

                        <h2 class="text-xl font-bold mb-2 text-indigo-800">
                            Blended Learning Styles
                        </h2>
                        <p class="mb-4">
                            It’s important to note that many people have a blend
                            of learning styles rather than just one dominant
                            style. You may find that you benefit from a
                            combination of visual, auditory, reading/writing,
                            and kinaesthetic methods. This blended approach
                            allows you to adapt your learning strategies to
                            different situations and make the most of various
                            learning opportunities.
                        </p>
                    </div>

                    <h2 class="text-xl font-bold mb-2 text-indigo-800">
                        Introduction to Your Learning Style
                    </h2>
                    <p>
                        In the following sections, we will delve into your
                        specific learning style. We’ll explore the
                        characteristics of your learning style, provide tips to
                        enhance your learning, and offer strategies to help you
                        succeed academically and beyond.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="pdfPages" ref="pdfPages" :hidden="!downloading">
        <!-- Intro  page -->
        <div class="pdf-page" id="1" v-if="currentPageId == 1">
            <div class="space-y-6 mt-4">
                <h2 class="text-center font-bold mb-4">Introduction</h2>
            </div>
            <div>
                <!-- Content for Report 1 -->

                <div class="p-4">
                    <h1 class="text-xl md:text-3xl font-bold mb-4 text-indigo-800 text-center">
                        Welcome to Your Learning Styles Report
                    </h1>
                    <p class="mb-4 text-center">
                        Congratulations on completing your Learning Styles
                        Assessment! This report is designed to give you valuable
                        insights into your preferred learning style, helping you
                        understand how you best process and retain information.
                        Understanding your learning style can enhance your study
                        habits, improve your academic performance, and help you
                        make the most of your educational experiences.
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <h2 class="text-xl md:text-3xl font-bold mb-2 text-indigo-800">
                                What This Report Covers
                            </h2>
                            <p class="mb-6">
                                In this report, you will find a detailed
                                analysis of your learning style, including:
                            </p>
                            <ul class="list-disc pl-6 mb-4">
                                <li>
                                    An introduction to your specific learning
                                    style.
                                </li>
                                <li>
                                    Key characteristics and strengths associated
                                    with your style.
                                </li>
                                <li>
                                    Tips for enhancing your learning based on
                                    your style.
                                </li>
                                <li>
                                    Strategies for creating an ideal learning
                                    environment.
                                </li>
                                <li>
                                    Practical advice for parents and teachers to
                                    support you in your learning journey.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img class="w-64 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Teens/LearningStyles/2STYLES/2.png'" alt="" />
                            </div>
                        </div>
                    </div>

                    <h2 class="text-xl font-bold mb-2 text-indigo-800">
                        The Four Learning Styles
                    </h2>
                    <div class="row">
                        <div class="col-12">
                            <p class="mb-4">
                                There are four primary learning styles, each
                                with its unique approach to processing
                                information:
                            </p>

                            <div class="flex justify-center items-center">
                                <img class="w-96 h-auto object-contain"
                                    :src="'/images/reports-svg-images/Teens/LearningStyles/2STYLES/31.svg'" alt="" />
                            </div>

                            <h2 class="text-xl font-bold mb-2 text-indigo-800">
                                Blended Learning Styles
                            </h2>
                            <p class="mb-4">
                                It’s important to note that many people have a
                                blend of learning styles rather than just one
                                dominant style. You may find that you benefit
                                from a combination of visual, auditory,
                                reading/writing, and kinaesthetic methods. This
                                blended approach allows you to adapt your
                                learning strategies to different situations and
                                make the most of various learning opportunities.
                            </p>
                        </div>

                        <h2 class="text-xl font-bold mb-2 text-indigo-800">
                            Introduction to Your Learning Style
                        </h2>
                        <p>
                            In the following sections, we will delve into your
                            specific learning style. We’ll explore the
                            characteristics of your learning style, provide tips
                            to enhance your learning, and offer strategies to
                            help you succeed academically and beyond.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pdf-page" id="2" v-if="currentPageId === 2">
            <LearningStyle :learnScores="learnScores" :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="3" v-if="currentPageId === 3">
            <StrengthAndGrowthArea :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="4" v-if="currentPageId === 4">
            <LearningStyleInsight :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="5" v-if="currentPageId === 5">
            <EnvironmentPreference :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="6" v-if="currentPageId === 6">
            <BestStudyForExams :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="7" v-if="currentPageId === 7">
            <TimeManagement :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="8" v-if="currentPageId === 8">
            <ParentalInsight :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="9" v-if="currentPageId === 9">
            <TeacherInsight :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="10" v-if="currentPageId === 10">
            <Conclusion :style="style" :childName="childName" />
        </div>
    </div>


    <LoadingSpinner :visible="downloading" :message="'Downloading Report..... '" />
</template>

<script>
import LoadingSpinner from "@/Components/LoadingSpinner.vue";
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";
import Button from "@/shadcn/ui/button/Button.vue";
import html2canvas from "html2canvas";
import jsPDF from "jspdf";
import LearningStyle from "./LearningStyle.vue";
import StrengthAndGrowthArea from "./StrengthAndGrowthArea.vue";
import LearningStyleInsight from "./LearningStyleInsight.vue";
import EnvironmentPreference from "./EnvironmentPreference.vue";
import BestStudyForExams from "./BestStudyForExams.vue";
import ParentalInsight from "./ParentalInsight.vue";
import TeacherInsight from "./TeacherInsight.vue";
import Conclusion from "./Conclusion.vue";
import TimeManagement from "./TimeManagement.vue";
import generatePdf from "@/Helpers/PdfGenerateService.js";

export default {
    name: "Introduction",
    layout: AssessmentTypes,
    components: {
        Button,
        LoadingSpinner,
        LearningStyle,
        StrengthAndGrowthArea,
        LearningStyleInsight,
        EnvironmentPreference,
        BestStudyForExams,
        TimeManagement,
        ParentalInsight,
        TeacherInsight,
        Conclusion,
    },
    props: {
        style: String,
        childName: String,
        learnScores: Object,
        image: String,
    },
    data() {
        return {
            currentPageId: 1,
            downloading: false,
            totalPage: 10,
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

    h2,
    h1 {
        font-size: 1.5rem !important;
        line-height: 2rem;
    }

    strong {
        font-size: 1rem;
    }

    /* Adjust image container on mobile */
    .col-6 .flex.justify-center.items-center {
        margin: 1rem 0;
    }

    /* Adjust spacing between sections */
    .row+.row {
        margin-top: 1rem;
    }

    ul.list-disc {
        padding-left: 1rem;
    }
}

/*
#pdfPages {
    position: fixed;
    top: -100vh;
    left: -100vw;
    width: 0;
    height: 0;
    overflow: hidden;
    opacity: 0;
    pointer-events: none;
    visibility: hidden;
} */
</style>
