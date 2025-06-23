<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Helping Them Set and Stick to Goals</h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="row p-6">
            <div class="col-4">
                <div class="flex justify-center items-center">
                    <img class="w-64 h-auto object-contain" :src="'/images/second-term/kids-disc-images/71.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-8">
                <div v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index" class="">
                    <p class="my-4">
                        <span v-html="topHeading"></span>
                    </p>
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
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/72.svg'"
                        alt="" />
                </div>
            </div>
            <div class="row p-6">
                <div class="col-12 flex items-center">
                    <p class="px-2">
                        {{ reportData[discStyle]?.middleHeading }}
                    </p>
                </div>
            </div>
            <div class="col-12">
                <h4 class="mb-4 font-bold text-blue-800">
                    How to support {{ childName }}:
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
        <div class="row p-6">
            <div class="col-4">
                <div class="flex">
                    <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/74.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-8">
                <div v-for="(bottomHeading, index) in reportData[discStyle]?.bottomHeadings" :key="index" class="">
                    <p class="my-4 font-bold">
                        <span v-html="bottomHeading"></span>
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
                        `Children with an SI style are usually happy to work towards a goal - especially when it feels manageable, familiar, and supported by the people around them. They're often more focused on doing something kind or cooperative than aiming to "win" or be the best. Their goals may be quiet and personal rather than bold or competitive.`
                    ],
                    topHeadingImages: ['71.svg', '70.svg'],
                    noticePoints: [
                        `Enjoying small goals tied to helping others or building connection`,
                        `Staying committed when the environment is steady and kind`,
                        `Drifting if a task feels uncertain or lacks encouragement`,
                        `Preferring to reach goals alongside others rather than alone`,
                        `Hesitating to set goals that feel too ambitious or unfamiliar`,
                    ],
                    middleHeading: `They benefit from goals that are broken into steps, supported by praise, and grounded in emotional security. They may not ask for attention, but they often appreciate being noticed and encouraged throughout the process. `,
                    supportPoints: [
                        `Use gentle goal-setting conversations: "What's something you'd like to try this week?"`,
                        `Break larger goals into smaller, trackable steps`,
                        `Reflect often: "What part felt easiest?" or "What helped you keep going?"`,
                        `Encourage with kindness: "You didn't give up - that matters."`,
                        `Help them set goals that feel both personal and achievable`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png', '153.png', '154.png',
                    ],
                    bottomHeadings: [
                        `They may lose momentum if they don't feel encouraged or if the task becomes confusing or emotionally unsettled. They can also struggle to stay focused on longer-term goals without regular check-ins or gentle reminders.`,
                        `Over time, with support and structure, ` + this.childName + ` can learn that reaching a goal isn't about speed or being the loudest - it's about taking one steady, confident step at a time.`
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an SC style are naturally steady and committed when they feel secure in what they’re doing. They often prefer smaller, manageable goals that follow a clear process. They are less likely to set bold or ambitious targets on their own, but they tend to stick with tasks quietly and patiently - especially when they know what’s expected.`
                    ],
                    topHeadingImages: ['71.svg', '70.svg'],
                    noticePoints: [
                        `Setting gentle, realistic goals with clear steps`,
                        `Wanting support before starting something new`,
                        `Needing more time to feel confident in their ability`,
                        `Becoming stuck if unsure about how to begin`,
                        `Working best with encouragement and clear milestones`,
                    ],
                    middleHeading: `These children benefit from clear plans and quiet check-ins. Encouraging progress over perfection - and helping them reflect on what’s going well - can make a big difference in how they approach longer tasks. `,
                    supportPoints: [
                        `Set small, achievable goals with a clear path`,
                        `Use visual aids or charts to show progress`,
                        `Ask, “What’s one step you can take today?”`,
                        `Celebrate effort and improvement, not just final results`,
                        `Reflect often with prompts like, “What helped you keep going?” or “What would you try next time?”`
                    ],
                    supportPointImages: [
                        '150.png', '151.png', '152.png', '153.png', '154.png', '150.png', '151.png', '152.png', '153.png', '154.png',
                    ],
                    bottomHeadings: [
                        `They may be reluctant to set goals that feel too unfamiliar or risky, and they can lose momentum if they aren’t sure how to begin. They may also spend too long perfecting something rather than progressing through it.`,
                        `With support, `+ this.childName +` can build strong habits around goal-setting - learning that progress is about showing up and growing steadily, not racing to the finish.`
                    ],
                },
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
