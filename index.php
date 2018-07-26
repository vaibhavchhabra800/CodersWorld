    <!DOCTYPE html>
    <head lang="en">
    <meta charset="UTF-8">

    <meta name="description" content="A community not a group where Extreme Programming skills are tested in the language which you like. A friendly workplace where team work is given uttermost importance and doubts/queries are solved in a jiffy.
    Hello World like the name suggests takes programmers from a BEGINNER to EXPERT step by step!">

    <meta name="keywords" content="Hello World,GTBIT Scoiety,gtbit society,gtbit,coding,programming">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="HelloWorldFavicon.jpg">
    <title>HELLO WORLD</title>


    <link rel="stylesheet" href="flexslider.css" type="text/css">

    <script src="jquery.js"></script>

    <script src="jquery.flexslider.js"></script>

    <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
            $('.flexslider').flexslider(
                    {

                        slideshowSpeed: 3500,
                        animationSpeed: 800,
                        animation:'slide'
                    }

            );
        });
    </script>


    <!--SMOOTH SCROLLING NOW  -->
<script>
    $(document).ready(function() {
    $('a[href*=#]').each(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname
    && this.hash.replace(/#/,'') ) {
    var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
    var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
    if ($target) {
    var targetOffset = $target.offset().top;
    $(this).click(function() {
    $('html, body').animate({scrollTop: targetOffset}, 1000);
    return false;
    });
    }
    }
    });
    });

</script>
    <!--SMOOTH SCROLLING Ends Here  -->

<!-- JQQUEY EFFECTS FILE -->
    <script type="text/javascript" src="jquery%20effects.js"></script>

    <script type="text/javascript" src="parallax.js"></script>
    <script type="text/javascript" src="parallax.min.js"></script>
    <link rel="stylesheet" type="text/css" href="typeeffectcss.css">
    <link rel="stylesheet" type="text/css" href="stylevcmainpage.css">
    <link rel="stylesheet" type="text/css" href="gray.css">
    <script type="text/javascript" src=" jquery.gray.js"></script>

    ?>


    </head>

<body id="body">

<!--
STARTING SESSION
-->

<?php
session_start();
ob_start();
if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id'])) {
    if ($_SESSION['user_id'] == 3)
    {
        header("Location:./aman_sharma/aman.php");

    } else {
        header("Location:./NewUser/user1.php");
    }
}
?>

<div id="TopFixedPlace">

    <a href ="in2dex.php">

        <img alt="Hello World Logo" id="HelloWorldLogo"  src="hwlogo.jpg" >

    </a>



    <div id="mainlinks">
        <p>
            <a href="in2dex.php" id="HOME">HOME</a>
             <a href="#ABOUT_USDOWN"  id="ABOUT_US">ABOUT US</a>
            <a href="#COURSESDOWN" id="COURSES">COURSES</a>
            <a href="#teamdown"  id="TEAM">TEAM</a>
            <a  id="LOGINREGISTER">LOGIN/REGISTER</a>


    </div>
</div>


<br><br><br><br><br><br>

<div id="Typeall">
         <div class="box effect5">
           <img id="Typingeffetpicturebackgroundimg" src="backpic2.jpg">

    </div>
     

    <p id="mov">
   
   <span class="TypeWirter_effect"></span><span class="lang"></span>
   
   
   

    </p>
   
   
    <link rel="stylesheet" href="animate.css">

  <script src="typed.js"></script>

    
        <script src="actualbodytypeeffect.js">        </script>
     
    
</div>


<br><br><br> <br><br><br><br><br><br><br>
<br>


<div id="ABOUT_USDOWN">

    <img id="abtuspic" src="Abtusimg.jpg" >
       <p id="abtuspara">ABOUT US
        </p>
    <br>
    <p id="abtuspara2">A community not a group where Extreme Programming skills are tested in the language which you like. A friendly workplace where team work is given uttermost importance and doubts/queries are solved in a jiffy.
        Hello World like the name suggests takes programmers from a BEGINNER to EXPERT step by step!</p>
