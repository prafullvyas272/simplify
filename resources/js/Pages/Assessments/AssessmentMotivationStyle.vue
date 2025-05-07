<template>

    <div class="w-full mt-10 leading-7 ">
        <div class="mt-10" v-html="this.assessment.intro"></div>
    </div>


    <div class="w-full leading-5  mt-20 gap-10 flex flex-row flex-wrap">
        <div class="w-[45%] li_layout space-y-5" v-for="single in this.assessment.details" >
            <h4 class="text-xl font-bold capitalize ">{{single.key}}</h4>
            <p>{{single.description}}</p>
            <div class="li_layout" v-html="single.value"></div>
        </div>
    </div>

    <div class="mt-10">
        <p> By aligning with these motivational drivers, you can maximize your potential and stay engaged. Recognize what fuels your drive and seek opportunities that match your motivational style.</p>
    </div>


    <div class="w-full flex flex-col space-y-5 mt-20">
        <h1 class="text-3xl font-bold capitalize">
            {{$page.props.auth.user.first_name}}'s Basic Style - Visual Chart
        </h1>
        <p>The following section shows your "Basic Style" in the form of a visual chart. The areas in <span class="bg-amber-100 font-bold">BOLD</span> show how you behave most naturally. The following section contains insights into your basic motivation and behavior.
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
                    style="writing-mode: sideways-lr; "
                ><p  class="pl-16">High Trait Behaviour </p> </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.high_traits.includes('a')}">
                    <p>Tends to act Assertive</p>
                    <p>Likes Control</p>
                    <p>Dislikes Losing</p>
                    <p class="!border-0">Guard against Anger</p>
                </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.high_traits.includes('b')}">
                    <p>Tends to act Persuasive</p>
                    <p>Likes Approval</p>
                    <p>Dislikes Rejection</p>
                    <p class="!border-0">Guard against Placing Blame</p>
                </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.high_traits.includes('c')}">
                    <p>Tends to act Patient</p>
                    <p>Likes Routine</p>
                    <p>Dislikes Change</p>
                    <p class="!border-0">Guard against Nonparticipation</p>
                </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.high_traits.includes('d')}">
                    <p>Tends to act Contemplative</p>
                    <p>Likes Standards</p>
                    <p>Dislikes Being Wrong</p>
                    <p class="!border-0">Guard against Criticism</p>
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
                <td class="  text-center text-2xl break-words h-52  uppercase text-blue-300"
                    style="
                writing-mode: sideways-lr; ">
                        <p class="pl-16">Low Trait Behaviour </p>
                   </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.low_traits.includes('a')}">
                    <p>Tends to act Cooperative</p>
                    <p>Likes Harmony</p>
                    <p>Dislikes Confrontation</p>
                    <p class="!border-0">Guard against Indifference</p>
                </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.low_traits.includes('b')}">
                    <p>Tends to act Unemotional</p>
                    <p>Likes Logic</p>
                    <p>Dislikes Illogical Actions</p>
                    <p class="!border-0">Guard against Suspicion</p>
                </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.low_traits.includes('c')}">
                    <p>Tends to act Responsive</p>
                    <p>Likes Variety</p>
                    <p>Dislikes Status Quo</p>
                    <p class="!border-0">Guard against Impatience</p>
                </td>

                <td class="!p-0 [&_:is(p)]:w-full [&_:is(p)]:py-4 [&_:is(p)]:px-2 [&_:is(p)]:border-b-2 [&_:is(p)]:border-gray-300  align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.low_traits.includes('d')}">
                    <p>Tends to act Free Spirited</p>
                    <p>Likes Non- structure</p>
                    <p>Dislikes Conforming</p>
                    <p class="!border-0">Guard against Emotion</p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>



</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentMotivationStyle",
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
