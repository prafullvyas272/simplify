
<template>
    <div class="group transition duration-1000  w-full h-64 bg-blue-400 rounded-lg pt-5 relative"
         :style="{'background-color' : random_backgrounds[Math.floor(Math.random()*random_backgrounds.length)]}"
    >
        <img v-if="$page.props.auth.user.role_id==3" class="z-0 w-auto max-h-full m-auto" :src="'/storage/'+ this.user_coach.coach.image" alt="">
        <img v-if="$page.props.auth.user.role_id==2" class="z-0 w-auto max-h-full m-auto" :src="'/storage/'+ this.user_coach.student.image" alt="">
        <div class="
        transition duration-1000
        group-hover:min-h-fit
        py-2
        w-full text-white  min-h-14 h-fit
        absolute bottom-0 rounded-lg bg-black
        bg-opacity-30 px-2 flex items-center
        z-10  flex-wrap ">
            <div class="w-full break-words  ">
                <p v-if="$page.props.auth.user.role_id==3"> {{this.user_coach.coach.first_name}} {{this.user_coach.coach.last_name}} </p>
                <p v-if="$page.props.auth.user.role_id==2"> {{this.user_coach.student.first_name}} {{this.user_coach.student.last_name}} </p>
                {{this.user_coach.from_date.slice(0 , 10) }}
            </div>
            <div class="w-full text-right hidden group-hover:block font-bold">
                {{calculate_hours()}} Hours
            </div>
        </div>
    </div>
</template>

<script>
import random_backgrounds from "@/Helpers/RandomBackgrounds.js";

export default {
    name: "CoachUsersCards",
    data(){
        return {
            random_backgrounds:random_backgrounds
        }
    },
    props:{
        user_coach:Object
    },
    methods:{
        calculate_hours(){
            var from_date = new Date(this.user_coach.from_date);
            var to_date = new Date(this.user_coach.to_date);
            //get difference in millis
            var difference = Math.abs(from_date - to_date);
            //convert millis to hours
            return (difference/(1000*3600)).toFixed(2);
        }
    }
}

</script>

<style scoped>

.star-rating {
    color: gold;
    display: inline-block;
    font-size: 1em;
    position: relative;
    transform: translate(-6px);
}

.star-rating__max,
.star-rating__current {
    position: absolute;
    top: 0;
}

.star-rating__current {
    overflow: hidden;
    white-space: nowrap;
}
</style>