</div>

<br>    <br>    <br> <br>

    <br><br> <br> <br><br>
<br><br><br><br>
<br><br><br>

<div id="loginwhiterectangle" >
</div>

    <div id="logindialogbox" >
                    <div id="leftlogindialogbox" >
                        <div id ="leftlogindialogboxregister" class="leftrightreglog" >
                            <p>REGISTER</p>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                         <form id="leftlogindialogboxregisterform" method ="POST" action="newuserentry.php">
                             <p id="leftlogindialogboxfullname">FULLNAME</p><input type="text" placeholder="FULLNAME" id="fullname" name="fullname">
                            <br>
                             <p id="leftlogindialogboxusername">USERNAME</p><input type="text" id="username" placeholder="USERNAME" name="username">
                            <br>
                             <p id="leftlogindialogboxfb">FACEBOOK-ID(opt.)</p><input type="text" placeholder="FACEBOOK-HANDLE"  id="fb_id" name="fb_id">
                             <br>
                            <p id="leftlogindialogboxpsd">PASSWORD</p><input type="password" placeholder="*****"  id="password" name="password">
                             <br>
                             <p id="leftlogindialogboxconpsd">CONFIRM PASSWORD</p><input type="password" placeholder="*****"  id="confirm_password" name="confirm_password">
                        <br>
                             <div id="leftlogindialogboxsubcancel">
                             <input type="submit" value="Submit">
                                 </div>
                        </form>


                    </div>


        <div id="rightlogindialogbox">

                <div id =rightlogindialogboxregister class="leftrightreglog">
                    <p>LOG IN</p>

                </div>
                <br>
                <br>
                <br>
                <br>
                <form id="rightlogindialogboxregisterform" action="./gogo/index.php" method ="POST">
                    <p id="rightlogindialogboxusername">USERNAME</p><input type="text"  id="rightusername" name="username">
                    <br>
                    <p id="rightlogindialogboxpsd">PASSWORD</p><input type="password"  id="rightpassword" name="password">
                    <br>
                    <div id="rightlogindialogboxsubcancel">
                        <input type="submit" value="LOG-IN" >                    </div>


                </form>





                      </div>



    </div>



<div id="COURSESDOWN">
<br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>

    <div id="rshft">COURSES</div>
<br><br><br>
    <link rel="stylesheet" href="flexslider.css">
<div id=" movright">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="cimg.jpg" id="cimg">
            </li>
            <li>
                <img src="coursesc++.jpg" id="coursesc">
            </li>
            <li>
                <img src="coursesjava.jpg" id="coursesjava">
            </li>
        </ul>
    </div>
</div>

</div>



<div class="parallax-window" id="movedown" data-parallax="scroll"
     data-image-src="nature_mountain_forest_landscape_fog_lake_ultrahd_4k_wallpaper_3839x2558.jpg">
    <p id="waitfor">What are you waiting for ?</p>
    <a id="waitforlogin">LOG IN/REGISTER</a>
</div>


