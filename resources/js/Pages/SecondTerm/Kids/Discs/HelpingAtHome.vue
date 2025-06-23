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