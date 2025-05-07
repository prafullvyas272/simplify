<template>
    <div class="w-full flex">
        <div class="w-full h-64 ">
            <img class="object-center h-full w-full -ml-15 object-cover  " src="/images/assessments/tip.jpg" alt="">
        </div>
    </div>

    <div class="w-full flex  justify-center mt-20">
        <table class="table-fixed w-3/5 border-spacing-y-2 ">
            <thead class="h-16">
            <tr >
                <th class="p-5 text-2xl  w-1/4 font-bold">If Your Style is</th>
                <th class="p-5 text-2xl w-1/4 font-bold">Remember</th>
            </tr>
            </thead>
            <tbody >
                <tr class="text-md"  >
                    <td>
                        <div class="w-full flex items-center  flex-row">
                            <img class="w-12" src="/images/assessments/dominant.png" alt="">
                            <span class="ml-2 text-[#4ca830] text-3xl font-bold">Dominant</span>
                        </div>
                    </td>
                    <td>
                        <ul>
                            <li>Don't push</li>
                            <li>Give people time to process and think</li>
                            <li>Use softer tones</li>
                        </ul>
                    </td>
                </tr>
                <tr class="text-md"  >
                    <td>
                        <div class="w-full flex items-center  flex-row">
                            <img class="w-12" src="/images/assessments/inspiring.png" alt="">
                            <span class="ml-2 text-[#bd281b] text-3xl font-bold">Inspiring</span>
                        </div>
                    </td>
                    <td>
                        <ul>
                            <li>Be organized</li>
                            <li>Stay focused</li>
                            <li>Be credible</li>
                        </ul>
                    </td>
                </tr>
                <tr class="text-md"  >
                    <td>
                        <div class="w-full flex items-center  flex-row">
                            <img class="w-12" src="/images/assessments/supportive.png" alt="">
                            <span class="ml-2 text-[#2c5dc4] text-3xl font-bold">Supportive</span>
                        </div>
                    </td>
                    <td>
                        <ul>
                            <li>Be confident</li>
                            <li>Remember that challenges are okay</li>
                            <li>Don't be controlled by FEAR</li>
                            <li>(False Evidence Appearing Real)</li>
                        </ul>
                    </td>
                </tr>
                <tr class="text-md"  >
                <td>
                    <div class="w-full flex items-center  flex-row">
                        <img class="w-12" src="/images/assessments/cautious.png" alt="">
                        <span class="ml-2 text-[#f1f04f] text-3xl font-bold">Cautious</span>
                    </div>
                </td>
                <td>
                    <ul>
                        <li>Dont overdo details</li>
                        <li>Remember the person, not the task</li>
                        <li>smile more and lignten up a little</li>
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
    name: "AssessmentTipsRemember",
    layout: AssessmentTypes,


}
</script>


<style scoped>
 ul li{
    list-style: unset;
}

 table {
     td{
         border-bottom: 1px solid gray;
         padding:20px;

     }

     tr:last-child td{
         border-bottom:0px;
     };

     td:first-child{
         border-right: 1px solid gray;

     }

 }
</style>
