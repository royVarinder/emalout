$(document).ready(() => {



    

    $('#eMaloutHomePage').on("click", function(){
        // alert();
        $('.loadingScreenModal').show();
    setTimeout(function(){
        $('.loadingScreenModal').fadeOut();
        // $('.searchInputField').css("color", "#333");

    }, 2000);
        window.location = "../emaloutv2";
    });

    $('#emNewsLink').on("click", function(){
        // alert();
        $('.loadingScreenModal').show();
    setTimeout(function(){
        $('.loadingScreenModal').fadeOut();
        // $('.searchInputField').css("color", "#333");

    }, 2000);
        window.location = "em-news.php";
    });

    $('#emAboutUs').on("click", function(){
        // alert();
        $('.loadingScreenModal').show();
    setTimeout(function(){
        $('.loadingScreenModal').fadeOut();
        // $('.searchInputField').css("color", "#333");

    }, 2000);
        window.location = "about-us.php";
    });
    
    $('#contactUs').on("click", function(){
        // alert();
        $('.loadingScreenModal').show();
    setTimeout(function(){
        $('.loadingScreenModal').fadeOut();
        // $('.searchInputField').css("color", "#333");

    }, 2000);
        window.location = "contact-us.php";
    });

    //setting up the all divs to hide////====

        $('#information').on("click", function(){
            // alert("information");
            $('.showDetails').hide();
            $('.showFeatures').hide();
            $('.showReviews').hide();

            $('.showInfo').fadeIn(1000);

            
        });
   
        
        $('#ourVistingCards').on("click", function(){
            // alert("details");
            $('.showInfo').hide();
            $('.showFeatures').hide();
            $('.showReviews').hide();

            $('.showDetails').fadeIn(1000);


        });
        $('#features').on("click", function(){
            // alert("details");
            $('.showInfo').hide();
            $('.showDetails').hide();
            $('.showReviews').hide();

            $('.showFeatures').fadeIn(1000);


        });
        $('#reviews').on("click", function(){
            $('.showInfo').hide();
              $('.showDetails').hide();
              $('.showFeatures').hide();
              $('.showReviews').fadeIn(1000);
            


        });

        $('.shopImageSlider').slick({
             arrows : true,
            dots: false,
            infinite: true,
            speed: 800,
            fade: true,
            cssEase: 'linear',
            autoScroll : true,
            // autoplay: true,
        // autoplaySpeed: 1000,

        });

        $('#searchItem').on("click", function(){
            // alert();
            var searchedItem = $('#inputSearchItem').val();
            // alert(searchedItem);
            if (searchedItem == "")
            {
                // alert("Please something");
                $('.searchInputField').css("box-shadow", "0px 0px 7px red inset");
                // $('.searchInputField').css("color", "#f3f3f3");

                
                // var time = 1000;
                setTimeout(function(){
                    $('.searchInputField').css("box-shadow", "0px 0px 0px #ffffff inset");
                    // $('.searchInputField').css("color", "#333");

                }, 1000);
                
            }
            else
            {
                $('.loadingScreenModal').show();
            setTimeout(function(){
                $('.loadingScreenModal').fadeOut();
                // $('.searchInputField').css("color", "#333");
        
            }, 1000);
            setTimeout (function(){
                $('.searchModal').fadeIn(500);
                $('.searchedInput').text(searchedItem);

            }, 1000);
                
            }

            

        });

        $('#closeModel').on("click", function(){
            $('.searchModal').fadeOut(500);
        });


        $('#addStartup').on('click',function(){
            // $('body').css('overlow','hidden')
            $('.loadingScreenModal').show();
            setTimeout(function(){
                $('.loadingScreenModal').fadeOut();
                // $('.searchInputField').css("color", "#333");
        
            }, 1000);
            setTimeout(function(){
                $('.addStartupModal').fadeIn(500);

            }, 1000);
            // alert();
        });

        $('#closeAddFormModal').on("click",function(){
            $('.addStartupModal').fadeOut(500);
            
        });


        $('#adminLogin').on('click',function(){
            
            $('.adminLoginFromModal').fadeIn(500);
            // alert();
        });

        $('#closeAdminFormModal').on("click",function(){
            $('.adminLoginFromModal').fadeOut(500);
            
        });



        // AFTER LOGIN OF ADMIN
        $('#adminLoginBtn').on("click", function(){
            $('.loadingScreenModal').show();
            setTimeout(function(){
                $('.loadingScreenModal').fadeOut();
                // $('.searchInputField').css("color", "#333");
        
            }, 1000);
            // setTimeout(function(){
                // $('.loadingScreenModal').fadeOut();
                // $('.searchInputField').css("color", "#333");
                window.location = "/emaloutv2/admin/";
            // },   1000);
            
        });     
   


   
    });//END OF DOCUMENT READY FUNCTION


// select image function
// var images = []; 
