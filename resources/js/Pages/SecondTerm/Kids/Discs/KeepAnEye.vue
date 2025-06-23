<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">What to Keep an Eye On as They Grow</h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="row p-6">
            <div class="col-6">
                <p class="my-4" v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index">
                    <span v-html="topHeading"></span>
                </p>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/99.svg'"
                        alt="" />
                </div>
            </div>
        </div>

        <div class="row p-6">
            <div class="col-12">
                <h4 class="px-2 mb-4 font-bold text-blue-800">
                    Here are a few things to keep an eye on over time:
                </h4>
            </div>
        </div>

        <div class="row p-6">
            <div v-for="(keepAnEyeTip, index) in reportData[discStyle]?.keepAnEyeTips" :key="index">
                <div v-if="index % 2 == 0" class="row">
                    <div class="col-6">
                        <h4 class="my-4 font-bold text-green-500">
                            {{ keepAnEyeTip?.title }}
                        </h4>
                        <p class="my-4">
                            {{ keepAnEyeTip?.description }}
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img class="w-96 h-auto object-contain"
                                :src="'/images/second-term/kids-disc-images/' + keepAnEyeTip?.img" alt="" />
                        </div>
                    </div>
                </div>
                <div v-else class="row">
                    <div class="col-6">
                        <div class="flex justify-center items-center">
                            <img class="w-96 h-auto object-contain"
                                :src="'/images/second-term/kids-disc-images/' + keepAnEyeTip?.img" alt="" />
                        </div>
                    </div>
                    <div class="col-6">
                        <h4 class="my-4 font-bold text-green-500">
                            {{ keepAnEyeTip?.title }}
                        </h4>
                        <p class="my-4">
                            {{ keepAnEyeTip?.description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-6">
            <div
                class="relative w-full h-[550px] flex justify-center items-center text-white board-image-2 font-bold px-5 pt-5">
                <div class="text-black py-2 rounded text-center">
                    <div class="px-20">
                        <p class="mb-4">
                            {{ reportData[discStyle]?.bottomHeading[0] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import "../../../../../css/reports.css";

export default {
    name: 'KeepAnEye',
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
                        `Children with an SI style are naturally kind, thoughtful, and cooperative. They often bring steadiness and warmth to the people around them, helping to create calm, friendly environments both at home and at school. These are strengths that set them apart.`,
                        `As ` + this.childName + ` grows, it’s important to continue supporting their emotional security while gently encouraging more confidence, independence, and assertiveness. They don’t need to change who they are - just learn that their voice, opinions, and ideas are just as important as their kindness.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    keepAnEyeTips: [
                        {
                            title: 'Putting others first too often',
                            description: 'They may go along with what others want even when it’s not what they feel. Encourage them to check in with their own needs too.',
                            img: '100.svg',
                        },
                        {
                            title: 'Avoiding conflict completely',
                            description: 'They may stay silent to keep the peace. Help them practice respectful disagreement and show that standing up for themselves is still kind.',
                            img: '101.svg',
                        },
                        {
                            title: 'Hesitating in new situations',
                            description: 'They might resist change or new roles. Support them with gentle encouragement to try things outside their comfort zone.',
                            img: '102.svg',
                        },
                        {
                            title: 'Needing frequent reassurance',
                            description: 'They may seek validation to feel confident. Help them recognise their own effort and value without relying on constant feedback.',
                            img: '103.svg',
                        },
                    ],
                    bottomHeading: [
                        `With support, `+ this.childName +` can grow into someone who stays grounded in kindness and empathy - while building confidence, independence, and the ability to speak up and take action when it matters.`,
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an SC style are steady, thoughtful, and dependable. They bring calm to those around them and often work carefully behind the scenes to make sure things run smoothly. These quiet strengths can sometimes be overlooked - but they matter greatly.`,
                        `As `+ this.childName + ` grows, it’s helpful to nurture their reliability while gently encouraging more confidence, independence, and flexibility. They don’t need to change who they are - just develop the courage to try, speak up, and feel secure even when things aren’t perfect.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    keepAnEyeTips: [
                        {
                            title: 'Avoiding new or uncertain tasks',
                            description: 'They may stick only to what’s familiar. Encourage gentle exploration of new experiences without pressure.',
                            img: '101.svg',
                        },
                        {
                            title: 'Needing everything to be “just right”',
                            description: 'They may become overly focused on perfection. Remind them that small mistakes are part of learning.',
                            img: '102.svg',
                        },
                        {
                            title: 'Staying silent instead of speaking up',
                            description: 'They may not say when something is wrong or unfair. Support them in practising calm, respectful self-expression.',
                            img: '103.svg',
                        },
                        {
                            title: 'Seeking reassurance too often',
                            description: 'They may rely on praise to feel secure. Help them notice and celebrate their own progress internally.',
                            img: '101.svg',
                        },
                    ],
                    bottomHeading: [
                        `With support, `+ this.childName + ` can grow into someone who’s not only kind and careful - but also quietly confident, resilient, and ready to take on new challenges in their own calm and thoughtful way.`
                    ],
                },
                S: {
                    topHeadings: [
                        `Children with a Supportive style often stand out for their kindness, patience, and gentle nature. These qualities help them build strong relationships and bring calm to group settings. They often put others first and quietly support the people around them.`,
                        `As `+this.childName+` grows, it’s helpful to guide some of these natural strengths so they continue to develop in a balanced and confident way. The aim isn’t to change who they are, but to make sure they feel empowered to speak up and take up space when they need to.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    keepAnEyeTips: [
                        {
                            title: 'Following along too easily',
                            description: 'They may say yes to things just to keep others happy, even if they feel unsure or disagree. Helping ' + this.childName + ' practice speaking up and sharing their opinion builds their confidence to use their voice.',
                            img: '102.svg',
                        },
                        {
                            title: 'Avoiding conflict',
                            description: 'They may stay quiet during disagreements or go along with something they don’t like. Support them in learning that respectful disagreement is okay, and that they can set boundaries in a kind way.',
                            img: '103.svg',
                        },
                        {
                            title: 'Holding back in new situations',
                            description: 'They may hesitate to try something new or take the lead. With gentle encouragement and reassurance, they can learn to take small steps outside their comfort zone.',
                            img: '104.svg',
                        },
                        {
                            title: 'Keeping emotions inside',
                            description: 'They may not always show when they’re upset, frustrated, or unsure. Make time to check in and help them name their feelings so they don’t bottle them up.',
                            img: '101.svg',
                        },
                    ],
                    bottomHeading: [
                        `Over time, with support and encouragement, `+this.childName+` can grow into someone who stays true to their steady and kind nature - but also knows how to speak up, take initiative, and feel proud of who they are.`
                    ],
                },
            }
        };

    },
    methods: {
        getHelpingIdeasImagePath(index) {
            return '/images/second-term/kids-disc-images/' + this.reportData[this.discStyle]?.helpFullIdeas[index].img;
        },
        getTopHeadingImagePath(index) {
            return '/images/second-term/kids-disc-images/' + this.reportData[this.discStyle]?.topHeadingImages[index];
        },
    },
};
</script>


<style>
.box-img {
    height: 400px;
    /* or whatever works for you */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 8px;
}

.board-image {
    background-image: url("/images/second-term/kids-disc-images/104.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.board-image-2 {
    background-image: url("/images/second-term/kids-disc-images/104.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.box-img-1 {
    background-image: url("/images/second-term/kids-disc-images/150.png");
}

.box-img-2 {
    background-image: url("/images/second-term/kids-disc-images/151.png");
}

.box-img-3 {
    background-image: url("/images/second-term/kids-disc-images/152.png");
}

.box-img-4 {
    background-image: url("/images/second-term/kids-disc-images/153.png");
}

.box-img-5 {
    background-image: url("/images/second-term/kids-disc-images/154.png");
}
</style>