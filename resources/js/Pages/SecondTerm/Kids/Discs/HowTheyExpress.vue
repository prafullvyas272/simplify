<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">
                How They Express Themselves
            </h1>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="row p-6">
            <div class="col-6">
                <div class="flex justify-center items-center">
                    <img class="w-120 h-auto object-contain" :src="'/images/second-term/kids-disc-images/26.svg'"
                        alt="" />
                </div>
            </div>
            <div class="col-6">
                <p class="my-4" v-for="(topHeading, index) in reportData[discStyle]?.topHeadings" :key="index">
                    <span v-html="topHeading"></span>
                </p>
            </div>
        </div>
        <div class="row p-6">
            <div class="col-6">
                <h4 class="mb-4 font-bold text-blue-800">
                    What you might notice about {{ childName }}'s communication
                    style:
                </h4>
                <ul class="list-disc space-y-3">
                    <li v-for="(noticePoint, index) in reportData[discStyle]?.noticePoints?.slice(0, 3)">
                        {{ noticePoint }}
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
                    <li
                        v-for="(noticePoint, index) in reportData[discStyle]?.noticePoints?.slice(3, reportData[discStyle]?.noticePoints?.length)">
                        {{ noticePoint }}
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="my-4" v-for="(noticePointBottomHeading, index) in reportData[discStyle]?.noticePointBottomHeadings" :key="index">
                    <span v-html="noticePointBottomHeading"></span>
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-6">
            <div class="flex justify-center items-center">
                <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/29.svg'" alt="" />
            </div>
            <div class="flex justify-center items-center">
                <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/30.svg'" alt="" />
            </div>
            <div class="flex justify-center items-center">
                <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/31.svg'" alt="" />
            </div>
            <div class="flex justify-center items-center">
                <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/32.svg'" alt="" />
            </div>
        </div>

        <div class="row p-6">
            <div class="col-12">
                <h4 class="mb-4 font-bold text-blue-800">
                    Encouraging thoughtful conversations can include:
                </h4>
                <div class="row p-6">
                    <div class="col-6 yellow-cloud" v-for="(encouragePoint, index) in reportData[discStyle]?.encouragePoints" :key="index">
                        <div class="relative w-full h-[400px] flex items-center justify-center text-white board-image">
                            <div class="text-black px-4 py-2 rounded">
                                <p class="mb-4 p-4 font-bold text-center">
                                    "<span v-html="encouragePoint"></span>"
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="row p-6">
            <div class="col-12">
                <p class="my-4 font-bold" v-for="(encouragePointBottomHeading, index) in reportData[discStyle]?.encouragePointBottomHeadings" :key="index">
                    <span v-html="encouragePointBottomHeading"></span>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
import SecondTermAssessmentTypes from "@/Layouts/SecondTermAssessmentTypes.vue";
import "../../../../../css/reports.css";

