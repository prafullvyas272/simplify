<template>
    <div class="w-full flex">
        
        <div class="w-1/2  p-10 px-10 leading-7  max-h-52">
            <p>
                {{this.assessment.paragraph}}
            </p>
        </div>
    </div>

    <div class="mt-10" v-html="this.assessment.intro"></div>


    <div class="w-full space-y-5 mt-10" >
        <h3 class="text-2xl font-bold">The Easiest Way to <span class="relative"> Work with Style ({{this.type}})

                <div class="opacity-100  absolute top-7 -z-10 border-2 border-pink-600 w-full -mt-2"></div>

        </span>:</h3>
        <div class="li_layout ml-8" v-html="this.assessment.easy_details"> </div>
    </div>

    <div class="w-full my-10">
        <img src="/images/assessments/working_1.png" alt="">
    </div>

    <div class="w-full space-y-5 " >
        <h3 class="text-2xl font-bold">The Least Effective Way to <span class="relative"> Work with Style ({{this.type}})

                <div class="opacity-100  absolute left-0 top-10 -z-10 border-2 border-pink-600 w-full -mt-2"></div>

        </span>:</h3>
        <div class="li_layout ml-8" v-html="this.assessment.least_details"> </div>
    </div>

    <div class="w-full my-10">
        <img src="/images/assessments/working_2.png" alt="">
    </div>

    <div class="w-full space-y-5 mt-10" >
        <h3 class="text-2xl font-bold">Additional Tips for Effective Collaboration:</h3>
        <div class="li_layout ml-8" v-html="this.assessment.additional "> </div>
    </div>

</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentWorking",
    layout: AssessmentTypes,
    props:{
        assessment: Object,
        type: String,

},
    data(){
        return {
            first_name:this.$page.props.auth.user.first_name,

        }
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
    grid-auto-flow: column;
}
.li_layout :deep li::marker {
    color: mediumpurple;
    font-size: 20px;
}
</style>
