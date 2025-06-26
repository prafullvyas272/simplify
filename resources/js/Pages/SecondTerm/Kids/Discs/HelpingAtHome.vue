<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Helping at Home – Everyday Tips
            </h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="row p-6">
            <div class="col-5">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/81.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-7">
                <div v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index" class="">
                    <p class="my-4">
                        <span v-html="topHeading"></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row p-6">

            <div class="col-12">
                <h4 class="px-2 mb-4 font-bold text-blue-800" v-html="reportData[discStyle]?.middleHeading">
                </h4>
            </div>
        </div>
        <div class="row p-6">
            <div class="row" v-for="(helpFullIdea, index) in reportData[discStyle]?.helpFullIdeas?.slice(0, 3)">
                <template v-if="(index % 2 == 0)">
                    <div class="col-6">
                        <img class="w-96 h-auto object-contain" :src="getHelpingIdeasImagePath(index)" alt="" />
                    </div>
                    <div class="col-6">
                        <div class="col-12 my-4">
                            <p class="font-bold ml-2 my-2">
                                {{ helpFullIdea?.title }}
                            </p>
                            <p class="ml-2 my-2">
                                {{ helpFullIdea?.description }}
                            </p>
                        </div>
                    </div>
                </template>
                <template v-if="(index % 2 != 0)">
                    <div class="col-6">
                        <div class="col-12 my-4">
                            <p class="font-bold ml-2 my-2">
                                {{ helpFullIdea?.title }}
                            </p>
                            <p class="ml-2 my-2">
                                {{ helpFullIdea?.description }}
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <img class="w-96 h-auto object-contain" :src="getHelpingIdeasImagePath(index)" alt="" />
                    </div>
                </template>
            </div>
            <div class="row">
                <div class="col-6">
                    <div v-for="(helpFullIdea, index) in reportData[discStyle]?.helpFullIdeas?.slice(3, reportData[discStyle]?.helpFullIdeas?.length)"
                        class="col-12 my-4">
                        <p class="font-bold ml-2 my-2">
                            {{ helpFullIdea?.title }}
                        </p>
                        <p class="ml-2 my-2">
                            {{ helpFullIdea?.description }}
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <img class="w-240 h-auto object-contain" :src="getHelpingIdeasImagePath(3)" alt="" />
                </div>
            </div>
        </div>
        <div
            class="relative w-full h-[400px] flex justify-center items-center text-white board-image font-bold px-5 pt-5">
            <div class="text-black px-4 py-2 rounded text-center">
                <p class="mb-4" v-for="(bottomHeading, index) in reportData[discStyle]?.bottomHeadings" :key="index">
                    {{ bottomHeading }}
                </p>
            </div>
        </div>

    </div>
</template>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import "../../../../../css/reports.css";

