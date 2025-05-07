<template>

    <div class="w-full  mt-10 space-y-5 py-0 leading-7 flex flex-col  justify-between">
        <p class="text-4xl font-bold ">The Main Thing to Remember: </p>
        <p>{{this.assessment.main}}</p>
        <div class="w-full flex items-center flex-row border-8 border-[#e3aee3] px-5 py-10">
            <div class="w-1/5">
                <img src="/images/svg/lightbulb-on.svg" alt="">
            </div>
            <div class="w-5/6">
                <p class="font-bold">Key Reminder:</p>
                <p>Balance your detailed communication style with clear and concise messaging.</p>
            </div>

        </div>
    </div>

    <div class="w-full leading-5  mt-20 gap-10 flex flex-row flex-wrap">
        <div class="w-[45%] li_layout space-y-5" v-for="single in this.assessment.points" >
            <h4 class="text-xl font-bold capitalize ">{{single.key}}</h4>
            <div class="li_layout" v-html="single.value"></div>
        </div>
    </div>



<!--    <section class="w-full flex flex-row mt-20 flex-wrap">-->
<!--        <div class="w-1/2 pe-5   space-y-10 py-0 leading-7 flex flex-col ">-->
<!--            <p class="text-4xl font-bold ">Your Keys to Success: </p>-->
<!--            <p >{{this.assessment.keys_success}}</p>-->
<!--            <div class="w-full li_layout mt-10"  v-html="assessment.points"></div>-->

<!--            </div>-->


<!--        <div class="w-1/2  ">-->
<!--            <img class="h-full w-full -ml-15 object-cover" src="/images/assessments/success.jpg" alt="">-->
<!--        </div>-->
<!--    </section>-->


<!--    <section class="w-full flex flex-row mt-20 flex-wrap">-->

<!--        <div class="w-1/2 pe-5 py-0 leading-7 flex flex-col ">-->
<!--            <p class="text-4xl font-bold ">Coomunication With D Style Person</p>-->
<!--            <p class="mt-2" >with someone who is primarily D (dominant)</p>-->
<!--            <p class="mt-10">{{this.$page.props.auth.user.first_name}}, because your primary style is <span class="py-2 px-3 mx-2 w- text-white rounded-full bg-[#6632e8]">{{this.type.slice(0,1)}}</span>.</p>-->
<!--            <p class="mt-3">Please remember the following when communicating with a D-Style person:</p>-->
<!--        </div>-->

<!--        <div class="w-1/2  ">-->
<!--            <div class="w-full li_layout mt-10"  v-html="assessment.d_points"></div>-->
<!--        </div>-->
<!--    </section>-->

<!--    <div class="w-full border-4 py-10  mt-20 border-purple-700 flex flex-row">-->
<!--        <div class="w-1/6 bg-white -mt-16 px-30 ">-->
<!--            <svg xmlns="http://www.w3.org/2000/svg"  class="m-auto" width="80" height="80" viewBox="0 0 30.281 30"><path d="M23.342,0H6.939A6.948,6.948,0,0,0,0,6.939V18.295a6.948,6.948,0,0,0,6.939,6.939H8.754l5.173,4.325a1.893,1.893,0,0,0,2.428,0l5.173-4.325h1.814a6.948,6.948,0,0,0,6.939-6.939V6.939A6.948,6.948,0,0,0,23.342,0ZM26.5,18.295a3.154,3.154,0,0,1-3.154,3.154h-2.5a1.893,1.893,0,0,0-1.214.442l-4.485,3.75-4.485-3.75a1.893,1.893,0,0,0-1.214-.442h-2.5a3.154,3.154,0,0,1-3.154-3.154V6.939A3.154,3.154,0,0,1,6.939,3.785h16.4A3.154,3.154,0,0,1,26.5,6.939Z" fill="#6d2ef126"/><path d="M8.6,11.2h5.2a2.6,2.6,0,1,0,0-5.2H8.6a2.6,2.6,0,1,0,0,5.2Z" transform="translate(0.625 1.161)" fill="#6d2ef126"/><path d="M14.285,11h-7.1C6.53,11,6,12.165,6,13.6s.53,2.6,1.184,2.6h7.1c.654,0,1.184-1.165,1.184-2.6s-.53-2.6-1.184-2.6Z" transform="translate(4.406 2.128)" fill="#6d2ef126"/></svg>-->
<!--        </div>-->
<!--        <div class="w-5/6 text-purple-800 px-10 items-center flex">-->
<!--            {{this.assessment.d_insight}}-->
<!--        </div>-->
<!--    </div>-->





<!--    <div class="w-full h-52 bg-sky-200 mt-20 flex items-center px-20 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]">-->
<!--        <h1 class="text-5xl max-w-[80%] font-bold">Communication with a I-Style Person </h1>-->
<!--    </div>-->

