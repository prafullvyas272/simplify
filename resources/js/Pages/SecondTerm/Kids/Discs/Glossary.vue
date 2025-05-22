<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">
                Glossary – Understanding the DISC Styles
            </h1>
        </div>
    </div>
    <div class="p-6 pt-0">
        <div class="row p-6">
            <div class="col-12">
                <p class="mb-4">
                    The DISC model is a useful way to understand how children think, behave, and relate to the world around them. Each letter in DISC represents a different personality style. Most children show traits from more than one style, but one is usually more dominant.
                </p>
            </div>
        </div>
        <div class="flex flex-wrap p-6">
            <div class="w-full md:w-1/2 flex justify-center">
                <img
                    class="w-240 max-h-[1800px] object-contain"
                    :src="'/images/second-term/kids-disc-images/115.svg'"
                    alt=""
                />
            </div>
            <div class="w-full md:w-1/2 flex items-center">
                <div class="space-y-7">
                    <p>
                        These children are bold, confident, and action-focused. They enjoy taking charge, making decisions, and getting things done. They often like competition and respond well to challenges. Children with a Dominant style may need support in slowing down, listening to others, and working within a team.
                    </p>
                    <p>
                        These children are friendly, energetic, and enthusiastic. They enjoy talking, making new friends, and being in social settings. They often bring fun and excitement to group activities. Influential children may need support in staying focused, following instructions, and thinking things through before acting.
                    </p>
                    <p>
                        Supportive children are calm, caring, and loyal. They value harmony and are often the ones who help others, share easily, and enjoy steady routines. They like to feel safe and connected. These children may need encouragement to speak up for themselves, take risks, or adapt to change more confidently.
                    </p>
                    <p>
                        Cautious children are thoughtful, precise, and detail-oriented. They like things to be done properly and enjoy understanding rules, systems, or how things work. They may be more reserved and prefer to observe before getting involved. Children with this style may need help letting go of perfection and making decisions when things feel uncertain.
                    </p>
                </div>
            </div>
        </div>
        <div class="row p-6">
            <div class="col-12">
                <p class="mb-4">
                    All DISC styles are equally valuable. This model simply helps us better understand your child’s natural preferences so that we can support their learning, confidence, and development in the most effective way.
                </p>
            </div>
        </div>
    </div>
</template>

<style scoped>
.chart {
    height: 600px;
}

.board-image {
    background-image: url("/images/second-term/kids-disc-images/9.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import "../../../../../css/reports.css";

export default {
    name: "Glossary",
    layout: SecondTermAssessmentTypes,
    props: {
        childName: String,
        style: String,
        image: String,
    },
};
</script>
