<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Managing Their Energy and Focus</h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" class="row p-6">
            <div class="col-6">
                <div :key="index" class="">
                    <p class="my-4">
                        <span v-html="topHeading"></span>
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain" :src=getTopHeadingImagePath(index) alt="" />
                </div>
            </div>

        </div>
        <div class="row p-6">
            <div class="col-12">
                <h4 class="mb-4 font-bold text-blue-800">
                    Some common patterns include:
                </h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/63.svg'"
                        alt="" />
                </div>
                <div class="col-6">
                    <ul v-for="commonPattern in reportData[discStyle]?.commonPatterns" class="col-12 list-disc">
                        <li class="font-bold ml-2 my-2">
                            {{ commonPattern }}
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row p-6">

                <div class="col-12 flex items-center">
                    <p class="px-2">
                        {{ reportData[discStyle]?.middleHeading }}
                    </p>
                </div>
            </div>
            <div class="row p-6">
                <h4 class="mb-4 font-bold text-blue-800">
                    Ways to support {{ childName }}:
                </h4>
                <div class="row">
                    <div class="col-6">
                        <ul v-for="supportPoint in reportData[discStyle]?.supportPoints" class="col-12 list-disc">
                            <li class="font-bold ml-2 my-2">
                                {{ supportPoint }}
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/64.svg'"
                            alt="" />
                    </div>
                </div>
            </div>

            <!-- Awareness points -->
            <div class="row p-6">
                <h4 class="mb-4 font-bold text-green-400">
                    You can also use short check-in questions to build awareness. Try asking:
                </h4>
                <div class="row p-6">
                    <div class="col-6 yellow-cloud"
                        v-for="(shortQuestion, index) in reportData[discStyle]?.shortQuestions" :key="index" :class="[
                            // If it's the last item AND odd number of items, apply offset
                            (index === reportData[discStyle]?.shortQuestions.length - 1 && reportData[discStyle]?.shortQuestions.length % 2 !== 0)
                                ? 'offset-3'
                                : ''
                        ]">
                        <div class="relative w-full h-[300px] flex items-center justify-center text-white"
                            :class="getCloudImageClassByIndex(index)">
                            <div class="text-black flex justify-center items-center px-20 py-2 rounded">
                                <p class="mb-4 font-bold text-center px-20">
                                    {{ shortQuestion }}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="relative w-full h-[500px] flex items-center justify-center text-white board-image">
            <div class="text-black rounded mx-20 text-center">
                <div v-for="bottomHeading in reportData[discStyle]?.bottomHeadings"
                    class="col-12 px-20 font-bold">
                    <p v-html="bottomHeading" class="px-20">
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
                    cloudImageClasses: [
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                    ],
                    bottomHeadings: [
                        `With the right support, ` + this.childName + ` can learn to manage their focus in a way that feels calm, steady, and fully their own - even when things around them shift.`,
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an SC style tend to be calm and focused when the environment is structured and familiar. They’re usually able to concentrate well on tasks that are clear, predictable, and quiet. They don’t often seek stimulation or excitement - instead, they prefer a steady pace and minimal distractions.`,
                        `If something feels overwhelming, emotionally tense, or unclear, they may become withdrawn, distracted, or overly focused on small details. They may also struggle to re-engage if their rhythm is disrupted or if they feel unsure about how to continue.`,
                    ],
                    topHeadingImages: ['61.svg', '62.svg'],
                    commonPatterns: [
                        `Focusing well on quiet, structured tasks`,
                        `Working best when given clear steps and enough time`,
                        `Losing focus when they feel uncertain or under pressure`,
                        `Needing reassurance or support to restart after distraction`,
                        `Becoming fixated on getting small details just right`,
                    ],
                    middleHeading: `These children don’t usually need to be pushed harder - they need to feel calm and confident in what they’re doing. Encouraging small breaks, gentle resets, and time to prepare can help maintain focus without adding pressure.`,
                    supportPoints: [
                        `Create consistent routines with minimal surprises`,
                        `Use visual aids or checklists to support task flow`,
                        `Give them time to plan or preview what’s coming next`,
                        `Allow short breaks when concentration dips`,
                        `Let them know that progress, not perfection, is the goal`,
                    ],
                    shortQuestionsImages: [
                        '68.svg', '66.svg', '67.svg',
                    ],
                    shortQuestions: [
                        "`What helped you stay focused today?`",
                        "`What part felt tricky to keep going with?`",
                        "`Would it help to take a break or try a different way?`",
                    ],
                    cloudImageClasses: [
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                    ],
                    bottomHeadings: [
                        `With the right environment and calm encouragement, `+ this.childName +` can learn to manage their focus steadily - without losing their natural care and attention to detail.`
                    ],
                },
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
        getCloudImageClassByIndex(index) {
            return this.reportData[this.discStyle]?.cloudImageClasses[index];
        },
    },
};
</script>


<style>
.board-image {
    background-image: url("/images/second-term/kids-disc-images/22.svg");
    background-size: 990px;
    background-position: center;
    background-repeat: no-repeat;
}

.cloud-image-1 {
    background-image: url("/images/second-term/kids-disc-images/68.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.cloud-image-2 {
    background-image: url("/images/second-term/kids-disc-images/66.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.cloud-image-3 {
    background-image: url("/images/second-term/kids-disc-images/67.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>
