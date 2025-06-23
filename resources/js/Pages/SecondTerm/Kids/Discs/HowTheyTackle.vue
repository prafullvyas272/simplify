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
                },
                SC: {
                    topHeadings: [
                        `Children with an <b>SC style</b> tend to approach problems carefully and patiently. They often want to understand the rules, gather all the information, and think before acting. They prefer working in calm, quiet environments where they have time to figure things out without pressure. If a task feels rushed or uncertain, they may freeze or wait rather than jump into action.`,
                        `They are unlikely to push through confusion on their own - instead, they might pause, overthink, or avoid the problem altogether if it feels overwhelming or emotionally uncomfortable.`
                    ],
                    topHeadingImages: ['43.svg', '44.svg'],
                    noticePoints: [
                        `Wanting clear steps before getting started`,
                        `Asking for extra time or reassurance`,
                        `Avoiding messy or unfamiliar challenges`,
                        `Becoming hesitant when the problem isn’t well-defined`,
                        `Focusing on accuracy more than speed`,
                    ],
                    middleHeading: 'Because they want to do things correctly and avoid mistakes, they may benefit from support that builds confidence in trial and error. Practising problem-solving in low-pressure settings can help them become more comfortable with uncertainty and setbacks.',
                    supportPoints: [
                        `Break problems into smaller, manageable steps`,
                        `Ask, “What do you already know that can help you here?”`,
                        `Reassure them that mistakes are part of the process`,
                        `Encourage trying, even without full certainty`,
                        `Celebrate effort and progress, not just correct answers`
                    ],
                    supportPointImages: [
                        '48.svg', '49.svg', '50.svg', '51.svg', '48.svg', '49.svg', '50.svg', '51.svg',
                    ],
                    bottomHeadings: [
                        `They don’t need to become faster or more forceful - their steady approach is a real strength. But with encouragement, they can learn to be more flexible and resilient in the face of everyday challenges.`,
                        `<b>With gentle support, `+ this.childName + ` can learn to approach challenges with quiet confidence - solving problems carefully and calmly, with growing independence.</b>`
                    ],
                },
                S: {
                    topHeadings: [
                        `Children with a <b>Supportive style</b> tend to approach problems carefully and patiently. They like to think things through and may wait to see what others do before taking action. Rather than rushing to solve something on their own, they often prefer to ask for help or find a solution that works for everyone.`,
                        `They are not usually drawn to bold or risky approaches. Instead, they look for calm, steady ways to fix a problem, and they want to feel certain before making a decision. If the situation feels tense or uncertain, they may freeze or avoid it altogether.`
                    ],
                    topHeadingImages: ['43.svg', '44.svg'],
                    noticePoints: [
                        `Waiting before starting, especially in unfamiliar tasks`,
                        `Looking to others for reassurance or confirmation`,
                        `Feeling overwhelmed by pressure or fast decisions`,
                        `Trying to avoid conflict rather than solve it directly`,
                        `Taking a steady, step-by-step approach when comfortable`,
                    ],
                    middleHeading: 'Because S-style children value peace and cooperation, they may need support in becoming more confident when challenges arise. They benefit from encouragement to take small steps, even if they aren’t completely sure of the outcome.',
                    supportPoints: [
                        `Ask gentle questions like “What’s the first thing you could try?” or “Is there someone you could ask for help?”`,
                        `Break problems into smaller, clear parts`,
                        `Encourage reflection after they’ve worked through something`,
                        `Praise their efforts, especially when they show independence`,
                        `Help them understand that it’s okay to make mistakes and try again`
                    ],
                    supportPointImages: [
                        '48.svg', '49.svg', '50.svg', '51.svg', '48.svg', '49.svg', '50.svg', '51.svg',
                    ],
                    bottomHeadings: [
                        `It’s important to let S-style children keep their calm and caring nature. They don’t need to become loud or forceful problem-solvers, but they do benefit from learning when to step forward, speak up, and take the lead in their own quiet way.`,
                        `With this balance, `+this.childName+` can grow into someone who solves problems not only with care, but with quiet confidence and consideration for others.`
                    ],
                },
                IS: {
                    topHeadings: [
                        `Children with an <b>IS style</b> tend to approach problems gently and thoughtfully. They are more likely to talk through the issue with others, look for cooperation, and avoid making anyone feel upset. <br><br>They may not be the first to jump in with a bold solution, but they’re often very aware of how the outcome will affect others.`,
                        `They may become overwhelmed or hesitant when a task feels unfamiliar or high-pressure. Because they care so much about getting along with others, they might avoid tackling problems that could lead to conflict or disappointment - even when they have a good idea.`
                    ],
                    topHeadingImages: ['43.svg', '44.svg'],
                    noticePoints: [
                        `Wanting to talk about the problem before acting`,
                        `Avoiding high-stress or competitive problem-solving tasks`,
                        `Looking for solutions that make everyone feel included`,
                        `Becoming anxious or uncertain with unclear expectations`,
                        `Holding back ideas unless encouraged`,
                    ],
                    middleHeading: 'Because they want to please others and avoid mistakes, they may need help building confidence in their ideas. Supporting their ability to take small risks helps them grow into more independent, steady problem-solvers.',
                    supportPoints: [
                        `Ask, “What do you think might work here?” to help them start thinking for themselves`,
                        `Break tasks into small, manageable parts with clear steps`,
                        `Let them talk through their ideas before acting`,
                        `Encourage trial and error as part of learning`,
                        `Praise them when they speak up or take initiative, even in small ways`
                    ],
                    supportPointImages: [
                        '48.svg', '49.svg', '50.svg', '51.svg', '48.svg', '49.svg', '50.svg', '51.svg',
                    ],
                    bottomHeadings: [
                        `They don’t need to become louder or more forceful - their gentle, inclusive nature is a strength. But they do benefit from learning how to move forward even when the situation feels unfamiliar or imperfect.`,
                        `With support, `+this.childName+` can grow into a thoughtful, kind problem-solver - someone who tackles challenges with care, clarity, and quiet determination.`
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
