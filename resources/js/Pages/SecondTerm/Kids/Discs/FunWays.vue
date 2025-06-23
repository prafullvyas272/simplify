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
                },
                SC: {
                    topHeadings: [
                        `Children with an SC style are most comfortable in calm, familiar environments. They prefer activities that are predictable and quietly rewarding. While they may not seek the spotlight, they often enjoy thoughtful, well-organised tasks - especially ones they can do at their own pace.`,
                        `The right activities can help stretch their confidence, independence, and communication without adding stress. Keeping the tone light and pressure-free allows them to try new things while still feeling secure.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    playFulWays: [
                        {
                            title: 'Build a quiet project together',
                            description: 'Puzzles, sorting games, or simple crafts help them focus while building patience and problem-solving skills.'
                        },
                        {
                            title: 'Role-play calm choices',
                            description: 'Act out situations like asking for help or saying no kindly. It builds emotional confidence and gentle assertiveness.'
                        },
                        {
                            title: 'Create a home routine chart',
                            description: 'Let them take the lead in building a checklist for morning or evening routines - this builds ownership and structure.'
                        },
                        {
                            title: 'Design a “safe space” corner',
                            description: 'Let them choose items for a calm, cosy area where they can read, draw, or take a quiet break.'
                        },
                        {
                            title: 'Do a how-to activity',
                            description: 'Let them explain how to bake, organise, or complete a familiar task. Teaching others helps build quiet confidence and communication.'
                        },
                        {
                            title: 'Track steady progress',
                            description: 'Use a simple weekly chart to track effort in a chosen area (e.g. tidying their room or remembering their bag). Keep it visual, low-pressure, and consistent.'
                        },
                    ],
                    bottomHeadings: [
                        `These kinds of activities help `+ this.childName + ` grow gently into their strengths - showing that reliability, care, and quiet thoughtfulness are powerful qualities too.`
                    ],
                },
                S: {
                    topHeadings: [
                        `Children with a Supportive style enjoy quiet, thoughtful activities that make them feel safe and included. They often respond well to one-on-one time, creative play, or simple tasks with a clear purpose. These kinds of activities can help build confidence, communication, and independence in ways that feel natural and comfortable for them.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    playFulWays: [
                        {
                            title: 'Role-play a change',
                            description: 'Practice something small that’s about to change, like meeting a new teacher or starting a club. This helps them feel prepared and more confident.'
                        },
                        {
                            title: 'Story time reflection',
                            description: 'Read a short story together and ask, “How do you think that character felt?” or “What would you do in that situation?” This helps them connect feelings with actions.'
                        },
                        {
                            title: 'Helper for the day',
                            description: 'Let them take charge of a small responsibility, like handing out napkins or setting the table. Being trusted with a role helps build independence.'
                        },
                        {
                            title: 'Confidence jar',
                            description: 'Write down small moments they were brave or kind during the week and pop them in a jar. Read them together at the end of the week.'
                        },
                        {
                            title: '“Your turn to choose”',
                            description: 'Let them make a small decision, like what snack to have or what game to play. Practising choice builds decision-making without pressure.'
                        },
                        {
                            title: 'Compliment chain',
                            description: 'At dinner or before bed, take turns saying something kind about each other. This encourages self-expression and shows the value of quiet voices.'
                        }
                    ],
                    bottomHeadings: [
                        `These activities do not need to be loud or complex. Just a few minutes of calm, focused time each day can help `+this.childName+` feel seen, supported, and proud of who they are becoming.`
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