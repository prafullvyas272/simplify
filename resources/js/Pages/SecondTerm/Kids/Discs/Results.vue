<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">{{ childName }}’s Results at a Glance</h1>
        </div>
    </div>
    <!-- SI: Supportive-Influential -->
    <div v-if="discStyle === 'SI'" id="SI" class="SI">
        <div class="p-6 pt-0">
            <div class="row p-6">
                <div class="col-12">
                    <p class="mb-4">
                        Based on the answers given, here’s how [Child’s Name] scored across the four DISC personality
                        styles:
                    </p>
                    <Chart type="bar" :data="chart_data" :options="chart_options" />
                </div>
            </div>
            <div class="row p-6">
                <div class="col-12">
                    <p class="mb-4">
                        The scores show a combination of two styles - <b>Supportive (S) and Influential (I)</b> - which
                        together make up an SI
                        style. This means [Child’s Name] is likely to be warm, sociable, and thoughtful.
                    </p>
                </div>
            </div>

            <div class="row p-6">
                <div class="col-6">
                    <p class="mb-4">
                        The scores show a combination of two styles - <b>Supportive (S) and Influential (I)</b> - which
                        together make up an SI
                        style. This means [Child’s Name] is likely to be warm, sociable, and thoughtful.
                    </p>
                    <p class="mb-4">
                        Children with
                        this blend tend
                        to enjoy being around others, prefer harmony, and like to feel part of the group while also
                        having fun and
                        sharing their ideas.
                    </p>
                    <p class="mb-4">
                        This result is a helpful guide to how [Child’s Name] naturally behaves, learns, and responds to
                        different
                        situations. The next sections will explore what this means in everyday life, and how to best
                        support [Child’s
                        Name] at home and at school.
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/11.svg'"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SC: Supportive-Conscientious -->
    <div v-if="discStyle === 'SC'" id="SC" class="SC"></div>

    <!-- S: Supportive -->
    <div v-if="discStyle === 'S'" id="S" class="S"></div>

    <!-- IS: Influential-Supportive -->
    <div v-if="discStyle === 'IS'" id="IS" class="IS"></div>

    <!-- ID: Influential-Dominant -->
    <div v-if="discStyle === 'ID'" id="ID" class="ID"></div>

    <!-- I: Influential -->
    <div v-if="discStyle === 'I'" id="I" class="I"></div>

    <!-- DI: Dominant-Influential -->
    <div v-if="discStyle === 'DI'" id="DI" class="DI"></div>

    <!-- DC: Dominant-Conscientious -->
    <div v-if="discStyle === 'DC'" id="DC" class="DC"></div>

    <!-- D: Dominant -->
    <div v-if="discStyle === 'D'" id="D" class="D"></div>

    <!-- CS: Conscientious-Supportive -->
    <div v-if="discStyle === 'CS'" id="CS" class="CS"></div>

    <!-- CD: Conscientious-Dominant -->
    <div v-if="discStyle === 'CD'" id="CD" class="CD"></div>

    <!-- C: Conscientious -->
    <div v-if="discStyle === 'C'" id="C" class="C"></div>
</template>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import "../../../../../css/reports.css";
import Chart from "primevue/chart";


export default {
    name: 'Results',
    layout: SecondTermAssessmentTypes,
    components: { Chart },
    props: {
        childName: String,
        discStyle: String,
        discScores: Object,
    },
    data() {
        return {
            parsedDiscScores: this.discScores
                ? this.discScores
                : { C: 0, D: 0, I: 0, S: 0 },
            chart_options: {
                scales: {
                    y: {
                        ticks: {
                            stepSize: 2,
                        },
                        suggestedMax: 20,
                    },
                },
            },
            chart_data: {
                labels: ["D", "I", "S", "C"],
                datasets: [
                    {
                        label: "DISC Score",
                        data: [],
                        backgroundColor: [
                            "rgba(249, 115, 22, 0.2)",
                            "rgba(6, 182, 212, 0.2)",
                            "rgb(107, 114, 128, 0.2)",
                            "rgba(139, 92, 246, 0.2)",
                        ],
                        borderColor: [
                            "rgb(249, 115, 22)",
                            "rgb(6, 182, 212)",
                            "rgb(107, 114, 128)",
                            "rgb(139, 92, 246)",
                        ],
                        borderWidth: 1,
                    },
                ],
            },
            x: 0,
            y: 0,
        };
    },
    watch: {
        discScores: {
            immediate: true,
            handler(newValue) {
                this.parsedDiscScores = JSON.parse(
                    newValue ? newValue : { C: 0, D: 0, I: 0, S: 0 }
                );
                console.log("----", this.parsedDiscScores);
            },
        },
    },
    mounted() {
        const data = JSON.parse(this.discScores);
        this.chart_data.datasets[0].data = [data.D, data.I, data.S, data.C];
        switch (this.style) {
            case "C":
                this.x = 60;
                this.y = 220;
                break;
            case "CD":
                this.x = 60;
                this.y = 170;
                break;
            case "DC":
                this.x = 60;
                this.y = 120;
                break;
            case "D":
                this.x = 60;
                this.y = 65;
                break;

            case "S":
                this.x = 230;
                this.y = 220;
                break;
            case "SI":
                this.x = 230;
                this.y = 170;
                break;
            case "IS":
                this.x = 230;
                this.y = 120;
                break;
            case "I":
                this.x = 230;
                this.y = 65;
                break;

            case "CS":
                this.x = 120;
                this.y = 220;
                break;
            case "SC":
                this.x = 165;
                this.y = 220;
                break;

            case "DI":
                this.x = 120;
                this.y = 50;
                break;
            case "ID":
                this.x = 170;
                this.y = 50;
                break;
        }
    },
};
</script>
