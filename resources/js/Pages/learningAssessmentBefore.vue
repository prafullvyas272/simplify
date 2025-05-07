<template>
    <div class="w-full h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] px-10 flex items-center fixed top-0 z-10">
    <div class="container">
        <Link :href="route('profile.report')">
            <img src="/images/simplify-images/simplify-latest.png" class="max-h-20" alt="Logo">
        </Link>
    </div>
</div>

      <section class="middle_section">
        <div class="container">
          <div class="welcome-disc-assessment row align-items-center">
            <div class="col-md-7">
              <h1>Welcome!</h1>
              <p>Hi there! Are you ready to learn more about yourself and how you like to do things?
                In this fun assesment, you'll see different cartoon pictures with friends in all kinds of situations.
                Each picture shows a different way to handle things. As you go through the questions, you'll pick what you
                would do if you were in the picture.
                By the end, you'll know more about your personality and how you can be your best self in different
                situations.
                Remember, there are no right or wrong answers – just choose the one that feels most like you. Have fun!</p>
            </div>
            <div class="col-md-5">
              <div class="welcome_img"><img src="/images/welcome.png" alt=""></div>
            </div>
          </div>
        </div>
      </section>

      <section>
          <div class="container">
              <div class="bg_brd">
                  <p>Find a Quiet Place</p>
                  <p>Before we begin, make sure you are in a quiet place with no distractions. This will help you focus and think about each question carefully.</p>
              </div>
              <div class="text-center text-md-end">
                <!-- <a :href="route('learning.assessments.create')" class="commen_btn">Let's Begin!</a> -->
                <Link  :href="route('learning.assessments.create',this.childId)" class="commen_btn">
                  Let's Begin!
              </Link>
            </div>
          </div>
      </section>




</template>

<script>

import NavBar from "@/Components/Navigation/NavBar.vue";
import {Link} from "@inertiajs/vue3";
export default {
  props: {
    childId:String
  },
    name: "DiscAssessmentBefore",
    components: {Link, NavBar},
}
</script>


<style scoped>

tbody:before {
    content:"@";
    display:block;
    line-height:10px;
    text-indent:-99999px;
}

.welcome-disc-assessment p{
  font-size: large;
}

.welcome-disc-assessment img{
  height: 500px;
}

@media screen and (min-width:1920px) {
  .welcome-disc-assessment p{
    font-size: x-large;
  }
  .welcome-disc-assessment img{
    height: 600px;
    object-fit: cover;
  }
}

</style>
