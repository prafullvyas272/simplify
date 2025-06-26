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
                IS: {
                    topHeadings: [
                        `Children with an IS style often enjoy calm, social activities that make space for conversation, connection, and creativity. They’re likely to prefer games that are inclusive over ones that are competitive, and they tend to enjoy group-based play where kindness and cooperation matter.`,
                        `These types of activities can be used to gently stretch their confidence, independence, and decision-making - all while still making space for what they enjoy most.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    playFulWays: [
                        {
                            title: 'Create a kindness chart',
                            description: 'Each time they do something helpful or encouraging, let them add to it. Reflect at the end of the week on the impact of their kindness.'
                        },
                        {
                            title: 'Take turns being “in charge”',
                            description: 'Play games where they lead a family activity, snack choice, or part of the routine - helping them build comfort with decision-making.'
                        },
                        {
                            title: 'Co-create a story',
                            description: 'Take turns writing or saying lines to build a story together. This promotes creativity, communication, and confidence in sharing ideas.'
                        },
                        {
                            title: 'Set up a helper mission',
                            description: 'Give them a secret job for the day - like noticing someone who might need help - and reflect on how it went together afterwards.'
                        },
                        {
                            title: 'Plan a playdate or small event',
                            description: 'Let them decide who to invite, what to do, or how to organise something simple. This builds gentle independence with a social focus.'
                        },
                        {
                            title: 'Role-play problem solving',
                            description: 'Act out small social challenges (e.g. “What if a friend doesn’t want to play your game?”) and talk through ways to respond with confidence.'
                        }
                    ],
                    bottomHeadings: [
                        `These activities help `+this.childName+` build resilience and self-assurance while continuing to nurture the warmth and connection they naturally bring to the world around them.`
                    ],
                },
                ID: {
                    topHeadings: [
                        `Children with an <b>ID style</b> thrive in playful, fast-paced environments where they can take the lead and stay active. They enjoy games, group activities, and anything that lets them share ideas or be in the spotlight. These kinds of experiences can also be used to build focus, patience, and collaborative thinking in a way that feels natural and enjoyable.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    playFulWays: [
                        {
                            title: 'Host a mini show or presentation',
                            description: 'Let them plan and lead a performance, skit, or talk on a topic they love. This helps build communication skills while encouraging preparation and structure.'
                        },
                        {
                            title: 'Challenge with a countdown',
                            description: 'Set a fun timer to complete a task (like cleaning up or getting ready) to keep focus sharp without pressure.'
                        },
                        {
                            title: 'Rotate leadership at home',
                            description: 'Let them be “leader of the day” to manage small routines - like setting the table, choosing music, or organising an activity.'
                        },
                        {
                            title: 'Plan a group game',
                            description: 'Ask them to invent or adapt a game, then explain the rules to others. This builds both creativity and responsibility for fairness.'
                        },
                        {
                            title: 'Storytelling swap',
                            description: 'Take turns building a story sentence by sentence - this encourages listening, turn-taking, and fun collaboration.'
                        },
                        {
                            title: 'Reflect and celebrate',
                            description: 'Ask, “What went well today?” or “What are you proud of?” This helps them build awareness of effort and follow-through, not just energy and fun.'
                        }
                    ],
                    bottomHeadings: [
                        `These activities help `+this.childName+` use their natural charisma in ways that strengthen confidence, connection, and personal growth - while also building habits of reflection and follow-through.`
                    ],
                },
                I: {
                    topHeadings: [
                        `Children with an <b>Influential style</b> respond well to learning experiences that are playful, expressive, and interactive. `+this.childName+` is likely to enjoy activities that allow them to be creative, use their voice, and connect with others. These types of activities can help build focus, listening skills, and emotional awareness while still feeling fun and natural.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    playFulWays: [
                        {
                            title: 'Story swap',
                            description: 'Take turns telling parts of a story. One person starts with a sentence, and the other continues it. This helps with listening, turn-taking, and creativity.'
                        },
                        {
                            title: 'Silly challenges',
                            description: 'Make tasks into fun competitions. For example, “Can you tidy up three things before the timer runs out?” or “Let’s see who can stay quiet the longest.”'
                        },
                        {
                            title: 'Mirror me',
                            description: 'Play a game where they have to copy your movements or facial expressions. It encourages focus and builds awareness of others.'
                        },
                        {
                            title: 'Mood matching',
                            description: 'Draw faces to match different feelings. Ask, “When do you feel like this?” This builds emotional vocabulary and helps them reflect on their reactions.'
                        },
                        {
                            title: 'Praise tracker',
                            description: 'Create a chart with stars or stickers when they show listening, patience, or follow-through. Celebrate progress at the end of the week.'
                        },
                        {
                            title: 'Share the spotlight',
                            description: 'Encourage them to ask others questions or cheer someone else on. This teaches them how to be a supportive friend as well as a confident speaker.'
                        }
                    ],
                    bottomHeadings: [
                        `These activities don’t need to take long. Just a few minutes of connection and playful focus each day can help `+this.childName+` develop confidence, attention, and social awareness in a way that feels natural and fun.`
                    ],
                },
                DI: {
                    topHeadings: [
                        `Children with a <b>DI style</b> learn best through activity, variety, and excitement. They enjoy games, movement, and opportunities to lead or create. These types of experiences help build focus, patience, and social awareness - all in a way that feels enjoyable and natural to them.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    playFulWays: [
                        {
                            title: 'Leadership missions',
                            description: 'Give them a short-term role like “captain of clean-up” or “game organiser” for the day. These help build responsibility in a fun, active way.'
                        },
                        {
                            title: 'Countdown challenges',
                            description: 'Use a timer for tasks like brushing teeth, packing a bag, or tidying up. Time-based tasks help keep them engaged while building follow-through.'
                        },
                        {
                            title: '“Swap the role”',
                            description: 'Let them pretend to be the teacher or parent during a simple task. This helps them practice listening, giving instructions, and seeing things from another view.'
                        },
                        {
                            title: 'Story starter race',
                            description: 'Say the first line of a story and ask them to finish it as fast as they can - then ask them to slow down and rewrite it with more detail.'
                        },
                        {
                            title: 'Praise points',
                            description: 'Give tokens or stickers when they stay focused, wait their turn, or finish a slower task. Reinforcing effort helps build staying power.'
                        },
                        {
                            title: 'Group task spotlight',
                            description: 'Put them in charge of organising a small group activity at home or school. Afterward, talk about how the group worked together and what they learned.'
                        }
                    ],
                    bottomHeadings: [
                        `These types of activities let `+this.childName+` express their energy and creativity - while also learning how to manage it thoughtfully. Just a few minutes a day can help them grow in focus, teamwork, and follow-through without losing their spark.`
                    ],
                },
                DC: {
                    topHeadings: [
                        `Children with a <b>DC style</b> often enjoy thoughtful, structured activities that allow them to focus, plan, and take control. They may prefer solo tasks over group play and tend to enjoy activities that involve strategy, logic, or a clear purpose. These kinds of experiences can help build their flexibility, patience, and connection with others - all while still feeling comfortable and in control.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    playFulWays: [
                        {
                            title: 'Create a challenge',
                            description: 'Give them a practical problem to solve, like designing a more efficient morning routine or organising a messy drawer. Let them lead the process.'
                        },
                        {
                            title: 'Strategy games',
                            description: 'Play board games that require planning and patience, like chess, checkers, or puzzles. These help build focus and encourage flexibility in a low-pressure way.'
                        },
                        {
                            title: 'Plan a task from start to finish',
                            description: 'Let them plan and carry out a project - like setting up a small shop at home, making a timetable, or designing a game. Include steps and outcomes they can control.'
                        },
                        {
                            title: '“Change one thing”',
                            description: 'Take a familiar routine and change a small part of it. Ask them how they’d adapt. This helps them practice being flexible without overwhelming them.'
                        },
                        {
                            title: 'Quiet leadership',
                            description: 'Give them a job that requires thinking ahead and staying organised - like keeping track of time during a shared activity or preparing something for others.'
                        },
                        {
                            title: 'Reflective check-ins',
                            description: 'After a task or game, ask, “What worked well?” or “What would you improve?” This builds self-awareness and encourages thoughtful feedback.'
                        }
                    ],
                    bottomHeadings: [
                        `These activities can help `+this.childName+` feel challenged, respected, and in control - while also helping them practice adapting, collaborating, and stepping back when needed.`
                    ],
                },
                C: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    // CONVERT THEM TO OBJECTS OF title, description
                    playFulWays: [

                    ],
                    bottomHeadings: [

                    ],
                },
                CS: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    // CONVERT THEM TO OBJECTS OF title, description
                    playFulWays: [

                    ],
                    bottomHeadings: [

                    ],
                },
                CD: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    // CONVERT THEM TO OBJECTS OF title, description
                    playFulWays: [

                    ],
                    bottomHeadings: [

                    ],
                },
                D: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    // CONVERT THEM TO OBJECTS OF title, description
                    playFulWays: [

                    ],
                    bottomHeadings: [

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