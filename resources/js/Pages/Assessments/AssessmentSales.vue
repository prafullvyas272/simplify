<template>
    <div class="w-full flex">
        <div class="w-full h-64 ">
            <img class="object-center h-full w-full -ml-15 object-cover  " src="/images/assessments/sales.jpg" alt="">
        </div>
    </div>
    <p class="mt-10">
        Understanding and Persuading Clients
    </p>

    <div class="w-full mt-20">
        <table class="table-fixed w-full border-spacing-y-2 ">
            <thead class="bg-sky-100 h-16">
            <tr >
                <th class="p-5 bg-green-200 w-1/4">Dominant "D" Clients</th>
                <th class="p-5 bg-pink-200 w-1/4">Dominant "I" Clients:</th>
                <th class="p-5 bg-amber-200 w-1/4">Dominant "C" Clients:</th>
                <th class="p-5 bg-sku-200 w-1/4">Dominant "S" Clients:</th>
            </tr>
            </thead>
            <tbody class="[&_:is(td)]:border-2 [&_:is(td)]:p-2 ">
            <tr class="text-md"  >
                <td class="space-y-5 align-top">
                    <p class="font-bold">Expect Them To:</p>
                    <p> Be direct and to-the-point
                        Want to do things their way
                        Be deliberate and focused
                        Decide quickly and be in a hurry
                        Be a little confrontational
                        Have strong opinions
                    </p>
                    <p class="font-bold">Persuade them by:</p>
                    <p>Being responsive & solution-oriented
                        Giving them choices
                        Not pushing
                        Being confident</p>

                </td>
                <td class="space-y-5 align-top">
                    <p class="font-bold">Expect Them To:</p>
                    <p>
                        Be enthusiastic
                        Be talkative and interactive
                        Be impulsive
                        Be interested and upbeat
                        Decide emotionally
                        Not be detail-oriented
                    </p>
                    <p class="font-bold">Persuade them by:</p>
                    <p>Being positive and energetic
                        Using testimonials and references
                        Staying in regular contact with them
                        Giving them recognition and credit</p>

                </td>
                <td class="space-y-5 align-top">
                    <p class="font-bold">Expect Them To:</p>
                    <p>
                        Be unemotional
                        Be logical
                        Be focused on specific questions
                        Make decisions carefully
                        Ask questions
                    </p>
                    <p class="font-bold">Persuade them by:</p>
                    <p>
                        Being credible
                        Demonstrating value
                        Providing quality answers
                        Being patient and consistent
                    </p>
                </td>
                <td class="space-y-5 align-top">
                    <p class="font-bold">Expect Them To:</p>
                    <p>
                        Be friendly and agreeable
                        Procrastinate
                        Be concerned about changes
                        Decide slowly
                        Be uncomfortable under pressure
                    </p>
                    <p class="font-bold">Persuade them by:</p>
                    <p>
                        Being sincere
                        Being patient and caring
                        Being a friend
                        Offering personal help
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
    name: "AssessmentSales",
    layout: AssessmentTypes,


}
</script>


<style scoped>
tbody:before {
    content:"@";
    display:block;
    line-height:10px;
    text-indent:-99999px;
}
</style>
