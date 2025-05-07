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
            <!-- Content for C -->
            <div class="p-6 pt-1">
                <h2 class="text-4xl font-semibold mb-4 text-center">
                    Welcome!
                </h2>
                <p class="mb-6">
                    Welcome to your Teen DISC Assessment Report! This report is
                    designed to help you explore and understand your unique
                    personality traits. By discovering more about yourself,
                    you'll be able to enhance your strengths, address areas for
                    growth, and make informed decisions in various aspects of
                    your life.
                </p>

                <div class="row">
                    <h2 class="text-3xl font-semibold mb-4">
                        Understanding DISC Styles
                    </h2>
                    <p class="mb-4">
                        The DISC Assessment identifies four primary personality
                        styles: Dominant, Influential, Supportive, and Cautious.
                        Each style represents different ways of thinking,
                        behaving, and interacting with others. Here's a brief
                        overview of each style:
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <div class="flex justify-center items-center">
                                <img class="w-full md:w-96 h-auto object-contain"
                                    :src="'/images/reports-images/TeensDiscReportStyleImages/Introduction/1.svg'"
                                    alt="" />
                            </div>
                        </div>
                        <div>
                            <ul class="list-none list-inside mb-6 space-y-4">
                                <li>
                                    <strong>Dominant (D):</strong> Individuals
                                    with a Dominant style are assertive,
                                    confident, and results oriented. They thrive
                                    in leadership roles and enjoy taking on
                                    challenges.
                                </li>
                                <li>
                                    <strong>Influential (I):</strong>
                                    Influential individuals are charismatic,
                                    social, and persuasive. They enjoy being
                                    around people and often inspire others with
                                    their enthusiasm.
                                </li>
                                <li>
                                    <strong>Supportive (S):</strong> Those with
                                    a Supportive style are patient, reliable,
                                    and cooperative. They excel in creating
                                    harmony and are often seen as trustworthy
                                    team players.
                                </li>
                                <li>
                                    <strong>Cautious (C):</strong> Cautious
                                    individuals are analytical, detail-oriented,
                                    and methodical. They prefer structured
                                    environments and are known for their
                                    precision and focus.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <img class="w-full md:w-[70%] h-auto object-contain mb-6"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Introduction/2.svg'" alt="" />
                </div>
                <h2 class="text-3xl font-semibold mb-4">
                    How to Interpret Your Results
                </h2>
                <p class="mb-4">
                    Your DISC profile reveals your unique combination of traits,
                    providing insights into how you naturally approach tasks,
                    interact with others, and make decisions. Here's how to
                    interpret your results:
                </p>
                <ul class="list-none list-inside mb-6">
                    <li class="mt-3">
                        <strong>Overall Profile:</strong> The assessment will
                        highlight your strengths and areas for growth within
                        each of the four DISC styles.
                    </li>
                    <li class="mt-3">
                        <strong>Graphical Representation:</strong>
                        <ul class="list-none pl-6 ml-6 mt-2" style="list-style-type: circle">
                            <li>
                                <strong>Circle Graph:</strong> Your report
                                includes a circle graph that visually displays
                                your DISC scores. A dot's distance from the edge
                                of the circle indicates how naturally inclined
                                you are to embody the characteristics of your
                                DISC style.
                            </li>
                            <li>
                                <strong>Dot Position:</strong> A dot positioned
                                toward the edge of the circle indicates a strong
                                inclination toward the characteristics of that
                                style.
                            </li>
                            <li>
                                <strong>Score Graph:</strong> The report also
                                features a graph of scores for each DISC trait,
                                allowing you to see the balance and distribution
                                of your characteristics.
                            </li>
                        </ul>
                    </li>
                    <li class="mt-3">
                        <strong>Descriptive Words:</strong> Tables throughout
                        the report will highlight key descriptive words that
                        capture the essence of your DISC traits.
                    </li>
                </ul>

                <p>
                    As you read through your report, remember that each DISC
                    style has its strengths and areas for growth. Embrace your
                    unique combination of traits and use the insights to enhance
                    your personal development journey.
                </p>
            </div>
        </div>
    </div>

    <div id="pdfPages" ref="pdfPages" :hidden="!downloading">
        <!-- Intro  page -->
        <div class="pdf-page" id="1" v-if="currentPageId == 1">
            <div class="p-6 pt-1">
                <h1 class="text-center flex-1 font-bold mt-3">Introduction</h1>
                <h2 class="text-4xl font-semibold mb-4 text-center">
                    Welcome!
                </h2>
                <p class="mb-6">
                    Welcome to your Teen DISC Assessment Report! This report is
                    designed to help you explore and understand your unique
                    personality traits. By discovering more about yourself,
                    you'll be able to enhance your strengths, address areas for
                    growth, and make informed decisions in various aspects of
                    your life.
                </p>

                <div class="row">
                    <h2 class="text-3xl font-semibold mb-4">
                        Understanding DISC Styles
                    </h2>
                    <p class="mb-4">
                        The DISC Assessment identifies four primary personality
                        styles: Dominant, Influential, Supportive, and Cautious.
                        Each style represents different ways of thinking,
                        behaving, and interacting with others. Here's a brief
                        overview of each style:
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <div class="flex justify-center items-center">
                                <img class="w-full md:w-96 h-auto object-contain"
                                    :src="'/images/reports-images/TeensDiscReportStyleImages/Introduction/1.svg'"
                                    alt="" />
                            </div>
                        </div>
                        <div>
                            <ul class="list-none list-inside mb-6 space-y-4">
                                <li>
                                    <strong>Dominant (D):</strong> Individuals
                                    with a Dominant style are assertive,
                                    confident, and results oriented. They thrive
                                    in leadership roles and enjoy taking on
                                    challenges.
                                </li>
                                <li>
                                    <strong>Influential (I):</strong>
                                    Influential individuals are charismatic,
                                    social, and persuasive. They enjoy being
                                    around people and often inspire others with
                                    their enthusiasm.
                                </li>
                                <li>
                                    <strong>Supportive (S):</strong> Those with
                                    a Supportive style are patient, reliable,
                                    and cooperative. They excel in creating
                                    harmony and are often seen as trustworthy
                                    team players.
                                </li>
                                <li>
                                    <strong>Cautious (C):</strong> Cautious
                                    individuals are analytical, detail-oriented,
                                    and methodical. They prefer structured
                                    environments and are known for their
                                    precision and focus.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <img class="w-full md:w-[70%] h-auto object-contain mb-6"
                        :src="'/images/reports-images/TeensDiscReportStyleImages/Introduction/teendiscintro.png'"
                        alt="" />
                </div>
                <h2 class="text-3xl font-semibold mb-4">
                    How to Interpret Your Results
                </h2>
                <p class="mb-4">
                    Your DISC profile reveals your unique combination of traits,
                    providing insights into how you naturally approach tasks,
                    interact with others, and make decisions. Here's how to
                    interpret your results:
                </p>
                <ul class="list-none list-inside mb-6">
                    <li class="mt-3">
                        <strong>Overall Profile:</strong> The assessment will
                        highlight your strengths and areas for growth within
                        each of the four DISC styles.
                    </li>
                    <li class="mt-3">
                        <strong>Graphical Representation:</strong>
                        <ul class="list-none pl-6 ml-6 mt-2" style="list-style-type: circle">
                            <li>
                                <strong>Circle Graph:</strong> Your report
                                includes a circle graph that visually displays
                                your DISC scores. A dot's distance from the edge
                                of the circle indicates how naturally inclined
                                you are to embody the characteristics of your
                                DISC style.
                            </li>
                            <li>
                                <strong>Dot Position:</strong> A dot positioned
                                toward the edge of the circle indicates a strong
                                inclination toward the characteristics of that
                                style.
                            </li>
                            <li>
                                <strong>Score Graph:</strong> The report also
                                features a graph of scores for each DISC trait,
                                allowing you to see the balance and distribution
                                of your characteristics.
                            </li>
                        </ul>
                    </li>
                    <li class="mt-3">
                        <strong>Descriptive Words:</strong> Tables throughout
                        the report will highlight key descriptive words that
                        capture the essence of your DISC traits.
                    </li>
                </ul>

                <p>
                    As you read through your report, remember that each DISC
                    style has its strengths and areas for growth. Embrace your
                    unique combination of traits and use the insights to enhance
                    your personal development journey.
                </p>
            </div>
        </div>

        <div class="pdf-page custom-report-page" id="2" v-if="currentPageId === 2">
            <HowToUseReports :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="3" v-if="currentPageId === 3">
            <DiscProfileSummary :style="style" :childName="childName" :discScores="discScores" />
        </div>
        <div class="pdf-page" id="4" v-if="currentPageId === 4">
            <StrengthArea :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="5" v-if="currentPageId === 5">
            <SocialInteraction :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="6" v-if="currentPageId === 6">
            <DecisionMaking :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="7" v-if="currentPageId === 7">
            <LearningStyleInsight :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="8" v-if="currentPageId === 8">
            <StressManagement :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="9" v-if="currentPageId === 9">
            <EnvironmentPreference :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="10" v-if="currentPageId === 10">
            <WorkingWithOther :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="11" v-if="currentPageId === 11">
            <ParentalInsight :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="12" v-if="currentPageId === 12">
            <TipsForParents :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="13" v-if="currentPageId === 13">
            <TeacherInsight :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="14" v-if="currentPageId === 14">
            <TipsForTeacher :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="15" v-if="currentPageId === 15">
            <CareerConsiderations :style="style" :childName="childName" />
        </div>
        <div class="pdf-page" id="16" v-if="currentPageId === 16">
            <Conclusion :style="style" :childName="childName" />
        </div>
    </div>

    <LoadingSpinner :visible="downloading" :message="'Downloading Report..... '" />
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";
import Button from "@/shadcn/ui/button/Button.vue";
import html2canvas from "html2canvas";
import jsPDF from "jspdf";
import HowToUseReports from "./HowToUseReports.vue";
import DiscProfileSummary from "./DiscProfileSummary.vue";
import StrengthArea from "./StrengthArea.vue";
import StressManagement from "./StressManagement.vue";
import WorkingWithOther from "./WorkingWithOther.vue";
import ParentalInsight from "./ParentalInsight.vue";
import TipsForParents from "./TipsForParents.vue";
import TeacherInsight from "./TeacherInsight.vue";
import TipsForTeacher from "./TipsForTeacher.vue";
import CareerConsiderations from "./CareerConsiderations.vue";
import Conclusion from "./Conclusion.vue";
import LoadingSpinner from "@/Components/LoadingSpinner.vue";
import SocialInteraction from "./SocialInteraction.vue";
import DecisionMaking from "./DecisionMaking.vue";
import LearningStyleInsight from "./LearningStyleInsight.vue";
import EnvironmentPreference from "./EnvironmentPreference.vue";
import generatePdf from "@/Helpers/PdfGenerateService.js";

