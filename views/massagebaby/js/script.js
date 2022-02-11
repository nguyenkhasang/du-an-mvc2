
var script = function(){

    var win = $(window);
    var html = $('html');
    var body = $('body');

    var mMenu = function(){
        var m_nav = $('.main-nav');
        var m_nav_btn = m_nav.children('.menu-btn');
        var nav = m_nav.children('ul');

        m_nav.find("ul li").each(function() {
            if($(this).find("ul>li").length > 0){
                $(this).prepend('<i></i>');
            }
        });

        m_nav_btn.click(function(){
            if(nav.is(":hidden")){
                $(this).addClass('active');
                nav.slideDown(200);
            }
            else {
                nav.slideUp(200);
                $(this).removeClass('active');
            }
        });

        m_nav.find("li i").click(function(){
            var ul=$(this).nextAll("ul");
            if(ul.is(":hidden") === true){
                $(this).addClass('active');
                ul.slideDown(200);
            }
            else{
                $(this).removeClass("active");
                ul.slideUp();
            }
        });

        win.click(function(e) {
            if(win.width() < 992 && m_nav.has(e.target).length == 0 && !m_nav.is(e.target)){
                m_nav.find('ul').slideUp(200);
                m_nav.find('li>i').removeClass("active");
                m_nav.children('.menu-btn').removeClass('active');
            }
        });

        win.resize(function() {
            if($(this).width()>991){
                nav.show();
                nav.find('ul').show();
            }
            else{
                nav.hide();
                m_nav.children('.menu-btn').removeClass('active');
                nav.find('ul').hide();
                m_nav.find('li>i').removeClass("active");
            }
        });
    }
    

    var backToTop = function(){
        var back_top = $('.back-to-top');

        if(win.scrollTop() > 500 && win.width()<=991){ back_top.fadeIn(); }

        back_top.click(function(){
            $("html, body").animate({ scrollTop: 0 }, 800 );
            return false;
        });

        win.resize(function() {
            if($(this).width()>991){
                back_top.fadeOut();
            }
        });

        win.scroll(function() {    
            if(win.scrollTop() > 500 && win.width()<=991 ) back_top.fadeIn(); 
            else back_top.fadeOut();
        });
    }

    var uiClickShow = function(){
        // var ani = 200;
        // $('[data-show]').each(function() {
        //     var this_ = $(this);
        //     var ct = $(this_.attr('data-show'));

        //     this_.click(function(e) {
        //         e.preventDefault();
        //         ct.slideToggle(ani);
        //     });
        // });

        // win.click(function(e) {
        //     if($(this).width() > 991){
        //         $('[data-show]').each(function() {
        //             var this_ = $(this);
        //             var ct = $(this_.attr('data-show'));
        //             if(ct.has(e.target).length == 0 && !ct.is(e.target) && this_.has(e.target).length == 0 && !this_.is(e.target)){
        //                 ct.slideUp(ani);
        //             }
        //         })
        //     }
        // });
    }

    function doAnimations( elems ) {
        var animEndEv = 'webkitAnimationEnd animationend';
        elems.each(function () {
            var $this = $(this),
            $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }

    var uiSlider = function(){
        var $myCarousel = $('#slider');
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");     
        $myCarousel.carousel();   
        doAnimations($firstAnimatingElems);
        $myCarousel.on('slide.bs.carousel', function (e) {
            var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
        });
    }
    var uiSlick = function(){
        // $('.pro-cas').slick({
        //     slidesToShow: 4,
        //     slidesToScroll: 1,
        //     nextArrow: '<i class="cas-arrow smooth next"></i>',
        //     prevArrow: '<i class="cas-arrow smooth prev"></i>',
        //     autoplay: true,
        //     swipeToSlide: true,
        //     autoplaySpeed: 4000,
        //     responsive: [
        //     {
        //         breakpoint: 1199,
        //         settings: {
        //             slidesToShow: 3,
        //         }
        //     },
        //     {
        //         breakpoint: 991,
        //         settings: {
        //             slidesToShow: 3,
        //         }
        //     },
        //     {
        //         breakpoint: 700,
        //         settings: {
        //             slidesToShow: 2,
        //         }
        //     },
        //     {
        //         breakpoint: 480,
        //         settings: {
        //             slidesToShow: 1,
        //         }
        //     }
        //     ],

        // })
    }

    var uiRate = function(){
        var starw = 0;
        $('body').on('mouseenter', '.star-rating.on .star-base', function(e) {
            starw = $(this).children('.star-rate').width();
        });
        $('body').on('mousemove', '.star-rating.on .star-base', function(e) {
            $(this).children('.star-rate').width(e.pageX - $(this).offset().left);
        });
        $('body').on('mouseleave', '.star-rating.on .star-base', function(e) {
            $(this).children('.star-rate').width(starw);
        });
    }

    return {

        uiInit: function($fun){
            switch ($fun) {
                case 'mMenu':
                mMenu();
                break;
                case 'backToTop':
                backToTop();
                break;
                case 'uiSlider':
                uiSlider();
                break;
                case 'uiSlick':
                uiSlick();
                break;
                case 'uiClickShow':
                uiClickShow();
                break;
                case 'uiRate':
                uiRate();
                break;

                default:
                mMenu();
                backToTop();
                uiSlider();
                uiSlick();
                uiClickShow();
                uiRate();
            }
        }
    }

}();


jQuery(function($) {
    script.uiInit();

    
});


$(window).bind("load", function() {
    $('body').append('<div id="fb-root"></div>');
    $.ajax({
        global: false,
        url: "theme/frontend/js/social.js",
        dataType: "script"
    });
    $.ajax({
        global: false,
        url: "https://apis.google.com/js/platform.js",
        dataType: "script"
    });
    window.___gcfg = {
        lang: 'vi',
        parsetags: 'onload'
    };

    var arr = $('.yt-iframe');
    var arrLe = arr.length;
    for (var i = 0; i < arrLe; i++) {
        var item = $(arr[i]);
        item.append('<iframe src="https://www.youtube.com/embed/'+item.attr('data-id')+'?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>');
    }
});