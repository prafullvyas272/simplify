<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <script async src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script async src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .section-loop{
            background: linear-gradient(90deg,#DDB7FF 0%, #fff8e3 50%, #ff83df 100%);

        }

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

    <style media="print">
        BODY {
            DISPLAY: none
        }
    </style>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


    <!--javascript to add smooth scroll to other location on page-->

    <script type="text/javascript">
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
    </script>

    <!-- Latest compiled and minified JavaScript -->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!--<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <!--https://www.jsdelivr.com/package/npm/jquery-validation-->

    <script type="text/javascript" src="https://www.discoveryreport.com/Scripts/disc-assessment-form-validation.js?v=4"></script>


    <style type="text/tailwindcss">
        .well{
            @apply !bg-white bg-none border-0 rounded-3xl
        }
        .panel-heading {
            @apply  !bg-gradient-to-r !border-0 from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] !rounded-t-3xl py-6
        }
        .panel{
            @apply !border-0 !rounded-3xl
        }
        .panel-body{
            @apply !px-10 !border-0
        }
        tr{
            @apply !border-0
        }
        .table > tbody > tr > td
        {
            @apply !border-0 py-5
        }
        .btn.btn-default{
            background: linear-gradient(to right , #FFD550 , #FB23C4);
            box-shadow: unset;
            color: white;
            border: 0;
            border-radius: 20px;
            padding: 10px 20px;
        }
        table{
            max-width:60% !important;
        }
        .panel-body{
            display:flex;
            flex-direction:row;
        }
        .msg{
            max-width:40%;
            display:flex;
            justify-items:center;
            align-items:center;
        }

    </style>

</head>



<body onLoad="InitializeCheckMarks();">

<header>
    <div class="w-full">
        <div class="w-full bg-gradient-to-r from-[#DDB7FF] via-[#FFD7F5] via-[#FFF8E3] to-[#FF83DF] px-10 flex flex-row">
            <div class="w-1/6">
                <img src="/images/logo-white-color-dot-p-500.png" class="max-h-20" alt="">
            </div>
            <div class="w-3/6">
                <ul class="flex flex-row gap-10 h-full items-center">
                    <li>
                        Coache
                    </li>
                    <li>
                        Reports
                    </li>
                </ul>
            </div>
            <div class="w-2/6">
                <ul class="flex-row flex h-full items-center justify-evenly">
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>
                        <div class="rounded-full  ">
                            <img class="max-h-10 rounded-full" src="/images/Member-Photo-Close-up-2_1-p-130x130q80.jpg" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</header>



<div class="container-fluid bg-[url('/images/signup_bg.jpg')] bg-cover bg-no-repeat h-[100vh] overflow-auto">

    <div >
        <div class="w-1/2  bg-white mx-auto mt-10 space-y-10 py-20 px-5 rounded-3xl" >
            <p>
                Each question presents a set of descriptive words.
            </p>
            <p>
                Please choose the one that describes you the most and the one that describes you the least. Answer as honestly as possible—there are no right or wrong answers. Your responses are essential for providing meaningful insights

            </p>
        </div>
    </div>



    <div class="col-lg-2 col-xs-1"></div>




    <div class="col-lg-8 col-xs-10" >
        <form action="https://www.discoveryreport.com/formhandler-group.php"  method="post" id="form1" name="form1" >
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p><a name="1" id="1"></a></p>
            <div class="panel panel-primary" id="Panel1">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 1 of 24</h3>
                </div>
                <div class="panel-body" >
                    <table width="100%" class="table  ">
                        <tr>
                            <td width="15%"><b>Most</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m1" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l1" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input name="Most1"  type="radio" id="M1E0" onclick="SetCheckMark(1,0, 0)" value="1" /></td>
                            <td><input type="radio" name="Least1" value="1" id="L1E0" onclick="SetCheckMark(1,0, 1)" /></td>
                            <td>Kind, softhearted, sweet</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most1" value="2" id="M1E1" onclick="SetCheckMark(1,1, 0)" /></td>
                            <td><input type="radio" name="Least1" value="2" id="L1E1" onclick="SetCheckMark(1,1, 1)"  /></td>
                            <td>Influencing, convincing</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most1" value="3" id="M1E2" onclick="SetCheckMark(1,2, 0)" /></td>
                            <td><input type="radio" name="Least1" value="3" id="L1E2" onclick="SetCheckMark(1,2, 1)" /></td>
                            <td>Unassuming, composed, self-controlled</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most1" value="4" id="M1E3" onclick="SetCheckMark(1,3, 0)" /></td>
                            <td><input type="radio" name="Least1" id="L1E3" value="4" onclick="SetCheckMark(1,3, 1)" /></td>
                            <td>Independent, resourceful, one-of-a-kind</td>
                        </tr>
                        <tr  >
                            <td colspan="3"><div align="center" >
                                    <div align="left" class="next"><a href="#2" id="go1"  style="visibility:hidden" class="btn btn-default">Continue to #2</a></div></td>
                        </tr>
                    </table>
                    <p class="msg" id="msg1"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="2" id="2"></a>
            <div class="panel panel-primary" id="Panel2">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 2 of 24</h3>
                </div>
                <div class="panel-body" >
                    <table width="100%" class="table  ">
                        <tr>
                            <td width="15%"><b>Most</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m2" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l2" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" class = "radio-inline" name="Most2" value="1" id="M2E0" onclick="SetCheckMark(2,0, 0)"   /></td>
                            <td><input type="radio" class = "radio-inline" name="Least2" value="1"  id="L2E0" onclick="SetCheckMark(2,0, 1)" /></td>
                            <td>Likeable, fascinating,
                                fun</td>
                        </tr>
                        <tr>
                            <td><input type="radio" class = "radio-inline" name="Most2" value="2"  id="M2E1" onclick="SetCheckMark(2,1, 0)" /></td>
                            <td><input type="radio" class = "radio-inline" name="Least2" value="2"  id="L2E1" onclick="SetCheckMark(2,1, 1)"   /></td>
                            <td>Reasonable, fair</td>
                        </tr>
                        <tr>
                            <td><input type="radio" class = "radio-inline" name="Most2" value="3"  id="M2E2" onclick="SetCheckMark(2,2, 0)" /></td>
                            <td><input type="radio" class = "radio-inline" name="Least2" value="3"  id="L2E2" onclick="SetCheckMark(2,2, 1)" /></td>
                            <td>Willful, firm, decision-maker</td>
                        </tr>
                        <tr>
                            <td><input type="radio"class = "radio-inline"  name="Most2" value="4"  id="M2E3" onclick="SetCheckMark(2,3, 0)" /></td>
                            <td><input type="radio" class = "radio-inline" name="Least2" value="4"  id="L2E3" onclick="SetCheckMark(2,3, 1)" /></td>
                            <td>Supportive, pleasant,
                                warm</td>
                        </tr>
                    </table>
                    <p class="msg" id="msg2"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="3" id="3"></a>
            <div class="panel panel-primary" id="Panel3">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 3 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m3" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l3" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most3" value="1"  id="M3E0" onclick="SetCheckMark(3,0, 0)"  /></td>
                            <td><input type="radio" name="Least3" value="1"  id="L3E0" onclick="SetCheckMark(3,0, 1)" /></td>
                            <td>Observant, Careful</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most3" value="2"  id="M3E1" onclick="SetCheckMark(3,1, 0)" /></td>
                            <td><input type="radio" name="Least3" value="2"  id="L3E1" onclick="SetCheckMark(3,1, 1)"  /></td>
                            <td>Brave, unafraid, likes
                                a challenge</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most3" value="3"  id="M3E2" onclick="SetCheckMark(3,2, 0)" /></td>
                            <td><input type="radio" name="Least3" value="3"  id="L3E2" onclick="SetCheckMark(3,2, 1)" /></td>
                            <td>Faithful, steadfast</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most3" value="4"  id="M3E3" onclick="SetCheckMark(3,3, 0)" /></td>
                            <td><input type="radio" name="Least3" value="4"  id="L3E3" onclick="SetCheckMark(3,3, 1)" /></td>
                            <td>Appealing, refreshing,
                                lively</td>
                        </tr>
                    </table>
                    <p class="msg" id="msg3"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="4" id="4"></a>
            <div class="panel panel-primary" id="Panel4">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 4 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m4" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l4" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most4" value="1"  id="M4E0" onclick="SetCheckMark(4,0, 0)"   /></td>
                            <td><input type="radio" name="Least4" value="1"  id="L4E0" onclick="SetCheckMark(4,0, 1)" /></td>
                            <td>Objective, balanced,
                                open-minded</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most4" value="2"  id="M4E1" onclick="SetCheckMark(4,1, 0)" /></td>
                            <td><input type="radio" name="Least4" value="2"  id="L4E1" onclick="SetCheckMark(4,1, 1)"   /></td>
                            <td>Willing to help, thoughtful</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most4" value="3"  id="M4E2" onclick="SetCheckMark(4,2, 0)" /></td>
                            <td><input type="radio" name="Least4" value="3"  id="L4E2" onclick="SetCheckMark(4,2, 1)" /></td>
                            <td>Determined, unbending,
                                stubborn</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most4" value="4"  id="M4E3" onclick="SetCheckMark(4,3, 0)" /></td>
                            <td><input type="radio" name="Least4" value="4"  id="L4E3" onclick="SetCheckMark(4,3, 1)" /></td>
                            <td>Lighthearted, upbeat</td>
                        </tr>
                    </table>
                    <p class="msg" id="msg4"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="5" id="5"></a>
            <div class="panel panel-primary" id="Panel5">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 5 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m5" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l5" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most5" value="1"  id="M5E0" onclick="SetCheckMark(5,0, 0)"  /></td>
                            <td><input type="radio" name="Least5" value="1"  id="L5E0" onclick="SetCheckMark(5,0, 1)" /></td>
                            <td>Humorous, funny</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most5" value="2"  id="M5E1" onclick="SetCheckMark(5,1, 0)" /></td>
                            <td><input type="radio" name="Least5" value="2"  id="L5E1" onclick="SetCheckMark(5,1, 1)"  /></td>
                            <td>Specific, exact, correct</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most5" value="3"  id="M5E2" onclick="SetCheckMark(5,2, 0)" /></td>
                            <td><input type="radio" name="Least5" value="3"  id="L5E2" onclick="SetCheckMark(5,2, 1)" /></td>
                            <td>Gutsy, daring, bold</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most5" value="4"  id="M5E3" onclick="SetCheckMark(5,3, 0)" /></td>
                            <td><input type="radio" name="Least5" value="4"  id="L5E3" onclick="SetCheckMark(5,3, 1)" /></td>
                            <td>Relaxed, content, not
                                excitable</td>
                        </tr>
                    </table>
                    <p class="msg" id="msg5"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="6" id="6"></a>
            <div class="panel panel-primary" id="Panel6">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 6 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m6" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l6" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most6" value="1"  id="M6E0" onclick="SetCheckMark(6,0, 0)"   /></td>
                            <td><input type="radio" name="Least6" value="1"  id="L6E0" onclick="SetCheckMark(6,0, 1)" /></td>
                            <td>Aggressive, driven,
                                wants to win</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most6" value="2"  id="M6E1" onclick="SetCheckMark(6,1, 0)" /></td>
                            <td><input type="radio" name="Least6" value="2"  id="L6E1" onclick="SetCheckMark(6,1, 1)"   /></td>
                            <td>Accommodating, considers
                                others, caring</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most6" value="3"  id="M6E2" onclick="SetCheckMark(6,2, 0)" /></td>
                            <td><input type="radio" name="Least6" value="3"  id="L6E2" onclick="SetCheckMark(6,2, 1)" /></td>
                            <td>Excitable, fun-seeking</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most6" value="4"  id="M6E3" onclick="SetCheckMark(6,3, 0)" /></td>
                            <td><input type="radio" name="Least6" value="4"  id="L6E3" onclick="SetCheckMark(6,3, 1)" /></td>
                            <td>Conforming, cooperative</td>
                        </tr>
                    </table>
                    <p class="msg" id="msg6"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="7" id="7"></a>
            <div class="panel panel-primary" id="Panel7">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 7 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m7" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l7" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most7" value="1"  id="M7E0" onclick="SetCheckMark(7,0, 0)"  /></td>
                            <td><input type="radio" name="Least7" value="1"  id="L7E0" onclick="SetCheckMark(7,0, 1)" /></td>
                            <td>Particular, choosy</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most7" value="2"  id="M7E1" onclick="SetCheckMark(7,1, 0)" /></td>
                            <td><input type="radio" name="Least7" value="2"  id="L7E1" onclick="SetCheckMark(7,1, 1)"  /></td>
                            <td>Devoted, loyal, attends
                                to duties</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most7" value="3"  id="M7E2" onclick="SetCheckMark(7,2, 0)" /></td>
                            <td><input type="radio" name="Least7" value="3"  id="L7E2" onclick="SetCheckMark(7,2, 1)" /></td>
                            <td>Tough-minded, unyielding, purposeful</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most7" value="4"  id="M7E3" onclick="SetCheckMark(7,3, 0)" /></td>
                            <td><input type="radio" name="Least7" value="4"  id="L7E3" onclick="SetCheckMark(7,3, 1)" /></td>
                            <td>Animated, fun-loving,
                                joking</td>
                        </tr>
                    </table>
                    <p class="msg" id="msg7"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="8" id="8"></a>
            <div class="panel panel-primary" id="Panel8">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 8 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m8" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l8" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most8" value="1"  id="M8E0" onclick="SetCheckMark(8,0, 0)"  /></td>
                            <td><input type="radio" name="Least8" value="1"  id="L8E0" onclick="SetCheckMark(8,0, 1)" /></td>
                            <td>Confident, courageous,
                                fearless</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most8" value="2"  id="M8E1" onclick="SetCheckMark(8,1, 0)" /></td>
                            <td><input type="radio" name="Least8" value="2"  id="L8E1" onclick="SetCheckMark(8,1, 1)"  /></td>
                            <td>Inspiring, influential,
                                enthusiastic</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most8" value="3"  id="M8E2" onclick="SetCheckMark(8,2, 0)" /></td>
                            <td><input type="radio" name="Least8" value="3"  id="L8E2" onclick="SetCheckMark(8,2, 1)" /></td>
                            <td>Does not resist, submits
                                easily</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most8" value="4"  id="M8E3" onclick="SetCheckMark(8,3, 0)" /></td>
                            <td><input type="radio" name="Least8" value="4"  id="L8E3" onclick="SetCheckMark(8,3, 1)" /></td>
                            <td>Avoids attention, modest</td>
                        </tr>
                    </table>
                    <p class="msg" id="msg8"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="9" id="9"></a>
            <div class="panel panel-primary" id="Panel9">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 9 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m9" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l9" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most9" value="1"  id="M9E0" onclick="SetCheckMark(9,0, 0)"  /></td>
                            <td><input type="radio" name="Least9" value="1"  id="L9E0" onclick="SetCheckMark(9,0, 1)" /></td>
                            <td>Outgoing, makes friends easily</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most9" value="2"  id="M9E1" onclick="SetCheckMark(9,1, 0)" /></td>
                            <td><input type="radio" name="Least9" value="2"  id="L9E1" onclick="SetCheckMark(9,1, 1)"  /></td>
                            <td>Patient, lenient, shows
                                mercy, stable</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most9" value="3"  id="M9E2" onclick="SetCheckMark(9,2, 0)" /></td>
                            <td><input type="radio" name="Least9" value="3"  id="L9E2" onclick="SetCheckMark(9,2, 1)" /></td>
                            <td>Self-sufficient, goal
                                achieving</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most9" value="4"  id="M9E3" onclick="SetCheckMark(9,3, 0)" /></td>
                            <td><input type="radio" name="Least9" value="4"  id="L9E3" onclick="SetCheckMark(9,3, 1)" /></td>
                            <td> Private, subdued,
                                appropriate</td>
                        </tr>
                    </table>
                    <p class="msg" id="msg9"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="10" id="10"></a>
            <div class="panel panel-primary" id="Panel10">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 10 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m10" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l10" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most10" value="1"  id="M10E0" onclick="SetCheckMark(10,0, 0)"  /></td>
                            <td><input type="radio" name="Least10" value="1"  id="L10E0" onclick="SetCheckMark(10,0, 1)" /></td>
                            <td>Risk taking, thrill-seeking, daring</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most10" value="2"  id="M10E1" onclick="SetCheckMark(10,1, 0)" /></td>
                            <td><input type="radio" name="Least10" value="2"  id="L10E1" onclick="SetCheckMark(10,1, 1)"  /></td>
                            <td>Teachable, willing
                                to be convinced</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most10" value="3"  id="M10E2" onclick="SetCheckMark(10,2, 0)" /></td>
                            <td><input type="radio" name="Least10" value="3"  id="L10E2" onclick="SetCheckMark(10,2, 1)" /></td>
                            <td>Sociable, big-hearted,
                                personable</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most10" value="4"  id="M10E3" onclick="SetCheckMark(10,3, 0)" /></td>
                            <td><input type="radio" name="Least10" value="4"  id="L10E3" onclick="SetCheckMark(10,3, 1)" /></td>
                            <td>Agreeable, easygoing,
                                not extreme</td>
                        </tr>
                    </table>
                    <p class="msg" id="msg10"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="11" id="11"></a>
            <div class="panel panel-primary" id="Panel11">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 11 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m11" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l11" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most11" value="1"  id="M11E0" onclick="SetCheckMark(11,0, 0)"  /></td>
                            <td><input type="radio" name="Least11" value="1"  id="L11E0" onclick="SetCheckMark(11,0, 1)" /></td>
                            <td>Expressive, likes to
                                talk</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most11" value="2"  id="M11E1" onclick="SetCheckMark(11,1, 0)" /></td>
                            <td><input type="radio" name="Least11" value="2"  id="L11E1" onclick="SetCheckMark(11,1, 1)"  /></td>
                            <td>Moderate, easily swayed</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most11" value="3"  id="M11E2" onclick="SetCheckMark(11,2, 0)" /></td>
                            <td><input type="radio" name="Least11" value="3"  id="L11E2" onclick="SetCheckMark(11,2, 1)" /></td>
                            <td>Follows routine, decides
                                carefully</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most11" value="4"  id="M11E3" onclick="SetCheckMark(11,3, 0)" /></td>
                            <td><input type="radio" name="Least11" value="4"  id="L11E3" onclick="SetCheckMark(11,3, 1)" /></td>
                            <td>Self-confident, makes
                                decisions quickly and easily</td>
                        </tr>
                    </table>
                    <p class="msg" id="msg11"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="12" id="12"></a>
            <div class="panel panel-primary" id="Panel12">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 12 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m12" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l12" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most12" value="1"  id="M12E0" onclick="SetCheckMark(12,0, 0)"  /></td>
                            <td><input type="radio" name="Least12" value="1"  id="L12E0" onclick="SetCheckMark(12,0, 1)" /></td>
                            <td>Persuasive, smooth,
                                at ease with people</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most12" value="2"  id="M12E1" onclick="SetCheckMark(12,1, 0)" /></td>
                            <td><input type="radio" name="Least12" value="2"  id="L12E1" onclick="SetCheckMark(12,1, 1)"  /></td>
                            <td>Adventurous, unflinching</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most12" value="3"  id="M12E2" onclick="SetCheckMark(12,2, 0)" /></td>
                            <td><input type="radio" name="Least12" value="3"  id="L12E2" onclick="SetCheckMark(12,2, 1)" /></td>
                            <td>Courteous, respectful,
                                tactful</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most12" value="4"  id="M12E3" onclick="SetCheckMark(12,3, 0)" /></td>
                            <td><input type="radio" name="Least12" value="4"  id="L12E3" onclick="SetCheckMark(12,3, 1)" /></td>
                            <td>Contented, easily pleased</td>
                        </tr>
                    </table>
                    <p class="msg" id="msg12"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="13" id="13"></a>
            <div class="panel panel-primary" id="Panel13">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 13 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m13" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l13" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most13" value="1"  id="M13E0" onclick="SetCheckMark(13,0, 0)"  /></td>
                            <td><input type="radio" name="Least13" value="1"  id="L13E0" onclick="SetCheckMark(13,0, 1)" /></td>
                            <td>Enjoys competition,
                                persistent, entrepreneur</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most13" value="2"  id="M13E1" onclick="SetCheckMark(13,1, 0)" /></td>
                            <td><input type="radio" name="Least13" value="2"  id="L13E1" onclick="SetCheckMark(13,1, 1)"  /></td>
                            <td>Life at the party, entertaining, draws attention</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most13" value="3"  id="M13E2" onclick="SetCheckMark(13,2, 0)" /></td>
                            <td><input type="radio" name="Least13" value="3"  id="L13E2" onclick="SetCheckMark(13,2, 1)" /></td>
                            <td>Vulnerable, gullible,
                                easily influenced</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most13" value="4"  id="M13E3" onclick="SetCheckMark(13,3, 0)" /></td>
                            <td><input type="radio" name="Least13" value="4"  id="L13E3" onclick="SetCheckMark(13,3, 1)" /></td>
                            <td>Anxious, apprehensive,
                                hesitant</td>
                        </tr>
                    </table>
                    <p class="msg" id="msg13"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="14" id="14"></a>
            <div class="panel panel-primary" id="Panel14">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 14 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m14" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l14" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most14" value="1"  id="M14E0" onclick="SetCheckMark(14,0, 0)"  /></td>
                            <td><input type="radio" name="Least14" value="1"  id="L14E0" onclick="SetCheckMark(14,0, 1)" /></td>
                            <td>Watchful, cautious,
                                weighs risks</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most14" value="2"  id="M14E1" onclick="SetCheckMark(14,1, 0)" /></td>
                            <td><input type="radio" name="Least14" value="2"  id="L14E1" onclick="SetCheckMark(14,1, 1)"  /></td>
                            <td>Ambitious, decisive, takes charge</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most14" value="3"  id="M14E2" onclick="SetCheckMark(14,2, 0)" /></td>
                            <td><input type="radio" name="Least14" value="3"  id="L14E2" onclick="SetCheckMark(14,2, 1)" /></td>
                            <td>Wholeheartedly convinced,
                                talks others into</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most14" value="4"  id="M14E3" onclick="SetCheckMark(14,3, 0)" /></td>
                            <td><input type="radio" name="Least14" value="4"  id="L14E3" onclick="SetCheckMark(14,3, 1)" /></td>
                            <td>Comfortable, good-natured,
                                welcoming</td>
                        </tr>

                    </table>
                    <p class="msg" id="msg14"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="15" id="15"></a>
            <div class="panel panel-primary" id="Panel15">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 15 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m15" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l15" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most15" value="1"  id="M15E0" onclick="SetCheckMark(15,0, 0)"  /></td>
                            <td><input type="radio" name="Least15" value="1"  id="L15E0" onclick="SetCheckMark(15,0, 1)" /></td>
                            <td>Ready to help, goes
                                along with, trusting</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most15" value="2"  id="M15E1" onclick="SetCheckMark(15,1, 0)" /></td>
                            <td><input type="radio" name="Least15" value="2"  id="L15E1" onclick="SetCheckMark(15,1, 1)"  /></td>
                            <td>Easily excited, high
                                strung</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most15" value="3"  id="M15E2" onclick="SetCheckMark(15,2, 0)" /></td>
                            <td><input type="radio" name="Least15" value="3"  id="L15E2" onclick="SetCheckMark(15,2, 1)" /></td>
                            <td>Compliant, follows
                                rules, not argumentative</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most15" value="4"  id="M15E3" onclick="SetCheckMark(15,3, 0)" /></td>
                            <td><input type="radio" name="Least15" value="4"  id="L15E3" onclick="SetCheckMark(15,3, 1)" /></td>
                            <td>Vibrant, enterprising,
                                energetic</td>
                        </tr>
                        </tr>


                    </table>
                    <p class="msg" id="msg15"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="16" id="16"></a>
            <div class="panel panel-primary" id="Panel16">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 16 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m16" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l16" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most16" value="1"  id="M16E0" onclick="SetCheckMark(16,0, 0)"  /></td>
                            <td><input type="radio" name="Least16" value="1"  id="L16E0" onclick="SetCheckMark(16,0, 1)" /></td>
                            <td>Self-assured, positive,
                                optimistic</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most16" value="2"  id="M16E1" onclick="SetCheckMark(16,1, 0)" /></td>
                            <td><input type="radio" name="Least16" value="2"  id="L16E1" onclick="SetCheckMark(16,1, 1)"  /></td>
                            <td>Kindhearted, sentimental,
                                responsive</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most16" value="3"  id="M16E2" onclick="SetCheckMark(16,2, 0)" /></td>
                            <td><input type="radio" name="Least16" value="3"  id="L16E2" onclick="SetCheckMark(16,2, 1)" /></td>
                            <td>Evaluating, examining,
                                questioning</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most16" value="4"  id="M16E3" onclick="SetCheckMark(16,3, 0)" /></td>
                            <td><input type="radio" name="Least16" value="4"  id="L16E3" onclick="SetCheckMark(16,3, 1)" /></td>
                            <td>Assertive, forceful,
                                alert</td>
                        </tr>
                        </tr>


                    </table>
                    <p class="msg" id="msg16"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="17" id="17"></a>
            <div class="panel panel-primary" id="Panel17">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 17 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m17" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l17" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most17" value="1"  id="M17E0" onclick="SetCheckMark(17,0, 0)"  /></td>
                            <td><input type="radio" name="Least17" value="1"  id="L17E0" onclick="SetCheckMark(17,0, 1)" /></td>
                            <td>Self-disciplined, controlled, methodical</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most17" value="2"  id="M17E1" onclick="SetCheckMark(17,1, 0)" /></td>
                            <td><input type="radio" name="Least17" value="2"  id="L17E1" onclick="SetCheckMark(17,1, 1)"  /></td>
                            <td>Unselfish, concerned for others</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most17" value="3"  id="M17E2" onclick="SetCheckMark(17,2, 0)" /></td>
                            <td><input type="radio" name="Least17" value="3"  id="L17E2" onclick="SetCheckMark(17,2, 1)" /></td>
                            <td>Demonstrates feelings and emotions outwardly</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most17" value="4"  id="M17E3" onclick="SetCheckMark(17,3, 0)" /></td>
                            <td><input type="radio" name="Least17" value="4"  id="L17E3" onclick="SetCheckMark(17,3, 1)" /></td>
                            <td>Committed, not easily
                                defeated nor discouraged</td>
                        </tr>
                        </tr>


                    </table>
                    <p class="msg" id="msg17"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="18" id="18"></a>
            <div class="panel panel-primary" id="Panel18">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 18 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m18" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l18" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most18" value="1"  id="M18E0" onclick="SetCheckMark(18,0, 0)"  /></td>
                            <td><input type="radio" name="Least18" value="1"  id="L18E0" onclick="SetCheckMark(18,0, 1)" /></td>
                            <td>Commendable, desires recognition</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most18" value="2"  id="M18E1" onclick="SetCheckMark(18,1, 0)" /></td>
                            <td><input type="radio" name="Least18" value="2"  id="L18E1" onclick="SetCheckMark(18,1, 1)"  /></td>
                            <td>Pleasing, sharing,
                                gracious</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most18" value="3"  id="M18E2" onclick="SetCheckMark(18,2, 0)" /></td>
                            <td><input type="radio" name="Least18" value="3"  id="L18E2" onclick="SetCheckMark(18,2, 1)" /></td>
                            <td>Selective, chooses
                                carefully</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most18" value="4"  id="M18E3" onclick="SetCheckMark(18,3, 0)" /></td>
                            <td><input type="radio" name="Least18" value="4"  id="L18E3" onclick="SetCheckMark(18,3, 1)" /></td>
                            <td>Emphatic, insistent,
                                demanding</td>
                        </tr>
                        </tr>


                    </table>
                    <p class="msg" id="msg18"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="19" id="19"></a>
            <div class="panel panel-primary" id="Panel19">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 19 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m19" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l19" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most19" value="1"  id="M19E0" onclick="SetCheckMark(19,0, 0)"  /></td>
                            <td><input type="radio" name="Least19" value="1"  id="L19E0" onclick="SetCheckMark(19,0, 1)" /></td>
                            <td>Formal, shows proper respect, restrained</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most19" value="2"  id="M19E1" onclick="SetCheckMark(19,1, 0)" /></td>
                            <td><input type="radio" name="Least19" value="2"  id="L19E1" onclick="SetCheckMark(19,1, 1)"  /></td>
                            <td>Innovative, pioneering,
                                tries new things</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most19" value="3"  id="M19E2" onclick="SetCheckMark(19,2, 0)" /></td>
                            <td><input type="radio" name="Least19" value="3"  id="L19E2" onclick="SetCheckMark(19,2, 1)" /></td>
                            <td>Happy, expects good
                                things to happen</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most19" value="4"  id="M19E3" onclick="SetCheckMark(19,3, 0)" /></td>
                            <td><input type="radio" name="Least19" value="4"  id="L19E3" onclick="SetCheckMark(19,3, 1)" /></td>
                            <td>Harmonious, obliging, helpful</td>
                        </tr>
                        </tr>


                    </table>
                    <p class="msg" id="msg19"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="20" id="20"></a>
            <div class="panel panel-primary" id="Panel20">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 20 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m20" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l20" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most20" value="1"  id="M20E0" onclick="SetCheckMark(20,0, 0)"  /></td>
                            <td><input type="radio" name="Least20" value="1"  id="L20E0" onclick="SetCheckMark(20,0, 1)" /></td>
                            <td>Confronting, challenging</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most20" value="2"  id="M20E1" onclick="SetCheckMark(20,1, 0)" /></td>
                            <td><input type="radio" name="Least20" value="2"  id="L20E1" onclick="SetCheckMark(20,1, 1)"  /></td>
                            <td>Adjustable, able to
                                change</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most20" value="3"  id="M20E2" onclick="SetCheckMark(20,2, 0)" /></td>
                            <td><input type="radio" name="Least20" value="3"  id="L20E2" onclick="SetCheckMark(20,2, 1)" /></td>
                            <td>Unruffled, indifferent, casual</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most20" value="4"  id="M20E3" onclick="SetCheckMark(20,3, 0)" /></td>
                            <td><input type="radio" name="Least20" value="4"  id="L20E3" onclick="SetCheckMark(20,3, 1)" /></td>
                            <td>Cheerful, unworried,
                                playful</td>
                        </tr>
                        </tr>


                    </table>
                    <p class="msg" id="msg20"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="21" id="21"></a>
            <div class="panel panel-primary" id="Panel21">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 21 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m21" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l21" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most21" value="1"  id="M21E0" onclick="SetCheckMark(21,0, 0)"  /></td>
                            <td><input type="radio" name="Least21" value="1"  id="L21E0" onclick="SetCheckMark(21,0, 1)" /></td>
                            <td>Believes in others, open, trustful</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most21" value="2"  id="M21E1" onclick="SetCheckMark(21,1, 0)" /></td>
                            <td><input type="radio" name="Least21" value="2"  id="L21E1" onclick="SetCheckMark(21,1, 1)"  /></td>
                            <td>At peace, pleased,
                                satisfied</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most21" value="3"  id="M21E2" onclick="SetCheckMark(21,2, 0)" /></td>
                            <td><input type="radio" name="Least21" value="3"  id="L21E2" onclick="SetCheckMark(21,2, 1)" /></td>
                            <td>Unquestionable, confidence,
                                certain</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most21" value="4"  id="M21E3" onclick="SetCheckMark(21,3, 0)" /></td>
                            <td><input type="radio" name="Least21" value="4"  id="L21E3" onclick="SetCheckMark(21,3, 1)" /></td>
                            <td>Even-tempered, level-headed,
                                unhurried</td>
                        </tr>
                        </tr>


                    </table>
                    <p class="msg" id="msg21"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="22" id="22"></a>
            <div class="panel panel-primary" id="Panel22">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 22 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m22" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l22" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most22" value="1"  id="M22E0" onclick="SetCheckMark(22,0, 0)"  /></td>
                            <td><input type="radio" name="Least22" value="1"  id="L22E0" onclick="SetCheckMark(22,0, 1)" /></td>
                            <td>Compatible, enjoys
                                people, popular</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most22" value="2"  id="M22E1" onclick="SetCheckMark(22,1, 0)" /></td>
                            <td><input type="radio" name="Least22" value="2"  id="L22E1" onclick="SetCheckMark(22,1, 1)"  /></td>
                            <td>Informed, refined, perceptive</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most22" value="3"  id="M22E2" onclick="SetCheckMark(22,2, 0)" /></td>
                            <td><input type="radio" name="Least22" value="3"  id="L22E2" onclick="SetCheckMark(22,2, 1)" /></td>
                            <td>Dynamic, powerful, spirited</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most22" value="4"  id="M22E3" onclick="SetCheckMark(22,3, 0)" /></td>
                            <td><input type="radio" name="Least22" value="4"  id="L22E3" onclick="SetCheckMark(22,3, 1)" /></td>
                            <td>Tolerant, compassionate,
                                merciful</td>
                        </tr>
                        </tr>


                    </table>
                    <p class="msg" id="msg22"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="23" id="23"></a>
            <div class="panel panel-primary" id="Panel23">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 23 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m23" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l23" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most23" value="1"  id="M23E0" onclick="SetCheckMark(23,0, 0)"  /></td>
                            <td><input type="radio" name="Least23" value="1"  id="L23E0" onclick="SetCheckMark(23,0, 1)" /></td>
                            <td>Fun to be with, sociable</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most23" value="2"  id="M23E1" onclick="SetCheckMark(23,1, 0)" /></td>
                            <td><input type="radio" name="Least23" value="2"  id="L23E1" onclick="SetCheckMark(23,1, 1)"  /></td>
                            <td>Precise, factual, accurate</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most23" value="3"  id="M23E2" onclick="SetCheckMark(23,2, 0)" /></td>
                            <td><input type="radio" name="Least23" value="3"  id="L23E2" onclick="SetCheckMark(23,2, 1)" /></td>
                            <td>Direct, speaks frankly</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most23" value="4"  id="M23E3" onclick="SetCheckMark(23,3, 0)" /></td>
                            <td><input type="radio" name="Least23" value="4"  id="L23E3" onclick="SetCheckMark(23,3, 1)" /></td>
                            <td>Quiet, soft-spoken,
                                reserved</td>
                        </tr>
                        </tr>


                    </table>
                    <p class="msg" id="msg23"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <a name="24" id="24"></a>
            <div class="panel panel-primary" id="Panel24">
                <div class="panel-heading">
                    <h3 class="panel-title">Question 24 of 24</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table ">
                        <tr>
                            <td width="15%"><b>Most</b><span  class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="m24" style="visibility:hidden" ></span></td>
                            <td width="15%"><b>Least</b><span class="glyphicon glyphicon-ok " aria-hidden="true" alt="ok" id="l24" style="visibility:hidden"></span></td>
                            <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most24" value="1"  id="M24E0" onclick="SetCheckMark(24,0, 0)"  /></td>
                            <td><input type="radio" name="Least24" value="1"  id="L24E0" onclick="SetCheckMark(24,0, 1)" /></td>
                            <td>Restless, fidgety,
                                easily bored</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most24" value="2"  id="M24E1" onclick="SetCheckMark(24,1, 0)" /></td>
                            <td><input type="radio" name="Least24" value="2"  id="L24E1" onclick="SetCheckMark(24,1, 1)"  /></td>
                            <td>Peaceable, helps others,
                                friendly</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most24" value="3"  id="M24E2" onclick="SetCheckMark(24,2, 0)" /></td>
                            <td><input type="radio" name="Least24" value="3"  id="L24E2" onclick="SetCheckMark(24,2, 1)" /></td>
                            <td>Well-liked, impulsive,
                                charming</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="Most24" value="4"  id="M24E3" onclick="SetCheckMark(24,3, 0)" /></td>
                            <td><input type="radio" name="Least24" value="4"  id="L24E3" onclick="SetCheckMark(24,3, 1)" /></td>
                            <td>Systematic, tidy, attentive
                                to details</td>
                        </tr>
                        </tr>


                    </table>
                    <p class="msg" id="msg24"> Please select one option for the statement that describes you the most, and one option for the statement that describes you the least </p>

                </div>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p><strong><a name="name" id="name"></a></strong></p>
            <div class="well" >
                <h2 style="display:none"><strong>Personalize your report (required info):</strong></h2>
                <p style="display:none">&nbsp;</p>
                <div style="display:none" class="form-group">
                    <label for="Fname">First Name</label>
                    <input type="text" class="form-control" id="Fname" name="Fname" placeholder="First Name"  value="{{$user->first_name}}" onchange="checkinfo();">
                    Enter your first name <strong> exactly</strong> as you would like
                    it to appear in the report with no extra initials. </div>
                <div style="display:none" class="form-group">
                    <label for="Lname">Last Name</label>
                    <input type="text" class="form-control" id="Lname" name="Lname" placeholder="Last Name"  value="{{$user->last_name}}" onchange="checkinfo();">
                </div>
                <div style="display:none" class="form-group">
                    <label for="UserEmail">Email</label>
                    <input type="email" class="form-control" id="UserEmail" name="UserEmail" placeholder="Email" value="{{$user->email}}" onchange = "emailvalidation(this,'The E-mail is not valid. Please re-enter it.'); checkinfo();">
                </div>
                <div style="display:none" class="form-group">
                    <label for="UserEmail2">Confirm Email</label>
                    <input type="email" class="form-control" id="UserEmail2" name="UserEmail2" placeholder="Confirm Email" value="{{$user->email}}"  onchange= "compareemails(); checkinfo();">
                </div>
                <div style="display:none" class="form-group">
                    <p>
                        <label for="Gender">Gender</label>
                        <select  class="form-control" size="1" id="Gender"  name="Gender"  onchange="checkinfo();">
                            <option value="" selected="selected">Select Gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                        Gender used only for certain languages. Does not  affects the outcome of the  assessment. </p>
                    <p align="center"  id="allrequired"><br />
                    </p>
                    <div align="center" >
                        <div align="left" class="next"><a href="#optional" id="gooptional"  style="visibility:hidden" class="btn btn-default">Continue
                                to enter optional information</a></div>
                    </div>
                </div>
                <p style="display:none">&nbsp;</p>
                <p style="display:none">&nbsp;</p>
                <p style="display:none">&nbsp;</p>
                <p style="display:none">&nbsp;</p>
                <a style="display:none" name="optional" id="optional"></a>
                <h2 style="display:none">Optional  information:</h2>
                <div  class="well">
                    <div style="display:none" class="form-group">
                        <label for="Company">Your Company / Organization</label>
                        <input type="text" class="form-control" id="Company"  name="Company" placeholder="Company / Organization"   onchange="checkinfo();">
                        <p>OPTIONAL: Appears on the cover sheet if entered.</p>
                    </div>
                    <div style="display:none"class="form-group">
                        <label for="SendFriend1">Send extra copy of results to this email address</label>
                        <input type="text" class="form-control" id="SendFriend1" name="SendFriend1" placeholder="none" value = "none" >
                    </div>
                    <div style="display:none" class="form-group">
                        <label for="SendFriend2">Send extra copy of results to this email address</label>
                        <input type="text" class="form-control" id="SendFriend2" name="SendFriend2" placeholder="none" value = "none" >
                    </div>
                    <div style="display:none" class="form-group">
                        <label for="SendFriend3">Send extra copy of results to this email address</label>
                        <input type="text" class="form-control" id="SendFriend3"  name="SendFriend3" placeholder="none" value = "none" >
                    </div>
                    <div style="display:none" class="form-group">
                        <label for="SendFriend4">Send extra copy of results to this email address</label>
                        <input type="text" class="form-control" id="SendFriend4"  name="SendFriend4" placeholder="none" value = "none" >
                    </div>
                    <div style="display:none" align="left" class="next"><a href="#confirm" id="goconfirm"  style="visibility:visible"  class="btn btn-default">Continue
                            to confirm your info</a></div>
                </div>
                <input style="display:none" name="PromoCode" type="hidden" id="PromoCode" value="none"  />
                <input style="display:none" name="group" type="hidden" id="group" value="UNIFYDISC"  />
                <input style="display:none" name="PayCode" type="hidden" id="PayCode" value="UNIFYDISC"  />
                <input style="display:none" name="reporttype" type="hidden" id="reporttype" value="ACPI"  />
                <input style="display:none" name="groupowner" type="hidden" id="groupowner" value="BRVA"  />
                <input style="display:none" name="groupcc" type="hidden" id="groupcc" value=""  />
                <input style="display:none" name="groupbcc" type="hidden" id="groupbcc" value=""  />
                <input style="display:none" name="groupowneremail" type="hidden" id="groupowneremail" value=""  />
                <input style="display:none" name="Language" type="hidden" id="Language" value="English" />
                <p style="display:none" align="left">&nbsp;</p>
                <p style="display:none" align="left">&nbsp;</p>
                <p style="display:none" align="left">&nbsp;</p>
                <p style="display:none" align="left">&nbsp;</p>
                <p style="display:none" align="left"><strong><a name="confirm" id="optional2"></a></strong></p>
                <div class="panel panel-primary">
                    <div style="display:none" class="panel-heading">
                        <h2 class="panel-title">Final Review ... Is this correct?</h2>
                    </div>
                    <div class="panel-body">
                        <p style="display:none" align="left" class="highlight" id="confirmname">Your name:</p>
                        <p style="display:none" align="left" class="highlight" id="confirmemail">Your email: </p>
                        <p style="display:none" class="highlight" id="confirmgender">Your gender: </p>
                        <p >
                            <input style="background: linear-gradient(to right , #FFD550 , #FB23C4); border-radius:20px; border:0" name="Submit" type="submit"    onclick="submit" class="btn btn-success" value="Submit" />
                            <br>
                        </p>
                        <p style="display:none">or </p>
                        <p style="display:none"><a href="#name" class="btn btn-warning">No, I want to make changes</a>&nbsp; &nbsp;</p>
                    </div>
                </div>
                <p align="center"><em>Your report will be available immediately. We will also email you a link to your report.<br />
                    </em></p>
                <p align="center"><em> If you need help, feel free to   email
                        us at hello@useunify.com </em></p>
                <p align="left">&nbsp;</p>
                <p align="center" class="info">Copyright
                    2024&nbsp; DR All rights reserved.</p>
        </form>
    </div>
    <div class="col-lg-2 col-xs-1"></div>
</div>

</body>
</html>