<!--    <section class="w-full flex flex-row mt-20 flex-wrap">-->

<!--        <div class="w-1/2 pe-5 py-0 leading-7 flex flex-col ">-->
<!--            <p class="text-4xl font-bold ">Coomunication With I Style Person</p>-->
<!--            <p class="mt-2" >with someone who is primarily I (inspirational)</p>-->
<!--            <p class="mt-10">{{this.$page.props.auth.user.first_name}}, because your primary style is <span class="py-2 px-3 mx-2 w- text-white rounded-full bg-[#6632e8]">{{this.type.slice(0,1)}}</span>.</p>-->
<!--            <p class="mt-3">Please remember the following when communicating with a I-Style person:</p>-->
<!--        </div>-->

<!--        <div class="w-1/2  ">-->
<!--            <div class="w-full li_layout mt-10"  v-html="assessment.i_points"></div>-->
<!--        </div>-->
<!--    </section>-->

<!--    <div class="w-full border-4 py-10  mt-20 border-purple-700 flex flex-row">-->
<!--        <div class="w-1/6 bg-white -mt-16 px-30 ">-->
<!--            <svg xmlns="http://www.w3.org/2000/svg"  class="m-auto" width="80" height="80" viewBox="0 0 30.281 30"><path d="M23.342,0H6.939A6.948,6.948,0,0,0,0,6.939V18.295a6.948,6.948,0,0,0,6.939,6.939H8.754l5.173,4.325a1.893,1.893,0,0,0,2.428,0l5.173-4.325h1.814a6.948,6.948,0,0,0,6.939-6.939V6.939A6.948,6.948,0,0,0,23.342,0ZM26.5,18.295a3.154,3.154,0,0,1-3.154,3.154h-2.5a1.893,1.893,0,0,0-1.214.442l-4.485,3.75-4.485-3.75a1.893,1.893,0,0,0-1.214-.442h-2.5a3.154,3.154,0,0,1-3.154-3.154V6.939A3.154,3.154,0,0,1,6.939,3.785h16.4A3.154,3.154,0,0,1,26.5,6.939Z" fill="#6d2ef126"/><path d="M8.6,11.2h5.2a2.6,2.6,0,1,0,0-5.2H8.6a2.6,2.6,0,1,0,0,5.2Z" transform="translate(0.625 1.161)" fill="#6d2ef126"/><path d="M14.285,11h-7.1C6.53,11,6,12.165,6,13.6s.53,2.6,1.184,2.6h7.1c.654,0,1.184-1.165,1.184-2.6s-.53-2.6-1.184-2.6Z" transform="translate(4.406 2.128)" fill="#6d2ef126"/></svg>-->
<!--        </div>-->
<!--        <div class="w-5/6 text-purple-800 px-10 items-center flex">-->
<!--            {{this.assessment.i_insight}}-->
<!--        </div>-->
<!--    </div>-->





<!--    <div class="w-full h-52 bg-sky-200 mt-20 flex items-center px-20 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]">-->
<!--        <h1 class="text-5xl max-w-[80%] font-bold">Communication with a S-Style Person </h1>-->
<!--    </div>-->

<!--    <section class="w-full flex flex-row mt-20 flex-wrap">-->

<!--        <div class="w-1/2 pe-5 py-0 leading-7 flex flex-col ">-->
<!--            <p class="text-4xl font-bold ">Coomunication With S Style Person</p>-->
<!--            <p class="mt-2" >with someone who is primarily S (Supportive)</p>-->
<!--            <p class="mt-10">{{this.$page.props.auth.user.first_name}}, because your primary style is <span class="py-2 px-3 mx-2 w- text-white rounded-full bg-[#6632e8]">{{this.type.slice(0,1)}}</span>.</p>-->
<!--            <p class="mt-3">Please remember the following when communicating with a S-Style person:</p>-->
<!--        </div>-->

<!--        <div class="w-1/2  ">-->
<!--            <div class="w-full li_layout mt-10"  v-html="assessment.s_points"></div>-->
<!--        </div>-->
<!--    </section>-->

