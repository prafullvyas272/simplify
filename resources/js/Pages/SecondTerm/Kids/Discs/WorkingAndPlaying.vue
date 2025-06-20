<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Working and Playing With Others</h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="row p-6">
            <div class="col-5">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/75.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-7">
                <div v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index" class="">
                    <p class="my-4">
                        <span v-html="topHeading"></span>
                    </p>
                </div>
            </div>

        </div>
        <div class="row p-6">
            <div class="col-12">
                <div class="flex justify-center items-center">
                    <img class="w-240 h-auto object-contain" :src="'/images/second-term/kids-disc-images/76.svg'"
                        alt="" />
                </div>
            </div>
        </div>
        <div class="row p-6">
            <div class="col-12">
                <h4 class="mb-4 font-bold text-blue-800">
                    You might notice:
                </h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <ul v-for="noticePoint in reportData[discStyle]?.noticePoints" class="col-12 list-disc">
                        <li>
                            <p class="font-bold ml-2 my-2">
                                {{ noticePoint }}
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/77.svg'"
                        alt="" />
                </div>
            </div>
            <div class="row p-6">
                <div class="col-6 flex justify-center items-center">
                    <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/78.svg'"
                        alt="" />
                </div>
                <div class="col-6">
                    <p class="px-2" v-html="reportData[discStyle]?.middleHeading">
                    </p>
                </div>
            </div>
            <div class="col-12">
                <h4 class="mb-4 font-bold text-red-400">
                    To support this:
                </h4>
            </div>
            <div class="row g-4">
                <div v-for="(supportPoint, index) in reportData[discStyle]?.supportPoints" :key="index"
                    class="col-md-4">
                    <div class="box-img d-flex align-items-center justify-content-center text-center p-4"
                        :style="{ backgroundImage: `url(${getSupportImagePath(index)})` }">
                        <span>{{ supportPoint }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="relative w-full h-[400px] flex justify-center text-white board-image font-bold items-center">
            <div class="text-black px-4 py-2 p-20 rounded">
                <p class="mb-4 p-20" v-for="(bottomHeading, index) in reportData[discStyle]?.bottomHeadings" >
                    {{ bottomHeading }}
                </p>

            </div>
        </div>
    </div>
</template>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import "../../../../../css/reports.css";

export default {
    name: 'HowTheyTackle',
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
                        `Children with an SI style are naturally caring, gentle, and people-focused. They enjoy working and playing in groups - especially when the group feels calm, kind, and familiar. They're more likely to include others, follow the rules, and avoid conflict, often helping keep the group atmosphere warm and steady.`,
                        `They may avoid speaking up if someone is being unfair or unkind, not because they don't notice, but because they don't want to upset anyone. They're more likely to go along with the group than push for their own ideas, especially in new or fast-moving settings.`,
                    ],
                    topHeadingImages: ['75.svg'],
                    noticePoints: [
                        `Taking care to include others and keep things fair`,
                        `Supporting teammates or classmates quietly and helpfully`,
                        `Avoiding group conflict or loud disagreements`,
                        `Preferring group roles that are cooperative rather than competitive`,
                        `Holding back their own ideas to keep others happy`
                    ],
                    middleHeading: `These children thrive when their kindness is recognised and when they feel safe to contribute without pressure. They benefit from gentle guidance that helps them share their ideas, speak up when needed, and trust their value in the group. `,
                    supportPoints: [
                        `Create chances to lead in quiet, low-pressure ways`,
                        `Reflect on group time: "What worked well?" or "Did anything feel tricky?"`,
                        `Encourage them to speak up when something doesn't feel fair`,
                        `Praise kindness, but also confidence when they express themselves`,
                        `Remind them that being honest and kind can happen at the same time`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png',
                    ],
                    bottomHeadings: [
                        `With support,` + this.childName + `can grow into someone who brings harmony and care into every group - while also learning to stand up, speak out, and contribute with gentle strength.`
                    ],
                }
            }
        };

    },
    methods: {
        getSupportImagePath(index) {
            return '/images/second-term/kids-disc-images/' + this.reportData[this.discStyle]?.supportPointImages[index];
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
    background-image: url("/images/second-term/kids-disc-images/80.svg");
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