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
    <div class="p-6 pt-0">
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
                    We are delighted to share the results of your child's DISC
                    assessment. This report offers insights into your child's
                    unique personality traits, helping you understand how they
                    engage with the world around them. Our aim is to provide
                    valuable information that will support you in nurturing and
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
                    The DISC model is a highly effective tool for understanding
                    behaviour and personality. It categorises behaviour into
                    four main styles: Dominant (D), Influential (I), Supportive
                    (S), and Cautious (C). Each style comes with its own
                    strengths and areas for growth. By understanding your
                    child's DISC style, you can better support their learning,
                    social interactions, and overall development.
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
                <strong>Supportive (S):</strong> Children with a supportive
                style are calm, reliable, and enjoy working in stable
                environments. They are team players and value cooperation.
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

        <div class="p-6">
            <h2 class="text-4xl font-semibold mb-4">
                How to Interpret Your Child's Results
            </h2>

            <p class="mb-4">
                The results of the DISC assessment are designed to provide a
                snapshot of your child's personality. It is important to
                remember that there are no right or wrong results. Each style
                has its own strengths and areas for growth.
            </p>

            <p class="mb-4">
                The goal is to understand your child's natural tendencies and
                use this knowledge to support their development.
            </p>

            <ul class="list-none pl-6 mb-6">
                <li>
                    <strong>Primary Style:</strong>
                    This is the style your child exhibits most strongly and will
                    be the focus of the detailed analysis in this report.
                </li>
                <li>
                    <strong>Secondary Styles:</strong>
                    These represent other styles your child may also display,
                    though to a lesser extent. Understanding these can give a
                    more well-rounded view of your child's behaviour.
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


    <div id="pdfPages" ref="pdfPages" class="mt-5" :hidden="!downloading">
        <div class="pdf-page" id="1" v-if="currentPageId == 1">
            <h1 class="text-center flex-1 font-bold py-3">Introduction</h1>
            <div class="p-6 pt-0">
                <h2 class="text-4xl font-semibold mb-4 text-center">
                    Welcome to Your Child’s DISC Assessment Report!
                </h2>
                <div class="row p-6">
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page21.svg'"
                                alt="" />
                        </div>
                    </div>
                    <div class="col-6">
                        <p class="mb-4">Dear Parents,</p>

                        <p class="mb-4">
                            We are delighted to share the results of your
                            child's DISC assessment. This report offers insights
                            into your child's unique personality traits, helping
                            you understand how they engage with the world around
                            them. Our aim is to provide valuable information
                            that will support you in nurturing and guiding your
                            child's growth and development.
                        </p>
                    </div>
                </div>

                <div class="row mt-4 p-6">
                    <div class="col-6">
                        <h2 class="text-4xl font-semibold mb-4">
                            Explanation of DISC Styles
                        </h2>

                        <p class="mb-4">
                            The DISC model is a highly effective tool for
                            understanding behaviour and personality. It
                            categorises behaviour into four main styles:
                            Dominant (D), Influential (I), Supportive (S), and
                            Cautious (C). Each style comes with its own
                            strengths and areas for growth. By understanding
                            your child's DISC style, you can better support
                            their learning, social interactions, and overall
                            development.
                        </p>
                    </div>
                    <div class="col-6 flex justify-center items-center">
                        <img class="w-64 h-auto object-contain" :src="'/images/reports-svg-images/Page28.svg'" alt="" />
                    </div>
                </div>

                <ul class="list-none pl-6 mb-6">
                    <li>
                        <strong>Dominant (D):</strong> Children with a dominant
                        style are often confident, assertive, and enjoy taking
                        charge. They are driven by results and thrive in
                        competitive environments.
                    </li>
                    <li>
                        <strong>Influential (I):</strong> Influential children
                        are outgoing, enthusiastic, and enjoy being around
                        others. They are natural communicators and excel in
                        social settings.
                    </li>
                    <li>
                        <strong>Supportive (S):</strong> Children with a
                        supportive style are calm, reliable, and enjoy working
                        in stable environments. They are team players and value
                        cooperation.
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

                <div class="p-6">
                    <h2 class="text-4xl font-semibold mb-4">
                        How to Interpret Your Child's Results
                    </h2>

                    <p class="mb-4">
                        The results of the DISC assessment are designed to
                        provide a snapshot of your child's personality. It is
                        important to remember that there are no right or wrong
                        results. Each style has its own strengths and areas for
                        growth.
                    </p>

                    <p class="mb-4">
                        The goal is to understand your child's natural
                        tendencies and use this knowledge to support their
                        development.
                    </p>

                    <ul class="list-none pl-6 mb-6">
                        <li>
                            <strong>Primary Style:</strong>
                            This is the style your child exhibits most strongly
                            and will be the focus of the detailed analysis in
                            this report.
                        </li>
                        <li>
                            <strong>Secondary Styles:</strong>
                            These represent other styles your child may also
                            display, though to a lesser extent. Understanding
                            these can give a more well-rounded view of your
                            child's behaviour.
                        </li>
                    </ul>

                    <p class="mb-4">
                        We hope this report provides you with valuable insights
                        and practical advice to help your child thrive.
                    </p>

                    <p class="text-lg font-semibold mb-4">
                        Let’s begin this journey of understanding and supporting
                        your child’s unique personality!
                    </p>
                </div>
            </div>
        </div>

        <div class="pdf-page" id="2" v-if="currentPageId == 2">
            <NoteForChild :discScores="discScores" :style="style" :childName="childName" />
        </div>

        <div class="pdf-page" id="3" v-if="currentPageId == 3">
            <YourDiscStyleSummary :discScores="discScores" :style="style" :childName="childName" />
        </div>

        <div class="pdf-page" id="4" v-if="currentPageId == 4">
            <ChildDiscProfile :discScores="discScores" :style="style" :childName="childName" />
        </div>

        <div class="pdf-page" id="5" v-if="currentPageId == 5">
            <DetailedAnalysis :style="style" :childName="childName" />
        </div>

        <div class="pdf-page" id="6" v-if="currentPageId == 6">
            <ChildStyle :style="style" :childName="childName" />
        </div>

        <div class="pdf-page" id="7" v-if="currentPageId == 7">
            <ParentGuidance :style="style" :childName="childName" />
        </div>

        <div class="pdf-page" id="8" v-if="currentPageId == 8">
            <TeacherGuidance :style="style" :childName="childName" />
        </div>

        <div class="pdf-page" id="9" v-if="currentPageId == 9">
            <Recommendation :style="style" :childName="childName" />
        </div>

        <div class="pdf-page" id="10" v-if="currentPageId == 10">
            <ParentalInsight :style="style" :childName="childName" />
        </div>

        <div class="pdf-page" id="11" v-if="currentPageId == 11">
            <TeachingInsight :style="style" :childName="childName" />
        </div>

        <div class="pdf-page" id="12" v-if="currentPageId == 12">
            <Conclusion :style="style" :childName="childName" />
        </div>

        <div class="pdf-page" id="13" v-if="currentPageId == 13">
            <Appendices :style="style" :childName="childName" />
        </div>
    </div>


    <LoadingSpinner :visible="downloading" :message="'Downloading Report..... '" />
