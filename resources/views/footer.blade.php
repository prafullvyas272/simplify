<style>
  .bottom-background-footer{
    height: 0px;
  }
</style>
<?php $notIncluded = array('contact-us');

if(!in_array(request()->path(),$notIncluded)):
?>
<section class="get-in-toch-footer">
  <div class="w-layout-blockcontainer base-container w-container">
    <div
      data-w-id="32cfaa40-6084-3269-49c3-45fd76856728"
      class="contact-wrapper-footer"
    >
      <div class="content-contact">
        <h2 class="light-text">Invest in Your Child&#x27;s Future Today</h2>
        <p class="white-opacity">
          Take our assessment today and recieve practical, research-backed
          strategies to support their academic and personal growth!
        </p>
      </div>
      <div class="button-flex">
        <a href="{{route("contact-us")}}" class="secondary-button">Contact Us</a>
        <a href="{{route("pricing")}}#pricing-wrap" class="secondary-button-border"
          >Take Our Assessment</a
        >
      </div>
      <img
        src="images/Get-In-Touch-Lines.png"
        loading="lazy"
        alt=""
        class="background-contact-footer"
      />
    </div>
  </div>
</section>
<?php endif; ?>
<div
class="footer"
style="
  background: linear-gradient(
    90deg,
    #ddb7ff 0%,
    #fff8e3 50%,
    #ff83df 100%
  );
"
>
<div class="base-container w-container">
  <div class="footer-wrapper">
    <div class="footer-brand-wrapper">
      <a href="{{route('homepage')}}" class="footer-brand w-nav-brand"
        ><img
          src="images/logo-white-color-dot.png"
          loading="lazy"
          sizes="100vw"
          height="100"
          alt=""
          srcset="
            images/logo-white-color-dot-p-500.png   500w,
            images/logo-white-color-dot-p-800.png   800w,
            images/logo-white-color-dot-p-1080.png 1080w,
            images/logo-white-color-dot-p-1600.png 1600w,
            images/logo-white-color-dot-p-2000.png 2000w,
            images/logo-white-color-dot-p-2600.png 2600w,
            images/logo-white-color-dot-p-3200.png 3200w,
            images/logo-white-color-dot.png        3500w
          "
          class="footer-logo"
      /></a>
      <h4 class="footer-brand-description" style="color:#061534 !important;">Shape Your Future: From Learning <br><span class="highlightedText">to Leading</span></h4>
      <a
        href="mailto:hello@useunify.com"
        class="mail-footer"
        style="color: rgb(6, 21, 52) !important"
        >hello@useunify.com</a
      >
      <div class="footer-social-icons-wrapper">
        <a href="https://x.com/use_unify" target="_blank" class="footer-social-icon"></a>
        {{-- <a href="https://www.facebook.com/" target="_blank" class="footer-social-icon"></a> --}}
        <a href="https://www.instagram.com/useunify/" target="_blank" class="footer-social-icon"></a>
        <a href="https://www.linkedin.com/company/useunify-global/" target="_blank" class="footer-social-icon"> <i class="fab fa-linkedin"></i></a>
    </div>
    </div>
    <div class="footer-links-wrapper"></div>
  </div>
  <div class="footer-bottom-wrapper">
    <div class="footer-copyright">
      © Unify. All Rights Reserved 2024.
    </div>
    <div class="footer-social-icons-wrapper">
      <a href="{{route('privacy')}}"  class="m-lr-10 text-center">Privacy Policy</a
>
      <a href="{{route('terms')}}" class="m-lr-10 text-center">Terms and Conditions of Use</a>

      <a href="{{route('cookies')}}" class="m-lr-10 text-center">Cookie Policy </a>

  </div>
  </div>
</div>
</div>
<script
src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65f57e4d932733bcfc4733eb"
type="text/javascript"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"
></script>
<script src="js/webflow.js" type="text/javascript"></script>
