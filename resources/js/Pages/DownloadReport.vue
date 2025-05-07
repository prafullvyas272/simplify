<template>
    <!-- <section class="header_bg">
      <div class="container">
        <a href="#"><img src="/images/simplify-images/simplify-latest.png" alt=""></a>
      </div>
    </section> -->

    <section class="middle_section">
        <div class="container">
          <div class="download-reports row justify-content-center pos_rel">
              <div class="col-md-8">
                  <div class="my-4">
                    <div class="congo_special text-center">
                      <h2 class="mb-20">Click on the report below that you'd like to download!</h2>
                      <div class="grid grid-cols-2 gap-4 my-24">
                        <a v-if="this.disc_payment_status" class="commen_btn download_report_btn m-auto"  target="_blank" :href="disc_report_url" download="Personality_Discovery_Report.pdf">Personality Discovery Report</a>
                        <a v-if="this.disc_payment_status" class="commen_btn download_report_btn m-auto" :href="learn_report_url" download="Learning_Style_Report.pdf" target="_blank">Learning Styles Report</a>
                        <!-- <a v-if="this.learn_payment_status === 0" :href="route('learning.assessments.pay')" class="commen_btn m-auto">Take Learning Assessment</a> -->
                      </div>
                      <p>Thank you for taking our assessments!</p>
                      <h3 style="margin-top: 50px;"  >Check back soon for exciting updates to our system.</h3>
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
  import MainLayout from "@/Layouts/MainLayout.vue";

  export default {
    name: "DiscAssessmentQuestions",
    components:{Link},
    layout:MainLayout,
    data() {
      return {
        currentQuestionIndex: 0, // Track which question is being displayed
        selectedAnswers: [], // Array to hold the selected answer for each question
        submitting: false,
      };
    },
    props: {
      disc_report_url: {
        type: String,
        required: true,
      },
      learn_report_url: {
        type: String,
        required: true,
      },
      disc_payment_status: {
        type: String,
        required: true,
      },
      learn_payment_status: {
        type: String,
        required: true,
      },

    },

  };
  </script>

  <style scoped>
.download-reports{
  margin-top: 20px;
}
</style>