</template>

<style>
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

h2,
.p-6>.row>.col-6>h2 {
    color: rgb(55 48 163);
    font-weight: bold !important;
}

ul>li {
    margin-top: 17px;
}

p,
ul>li {
    font-size: 1.125rem;
    line-height: 1.75rem;
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
</style>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";
import Button from "@/shadcn/ui/button/Button.vue";
import html2canvas from "html2canvas";
import jsPDF from "jspdf";
import NoteForChild from "./NoteForChild.vue";
import YourDiscStyleSummary from "./YourDiscStyleSummary.vue";
import ChildDiscProfile from "./ChildDiscProfile.vue";
import DetailedAnalysis from "./DetailedAnalysis.vue";
import ChildStyle from "./ChildStyle.vue";
import ParentGuidance from "./ParentGuidance.vue";
import TeacherGuidance from "./TeacherGuidance.vue";
import Recommendation from "./Recommendation.vue";
import ParentalInsight from "./ParentalInsight.vue";
import TeachingInsight from "./TeachingInsight.vue";
import Conclusion from "./Conclusion.vue";
import Appendices from "./Appendices.vue";
import LoadingSpinner from "@/Components/LoadingSpinner.vue";
import generatePdf from "@/Helpers/PdfGenerateService.js";


export default {
    name: "Introduction",
    layout: AssessmentTypes,
    components: {
        Button,
        LoadingSpinner,
        YourDiscStyleSummary,
        ChildDiscProfile,
        NoteForChild,
        DetailedAnalysis,
        ChildStyle,
        ParentGuidance,
        TeacherGuidance,
        Recommendation,
        ParentalInsight,
        TeachingInsight,
        Conclusion,
        Appendices,
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
            totalPage: 13,
            maxHeightPdf: 2000,
            generatePdfName: 'disc-report.pdf'
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
                await generatePdf(this.totalPage, this.maxHeightPdf, 'disc-report.pdf', (id) => this.currentPageId = id, this.$nextTick);
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
