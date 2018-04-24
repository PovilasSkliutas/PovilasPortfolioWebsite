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

    // TypeWriter effect
            var TxtType = function(el, toRotate, period) {
                    this.toRotate = toRotate;
                    this.el = el;
                    this.loopNum = 0;
                    this.period = parseInt(period, 10) || 2000;
                    this.txt = '';
                    this.tick();
                    this.isDeleting = false;
                };

                TxtType.prototype.tick = function() {
                    var i = this.loopNum % this.toRotate.length;
                    var fullTxt = this.toRotate[i];

                    if (this.isDeleting) {
                    this.txt = fullTxt.substring(0, this.txt.length - 1);
                    } else {
                    this.txt = fullTxt.substring(0, this.txt.length + 1);
                    }

                    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

                    var that = this;
                    var delta = 200 - Math.random() * 100;

                    if (this.isDeleting) { delta /= 2; }

                    if (!this.isDeleting && this.txt === fullTxt) {
                    delta = this.period;
                    this.isDeleting = true;
                    } else if (this.isDeleting && this.txt === '') {
                    this.isDeleting = false;
                    this.loopNum++;
                    delta = 500;
                    }

                    setTimeout(function() {
                    that.tick();
                    }, delta);
                };

                window.onload = function() {
                    var elements = document.getElementsByClassName('typewrite');
                    for (var i=0; i<elements.length; i++) {
                        var toRotate = elements[i].getAttribute('data-type');
                        var period = elements[i].getAttribute('data-period');
                        if (toRotate) {
                          new TxtType(elements[i], JSON.parse(toRotate), period);
                        }
                    }
                    // INJECT CSS
                    var css = document.createElement("style");
                    css.type = "text/css";
                    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #00185b}";
                    document.body.appendChild(css);
                };



});
