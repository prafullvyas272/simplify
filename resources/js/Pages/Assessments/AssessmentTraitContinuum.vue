<template>
    <!-- <div class="w-full flex">
        <div class="w-full h-64 ">
            <img class="object-center h-full w-full -ml-15 object-cover  " src="/images/assessments/continuum.jpg" alt="">
        </div>
    </div> -->


    <div class="w-full mt-10">
        <table class="table-fixed w-full border-spacing-y-2 ">
            <thead class="text-left bg-sky-100 h-24">
                <tr  >
                    <th class="w-1/5 bg-sky-100 px-2">
                    </th>
                    <th class="w-1/5 bg-sky-100 px-2">
                        <p class="font-bold text-sm"> DOMINANT</p>
                    </th>
                    <th class="w-1/5 bg-sky-100 px-2">
                        <p class="font-bold text-sm"> INSPIRING</p>
                    </th>
                    <th class="w-1/5 bg-sky-100 px-2">
                        <p class="font-bold text-sm"> SUPPORTIVE</p>
                    </th>
                    <th class="w-1/5 bg-sky-100 px-2">
                        <p class="font-bold text-sm"> CAUTIOUS</p>
                    </th>
                </tr>
            </thead>

            <tbody class="[&_:is(td)]:border-2 [&_:is(td)]:p-2  text-center">
            <tr class="text-md">
                <td>MOST PREDOMINANT</td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('a')}">
                    Comfortable working in charge
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('b')}">
                    Comfortable working with people
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('c')}">
                    Comfortable working in a routine
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('d')}">
                    Comfortable working in a defined system
                </td>



            </tr>

            <tr class="text-md">
                <td>VERY HIGH</td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('e')}">
                    commanding, driven, demanding, ambitious, directing, pioneering
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('f')}">
                    inspiring, influential, persuasive, magnetic, stimulating, spontaneous
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('g')}">
                    supportive, dependable, loyal, steady, patient
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('h')}">
                    cautious, meticulous, precise, exacting, accurate, theoretical
                </td>



            </tr>


            <tr class="text-md">
                <td>HIGH</td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('i')}">
                    assertive, bold, risk-taking, challenging, decisive, determined
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('j')}">
                    confident, enthusiastic, expressive, polished, generous, bold
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('k')}">
                    faithful, enduring, persistent, cooperative, kind, relaxed
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('l')}">
                    thorough, analytical, conscientious, proper, diplomatic, tactful
                </td>

            </tr>
            <tr class="text-md">
                <td>AVERAGE</td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('i')}">
                    competitive, convincing, poised, self-assured<br>
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('j')}">
                    charming, sociable, optimistic, engaging<br>
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('k')}">
                    amiable, reliable, stable, adaptable	<br>

                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('l')}">
                    polite, inquisitive, attentive, methodical<br>
                </td>

            </tr>

            </tbody>
        </table>
    </div>

    <div class="w-full flex flex-row my-5 text-center">
        <div class="w-2/5 flex h-8 overflow-hidden text-blue-800 items-center">
            ---------------------------------------------------------------------------------------
        </div>
        <div class="w-1/5 flex h-8 justify-center text-center text-3xl font-bold text-blue-800 items-center">
            MID
        </div>
        <div class="w-2/5  flex h-8 overflow-hidden text-blue-800 items-center">
            ----------------------------------------------------------------------------------------
        </div>

    </div>


    <div class="w-full mt-10">
        <table class="table-fixed w-full border-spacing-y-2 ">
            <tbody class="[&_:is(td)]:border-2 [&_:is(td)]:p-2 text-center ">
            <tr class="text-md">
                <td>AVERAGE</td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('i')}">
                    competitive, convincing, poised, self-assured<br>
                    self-effacing, hesitant, evaluates risks, conservative<br>
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('j')}">
                    charming, sociable, optimistic, engaging<br>
                    open-minded, reflective, assesses, thoughtful<br>
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('k')}">
                    amiable, reliable, stable, adaptable	<br>
                    approachable, alert, flexible, eager

                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('l')}">
                    polite, inquisitive, attentive, methodical<br>
                    self-assured, instinctive, self-convinced, determined
                </td>

            </tr>


            <tr class="text-md">
                <td>LOW</td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('m')}">
                    unassuming, realistic, willing, modest
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('n')}">
                    skeptical, factual, nonemotional, reserved, introspective
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('o')}">
                    available, eager, responsive, tense, adaptable
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('p')}">
                    opinionated, independent, willful, unconventional, emotional, free-spirited
                </td>

            </tr>



            <tr class="text-md">
                <td> Very Low</td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('q')}">
                    analytical, withdrawn, detached, probing, logical, listening
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('r')}">
                    introspective, reflective, thoughtful, observant, contemplative
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('s')}">
                    dependent, avoids confrontation, humble, passive, self-denying
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('t')}">
                    uninhibited, obstinate, fearless, defiant, extreme, self-expressive
                </td>

            </tr>

            <tr class="text-md">
                <td> Low Type</td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('u')}">
                    Comfortable working on a team
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('v')}">
                    Comfortable working alone
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('w')}">
                    Comfortable working spontaneously
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.segments.includes('x')}">
                    Comfortable working instinctively
                </td>

            </tr>



            </tbody>

            <tfoot class="text-left bg-sky-100 h-24">
                <tr >
                    <th class="w-1/5 bg-sky-100 px-2"></th>
                    <th class="w-1/5 bg-sky-100 px-2">
                        <p class="font-bold text-sm"> DOMINANT</p>
                    </th>
                    <th class="w-1/5 bg-sky-100 px-2">
                        <p class="font-bold text-sm"> INSPIRING</p>
                    </th>
                    <th class="w-1/5 bg-sky-100 px-2">
                        <p class="font-bold text-sm"> SUPPORTIVE</p>
                    </th>
                    <th class="w-1/5 bg-sky-100 px-2">
                        <p class="font-bold text-sm"> CAUTIOUS</p>
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>


</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentTraitContinuum",
    layout: AssessmentTypes,
    props:{
        assessment: Object
    },
}
</script>


<style scoped>
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
