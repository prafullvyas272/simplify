<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Fun Ways to Build Their Skills</h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="row p-6" >
            <div class="col-6">
                <p class="my-4" v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index">
                    <span v-html="topHeading"></span>
                </p>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/93.svg'" alt="" />
                </div>
            </div>
        </div>


        <div class="row p-6">
            <div class="col-12">
                <h4 class="px-2 mb-4 font-bold text-blue-800">
                    Below are some playful, everyday ways to strengthen their skills and support their development:
                </h4>
            </div>
        </div>



        <div class="row p-6" v-for="(playFulWay, index) in reportData[discStyle]?.playFulWays" :key="index">
            <div class="col-12">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/92.png'" alt="" />
                </div>
            </div>
            <div class="col-12">
                <p class="my-4 font-bold" >
                    <span v-html="playFulWay?.title"></span>
                </p>
                <p class="my-2" >
                    <span v-html="playFulWay?.description"></span>
                </p>
            </div>
        </div>

        <div class="row p-6">
            <div
                class="relative w-full h-[550px] flex justify-center items-center text-white board-image-2 font-bold px-5 pt-5">
                <div class="text-black py-2 rounded text-center">
                    <div class="px-20">
                        <p class="mb-4" v-for="(bottomHeading, index) in reportData[discStyle]?.bottomHeadings"
                        :key="index">
                        {{ bottomHeading }}
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
    name: 'FunWays',
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
                        `Children with an SI style enjoy playful, steady activities that involve people they trust. They thrive in calm, cooperative environments and prefer games where everyone gets along. These children are naturally kind and engaging, and they often enjoy games that build connection rather than competition.`,
                        `Fun, low-pressure activities can help build their independence, confidence, and willingness to speak up - while still feeling enjoyable and emotionally safe.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    playFulWays: [
                        {
                            title: 'Plan a calm group activity',
                            description: 'Let them organise a simple get-together or family activity. This helps build decision-making while encouraging inclusion and leadership.'
                        },
                        {
                            title: 'Role-play different scenarios',
                            description: 'Act out what to do if a friend is being unkind, or if they want something different from the group. This builds assertiveness and confidence in social settings.'
                        },
                        {
                            title: 'Set up a helper rotation',
                            description: 'Give them a turn being the "family helper" or "daily organiser." These roles encourage responsibility in a familiar, safe way.'
                        },
                        {
                            title: 'Tell a story together',
                            description: 'Take turns telling or writing a story. This builds creative expression while practising taking the lead in a shared task.'
                        },
                        {
                            title: 'Confidence jar',
                            description: 'Create a jar of kind things others say about them or proud moments from the week. It helps them reflect on their quiet strengths.'
                        },
                        {
                            title: 'Build a checklist together',
                            description: 'Use visuals for small routines or goals and let them tick them off. It helps make progress feel rewarding without stress.'
                        }
                    ],
                    bottomHeadings: [
                        `These activities support ` + this.childName + ` in using their natural warmth and care to grow into someone who is not only kind - but confident, dependable, and quietly capable.`
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