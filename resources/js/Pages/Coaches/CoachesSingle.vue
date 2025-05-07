
<template>


    <div class="coache-single-user-profile w-full px-20 flex flex-row gap-4 flex-wrap mt-10">
        <div class="w-1/4 border-2 border-gray-300 flex flex-col  rounded-2xl pt-5">
            <div class="flex justify-center items-end bg-blue-400 rounded-full m-auto profile-pic" >
                <img 
                    :src="'/storage/' + this.coach.image" 
                    @error="$event.target.src='/images/default/placeholder.png'" 
                    class="rounded-full object-top object-cover" 
                    alt="Coach Profile"
                    />

            </div>
            <div class="w-full flex flex-row justify-center flex-wrap items-center fs-10 py-1">
                    Languages: <span v-for="language in this.coach.languages"> <img class="w-4  ml-1 rounded" :src="'/images/languages/' + language.code + '.svg'"></span>
            </div>
            <div class="w-full break-words text-2xl text-center font-bold fw-bold fs-45">
                {{this.coach.first_name}} {{this.coach.last_name}}
            </div>
            <div class="w-full text-center fs-45 border-gray-300 my-3 font-bold text-3xl">
                <span class="text-blue-300 text-blue fw-bold">{{this.coach.assessment.type.slice(0,1)}}</span><span class="text-pink-400 text-pink fw-bold">{{this.coach.assessment.type.slice(1)}}</span>
            </div>


            <div class="w-full flex flex-col break-words text-4xl font-bold text-center py-3  border-y-[1px]">
                <span class="fs-40 pb-1">{{this.coach.students_count}} </span>
                <span class="text-sm font-bold fs-19"> Learners Coached </span>
            </div>
            <div class="w-full flex flex-row break-words justify-center items-center  text-center  border-y-[1px]">
                <div class="w-1/2  border-right location-wrap py-4">
                    
                    <span class="font-bold location fs-10"><img src="/images/location-dot.png" class="me-2">  {{ coach.country.name }}</span>
                </div>
                <div class="w-1/2 py-4 fs-20">
                    <span class="font-bold">$ {{coach.data?.rate}}/Hour</span>
                </div>
            </div>
            <!-- <div class="w-full  text-center pt-3  py-2  border-y-[1px]">
             <span class="fs-10 pb-1">Best Coach Match:</span>
                <div class="flex flex-row break-words justify-center items-center">
                    <div class="gradieant-img"><img src="/images/line-grediant.png"></div>
                    <div class="best-match-pic flex flex-row break-words justify-center items-center ms-2">
                        <div class="img rounded ms-1"><img src="/images/user-img.jpg"></div>
                        <div class="img rounded ms-1"><img src="/images/user-img.jpg"></div>
                    </div>
                </div>
                 
            </div> -->

        </div>
        <div class="w-[70%] flex flex-col gap-y-6">

            <div class="w-full border-2 border-gray-300 flex flex-col px-5 py-4  rounded-2xl max-h-36">
                <h1 class="fs-20 fw-bold"> About </h1>
                <p class="overflow-auto">
                    {{coach.data?.about}}
                </p>
            </div>

            <div class="w-full rounded-2xl border-2 border-gray-300  relative  justify-center items-center px-5 py-4 timeline-row">
                <h2 class="border-b-[2px] pb-2 fs-20 fw-bold">Notable Ventures</h2>
                    <div class="position-relative timeline-row-inner">
                        <div class="  gradient-timeline"></div>
                        <div class="gradient-timeline-wrap flex">
                            <div v-for="coachExp in coach.data?.work_experiences" :key="coachExp.id" class="col item-{{ coachExp.id }}">
                                <span class="circle-year">{{ coachExp.from?.slice(0,4)}}</span>
                                <h6>{{ coachExp.title }}</h6>
                                
                                <div class="inner-itmes fs-10">
                                    <p>{{ truncate(coachExp.short_description,90) }}</p>
                                </div>
                            </div>                            
                        </div>
                    </div>
                <!-- <div class="w-full flex flex-row justify-center items-center px-[10%] h-64">
                    <template v-for="i in 5"  >
                        <div v-if="coach.data?.work_experiences[i]" class="w-1/5 z-10  flex items-center justify-center flex-col">

                            <div  class=" group rounded-full bg-white shadow-xl border-[1px] border-gray-200 flex justify-center items-center flex-col h-10 w-10  ">

                                <div class="w-full text-center  mb-10 flex max-h-20 overflow-auto absolute -mt-24  pt-6 -z-10 max-w-32 text-sm " :class="{'mt-20': i % 2 ===0}">
                                    {{ coach.data.work_experiences[i]?.title}}
                                </div>
                                <span class="text-[10px]">{{ coach.data.work_experiences[i]?.from?.slice(0,4)}}</span>
                                <div class="w-full hidden group-hover:flex max-h-20 overflow-auto absolute mt-24 pt-6 -z-10 max-w-28 text-[10px] " :class="{'!-mt-28 !pb-6 !pt-0': i % 2 ===0}">
                                    {{ coach.data.work_experiences[i]?.description}}

                                </div>

                            </div>


                        </div>
                    </template>


                </div> -->
            </div>
        </div>

        <div class="w-1/4 video-col">
            <!-- <h4 class=" font-bold">Video Intro</h4>
            <div class="videoIntro-container">
             <img src="/images/youtube.png" class="yt-icon"> 
            <video v-if="coach.data?.video" :src="coach.data.video"></video>
             
            <img v-else src="/images/Coach-Team_1-p-500.jpg" class="w-fit rounded-lg mt-3" alt="">
             </div> -->
        </div>
        <div class="w-[70%] text-center m-auto flex flex-row justify-center items-center">
            <span class="font-bold text-4xl">WANT TO BE COACHED BY {{this.coach.first_name }} ?</span>
            <Link :href="route('proposals.create' , this.coach.id)" class=" ml-4 unify_button text-lg border-0 px-5 py-2">
                Get Started
            </Link>

        </div>


    </div>