<div id="teamdown">

    <br>
    <br>
    <br>
    <br><br>
    <br><br><br>
    <br>
    <br>
    <br><br>
    <br><br>
    <p id="teamtext">TEAM</p>
    <p id="teamtext2">People Behind This</p>


    <div id="tanisha"  class="grayscale grayscale-fade checkctextfont">

        <p class="tanpara">
            <a href="https://www.facebook.com/jaintanisha01?fref=nf">
            <img src="./teamfotos/tanisha.jpg" id="jaingrey">
            </a>
            </p>
            <br>
            <p class="tanpara">
                <a href="https://www.facebook.com/jaintanisha01?fref=nf">

                <img class="fblogosmall"
                     src="facebook-logo-in-circular-button-outlined-social-symbol_318-70175.png">
                </a>
                </p>


        <p class="tanpara">
            Handles:<br><ul><li>Java</li><br><li>Data Structures</li></ul>

        </p>


    </div>





        <div id="gurjyot" class="grayscale grayscale-fade checkctextfont">
            <p id="gurjyotpara">
                <a href="https://www.facebook.com/kindtothekindhearted?fref=ts">
                <img src="./teamfotos/gurjyot.jpg" id="gurjyotgrey">
                 </a>
            </p>
            <p id="gurjyotpara">
                <a href="https://www.facebook.com/kindtothekindhearted?fref=ts">
                <img class="fblogosmall"  src="facebook-logo-in-circular-button-outlined-social-symbol_318-70175.png">
               </a>
                </p>


            <p id="gurjyotpara">

                Handles:<br><ul><li>Java</li><br><li>Web Development</li></ul>


            </p>

        </div>




    <div id="mohitpuri" class="grayscale grayscale-fade checkctextfont">
        <p id="mohitpuripara">
            <a href="https://www.facebook.com/mohit.puri.9461?fref=ts">

            <img src="./teamfotos/mohitpuri.jpg" id="mohitgrey">
                </a>
        </p>
        <p  id="mohitpuripara">

            <a href="https://www.facebook.com/mohit.puri.9461?fref=ts">

            <img class="fblogosmall"  src="facebook-logo-in-circular-button-outlined-social-symbol_318-70175.png">
    </a>
            </p>

        <p  id="mohitpuripara">
            Handles:<br><ul><li>Java</li><br><li>Android</li></ul>


        </p>

    </div>


    <div id="ayushi"  class="grayscale grayscale-fade checkctextfont ">
        <p id="ayushipara">
            <a href="https://www.facebook.com/ayushi.bansal.9275?fref=ts">

            <img  src="./teamfotos/ayushi.jpg" id="ayushigrey">
                </a>
            </p>
        <p id="ayushipara">

        <a href="https://www.facebook.com/ayushi.bansal.9275?fref=ts">

            <img class="fblogosmall" src="facebook-logo-in-circular-button-outlined-social-symbol_318-70175.png">
            </a>
            </p>

        <p id="ayushipara">

          Handles:<br>
        <ul><li>C++</li><li>Data Structures</li>
            <li>Competitive Programming</li>
        </ul>



        </p>

    </div>


    <div id="prashant"  class="grayscale  grayscale-fade checkctextfont">
        <p id="prashantpara">
            <a href="https://www.facebook.com/prashant.jain.5832">
            <img  src="./teamfotos/prashantpic.jpg"
                      id="prashantgrey">
            </a>
            </p>

        <p id="prashantpara">

            <a href="https://www.facebook.com/prashant.jain.5832">
                <img class="fblogosmall" src="facebook-logo-in-circular-button-outlined-social-symbol_318-70175.png">
            </a>
            </p>

        <p id="prashantpara">

        Handles:<br>
        <ul><li>Python</li></ul>

        </p>

    </div>


</div>





<div id="gtbitmap" >
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.932285767916!2d77.11429341460402!3d28.63179149086631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03437774bf6d%3A0x68966aea6bc15b7e!2sGuru+Tegh+Bahadur+Institute+of+Technology!5e0!3m2!1sen!2sin!4v1470161540636"
            width="900" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>
<br>
<br>

<div id="footer">
    <br>
    <p id="contactus">CONTACT US</p>

    <a id="end" href="https://www.facebook.com/programmerscore/?fref=ts">
      <img src="facebook-logo-in-circular-button-outlined-social-symbol_318-70175.png" id="fblastlogo">        
               
      </a>
        <br><br>
    
<p id ="reportbug">Report a bug:<br><p id="jmail">jaintanisha01@gmail.com</p></p>
	<p id="copyright">
    	© 2016 HELLO WORLD All Rights Reserved.
    
    </p>
    
    
</div>


</body>
</html>
