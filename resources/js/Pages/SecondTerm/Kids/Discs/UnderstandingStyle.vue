<template>
    <div class="flex flex-col justify-center items-center mt-4 px-4">
        <div class="w-full relative mb-10 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold">Understanding the {{ discStyle }} Style</h1>
        </div>
    </div>

    <div id="report-content" class="report-content">
        <div class="p-6 pt-0">
            <div class="row p-6">
                <div class="col-12">
                    <p v-for="topHeading in reportData[discStyle]?.topHeadings" class="mb-4">
                        {{ topHeading }}
                    </p>
                </div>
            </div>
            <div class="row p-6">
                <h4 class="mb-4 font-bold text-blue-800">
                    Some common traits of the {{ discStyle }} style include:
                </h4>
                <div class="col-6">
                    <ul class="list-disc space-y-3">
                        <li v-for="commonTrait in reportData[discStyle]?.commonTraits.slice(0,3)">
                            {{ commonTrait }}
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain" :src="'/images/second-term/kids-disc-images/12.svg'"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="row p-6">
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-64 h-auto object-contain" :src="'/images/second-term/kids-disc-images/14.svg'"
                            alt="" />
                    </div>
                </div>
                <div class="col-6">
                    <ul class="list-disc space-y-3">
                        <li v-for="commonTrait in reportData[discStyle]?.commonTraits.slice(3, commonTraitsLength)">
                            {{ commonTrait }}
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <p v-for="bottomHeadings in reportData[discStyle]?.bottomHeadings" class="mb-4">
                        {{ bottomHeadings }}
                    </p>
                </div>
                <div class="col-6">
                    <div class="flex justify-center items-center">
                        <img class="w-96 h-auto object-contain" :src="'/images/second-term/kids-disc-images/13.svg'"
                            alt="" />
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
    name: 'UnderstandingStyle',
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
                        `Children with an SI style are warm, friendly, and easy to be around. They tend to enjoy
                        connecting with others and often care deeply about keeping people happy. These children like to
                        feel included and valued, and they often bring a mix of kindness and enthusiasm to the spaces
                        they’re in.`,
                        `They are usually more focused on harmony than leadership, and they enjoy group activities that
                        feel familiar, encouraging, and positive. While they may be naturally social and expressive,
                        they also prefer things to go smoothly and might shy away from conflict or high-pressure
                        settings.`
                    ],
                    commonTraits: [
                        `Being gentle, kind, and friendly with others`,
                        `Enjoying group play and working with people they trust`,
                        `Preferring things to stay calm, fair, and familiar`,
                        `Wanting to be liked and included by others`,
                        `Speaking up in a relaxed setting, but holding back when unsure`,
                        `Worrying about hurting feelings or doing something wrong`,
                    ],
                    bottomHeadings: [
                        `These children do best in environments that feel emotionally safe and socially engaging.`,
                        `They may need encouragement to speak up when things feel unfair or to try new things without worrying too much about others’ opinions.`,
                        `With steady encouragement, ` + this.childName + ` can become someone who connects with others in thoughtful, meaningful ways - while also learning to speak up and shine with growing confidence.`,
                    ],
                },
                SC: {
                    topHeadings: [
                        `Children with an SC style are calm, thoughtful, and steady. They tend to prefer routines, quiet environments, and tasks that are clear and well-organised. These children are careful with their words and actions and usually take their time before trying something new. They are dependable and gentle, often putting effort into doing things properly and avoiding mistakes.`,
                        `They may not speak up unless they feel very sure, and they usually avoid conflict or sudden changes. While they are often very capable, they may need encouragement to believe in themselves and to feel confident trying new approaches.`,
                    ],
                    commonTraits: [
                        `Working quietly and carefully`,
                        `Preferring predictability and structure`,
                        `Being cautious with new or unfamiliar tasks`,
                        `Avoiding loud, rushed, or high-pressure situations`,
                        `Wanting to do things correctly and avoid getting things wrong`,
                        `Showing kindness through consistency rather than big gestures`,
                    ],
                    bottomHeadings: [
                        `These children do best when given clear expectations, calm encouragement, and time to think. They may need gentle support in expressing their ideas, managing change, and accepting that getting something wrong is part of learning.`,
                        `With steady guidance, `+ this.childName +` can grow into someone who is quietly confident, dependable, and thoughtful - bringing care and precision to everything they do.`
                    ],
                }
            }
        };

    },
    computed: {
        commonTraitsLength () {
            return this.reportData[this.discStyle]?.commonTraits.length;
        }
    },


};
</script>
