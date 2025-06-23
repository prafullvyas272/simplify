<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Building Independence and Responsibility</h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="row p-6">
            <div class="col-6">
                <div v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index" class="">
                    <div class="flex justify-center items-center">
                        <img class="" :src="'/images/second-term/kids-disc-images/47.png'" alt="" />
                    </div>
                    <p class="my-4">
                        <span v-html="topHeading"></span>
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain" :src="'/images/second-term/kids-disc-images/53.png'"
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
                                <img class="w-120" :src="getSupportImagePath(index)" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="relative w-full h-[400px] flex items-center justify-center text-white board-image">
            <div class="text-black px-4 py-2 rounded">
                <div v-for="bottomHeading in reportData[discStyle]?.bottomHeadings" class="col-12 flex px-20 font-bold justify-center items-center">
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
                        `Children with an <b> SI style </b> are often dependable and caring, especially when they feel supported and appreciated. They enjoy helping others and usually do well in routines that feel calm and familiar. They may not push for independence right away, but they often take quiet responsibility when they feel ready.`,
                        `At times, they may avoid taking initiative if they're unsure or worried about making the wrong choice. They may prefer to follow others rather than lead, and they often seek reassurance before trying something on their own.`
                    ],
                    topHeadingImages: ['53.svg'],
                    noticePoints: [
                        `Helping out when asked, especially if it feels familiar`,
                        `Wanting praise or reassurance before acting independently`,
                        `Preferring to follow routines instead of trying new ways`,
                        `Holding back if something feels uncertain or risky`,
                        `Being quietly responsible but not always confident`
                    ],
                    middleHeading: `This gentle nature is something to celebrate. Still, it's important to give them safe opportunities to take initiative and make choices for themselves - even when things aren't perfect.`,
                    supportPoints: [
                        `Start with small, clear tasks. Give simple roles they can do independently, like feeding a pet or setting the table.`,
                        `Celebrate follow-through. Highlight when they complete something without being reminded.`,
                        `Reflect calmly together. Ask, "How did that feel?" or "Would you do anything differently next time?"`,
                        `Use gentle encouragement. Praise quiet effort, not just results or speed.`
                    ],
                    supportPointImages: [
                        '56.svg', '57.svg', '59.svg', '58.svg',
                    ],
                    bottomHeadings: [
                        `With time and steady support, `+ this.childName +` can grow into someone who acts with quiet confidence - taking responsibility not for attention, but because they feel secure and capable.`
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an <b>SC style</b> are often dependable and conscientious. They want to do things properly and may take pride in getting tasks right, following instructions, and helping in quiet, steady ways. They are more likely to wait for guidance than to jump in - especially if they feel uncertain or worried about making a mistake.`,
                        `They may not ask for independence, but they often respond well to it when it’s introduced gently and with clear expectations. They can become overly reliant on reassurance, particularly if they’re afraid of getting something wrong.`
                    ],
                    topHeadingImages: ['53.svg'],
                    noticePoints: [
                        `Wanting clear direction before starting a task`,
                        `Completing familiar tasks well, but hesitating with new ones`,
                        `Checking in frequently to see if they’ve done it “right”`,
                        `Avoiding taking initiative if the outcome isn’t clear`,
                        `Being responsible in small, routine ways but needing support to take ownership`,
                    ],
                    middleHeading: `This careful, steady nature is a real strength. To build independence, they benefit from consistent routines, gentle encouragement, and space to try things without fear of being wrong.`,
                    supportPoints: [
                        `Give clear, structured tasks. Start with simple responsibilities they can manage independently.`,
                        `Reassure without over-correcting. Let them know their effort is trusted, even if the result isn’t perfect.`,
                        `Praise follow-through and attention to detail. Recognise what they naturally do well.`,
                        `Encourage decision-making. Ask, “What do you think is the best next step?”`
                    ],
                    supportPointImages: [
                        '56.svg', '57.svg', '59.svg', '58.svg',
                    ],
                    bottomHeadings: [
                        `With time and support, `+ this.childName +` can grow into someone who is quietly dependable - taking responsibility with care, and learning to trust their own ability without constant reassurance.`
                    ],
                },
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


<style>
.board-image {
    background-image: url("/images/second-term/kids-disc-images/60.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>