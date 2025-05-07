
<template>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online Assessment</title>

    </head>

    <body onLoad="InitializeCheckMarks();">




    <div class="container-fluid">
        <div class="col-lg-2 col-xs-1"></div>
        <div class="col-lg-8 col-xs-10">
            <h1 align="center">Unify  DISC Assessment</h1>
            <p>Welcome. You can relax, because this is not a test. It is simply a self assessment where there are no &quot;right&quot; or &quot;wrong&quot; answers. You cannot pass or fail. You will choose below from  groups of words based on to how you see yourself now (not how you hope to become in the future or how you want others to see you). It is best to go with your first inclination - that is your best response. </p>
            <h3>INSTRUCTIONS:</h3>
            <p>1. <strong>In the form below, please select one line
                of words that</strong> <strong>MOST</strong> <strong>describes
                you</strong> in each group of four lines of words.<br />
            </p>
            <p>2. <strong>Then, select
                one line of words that</strong> <strong>LEAST describes
                you</strong> in that same group of four lines of words. </p>
            <p>      3. <strong>Repeat this process for all of the groups of words</strong>,
                choosing only one<strong> MOST</strong> and
                only one<strong> LEAST</strong> in each group. Here is an example:</p>
            <p>&nbsp;</p>
            <h3 align="center">Example of selecting  ONE Most and ONE Least</h3>
            <p align="center"><img src="images/assessment-form-sample.jpg" class="img-responsive" alt="example"></p>
            <p><br />
                <br />
                4. <strong>Fill
                    in your personal information for personalization of your report</strong><br />
                5. <strong>Click the &quot;Send this Information&quot; button</strong> at
                the bottom of this page</p>
            <p>Scroll down this page or click the &quot;Continue&quot; link below to proceed.</p>
            <div align="left" class="next"><a href="#1" class="btn btn-default">Continue</a></div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
        <div class="col-lg-2 col-xs-1"></div>
    </div>



    </body>
    </html>

</template>

<script>

import "https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"
import "https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
import "https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"
$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});

export default {
    name: "Assessment"
}
</script>


<style scoped>
input[type=radio] {
    transform: scale(1.3);
    -moz-transform: scale(1.3);
    -ms-transform: scale(1.3);
    -webkit-transform: scale(1.3);
    -o-transform: scale(1.3);
}


.glyphicon {
    color: #00B200;
    padding-left: 5px;
    font-size: 1.5em;
}
</style>
