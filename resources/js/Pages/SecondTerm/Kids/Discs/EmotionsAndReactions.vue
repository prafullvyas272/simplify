<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Understanding Their Emotions and Reactions</h1>
        </div>
    </div>

    <!-- SI: Supportive-Influential -->
    <div v-if="discStyle === 'SI'" id="SI" class="SI">
        <div class="p-6 pt-0">
            <div class="row p-6">
                <div class="col-12">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/36.svg'"
                            alt="" />
                    </div>
                </div>
                <div class="col-12">
                    <p class="my-4">
                        Children with an SI style often experience emotions deeply and are very aware of how others are
                        feeling too. They care a lot about keeping the atmosphere light and positive, and they’re often
                        the first to comfort a friend or notice when someone seems upset. When they feel calm and
                        connected, their emotions are steady and open.
                    </p>
                    <p class="my-4">
                        However, they may keep their own feelings to themselves if they think it will cause tension.
                        They might pretend to be okay just to keep the peace, or feel quietly upset if they feel left
                        out, ignored, or criticised.
                    </p>
                </div>

            </div>
            <div class="row p-6">
                <div class="col-12">
                    <h4 class="mb-4 font-bold text-blue-800">
                        You might notice:
                    </h4>
                </div>
                <div class="row">
                    <div class="col-1">
                        <div class="flex justify-center items-center">
                            <img class="ball" :src="'/images/second-term/kids-disc-images/37.png'" alt="" />
                        </div>
                    </div>
                    <div class="col-9 flex items-center">
                        <p class="font-bold">
                            Responding gently when others are upset
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <div class="flex justify-center items-center">
                            <img class="ball" :src="'/images/second-term/kids-disc-images/37.png'" alt="" />
                        </div>
                    </div>
                    <div class="col-9 flex items-center">
                        <p class="font-bold">
                            Becoming quieter or withdrawn when something feels off
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <div class="flex justify-center items-center">
                            <img class="ball" :src="'/images/second-term/kids-disc-images/37.png'" alt="" />
                        </div>
                    </div>
                    <div class="col-9 flex items-center">
                        <p class="font-bold">
                            Worrying about how others are feeling or reacting
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <div class="flex justify-center items-center">
                            <img class="ball" :src="'/images/second-term/kids-disc-images/37.png'" alt="" />
                        </div>
                    </div>
                    <div class="col-9 flex items-center">
                        <p class="font-bold">
                            Avoiding emotional conflict, even if they’re struggling inside
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <div class="flex justify-center items-center">
                            <img class="ball" :src="'/images/second-term/kids-disc-images/37.png'" alt="" />
                        </div>
                    </div>
                    <div class="col-9 flex items-center">
                        <p class="font-bold">
                            Needing time and reassurance before sharing how they really feel
                        </p>
                    </div>
                </div>
            </div>
            <div class="row p-6">
                <div class="col-12">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/39.svg'"
                            alt="" />
                    </div>
                </div>
                <div class="col-12 flex items-center">
                    <p class="mb-4">
                        These children benefit from support that helps them express their emotions openly and
                        confidently. They don’t need to change how they feel - just feel safe enough to share and
                        understand their reactions more clearly.
                    </p>

                </div>
                <p class="mb-4 text-blue-400 font-bold">
                    Helping [Child’s Name] understand and name emotions is an important part of their growth. You can
                    support this by:
                </p>
            </div>

            <div class="row p-6">
                <div class="col-12">
                    <div class="row p-6">
                        <div class="col-6 yellow-cloud">
                            <div
                                class="relative w-full h-[400px] flex items-center justify-center text-white board-image">
                                <div class="text-black px-4 py-2 rounded">
                                    <p class="mb-4 font-bold">
                                        "Asking for their opinion gently <br> and giving them time to answer"
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-6 yellow-cloud">
                            <div
                                class="relative w-full h-[400px] flex items-center justify-center text-white board-image">
                                <div class="text-black px-4 py-2 rounded">
                                    <p class="mb-4 font-bold">
                                        "Letting them practice sharing <br>ideas in low-pressure moments"
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row p-6">
                        <div class="col-6 yellow-cloud">
                            <div
                                class="relative w-full h-[400px] flex items-center justify-center text-white board-image">
                                <div class="text-black px-4 py-2 rounded">
                                    <p class="mb-4 font-bold">
                                        "Praising them when they speak up - <br> even if it’s just a small step"
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-6 yellow-cloud">
                            <div
                                class="relative w-full h-[400px] flex items-center justify-center text-white board-image">
                                <div class="text-black px-4 py-2 rounded">
                                    <p class="mb-4 font-bold">
                                        "Reassuring them that speaking honestly <br> won’t hurt their friendships"
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="relative  flex items-center justify-center text-white pink-board-image">
                    <div class="text-black px-4 py-2 rounded">
                        <p class="mb-4 font-bold p-4">
                            With the right support, [Child’s Name] can learn <br> to communicate clearly and kindly -
                            building <br>
                            confidence in their voice while continuing to care for those around them.
                        </p>
                    </div>
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
    name: 'EmotionsAndReactions',
    layout: SecondTermAssessmentTypes,
    props: {
        childName: String,
        discStyle: String,
    },
};
</script>


<style scoped>
.ball {
    height: 58px;
}

.board-image {
    background-image: url("/images/second-term/kids-disc-images/41.svg");
    background-size: 930px;
    background-position: center;
    background-repeat: no-repeat;
}

.pink-board-image {
    background-image: url("/images/second-term/kids-disc-images/42.svg");
    background-size: 1030px;
    background-position: center;
    background-repeat: no-repeat;
}
</style>