<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Helpful Words to Use (Encouragement & Guidance)</h1>
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
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/96.svg'"
                        alt="" />
                </div>
            </div>
        </div>


        <div class="row p-6">
            <div class="col-12">
                <h4 class="px-2 mb-4 font-bold text-blue-800">
                    Here are some example phrases that tend to work well with SI-style children like {{ childName }}.
                </h4>
            </div>
        </div>

        <!-- Encouraging phrases -->
        <div class="row p-6">
            <div class="col-12">
                <h4 class="px-2 mb-4 font-bold text-blue-800">
                    Encouraging phrases:
                </h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-240 h-auto object-contain" :src="'/images/second-term/kids-disc-images/98.png'"
                            alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <p class="my-4 font-bold text-center"
                        v-for="(encouragingPhrase, index) in reportData[discStyle]?.encouragingPhrases" :key="index">
                        "<span v-html="encouragingPhrase"></span>"
                    </p>
                </div>
            </div>
            <div class="row">
                <p class="my-4">
                    <span v-html="reportData[discStyle]?.encouragingPhraseBottomHeading[0]"></span>
                </p>
            </div>
        </div>


        <!-- Guiding phrases -->
        <div class="row p-6">
            <div class="col-12">
                <h4 class="px-2 mb-4 font-bold text-blue-800">
                    Guiding phrases:
                </h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="my-4 font-bold text-center"
                        v-for="(guidingPhrase, index) in reportData[discStyle]?.guidingPhrases" :key="index">
                        "<span v-html="guidingPhrase"></span>"
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-240 h-auto object-contain" :src="'/images/second-term/kids-disc-images/98.png'"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <p class="my-4">
                    <span v-html="reportData[discStyle]?.guidingPhraseBottomHeading[0]"></span>
                </p>
            </div>
        </div>

        <div class="row p-6">
            <div class="flex justify-center items-center">
                <img class="w-240 h-auto object-contain" :src="'/images/second-term/kids-disc-images/98.svg'" alt="" />
            </div>
        </div>
    </div>
</template>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import "../../../../../css/reports.css";

export default {
    name: 'HelpfulWords',
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
                        `The words we use with children matter. For a child with an SI style, gentle, warm, and reassuring language works best. They respond well to encouragement that recognises their kindness, cooperation, and steady effort. They also benefit from being reminded that it’s okay to speak up, take the lead, or try something new - even when it feels unfamiliar.`,
                        `They may be more concerned with getting things “right” or keeping others happy, so a calm, confidence-building tone goes a long way.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    encouragingPhrases: [
                        `You made a real difference by helping today.`,
                        `I saw how thoughtful you were - thank you for being so kind.`,
                        `You stayed calm and focused - that really helped.`,
                        `I liked how you included everyone - that’s an important strength.`,
                        `You’ve got a quiet confidence that others really look up to.`,
                    ],
                    encouragingPhraseBottomHeading: [
                        `These phrases are most effective when linked to specific actions. Over time, they help reinforce self-belief and steady confidence.`
                    ],
                    guidingPhrases: [
                        `It’s okay to say how you really feel.`,
                        `You can take the lead - we trust your judgement.`,
                        `You don’t have to agree just to keep the peace.`,
                        `Trying something new doesn’t mean you’ll lose what feels familiar.`,
                        `You’re allowed to say no - kindly and clearly.`,

                    ],
                    guidingPhraseBottomHeading: [
                        `With kind, steady guidance, ` + this.childName + ` can grow into someone who leads with care, speaks with confidence, and supports others without losing sight of themselves.`
                    ],
                }
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
    background-image: url("/images/second-term/kids-disc-images/86.svg");
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