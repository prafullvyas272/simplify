<template>
    <div class="w-full flex">
        <div class="w-1/2  -mt-24 ">
            <img class="object-center h-full w-full -ml-15 object-cover  " src="/images/assessments/disc.jpg" alt="">
        </div>
        <div class="w-1/2  p-10 leading-7 ">
            <p>
                {{$page.props.auth.user.first_name}}, we will be using a concept called the "DISC" Model of Human Behavior in this report. Each letter (D, I, S and
                C) represents a main personality style. The DISC model is based on the fact that most people have predictable patterns
                of behavior. The first pattern reflects whether a person is more OUTGOING or RESERVED. The second pattern
                reflects whether a person is more TASK-ORIENTED or PEOPLE-ORIENTED. The two patterns can be visualized in
                two circular diagrams with opposing traits and then combined into one diagram as shown below.
            </p>
        </div>


    </div>
    <div class="w-full leading-5 mt-20 space-y-5">
        <p>
            <img class="w-full" src="/images/assessments/disc_image.png" alt="">
        </p>
        <p>
            The circular diagram in Step 3 has four sections like a pie. Each section is a combination of two traits that can be
            described by the letters D, I, S and C. The main words that we use to describe each personality style are Dominant
            (D), Inspiring (I), Supportive (S) and Cautious (C) as shown below.
        </p>
        <p>
            <img class="w-1/2 mx-auto" src="/images/assessments/disc_image_2.png" alt="">

        </p>
        <h1 class="text-2xl font-bold">DISC Is Easy To Remember</h1>
        <p class="pb-10">DISC is easy to remember using letters, colors and symbols.</p>
        <table class="table-fixed w-full border-spacing-y-2 ">
            <thead class="bg-sky-100 h-16">
            <tr>
                <th class="w-[20%]">Symbol</th>
                <th>Behavior</th>
                <th>Key Words</th>
                <th>Color Meaning</th>
                <th>Symbol Meaning</th>
            </tr>
            </thead>
            <tbody class="[&_:is(td)]:border-2 [&_:is(td)]:p-2 ">
            <tr class="bg-[#d9ece4] text-sm"  >
                <td class="bg-white text-green-500 align-top text-7xl text-center">D</td>
                <td class="align-top font-bold">OUTGOING and TASK- ORIENTED </td>
                <td>
                    <ul>
                    <li class="font-bold">Dominant</li>
                    <li> <span class="font-bold">D</span>irect</li>
                    <li> <span class="font-bold">D</span>emanding</li>
                    <li> <span class="font-bold">D</span>ecisive</li>
                    <li> <span class="font-bold">D</span>etermined</li>
                    <li> <span class="font-bold">D</span>oer</li>
                </ul></td>
                <td> <p class="font-bold">GREEN means GO - like a green light in traffic</p><br><p>They are always looking for a TASK to GO DO. They were born ready!</p> </td>
                <td> <p class="font-bold">The EXCLAMATION POINT represents being emphatic!</p><br><p>They like to face everything
                    head-on</p>
                </td>
            </tr>
            <tr class="bg-pink-200  text-sm"  >
                <td class="bg-white text-pink-500 align-top text-7xl text-center">I</td>
                <td class=" font-bold">   OUTGOING and PEOPLE- ORIENTED  </td>
                <td>
                    <ul>
                    <li class="font-bold">Inspiring</li>
                    <li> <span class="font-bold">I</span>nfluencing</li>
                    <li> <span class="font-bold">I</span>mpressionable</li>
                    <li> <span class="font-bold">I</span>nteractive</li>
                    <li> <span class="font-bold">I</span>mpressive</li>
                    <li> <span class="font-bold">I</span>nvolved</li>
                </ul></td>
                <td> <p class="font-bold">RED is highly VISIBLE and BRIGHT</p><br><p>They are always easy to spot. The party begins when they show up!</p> </td>
                <td> <p class="font-bold">The STAR symbol means they are the star of the show!</p><br><p>They make life FUN and EXCITING!</p>
                </td>
            </tr>
            <tr class="bg-blue-50  text-sm"  >
                <td class="bg-white text-blue-300 align-top text-7xl text-center">S</td>
                <td class=" font-bold">   RESERVED and PEOPLE- ORIENTED  </td>
                <td>
                    <ul>
                    <li class="font-bold">Supportive</li>
                    <li> <span class="font-bold">S</span>table</li>
                    <li> <span class="font-bold">S</span>teady</li>
                    <li> <span class="font-bold">S</span>weet</li>
                    <li> <span class="font-bold">S</span>tatus-quo</li>
                    <li> <span class="font-bold">S</span>hy</li>
                </ul></td>
                <td> <p class="font-bold">BLUE is PEACEFUL like a clear blue sky</p><br><p>They like things to be calm, relaxed and peaceful. They are so nice!</p> </td>
                <td> <p class="font-bold">The PLUS and MINUS represents being accommodating.</p><br><p>Plus or minus, either way is okay. They like to please others!</p>
                </td>
            </tr>
            <tr class="bg-amber-50  text-sm"  >
                <td class="bg-white text-amber-300 align-top text-7xl text-center">C</td>
                <td class=" font-bold">RESERVED and TASK- ORIENTED</td>
                <td>
                    <ul>
                    <li class="font-bold">Cautious</li>
                    <li> <span class="font-bold">C</span>alculating</li>
                    <li> <span class="font-bold">C</span>ompetent</li>
                    <li> <span class="font-bold">C</span>onscientious</li>
                    <li> <span class="font-bold">C</span>ontemplative</li>
                    <li> <span class="font-bold">C</span>areful</li>
                </ul></td>
                <td> <p class="font-bold">YELLOW means CAUTION</p><br><p>They like to approach TASKS CAREFULLY. They move through life one calculated step at a time</p> </td>
                <td> <p class="font-bold">The QUESTION MARK represents their inquisitive nature.</p><br><p>They have lots of detailed questions, and they need to think things through!</p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentDisc",
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
tbody tr td{
    padding: 10px;
}
</style>
