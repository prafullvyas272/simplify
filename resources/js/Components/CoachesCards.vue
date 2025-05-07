
<template>
    <div class="group transition duration-1000  w-full h-64 bg-blue-400 rounded-lg pt-5 relative"
         :style="{'background-color' : random_backgrounds[Math.floor(Math.random()*random_backgrounds.length)]}"
    >
<!--        todo '/profiles/'+ -->
        <img class="z-0 w-auto max-h-full m-auto" @error="$event.target.src='/images/default/placeholder.png'"  :src="'/storage/'+ this.coach.image" alt="Coach Profile">
        <div class="
        transition duration-1000
        group-hover:min-h-fit
        py-2
        w-full text-white  min-h-14 h-fit
        absolute bottom-0 rounded-lg bg-black
        bg-opacity-30 px-2 flex items-center
        z-10  flex-wrap ">
                <div class="w-1/2 break-words  ">
                    {{this.coach.first_name }} {{this.coach.last_name}}
                </div>
                <div class="w-1/2">
                    <div class="star-rating">
                        <span v-for="n in 5">&star;</span>
                        <div class="star-rating__current" :style="{width: getRating + '%'}">
                            <span v-for="n in 5">&starf;</span>
                        </div>
                    </div>
                </div>
            <div class="w-full break-words opacity-0 group-hover:opacity-100  hidden group-hover:block">
                {{ truncatedAbout }}
            </div>
            <div class="w-full text-right hidden group-hover:block font-bold">
                {{ this.coach.data?.rate }} $/Hour
            </div>
        </div>
    </div>
</template>

<script>
import random_backgrounds from "@/Helpers/RandomBackgrounds.js";

export default {
    name: "CoachesCards",
    data(){
        return {
            random_backgrounds:random_backgrounds,
            limit:100
        }
    },
    props:{
        coach:Object
    },
    computed:{
        getRating: function() {
            return (this.coach.rating / 5) * 100
        },
        truncatedAbout() {
            const aboutText = this.coach.data?.about || '';
            if (aboutText.length > this.limit) {
                return aboutText.substring(0, this.limit) + '...';
            }
            return aboutText;
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
