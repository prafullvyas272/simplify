<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Managing Their Energy and Focus</h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" class="row p-6">
            <div class="col-6">
                <div  :key="index" class="">
                    <p class="my-4">
                        <span v-html="topHeading"></span>
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div  class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain" :src=getTopHeadingImagePath(index)
                        alt="" />
                </div>
            </div>

        </div>
        <div class="row p-6">
            <div class="col-12">
                <h4 class="mb-4 font-bold text-blue-800">
                    You might notice:
                </h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/55.svg'"
                        alt="" />
                </div>
                <div class="col-6">
                    <div v-for="noticePoint in reportData[discStyle]?.noticePoints" class="col-12">
                        <p class="font-bold ml-2 my-2">
                            {{ noticePoint }}
                        </p>
                    </div>
                </div>

            </div>
            <div class="row p-6">
                <div class="col-12">
                    <div class="flex justify-center items-center">
                        <img class="ball" :src="'/images/second-term/kids-disc-images/47.png'" alt="" />
                    </div>
                </div>
                <div class="col-12 flex items-center">
                    <p class="px-2">
                        {{ reportData[discStyle]?.middleHeading }}
                    </p>
                </div>
            </div>
            <div class="row p-6">
                <h4 class="mb-4 font-bold text-green-400">
                    How you can support {{ childName }} in growing responsibility:
                </h4>
                <div v-for="(supportPoint, index) in reportData[discStyle]?.supportPoints" :key="index" class="row">
                    <div class="row p-6">
                        <div class="col-9 offset-2 flex items-center">
                            <p class="font-bold">
                                {{ supportPoint }}
                            </p>
                        </div>
                        <div class="col-12">
                            <div class="flex justify-center items-center">
                                <img class="w-120" :src="getshortQuestionsImagePath(index)" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="relative w-full h-[400px] flex items-center justify-center text-white board-image">
            <div class="text-black px-4 py-2 rounded">
                <div v-for="bottomHeading in reportData[discStyle]?.bottomHeadings"
                    class="col-12 flex px-20 font-bold justify-center items-center">
                    <p v-html="bottomHeading">
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import "../../../../../css/reports.css";

export default {
    name: 'EnergyAndFocus',
    layout: SecondTermAssessmentTypes,
    props: {
        childName: String,
        discStyle: String,
    },
    data() {
        return {
            reportData: {
                SI: {
                    topHeadings: [
                        `Children with an SI style often bring calm energy and quiet consistency to their tasks, especially in settings where they feel emotionally safe.They're more likely to focus well when the environment is gentle, the people around them are kind, and the task feels familiar or connected to others.They may not be the fastest or most intense, but they're often steady and cooperative.`,
                        `However, if the environment feels tense or overly busy, they might withdraw or become distracted.They may also lose focus if they're unsure of the next step or if the task feels too disconnected from the people around them.`
                    ],
                    topHeadingImages: ['61.svg', '62.svg'],
                    commonPatterns: [
                        `Focusing well in warm, calm, and friendly settings`,
                        `Getting distracted by changes in mood or tone around them`,
                        `Needing reassurance to start or stay with unfamiliar tasks`,
                        `Losing energy when tasks feel disconnected or rushed`,
                        `Enjoying slow, steady work more than high-pressure activity`
                    ],
                    middleHeading: `These children don't usually need high energy to stay engaged - they do best when things feel emotionally balanced. Support that combines structure with warmth can help them stay focused and feel secure.`,
                    supportPoints: [
                        `Use gentle reminders or prompts rather than strong correction`,
                        `Create consistent routines and clear steps for tasks`,
                        `Give encouragement during and after the task`,
                        `Allow time to warm up to a new or unfamiliar activity`,
                        `Include social elements when possible - even light conversation helps`,
                    ],
                    shortQuestionsImages: [
                        '68.svg', '66.svg', '67.svg',
                    ],
                    shortQuestions: [
                        `"What helped you stick with that today?"`,
                        `"Did anything make it harder to concentrate?"`,
                        `"What would help you stay focused next time?"`,
                    ],
                    bottomHeadings: [
                        `With the right support, {{ chlidName }} can learn to manage their focus in a way that feels calm, steady, and fully their own - even when things around them shift.`,
                    ],
                }
            }
        }
    },
    methods: {
        getshortQuestionsImagePath(index) {
            return '/images/second-term/kids-disc-images/' + this.reportData[this.discStyle]?.shortQuestionsImages[index];
        },
        getTopHeadingImagePath(index) {
            return '/images/second-term/kids-disc-images/' + this.reportData[this.discStyle]?.topHeadingImages[index];
        },
    },
};
</script>


<style>
.board-image {
    background-image: url("/images/second-term/kids-disc-images/60.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>
