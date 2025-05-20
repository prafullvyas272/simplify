<template>
    <div class="w-full h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] px-10 flex items-center fixed top-0 z-10">
    <div class="w-1/6 img-logo">
        <Link :href="route('profile.report')">
            <img src="/images/simplify-images/simplify-latest.png" class="max-h-20" alt="Logo">
        </Link>
    </div>
</div>


      <section class="middle_section">
        <div class="container" style="margin-top: 90px;">
          <div v-if="childDetail.child_type === 'kids'" class="welcome-disc-assessment row align-items-center mt-4">
            <div class="col-md-7">
              <h1 class="color-blue font-bold text-3xl"><strong>Welcome!</strong></h1>
              <p class="color-blue">Hi there! Are you ready to learn more about yourself and how you like to do things?
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
          <div v-if="childDetail.child_type === 'teen'" class="welcome-disc-assessment row align-items-center mt-4">
            <div class="col-md-12 ">
              <p class="welcome-heading">Welcome!</p>
              <p class="py-2">Hey there! Are you ready to discover more about your personality and what makes you, you? This assesment is designed to help you understand how you handle situations, interact with others, and bring out your best self.</p>
              <p class="py-2">Throughout the questions, you’ll see scenarios where you’ll need to make choices. <strong>Your task? Pick the option that feels Most Like You and the one that’s Least Like You.</strong></p>
              <p class="py-2">There’s no right or wrong—just be honest and go with what feels natural. The more real you are, the better the results will reflect your personality style. By the end, you’ll gain some awesome insights into how you think, act, and communicate.</p>
              <p class="py-2"><strong>Let’s get started and uncover the real you—have fun!</strong></p>
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
                <!-- <a :href="route('note-for-parents')" class="commen_btn">Let's Begin!</a> -->
                <Link  :href="route('disc.showSecondTermAssessmentForm',this.childId)" class="commen_btn">
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
    childId:String,
    childDetail: {
      type: Object,
      default: () => ({}), // Provide an empty object as the default value
    },
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

.color-blue{
  color:#091532;
}

p.welcome-heading {
  font-size: 2.5rem !important;
  font-weight: 900;
  font-style: 'Poppins';
  color: #091532;
  margin-bottom: 20px;
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
