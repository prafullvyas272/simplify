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
    <link href="/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="/css/webflow.css" rel="stylesheet" type="text/css">
    <link href="/css/unify---coach.webflow.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Public Sans:300,regular,500,600,700,800","Inter:300,regular,500,600,700"]  }});</script>
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="images/favicon.jpg" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.jpg" rel="apple-touch-icon">

    <style>
        .get-in-toch-footer{
            background-image: url('/images/divider_color.png');
            background-size:100% 50%;

        }
        .desc p {
            white-space: pre-wrap; /* Preserve spaces and line breaks */
        }
        .primary-color-arrow  { opacity: 0; }
        .event-name-light.dark-name { transition:all ease 0.5s; }
        .assesment-detail-page .collection-item-event { border:none; }
        .event-link:hover .event-name-light.dark-name { color:#586cec; }
        .event-link:hover .arrow-events .primary-color-arrow { opacity: 1; }
        .event-link:hover .arrow-events .dark-arrow { opacity: 0; }
        @media screen and (min-width: 1280px) {
               .assesment-detail-page .event-link-img {
                    width: 42%;
                    height:auto;
                }
               .assesment-detail-page .info-event-wrap {
                    width:53%;
                    padding-right: 30px;
                }
            }

        .primary-button{
            background:#9645DF !important;
            border:0;
        }
    
    </style>
</head>
<body>
<x-navbar />
<div class="section events-details-banner">
    <div class="base-container w-container">
        <div class="collection-list-wrapper-event w-dyn-list assesment-detail-page">
            <div role="list" class="collection-list-event w-dyn-items">
                
                <div  class="collection-item-event w-dyn-item w-layout-grid details-event-wrapper">
                    <a data-w-id="1637d6e2-9cbc-6638-4496-64ae1921ba04" href="{{ route('events.show',$event->id) }}" class="  event-link-img  w-inline-block">
                        {{-- <img src="{{ $event->image_url }}"  loading="lazy" alt="Event Img" sizes="(max-width: 479px) 100vw, (max-width: 767px) 91vw, (max-width: 1279px) 31vw, (max-width: 1439px) 29vw, 377.6649475097656px" srcset="{{ $event->image_url }} 500w, {{ $event->image_url }} 530w" class="event-img"> --}}
                        <img class="e-details-imh" src="{{ $event->image_url }}" alt="Event Img"sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 991px) 97vw, (max-width: 1439px) 98vw, 1270px" data-w-id="81db1122-bc4d-0f5e-c552-89c6d2169349" id="w-node-_81db1122-bc4d-0f5e-c552-89c6d2169349-fc4734c4" loading="lazy" srcset="{{ $event->image_url.' 500w' }}, {{ $event->image_url.' 530w' }}">
                    </a>
                    <div class="info-event-wrap">   
                        <a href="{{ route('events.show',$event->id) }}" class="w-inline-block ">
                            <h3 class="event-name event-heading">{{ $event->title }}</h3>
                        </a>
                        <p>{{ $event->title_description }}</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<section class="section rich-section">
    <div class="w-layout-blockcontainer base-container w-container">
        <div class="desc assesment-detail-desc">
            <p>{{ $event->description }}</p>
        </div>        

    </div>
</section>

<section class="section without-bottom-spacing">
   <div class="w-layout-blockcontainer base-container w-container">
      <div class="big-section-title">
         <div class="section-title-wrapper left-title">
            <h2>Learn More About Our Assessment<br></h2>
            <p class="margin-t---20"></p>
         </div>
      </div>
      <div class="collection-list-wrapper-events-3 w-dyn-list">
         <div role="list" class="collection-list-events-3 w-dyn-items">
         @foreach($events as $event)
            <div role="listitem" class="collection-item-events-3 w-dyn-item">
               <a href="{{ route('events.show',$event->id) }}" class="event-link w-inline-block">
                  <div class="name-events-wrap">
                     <h5 class="event-name-light dark-name">{{ $event->title }}</h5>
                  </div>
                  <div class="arrow-events"><img src="https://assets-global.website-files.com/65f57e4d932733bcfc4733eb/65f57e4e932733bcfc4734d5_arrow-right.png" loading="lazy" alt="" class="primary-color-arrow home-3">
                  
                  <img src="https://assets-global.website-files.com/65f57e4d932733bcfc4733eb/65f57e4e932733bcfc4734ff_arrow-right.webp" loading="lazy"  alt="" class="dark-arrow" ></div>
               </a>
            </div>
        @endforeach
         </div>
      </div>
      <img src="https://assets-global.website-files.com/65f57e4d932733bcfc4733eb/65f57e4e932733bcfc4734dd_Circle%203.webp" loading="lazy" style="transform: translate3d(0px, 8.9585px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; will-change: transform;" alt="" class="background-img-9 event-details">
   </div>
</section>

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
            </div><img src="/images/Get-In-Touch-Lines.png" loading="lazy" alt="" class="background-contact-footer">
        </div>
    </div>
</section>
<x-footer />
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65f57e4d932733bcfc4733eb" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>
