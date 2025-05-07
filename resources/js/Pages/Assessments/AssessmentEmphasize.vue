<template>
    <div class="w-full flex">
        <div class="w-full h-64 ">
            <img class="object-center h-full w-full -ml-15 object-cover  " src="/images/assessments/what-to-learn.jpg" alt="">
        </div>
    </div>

    <div class="w-full mt-20">
        <table class="table-fixed w-full border-spacing-y-2 ">
            <thead class="bg-sky-100 h-16">
            <tr >
                <th class="p-5 bg-green-200 w-1/4">With DOMINANT (D) Style People Emphasize:</th>
                <th class="p-5 bg-pink-200 w-1/4">With INSPIRING (I) Style People Emphasize:</th>
                <th class="p-5 bg-amber-200 w-1/4">With CAUTIOUS (C) Style People Emphasize:</th>
                <th class="p-5 bg-sku-200 w-1/4">With SUPPORTIVE (S) Style People Emphasize:</th>
            </tr>
            </thead>
            <tbody class="[&_:is(td)]:border-2 [&_:is(td)]:p-2 ">
            <tr class="text-md"  >
                <td class="d_layout">
                    <ul class="px-5">
                        <li> Results</li>
                        <li> Opportunities</li>
                        <li> Solutions</li>
                        <li> Goals</li>
                        <li> Plans</li>
                        <li> Wise use of time</li>
                        <li> Leadership role</li>
                        <li> Authority</li>
                        <li> Their bold nature</li>
                        <li> Bottom line</li>
                        <li> Ownership</li>
                        <li> Efficiency</li>
                    </ul>
                </td>
                <td class="i_layout">
                    <ul class="px-5">
                        <li>Fun</li>
                        <li>Enjoyment</li>
                        <li>Recognition</li>
                        <li>Dreams</li>
                        <li>People</li>
                        <li>Lifestyle</li>
                        <li>Energy</li>
                        <li>Enthusiasm</li>
                        <li>Their outgoing nature</li>
                        <li>Expectations</li>
                        <li>Stories</li>
                        <li>Success</li>
                    </ul>
                </td>
                <td class="c_layout">
                    <ul class="px-5">
                        <li>Quality</li>
                        <li>Value</li>
                        <li>Logic</li>
                        <li>Principles</li>
                        <li>Honesty</li>
                        <li>Integrity</li>
                        <li>Consistency</li>
                        <li>Validation</li>
                        <li>Their inquisitive nature</li>
                        <li>Details</li>
                        <li>Loyalty</li>
                        <li>Correctness</li>
                    </ul>
                </td>
                <td class="s_layout">
                    <ul class="px-5">
                        <li>Support</li>
                        <li>Reliability</li>
                        <li>Teamwork</li>
                        <li>Service</li>
                        <li>Peace</li>
                        <li>Family</li>
                        <li>Steadiness</li>
                        <li>Relationships</li>
                        <li>Their cooperative nature</li>
                        <li>Understanding</li>
                        <li>Security</li>
                        <li>Friendships</li>
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="w-full flex flex-row mt-10">
        <div class="w-1/12">
            <img src="/images/svg/lightbulb-on.svg" alt="">
        </div>
        <div class="w-11/2">
            <h6 class="text-xl font-bold">
                Remember:
            </h6>
            <p>
                Emphasize what other are Interested in!
            </p>
        </div>
    </div>






</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentEmphasize",
    layout: AssessmentTypes,


}
</script>


<style scoped>
 ul {
    list-style: unset;
}
.d_layout li::marker {
     font-size: 20px;
     color: #badac4;
 }
.i_layout li::marker {
     font-size: 20px;
     color: #e9cbd0;
 }
.c_layout li::marker {
     font-size: 20px;
     color: #ebe6b1;
 }
.s_layout li::marker {
     font-size: 20px;
     color: #cbd8ea;
 }

</style>