<!--    <div class="w-full border-4 py-10  mt-20 border-purple-700 flex flex-row">-->
<!--        <div class="w-1/6 bg-white -mt-16 px-30 ">-->
<!--            <svg xmlns="http://www.w3.org/2000/svg"  class="m-auto" width="80" height="80" viewBox="0 0 30.281 30"><path d="M23.342,0H6.939A6.948,6.948,0,0,0,0,6.939V18.295a6.948,6.948,0,0,0,6.939,6.939H8.754l5.173,4.325a1.893,1.893,0,0,0,2.428,0l5.173-4.325h1.814a6.948,6.948,0,0,0,6.939-6.939V6.939A6.948,6.948,0,0,0,23.342,0ZM26.5,18.295a3.154,3.154,0,0,1-3.154,3.154h-2.5a1.893,1.893,0,0,0-1.214.442l-4.485,3.75-4.485-3.75a1.893,1.893,0,0,0-1.214-.442h-2.5a3.154,3.154,0,0,1-3.154-3.154V6.939A3.154,3.154,0,0,1,6.939,3.785h16.4A3.154,3.154,0,0,1,26.5,6.939Z" fill="#6d2ef126"/><path d="M8.6,11.2h5.2a2.6,2.6,0,1,0,0-5.2H8.6a2.6,2.6,0,1,0,0,5.2Z" transform="translate(0.625 1.161)" fill="#6d2ef126"/><path d="M14.285,11h-7.1C6.53,11,6,12.165,6,13.6s.53,2.6,1.184,2.6h7.1c.654,0,1.184-1.165,1.184-2.6s-.53-2.6-1.184-2.6Z" transform="translate(4.406 2.128)" fill="#6d2ef126"/></svg>-->
<!--        </div>-->
<!--        <div class="w-5/6 text-purple-800 px-10 items-center flex">-->
<!--            {{this.assessment.s_insight}}-->
<!--        </div>-->
<!--    </div>-->






<!--    <div class="w-full h-52 bg-sky-200 mt-20 flex items-center px-20 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF]">-->
<!--        <h1 class="text-5xl max-w-[80%] font-bold">Communication with a C-Style Person </h1>-->
<!--    </div>-->

<!--    <section class="w-full flex flex-row mt-20 flex-wrap">-->

<!--        <div class="w-1/2 pe-5 py-0 leading-7 flex flex-col ">-->
<!--            <p class="text-4xl font-bold ">Coomunication With C Style Person</p>-->
<!--            <p class="mt-2" >with someone who is primarily C (Cautious)</p>-->
<!--            <p class="mt-10">{{this.$page.props.auth.user.first_name}}, because your primary style is <span class="py-2 px-3 mx-2 w- text-white rounded-full bg-[#6632e8]">{{this.type.slice(0,1)}}</span>.</p>-->
<!--            <p class="mt-3">Please remember the following when communicating with a C-Style person:</p>-->
<!--        </div>-->

<!--        <div class="w-1/2  ">-->
<!--            <div class="w-full li_layout mt-10"  v-html="assessment.c_points"></div>-->
<!--        </div>-->
<!--    </section>-->

<!--    <div class="w-full border-4 py-10  mt-20 border-purple-700 flex flex-row">-->
<!--        <div class="w-1/6 bg-white -mt-16 px-30 ">-->
<!--            <svg xmlns="http://www.w3.org/2000/svg"  class="m-auto" width="80" height="80" viewBox="0 0 30.281 30"><path d="M23.342,0H6.939A6.948,6.948,0,0,0,0,6.939V18.295a6.948,6.948,0,0,0,6.939,6.939H8.754l5.173,4.325a1.893,1.893,0,0,0,2.428,0l5.173-4.325h1.814a6.948,6.948,0,0,0,6.939-6.939V6.939A6.948,6.948,0,0,0,23.342,0ZM26.5,18.295a3.154,3.154,0,0,1-3.154,3.154h-2.5a1.893,1.893,0,0,0-1.214.442l-4.485,3.75-4.485-3.75a1.893,1.893,0,0,0-1.214-.442h-2.5a3.154,3.154,0,0,1-3.154-3.154V6.939A3.154,3.154,0,0,1,6.939,3.785h16.4A3.154,3.154,0,0,1,26.5,6.939Z" fill="#6d2ef126"/><path d="M8.6,11.2h5.2a2.6,2.6,0,1,0,0-5.2H8.6a2.6,2.6,0,1,0,0,5.2Z" transform="translate(0.625 1.161)" fill="#6d2ef126"/><path d="M14.285,11h-7.1C6.53,11,6,12.165,6,13.6s.53,2.6,1.184,2.6h7.1c.654,0,1.184-1.165,1.184-2.6s-.53-2.6-1.184-2.6Z" transform="translate(4.406 2.128)" fill="#6d2ef126"/></svg>-->
<!--        </div>-->
<!--        <div class="w-5/6 text-purple-800 px-10 items-center flex">-->
<!--            {{this.assessment.c_insight}}-->
<!--        </div>-->
<!--    </div>-->



</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentComTips",
    layout: AssessmentTypes,
    props:{
        assessment: Object,
        type: String,
    },

}
</script>


<style scoped>

.li_layout :deep ul {
    list-style: unset;
    display: grid;
    grid-template-rows: repeat(5, min-content);
    grid-auto-flow: column;

}
.li_layout :deep li {
    margin: 0px 1rem;

}
.li_layout :deep li::marker {
    color: mediumpurple;
    font-size: 20px;
    margin:20px 0;
}
</style>
