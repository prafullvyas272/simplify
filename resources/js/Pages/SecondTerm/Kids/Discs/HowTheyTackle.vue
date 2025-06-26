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
                ID: {
                    topHeadings: [
                        `Children with an <b>ID style</b> tend to tackle problems with energy and enthusiasm. They often jump in quickly, offering ideas or trying different solutions straight away. They like to feel in control, and they may lead the effort confidently - even if they haven’t fully thought through the steps. Their creativity helps them approach challenges from different angles, but they may become distracted or lose interest if they don’t see quick results.`,
                        `They may also get frustrated if others slow them down or if their idea isn’t chosen. While they prefer to lead, they benefit from learning how to involve others and stay focused through to the end of a task.`
                    ],
                    topHeadingImages: ['43.svg', '44.svg'],
                    noticePoints: [
                        `Trying several ideas without sticking to one`,
                        `Talking through the problem before starting`,
                        `Taking the lead in group problem-solving`,
                        `Getting impatient if others hesitate or overthink`,
                        `Struggling to finish if they get bored or stuck`,
                    ],
                    middleHeading: 'Because they enjoy movement and interaction, they may overlook details or skip over quieter voices in the group. They’re more likely to act than to wait - which is a strength, but can lead to missed steps or misunderstandings.',
                    supportPoints: [
                        `Ask, “What’s your first idea - and what’s your back-up plan?”`,
                        `Encourage them to explain their thinking before acting`,
                        `Help them focus on one solution at a time`,
                        `Use timers or checklists to support follow-through`,
                        `Praise collaboration and persistence, not just quick thinking`
                    ],
                    supportPointImages: [
                        '48.svg', '49.svg', '50.svg', '51.svg', '48.svg', '49.svg', '50.svg', '51.svg',
                    ],
                    bottomHeadings: [
                        `They don’t need to slow down completely - their energy and creativity are key strengths of the ID style. But they do benefit from learning when to pause, reflect, and bring others into the process.`,
                        `With guidance, `+this.childName+` can become a confident and collaborative problem-solver - someone who brings great energy to challenges and learns how to balance it with thoughtfulness and teamwork.`
                    ],
                },
                I: {
                    topHeadings: [
                        `Children with an <b>Influential style</b> often approach problems with creativity and optimism. Rather than seeing an issue as something to fix step by step, `+this.childName+` is likely to talk it through, think out loud, or look for help from others. They may come up with clever ideas quickly, but they might also get distracted before finishing or change their mind mid-way through.`,
                        `They are usually more focused on possibilities than obstacles. If they believe something will be fun or noticed by others, they’re more likely to stick with it. But if the task becomes repetitive, quiet, or overly technical, motivation may drop quickly.`
                    ],
                    topHeadingImages: ['43.svg', '44.svg'],
                    noticePoints: [
                        `Jumping into a task with excitement, then losing interest`,
                        `Talking through the problem rather than thinking it through silently`,
                        `Asking others for input or looking for group-based solutions`,
                        `Struggling with long, detailed tasks that require sustained focus`,
                        `Using humour or distraction when stuck or unsure`,
                    ],
                    middleHeading: 'Because I-style children like to keep things light and engaging, they may avoid problems that feel too heavy or serious. They tend to look for quick fixes or social solutions, rather than slow, step-by-step thinking.',
                    supportPoints: [
                        `Ask open-ended questions like “What could you try next?” or “Who could help with this?”`,
                        `Break tasks into shorter steps with fun or visual progress markers`,
                        `Give them space to talk through their ideas before choosing one`,
                        `Encourage them to pause and reflect when something doesn’t work the first time`,
                        `Celebrate persistence and effort, not just creative ideas or quick thinking`
                    ],
                    supportPointImages: [
                        '48.svg', '49.svg', '50.svg', '51.svg', '48.svg', '49.svg', '50.svg', '51.svg',
                    ],
                    bottomHeadings: [
                        `It’s important to let I-style children keep their energy and imagination. They don’t need to become overly serious or quiet thinkers, but they do benefit from learning when to pause, reflect, and follow through with care.`,
                        `With practice, `+this.childName+` can learn to combine their natural creativity with stronger follow-through and planning. This helps them become not just imaginative, but effective in how they handle challenges.`
                    ],
                },
                DI: {
                    topHeadings: [
                        `Children with a <b>DI style</b> tend to dive into problems quickly. They are often eager to take the lead, try their own ideas, and move fast toward a solution. They may not stop to think through every step, especially if they feel confident they already know the answer.`,
                        `Their mix of boldness and creativity means they can solve problems in unexpected or original ways. However, if they feel blocked or if something doesn’t go as planned, they may get frustrated or lose interest quickly.`
                    ],
                    topHeadingImages: ['43.svg', '44.svg'],
                    noticePoints: [
                        `Jumping in before fully understanding the task`,
                        `Using bold or creative approaches to find solutions`,
                        `Becoming impatient when things feel too slow or difficult`,
                        `Wanting to win or be first when solving problems`,
                        `Getting upset if their idea is challenged or ignored`
                    ],
                    middleHeading: 'These children benefit from learning to slow down and consider other perspectives. They don’t need to stop being bold, but practising a more thoughtful pace can help them solve problems more effectively - especially in groups.',
                    supportPoints: [
                        `Ask, “What’s another way you could try that?”`,
                        `Remind them that great ideas often come from listening to others`,
                        `Break big problems into short steps so they can see progress quickly`,
                        `Praise persistence and teamwork, not just speed or success`,
                        `Encourage reflection after things go well - or when they don’t`
                    ],
                    supportPointImages: [
                        '48.svg', '49.svg', '50.svg', '51.svg', '48.svg', '49.svg', '50.svg', '51.svg',
                    ],
                    bottomHeadings: [
                        `They don’t need to lose their energy or confidence - those are key strengths of the DI style. But they do benefit from learning when to pause, involve others, and think a little more carefully before jumping in.`,
                        `With support, `+this.childName+` can learn to balance quick thinking with thoughtful problem-solving, growing into someone who solves challenges with both confidence and care.`
                    ],
                },
                DC: {
                    topHeadings: [
                        `Children with a <b>DC style</b> tend to approach problems with focus, determination, and a desire to get things right. They often want to act quickly - but only after they’ve had a chance to think it through and understand the best way forward. They may not ask for help, and they often prefer to solve things on their own.`,
                        `Their combination of drive and logic means they’re likely to be confident problem-solvers. However, if they feel blocked, challenged, or that others are slowing them down, they can become impatient or critical. They might push ahead too firmly or step back completely if they feel they can’t control the outcome.`
                    ],
                    topHeadingImages: ['43.svg', '44.svg'],
                    noticePoints: [
                        `Looking for the most efficient way to fix something`,
                        `Asking direct questions to get to the bottom of the issue`,
                        `Becoming frustrated by delays or indecision`,
                        `Trying to control the process or correct others`,
                        `Avoiding collaboration if they think others won’t do it properly`
                    ],
                    middleHeading: 'Because they value being right and in control, DC-style children may need support in learning how to accept mistakes, listen to other ideas, and adapt when the plan changes. These are skills that help them grow into more flexible and collaborative problem-solvers.',
                    supportPoints: [
                        `Ask, “What’s your plan?” to encourage independent thinking with guidance`,
                        `Suggest more than one possible solution to open their perspective`,
                        `Praise thoughtful effort, not just quick or correct answers`,
                        `Encourage group work in low-pressure settings`,
                        `Reflect together on what worked - and what they might do differently next time`
                    ],
                    supportPointImages: [
                        '48.svg', '49.svg', '50.svg', '51.svg', '48.svg', '49.svg', '50.svg', '51.svg',
                    ],
                    bottomHeadings: [
                        `They don’t need to lose their independence or drive - those are strengths of the DC style. But they do benefit from learning when to pause, involve others, and be open to different ways of thinking.`,
                        `With support, `+this.childName+` can learn to solve problems with both confidence and care - combining their natural precision and drive with growing patience, adaptability, and respect for different approaches.`
                    ],
                },
                C: {
                    topHeadings: [
                        `Children with a <b>Cautious style</b> often approach problems by thinking carefully before acting. They like to gather information, follow a process, and get things right. Rather than guessing or rushing, they prefer to stop and check if their understanding is correct. They may take longer to begin, but once they feel confident, they work with focus and care.`,
                        `They may become stuck when something is unclear or unexpected. If they’re not sure how to begin or what’s expected, they might avoid the task altogether. Mistakes can feel discouraging, especially if they place high expectations on themselves.`
                    ],
                    topHeadingImages: ['43.svg', '44.svg'],
                    noticePoints: [
                        `Hesitating before starting something unfamiliar`,
                        `Wanting clear steps or examples before trying`,
                        `Getting frustrated when something doesn’t go to plan`,
                        `Asking for help quietly or waiting to be asked`,
                        `Checking their work repeatedly to avoid errors`,
                    ],
                    middleHeading: 'Because C-style children like structure and certainty, they may need extra support when facing open-ended tasks or sudden changes. Helping them feel prepared gives them the confidence to try - even if they don’t have all the answers yet.',
                    supportPoints: [
                        `Break tasks into small, clear steps`,
                        `Reassure them that mistakes are part of learning`,
                        `Offer quiet praise for trying, not just succeeding`,
                        `Give them time to plan before expecting action`,
                        `Help them practice flexibility with gentle, low-pressure choices`
                    ],
                    supportPointImages: [
                        '48.svg', '49.svg', '50.svg', '51.svg', '48.svg', '49.svg', '50.svg', '51.svg',
                    ],
                    bottomHeadings: [
                        `It’s important to let C-style children keep their thoughtful, detail-focused nature. They don’t need to become fast or spontaneous, but they do benefit from learning how to move forward even when things aren’t perfect.`
                    ],
                },
                CS: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['43.svg', '44.svg'],
                    noticePoints: [

                    ],
                    middleHeading: '',
                    supportPoints: [

                    ],
                    supportPointImages: [
                        '48.svg', '49.svg', '50.svg', '51.svg', '48.svg', '49.svg', '50.svg', '51.svg',
                    ],
                    bottomHeadings: [

                    ],
                },
                CD: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['43.svg', '44.svg'],
                    noticePoints: [

                    ],
                    middleHeading: '',
                    supportPoints: [

                    ],
                    supportPointImages: [
                        '48.svg', '49.svg', '50.svg', '51.svg', '48.svg', '49.svg', '50.svg', '51.svg',
                    ],
                    bottomHeadings: [

                    ],
                },
                D: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['43.svg', '44.svg'],
                    noticePoints: [

                    ],
                    middleHeading: '',
                    supportPoints: [

                    ],
                    supportPointImages: [
                        '48.svg', '49.svg', '50.svg', '51.svg', '48.svg', '49.svg', '50.svg', '51.svg',
                    ],
                    bottomHeadings: [

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
