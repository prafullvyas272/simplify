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
          <div class="row justify-content-center pos_rel">
              <div class="col-md-8 quiz-completed">
                  <div :class="childDetail.child_type === 'teen' ? 'no-cartoon':''" class="bg_congo">
                    <div class="congo_special">
                      <div class="congratulation"><img src="/images/Congratulations!.png" alt=""></div>
                      <h2>You've completed the assessment!</h2>
                      <p>Your results are just a click away—press "Finish" to see them instantly. These insights will help you learn more about your personality style and how to bring out the best in yourself in different situations.</p>
                      <p>Thank you for taking the time to complete this assessment—<strong>you did great!</strong></p>
                      <h2>Keep being awesome! </h2>
                      <!-- <a href="" class="commen_btn m-auto">Finish</a> -->
                      <div class="buttons-profile">
                        <!-- <a :href="route('profile.download_report')" class="commen_btn m-auto">Finish</a> -->
                        <Link v-if="this.childDetail.child_type == 'teen'" class="commen_btn m-auto" :href="route('assessments.teensDiscStyle', {type: 'introduction', user: this.childDetail.id})">Finish</Link>

                        <Link v-if="this.childDetail.child_type == 'kids'" class="commen_btn m-auto" :href="route('assessments.single', {type: 'introduction', user: this.childDetail.id})">Finish</Link>
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
    name: "DiscAssessmentQuestions",
    components:{Link},
    props: {
      childDetail: {
        type: Object,
        default: () => ({}), // Provide an empty object as the default value
      },
    },
    data() {
      return {
        questions: [
          {
            question: "How do you approach problem-solving?",
            answers: [
              { answer: "Directly and decisively", value: "D" },
              { answer: "With creativity and enthusiasm", value: "I" },
              { answer: "Calmly and methodically", value: "S" },
              { answer: "Carefully and analytically", value: "C" },
            ],
          },
          {
            question: "How do you prefer to communicate?",
            answers: [
              { answer: "Assertively and to the point", value: "D" },
              { answer: "Energetically and persuasively", value: "I" },
              { answer: "Patiently and sympathetically", value: "S" },
              { answer: "Precisely and accurately", value: "C" },
            ],
          },
          {
            question: "How do you handle multitasking?",
            answers: [
              { answer: "Prioritize and tackle tasks head-on", value: "D" },
              { answer: "Keep things dynamic and engaging", value: "I" },
              { answer: "Focus on one task at a time", value: "S" },
              { answer: "Organize and schedule tasks methodically", value: "C" },
            ],
          },
        ],
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
      // Pre-select the first answer for each question
      this.selectedAnswers = this.questions.map((question) => question.answers[0].value);
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
.quiz-completed .no-cartoon:after,.quiz-completed .no-cartoon:before{
 background-image: none;
}
</style>
