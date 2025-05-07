
<template>
    <div class="group transition duration-1000  w-full h-64 bg-blue-400 rounded-lg pt-5 relative"
         :style="{'background-color' : random_backgrounds[Math.floor(Math.random()*random_backgrounds.length)]}"
    >
        <img class="z-0 w-auto max-h-full m-auto" :src="'/storage/'+ student.image" alt="">
        <div class="
        transition duration-1000
        group-hover:min-h-fit
        py-2
        w-full text-white  min-h-14 h-fit
        absolute bottom-0 rounded-lg bg-black
        bg-opacity-30 px-2 flex items-center
        z-10  flex-wrap ">
            <div class="w-1/2 break-words  ">
                {{this.student.first_name }} {{this.student.last_name}}
            </div>

        </div>
    </div>
</template>

<script>
import random_backgrounds from "@/Helpers/RandomBackgrounds.js";

export default {
    name: "ProposalsCards",
    data(){
        return {
            random_backgrounds:random_backgrounds
        }
    },
    props:{
        student:Object,
    },
}

</script>

<style scoped>
</style>