export default {
    name: 'HelpingAtHome',
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
                        `Children with an SI style are usually happy to help, especially when the task feels kind, social, or part of a regular routine. They like to feel included and appreciated, and they often take quiet pride in being dependable. They may not ask to be in charge, but they enjoy being trusted - particularly when the environment is calm and the tone is positive.`,
                        `` + this.childName + ` may shy away from tasks that feel unfamiliar or high-pressure. They respond best when given support, time, and encouragement, rather than instructions that feel strict or rushed.`
                    ],
                    topHeadingImages: ['81.svg'],
                    middleHeading: `Here are some helpful ideas for home life with ` + this.childName + `:`,
                    helpFullIdeas: [
                        {
                            'img': '82.svg',
                            'title': 'Invite them into shared routines',
                            'description': 'They enjoy helping when it feels like a team effort. Let them take part in routines like setting the table, tidying up together, or feeding a pet.',
                        },
                        {
                            'img': '83.svg',
                            'title': 'Use calm, positive language',
                            'description': 'Gentle encouragement like “I really appreciated your help today” builds confidence and motivation.',
                        },
                        {
                            'img': '84.svg',
                            'title': 'Offer clear, step-by-step guidance',
                            'description': 'They do best with instructions that are easy to follow and don’t change too often.',
                        },
                        {
                            'img': '85.svg',
                            'title': 'Encourage quiet responsibility',
                            'description': 'Give them a role that’s just theirs, like managing the family calendar or preparing their school bag.',
                        },
                        {
                            'img': '82.svg',
                            'title': 'Create space for choice',
                            'description': 'Let them choose between two tasks to build ownership while still offering structure.',
                        },
                        {
                            'img': '83.svg',
                            'title': 'Reinforce effort, not just completion',
                            'description': 'Recognise when they start a task thoughtfully or take care in how they help - not just when the job is finished.',
                        },
                    ],
                    bottomHeadings: [
                        `When ` + this.childName + ` feels respected and supported at home, they often become one of the most reliable and thoughtful members of the household - helping with genuine care and steady effort.`
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an SC style are often happy to help at home - especially when they understand exactly what’s expected and have time to complete it without pressure. They prefer tasks that follow a routine, and they may take pride in doing things properly. They might not seek out responsibility on their own, but they’re usually dependable once it’s given to them clearly.`,
                        `They may feel anxious if a job is rushed or unclear, and they can become overwhelmed by too many instructions at once. They benefit from being trusted to take their time and do things in a calm, consistent way.`
                    ],
                    topHeadingImages: ['81.svg'],
                    middleHeading: `Here are some helpful ideas for home life with ` + this.childName + `:`,
                    helpFullIdeas: [
                        {
                            'img': '82.svg',
                            'title': 'Invite them into shared routines',
                            'description': 'They enjoy helping when it feels like a team effort. Let them take part in routines like setting the table, tidying up together, or feeding a pet.',
                        },
                        {
                            'img': '83.svg',
                            'title': 'Use visual reminders or checklists',
                            'description': 'A simple chart or routine list helps them know what to expect - and builds independence.',
                        },
                        {
                            'img': '84.svg',
                            'title': 'Let them finish things at their own pace',
                            'description': 'Avoid rushing them. A calm tone and extra time can make a big difference.',
                        },
                        {
                            'img': '85.svg',
                            'title': 'Give clear, structured instructions',
                            'description': 'They do best when tasks are explained step-by-step, with nothing left vague or open-ended.',
                        },
                        {
                            'img': '82.svg',
                            'title': 'Assign gentle routines',
                            'description': 'Consistent responsibilities like folding laundry, organising books, or feeding a pet help them feel useful and capable.',
                        },
                        {
                            'img': '83.svg',
                            'title': 'Offer private encouragement',
                            'description': 'They may not want attention for their effort, but they still value quiet recognition.',
                        },
                        {
                            'img': '84.svg',
                            'title': 'Build confidence with “safe” decisions',
                            'description': 'Let them choose between two tasks or decide how to organise their space - it helps them practice decision-making in a low-pressure way.',
                        },
                    ],
                    bottomHeadings: [
                        `When `+ this.childName +` feels supported and clear on what to do, they’re often one of the most quietly dependable helpers at home - steady, responsible, and thoughtful in how they contribute.`
                    ],
                },
                S: {
                    topHeadings: [
                        `Children with a Supportive style often enjoy being part of family routines. They like knowing what to expect and being included in calm, meaningful ways. `+this.childName+` may not ask to take the lead, but they are likely to help out quietly and consistently when given the chance.`,
                        `They may avoid loud or messy jobs, but they often feel proud when someone notices their effort. Encouragement and gentle support help them feel trusted and valued at home.`
                    ],
                    topHeadingImages: ['81.svg'],
                    middleHeading: `Here are some helpful ideas for home life with ` + this.childName + `:`,
                    helpFullIdeas: [
                        {
                            'img': '82.svg',
                            'title': 'Give clear roles',
                            'description': 'Offer regular tasks that they can do independently. They’re more likely to take responsibility when the expectation is clear and the routine stays the same.',
                        },
                        {
                            'img': '83.svg',
                            'title': 'Check in with how they feel',
                            'description': 'They may not speak up if something feels unfair or difficult. Make space to talk about how things are going and show that their feelings matter.',
                        },
                        {
                            'img': '84.svg',
                            'title': 'Use calm reminders',
                            'description': 'If they forget something or need help staying on track, guide them gently. A quiet reminder works better than pressure or sudden changes.',
                        },
                        {
                            'img': '85.svg',
                            'title': 'Give reassurance',
                            'description': 'Let them know it’s okay to ask for help or say no. Reassurance helps them feel more confident making decisions on their own.',
                        },
                        {
                            'img': '82.svg',
                            'title': 'Praise steady effort',
                            'description': 'Notice and name the quiet ways they contribute, such as sticking to routines, showing kindness, or finishing a task without being asked.',
                        },
                        {
                            'img': '83.svg',
                            'title': 'Let them plan something small',
                            'description': 'Give them a chance to take ownership over something simple, like choosing a meal or organising a space. It helps build confidence in their ability to lead in small but meaningful ways.',
                        }
                    ],
                    bottomHeadings: [
                        `Helping at home doesn’t always need to be about chores or checklists. With patience and steady encouragement, `+this.childName+` can grow into someone who takes quiet pride in helping others and contributing to the family.`
                    ],
                },
                IS: {
                    topHeadings: [
                        `Children with an IS style often enjoy being helpful, especially when they feel appreciated for it. They’re likely to respond well to tasks that feel kind, social, or part of a routine. `+this.childName+` may not ask to take the lead at home, but they’re usually reliable when asked gently and given time to complete things at their own pace.`,
                        `They may avoid tasks that feel too hard or unfamiliar without clear encouragement. They’re also more likely to help when the tone is positive and they feel part of the process, not just told what to do.`
                    ],
                    topHeadingImages: ['81.svg'],
                    middleHeading: `Here are some helpful ideas for home life with ` + this.childName + `:`,
                    helpFullIdeas: [
                        {
                            'img': '82.svg',
                            'title': 'Involve them in planning',
                            'description': 'Let them help decide how or when a task is done. They enjoy feeling part of the process rather than being assigned a job.',
                        },
                        {
                            'img': '83.svg',
                            'title': 'Use warm encouragement',
                            'description': 'A kind tone and simple praise like “Thanks for doing that - it really helped” can go a long way.',
                        },
                        {
                            'img': '84.svg',
                            'title': 'Keep tasks light and clear',
                            'description': 'Break up chores into manageable parts so they don’t feel overwhelming.',
                        },
                        {
                            'img': '85.svg',
                            'title': 'Invite teamwork',
                            'description': 'Ask them to help with someone else or do a task together - they often enjoy shared effort.',
                        },
                        {
                            'img': '82.svg',
                            'title': 'Reinforce their value',
                            'description': 'Let them know their help matters and makes others feel good. Emotional motivation is powerful for this style.',
                        },
                        {
                            'img': '83.svg',
                            'title': 'Build quiet confidence',
                            'description': 'Give them gentle opportunities to take the lead on small routines - like being in charge of setting the table or organising their space.',
                        }
                    ],
                    bottomHeadings: [
                        `When `+this.childName+` feels included, appreciated, and supported, they’re often one of the most reliable and thoughtful helpers at home - with a natural desire to contribute in ways that feel caring and meaningful.`
                    ],
                },
                ID: {
                    topHeadings: [
                        `Children with an <b>ID style</b> are often eager to help when the task feels fun, active, or gives them a sense of control. They enjoy being trusted with responsibility, especially if they get to lead or add their own creative twist. They are more likely to engage when there’s praise, variety, or a goal involved - and less likely to stick with quiet, repetitive tasks unless they feel noticed.`,
                        this.childName+` may start a job with excitement, then get distracted or drift off if it feels boring or takes too long. They respond well to encouragement and do best when they can see their progress along the way.`
                    ],
                    topHeadingImages: ['81.svg'],
                    middleHeading: `Here are some helpful ideas for home life with ` + this.childName + `:`,
                    helpFullIdeas: [
                        {
                            'img': '82.svg',
                            'title': 'Let them choose how to help',
                            'description': 'Offer two or three tasks and let them pick. This gives them a sense of control while still guiding the outcome.',
                        },
                        {
                            'img': '83.svg',
                            'title': 'Add a fun or timed challenge',
                            'description': 'Use mini-competitions like “Let’s see if we can do this in five minutes” to keep energy high.',
                        },
                        {
                            'img': '84.svg',
                            'title': 'Use checklists or charts',
                            'description': 'Visual reminders of progress help them stay on track and feel a sense of achievement.',
                        },
                        {
                            'img': '85.svg',
                            'title': 'Break up longer tasks',
                            'description': 'Split jobs into short parts with little breaks or praise in between to maintain focus.',
                        },
                        {
                            'img': '82.svg',
                            'title': 'Celebrate effort and follow-through',
                            'description': 'Praise them when they finish something well - not just when they start with energy.',
                        },
                        {
                            'img': '83.svg',
                            'title': 'Encourage responsibility with a twist',
                            'description': 'Give them a rotating “home helper” role with their name on it. This gives structure while still feeling special.',
                        }
                    ],
                    bottomHeadings: [
                        `Helping at home works best when `+this.childName+` feels trusted, included, and appreciated. With the right support, their enthusiasm can grow into consistent, confident contributions.`
                    ],
                },
                I: {
                    topHeadings: [
                        `Children with an <b>Influential style</b> often enjoy being part of what’s going on around them. `+this.childName+` is likely to be happiest when the home feels lively, social, and full of opportunities to talk and share. They may be less motivated by quiet chores or strict routines, especially if those tasks feel dull or solitary.`,
                        `Giving them the chance to feel involved and appreciated can make a big difference. The key is to make responsibility feel enjoyable and to use encouragement, rather than correction, to keep things on track.`
                    ],
                    topHeadingImages: ['81.svg'],
                    middleHeading: `Here are some helpful ideas for home life with ` + this.childName + `:`,
                    helpFullIdeas: [
                        {
                            'img': '82.svg',
                            'title': 'Involve them in fun tasks',
                            'description': 'Let them help with activities that allow for creativity or connection, such as making shopping lists, setting the table in their own way, or planning a family game night. If it feels like a team effort or gets a laugh, they’re more likely to join in.',
                        },
                        {
                            'img': '83.svg',
                            'title': 'Keep reminders light',
                            'description': 'Rather than repeating instructions firmly, try using playful tones or visual cues. Influential children respond best when the message feels friendly rather than strict.',
                        },
                        {
                            'img': '84.svg',
                            'title': 'Celebrate small wins',
                            'description': 'Notice and praise when they follow through on something, even if it’s small. For example, “You remembered that without being asked, well done.”',
                        },
                        {
                            'img': '85.svg',
                            'title': 'Add social elements to routines',
                            'description': 'Pair chores or homework with music, a timer challenge, or a chance to share what they’re doing. Turning a task into something they can talk about or look forward to helps motivation.',
                        },
                        {
                            'img': '82.svg',
                            'title': 'Give space to express themselves',
                            'description': 'Sometimes they just want to talk. Make time to listen and show interest, even when the stories are long. Feeling heard helps them feel settled.',
                        },
                        {
                            'img': '82.svg',
                            'title': 'Use visuals and variety',
                            'description': 'Checklists, coloured markers, or rotating task charts can add energy to routine activities. Changing things up every so often can help them stay interested and engaged.',
                        },
                    ],
                    bottomHeadings: [
                        `Helping at home doesn’t need to be serious or strict. With a bit of creativity and plenty of encouragement, `+this.childName+` can build responsibility in ways that feel natural to them - and maybe even a bit of fun too`
                    ],
                },
                DI: {
                    topHeadings: [
                        `Children with a <b>DI style</b> often enjoy helping at home when the task feels active, important, or fun. They like to feel trusted and involved, especially when they’re given some freedom in how they do things. `+this.childName+` may not enjoy quiet or repetitive tasks, but they usually respond well when there’s praise, variety, or a challenge involved.`,
                        `These children may start a job quickly, but lose interest before finishing. They often want things to be done their way and may need help slowing down or staying focused, especially if no one is watching.`
                    ],
                    topHeadingImages: ['81.svg'],
                    middleHeading: `Here are some helpful ideas for home life with ` + this.childName + `:`,
                    helpFullIdeas: [
                        {
                            'img': '82.svg',
                            'title': 'Let them take charge of something',
                            'description': 'Offer a task where they can be the leader - like planning a meal, organising a drawer, or creating a game for the family.',
                        },
                        {
                            'img': '83.svg',
                            'title': 'Make it feel like a challenge',
                            'description': 'Use short timers or mini-goals, like “Let’s see if we can do this in five minutes” to keep things exciting and focused.',
                        },
                        {
                            'img': '84.svg',
                            'title': 'Use checklists they can tick off',
                            'description': 'Seeing progress helps them stay on track and gives a sense of completion.',
                        },
                        {
                            'img': '85.svg',
                            'title': 'Give freedom with structure',
                            'description': 'Let them choose how to do the task, but keep clear expectations around the end result.',
                        },
                        {
                            'img': '82.svg',
                            'title': 'Praise consistency',
                            'description': 'They love being noticed - so highlight when they stick with something or finish it well, not just when they start with enthusiasm.',
                        },
                        {
                            'img': '83.svg',
                            'title': 'Reflect together',
                            'description': 'After a task, ask “What part did you enjoy most?” or “What would you do differently next time?” to encourage learning and ownership.',
                        },
                    ],
                    bottomHeadings: [
                        `Helping at home works best when it taps into their energy and drive. With a bit of structure and encouragement, `+this.childName+` can turn their natural confidence into a real sense of contribution and pride.`
                    ],
                },
                DC: {
                    topHeadings: [
                        `Children with a <b>DC style</b> are often reliable and independent when it comes to helping at home - especially if the task is clear, meaningful, and done their way. They usually prefer structure over spontaneity and are more likely to take pride in a job well done than in praise or attention.`,
                        this.childName+` may not enjoy overly social or repetitive tasks, but they often work hard when they understand the purpose and are given space to do it properly. They may push back if the task feels unclear, unnecessary, or imposed without explanation.`
                    ],
                    topHeadingImages: ['81.svg'],
                    middleHeading: `Here are some helpful ideas for home life with ` + this.childName + `:`,
                    helpFullIdeas: [
                        {
                            'img': '82.svg',
                            'title': 'Give clear, specific instructions',
                            'description': 'They want to know exactly what needs to be done. Avoid vague requests - instead, explain what the task is and why it matters.',
                        },
                        {
                            'img': '83.svg',
                            'title': 'Let them take ownership',
                            'description': 'Offer tasks they can manage independently, such as organising their school bag, preparing a checklist, or managing part of a routine.',
                        },
                        {
                            'img': '84.svg',
                            'title': 'Set quality expectations',
                            'description': 'Explain what a “job well done” looks like in advance. They often enjoy rising to a clear standard.',
                        },
                        {
                            'img': '85.svg',
                            'title': 'Limit interruptions',
                            'description': 'If they’re focused on a task, avoid stepping in too quickly. Give them time to finish without too many changes or corrections.',
                        },
                        {
                            'img': '82.svg',
                            'title': 'Praise their effort and thinking',
                            'description': 'Recognise not just the finished task, but the care, accuracy, or planning they put into it.',
                        },
                        {
                            'img': '83.svg',
                            'title': 'Let them improve a system',
                            'description': 'Invite them to help make something work better - like rearranging a drawer or creating a new routine. They often enjoy streamlining things.',
                        },
                    ],
                    bottomHeadings: [
                        `With the right balance of structure, trust, and autonomy, `+this.childName+` can become a thoughtful, dependable helper - not just ticking off tasks, but taking real pride in doing them well.`
                    ],
                },
                C: {
                    topHeadings: [
                        `Children with a <b>Cautious style</b> often enjoy helping at home when they know exactly what’s expected. They feel most comfortable when routines are clear and the environment is calm. They may not rush to take charge, but they usually take great care in whatever they’re given responsibility for.`,
                        this.childName+` might need a little extra encouragement to try something new, especially if they’re unsure how to do it. But once confident, they are often very dependable.`
                    ],
                    topHeadingImages: ['81.svg'],
                    middleHeading: `Here are some helpful ideas for home life with ` + this.childName + `:`,
                    helpFullIdeas: [
                        {
                            img: '82.svg',
                            title: 'Give clear instructions',
                            description: 'Explain tasks step by step. A written list or visual reminder can help them feel more confident starting independently.',
                        },
                        {
                            img: '83.svg',
                            title: 'Keep routines predictable',
                            description: 'They feel safer and more capable when things are consistent. Let them know in advance if a change is coming.',
                        },
                        {
                            img: '84.svg',
                            title: 'Give time to prepare',
                            description: 'If something needs to be done at a certain time, give them a gentle heads-up in advance rather than rushing.',
                        },
                        {
                            img: '85.svg',
                            title: 'Reassure them it’s okay to get things wrong',
                            description: 'Mistakes may feel bigger than they are. Remind them that learning comes from trying, not just getting it right.',
                        },
                        {
                            img: '82.svg',
                            title: 'Celebrate accuracy and effort',
                            description: 'Notice when they’ve followed instructions carefully or finished something well. Quiet praise means a lot.',
                        },
                        {
                            img: '83.svg',
                            title: 'Invite them to organise or sort',
                            description: 'They often enjoy tasks that involve tidying, checking, or planning - like setting the table, organising a shelf, or checking a list.',
                        },
                    ],
                    bottomHeadings: [
                        `Helping at home can be a source of pride for these children. With gentle support and calm routines, `+this.childName+` can build responsibility in a way that feels steady, manageable, and rewarding.`
                    ],
                },
                CS: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['81.svg'],
                    middleHeading: `Here are some helpful ideas for home life with ` + this.childName + `:`,
                    helpFullIdeas: [

                    ],
                    bottomHeadings: [

                    ],
                },
                CD: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['81.svg'],
                    middleHeading: `Here are some helpful ideas for home life with ` + this.childName + `:`,
                    helpFullIdeas: [

                    ],
                    bottomHeadings: [

                    ],
                },
                D: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['81.svg'],
                    middleHeading: `Here are some helpful ideas for home life with ` + this.childName + `:`,
                    helpFullIdeas: [

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