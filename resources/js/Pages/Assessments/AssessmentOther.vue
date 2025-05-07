<template>
    <div class="w-full flex">
        <div class="w-1/2  -mt-24 ">
            <img class="object-center h-full w-full -ml-15 object-cover  " src="/images/assessments/other.jpg" alt="">
        </div>
        <div class="w-1/2  flex flex-col  leading-7 ">
            <div class="w-full flex flex-row">

                <div class="w-1/2 p-10 space-y-5">
                    <div class="w-full flex items-center flex-row">
                        <img class="w-12" :src="'/images/assessments/' + this.type.slice(0,1).toLowerCase() + '_style.png'" alt="">
                        <span :class="'text-[' + this.get_style_color() +']'" class="ml-2  text-3xl font-bold">{{ this.get_style_name() }}</span>
                    </div>
                    <div class="w-full flex items-center  flex-row">
                        <img class="w-12" :src="'/images/assessments/dominant.png'" alt="">
                        <span class="ml-2 text-[#4ca830] text-3xl font-bold">Dominant</span>
                    </div>
                </div>
                <div class="w-1/2 flex items-center">
                    <img class="h-32  mx-auto" src="/images/assessments/relating.png" alt="">
                </div>

            </div>

            <div class="w-full bg-gray-100 px-5 py-10 space-y-5">
                <h1 class="text-4xl w-full font-bold">Because your primary style is I ...</h1>
                <p>Remember the following when working with a Cautious D-Style person:</p>
            </div>
        </div>

    </div>

    <div class="w-full flex flex-row flex-wrap gap-x-10 mt-10 gap-y-10">
        <div class="w-[45%] space-y-5">
            <h1 class="text-4xl font-bold ">STRENGTHS you share:</h1>
            <p>{{assessment.dominant_strength}}</p>
        </div>
        <div class="w-[45%] space-y-5">
            <h1 class="text-4xl font-bold">STRUGGLES you may face:</h1>
            <p>{{assessment.dominant_struggle}}</p>
        </div>
        <div class="w-[45%] space-y-5">
            <h1 class="text-4xl font-bold">STRATEGIES for relating and conflict resolution:</h1>
            <p>{{assessment.dominant_strategies}}</p>
        </div>


    </div>


    <div class="w-full">
        <img class="object-center h-32 w-full mt-20 object-cover  " src="/images/assessments/descriptive.jpg" alt="">
    </div>

    <div class="w-full flex flex-row  flex-wrap gap-x-10 mt-10 gap-y-10">
        <div class="w-full flex flex-row">

            <div class="w-1/2 flex flex-row">
                <div class="w-1/2 p-10 space-y-5">
                    <div class="w-full flex items-center flex-row">
                        <img class="w-12" :src="'/images/assessments/' + this.type.slice(0,1).toLowerCase() + '_style.png'" alt="">
                        <span :class="'text-[' + this.get_style_color() +']'" class="ml-2  text-3xl font-bold">{{ this.get_style_name() }}</span>
                    </div>
                    <div class="w-full flex items-center  flex-row">
                        <img class="w-12" :src="'/images/assessments/inspiring.png'" alt="">
                        <span class="ml-2 text-[#bd281b] text-3xl font-bold">Inspiring</span>
                    </div>
                </div>
                <div class="w-1/2 flex items-center">
                    <img class="h-32  mx-auto" src="/images/assessments/relating.png" alt="">
                </div>
            </div>

            <div class="w-[45%]  bg-gray-100  px-5 py-10 space-y-5 flex flex-col  leading-7 ">
                <h1 class="text-4xl w-full font-bold">Because your primary style is I ...</h1>
                <p>Remember the following when working with a Cautious I-Style person:</p>
            </div>

        </div>

        <div class="w-[45%] space-y-5">
            <h1 class="text-4xl font-bold ">STRENGTHS you share:</h1>
            <p>{{assessment.inspiring_strength}}</p>
        </div>
        <div class="w-[45%] space-y-5">
            <h1 class="text-4xl font-bold ">STRUGGLES you may face:</h1>
            <p>{{assessment.inspiring_struggle}}</p>
        </div>
        <div class="w-[45%] space-y-5">
            <h1 class="text-4xl font-bold ">STRATEGIES for relating and conflict resolution:</h1>
            <p>{{assessment.inspiring_strategies}}</p>
        </div>



    </div>





    <div class="w-full">
        <img class="object-center h-32 w-full mt-20 object-cover  " src="/images/assessments/descriptive.jpg" alt="">
    </div>

    <div class="w-full flex flex-row  flex-wrap gap-x-10 mt-10 gap-y-10">
        <div class="w-1/2  flex flex-row py-10 leading-7 ">
                <div class="w-1/2 p-10 space-y-5">
                    <div class="w-full flex items-center flex-row">
                        <img class="w-12" :src="'/images/assessments/' + this.type.slice(0,1).toLowerCase() + '_style.png'" alt="">
                        <span :class="'text-[' + this.get_style_color() +']'" class="ml-2  text-3xl font-bold">{{ this.get_style_name() }}</span>
                    </div>
                    <div class="w-full flex items-center  flex-row">
                        <img class="w-12" :src="'/images/assessments/supportive.png'" alt="">
                        <span class="ml-2 text-[#2c5dc4] text-3xl font-bold">Supportive</span>
                    </div>
                </div>
                <div class="w-1/2 flex items-center">
                    <img class="h-32  mx-auto" src="/images/assessments/relating.png" alt="">
                </div>
        </div>
        <div class="w-[45%]  bg-gray-100  px-5 py-10 space-y-5 flex flex-col  leading-7 ">
            <h1 class="text-4xl w-full font-bold">Because your primary style is S ...</h1>
            <p>Remember the following when working with a Cautious S-Style person:</p>
        </div>
        <div class="w-[45%] space-y-5">
            <h1 class="text-4xl font-bold ">STRENGTHS you share:</h1>
            <p>{{assessment.supportive_strength}}</p>
        </div>
        <div class="w-[45%] space-y-5">
            <h1 class="text-4xl font-bold ">STRUGGLES you may face:</h1>
            <p>{{assessment.supportive_struggle}}</p>
        </div>
        <div class="w-[45%] space-y-5">
            <h1 class="text-4xl font-bold ">STRATEGIES for relating and conflict resolution:</h1>
            <p>{{assessment.supportive_strategies}}</p>
        </div>

    </div>




    <div class="w-full">
        <img class="object-center h-32 w-full mt-20 object-cover  " src="/images/assessments/descriptive.jpg" alt="">
    </div>

    <div class="w-full flex flex-row  flex-wrap gap-x-10 mt-10 gap-y-10">
        <div class="w-1/2  flex flex-row py-10  ">
            <div class="w-1/2 p-10 space-y-5">
                <div class="w-full flex items-center flex-row">
                    <img class="w-12" :src="'/images/assessments/' + this.type.slice(0,1).toLowerCase() + '_style.png'" alt="">
                    <span :class="'text-[' + this.get_style_color() +']'" class="ml-2  text-3xl font-bold">{{ this.get_style_name() }}</span>
                </div>
                <div class="w-full flex items-center  flex-row">
                    <img class="w-12" :src="'/images/assessments/cautious.png'" alt="">
                    <span class="ml-2 text-[#f1f04f] text-3xl font-bold">Cautious</span>
                </div>
            </div>
            <div class="w-1/2 flex items-center">
                <img class="h-32  mx-auto" src="/images/assessments/relating.png" alt="">
            </div>
        </div>

        <div class="w-[45%]  bg-gray-100  px-5 py-10 space-y-5 flex flex-col  leading-7 ">
            <h1 class="text-4xl w-full font-bold">Because your primary style is C ...</h1>
            <p>Remember the following when working with a Cautious C-Style person:</p>
        </div>
        <div class="w-[45%] space-y-5">
            <h1 class="text-4xl font-bold ">STRENGTHS you share:</h1>
            <p>{{assessment.cautious_strength}}</p>
        </div>
        <div class="w-[45%] space-y-5">
            <h1 class="text-4xl font-bold">STRUGGLES you may face:</h1>
            <p>{{assessment.cautious_struggle}}</p>
        </div>
        <div class="w-[45%] space-y-5">
            <h1 class="text-4xl font-bold">STRATEGIES for relating and conflict resolution:</h1>
            <p>{{assessment.cautious_strategies}}</p>
        </div>

    </div>






</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";

export default {
    name: "AssessmentOther",
    layout: AssessmentTypes,
    props:{
        assessment: Object,
        type: String,
    },
    methods: {
        get_style_name (){
            switch(this.type.slice(0,1).toLowerCase()){
                case "c" : return "Caution";
                case "d" : return "Dominant";
                case "i" : return "Inspiration";
                case "s" : return "Supportive";
            }
        },

        get_style_color (){
            switch(this.type.slice(0,1).toLowerCase()){
                case "c" : return "#f1f04f";
                case "d" : return "#4ca830";
                case "i" : return "#bd281b";
                case "s" : return "#2c5dc4";
            }
        }
    }

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
