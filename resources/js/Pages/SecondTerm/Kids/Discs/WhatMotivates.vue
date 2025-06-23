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
                        Here are a few things that tend to motivate an SI-style child:
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
