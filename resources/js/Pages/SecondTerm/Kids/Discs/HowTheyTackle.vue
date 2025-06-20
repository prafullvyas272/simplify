<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">How They Tackle Problems</h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="row p-6">
            <div v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index">
                <div v-if="index % 2 == 0" class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img class="w-120 h-auto object-contain"
                                :src=getTopHeadingImagePath(index) alt="" />
                        </div>
                    </div>
                    <div class="col-6">
                        <p class="my-4">
                            <span v-html="topHeading"></span>
                        </p>
                    </div>
                </div>
                <div v-else class="row">
                    <div class="col-6">
                        <p class="my-4">
                            <span v-html="topHeading"></span>
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img class="w-120 h-auto object-contain"
                            :src=getTopHeadingImagePath(index) alt="" />
                        </div>
                    </div>
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
                <div v-for="noticePoint in reportData[discStyle]?.noticePoints" class="col-12">
                    <div class="flex justify-center items-center">
                        <img class="" :src="'/images/second-term/kids-disc-images/47.png'" alt="" />
                    </div>
                    <p class="font-bold ml-2 my-2">
                        {{ noticePoint }}
                    </p>
                </div>
            </div>
            <div class="row p-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="ball" :src="'/images/second-term/kids-disc-images/47.svg'" alt="" />
                    </div>
                </div>
                <div class="col-6 flex items-center">
                    <p class="">
                        {{ reportData[discStyle]?.middleHeading }}
                    </p>
                </div>
            </div>
            <div class="row p-6">
                <h4 class="mb-4 font-bold text-green-400">
                    How to support this:
                </h4>
                <div v-for="(supportPoint, index) in reportData[discStyle]?.supportPoints" :key="index" class="row">
                    <div v-if="index % 2 == 0" class="row p-6">
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img class="w-96" :src="getSupportImagePath(index)" alt="" />
                            </div>
                        </div>
                        <div class="col-6 flex items-center">
                            <p class="font-bold">
                                {{ supportPoint }}
                            </p>
                        </div>
                    </div>
                    <div v-else class="row p-6">
                        <div class="col-6 flex items-center">
                            <p class="font-bold">
                                {{ supportPoint }}
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="flex justify-center items-center">
                                <img class="w-96" :src="getSupportImagePath(index)" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row p-6">
            <div v-for="bottomHeading in reportData[discStyle]?.bottomHeadings" class="col-12 flex items-center">
                <p v-html="bottomHeading">
                </p>
            </div>
        </div>
        <div class="row p-6">
            <div class="flex justify-center items-center">
                <img class="w-120" :src="'/images/second-term/kids-disc-images/52.svg'" alt="" />
            </div>
        </div>
    </div>
</template>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import "../../../../../css/reports.css";

export default {
    name: 'HowTheyTackle',
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
                        `Children with an <b> SI style </b> tend to approach problems thoughtfully and with concern for others. They often prefer to talk things through gently, find a calm solution, or ask someone they trust for help. They're more focused on keeping harmony than being right, and they may avoid tackling a problem head-on if it feels emotionally uncomfortable.`,
                        `They might worry about upsetting someone or making a mistake, which can lead to hesitation or deferring the decision to others. Their instinct is usually to keep things kind and balanced, even if it means putting their own preferences aside.`,
                    ],
                    topHeadingImages: ['43.svg', '44.svg'],
                    noticePoints: [
                        `Talking through a challenge quietly or with someone they trust`,
                        `Avoiding problems that feel confrontational or unfamiliar`,
                        `Focusing on keeping everyone happy instead of solving quickly`,
                        `Asking for support or reassurance before trying something`,
                        `Struggling to take the lead if the group is loud or divided`
                    ],
                    middleHeading: 'Because they want things to go smoothly, they may need help learning that small disagreements or mistakes are part of problem-solving. Encouraging confidence and offering simple tools can help them feel more prepared and secure.',
                    supportPoints: [
                        `Ask, "What do you think might work here?" and give time to respond`,
                        `Offer clear, step-by-step ways to approach the issue`,
                        `Reassure them that trying is more important than getting it right first time`,
                        `Help them reflect after the problem is solved: "What would you try next time?"`,
                        `Praise their efforts when they take initiative, even in small ways`
                    ],
                    supportPointImages: [
                        '48.svg', '49.svg', '50.svg', '51.svg', '48.svg', '49.svg', '50.svg', '51.svg',
                    ],
                    bottomHeadings: [
                        `They don’t need to become forceful - their calm and caring approach is a strength. But with gentle support, they can learn to face challenges with more confidence and clarity.`,
                        `<b> With guidance, ` + this.childName + ` can grow into someone who solves problems with empathy, patience, and growing independence. </b>`,
                    ],
                }
            }
        };

    },
    methods: {
        getSupportImagePath(index) {
            return '/images/second-term/kids-disc-images/' + this.reportData[this.discStyle]?.supportPointImages[index];
        },
        getTopHeadingImagePath(index) {
            return '/images/second-term/kids-disc-images/' + this.reportData[this.discStyle]?.topHeadingImages[index];
        },
    },
};
</script>
