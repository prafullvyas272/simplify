<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed Apr 03 2024 18:01:40 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="65f57e4e932733bcfc4734ca" data-wf-site="65f57e4d932733bcfc4733eb" lang="en">
<head>
    <meta charset="utf-8">
    <title>Events - Coach 128</title>
    <meta content="Events - Coach 128" property="og:title">
    <meta content="Events - Coach 128" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/webflow.css" rel="stylesheet" type="text/css">
    <link href="css/unify---coach.webflow.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Public Sans:300,regular,500,600,700,800","Inter:300,regular,500,600,700"]  }});</script>
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="images/favicon.jpg" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.jpg" rel="apple-touch-icon">

    <style>
        .section-loop{
            background: linear-gradient(90deg,#DDB7FF 0%, #fff8e3 50%, #ff83df 100%);
        }

        .get-in-toch-footer{
            background-image: url('/images/divider_color.png');
            background-size:100% 50%;

        }
        .primary-button{
            background:#9645DF !important;
            border:0;
        }
    </style>
</head>
<body>
<x-navbar />
<div class="section events-banner"><div class="base-container w-container"><div class="inner-banner-wrapper"><h1 data-w-id="ae7c5bd9-fede-6349-a4f7-0e7d4397f405" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg); transform-style: preserve-3d;" class="light-text">The Unify Assessment</h1><p data-w-id="adeaa0d3-764b-76ce-c209-62140e8f22d5" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg); transform-style: preserve-3d;" class="banner-central-paragraph light-opacity">Take our assessment to unlock deep insights into six crucial dimensions of personal and professional growth. This will help to change the way you think of yourself, how you interact with others and subsequently pursue your career. </p></div></div></div>

<div class="section">
    <div class="base-container w-container">
        <div class="collection-list-wrapper-event w-dyn-list">
            <div role="list" class="collection-list-event w-dyn-items">
                @foreach($events as $event)
                    <div data-w-id="6a20c7aa-2fb1-9b3a-3075-22511d2b10eb" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg); transform-style: preserve-3d;" role="listitem" class="collection-item-event w-dyn-item">
                        <a data-w-id="1637d6e2-9cbc-6638-4496-64ae1921ba04" href="{{ route('events.show',$event->id) }}" class="event-link-img w-inline-block">
                            <img src="{{ $event->image_url }}" loading="lazy" alt="Event Img" sizes="(max-width: 479px) 100vw, (max-width: 767px) 91vw, (max-width: 1279px) 31vw, (max-width: 1439px) 29vw, 377.6649475097656px" srcset="{{ $event->image_url }} 500w, {{ $event->image_url }} 530w" class="event-img">
                        </a>
                        <div class="info-event-wrap">
                            <a href="{{ route('events.show',$event->id) }}" class="w-inline-block">
                                <h3 class="event-name">{{ $event->title }}</h3>
                            </a>
                            <p>{{ $event->title_description }}</p>
                        </div>
                    </div>
                @endforeach
                
            </div>
            <div role="navigation" aria-label="List" class="w-pagination-wrapper">

            </div>
        </div>
    </div>
</div>
<section class="section-loop">
    <a href="{{route("contact-us")}}" class="loop-link w-inline-block">
        <div class="loop-block">
            <div style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="text-loop"><img src="images/Icon-loop_1.png" loading="lazy" alt="" class="energy-img">
                <div class="loop-text" style="color:#061534 !important;">Get Going Today!</div>
            </div>
            <div style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="text-loop"><img src="images/Icon-loop_1.png" loading="lazy" alt="" class="energy-img">
                <div class="loop-text" style="color:#061534 !important;">Get Going Today!</div>
            </div>
            <div style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="text-loop"><img src="images/Icon-loop_1.png" loading="lazy" alt="" class="energy-img">
                <div class="loop-text" style="color:#061534 !important;">Get Going Today!</div>
            </div>
            <div style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="text-loop"><img src="images/Icon-loop_1.png" loading="lazy" alt="" class="energy-img">
                <div class="loop-text" style="color:#061534 !important;">Get Going Today!</div>
            </div>
            <div style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="text-loop"><img src="images/Icon-loop_1.png" loading="lazy" alt="" class="energy-img">
                <div class="loop-text" style="color:#061534 !important;">Want to talk? Use our free quote now!</div>
            </div>
        </div>
    </a>
</section>
<div class="section without-bottom-spacing">
    <div class="base-container w-container">
        <div class="section-title-wrapper big">
            <h2 data-w-id="1bcd57a3-1a4e-096a-f8c2-dfafc426f57d" style="opacity:0">What Our Customers Say<br></h2>
            <p data-w-id="1bcd57a3-1a4e-096a-f8c2-dfafc426f580" style="opacity:0" class="margin-t---20">We want you to unlearn everything that has been holding you back. Stop waiting for that magical moment when all the stars align and take that first step. Take your career and development into your own hands and get going today!</p>
        </div>
        <div class="testimonials-card-wrapper">
            <div data-w-id="1bcd57a3-1a4e-096a-f8c2-dfafc426f583" style="opacity:0" class="testimonials-card-item"><img src="images/Member-Photo-Close-up-7_1Member-Photo-Close-up-7.webp" loading="lazy" alt="Photo" class="testimonial-img">
                <h4 class="testimonials-card-title">Neal Patel</h4>
                <p class="testimonials-card-content">Unify career coach is great </p>
            </div>
            <div data-w-id="1bcd57a3-1a4e-096a-f8c2-dfafc426f589" style="opacity:0" class="testimonials-card-item"><img src="images/Member-Photo-Close-up-8_1Member-Photo-Close-up-8.webp" loading="lazy" alt="Photo" class="testimonial-img">
                <h4 class="testimonials-card-title">Neal Patel</h4>
                <p class="testimonials-card-content">Unify career coach is great </p>
            </div>
            <div data-w-id="1bcd57a3-1a4e-096a-f8c2-dfafc426f58f" style="opacity:0" class="testimonials-card-item"><img src="images/Member-Photo-Close-up-4_1Member-Photo-Close-up-4.webp" loading="lazy" alt="Photo" class="testimonial-img">
                <h4 class="testimonials-card-title">Neal Patel</h4>
                <p class="testimonials-card-content">Unify career coach is great </p>
            </div>
        </div>
    </div><img src="images/Background-3.webp" loading="lazy" style="-webkit-transform:translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="background-img-3">
</div>
<section class="get-in-toch-footer">
    <div class="w-layout-blockcontainer base-container w-container">
        <div data-w-id="32cfaa40-6084-3269-49c3-45fd76856728" class="contact-wrapper-footer">
            <div class="content-contact">
                <h2 class="light-text">Get in touch if you have questions</h2>
                <p class="white-opacity">Send us a message to get answers to any of your questions &amp; we&#x27;ll get back to you as soon as possible.</p>
            </div>
            <div class="button-flex">
                <a href="{{route("contact-us")}}" class="secondary-button">Get In Touch</a>
                <a href="courses.html" class="secondary-button-border">Take Assessment</a>
            </div><img src="images/Get-In-Touch-Lines.png" loading="lazy" alt="" class="background-contact-footer">
        </div>
    </div>
</section>
<x-footer />
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65f57e4d932733bcfc4733eb" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>
