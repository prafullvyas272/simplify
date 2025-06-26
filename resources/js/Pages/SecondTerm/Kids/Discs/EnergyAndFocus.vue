<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Managing Their Energy and Focus</h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" class="row p-6">
            <div class="col-6">
                <div :key="index" class="">
                    <p class="my-4">
                        <span v-html="topHeading"></span>
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain" :src=getTopHeadingImagePath(index) alt="" />
                </div>
            </div>

        </div>
        <div class="row p-6">
            <div class="col-12">
                <h4 class="mb-4 font-bold text-blue-800">
                    Some common patterns include:
                </h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/63.svg'"
                        alt="" />
                </div>
                <div class="col-6">
                    <ul v-for="commonPattern in reportData[discStyle]?.commonPatterns" class="col-12 list-disc">
                        <li class="font-bold ml-2 my-2">
                            {{ commonPattern }}
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row p-6">

                <div class="col-12 flex items-center">
                    <p class="px-2">
                        {{ reportData[discStyle]?.middleHeading }}
                    </p>
                </div>
            </div>
            <div class="row p-6">
                <h4 class="mb-4 font-bold text-blue-800">
                    Ways to support {{ childName }}:
                </h4>
                <div class="row">
                    <div class="col-6">
                        <ul v-for="supportPoint in reportData[discStyle]?.supportPoints" class="col-12 list-disc">
                            <li class="font-bold ml-2 my-2">
                                {{ supportPoint }}
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/64.svg'"
                            alt="" />
                    </div>
                </div>
            </div>

            <!-- Awareness points -->
            <div class="row p-6">
                <h4 class="mb-4 font-bold text-green-400">
                    You can also use short check-in questions to build awareness. Try asking:
                </h4>
                <div class="row p-6">
                    <div class="col-6 yellow-cloud"
                        v-for="(shortQuestion, index) in reportData[discStyle]?.shortQuestions" :key="index" :class="[
                            // If it's the last item AND odd number of items, apply offset
                            (index === reportData[discStyle]?.shortQuestions.length - 1 && reportData[discStyle]?.shortQuestions.length % 2 !== 0)
                                ? 'offset-3'
                                : ''
                        ]">
                        <div class="relative w-full h-[300px] flex items-center justify-center text-white"
                            :class="getCloudImageClassByIndex(index)">
                            <div class="text-black flex justify-center items-center px-20 py-2 rounded">
                                <p class="mb-4 font-bold text-center px-20">
                                    {{ shortQuestion }}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="relative w-full h-[500px] flex items-center justify-center text-white board-image">
            <div class="text-black rounded mx-20 text-center">
                <div v-for="bottomHeading in reportData[discStyle]?.bottomHeadings"
                    class="col-12 px-20 font-bold">
                    <p v-html="bottomHeading" class="px-20">
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
    name: 'EnergyAndFocus',
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
                        `Children with an SI style often bring calm energy and quiet consistency to their tasks, especially in settings where they feel emotionally safe.They're more likely to focus well when the environment is gentle, the people around them are kind, and the task feels familiar or connected to others.They may not be the fastest or most intense, but they're often steady and cooperative.`,
                        `However, if the environment feels tense or overly busy, they might withdraw or become distracted.They may also lose focus if they're unsure of the next step or if the task feels too disconnected from the people around them.`
                    ],
                    topHeadingImages: ['61.svg', '62.svg'],
                    commonPatterns: [
                        `Focusing well in warm, calm, and friendly settings`,
                        `Getting distracted by changes in mood or tone around them`,
                        `Needing reassurance to start or stay with unfamiliar tasks`,
                        `Losing energy when tasks feel disconnected or rushed`,
                        `Enjoying slow, steady work more than high-pressure activity`
                    ],
                    middleHeading: `These children don't usually need high energy to stay engaged - they do best when things feel emotionally balanced. Support that combines structure with warmth can help them stay focused and feel secure.`,
                    supportPoints: [
                        `Use gentle reminders or prompts rather than strong correction`,
                        `Create consistent routines and clear steps for tasks`,
                        `Give encouragement during and after the task`,
                        `Allow time to warm up to a new or unfamiliar activity`,
                        `Include social elements when possible - even light conversation helps`,
                    ],
                    shortQuestionsImages: [
                        '68.svg', '66.svg', '67.svg',
                    ],
                    shortQuestions: [
                        `"What helped you stick with that today?"`,
                        `"Did anything make it harder to concentrate?"`,
                        `"What would help you stay focused next time?"`,
                    ],
                    cloudImageClasses: [
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                    ],
                    bottomHeadings: [
                        `With the right support, ` + this.childName + ` can learn to manage their focus in a way that feels calm, steady, and fully their own - even when things around them shift.`,
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an SC style tend to be calm and focused when the environment is structured and familiar. They’re usually able to concentrate well on tasks that are clear, predictable, and quiet. They don’t often seek stimulation or excitement - instead, they prefer a steady pace and minimal distractions.`,
                        `If something feels overwhelming, emotionally tense, or unclear, they may become withdrawn, distracted, or overly focused on small details. They may also struggle to re-engage if their rhythm is disrupted or if they feel unsure about how to continue.`,
                    ],
                    topHeadingImages: ['61.svg', '62.svg'],
                    commonPatterns: [
                        `Focusing well on quiet, structured tasks`,
                        `Working best when given clear steps and enough time`,
                        `Losing focus when they feel uncertain or under pressure`,
                        `Needing reassurance or support to restart after distraction`,
                        `Becoming fixated on getting small details just right`,
                    ],
                    middleHeading: `These children don’t usually need to be pushed harder - they need to feel calm and confident in what they’re doing. Encouraging small breaks, gentle resets, and time to prepare can help maintain focus without adding pressure.`,
                    supportPoints: [
                        `Create consistent routines with minimal surprises`,
                        `Use visual aids or checklists to support task flow`,
                        `Give them time to plan or preview what’s coming next`,
                        `Allow short breaks when concentration dips`,
                        `Let them know that progress, not perfection, is the goal`,
                    ],
                    shortQuestionsImages: [
                        '68.svg', '66.svg', '67.svg',
                    ],
                    shortQuestions: [
                        "`What helped you stay focused today?`",
                        "`What part felt tricky to keep going with?`",
                        "`Would it help to take a break or try a different way?`",
                    ],
                    cloudImageClasses: [
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                    ],
                    bottomHeadings: [
                        `With the right environment and calm encouragement, `+ this.childName +` can learn to manage their focus steadily - without losing their natural care and attention to detail.`
                    ],
                },
                S: {
                    topHeadings: [
                        `Children with a Supportive style are often calm and steady in their energy. They may not rush into things or seek out fast-paced activities. Instead, they prefer a gentle pace and may take time to settle into new tasks. This thoughtful rhythm can be helpful in many situations, but it may also mean they need a bit more encouragement to get going or to stay alert during longer tasks.`,
                        this.childName+` is likely to focus best in quiet, structured environments where expectations are clear and pressure is low. If things feel too rushed, noisy, or unpredictable, they might become overwhelmed or shut down.`,
                    ],
                    topHeadingImages: ['61.svg', '62.svg'],
                    commonPatterns: [
                        `Taking longer to start a new task`,
                        `Sticking with tasks once they feel comfortable`,
                        `Becoming distracted if the environment feels unsettled`,
                        `Needing extra reminders to stay focused during longer work`,
                        `Avoiding activities that feel too intense or chaotic`,
                    ],
                    middleHeading: `These behaviours are not signs of laziness or inattention. Most S-style children genuinely want to do well. They simply work best when they feel secure, supported, and unhurried. Gentle prompts and patient encouragement can help them stay focused while still feeling at ease.`,
                    supportPoints: [
                        `Offer quiet spaces and minimise distractions where possible`,
                        `Break work into smaller parts and give time to settle in`,
                        `Use calm, clear reminders like “You’re doing well, just keep going a bit longer”`,
                        `Give positive feedback when they stay focused or finish something`,
                        `Avoid rushing them - instead, guide them with steady encouragement`,
                    ],
                    shortQuestionsImages: [
                        '68.svg', '66.svg', '67.svg',
                    ],
                    shortQuestions: [
                        `What’s helping you stay focused today?`,
                        `Would a short break help before we finish this?`,
                        `What’s the next step you want to take?`
                    ],
                    cloudImageClasses: [
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                    ],
                    bottomHeadings: [
                        `With the right support, `+this.childName+` can learn to manage their attention while staying true to their natural pace. Over time, this helps them become both consistent and confident in how they approach tasks.`
                    ],
                },
                IS: {
                    topHeadings: [
                        `Children with an IS style are usually calm, steady, and socially engaged. They tend to stay focused when the environment feels friendly, familiar, and low-pressure. They may not be the most energetic in the room, but they often stay on task quietly - especially when they know someone is counting on them.`,
                        `Distractions can come from social interactions or emotional shifts. If someone around them is upset, or if they’re feeling uncertain themselves, it may affect their ability to stay present. They may also drift off during long or repetitive tasks, especially if they aren’t sure of the purpose.`
                    ],
                    topHeadingImages: ['61.svg', '62.svg'],
                    commonPatterns: [
                        `Focusing well when others are nearby or involved`,
                        `Becoming distracted by emotions or changes in routine`,
                        `Struggling to re-engage after being interrupted`,
                        `Needing encouragement to stay with less engaging tasks`,
                        `Responding best to praise, warmth, and routine`,
                    ],
                    middleHeading: `These behaviours aren’t signs of laziness - they reflect a need for emotional security and encouragement. When they feel calm and supported, they are often quietly consistent and dependable.`,
                    supportPoints: [
                        `Create routines that feel familiar and structured`,
                        `Offer gentle reminders or soft prompts without pressure`,
                        `Let them talk briefly before settling into a task`,
                        `Break longer jobs into smaller steps with visible progress`,
                        `Use encouragement to highlight focus and follow-through`,
                    ],
                    shortQuestionsImages: [
                        '68.svg', '66.svg', '67.svg',
                    ],
                    shortQuestions: [
                        `What helped you stay focused today?`,
                        `Was there a moment you felt distracted?`,
                        `What made this task easier to stick with?`
                    ],
                    cloudImageClasses: [
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                    ],
                    bottomHeadings: [
                        `With the right emotional support and structure, `+this.childName+` can build strong focus habits - staying calm and steady even when things change around them.`
                    ],
                },
                ID: {
                    topHeadings: [
                        `Children with an <b>ID style</b> are often full of energy, enthusiasm, and movement. They prefer fast-paced tasks, social interaction, and activities that feel fun or goal-oriented. When something catches their interest, they may become deeply involved - but their focus may fade quickly if it feels repetitive, slow, or too structured.`,
                        this.childName+` is likely to concentrate best when the task feels exciting and when they can see quick progress. They may struggle with tasks that require quiet focus or lots of detail, especially without breaks or encouragement. Distractions are common - especially in busy environments or when they’re surrounded by people to talk to.`
                    ],
                    topHeadingImages: ['61.svg', '62.svg'],
                    commonPatterns: [
                        `Starting with lots of energy but losing focus quickly`,
                        `Needing reminders to finish what they started`,
                        `Getting distracted by sounds, people, or new ideas`,
                        `Enjoying group work more than solo or silent tasks`,
                        `Disengaging when the task feels too slow or repetitive`,
                    ],
                    middleHeading: `These behaviours aren’t about a lack of ability - they reflect a need for variety, movement, and engagement. The goal is not to remove their energy, but to help them manage it more effectively.`,
                    supportPoints: [
                        `Break tasks into short, engaging segments`,
                        `Use timers or mini-deadlines to keep momentum`,
                        `Provide opportunities for movement or short resets`,
                        `Let them begin with the creative or social part of a task`,
                        `Celebrate when they show focus and finish something well`
                    ],
                    shortQuestionsImages: [
                        '68.svg', '66.svg', '67.svg',
                    ],
                    shortQuestions: [
                        `What part do you want to start with today?`,
                        `What will help you stay focused for the next five minutes?`,
                        `What’s something you’d like to finish before we stop?`
                    ],
                    cloudImageClasses: [
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                    ],
                    bottomHeadings: [
                        `With the right balance of structure and flexibility, `+this.childName+` can learn how to manage their energy in a way that supports focus - without losing their natural drive and enthusiasm.`
                    ],
                },
                I: {
                    topHeadings: [
                        `Children with an <b>Influential style</b> are often lively and full of personality. They enjoy talking, sharing stories, and connecting with others. This natural enthusiasm can be a great strength. It helps them build friendships easily, bring energy into group settings, and stay engaged in things that feel fun or social. However, this same energy can sometimes make it harder to stay focused, especially during quiet, repetitive, or solitary tasks.`,
                        this.childName+` is likely to show great concentration when the activity feels exciting, creative, or involves other people. These moments bring out their imagination and spark. But when the task feels dull, overly structured, or does not include social interaction, their attention might begin to wander.`
                    ],
                    topHeadingImages: ['61.svg', '62.svg'],
                    commonPatterns: [
                        `Chatting during quiet work time`,
                        `Losing interest in long or detailed instructions`,
                        `Forgetting what they were meant to be doing`,
                        `Needing reminders to stay on task`,
                        `Getting distracted by what others are doing`,
                    ],
                    middleHeading: `These behaviours are not about being disobedient. Most I-style children want to do well. They just find it easier to focus when something feels enjoyable or expressive. They benefit from environments that allow movement, discussion, and some room for creativity, while gently helping them build attention skills.`,
                    supportPoints: [
                        `Use tasks with a creative or playful element when possible`,
                        `Set short time limits or use timers to help with focus`,
                        `Break longer tasks into fun, bite-sized chunks`,
                        `Give reminders in a light, positive tone`,
                        `Celebrate their focus with praise like, “I saw you really concentrate on that”`
                    ],
                    shortQuestionsImages: [
                        '68.svg', '66.svg', '67.svg',
                    ],
                    shortQuestions: [
                        `What helped you stay focused on that task?`,
                        `Would music or drawing help you stay on track right now?`,
                        `What’s the first thing you want to finish before your break?`
                    ],
                    cloudImageClasses: [
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                    ],
                    bottomHeadings: [
                        `With the right support, `+this.childName+` can learn to balance their creativity and energy with focus and follow-through. Over time, this helps them become not just expressive and fun, but steady and dependable too.`
                    ],
                },
                DI: {
                    topHeadings: [
                        `Children with a <b>DI style</b> are often full of energy, ideas, and enthusiasm. They like to move quickly, start tasks straight away, and talk through what they’re doing. This high energy can be exciting and productive - but it can also lead to distractions, unfinished work, or jumping from one thing to the next without slowing down.`,
                        this.childName+` is likely to focus best when there’s variety, movement, or a chance to lead. Tasks that feel repetitive, too quiet, or overly detailed may lead to boredom or frustration. They may also struggle to sit still or follow through when the excitement fades.`
                    ],
                    topHeadingImages: ['61.svg', '62.svg'],
                    commonPatterns: [
                        `Starting with lots of energy, but drifting off before finishing`,
                        `Getting distracted by sounds, people, or their own ideas`,
                        `Needing reminders to stay on task`,
                        `Enjoying fast-paced or group-based activities`,
                        `Finding it hard to stay focused when things feel too slow`
                    ],
                    middleHeading: `These behaviours are not signs of laziness or carelessness. Most DI-style children want to succeed - they just need support in pacing themselves and managing their energy in productive ways.`,
                    supportPoints: [
                        `Use timers, checklists, or mini-deadlines to keep them on track`,
                        `Add movement breaks or opportunities to reset between tasks`,
                        `Break tasks into shorter chunks with visible progress`,
                        `Let them start with the fun or creative part before moving to details`,
                        `Praise focus and effort, especially when they stick with something until the end`
                    ],
                    shortQuestionsImages: [
                        '68.svg', '66.svg', '67.svg',
                    ],
                    shortQuestions: [
                        `What’s helping you stay focused right now?`,
                        `What will help you finish the next part?`,
                        `Do you want to take a quick break and come back to it?`
                    ],
                    cloudImageClasses: [
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                    ],
                    bottomHeadings: [
                        `With the right balance of structure and flexibility, `+this.childName+` can learn to direct their energy and attention in ways that feel focused, fulfilling, and true to who they are.`
                    ],
                },
                DC: {
                    topHeadings: [
                        `Children with a <b>DC style</b> often focus well when the task is clear, meaningful, and under their control. They like working independently and may become fully absorbed in something that challenges them intellectually. They are less likely to be distracted by others - but may become restless or resistant if the task feels too slow, repetitive, or disorganised.`,
                        this.childName+` is likely to concentrate best when they feel prepared and when their environment is structured. They may dislike interruptions or last-minute changes, and they may lose focus if they feel the task isn’t worth their time or effort.`
                    ],
                    topHeadingImages: ['61.svg', '62.svg'],
                    commonPatterns: [
                        `Staying focused when tasks are logical or results-based`,
                        `Disengaging if something feels too easy or repetitive`,
                        `Getting frustrated with distractions or unclear instructions`,
                        `Wanting to work alone or in quiet settings`,
                        `Finding it difficult to restart once concentration is broken`,
                    ],
                    middleHeading: `These behaviours aren’t about a lack of attention - they’re usually a reflection of their need for clarity, control, and purpose. Supporting this while gently building patience and adaptability helps them succeed in a wider range of situations.`,
                    supportPoints: [
                        `Offer quiet, structured environments where possible`,
                        `Give clear goals and allow space for independent work`,
                        `Use checklists or visual guides to help them track progress`,
                        `Break up longer tasks with short, focused breaks`,
                        `Gently challenge them to complete less exciting parts, even if they resist`
                    ],
                    shortQuestionsImages: [
                        '68.svg', '66.svg', '67.svg',
                    ],
                    shortQuestions: [
                        `What part of this feels easiest to start with?`,
                        `Do you want to do this in your way or follow a step-by-step?`,
                        `What’s one thing you want to finish before we stop?`
                    ],
                    cloudImageClasses: [
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                    ],
                    bottomHeadings: [
                        `With support, `+this.childName+` can learn to manage their energy in a way that balances intensity with flexibility - helping them stay focused, even when things don’t go exactly to plan.`
                    ],
                },
                C: {
                    topHeadings: [
                        `Children with a <b>Cautious style</b> are often quiet and focused by nature. They may not appear overly energetic, but they usually concentrate well when they know what’s expected. These children tend to settle into tasks that feel structured and clear, especially if they can work at their own pace.`,
                        this.childName+` is likely to do best in calm, tidy environments where they aren’t rushed. They may become distracted or shut down if the space feels chaotic, noisy, or unpredictable. Sudden changes can interrupt their concentration more than external noise.`
                    ],
                    topHeadingImages: ['61.svg', '62.svg'],
                    commonPatterns: [
                        `Preferring quiet, orderly workspaces`,
                        `Becoming unsettled by sudden changes in plans`,
                        `Taking a long time to start, but focusing well once settled`,
                        `Wanting to finish one thing before moving on`,
                        `Avoiding noisy or high-energy group activities`,
                    ],
                    middleHeading: `These behaviours are not about being slow or disinterested. Most C-style children want to do things properly and need the right conditions to focus. With the right environment and rhythm, they are often the most thorough and consistent workers in the group.`,
                    supportPoints: [
                        `Offer a tidy, quiet space to work or play`,
                        `Let them focus on one task at a time`,
                        `Use clear visual lists to show what’s expected`,
                        `Avoid changing plans suddenly where possible`,
                        `Praise them when they stick with something or show calm focus`
                    ],
                    shortQuestionsImages: [
                        '68.svg', '66.svg', '67.svg',
                    ],
                    shortQuestions: [
                        `What’s helping you focus right now?`,
                        `Is there anything we can move to help you get started?`,
                        `Would it help to take a short break before the next part?`
                    ],
                    cloudImageClasses: [
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                    ],
                    bottomHeadings: [
                        `With support, `+this.childName+` can learn to manage their attention and energy in thoughtful, effective ways. Over time, this helps them become not just focused, but confident and capable when it matters most.`
                    ],
                },
                CS: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['61.svg', '62.svg'],
                    commonPatterns: [

                    ],
                    middleHeading: ``,
                    supportPoints: [

                    ],
                    shortQuestionsImages: [
                        '68.svg', '66.svg', '67.svg',
                    ],
                    shortQuestions: [

                    ],
                    cloudImageClasses: [
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                    ],
                    bottomHeadings: [

                    ],
                },
                CD: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['61.svg', '62.svg'],
                    commonPatterns: [

                    ],
                    middleHeading: ``,
                    supportPoints: [

                    ],
                    shortQuestionsImages: [
                        '68.svg', '66.svg', '67.svg',
                    ],
                    shortQuestions: [

                    ],
                    cloudImageClasses: [
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                    ],
                    bottomHeadings: [

                    ],
                },
                D: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['61.svg', '62.svg'],
                    commonPatterns: [

                    ],
                    middleHeading: ``,
                    supportPoints: [

                    ],
                    shortQuestionsImages: [
                        '68.svg', '66.svg', '67.svg',
                    ],
                    shortQuestions: [

                    ],
                    cloudImageClasses: [
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                        'cloud-image-1',
                        'cloud-image-2',
                        'cloud-image-3',
                    ],
                    bottomHeadings: [

                    ],
                },
            }
        }
    },
    methods: {
        getshortQuestionsImagePath(index) {
            return '/images/second-term/kids-disc-images/' + this.reportData[this.discStyle]?.shortQuestionsImages[index];
        },
        getTopHeadingImagePath(index) {
            return '/images/second-term/kids-disc-images/' + this.reportData[this.discStyle]?.topHeadingImages[index];
        },
        getCloudImageClassByIndex(index) {
            return this.reportData[this.discStyle]?.cloudImageClasses[index];
        },
    },
};
</script>


<style>
.board-image {
    background-image: url("/images/second-term/kids-disc-images/22.svg");
    background-size: 990px;
    background-position: center;
    background-repeat: no-repeat;
}

.cloud-image-1 {
    background-image: url("/images/second-term/kids-disc-images/68.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.cloud-image-2 {
    background-image: url("/images/second-term/kids-disc-images/66.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.cloud-image-3 {
    background-image: url("/images/second-term/kids-disc-images/67.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>
