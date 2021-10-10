new WOW().init();

// mobile menu open close
function openNav() {
  document.getElementById("mySidenav").style.left = "0";
}

function closeNav() {
  document.getElementById("mySidenav").style.left = "-100%";
}

$(document).ready(function(){

    jQuery('.cat-box').matchHeight({
        byRow:true
    });

});


$('.client-slide .owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    autoplay :true,
    nav:false,
    navText:["<span class='fal fa-arrow-left'></span>","<span class='fal fa-arrow-right'></span>"],
    dots:true,
    responsive:{
        0:{
            items:2,
        },
        600:{
            items:2,
        },
        768:{
            items:2,            
        },
        1000:{
            items:4,
        },
        1501:{
            items:5
        }
    }
});

$('.product-slide .owl-carousel').owlCarousel({
    loop:true,
    center: true,
    margin:0,
    autoplay :true,
    nav:false,
    navText:["<span class='fal fa-arrow-left'></span>","<span class='fal fa-arrow-right'></span>"],
    dots:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        768:{
            items:3,            
        },
        1400:{
            items:4
        }
    }
});

$('.news-slide .owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    autoplay :true,
    autoplayTimeout:3500,
    nav:false,
    navText:["<span class='fal fa-arrow-left'></span>","<span class='fal fa-arrow-right'></span>"],
    dots:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        768:{
            items:2,            
        },
        1000:{
            items:2,
        },
        1200:{
            items:3
        }
    }
});

$('.blogs-slide .owl-carousel').owlCarousel({
    loop:true,
    center: true,
    margin:30,
    autoplayTimeout:3000,
    autoplay :true,
    nav:false,
    navText:["<span class='fal fa-arrow-left'></span>","<span class='fal fa-arrow-right'></span>"],
    dots:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        768:{
            items:2,            
        },
        1000:{
            items:2,
        },
        1200:{
            items:3
        }
    }
});

$('.testimonial-slide .owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    autoplay :true,
    autoplayTimeout:3800,
    nav:false,
    navText:["<span class='fal fa-arrow-left'></span>","<span class='fal fa-arrow-right'></span>"],
    dots:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        768:{
            items:1,            
        },
        1000:{
            items:1,
        },
        1501:{
            items:1
        }
    }
});


// ------------step-wizard-------------
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});

(function($) {
    "use strict";
    var fullHeight = function() {
        $('.js-fullheight').css('height', $(window).height());
        $(window).resize(function() {
            $('.js-fullheight').css('height', $(window).height());
        });
    };
    fullHeight();
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('m-0');
    });
    $('.closebtn').on('click', function() {
        $('#sidebar').removeClass('active');
    });
})(jQuery);

$(document).ready(function() {
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.user-profile').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});