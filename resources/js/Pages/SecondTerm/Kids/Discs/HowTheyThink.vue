<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">How They Think and Make Decisions</h1>
        </div>
    </div>

    <!-- SI: Supportive-Influential -->
    <div v-if="discStyle === 'SI'" id="SI" class="SI">
        <div class="p-6 pt-0">
            <div class="row p-6">
                <div class="col-6">
                    <p class="mb-4">
                        Children with an <b>SI style</b> tend to make decisions based on how it will affect others. They often
                        think through what feels fair, kind, or safe, and may choose the option that helps avoid
                        conflict or keeps everyone happy. They are more likely to follow the group or take suggestions
                        from people they trust, rather than make bold, independent choices right away.
                    </p>
                    <p class="mb-4">
                        They often want reassurance that they’re making the right decision and may hesitate if the
                        outcome feels uncertain. While they may share ideas in relaxed settings, they might hold back in
                        unfamiliar or high-pressure situations.
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
                        <li>
                            Taking their time before deciding, especially in a group
                        </li>
                        <li>
                            Looking to friends or adults for confirmation
                        </li>
                        <li>
                            Choosing options that feel kind or familiar
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
                        <li>
                            Avoiding decisions that might lead to disagreement
                        </li>
                        <li>
                            Feeling unsure when asked to decide on the spot
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <p class="mb-4">
                        These children benefit from gentle encouragement to trust their own judgement. They don’t need
                        to become loud decision-makers - just confident that their ideas and instincts are valid.
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
                        <li>
                            Ask, “What feels right to you?” before offering guidance
                        </li>
                        <li>
                            Let them practice making small choices on their own
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
                        <li>
                            Reassure them that it’s okay to try and change their mind later
                        </li>
                        <li>
                            Remind them that good decisions don’t always make everyone happy
                        </li>
                    </ul>
                </div>

            </div>
            <div class="relative w-full h-[500px] flex items-center justify-center text-white board-image">
                <div class="max-w-xl text-center text-black px-4 py-2 rounded">
                    <p class=" font-bold text-black text-inside-box">
                        With the right support, [Child’s Name] can grow into a thoughtful and confident decision-maker —
                        someone who balances care for others with belief in their own voice.
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
    name: 'HowTheyThink',
    layout: SecondTermAssessmentTypes,
    props: {
        childName: String,
        discStyle: String,
    },
};
</script>

<style scoped>
.board-image {
    background-image: url("/images/second-term/kids-disc-images/22.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

</style>
