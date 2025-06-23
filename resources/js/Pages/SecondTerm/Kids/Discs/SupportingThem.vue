<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Supporting Them in the Classroom
            </h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="row p-6" v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index">
            <template v-if="(index % 2 == 0)">
                <div class="col-6">
                    <p class="my-4">
                        <span v-html="topHeading"></span>
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" :src="getTopHeadingImagePath(index)" alt="" />
                    </div>
                </div>
            </template>
            <template v-if="(index % 2 != 0)">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" :src="getTopHeadingImagePath(index)" alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <p class="my-4">
                        <span v-html="topHeading"></span>
                    </p>
                </div>
            </template>
        </div>
        <div class="row p-6">
            <div class="col-12">
                <h4 class="px-2 mb-4 font-bold text-blue-800">
                    What teachers might notice:
                </h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <ul v-for="teacherMightNotice in reportData[discStyle]?.teacherMightNotices"
                        class="col-12 list-disc">
                        <li>
                            <p class="font-bold ml-2 my-2">
                                {{ teacherMightNotice }}
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/89.svg'"
                        alt="" />
                </div>
            </div>
        </div>
        <div class="row p-6">
            <div
                class="relative w-full h-[400px] flex justify-center items-center text-white board-image font-bold px-5 pt-5">
                <div class="text-black px-4 py-2 rounded text-center">
                    <p class="mb-4">
                        {{ reportData[discStyle]?.boardImageText }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row p-6">
            <div class="col-12">
                <h4 class="px-2 mb-4 font-bold text-blue-800">
                    Ways teachers and parents can work together to support {{ childName }}:
                </h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <ul v-for="teacherParentSupportPoint in reportData[discStyle]?.teacherParentSupportPoints"
                        class="col-12 list-disc">
                        <li>
                            <p class="font-bold ml-2 my-2">
                                {{ teacherParentSupportPoint }}
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/91.svg'"
                        alt="" />
                </div>
            </div>
        </div>
        <div class="row p-6">
            <div
                class="relative w-full h-[400px] flex justify-center items-center text-white board-image-2 font-bold px-5 pt-5">
                <div class="text-black px-20 py-2 rounded text-center">
                    <div class="px-20">
                        <p class="mb-4 px-20" v-for="(bottomHeading, index) in reportData[discStyle]?.bottomHeadings"
                        :key="index">
                        {{ bottomHeading }}
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import "../../../../../css/reports.css";

export default {
    name: 'SupportingThem',
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
                        `In school, children with an SI style are often kind, steady, and well-liked by their peers. They tend to follow routines, help others, and keep the atmosphere calm and friendly. They are more likely to work quietly and cooperatively than to compete or push for attention. Teachers often describe them as reliable and warm, especially when they feel emotionally secure in the classroom.`,
                        this.childName +  ` might be the child who checks on a friend, gently encourages others, or keeps group activities running smoothly. However, they may avoid speaking up when they're unsure, and they might hold back ideas if the group is loud or the task feels unfamiliar.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    teacherMightNotices: [
                        `Gentle participation and kind behaviour in class`,
                        `A preference for familiar tasks and steady routines`,
                        `Avoiding conflict or fast-paced, competitive settings`,
                        `Needing encouragement to take initiative`,
                        `Offering quiet support to others without drawing attention to themselves`,
                    ],
                    boardImageText: `These children benefit from a stable classroom environment where their strengths are noticed and their confidence is gently built. They may not ask for support, but regular encouragement helps them grow both socially and academically.`,
                    teacherParentSupportPoints: [
                        `Give roles that encourage quiet leadership (e.g. class monitor, group organiser)`,
                        `Provide consistent praise for effort, kindness, and quiet contribution`,
                        `Invite them to share ideas in smaller groups or one-on-one settings`,
                        `Offer structured opportunities to try new things with support`,
                        `Keep communication open about how they're feeling and engaging`,
                    ],
                    bottomHeadings: [
                        `When supported well, SI-style children often become the dependable glue of the classroom - encouraging others, contributing steadily, and helping to build a culture of respect and kindness.`
                    ],
                },
                SC: {
                    topHeadings: [
                        `In school, children with an SC style are often quiet, respectful, and reliable. They usually enjoy structured lessons, clear expectations, and a calm learning environment. They may not draw attention to themselves, but they’re likely to follow the rules and complete their work carefully and thoroughly.`,
                        this.childName + ` might not be the first to raise their hand, but they’re often paying close attention and trying hard to do things the right way. If the classroom becomes noisy, unpredictable, or emotionally tense, they may withdraw or lose focus. They may also hesitate to ask for help, even if they’re unsure.`
                    ],
                    topHeadingImages: ['87.svg', '88.svg'],
                    teacherMightNotices: [
                        `A preference for quiet, steady work over loud or fast-paced tasks`,
                        `Needing extra time to warm up to new activities or people`,
                        `Avoiding situations where they might be wrong or embarrassed`,
                        `Responding best to calm, structured routines`,
                        `Being thoughtful and consistent, but not always confident`,
                    ],
                    boardImageText: `These children thrive in classrooms where clear expectations are paired with calm encouragement. They benefit from having time to prepare, safe ways to contribute, and a sense that their effort is seen and appreciated.`,
                    teacherParentSupportPoints: [
                        `Give advance notice about changes in schedule or expectations`,
                        `Use structured group work with defined roles`,
                        `Offer praise privately or in one-on-one settings`,
                        `Encourage participation in smaller groups or pairs before whole-class tasks`,
                        `Keep communication open about how they’re coping with class routines and tasks`
                    ],
                    bottomHeadings: [
                        `When supported with kindness and clarity, SC-style children often become quietly confident learners - focused, dependable, and able to bring care and consistency to everything they do.`
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
    background-image: url("/images/second-term/kids-disc-images/86.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.board-image-2 {
    background-image: url("/images/second-term/kids-disc-images/92.svg");
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