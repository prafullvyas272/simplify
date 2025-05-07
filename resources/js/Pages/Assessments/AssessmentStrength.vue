<template>
    <div class="w-full flex mt-4">
        <div class="w-1/2">
            <img class="object-center h-full w-full -ml-15 object-cover  " src="/images/assessments/strength.jpg" alt="">
        </div>
        <div class="w-1/2  p-10 px-10 leading-7  max-h-52">
            <div class="mt-10" v-html="this.assessment.intro"></div>
        </div>
    </div>

    <div class="w-full leading-5  mt-20 gap-10 flex flex-row flex-wrap">
        <div class="w-[45%] space-y-2" v-for="single in this.assessment.detail" >
            <h4 class="text-xl font-bold capitalize ">{{single.key}}</h4>
            <p>{{single.value}}</p>
        </div>
    </div>

    <div>
        <div class="mt-10" v-html="this.assessment.footer"></div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentStrength",
    layout: AssessmentTypes,
    props:{
        assessment: Object
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
</style>
