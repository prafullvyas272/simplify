<template>
    <div class="w-full  pt-10 leading-7 ">
        <div class="mt-10" v-html="this.assessment.intro"></div>
    </div>

    <div class="w-full leading-5  mt-20 gap-10 flex flex-row flex-wrap">
        <div class="w-[45%] li_layout space-y-5" v-for="single in this.assessment.details" >
            <h4 class="text-xl font-bold capitalize ">{{single.key}}</h4>
            <p>{{single.description}}</p>
            <div class="li_layout" v-html="single.value"></div>
        </div>
    </div>

    <div class="w-full  mt-10  py-5 flex flex-row items-center">
        <div class="w-1/12">
            <img src="/images/svg/lightbulb-on.svg" alt="">
        </div>
        <div class="w-5/6">
            <p class="font-bold">Communication Tip:</p>
            <p>Communicate effectively and act intelligently by adapting your words and actions to the personality style of others.</p>
        </div>
    </div>


    <div class="w-full flex flex-col gap-y-5 mt-20">
        <h1 class="text-3xl font-bold">
            Communication Style Chart
        </h1>
        <p>
            The following section shows your "Communication" in the form of a visual chart. The areas in <span class="bg-amber-100 font-bold">BOLD</span> show how you communicate most naturally.
        </p>
    </div>


    <div class="w-full mt-10">
        <table class="table-fixed w-full border-spacing-y-2 ">
            <thead class="bg-sky-100 h-16">
            <tr >
                <th class="w-1/5 bg-sky-100"></th>
                <th class="p-5  w-1/5">Dominant</th>
                <th class="p-5  w-1/5">Inspiring</th>
                <th class="p-5  w-1/5">Supportive</th>
                <th class="p-5  w-1/5">Cautious</th>
            </tr>
            </thead>
            <tbody class="[&_:is(td)]:border-2 [&_:is(td)]:p-2 ">
            <tr class="text-md">
                <td class=" text-center text-2xl break-words h-52  uppercase text-blue-300"
                    style="
                writing-mode: sideways-lr; "><p class="w-full flex items-center h-full">High Trait Behaviour </p> </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.high_traits.includes('a')}">
                    <p>Ideal Environment:<br>Results- oriented</p>
                    <p>Motivated by:<br>Challenges</p>
                    <p>Communication Style:<br>orceful</p>
                    <p class="!border-0">Possible Perception:<br> Pushy</p>
                </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.high_traits.includes('b')}">
                    <p>Ideal Environment:<br> People-oriented</p>
                    <p>Motivated by:<br> Positive Feedback</p>
                    <p>Communication Style:<br> Informal</p>
                    <p class="!border-0">Possible Perception:<br> Talkative</p>
                </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.high_traits.includes('c')}">
                    <p>Ideal Environment:<br> Support- oriented</p>
                    <p>Motivated by:<br> Affirmation</p>
                    <p>Communication Style:<br> Friendly</p>
                    <p class="!border-0">Possible Perception:<br> Weak</p>
                </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.high_traits.includes('d')}">
                    <p>Ideal Environment:<br> Detail-oriented</p>
                    <p>Motivated by:<br> Structure</p>
                    <p>Communication Style:<br> Systematic</p>
                    <p class="!border-0">Possible Perception:<br> Critical</p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="w-full mt-10">
        <table class="table-fixed w-full border-spacing-y-2 ">
            <thead class="bg-sky-100 h-16">
            <tr >
                <th class="w-1/5 bg-sky-100"></th>
                <th class="p-5  w-1/5">Dominant</th>
                <th class="p-5  w-1/5">Inspiring</th>
                <th class="p-5  w-1/5">Supportive</th>
                <th class="p-5  w-1/5">Cautious</th>
            </tr>
            </thead>
            <tbody class="[&_:is(td)]:border-2 [&_:is(td)]:p-2 ">
            <tr class="text-md">
                <td class=" text-center text-2xl break-words h-52  uppercase text-blue-300"
                    style="
                writing-mode: sideways-lr; "><p class="w-full flex items-center h-full">Low Trait Behaviour </p> </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.low_traits.includes('a')}">
                    <p>Ideal Environment:<br> Team-oriented</p>
                    <p>Motivated by:<br> Cooperation</p>
                    <p>Communication Style:<br> Cooperative</p>
                    <p class="!border-0">Possible Perception:<br> Indecisive</p>
                </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.low_traits.includes('b')}">
                    <p>Ideal Environment:<br> Detached</p>
                    <p>Motivated by:<br> Logical Order</p>
                    <p>Communication Style:<br> Logical</p>
                    <p class="!border-0">Possible Perception:<br> Aloof</p>
                </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.low_traits.includes('c')}">
                    <p>Ideal Environment:<br> Flexible</p>
                    <p>Motivated by:<br> Action</p>
                    <p>Communication Style:<br> Responsive</p>
                    <p class="!border-0">Possible Perception:<br> Impatient</p>
                </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.low_traits.includes('d')}">
                    <p>Ideal Environment:<br> Personalized</p>
                    <p>Motivated by:<br> Independence</p>
                    <p>Communication Style:<br> Free-spirited</p>
                    <p class="!border-0">Possible Perception:<br> Unorthodox</p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>






</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentCommunicationStyle",
    layout: AssessmentTypes,
    props:{
        assessment: Object,
        type: String,
    },
}
</script>


<style scoped>

tbody:before {
    content:"@";
    display:block;
    line-height:10px;
    text-indent:-99999px;
}
.li_layout :deep ul {
    list-style: unset;
    max-height: 200px;
    display: grid;
    grid-template-rows: repeat(5, min-content);
    grid-auto-flow: column;
}
.li_layout :deep li::marker {
    color: mediumpurple;
    font-size: 20px;
}

</style>
