<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">How They Think and Make Decisions</h1>
        </div>
    </div>

    <div>
        <div class="p-6 pt-0">
            <div class="row p-6">
                <div class="col-6">
                    <p class="my-4" v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index">
                        <span v-html="topHeading"></span>
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/16.svg'"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="row p-6">
                <div class="col-6">
                    <h4 class="mb-4 font-bold text-blue-800">
                        You might notice:
                    </h4>
                    <ul class="list-disc space-y-3">
                        <li v-for="(noticePoint, index) in reportData[discStyle]?.noticePoints?.slice(0, 3)">
                            {{ noticePoint }}
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain" :src="'/images/second-term/kids-disc-images/17.svg'"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="row p-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-32 h-auto object-contain" :src="'/images/second-term/kids-disc-images/girl.png'"
                            alt="" />
                    </div>
                </div>
                <div class="col-6 flex items-center">
                    <ul class="list-disc space-y-3">
                        <li v-for="(noticePoint, index) in reportData[discStyle]?.noticePoints?.slice(3, reportData[discStyle]?.noticePoints?.length)">
                            {{ noticePoint }}
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <p class="mb-4">
                        {{ reportData[discStyle]?.noticePointBottomHeading[0] }}
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain" :src="'/images/second-term/kids-disc-images/18.svg'"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="row p-6">
                <div class="col-6">
                    <h4 class="mb-4 font-bold text-blue-800">
                        How to support their decision-making:
                    </h4>
                    <ul class="list-disc space-y-3">
                        <li v-for="(supportPoint, index) in reportData[discStyle]?.supportPoints?.slice(0, 2)">
                            {{ supportPoint }}
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain" :src="'/images/second-term/kids-disc-images/19.svg'"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="row p-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain" :src="'/images/second-term/kids-disc-images/20.svg'"
                            alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="list-disc space-y-3">
                        <li v-for="(supportPoint, index) in reportData[discStyle]?.supportPoints?.slice(2, reportData[discStyle]?.supportPoints?.length)">
                            {{ supportPoint }}
                        </li>
                    </ul>
                </div>

            </div>
            <div class="relative w-full h-[500px] flex items-center justify-center text-white board-image">
                <div class="max-w-xl text-center text-black   rounded">
                    <p class=" font-bold text-black text-inside-box">
                        {{ reportData[discStyle]?.supportPointBottomHeading[0] }}
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
    name: 'HowTheyThink',
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
                        `Children with an <b>SI style</b> tend to make decisions based on how it will affect others. They often
                        think through what feels fair, kind, or safe, and may choose the option that helps avoid
                        conflict or keeps everyone happy. They are more likely to follow the group or take suggestions
                        from people they trust, rather than make bold, independent choices right away.`,
                        `They often want reassurance that they’re making the right decision and may hesitate if the
                        outcome feels uncertain. While they may share ideas in relaxed settings, they might hold back in
                        unfamiliar or high-pressure situations.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Taking their time before deciding, especially in a group`,
                        `Looking to friends or adults for confirmation`,
                        `Choosing options that feel kind or familiar`,
                        `Avoiding decisions that might lead to disagreement`,
                        `Feeling unsure when asked to decide on the spot`,
                    ],
                    noticePointBottomHeading: [
                        `These children benefit from gentle encouragement to trust their own judgement. They don’t need to become loud decision-makers - just confident that their ideas and instincts are valid.`
                    ],
                    supportPoints: [
                        `Ask, “What feels right to you?” before offering guidance`,
                        `Let them practice making small choices on their own`,
                        `Reassure them that it’s okay to try and change their mind later`,
                        `Remind them that good decisions don’t always make everyone happy`,
                    ],
                    supportPointBottomHeading: [
                        `With the right support, ` + this.childName + ` can grow into a thoughtful and confident decision-maker - someone who balances care for others with belief in their own voice.`
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an SC style tend to think things through carefully before making decisions. They like to weigh up the options, understand the details, and make sure they’re doing the right thing. They are unlikely to act quickly or take risks unless they feel confident in the outcome.`,
                        `They prefer routines and clear expectations, so unexpected decisions or open-ended tasks can make them feel uneasy. If they’re unsure, they may wait, ask for help, or look for more information rather than decide straight away.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Taking longer to respond when asked to choose`,
                        `Asking for more information or clarification`,
                        `Avoiding choices that feel uncertain or unfamiliar`,
                        `Wanting to stick with familiar routines or safe options`,
                        `Being very focused on making the “right” decision`,
                    ],
                    noticePointBottomHeading: [
                        `These children benefit from support that builds trust in their own thinking. They don’t need to be pushed to act fast - but learning that it’s okay to try, even without being sure, helps them build confidence.`
                    ],
                    supportPoints: [
                        `Give extra time to think things through`,
                        `Ask, “What’s one small step you could take now?”`,
                        `Reassure them that mistakes are part of learning`,
                        `Talk through options out loud, helping them sort their thoughts`,
                    ],
                    supportPointBottomHeading: [
                        `With support, `+ this.childName + ` can grow into someone who makes considered, confident decisions - balancing care and clarity with growing self-assurance.`
                    ],
                },
                S: {
                    topHeadings: [
                        `Children with a Supportive style tend to think carefully and quietly before making decisions. They usually prefer to observe what’s happening around them and take their time before speaking or acting. These children are more likely to go with what feels safe, familiar, or kind - rather than rushing into something new or bold.`,
                        `They may avoid making quick choices if they feel unsure or if there’s a chance someone might get upset. Instead, they prefer gentle encouragement and time to think things through without pressure.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Taking longer to decide, especially in new situations`,
                        `Wanting to know what others think before sharing their view`,
                        `Choosing options that feel calm, fair, or familiar`,
                        `Avoiding decisions that could lead to conflict or upset`,
                        `Sometimes saying yes just to keep others happy`,
                    ],
                    noticePointBottomHeading: [
                        `This careful approach helps them feel more secure, but they may need help learning how to speak up for themselves or take the lead when needed. Giving them time, space, and reassurance helps them feel more confident in their choices.`
                    ],
                    supportPoints: [
                        `Ask questions like “What do you think would work best?” or “What feels right to you?”`,
                        `Give them time to think before answering`,
                        `Reassure them that it’s okay to say no or disagree politely`,
                        `Let them practice making small, low-pressure choices each day`
                    ],
                    supportPointBottomHeading: [
                        `With support, [Child’s Name] can learn to trust their own voice and make decisions with quiet confidence. Their natural care and thoughtfulness can grow into a real strength as they learn to balance kindness with assertiveness.`
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
    background-image: url("/images/second-term/kids-disc-images/22.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.board-image-2 {
    background-image: url("/images/second-term/kids-disc-images/95.svg");
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
