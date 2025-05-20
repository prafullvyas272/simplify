<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">
                What is the DISC Personality Framework?
            </h1>
        </div>
    </div>
    <div class="p-6 pt-0">
        <div class="row p-6">
            <div class="col-12">
                <p class="">
                    The DISC model is a simple and helpful way to understand how
                    people behave, make decisions, and interact with others. It
                    groups personality traits into four main styles:
                </p>
                <div class="">
                    <div class="flex justify-center">
                        <img
                            class="w-full object-contain"
                            :src="'/images/second-term/kids-disc-images/5.svg'"
                            alt=""
                        />
                    </div>
                </div>
                <p class="mb-4">
                    Children may show clear signs of one main style, or they may
                    blend traits from two styles. These patterns often appear in
                    how they play, learn, solve problems, and connect with
                    others.
                </p>
                <p class="mb-4 font-bold">
                    The DISC framework doesn’t label or limit a child - it’s
                    simply a way to better understand their natural preferences,
                    so we can guide and support them more effectively. The aim
                    is not to change their personality, but to meet them where
                    they are and help them shine.
                </p>
            </div>
        </div>
    </div>
</template>

<style>
.chart {
    height: 600px;
}
</style>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import '../../../../../css/reports.css';

export default {
    name: "DiscPersonalityFramework",
    layout: SecondTermAssessmentTypes,
    props: {
        childName: String,
        style: String,
        image: String,
    },
};
</script>