</template>

<script>
import CoachesCards from "@/Components/CoachesCards.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import AddCoachUser from "@/Components/CoachUser/AddCoachUser.vue";
import {Link} from "@inertiajs/vue3";
export default {
    name: "CoachesSingle",
    layout:MainLayout,
    components: {AddCoachUser, CoachesCards  , Link},
    props:{
        coach:Object,
    },
    methods: {
        truncate(text, limit) {
            return text.length > limit ? text.substring(0, limit) + "..." : text;
        }
    }
}
</script>

<style scoped>
    .coache-single-user-profile{
        padding-top: 50px;
    }
    .fs-10 { font-size:10px }
    .text-pink { color:#FB23C4  }
    .text-blue { color: #19D3E0 } 
    .fw-bold { font-weight:bold }
    .best-match-pic .img { height:22px; width:22px; backgrond-color: #19D3E0; border-radius:100%; } 
    .best-match-pic .img img { width:100%; height:100%; object-fit: cover } 
    .gradient-timeline { /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#9645df+0,fb23c4+26,ffd964+51,19d3e0+75,061534+100 */
background: linear-gradient(to right,  #9645df 0%,#fb23c4 26%,#ffd964 51%,#19d3e0 75%,#061534 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */ 

    width:100%; height:14px;
        position: absolute;
    width: 80%;
    margin: 0 auto;
         top: 137px;
    left: 0;
    right: 0; top: 50%;
    left: 0;
    right: 0;
    transform: translateY(-50%);
 } 

 .timeline-row h2 { font-size:20px; font-weight:900; }
 .gradient-timeline-wrap .circle-year { height: 36px;
    width: 36px;
    background: #fff;
    font-size: 10px;
    box-shadow: 1px 1px 25px rgba(0,0,0,0.25);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 100%;  font-weight:bold;
    margin: 0 auto;
        position: absolute;
    left: 0;
    right: 0;
    margin: 0 auto;
        top: 50%;
    transform: translateY(-50%); cursor: default;
     }

    .gradient-timeline-wrap .circle-year:before {    content: "";
    background: #fff;
    top: -10px;
    bottom: -10px;
    left: -10px;
    right: -10px;
    position: absolute;
    z-index: -1;
    opacity: 0;
    transition: all ease 0.5s;     border-radius: 100%;  }

    .gradient-timeline-wrap .circle-year:hover:before {  opacity: 0.5;  }

    .position-relative { position:relative;  }
    .timeline-row-inner { padding:60px 0; } 
    .timeline-row-inner .col {    position: relative;
    min-height: 180px;
    padding: 10px; width:25%;
    display: flex;
    flex-direction: column;
     }
    .timeline-row-inner .col h6 { font-size:11px; font-weight:bold;   
    position: absolute;  text-align: center; left:0; right:0; margin:0 auto;  opacity:0 } 

    .timeline-row-inner .col:nth-child(odd)  .inner-itmes {        bottom: -80px;}
    .timeline-row-inner .col:nth-child(even)  .inner-itmes { top:-80px;  } 
    .timeline-row-inner .inner-itmes { max-width: 120px; transition: all ease 0.5s;  position: absolute; opacity:0; 
    margin: 0 auto;
    left: 0;
    right: 0; }
    
     .timeline-row-inner .col:nth-child(odd)   h6 {       top: 30px;}
    .timeline-row-inner .col:nth-child(even)  h6 { bottom:30px;  } 

    .gradient-timeline-wrap { position:relative; overflow:hidden; }

    .timeline-row-inner .col h6:before {     content: "";
    height: 25px;
    width: 2px;
    background: #ccc;
    position: absolute;
    left: 0;
    right: 0;
    margin: 0 auto;
    top: 18px;  opacity:0; transition: all ease 0.5s; }
    .timeline-row-inner .col:nth-child(even)  h6:before { top:auto; bottom:18px; }

    .timeline-row-inner .col .circle-year:hover + h6:before { opacity:1 }
    .timeline-row-inner .col .circle-year:hover + h6 { opacity:1 }

    .timeline-row-inner .col:nth-child(odd) .circle-year:hover ~ .inner-itmes {  opacity:1;  bottom: 0;}
    .timeline-row-inner .col:nth-child(even) .circle-year:hover ~ .inner-itmes { opacity:1; top:-0;  }
    .location-wrap  { border-right:2px solid #e5e7eb; } 
    .location-wrap .location {     display: flex;
    align-items: center;
    justify-content: center;  }
    .unify_button { color:#000; font-weight:bold;     font-size: 14px;
    min-width: 150px;
    letter-spacing: 0.5px; }
    .profile-pic { position:relative;  height:200px; width:200px; padding:15px; background-color:transparent; margin-bottom:10px }
    .profile-pic img { height:100%; width:100%; margin-bottom:-15px; }
    .profile-pic:before {     content: "";
    height: 220px;
    width: 220px;
    background-image: url('data:image/png;base64,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');
    position: absolute;
    background-size: contain;
    top: 0;
    transform: rotate(357deg);
    left: -10px;
    right: 0;
    margin: 0 auto; z-index:-1; }
    .videoIntro-container { position:relative }
    .videoIntro-container .yt-icon { position:absolute ;    top: 50%;
    left: 0;
    right: 0;
    margin: 0 auto;
    transform: translateY(-50%);}  
    .fs-45 { font-size:45px !important; line-height: 1.1; }
    .fs-40 { font-size:40px !important ; line-height: 1.1;}
    .fs-19 { font-size: 19px; }
    .fs-20 { font-size: 20px; }
    .border-width-2, .border-2 { border-width:2px !important }
</style>
