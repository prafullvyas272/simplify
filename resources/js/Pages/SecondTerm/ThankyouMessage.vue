<template>

    <div class="w-full h-16 bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] px-10 flex items-center fixed top-0 z-10">
        <div class="w-1/6 img-logo">
            <Link :href="route('profile.report')">
                <img src="/images/simplify-images/simplify-latest.png" class="max-h-20" alt="Logo">
            </Link>
        </div>
    </div>


        <section class="thankyoupage hidden sm:block">
          <div class="container inner-box">
          <h1>Thank you for choosing Unify!</h1>
          <p>We’re thrilled to have you join us on this journey of self-discovery for your child.</p>
          <p>Your trust in Unify means a lot to us, and we’re here to provide valuable insights that will support your child’s growth and development.</p>
          <p>
            Over the next steps, you’ll find clear instructions to guide you and your child through the assessments. There are <span class="highlight">two assessments</span> to complete:
          </p>

          <div class="assessment-section">
            <div class="assessment-card assessment-card-one">
              <h3>Learning Styles Assessment</h3>
              <p>To understand how your child learns best.</p>
            </div>
            <div class="assessment-card assessment-card-two">
              <h3>Personality Assessment</h3>
              <p>To uncover their unique personality traits.</p>
            </div>
          </div>

          <div class="footer">
            <!-- <p>
              If you need to pause for any reason, don’t worry! Your progress will be saved, and you can return to finish the assessments at any time. However, please note that reports will only be generated after both assessments are completed.
            </p>
            <p>
              If you have any questions along the way, feel free to reach out to us at <a href="mailto:hello@useunify.com">hello@useunify.com</a> – we’re here to help!
            </p> -->
            <p>
                We recommend completing the assessments in one go for the best experience. Reports will only be generated after both assessments are completed.
            </p>
            <p>
                If you need any assistance, feel free to reach out to us at hello@useunify.com – we're here to help!
            </p>
          </div>
        </div>
        </section>
        <section class="footer-buttons hidden sm:block">
            <div class="container">
                <div class="text-center text-md-end">
                  <!-- <a :href="route('disc.assessments.create')" class="commen_btn">Let's Begin!</a> -->
                  <Link  :href="route('showSecondTermNoteForParentsPage',this.childId)" class="commen_btn">
                    Let's Begin!
                </Link>
              </div>
            </div>
        </section>

        <div class="sm:hidden mobile-device-height flex items-center justify-center bg-gray-100 dark:bg-gray-900 lg:hidden mobile-screen-experience">
            <div class="text-center  py-10 bg-white rounded-xl shadow-md">
                <h2 class="text-2xl font-bold">
                    For the best experience, please take the assessment on a laptop or PC. You can log in at <a href="https://www.useunify.com">useunify.com</a>
                </h2>

            </div>
        </div>




    </template>

    <script>

    import NavBar from "@/Components/Navigation/NavBar.vue";
    import {Link} from "@inertiajs/vue3";
    export default {
    props: {
      childId:String
    },
      name: "ThankYouMessage",
      components: {Link, NavBar},
    }
    </script>


    <style scoped>

    .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    }

    .mobile-screen-experience {
        margin-top: 117px;
    }

    .img-logo {
        /* margin-left: 93px; */
    }

    .main-heading {
    font-size: 1rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
    }

    .intro-text {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
    margin-bottom: 15px;
    }

    .girls_img img,
    .boys_img img {
    border-radius: 5%;
    width: 200px;
    height: 200px;
    object-fit: cover;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    }

    .btn-custom {
    background: linear-gradient(to right, #fbd3e9, #bb377d);
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 1.1rem;
    border-radius: 25px;
    cursor: pointer;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .btn-custom:hover {
    opacity: 0.9;
    }

    @media screen and (min-width:1920px) {
    .main-heading {
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .intro-text{
      font-size: 1.2rem;
    }
    }

    .thankyoupage{
      max-width: 80vw;
      margin-left: 10vw;
      justify-content: center;
      position: relative;
      background: linear-gradient(to right,#DDB7FF, #FF83DF);
      padding: 3px;
      margin-top:90px;
    }

    .inner-box{
      background-color: #ffffff;
    }
    .thankyoupage .container {
        max-width: fit-content;
        padding: 20px;
        text-align: center;
      }
      h1 {
        font-family: 'Poppins';
        font-weight: 900;
        font-size: 35px;
      }
      p {
        font-size: 16px;
        line-height: 1.5;
        margin: 10px 0;
      }
      .highlight {
        font-weight: bold;
        color: #000;
      }
      .assessment-section {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
      }
      .assessment-card {
        background-repeat: no-repeat;
        background-size: contain;
        width: 25%;
        height: 275px;
        padding-top: 98px;
        padding-left: 20px;
        padding-right: 35px;
        border-radius: 8px;
        text-align: center;
        position: relative;
      }
      .assessment-card-one{
        background-image: url('/images/5.png');
      }
      .assessment-card-two{
        background-image: url('/images/6.png');
      }
      .assessment-card img {
        width: 20px;
        height: 20px;
        position: absolute;
        top: 10px;
        left: 10px;
      }
      .assessment-card h3 {
        font-size: 18px;
        margin: 10px 0;
        font-weight: bold;
      }
      .assessment-card p {
        font-size: 14px;
      }
      .footer {
        margin-top: 20px;
        border-top: 2px solid #e0e0e0;
        padding-top: 10px;
        font-size: 14px;
      }
      .footer a {
        color: #091532;
        text-decoration: none;
        font-weight: bold;
      }
      .button-container {
        margin-top: 20px;
      }
      .button {
        padding: 10px 20px;
        background: linear-gradient(90deg, #fcb045, #fd1d1d, #833ab4);
        border: none;
        border-radius: 20px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: transform 0.2s;
      }
      .button:hover {
        transform: scale(1.05);
      }

    @media screen and (min-width:1920px) {
      .assessment-card{
        width:17%;
      }
    }
    </style>



