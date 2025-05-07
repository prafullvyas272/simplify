<!DOCTYPE html>
<html data-wf-page="65f57e4e932733bcfc473524" data-wf-site="65f57e4d932733bcfc4733eb" lang="en">
<head>
    <meta charset="utf-8">
    <title>Pricing</title>
    <meta content="Pricing" property="og:title" />
    <meta content="Pricing" property="twitter:title" />
    @include('header')

    <style>
        .pricing-wrap{
            display: flex;
            column-gap: 20px;
            width: 100%;
        }
        .price{
            padding-left: 5px;
            padding-right: 5px;
            width: 100%;
            display: inline;
            margin:22px;
        }

        .price-top{
            margin-top: -45px;
            margin-left: 145px;
            position: absolute;
        }
        .price h2{
            padding-top:10px;
        }
        .hero-price-item.mt-40{
            /* height: 300px; */
            height: 520;
        }
        .tab-container {
  margin: 20px 0;
}

.tabs {
  display: flex;
  border-bottom: 2px solid #ddd;
  margin-bottom: 20px;
  justify-content: center;
  padding-bottom: 20px;
}

.tab-button {
  padding: 10px 20px;
  cursor: pointer;
  border: none;
  background-color: #f9f9f9;
  transition: all 0.3s ease;
}

.tab-button.active {
  background-color: #9645DF;
  color: #fff;
  font-weight: bold;
}

.tab-pane {
  display: none;
}

.tab-pane.active {
  display: block;
}

        </style>
        <script>
            function showTab(tabId) {
  const panes = document.querySelectorAll('.tab-pane');
  const buttons = document.querySelectorAll('.tab-button');

  panes.forEach((pane) => pane.classList.remove('active'));
  buttons.forEach((button) => button.classList.remove('active'));

  document.getElementById(tabId).classList.add('active');
  document.querySelector(`.tab-button[onclick="showTab('${tabId}')"]`).classList.add('active');
}

            </script>
