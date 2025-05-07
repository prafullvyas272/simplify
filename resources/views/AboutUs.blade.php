<!DOCTYPE html>
<html data-wf-page="65f57e4e932733bcfc473524" data-wf-site="65f57e4d932733bcfc4733eb" lang="en">
<head>
    <meta charset="utf-8">
    <title>About Us</title>
    <meta content="About Us" property="og:title" />
    <meta content="About Us" property="twitter:title" />
    @include('header')

    <style>
    body{
      font-family: 'Poppins', sans-serif;
      width: 100%;
    overflow-x: hidden; /* Prevent horizontal scrolling */
    box-sizing: border-box;
    }
    .h3{
      font-size: 48px;
      font-weight: 900;
    }
    body .hero-without-image{
      background-color: #ffffff;
      border: none;
    }
    body .without-padding{
      padding-bottom: 0px;
    }
    body .features-left{
      padding-top:50px;
    }


    /**
    section for build features
    **/
    .disc-section {
      text-align: center;
      background: linear-gradient(90deg, #ddb7ff 0%, #fff8e3 50%, #ff83df 100%);
      padding: 50px 20px;
      color: #061534;
    }

    .section-title {
      font-weight: bold;
      margin-bottom: 40px;
      color: #000;
    }

    .numbers-wrapper {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      flex-wrap: wrap;
    }

    .number-wrap {
      background: #fff;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      flex: 1 1 calc(33.333% - 20px);
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .icon-box {
      font-size: 24px;
      font-weight: bold;
      color: #8a2be2;
      border: 2px solid #8a2be2;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 10px;
    }

    .big-number {
      font-size: 18px;
      font-weight: bold;
      color: #000;
      margin-bottom: 10px;
    }

    .description {
      font-size: 14px;
      line-height: 1.5;
      color: #333;
    }

    .testimonial-main-heading{
      font-size: 35px;
    }

    .unify-approach-image{
        width: 40%;
    }
    

    @media screen and (max-width: 767px) {
      body {
        overflow-x: hidden;
        width: 100%;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
      }
      .section-res {
            display: flex !important;
            flex-direction: column !important;
       }

      .res-width {
        width: 100% !important;
      }

      .section-res .image {
        width: 100% !important;
      }

      .section-res p {
        margin-top: 20px !important;
      }

      .numbers-wrapper {
        flex-direction: column;
      }

      .btn-res {
        width: 260px !important;
      }
      .unify-approach-image{
        width: 100%;
      }
    }

    @media screen and (max-width: 990px) {
      .unify-approach-image{
        width: 55%;
        margin-left: auto;
        margin-right: auto;
      }
    }
  </style>
</head>
<body>
    <x-navbar-kids/>
    <section class="section about-us">
        <div class="w-layout-blockcontainer base-container w-container">
            <div class="inner-banner-wrapper">
                <h1 data-w-id="7e43c2f1-32d2-435c-7f83-efdd223e1569"> About Our <span class="highlightedText"> Assessments </span></h1>
                <p data-w-id="c1fac46d-6692-ab29-5bf5-0d0412d4bcf5" class="banner-central-paragraph">
                We are dedicated to equipping parents, teachers, and caregivers with
                the insights they need to support their child’s individual journey.
                <br /><br />By offering scientifically validated assessments and
                actionable recommendations, we aim to create an environment where
                every child can thrive, both academically and personally.<br /><br />Find
                out more about our assessments below:<br /><br />‍
                </p>
                <div data-w-id="1afa7df6-77ae-e32c-8705-5534b74d3ecf" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="button-flex">
                  <a href="#disc-highlights" class="primary-button">Personality assessment</a>
                  <a href="{{route('learningStyle')}}" class="primary-button">Learning Styles Assessment</a>
                </div>
                <img src="images/Banner-Img-1_1Banner Img 1.webp" loading="lazy" alt="" class="background-img-6"/>
                <img
                src="images/Circle-Banner-_1Circle Banner .webp"
                loading="lazy"
                alt=""
                class="background-img-5"
                />
            </div>
        </div>
        <section class="section without-padding" id="disc-highlights">
          <section class="hero-without-image text-center" style="padding: 80px 30px 0 30px">
            <div class="container-2 mb-30">
              <div class="hero-wrapper-two-2">
                <h1>The<span class="highlightedText"> DISC Model </span>of Human Behaviour</h1>
              </div>
            </div>
            <div class="section-res" style="display: inline-block">
            <img
              src="images/shutterstock_1932180473.jpg"
              loading="lazy"
              width="35%"
              sizes="(max-width: 767px) 100vw, (max-width: 1279px) 94vw, 1163px"
              alt=""
              srcset="
                images/shutterstock_1932180473-p-500.jpg   500w,
                images/shutterstock_1932180473-p-800.jpg   800w,
                images/shutterstock_1932180473-p-1080.jpg 1080w,
                images/shutterstock_1932180473-p-1600.jpg 1600w,
                images/shutterstock_1932180473-p-2000.jpg 2000w,
                images/shutterstock_1932180473-p-2600.jpg 2600w,
                images/shutterstock_1932180473-p-3200.jpg 3200w,
                images/shutterstock_1932180473.jpg        9504w
              "
              class="image"
            />
            <p class="margin-bottom-24px-2 res-width" style="display:inline-block;width:40%;padding-left:20px;vertical-align: middle;" >
              Unify assessments are built upon the DISC model of human
              behaviour, a psychological framework developed by Dr. William
              Marston in the 1920s. This model categorises human behaviour
              into four primary personality traits: Dominant, Influential,
              Supportive and Cautious. Each trait represents a distinct way
              in which individuals interact with the world, communicate, and
              approach challenges.<br /><br />This model has been
              extensively researched and validated in both educational and
              professional settings, making it a trusted tool for
              personality assessment.<br/>
            </p>
            
          </div>
            <section class="hero-without-image-2">
                <section class="testimonial-column-light">
                  <div class="container-3">
                    <h2 class="centered-heading">DISC <span class="highlightedText">Highlights</span></h2>
                    <div class="testimonial-grid-two">
                      <div
                        id="w-node-_568cfa1a-cefa-eddc-3c8f-75d63d3200a9-fc47347e"
                        class="testimonial-card-two gradient-border"
                      >
                        <div class="bg-white">
                            <h3 class="testimonial-main-heading bg-white">Widely Adopted</h3>
                            <p class="testimonial-text-two bg-white">
                              DISC assessments are used by over 70% of Fortune 500
                              companies for leadership development, team building, and
                              communication training. This widespread adoption speaks
                              to the model’s credibility and effectiveness.
                            </p>
                        </div>
                      </div>
                      <div
                        id="w-node-_568cfa1a-cefa-eddc-3c8f-75d63d3200b3-fc47347e"
                        class="testimonial-card-two gradient-border">
                        <div class="bg-white">
                          <h3 class="testimonial-main-heading">
                            Backed by Experts
                          </h3>
                          <p class="testimonial-text-two">
                            DISC assessments are endorsed by leading psychologists,
                            educators, and business leaders for their ability to
                            accurately assess and improve individual and group
                            performance.
                          </p>
                        </div>
                      </div>
                      <div id="w-node-_568cfa1a-cefa-eddc-3c8f-75d63d3200bd-fc47347e"
                        class="testimonial-card-two gradient-border">
                        <div class="bg-white">
                          <h3 class="testimonial-main-heading">
                            Proven Track Record
                          </h3>
                          <p class="testimonial-text-two">
                            The DISC model has been a cornerstone in educational
                            psychology for decades, helping millions of students
                            worldwide to better understand their own behaviors and
                            learning preferences.
                          </p>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </section>
            </section>
            @include('sections.four-disc-traits')
          </section>
        </section>

        <section class="hero-subscribe-left">
          <section class="features-list">
            <div class="">
              <div class="features-wrapper-two">
                <div class="features-left">
                  <h2>The Unify Approach</h2>
                  <p class="features-paragraph">
                    Unify Child &amp; Teen assessments are age-appropriate
                    ensuring that the questions and scenarios are
                    age-appropriate and engaging. We have refined the DISC
                    model to focus on the traits that are most relevant
                    during childhood and adolescence, providing actionable
                    insights that parents and educators can easily apply in
                    everyday interactions.
                  </p>
                  
                </div>
                <img
                    src="images/Screenshot-2024-09-02-at-3.47.30-PM.png"
                    loading="lazy"
                    class="unify-approach-image"
                    alt=""
                    srcset="
                      images/Screenshot-2024-09-02-at-3.47.30-PM-p-500.png  500w,
                      images/Screenshot-2024-09-02-at-3.47.30-PM-p-800.png  800w,
                      images/Screenshot-2024-09-02-at-3.47.30-PM.png       1018w
                    "
                  />
                
              </div>
              <ul role="list" class="features-right w-list-unstyled">
                <li class="features-block-two">
                  <img
                    src="images/Icon-2_1Icon 2.png"
                    loading="lazy"
                    alt=""
                    class="features-image"
                  />
                  <p>
                    <strong>Tailored for Children &amp; Teens:</strong><br /><br />While
                    the traditional DISC model is designed for adults,
                    we’ve adapted it to be more relevant and engaging for
                    younger audiences. Our assessments include
                    age-appropriate questions and scenarios that resonate
                    with children and teens.
                  </p>
                </li>
                <li class="features-block-two">
                  <img
                    src="images/Icon-2_1Icon 2.png"
                    loading="lazy"
                    alt=""
                    class="features-image"
                  />
                  <p>
                    <strong>Actionable Insights:<br /><br />‍</strong>Our
                    DISC reports don’t just tell you about your child’s
                    personality; they provide actionable recommendations
                    for how to support their growth. Whether it’s tips for
                    better communication, strategies for handling stress,
                    or advice on how to motivate them, our reports are
                    designed to be practical and easy to implement.
                  </p>
                </li>
                <li class="features-block-two">
                  <img
                    src="images/Icon-2_1Icon 2.png"
                    loading="lazy"
                    alt=""
                    class="features-image"
                  />
                  <p>
                    <strong>Well-Rounded Guidance:<br />‍<br /></strong>
                      Our assessments provide tailored strategies not only
                      for parents but also for educators, ensuring that
                      your child or teen receives consistent support in
                      all aspects of their life. This dual approach
                      creates a well-rounded support system that
                      encourages growth and success in both educational
                      and personal environments.
                  </p>
                </li>
              </ul>
            </div>
          </section>
        </section>
      </section>
      <section class="disc-section">
        <h2 class="section-title">Transforming Lives with DISC Insights</h2>
        <div class="numbers-wrapper">
          <div class="number-wrap">
            <div class="icon-box"></div>
            <h3 class="big-number">Improved Classroom Dynamics</h3>
            <p class="description">
              Schools that have implemented DISC assessments report improved classroom dynamics, with teachers better able to tailor their teaching strategies to meet the diverse needs of their students.
            </p>
          </div>
          <div class="number-wrap">
            <div class="icon-box"></div>
            <h3 class="big-number">Better Family Relationships</h3>
            <p class="description">
              Parents who use our DISC assessments often find that they better understand their child’s needs and behaviors, leading to improved family communication and stronger relationships.
            </p>
          </div>
          <div class="number-wrap">
            <div class="icon-box"></div>
            <h3 class="big-number">Increased Student Engagement</h3>
            <p class="description">
              By aligning teaching methods with students’ DISC profiles, educators have seen increased engagement, participation, and academic performance in their classrooms.
            </p>
          </div>
        </div>
      </section>
        <section class="section" style="justify-items: center;padding-top: 60px;padding-bottom: 60px;">
          <a href="/pricing#kids-pricing" class="primary-button btn-res" style="width:30%">get Started Today!</a>
        </section>
      @include('footer')
    </body>
</html>