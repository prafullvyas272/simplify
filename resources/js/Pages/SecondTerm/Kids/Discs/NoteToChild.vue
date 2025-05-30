<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">
                A Note to [Child’s Name]
            </h1>
        </div>
    </div>
    <div class="p-6 pt-0">
        <div class="flex flex-wrap p-6">
            <div class="w-full md:w-1/2 flex justify-center">
                <img
                    class="w-full max-h-[400px] object-contain"
                    :src="'/images/second-term/kids-disc-images/7.png'"
                    alt=""
                />
            </div>
            <div class="w-full md:w-1/2 flex items-center">
                <div class="space-y-4">
                    <p>Hi [Child’s Name]!</p>
                    <p>
                        This report is all about you - the way you think, the
                        way you do things, and the way you show up in the world.
                    </p>
                    <p>
                        Everyone is different, and that’s what makes us special.
                        Some people like to talk a lot, some like to think
                        carefully before they speak.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap p-6">
            <div class="w-full md:w-1/2 flex items-center">
                <div class="space-y-4">
                    <p class="">
                        Some like to take the lead, while others like to help
                        from behind the scenes. There’s no right or wrong - just
                        different ways to be amazing.
                    </p>
                    <p class="mb-4">
                        By understanding more about your personality, you’ll
                        start to notice what helps you learn, play, and feel
                        your best.
                    </p>
                    <p class="mb-4">
                        This report will show you some of the things you’re
                        really good at, and also give you a few ideas for what
                        you can work on as you grow.
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex justify-center">
                <img
                    class="w-full max-h-[400px] object-contain"
                    :src="'/images/second-term/kids-disc-images/8.png'"
                    alt=""
                />
            </div>
        </div>
        <div
            class="relative w-full h-[400px] flex items-center justify-center text-white board-image">
            <div class="text-black px-4 py-2 rounded">
                <p class="mb-4">
                    <b>Remember:</b> you don’t need to be like everyone else.
                    You just need to be the best version of yourself.
                </p>
                <p class="mb-4">
                    Let’s find out more about the way you think, act, and learn
                    - and how to make the most of it.
                </p>
            </div>
        </div>
    </div>
</template>

<style>
.chart {
    height: 600px;
}

.board-image {
    background-image: url("/images/second-term/kids-disc-images/9.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import "../../../../../css/reports.css";

export default {
    name: "NoteToChild",
    layout: SecondTermAssessmentTypes,
    props: {
        childName: String,
        style: String,
        image: String,
    },
};
</script>