export default {
    name: "HowTheyExpress",
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
                        `Children with an <b>SI style</b> tend to express themselves in gentle, friendly, and supportive ways.
                        They usually speak with warmth and kindness, and they often think about how their words will
                        make others feel. They enjoy talking with people they trust and may open up more in familiar or
                        one-on-one situations.`,

                        `While they often have good ideas and strong feelings, they may hold back if they think it might
                        cause disagreement or make someone uncomfortable. They’re more likely to agree or stay quiet
                        than to speak up in situations that feel tense or unfamiliar.`,
                    ],
                    topHeadingImages: ["87.svg", "88.svg"],
                    noticePoints: [
                        `Speaks kindly and calmly, especially in relaxed settings`,
                        `Enjoys talking when the group is friendly and familiar`,
                        `May avoid expressing disagreement or strong opinions`,
                        `Tends to check how others are feeling during conversations`,
                        `Opens up more when they feel emotionally safe`

                    ],
                    noticePointBottomHeadings: [
                        `These children benefit from reassurance that their voice matters. They don’t need to be louder or more forceful - just supported in knowing it’s okay to share their thoughts even when others may not agree.`
                    ],
                    encouragePoints: [
                        `Asking for their opinion gently and giving them time to answer`,
                        `Letting them practice sharing ideas in low-pressure moments`,
                        `Praising them when they speak up - even if it’s just a small step`,
                        `Reassuring them that speaking honestly won’t hurt their friendships`
                    ],
                    encouragePointBottomHeadings: [
                        `With the right support, ` + this.childName + ` can learn to communicate clearly and kindly - building confidence in their voice while continuing to care for those around them.`
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an SC style are usually soft-spoken and thoughtful in how they communicate. They tend to think before speaking and are unlikely to interrupt or push to be heard. They often express themselves best in quiet settings or one-on-one conversations, especially when they feel safe and prepared.`,
                        `They may avoid speaking up in group situations or when they’re unsure of their answer. If they feel they haven’t done something correctly, they might become more reserved or hesitant to try again.`,
                    ],
                    topHeadingImages: ["87.svg", "88.svg"],
                    noticePoints: [
                        `Speaks gently and prefers to listen before contributing`,
                        `Takes time to think before responding`,
                        `Avoids interrupting or talking over others`,
                        `Shares more in familiar, quiet environments`,
                        `Becomes quiet if worried about being wrong or criticised`
                    ],
                    noticePointBottomHeadings: [
                        `These children benefit from being reminded that their voice matters - even when they aren’t sure. They don’t need to speak louder or more often, but they do benefit from safe opportunities to practice expressing themselves.`,
                    ],
                    encouragePoints: [
                        `Giving them extra time to think before answering`,
                        `Asking for their thoughts in low-pressure situations`,
                        `Praising them for contributing, even if it’s just a small step`,
                        `Letting them rehearse or prepare before group discussions`
                    ],
                    encouragePointBottomHeadings: [
                        `With calm encouragement, `+ this.childName +` can learn to express themselves with quiet confidence - showing that thoughtful voices can be powerful too.`
                    ],
                },
                S: {
                    topHeadings: [
                        `Children with a Supportive style are often more reserved in how they communicate. They may not speak up right away, especially in new or loud environments. Instead, they tend to express themselves through quiet actions, thoughtful comments, or by being a steady presence for others.`,
                        `They are often good listeners and may wait for others to speak before sharing their own thoughts. They might not interrupt, even when they have something important to say. Because they often want to avoid conflict, they may keep their opinions to themselves to keep the peace.`
                    ],
                    topHeadingImages: ["87.svg", "88.svg"],
                    noticePoints: [
                        `Speaks gently and calmly`,
                        `Takes time to respond, especially in groups`,
                        `Chooses words carefully and avoids upsetting others`,
                        `May stay quiet when feeling unsure`,
                        `Expresses care through actions more than words`
                    ],
                    noticePointBottomHeadings: [
                        `Because these children don’t always raise their voices or push their ideas forward, it’s important to create space for them to speak. When they do choose to share, their words are often thoughtful and kind.`
                    ],
                    encouragePoints: [
                        `Giving them time to think before answering questions`,
                        `Asking open-ended questions that show genuine interest`,
                        `Letting them speak in smaller, quieter settings`,
                        `Helping them understand that their opinions matter too`
                    ],
                    encouragePointBottomHeadings: [
                        `With gentle support, `+this.childName+` can feel more confident expressing themselves in different situations - not by changing who they are, but by trusting that their voice is just as important as anyone else’s.`
                    ],
                },
                IS: {
                    topHeadings: [
                        `Children with an IS style are usually warm, friendly, and easy to talk to. They tend to express themselves in a gentle, cheerful way and often enjoy chatting with others - especially when they feel comfortable and accepted. They are often good at sensing how others are feeling and may use kind words or light humour to keep things positive.`,
                        `They may avoid expressing disagreement or strong opinions, especially if they’re worried it might upset someone. If they feel unsure, they might stay quiet or agree with others even when they have something different to say.`
                    ],
                    topHeadingImages: ["87.svg", "88.svg"],
                    noticePoints: [
                        `Friendly and caring when speaking`,
                        `Enjoys talking in small groups or one-on-one`,
                        `May hold back thoughts to avoid disagreement`,
                        `Often speaks with warmth or light humour`,
                        `Wants others to feel comfortable in the conversation`
                    ],
                    noticePointBottomHeadings: [
                        `These children benefit from learning that their voice matters - even when their opinion is different. They don’t need to speak louder or change who they are, but they may need support in learning to speak up with confidence and clarity.`
                    ],
                    encouragePoints: [
                        `Asking open-ended questions and giving them time to respond`,
                        `Praising them when they express their opinion honestly`,
                        `Helping them see that disagreement doesn’t mean conflict`,
                        `Letting them practice speaking up in safe, low-pressure situations`
                    ],
                    encouragePointBottomHeadings: [
                        `With support, `+this.childName+` can learn to use their natural warmth and empathy to communicate clearly - becoming someone who speaks up with kindness and confidence.`
                    ],
                },
            },
        };
    },
    methods: {
        getHelpingIdeasImagePath(index) {
            return (
                "/images/second-term/kids-disc-images/" +
                this.reportData[this.discStyle]?.helpFullIdeas[index].img
            );
        },
        getTopHeadingImagePath(index) {
            return (
                "/images/second-term/kids-disc-images/" +
                this.reportData[this.discStyle]?.topHeadingImages[index]
            );
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
    background-image: url("/images/second-term/kids-disc-images/33.svg");
    background-size: 930px;
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
