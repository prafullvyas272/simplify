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
                        `With support, `+this.childName+` can learn to trust their own voice and make decisions with quiet confidence. Their natural care and thoughtfulness can grow into a real strength as they learn to balance kindness with assertiveness.`
                    ],
                },
                IS: {
                    topHeadings: [
                        `Children with an IS style tend to think through how others might feel before making decisions. They are more likely to choose what keeps the peace, includes others, or feels kind - rather than acting quickly or taking risks. They may hesitate to decide if they feel uncertain, or if they’re worried about upsetting someone.`,
                        `These children prefer talking things through in a relaxed, friendly way. They may not enjoy being rushed, and they might change their mind if someone else disagrees. While they don’t usually want to lead, they do want to be part of the group and often go along with what others suggest.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Taking longer to decide, especially in group settings`,
                        `Asking what others think before choosing`,
                        `Worrying about making the “wrong” choice`,
                        `Choosing what feels friendly or fair over what’s bold or different`,
                        `Wanting to feel reassured before acting`,
                    ],
                    noticePointBottomHeading: [
                        `These children benefit from learning how to trust their own ideas and speak up confidently. They don’t need to become louder or more forceful - but they do benefit from knowing that their opinions matter and that it’s okay to stand by their decisions.`
                    ],
                    supportPoints: [
                        `Ask, “What do you think is best?” before offering help`,
                        `Reassure them that it’s okay to get things wrong sometimes`,
                        `Praise decisions made independently, even small ones`,
                        `Help them think through both the kind and the clear choice`,
                        `Remind them that saying no or having a different view is still respectful`
                    ],
                    supportPointBottomHeading: [
                        `With gentle support, `+this.childName+` can become someone who considers others - while also building the courage to decide for themselves with confidence and care.`
                    ],
                },
                ID: {
                    topHeadings: [
                        `Children with an <b>ID style</b> tend to make decisions quickly and confidently. They often rely on their instincts and enthusiasm, acting fast when something seems fun, exciting, or meaningful to them. They may speak their thoughts out loud as they decide, and are usually not afraid to share what they think - even before they’ve worked out every detail.`,
                        `They like to take charge, especially when they feel confident in an idea or approach. However, they may struggle to slow down and consider all the facts, especially if there’s pressure to wait, plan, or follow someone else’s lead.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Jumping into action without hesitation`,
                        `Talking through their thoughts as they decide`,
                        `Choosing bold or exciting options`,
                        `Overlooking small details in a rush to get started`,
                        `Feeling frustrated when others hesitate or ask too many questions`,
                    ],
                    noticePointBottomHeading: [
                        `Their confidence is a strength, but they benefit from learning how to pause, think through their choices, and consider how others may be affected. Decision-making becomes even stronger when they learn to balance their energy with reflection.`
                    ],
                    supportPoints: [
                        `Ask, “What’s your first idea - and what else might work?”`,
                        `Encourage them to take a short pause before acting`,
                        `Talk about possible outcomes without criticising their choices`,
                        `Celebrate when they show patience or listen to another view`
                    ],
                    supportPointBottomHeading: [
                        `With support, `+this.childName+` can learn to make decisions that are not just bold and expressive, but also thoughtful and effective - growing into someone who leads with both heart and head.`
                    ],
                },
                I: {
                    topHeadings: [
                        `Children with an <b>Influential style</b> often think aloud. They like to talk things through, bounce ideas around, and follow where their curiosity takes them. Their decision-making is usually based on what feels fun, exciting, or socially engaging rather than on rules or logic.`,
                        this.childName+` is likely to go with their first idea, especially if it sounds interesting or gets a big reaction from others. They tend to be fast thinkers but may overlook important details or the consequences of their choices in the moment.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Making choices based on feelings or enthusiasm`,
                        `Needing to talk through ideas before deciding`,
                        `Choosing options that are fun or attention-grabbing`,
                        `Struggling with slower, more detailed decisions`,
                        `Being influenced by friends or the people they like`,
                    ],
                    noticePointBottomHeading: [
                        `This style of thinking often leads to creative and spontaneous ideas, but it can also result in impulsive decisions. It helps to give `+this.childName+` time to talk things out, and then gently guide them back to what matters most.`
                    ],
                    supportPoints: [
                        `Ask questions like “What do you think will happen next?” or “How would that make someone else feel?”`,
                        `Use short visual lists or reminders to help them stay on track`,
                        `Let them talk through options, but encourage them to pause before acting`,
                        `Offer choices that feel fun but still have structure built in`
                    ],
                    supportPointBottomHeading: [
                        `Over time, these small habits help build better judgment while still allowing `+this.childName+` to enjoy the freedom and expression they naturally seek.`
                    ],
                },
                DI: {
                    topHeadings: [
                        `Children with a <b>DI style</b> tend to make decisions quickly and confidently. They often trust their instincts and prefer to take action right away rather than spend too long thinking things through. They are motivated by exciting ideas and quick results, and they may not always stop to ask for advice or check all the details before moving ahead.`,
                        `These children enjoy leading and being in control of decisions. At the same time, they like to involve others and share their thoughts out loud. They may be more focused on big-picture outcomes than on step-by-step planning, and they sometimes change their mind if something new sounds more fun or interesting.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Making fast decisions without needing lots of time to think`,
                        `Talking through ideas confidently, even before a plan is clear`,
                        `Jumping into action without asking many questions`,
                        `Choosing exciting or bold options over cautious ones`,
                        `Struggling to pause or wait if others are taking too long`,
                    ],
                    noticePointBottomHeading: [
                        `This confident style helps them stay motivated, but they may need support learning how to think things through more carefully - especially when a decision affects others. Slowing down their thinking, even briefly, can help them make stronger, more thoughtful choices.`
                    ],
                    supportPoints: [
                        `Ask, “What might happen if you try that?” to help them consider the outcome`,
                        `Encourage short pauses before acting, especially in group settings`,
                        `Help them weigh more than one option before moving forward`,
                        `Celebrate when they take time to reflect, not just when they act quickly`
                    ],
                    supportPointBottomHeading: [
                        `With support, `+this.childName+` can learn to balance fast decision-making with thoughtful planning. Their natural confidence and enthusiasm are powerful tools - especially when paired with growing awareness and care.`
                    ],
                },
                DC: {
                    topHeadings: [
                        `Children with a <b>DC style</b> often think before they act - but once they’ve made up their mind, they move forward with confidence. They like to understand the rules, the logic behind something, and whether it will work. Once they’ve decided on a path, they are unlikely to change direction unless given a clear reason.`,
                        `They tend to value accuracy and efficiency. They may ask direct or technical questions, and prefer to figure things out on their own. These children don’t usually enjoy guesswork - they want facts, proof, and clarity before committing to a decision.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Thinking quietly before making a choice`,
                        `Asking smart, specific questions`,
                        `Wanting control over how things are done`,
                        `Preferring logic over emotion in decision-making`,
                        `Sticking to a decision once it’s been made`,
                    ],
                    noticePointBottomHeading: [
                        `This kind of thinking helps them act with certainty, but they may need support when things are unclear or when they’re asked to be flexible. They may also need help understanding that not every choice has a perfect answer - and that sometimes, collaboration matters more than being right.`
                    ],
                    supportPoints: [
                        `Ask, “What do you already know about this?” to help them build on facts`,
                        `Provide clear choices with pros and cons`,
                        `Reassure them that some uncertainty is okay`,
                        `Encourage them to ask questions and explain their reasoning`
                    ],
                    supportPointBottomHeading: [
                        `With guidance, `+this.childName+` can learn to balance careful thinking with flexibility. Their ability to analyse and decide with purpose is a strength - and one that can grow even stronger with time, patience, and a willingness to listen.`
                    ],
                },
                C: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [

                    ],
                    noticePointBottomHeading: [

                    ],
                    supportPoints: [

                    ],
                    supportPointBottomHeading: [

                    ],
                },
                CS: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [

                    ],
                    noticePointBottomHeading: [

                    ],
                    supportPoints: [

                    ],
                    supportPointBottomHeading: [

                    ],
                },
                CD: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [

                    ],
                    noticePointBottomHeading: [

                    ],
                    supportPoints: [

                    ],
                    supportPointBottomHeading: [

                    ],
                },
                D: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [

                    ],
                    noticePointBottomHeading: [

                    ],
                    supportPoints: [

                    ],
                    supportPointBottomHeading: [

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
