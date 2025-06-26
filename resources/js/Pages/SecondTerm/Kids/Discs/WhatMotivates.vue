<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">What Motivates Them Most</h1>
        </div>
    </div>

    <div>
        <div class="p-6 pt-0">
            <div class="row p-6">
                <div class="col-6">
                    <p class="mb-4" v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index">
                        <span v-html="topHeading"></span>
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/21.svg'"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="row p-6">
                <div class="col-6">
                    <h4 class="mb-4 font-bold text-blue-800">
                        Here are a few things that tend to motivate an {{ discStyle }}-style child:
                    </h4>
                    <ul class="list-disc space-y-3">
                        <li v-for="(motivationPoint, index) in reportData[discStyle]?.motivationPoints?.slice(0, 3)">
                            {{ motivationPoint }}
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/24.svg'"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="row p-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/23.svg'"
                            alt="" />
                    </div>
                </div>
                <div class="col-6 flex items-center">
                    <ul class="list-disc space-y-3">
                        <li v-for="(motivationPoint, index) in reportData[discStyle]?.motivationPoints?.slice(3, reportData[discStyle]?.motivationPoints?.length)">
                            {{ motivationPoint }}
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-6 flex items-center">
                    <p class="mb-4"
                        v-for="(motivationPointsBottomHeading, index) in reportData[discStyle]?.motivationPointsBottomHeadings"
                        :key="index">
                        <span v-html="motivationPointsBottomHeading"></span>
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/25.svg'"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="row p-6">
                <div class="col-12">
                    <p class="mb-4 font-bold" v-for="(finalBottomHeading, index) in reportData[discStyle]?.finalBottomHeadings"
                        :key="index">
                        <span v-html="finalBottomHeading"></span>
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
    name: 'WhatMotivates',
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
                        `Children with an <b>SI style</b> are motivated by connection, encouragement, and feeling part of
                        something.`,

                        `They enjoy working and playing with others in ways that feel safe, familiar, and positive. They
                        are
                        more likely to feel energised when the environment is warm and inclusive - and when people are
                        kind to one another.`,

                        ` They’re less driven by competition or attention, and more by the desire to be accepted, liked,
                        and
                        helpful. When they feel emotionally safe and appreciated, they’re often consistent, cheerful,
                        and
                        willing to try.`,
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    motivationPoints: [
                        `Being part of a calm, friendly group or activity`,
                        `Receiving encouragement for their kindness and effort`,
                        `Doing tasks where they can help others or work as a team`,
                        `Knowing their ideas are welcomed without pressure`,
                        `Playing in familiar settings with people they trust`,
                        `Feeling seen and supported by adults and peers`,
                    ],
                    motivationPointsBottomHeadings: [
                        this.childName + ` is likely to feel most energised when they know they’re valued and included. They
                        respond well to kind words, soft encouragement, and a chance to contribute in low-pressure
                        situations.`
                    ],
                    finalBottomHeadings: [
                        `The key is to balance their need for security with encouragement to try new things and express
                        themselves. When ` + this.childName + ` feels cared for and gently challenged, motivation tends to grow
                        naturally.`
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an SC style are motivated by calm environments, clear expectations, and a sense of routine. They feel more comfortable when they know what to expect, and they often take quiet pride in doing things properly. They are less motivated by rewards or praise in front of others and more by personal satisfaction in a job done well.`,
                        `They’re also encouraged by kindness and consistency. If they feel rushed or uncertain, motivation may drop - but when they’re supported patiently and given time to adjust, they’re often steady and dependable.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    motivationPoints: [
                        `Having clear, step-by-step instructions`,
                        `Knowing what’s expected and having time to prepare`,
                        `Being trusted to work quietly and independently`,
                        `Gentle encouragement without pressure`,
                        `Getting things “right” or feeling well-prepared`,
                        `Familiar people and familiar routines`,
                    ],
                    motivationPointsBottomHeadings: [
                        this.childName + ` is likely to feel most energised when the environment feels calm and predictable. They are not driven by competition or attention, but by a desire to feel competent, prepared, and at ease.`,
                    ],
                    finalBottomHeadings: [
                        `The key is to help them feel safe while also encouraging small steps outside of their comfort zone. When ` + this.childName + ` feels secure and supported, motivation builds steadily.`
                    ],
                },
                S: {
                    topHeadings: [
                        `Children with a Supportive (S) style are often driven by stability and connection. They like to feel safe, included, and valued for who they are. `,
                        `They may not always speak up or seek attention, but they care deeply about being part of the group and making a positive difference`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    motivationPoints: [
                        `Feeling appreciated and trusted by adults and peers`,
                        `Having a clear, familiar routine they can rely on`,
                        `Being asked to help or contribute in a kind, respectful way`,
                        `Knowing what to expect before something begins`,
                        `Working alongside others without pressure or competition`,
                        `Feeling part of a peaceful, friendly environment`,
                    ],
                    motivationPointsBottomHeadings: [
                        this.childName+` is likely to feel most motivated when they are part of something steady and supportive. Sudden changes, loud settings, or rushed demands may cause them to pull back or feel unsure.`
                    ],
                    finalBottomHeadings: [
                        `You’ll often find that `+this.childName+` shows quiet dedication when things feel calm and consistent - whether they’re helping a friend, following through on a responsibility, or being a reliable presence in a group.`,
                        `The key is to support their steady nature while gently building confidence and independence. When `+this.childName+` feels secure and encouraged, motivation tends to come naturally.`,
                    ],
                },
                IS: {
                    topHeadings: [
                        `Children with an IS style are motivated by connection, kindness, and feeling included. They enjoy being part of a group, helping others, and making people smile. <br><br> They are more driven by relationships than competition, and they often feel happiest when everyone around them is getting along.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    motivationPoints: [
                        `Being part of a team or close group`,
                        `Receiving praise for being kind, helpful, or thoughtful`,
                        `Doing tasks where they can work with others`,
                        `Feeling liked and included by both adults and peers`,
                        `Knowing that their efforts have made someone else feel good`,
                        `Having routines or activities that feel familiar and low-pressure`,
                    ],
                    motivationPointsBottomHeadings: [
                        `These children are more likely to engage when the activity feels friendly and encouraging. They may not respond well to pressure or high-stakes challenges, but they do well when they feel appreciated and supported.`
                    ],
                    finalBottomHeadings: [
                        this.childName+` is likely to feel most energised when they’re surrounded by warmth and encouragement. They enjoy light, positive environments where people are kind to each other and where their efforts are recognised - especially when they’ve helped someone else.`,
                        `The key is to support their natural empathy while also encouraging independence. When `+this.childName+` feels accepted and valued, motivation tends to come naturally.`
                    ],
                },
                ID: {
                    topHeadings: [
                        `Children with an <b>ID style</b> are motivated by fun, challenge, and attention. They like to be active, involved, and in the spotlight - especially when they feel excited about what they’re doing. These children are driven by both social connection and personal achievement. They want to enjoy themselves, but they also like to win, lead, or make an impact.`,
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    motivationPoints: [
                        `Being trusted to lead or make choices`,
                        `Fun, playful learning environments with interaction`,
                        `Getting praise or recognition from adults or peers`,
                        `Doing something new, bold, or slightly competitive`,
                        `Being the one to start something or share their idea first`,
                        `Knowing they’ve made others smile or taken the lead`,
                    ],
                    motivationPointsBottomHeadings: [
                        `They may lose interest if things feel too repetitive or too controlled. Instead, they’re more motivated by tasks that are fast-paced, social, and offer space for creativity or decision-making.`
                    ],
                    finalBottomHeadings: [
                        this.childName+` is likely to feel most energised when the task is lively and they feel seen. They enjoy making others laugh, impressing people with their ideas, and turning activities into something exciting.`,
                        `The key is to balance their enthusiasm with support around finishing tasks and listening to others. When `+this.childName+` feels involved and appreciated, motivation tends to come naturally.`
                    ],
                },
                I: {
                    topHeadings: [
                        `Children with an <b>Influential (I) style</b> are often driven by connection and creativity. They like to feel included, appreciated, and excited about what they’re doing. This doesn’t mean they always need to be the centre of attention, but they do want to feel involved and valued by the people around them.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    motivationPoints: [
                        `Being part of a group or team activity`,
                        `Having space to talk, share, and express themselves`,
                        `Being recognised for their ideas or effort`,
                        `Doing tasks that feel fun, colourful, or new`,
                        `Getting to be imaginative or use their creativity`,
                        `Feeling liked and connected to others`,
                    ],
                    motivationPointsBottomHeadings: [
                        this.childName+` is likely to feel most energised when they are able to enjoy what they’re doing in a lively or social setting. Long, repetitive tasks or quiet, solo work may lead to boredom or distraction.`
                    ],
                    finalBottomHeadings: [
                        `You’ll often find that `+this.childName+` pushes forward when there’s a sense of fun or connection - whether it’s working on a project with others, leading part of a performance, or chatting through an idea.`,
                        `The key is to balance this enthusiasm with encouragement around focus and follow-through. When `+this.childName+` feels excited, noticed, and part of something, motivation naturally follows.`
                    ],
                },
                DI: {
                    topHeadings: [
                        `Children with a <b>DI style</b> are often driven by challenge, recognition, and excitement. They like to feel in charge, but they also want things to be fun and engaging. These children enjoy fast results and visible progress - especially when others are watching or involved. They may not be motivated by quiet routines or tasks that feel too repetitive or slow.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    motivationPoints: [
                        `Leading group activities or being given responsibility`,
                        `Competing or trying to be first, fastest, or best`,
                        `Getting praise for ideas, effort, or confidence`,
                        `Doing tasks that feel fun, fast, or dynamic`,
                        `Being noticed and included in decision-making`,
                        `Feeling that they’re achieving something meaningful`,
                    ],
                    motivationPointsBottomHeadings: [
                        this.childName+` is likely to feel most energised when they’re challenged, included, and able to take action. They thrive in fast-moving, social environments where they can stand out and make an impact.`
                    ],
                    finalBottomHeadings: [
                        `You’ll often find that `+this.childName+` puts in the most effort when there’s a goal to reach, a group to lead, or an audience to impress. They may lose interest if they feel bored, unseen, or restricted by too many rules.`,
                        `The key is to balance their need for excitement with reminders to slow down and stick with tasks that take time. When `+this.childName+` feels recognised and involved, motivation often follows naturally.`
                    ],
                },
                DC: {
                    topHeadings: [
                        `Children with a <b>DC style</b> are motivated by challenges that are clear, structured, and meaningful. They like to feel in control, know exactly what’s expected, and see that there’s a purpose behind what they’re doing. These children enjoy setting goals, solving problems, and working towards results - especially when they can do it independently and efficiently.`,
                        `They are less likely to be motivated by group praise or fun for fun’s sake. Instead, they prefer a sense of achievement, precision, or progress. If something feels too vague, slow, or disorganised, they may lose interest or take over the task themselves.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    motivationPoints: [
                        `Working on tasks that feel challenging and purposeful`,
                        `Knowing the rules, expectations, and end goal in advance`,
                        `Being allowed to do things in their own way`,
                        `Receiving recognition for high-quality work or smart thinking`,
                        `Having space to work independently without distractions`,
                        `Seeing progress or results from their effort`,
                    ],
                    motivationPointsBottomHeadings: [
                        this.childName+` is likely to feel most energised when they can focus without interruption, and when they know their effort is respected. They may not show excitement in obvious ways, but completing something well often brings quiet pride and motivation to do more.`
                    ],
                    finalBottomHeadings: [
                        `You’ll often find that `+this.childName+` puts in their best effort when the task has clear value and they feel trusted to lead it their way. With the right kind of challenge and structure, they’re likely to push themselves to do things thoroughly - and on their own terms.`,
                        `The key is to balance their need for structure and control with encouragement to stay open, flexible, and collaborative. When `+this.childName+` feels trusted and challenged, motivation tends to follow naturally.`
                    ],
                },
                C: {
                    topHeadings: [
                        `Children with a <b>Cautious (C) style</b> are often driven by clarity, order, and knowing exactly what’s expected of them. They enjoy tasks that allow them to focus, work carefully, and get things right. They don’t usually seek attention or praise, but they do take pride in producing high-quality work or following rules properly.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    motivationPoints: [
                        `Clear instructions with step-by-step guidance`,
                        `Tasks that involve sorting, building, or problem-solving`,
                        `Having time to prepare before beginning something new`,
                        `Quiet, organised environments where they can focus`,
                        `Being given space to work independently`,
                        `Knowing that accuracy and quality are valued`,
                    ],
                    motivationPointsBottomHeadings: [
                        this.childName+` is likely to feel most comfortable and motivated when things feel structured, calm, and predictable. Sudden changes or unclear expectations may make them nervous or hesitant to begin.`
                    ],
                    finalBottomHeadings: [
                        `You’ll often find that `+this.childName+` pushes forward when they feel confident in the plan - whether it’s following a project outline, building something from a guide, or working through a task they understand well.`,
                        `The key is to support their natural precision while helping them become more confident trying new things and working through small uncertainties. When `+this.childName+` feels prepared and supported, motivation follows.`
                    ],
                },
                CS: {
                    topHeadings: [
                        `Children with a <b>CS style</b> are most motivated when they feel calm, prepared, and supported. They enjoy environments where expectations are clear, routines are consistent, and people are kind. They aren’t usually driven by competition or excitement - they are more focused on doing things correctly and helping in quiet, meaningful ways.`,
                        `They may not seek attention or praise, but they do value feeling secure and appreciated. They’re often motivated by the chance to do something well and to be helpful without being rushed.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    motivationPoints: [
                        `Having clear rules, steps, or instructions`,
                        `Being trusted to complete tasks on their own`,
                        `Knowing that they’re doing something “the right way”`,
                        `Feeling calm, unhurried, and emotionally safe`,
                        `Receiving gentle encouragement or quiet praise`,
                        `Being helpful in familiar or routine settings`
                    ],
                    motivationPointsBottomHeadings: [
                        this.childName+` is likely to feel most energised when tasks are steady and the environment feels predictable. They don’t need loud praise or bold rewards - just a sense of consistency and calm confidence in what they’re doing.`
                    ],
                    finalBottomHeadings: [
                        `The key is to support their steady nature while gently encouraging them to try new things at their own pace. When `+this.childName+` feels secure, motivation builds slowly - and lasts.`
                    ],
                },
                CD: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    motivationPoints: [

                    ],
                    motivationPointsBottomHeadings: [

                    ],
                    finalBottomHeadings: [

                    ],
                },
                D: {
                    topHeadings: [

                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    motivationPoints: [

                    ],
                    motivationPointsBottomHeadings: [

                    ],
                    finalBottomHeadings: [

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
