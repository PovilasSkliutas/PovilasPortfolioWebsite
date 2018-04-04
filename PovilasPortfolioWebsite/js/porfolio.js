$(function() {


    //HEADEAR scrolled function
    $(window).scroll(function (e) {
        if ($(this).scrollTop() > 10) {
            $('#header-navbar').addClass('scrolled')
        }
        if ($(this).scrollTop() < 10) {
            $('#header-navbar').removeClass('scrolled')
        }
    });

    // Apsirašome formos kintamųjų regex/us
    var $regexname=/^([a-zA-Z\s]{3,16})+$/i;
    var $regexmail=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var $regexmessage=/^[0-9a-zA-Z\s]+$/i;

    // Apsirašome Name validacijos funkciją
       $('.name').on('keypress keydown keyup',function(){
                if (!$(this).val().match($regexname)) {
                 // there is a mismatch, hence show the error message
                    $('.emsg-1').removeClass('hidden');
                    $('.emsg-1').show();
                }
              else{
                   // else, do not display message
                   $('.emsg-1').addClass('hidden');
                  }
            });

    // Apsirašome Email validacijos funkciją
       $('.email').on('keypress keydown keyup',function(){
                if (!$(this).val().match($regexmail)) {
                 // there is a mismatch, hence show the error message
                    $('.emsg-2').removeClass('hidden');
                    $('.emsg-2').show();
                }
              else{
                   // else, do not display message
                   $('.emsg-2').addClass('hidden');
                  }
            });

    // Apsirašome Message validacijos funkciją
       $('.message').on('keypress keydown keyup',function(){
                if (!$(this).val().match($regexmessage)) {
                 // there is a mismatch, hence show the error message
                    $('.emsg-3').removeClass('hidden');
                    $('.emsg-3').show();
                }
              else{
                   // else, do not display message
                   $('.emsg-3').addClass('hidden');
                  }
            });




});
