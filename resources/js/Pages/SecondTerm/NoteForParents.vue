<template>

    <div class="w-full h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] px-10 flex items-center fixed top-0 z-10">
        <div class="w-1/6 img-logo">
            <Link :href="route('profile.report')">
                <img src="/images/simplify-images/simplify-latest.png" class="max-h-20" alt="Logo">
            </Link>
        </div>
    </div>

          <section class="middle_section mt-4">
            <div class="container" style="margin-top: 90px;">
        <h1>A Note for Parents:</h1>
        <p>
          Welcome! Before you and your child start the assessments, please take a moment to review these instructions to ensure you get the most accurate results.
        </p>

        <div class="instructions-section">
          <div class="instruction-card" style="background: #FFEB85;">
            <h3>Set the Stage</h3>
            <p>Create a quiet, comfortable space where your child can focus without distractions. This will help them think clearly and answer each question truthfully.</p>
          </div>
          <div class="instruction-card" style="background: #f8bb7f;">
            <h3>Understand the Purpose</h3>
            <p>Let your child know that this assessment is all about discovering more about them. There are no right or wrong answers—just what feels most natural to them.</p>
          </div>
          <div class="instruction-card" style="background: #FFB1B1;">
            <h3>Take Your Time</h3>
            <p>Encourage your child to take their time with each question. It’s important that they choose the answer that best reflects how they feel or behave in different situations.</p>
          </div>
          <div class="instruction-card" style="background: #B2FFA3;">
            <h3>Be Honest</h3>
            <p>Remind your child that their honest responses will help us understand their unique learning style and personality traits. This information will guide both you and their teachers in providing the best possible support.</p>
          </div>
          <div class="instruction-card" style="background: #A8E9FF;">
            <h3>Complete in One Sitting</h3>
            <p>Try to complete the assessment in one sitting to ensure consistency in your child’s responses. </p>
          </div>
          <div class="instruction-card" style="background: #C0C7FF;">
            <h3>Know the Process</h3>
            <p>Remember, there are two assessments to complete: one for learning styles and one for personality. Reports will only be generated once both assessments are finished.</p>
          </div>
        </div>
      </div>
          </section>

          <section>
              <div class="container">
                  <div class="text-center text-md-end">
                    <!-- <a :href="route('ready-to-discover')" class="commen_btn">Let's Begin!</a> -->
                    <Link  :href="route('showSecondTermReadyToDiscoverPage',this.childId)" class="commen_btn">
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



    .container {
      text-align: center;
      color:#061534 !important;
      font-family: 'Poppins', sans-serif;
    }
    h1 {
      font-size: 28px;
      margin-bottom: 15px;
      color: #061534 !important;
      font-weight: 900;
      font-family: 'Poppins';
    }
    h3{
      font-weight: 900;
    }
    p {
      font-size: 16px;
      line-height: 1.8;
      margin: 10px 0;
      color: #061534 !important;
    }
    .instructions-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-top: 30px;
    }
    .instruction-card {
      flex: 1 1 calc(33.333% - 20px);
      max-width: calc(33.333% - 20px);
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      color: #061534 !important;
      font-size: 14px;
      font-weight: 500;
    }
    .instruction-card h3 {
      font-size: 18px;
      margin-bottom: 10px;
    }


    </style>
