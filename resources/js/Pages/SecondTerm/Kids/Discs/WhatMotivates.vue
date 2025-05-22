<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">What Motivates Them Most</h1>
        </div>
    </div>
    <!-- SI: Supportive-Influential -->
    <div v-if="discStyle === 'SI'" id="SI" class="SI">
        <div class="p-6 pt-0">
            <div class="row p-6">
                <div class="col-6">
                    <p class="mb-4">
                        Children with an <b>SI style</b> are motivated by connection, encouragement, and feeling part of
                        something.
                    </p>
                    <p class="mb-4">
                        They enjoy working and playing with others in ways that feel safe, familiar, and positive. They
                        are
                        more likely to feel energised when the environment is warm and inclusive - and when people are
                        kind to one another.
                    </p>
                    <p class="mb-4">
                        They’re less driven by competition or attention, and more by the desire to be accepted, liked,
                        and
                        helpful. When they feel emotionally safe and appreciated, they’re often consistent, cheerful,
                        and
                        willing to try.
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
                        <li>
                            Being part of a calm, friendly group or activity
                        </li>
                        <li>
                            Receiving encouragement for their kindness and effort
                        </li>
                        <li>
                            Doing tasks where they can help others or work as a team
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
                        <li>
                            Knowing their ideas are welcomed without pressure
                        </li>
                        <li>
                            Playing in familiar settings with people they trust
                        </li>
                        <li>
                            Feeling seen and supported by adults and peers
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-6 flex items-center">
                    <p class="mb-4">
                        [Child’s Name] is likely to feel most energised when they know they’re valued and included. They respond well to kind words, soft encouragement, and a chance to contribute in low-pressure situations.
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
                    <p class="mb-4 font-bold">
                        The key is to balance their need for security with encouragement to try new things and express themselves. When [Child’s Name] feels cared for and gently challenged, motivation tends to grow naturally.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- SC: Supportive-Conscientious -->
    <div v-if="discStyle === 'SC'" id="SC" class="SC"></div>

    <!-- S: Supportive -->
    <div v-if="discStyle === 'S'" id="S" class="S"></div>

    <!-- IS: Influential-Supportive -->
    <div v-if="discStyle === 'IS'" id="IS" class="IS"></div>

    <!-- ID: Influential-Dominant -->
    <div v-if="discStyle === 'ID'" id="ID" class="ID"></div>

    <!-- I: Influential -->
    <div v-if="discStyle === 'I'" id="I" class="I"></div>

    <!-- DI: Dominant-Influential -->
    <div v-if="discStyle === 'DI'" id="DI" class="DI"></div>

    <!-- DC: Dominant-Conscientious -->
    <div v-if="discStyle === 'DC'" id="DC" class="DC"></div>

    <!-- D: Dominant -->
    <div v-if="discStyle === 'D'" id="D" class="D"></div>

    <!-- CS: Conscientious-Supportive -->
    <div v-if="discStyle === 'CS'" id="CS" class="CS"></div>

    <!-- CD: Conscientious-Dominant -->
    <div v-if="discStyle === 'CD'" id="CD" class="CD"></div>

    <!-- C: Conscientious -->
    <div v-if="discStyle === 'C'" id="C" class="C"></div>
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
};
</script>
