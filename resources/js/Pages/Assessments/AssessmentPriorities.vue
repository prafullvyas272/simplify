<template>

    <div class="w-full  pt-10 leading-7 ">
        <div class="mt-10" v-html="this.assessment.intro"></div>
    </div>

    <p class="mt-10">
        Understanding your decision-making style can help you become more successful in balancing the issues involved in a situation while interacting with the people who are affected by your decisions.
    </p>


    <div class="mt-10 space-y-5">
        <h3 class="text-3xl font-bold">Priorities</h3>
        <div class="li_layout" v-html="this.assessment.priorities" ></div>
    </div>


    <div class="mt-10 space-y-5">
        <h3 class="text-3xl font-bold">Decision Style</h3>
        <div class="li_layout" v-html="this.assessment.decision_style" ></div>
    </div>


    <div class="mt-10 space-y-5">
        <h3 class="text-3xl font-bold">How You Make Decisions</h3>
        <div class="li_layout" v-html="this.assessment.how_to_decision" ></div>
    </div>


    <div class="mt-10 space-y-5">
        <h3 class="text-3xl font-bold">Common Perceptions</h3>
        <div class="li_layout" v-html="this.assessment.perception" ></div>
    </div>


    <div class="mt-10">
        <p>By understanding and leveraging your priorities and decision-making style, you can enhance your effectiveness and ensure that your actions align with your goals and objectives.</p>
    </div>


    <div class="w-full flex flex-col gap-y-5 mt-20">
        <h1 class="text-3xl font-bold">
            Priorities and Decision Style Chart
        </h1>
        <p>
            The following section shows your "Priorities and Decision-Making Style" in the form of a visual chart. The areas in <span class="bg-[#fef7ef]  font-bold">BOLD</span>  show how you tend to process decisions most naturally,
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
            <tbody class="[&_:is(td)]:border-2  text-center ">
            <tr class="text-md">
                <td class=" text-center text-2xl break-words h-52  uppercase text-blue-300"
                    style="
                writing-mode: sideways-lr; "> <p class="pl-16">High Trait Behaviour </p> </td>
                <td class=" align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.high_traits.includes('a')}">
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                        Your priority is: <br> Power to act
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                        So you: <br> Decide
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">In order to: <br>  Solve problems
                    </p>
                    <p class="w-full py-2">
                        Because you Focus on:<br> The goal
                    </p>
                </td>
                <td class=" align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.high_traits.includes('b')}">
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                        Your priority is: <br> People involvement
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                        So you: <br> Interact
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">In order to: <br>  Persuade others
                    </p>
                    <p class="w-full py-2">
                        Because you Focus on:<br> The popular
                    </p>
                </td>
                <td class=" align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.high_traits.includes('c')}">
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                        Your priority is: <br> Predictability
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                        So you: <br> Seek stability
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">In order to: <br>   Keep status-quo
                    </p>
                    <p class="w-full py-2">
                        Because you Focus on:<br> The accepted
                    </p>
                </td >
                <td class=" align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.high_traits.includes('d')}">
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                        Your priority is: <br> Procedure
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                        So you: <br> Seek facts
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">In order to: <br> Uphold principles
                    </p>
                    <p class="w-full py-2">
                        Because you Focus on:<br> Focus on the rules
                    </p>

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
            <tbody class="[&_:is(td)]:border-2  text-center">
            <tr class="text-md">
                <td class=" text-center text-2xl break-words h-52  uppercase text-blue-300"
                    style="
                writing-mode: sideways-lr; "> <p class="pl-16 ">Low Trait Behaviour </p> </td>
                <td class="mx-0 px-0 align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.low_traits.includes('a')}">
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                        Your priority is: <br>
                        Yielding to Power
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                        So you: <br> Participate
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">In order to: <br> Be a Team Player
                    </p>

                    <p class="w-full  py-2">
                        Because you Focus on:<br> The Team
                    </p>



                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.low_traits.includes('b')}">
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                        Your priority is: <br>
                        ess People Involvement
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                        So you: <br> Isolate
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">In order to: <br>  Be Self-Persuaded
                    </p>
                    <p class="w-full py-2">
                        Because you Focus on:<br> The Logic
                    </p>
                </td>
                <td class="align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.low_traits.includes('c')}">
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                    Your priority is: <br>
                    Not Predictability
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                        So you: <br> Spontaneous
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">In order to: <br>  Promote Change
                    </p>
                    <p class="w-full  py-2">
                        Because you Focus on:<br> The Innovation
                    </p>
                </td>
                <td class=" align-top" :class="{'bg-[#fef7ef] font-bold': this.assessment.low_traits.includes('d')}">
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                        Your priority is: <br>
                        Not Procedure
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">
                        So you: <br> Explore Feelings
                    </p>
                    <p class="w-full border-b-2 border-[#ededf0] py-2">In order to: <br>  Be Expressive
                    </p>
                    <p class="w-full py-2">
                        Because you Focus on:<br> Your Feelings
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>




</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentPriorities",
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
tbody tr td{
    line-height:25px;
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