</head>
<body>
    <x-navbar-kids/>
    <div class="section pricing-banner">
        <div class="base-container w-container">
          <div class="inner-banner-wrapper">
            <h1
              data-w-id="b216b5d1-f423-d219-88fb-6395af45e5fb"
              style="opacity: 0"
            >
              Our <span class="highlightedText">Pricing</span>
            </h1>
            <p
              data-w-id="e7c3d053-9d0e-c787-803d-3bfdce13483b"
              style="opacity: 0"
              class="banner-central-paragraph"
            >
            We offer flexible plans tailored to your needs. Choose a One-Time Assessment for quick insights or unlock the full potential with our 3 Assessments Package, which helps you track your child's growth over the year. The 3 Assessments Package also includes annual access to Simplify, a personal assistant tool for busy parents, making it our best value option.
            </p>
            <img
              src="images/Banner-Img-1_1Banner Img 1.webp"
              loading="lazy"
              style="
                -webkit-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1)
                  rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0)
                  rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0)
                  rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0)
                  rotateY(0) rotateZ(0) skew(0, 0);
              "
              alt=""
              class="background-img-6"
            /><img
              src="images/Circle-Banner-_1Circle Banner .webp"
              loading="lazy"
              style="
                -webkit-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1)
                  rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0)
                  rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0)
                  rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0)
                  rotateY(0) rotateZ(0) skew(0, 0);
              "
              alt=""
              class="background-img-5"
            />
          </div>
        </div>
    </div>
    <section class="section">
        <div class="w-layout-blockcontainer base-container w-container">
            <div class="tab-container">
                <!-- Tabs Navigation -->
                <div class="tabs">
                  <button class="tab-button" onclick="showTab('one-time')">One Time</button>
                  <button class="tab-button active" onclick="showTab('three-assessments')">3 Assessments</button>
                </div>
              
                <!-- Tabs Content -->
                <div class="tab-content">
                  <!-- One Time Tab -->
                  <div id="one-time" class="tab-pane">
                    <div class="pricing-wrap">
                      <!-- Kids Section -->
                      @if(!empty($pricings))
                        @foreach ($pricings as $item)
                          @if($item->type == "one_time")
                            <div class="hero-price-item mt-40" id="kids-pricing">
                              <div class="price">
                                <div class="price-top">
                                  <div class="personal-package">
                                    <h6 class="price-plan">{{ $item->title }}</h6>
                                  </div>
                                </div>
                                <div class="button-pricing-wrap">
                                  <div class="monthly-wrapper">
                                    <h2 class="price-title">{{ $item->price }} AED</h2>
                                  </div>
                                </div>
                                <p>
                                  <ul>
                                    @foreach ($item->pakageDetail as $pakageDetail)
                                      <li>{!! $pakageDetail->description !!}</li>
                                    @endforeach
                                  </ul>
                                </p>
                                @if($item->status == 1)
                                  <div class="button-flex">
                                    <a href="{{ route('users.register', ['id' => $item->id]) }}" class="primary-button full-width">Let's go!</a>
                                  </div>    
                                @else
                                  <div class="" style="padding-top:35px;">
                                    <p>Please contact us at <a href="mailto:hello@useunify.com">hello@useunify.com</a> if you’d like to sign up for simplify only.</p>
                                  </div>
                                @endif
                              </div>
                            </div>
                          @endif
                        @endforeach
                      @endif
              
                      <!-- Teen Section -->
                      {{-- <div class="hero-price-item mt-40" id="teen-pricing">
                        <div class="price">
                          <div class="price-top">
                            <div class="personal-package">
                              <h6 class="price-plan">TEEN</h6>
                            </div>
                          </div>
                          <div class="button-pricing-wrap">
                            <div class="monthly-wrapper">
                              <h2 class="price-title">479 AED</h2>
                            </div>
                          </div>
                          <p>
                            <strong>
                              Price includes two in-depth reports: one exploring your teen’s
                              personality and the other identifying their preferred learning style.
                            </strong>
                          </p>
                          <div class="button-flex">
                            <a href="{{route('register')}}?type=teen" class="primary-button full-width">Let's go!</a>
                          </div>
                        </div>
                      </div> --}}

                      <!-- Simplify Section -->
                      {{-- <div class="hero-price-item mt-40" id="teen-pricing">
                        <div class="price">
                          <div class="price-top">
                            <div class="personal-package">
                              <h6 class="price-plan">Simplify</h6>
                            </div>
                          </div>
                          <div class="button-pricing-wrap">
                            <div class="monthly-wrapper">
                              <h2 class="price-title">99 AED/pm</h2>
                            </div>
                          </div>
                          <p>
                            <strong>
                              Price includes two in-depth reports: one exploring your teen’s
                              personality and the other identifying their preferred learning style.
                            </strong>
                          </p>
                          <div class="" style="padding-top:35px;">
                          <p>Please contact us at <a href="mailto:hello@useunify.com">hello@useunify.com</a> if you’d like to sign up for simplify only.</p>
                          </div>
                        </div>
                      </div> --}}
                    </div>
                  </div>
              
                  <!-- Three Assessments Tab -->
                  <div id="three-assessments" class="tab-pane active">
                    <div class="pricing-wrap">
                      <!-- 3 Assessments Package -->
                      @if(!empty($pricings))
                        @foreach ($pricings as $item)
                          @if($item->type == "assessments")
                            <div class="hero-price-item mt-40" id="kids-pricing">
                              <div class="price">
                                <div class="price-top">
                                  <div class="personal-package">
                                    <h6 class="price-plan">{{ $item->title }}</h6>
                                  </div>
                                </div>
                                <div class="button-pricing-wrap">
                                  <div class="monthly-wrapper">
                                    <h2 class="price-title">{{ $item->price }} AED</h2>
                                  </div>
                                </div>
                                <p>
                                  {{-- <strong>
                                    Track Growth Over Time Get 3 assessments throughout the year to see how your child's personality style evolves and gain deeper insights into their development. Includes access to Simplify for added support.
                                  </strong> --}}
                                  <ul>
                                    @foreach ($item->pakageDetail as $pakageDetail)
                                      <li>{!! $pakageDetail->description !!}</li>
                                    @endforeach
                                  </ul>
                                </p>
                                <br>
                                <div class="button-flex">
                                  <a href="{{ route('users.register', ['id' => $item->id]) }}" class="primary-button full-width">Let's go!</a>
                                </div>
                              </div>
                            </div>
                          @endif
                        @endforeach
                      @endif    

                      {{-- <div class="hero-price-item mt-40" id="kids-pricing">
                        <div class="price">
                          <div class="price-top">
                            <div class="personal-package">
                              <h6 class="price-plan">TEEN</h6>
                            </div>
                          </div>
                          <div class="button-pricing-wrap">
                            <div class="monthly-wrapper">
                              <h2 class="price-title">999 AED</h2>
                            </div>
                          </div>
                          <p>
                            <ul>
                              <li><strong>Empower their journey</strong> with 3 assessments across the year, tracking personality and learning style changes.</li>
                              <li><strong>Provide tailored strategies</strong> for growth and development at every stage.</li>
                              <li>Includes <strong>Simplify</strong> for streamlined planning and personalized support.</li>
                              <li><strong>Ask AI</strong> for immediate help in engaging with your child based on their unique personality and learning style.</li>
                              <li><strong>Priority Support</strong> for faster assistance when you need it most.</li>
                              <li><strong>Coming Soon:</strong> Homework Help Bot for tailored study strategies aligned with their learning style.</li>
                            </ul>

                          </p>
                          
                            <a href="{{route('register')}}?type=teen" class="primary-button full-width">Let's go!</a>
                          
                        </div>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
              
        </div>
    </section>
    @include('footer')
    </body>
</html>