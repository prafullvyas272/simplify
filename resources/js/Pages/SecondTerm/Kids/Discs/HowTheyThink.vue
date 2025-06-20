<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">How They Think and Make Decisions</h1>
        </div>
    </div>

    <div>
        <div class="p-6 pt-0">
            <div class="row p-6">
                <div class="col-6">
                    <p class="my-4" v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index">
                        <span v-html="topHeading"></span>
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
                        <li v-for="(noticePoint, index) in reportData[discStyle]?.noticePoints?.slice(0, 3)">
                            {{ noticePoint }}
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
                        <li v-for="(noticePoint, index) in reportData[discStyle]?.noticePoints?.slice(3, reportData[discStyle]?.noticePoints?.length)">
                            {{ noticePoint }}
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <p class="mb-4">
                        {{ reportData[discStyle]?.noticePointBottomHeading[0] }}
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
                        <li v-for="(supportPoint, index) in reportData[discStyle]?.supportPoints?.slice(0, 2)">
                            {{ supportPoint }}
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
                        <li v-for="(supportPoint, index) in reportData[discStyle]?.supportPoints?.slice(2, reportData[discStyle]?.supportPoints?.length)">
                            {{ supportPoint }}
                        </li>
                    </ul>
                </div>

            </div>
            <div class="relative w-full h-[500px] flex items-center justify-center text-white board-image">
                <div class="max-w-xl text-center text-black   rounded">
                    <p class=" font-bold text-black text-inside-box">
                        {{ reportData[discStyle]?.supportPointBottomHeading[0] }}
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
    name: 'HowTheyThink',
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
                        `Children with an <b>SI style</b> tend to make decisions based on how it will affect others. They often
                        think through what feels fair, kind, or safe, and may choose the option that helps avoid
                        conflict or keeps everyone happy. They are more likely to follow the group or take suggestions
                        from people they trust, rather than make bold, independent choices right away.`,
                        `They often want reassurance that they’re making the right decision and may hesitate if the
                        outcome feels uncertain. While they may share ideas in relaxed settings, they might hold back in
                        unfamiliar or high-pressure situations.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    noticePoints: [
                        `Taking their time before deciding, especially in a group`,
                        `Looking to friends or adults for confirmation`,
                        `Choosing options that feel kind or familiar`,
                        `Avoiding decisions that might lead to disagreement`,
                        `Feeling unsure when asked to decide on the spot`,
                    ],
                    noticePointBottomHeading: [
                        `These children benefit from gentle encouragement to trust their own judgement. They don’t need to become loud decision-makers - just confident that their ideas and instincts are valid.`
                    ],
                    supportPoints: [
                        `Ask, “What feels right to you?” before offering guidance`,
                        `Let them practice making small choices on their own`,
                        `Reassure them that it’s okay to try and change their mind later`,
                        `Remind them that good decisions don’t always make everyone happy`,
                    ],
                    supportPointBottomHeading: [
                        `With the right support, [Child’s Name] can grow into a thoughtful and confident decision-maker - someone who balances care for others with belief in their own voice.`
                    ],
                }
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
