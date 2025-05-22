<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">How They Express Themselves</h1>
        </div>
    </div>

    <!-- SI: Supportive-Influential -->
    <div v-if="discStyle === 'SI'" id="SI" class="SI">
        <div class="p-6 pt-0">
            <div class="row p-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/26.svg'"
                            alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <p class="mb-4">
                        Children with an <b>SI style</b> tend to express themselves in gentle, friendly, and supportive
                        ways.
                        They usually speak with warmth and kindness, and they often think about how their words will
                        make others feel. They enjoy talking with people they trust and may open up more in familiar or
                        one-on-one situations.
                    </p>
                    <p class="mb-4">
                        While they often have good ideas and strong feelings, they may hold back if they think it might
                        cause disagreement or make someone uncomfortable. They’re more likely to agree or stay quiet
                        than to speak up in situations that feel tense or unfamiliar.
                    </p>
                </div>

            </div>
            <div class="row p-6">
                <div class="col-6">
                    <h4 class="mb-4 font-bold text-blue-800">
                        What you might notice about [Child’s Name]'s communication style:
                    </h4>
                    <ul class="list-disc space-y-3">
                        <li>
                            Speaks kindly and calmly, especially in relaxed settings
                        </li>
                        <li>
                            Enjoys talking when the group is friendly and familiar
                        </li>
                        <li>
                            May avoid expressing disagreement or strong opinions
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/27.svg'"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="row p-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/28.svg'"
                            alt="" />
                    </div>
                </div>
                <div class="col-6 flex items-center">
                    <ul class="list-disc space-y-3">
                        <li>
                            Tends to check how others are feeling during conversations
                        </li>
                        <li>
                            Opens up more when they feel emotionally safe
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="mb-4">
                        These children benefit from reassurance that their voice matters. They don’t need to be louder
                        or more forceful - just supported in knowing it’s okay to share their thoughts even when others
                        may not agree.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-6">
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/29.svg'"
                        alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/30.svg'"
                        alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/31.svg'"
                        alt="" />
                </div>
                <div class="flex justify-center items-center">
                    <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/32.svg'"
                        alt="" />
                </div>
            </div>

            <div class="row p-6">
                <div class="col-12">
                    <h4 class="mb-4 font-bold text-blue-800">
                        Encouraging thoughtful conversations can include:
                    </h4>
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

            <div class="row p-6">
                <div class="col-12">
                    <p class="mb-4">
                        With the right support, [Child’s Name] can learn to communicate clearly and kindly - building
                        confidence in their voice while continuing to care for those around them.
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
    name: 'HowTheyExpress',
    layout: SecondTermAssessmentTypes,
    props: {
        childName: String,
        discStyle: String,
    },
};
</script>


<style>
.board-image {
    background-image: url("/images/second-term/kids-disc-images/33.svg");
    background-size: 930px;
    background-position: center;
    background-repeat: no-repeat;
}
</style>