export default {
    name: "Introduction",
    layout: AssessmentTypes,
    components: {
        Button,
        LoadingSpinner,
        HowToUseReports,
        DiscProfileSummary,
        StrengthArea,
        SocialInteraction,
        DecisionMaking,
        LearningStyleInsight,
        StressManagement,
        EnvironmentPreference,
        WorkingWithOther,
        ParentalInsight,
        TipsForParents,
        TeacherInsight,
        TipsForTeacher,
        CareerConsiderations,
        Conclusion,
    },

    props: {
        style: String,
        childName: String,
        image: String,
        discScores: Object,
    },
    data() {
        return {
            currentPageId: 1,
            downloading: false,
            totalPage: 16,
            maxHeightPdf: 2000,
            generatePdfName: "disc-report.pdf",
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
.p {
    font-weight: 500 !important;
}

#pdfPages {
    width: 994px;
    /* font-size: 10px; */
    /* line-height: 1.6; */
}

/* Add styles here */
/* h1, h2, h2, h4 {
    color: rgb(55 48 163 );
    font-weight: bold !important;
} */
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
    color: #fa25c4;
    /* font-size: 19px; */
}

.p-6>h2,
.p-6>.row>.col-6>h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

ol,
ul {
    padding-left: 0px !important;
}

/* Add these new mobile responsive styles */
@media (max-width: 768px) {
    .row {
        display: flex;
        flex-direction: column;
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
        color: rgb(55 48 163);
        font-weight: bold;
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

#pdfPages {
    position: absolute;
    top: 0;
    left: -9999px;
}
</style>
