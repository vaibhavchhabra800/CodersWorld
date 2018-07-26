    $(document).ready(function(){
    $("#HOME").hover(function(){
            $("#HOME").css("color", "orange");
        },function()
        {
            $("#HOME").css("color", "black");


        }

    );
}
    );




    $(document).ready(function(){
            $("#ABOUT_US").hover(function(){
                    $("#ABOUT_US").css("color", "orange");
                },function()
                {
                    $("#ABOUT_US").css("color", "black");


                }

            );
        }
    );





    $(document).ready(function(){
            $("#COURSES").hover(function(){
                    $("#COURSES").css("color", "orange");
                },function()
                {
                    $("#COURSES").css("color", "black");


                }

            );
        }
    );

    $(document).ready(function(){
            $("#TEAM").hover(function(){
                    $("#TEAM").css("color", "orange");
                },function()
                {
                    $("#TEAM").css("color", "black");


                }

            );
        }
    );




    $(document).ready(function(){
            $("#LOGINREGISTER").hover(function(){
                    $("#LOGINREGISTER").css("color", "orange");
                },function()
                {
                    $("#LOGINREGISTER").css("color", "black");


                }

            );
        }
    );





    $(document).ready(function(){
            $("#HOME").hover(function(){
                    $("#rshft").css("color", "orange");
                },function()
                {
                    $("#rshft").css("color", "black");


                }

            );
        }
    );




    /*ANIMATE>CSS shake effects*/


    $(document).ready(function(){
            $("#COURSESDOWN").hover(function(){
                    $("#rshft").addClass('animated jello');


                },function()
                {
                    $("#rshft").removeClass("animated jello")
                }

            );
        }
    );


    $(document).ready(function(){
            $("#teamdown").hover(function(){
                    $("#teamtext").addClass('animated bounceIn');


                },function()
                {
                    $("#teamtext").removeClass("animated bounceIn")
                }

            );
        }
    );


    $(document).ready(function(){
            $("#ABOUT_USDOWN").hover(function(){
                    $("#abtuspara").addClass('animated bounceIn');


                },function()
                {
                    $("#abtuspara").removeClass("animated bounceIn")
                }

            );
        }
    );




    $(document).ready(function()

        {
            $('.parallax-window').parallax({imageSrc:'nature_mountain_forest_landscape_fog_lake_ultrahd_4k_wallpaper_3839x2558.jpg'});


        }
    );


$(function() {
    
    $("h2")
        .wrapInner("<span>")

    $("h2 br")
        .before("<span class='spacer'>")
        .after("<span class='spacer'>");

});





$(document).ready(function(){

            $("#LOGINREGISTER").click(function(){
                $("#loginwhiterectangle").show();
                $("#logindialogbox").show();


            });



            $("#waitforlogin").click(function(){

                $("#loginwhiterectangle").show();
                $("#logindialogbox").show();

            });


        }
    );





    $(document).ready(function(){

            $("#loginwhiterectangle").hide();
            $("#logindialogbox").hide();

        }
    );








    $(document).ready(function(){

            $("#loginwhiterectangle").click(function(){
                $("#loginwhiterectangle").hide();
                $("#logindialogbox").hide();

            });



        }
    );


    $(document).ready(function(){

            $("#HelloWorldLogo").mouseenter(function(){
                var radius = 0;

                var interval = window.setInterval(function() {
                    $("#HelloWorldLogo").css("-webkit-mask", "-webkit-gradient(radial, 47 47, " + radius + ", 47 47, " + (radius + 15) + ", from(rgb(0, 0, 0)), color-stop(0.5, rgba(0, 0, 0, 0.2)), to(rgb(0, 0, 0)))");
                    radius++;
                    if (radius === 254) {
                        window.clearInterval(interval);
                    }
                }, 7);


            });



        }
    );


    $(document).ready(function(){

            $('html').click(function() {
                $('#menucontainer').hide();
            });

            $('#menuwrap').click(function(event){
                event.stopPropagation();
            });

            $('#menutoggle').click(function(event){
                $('#menucontainer').toggle();
            });



        }
    );


