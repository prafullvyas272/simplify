<template>
    <div class="w-full flex">
        <div class="w-full py-5 leading-7  space-y-5" v-html="this.assessment.intro"></div>
    </div>


    <div class="flex flex-row flex-wrap w-full">

        <section class="w-1/2 space-y-5 mt-10 li_layout items-center justify-center">

            <h3 class="text-2xl bold">Main Characteristics of the ({{this.type}})
                <span class="relative">
            Style:
            <div class="opacity-100  absolute left-0 top-7 -z-10 border-2 border-pink-600 w-full -mt-2"></div>

                </span>
            </h3>
            <ul class="leading-8 ml-8">
                <li v-for="item in this.assessment.main">
                    <span class="font-bold text-lg">{{item.key}}:</span>{{item.value}}
                </li>
            </ul>

        </section>

        <div class="w-1/2">
            <img src="/images/assessments/personality_1.png" alt="">
        </div>

    </div>

    <div class="w-full mt-20 flex flex-row flex-wrap">

        <div class="w-1/2">
            <img src="/images/assessments/personality_2.png" alt="">

        </div>
        <div class="w-1/2 pl-10 ">
            <section class="w-full space-y-5  ">
                <h3 class="text-2xl bold">Famous Personalities with Cautious (C) Style
                </h3>
                <div class="li_layout ml-8" v-html="this.assessment.famous"></div>
            </section>
            <section class="w-full space-y-5 mt-10">
                <h3 class="text-2xl bold">
                            <span class="relative">
            Summary:
            <div class="opacity-100  absolute left-0 top-7 -z-10 border-2 border-pink-600 w-full -mt-2"></div>

                </span>

                </h3>
                <div v-html="this.assessment.summary"></div>
            </section>

        </div>
    </div>



</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentIntro",
    layout: AssessmentTypes,
    props:{
        assessment: Object,
        type:String,
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
    padding: 10px;
}

.li_layout :deep ul {
    list-style: unset;
    display: grid;
    grid-template-rows: repeat(5, min-content);
    grid-auto-flow: column;
}
.li_layout :deep li::marker {
    color: mediumpurple;
    font-size: 20px;
}

</style>
