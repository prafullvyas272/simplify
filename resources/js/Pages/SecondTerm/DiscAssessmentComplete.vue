<template>
    <div class="w-full h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] px-10 flex items-center fixed top-0 z-10">
    <div class="w-1/6 img-logo">
        <Link :href="route('profile.report')">
            <img src="/images/simplify-images/simplify-latest.png" class="max-h-20" alt="Logo">
        </Link>
    </div>
</div>


    <section class="middle_section first-quiz-completed">
        <div class="container" style="margin-top: 90px;">
          <div class="row justify-content-center pos_rel">
              <div class="col-md-8">
                  <div :class="childDetail.child_type === 'teen' ? 'no-cartoon':''" class="bg_congo">
                    <div class="congo_special">
                      <div v-if="childDetail.child_type === 'kids'" class="congratulation"><img src="/images/Congratulations!.png" alt=""></div>
                      <div v-if="childDetail.child_type === 'teen'" class="congratulation"><img src="/images/awesome-job.png" alt=""></div>
                      <h2 class="color-blue">You've completed the <strong>first part</strong> of the assessment.</h2>
                      <p v-if="childDetail.child_type === 'kids'" class="color-blue">Take a little break and when you're ready click the button below to go to the next assessment, where we find out more about your personality style.</p>
                      <p v-if="childDetail.child_type === 'teen'" class="color-blue">Take a quick breather—grab some water, stretch, or just chill for a moment. When you’re ready, hit the button below to jump into the next part. This is where we’ll dive into learning more about your unique personality style.</p>
                      <h3></h3>
                      <!-- <a href="" class="commen_btn m-auto">Finish</a> -->
                      <div class=" mb-4">
                        <!-- <a :href="route('profile.download_report')" class="commen_btn m-auto">Finish</a> -->
                        <!-- <Link class="commen_btn m-auto" :href="route('ready-to-discover',this.childId)">Let's Go</Link> -->
                        <Link class="commen_btn m-auto" :href="route('showSecondTermDiscAssessmentBefore',this.childId)">{{childDetail.child_type === 'teen' ? "Ready to keep going? Let’s do this!":"Let's Go"}}</Link>
                      </div>

                      <!-- <Link class="commen_btn m-auto" :href="route('profile.download_report')">Finish</Link> -->
                      <!-- <Link class="commen_btn m-auto" :href="route('learning.assessments.pay')">Take Learning Assessment</Link> -->
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </section>
  </template>

  <script>
  import axios from 'axios';
  import {Link} from "@inertiajs/vue3";

  export default {
    props: {
      childId:String,
      childDetail: {
        type: Object,
        default: () => ({}), // Provide an empty object as the default value
      },
    },
    name: "DiscAssessmentComplete",
    components:{Link},
    data() {
      return {
        currentQuestionIndex: 0, // Track which question is being displayed
        selectedAnswers: [], // Array to hold the selected answer for each question
        submitting: false,
      };
    },
    methods: {
      nextQuestion() {
        // Move to the next question, if available
        if (this.currentQuestionIndex < this.questions.length - 1) {
          this.currentQuestionIndex++;
        }
      },
      submit_form() {
        this.submitting = true;
        window.location.href = "/dashboard"
        // axios
        //   .post("https://todai.blueskythinkingtesting.com/unify/api/assessment", {
        //     email: this.$page.props.auth.user.email,
        //     answers: this.selectedAnswers,
        //   })
        //   .then((response) => {
        //     if (response.data.status === "Success") window.location.href = "/dashboard";
        //   });
      },
    },
    mounted() {
    },
  };
  </script>

  <style scoped>
.congo_special .congratulation{
  padding-left: 25px;
}
.congo_special{
  z-index: 999;
}
.buttons-profile{
  padding-top:50px;
}
.color-blue{
  color:#091532;
}
.first-quiz-completed .no-cartoon:after,.first-quiz-completed .no-cartoon:before{
 background-image: none;
}
</style>
