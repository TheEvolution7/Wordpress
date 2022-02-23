;
(function ($) {

    "use strict";


    jQuery(document).on('ready', function () {


        /*===============================  
             Sticky 
        ================================*/
        jQuery(window).on('scroll', function (event) {
            var scroll = jQuery(window).scrollTop();
            if (scroll < 110) {
                jQuery(".header-nav").removeClass("sticky");
            } else {
                jQuery(".header-nav").addClass("sticky");
            }
        });

        /*===============================  
             Mobile Menu 
        ================================*/
        jQuery(".navbar-toggler").on('click', function () {
            jQuery(this).toggleClass('active');
        });

        jQuery(".navbar-nav a").on('click', function () {
            jQuery(".navbar-toggler").removeClass('active');
        });
        var subMenu = jQuery(".sub-menu-bar .navbar-nav .sub-menu");

        if (subMenu.length) {
            subMenu.parent('li').children('a').append(function () {
                return '<button class="sub-nav-toggler"> <i class="fal fa-angle-down"></i> </button>';
            });

            var subMenuToggler = jQuery(".sub-menu-bar .navbar-nav .sub-nav-toggler");

            subMenuToggler.on('click', function () {
                jQuery(this).parent().parent().children(".sub-menu").slideToggle();
                return false
            });

        }

        /*===============================  
             side menu Project 1
        ================================*/
        jQuery('.canvas_open').on('click', function () {
            jQuery('.offcanvas_menu_wrapper,.off_canvars_overlay').addClass('active')
        });

        jQuery('.canvas_close,.off_canvars_overlay').on('click', function () {
            jQuery('.offcanvas_menu_wrapper,.off_canvars_overlay').removeClass('active')
        });

        var $offcanvasNav = jQuery('.offcanvas_main_menu'),
            $offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu');
        $offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="fa fa-angle-down"></i></span>');

        $offcanvasNavSubMenu.slideUp();

        $offcanvasNav.on('click', 'li a, li .menu-expand', function (e) {
            var $this = $(this);
            if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand'))) {
                e.preventDefault();
                if ($this.siblings('ul:visible').length) {
                    $this.siblings('ul').slideUp('slow');
                } else {
                    $this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
                    $this.siblings('ul').slideDown('slow');
                }
            }
            if ($this.is('a') || $this.is('span') || $this.attr('clas').match(/\b(menu-expand)\b/)) {
                $this.parent().toggleClass('menu-open');
            } else if ($this.is('li') && $this.attr('class').match(/\b('menu-item-has-children')\b/)) {
                $this.toggleClass('menu-open');
            }
        });

        /*===============================  
             features active
        ================================*/
        var mousehover = jQuery('.about-2-area');
        mousehover.on('mouseover', '.item', function () {
            jQuery('.item.active').removeClass('active');
            jQuery(this).addClass('active');
        });


        /*===============================  
             Isotope Project 1
        ================================*/
        var isotope = jQuery('.container');
        isotope.imagesLoaded(function () {
            var jQuerygrid = jQuery('.grid').isotope({
                transitionDuration: '1s',
            });

            var projectfilter = jQuery('.project-menu ul');
            projectfilter.on('click', 'li', function () {
                var filterValue = jQuery(this).attr('data-filter');
                jQuerygrid.isotope({
                    filter: filterValue
                });
            });

            var projectfilter2 = jQuery('.project-menu ul li');
            projectfilter2.on('click', function (event) {
                jQuery(this).siblings('.active').removeClass('active');
                jQuery(this).addClass('active');
                event.preventDefault();
            });
        });

        isotope.imagesLoaded(function () {
            if (window.innerWidth >= 575.82){
                var jQuerygrid = jQuery('.grid-3').isotope({
                    transitionDuration: '1s',
                });
            }
            else{
                var jQuerygrid = jQuery('.grid-3').isotope({
                    transitionDuration: '1s',
                    layoutMode: 'fitRows'
                });
            }
            
            
        });
        var isotopegrid = jQuery('.grid-2');
        isotopegrid.isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                columnWidth: 1,
            }
        })

        /*===============================  
             hero slider SLICK JS
        ================================*/
        function mainSlider() {

            var BasicSlider = jQuery('.hero-slider');
            var BasicSlider2 = jQuery('.hero-slider-2');

            BasicSlider.on('init', function (e, slick) {
                var $firstAnimatingElements = jQuery('.hero-area:first-child').find('[data-animation]');
                doAnimations($firstAnimatingElements);
            });
            BasicSlider2.on('init', function (e, slick) {
                var $firstAnimatingElements = jQuery('.hero-14-area:first-child').find('[data-animation]');
                doAnimations($firstAnimatingElements);
            });

            BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
                var $animatingElements = jQuery('.hero-area[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
                doAnimations($animatingElements);
            });

            BasicSlider2.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
                var $animatingElements = jQuery('.hero-14-area[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
                doAnimations($animatingElements);
            });

            BasicSlider.slick({
                autoplay: true,
                autoplaySpeed: 10000,
                pauseOnHover: false,
                dots: true,
                fade: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            dots: false,
                            arrows: false
                        }
                }
            ]
            });
            BasicSlider2.slick({
                autoplay: true,
                autoplaySpeed: 10000,
                pauseOnHover: false,
                dots: false,
                fade: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            dots: false,
                            arrows: false
                        }
                }
            ]
            });

            function doAnimations(elements) {
                var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                elements.each(function () {
                    var $this = $(this);
                    var $animationDelay = $this.data('delay');
                    var $animationType = 'animated ' + $this.data('animation');
                    $this.css({
                        'animation-delay': $animationDelay,
                        '-webkit-animation-delay': $animationDelay
                    });
                    $this.addClass($animationType).one(animationEndEvents, function () {
                        $this.removeClass($animationType);
                    });
                });
            }
        }
        mainSlider();

        /*===============================  
             PORTFOLIO ACTIVE SLICK JS
        ================================*/
        var Slider1 = jQuery('.portfolio-active');
        Slider1.slick({
            arrows: true,
            prevArrow: '<span class="prev"><i class="fal fa-angle-left"></i></span>',
            nextArrow: '<span class="next"><i class="fal fa-angle-right"></i></span>',
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            centerMode: true,
            centerPadding: "370px",
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 3,
                        centerPadding: "80px",
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        centerPadding: "0px",
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        centerPadding: "0px",
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: "140px",
                        arrows: false,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: "0px",
                        arrows: false,
                    }
            }
        ]
        });

        /*===============================  
             TESTIMONIAL ACTIVE SLICK JS
        ================================*/
        var Slider2 = jQuery('.testimonial-active');
        Slider2.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            centerMode: true,
            centerPadding: "0px",
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 3,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
            }
        ]
        });

        /*===============================  
             TESTIMONIAL ACTIVE SLICK JS
        ================================*/
        var Slider3 = jQuery('.testimonial-2-active');
        Slider3.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,

        });

        /*===============================  
             TESTIMONIAL ACTIVE SLICK JS
        ================================*/
        var Slider4 = jQuery('.testimonial-3-active');
        Slider4.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            fade: true,

        });

        /*===============================  
             TEAM ACTIVE SLICK JS
        ================================*/
        var Slider5 = jQuery('.team-active');
        Slider5.slick({
            arrows: true,
            prevArrow: '<span class="prev"><i class="fal fa-angle-left"></i></span>',
            nextArrow: '<span class="next"><i class="fal fa-angle-right"></i></span>',
            dots: true,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            centerMode: true,
            centerPadding: "0px",
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 5,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: "140px",
                        arrows: false,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: "0px",
                        arrows: false,
                    }
            }
        ]
        });

        /*===============================  
             TEAM 5 ACTIVE SLICK JS
        ================================*/
        var Slider6 = jQuery('.team-5-active');
        Slider6.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 4,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
            }
        ]
        });

        /*===============================  
             screenshot ACTIVE SLICK JS
        ================================*/
        var Slider7 = jQuery('.screenshot-active');
        Slider7.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            centerMode: true,
            centerPadding: "0px",
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 5,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
            }
        ]
        });

        /*===============================  
             screenshot ACTIVE SLICK JS
        ================================*/
        var Slider8 = jQuery('.brand-list');
        Slider8.slick({
            arrows: false,
            dots: false,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 5,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                    }
            }
        ]
        });

        /*===============================  
             screenshot ACTIVE SLICK JS
        ================================*/
        var Slider9 = jQuery('.service-11-active');
        Slider9.slick({
            arrows: true,
            prevArrow: '<span class="prev"><i class="fal fa-angle-left"></i></span>',
            nextArrow: '<span class="next"><i class="fal fa-angle-right"></i></span>',
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 3,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,

                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                    }
            }
        ]
        });

        /*===============================  
             client slide  SLICK JS
        ================================*/
        var Slider10 = jQuery('.client-slide');
        Slider10.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        dots: false,

                    }
            }
        ]
        });

        /*===============================  
             COUNTER Active
        ================================*/
        if (jQuery('.count').length) {
            jQuery('.count').appear(function () {
                jQuery(this).prop('Counter', 0).animate({
                    Counter: jQuery(this).text()
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                        jQuery(this).text(Math.ceil(now));
                    }
                });
            }, {
                accY: 0
            });
        }

        /*===============================  
             PROGRESS LINE Active
        ================================*/
        if (jQuery('.progress-line').length) {
            jQuery('.progress-line').appear(function () {
                var el = jQuery(this);
                var percent = el.data('width');
                jQuery(el).css('width', percent + '%');
            }, {
                accY: 0
            });
        }
        if (jQuery('.count-box').length) {
            jQuery('.count-box').appear(function () {
                var $t = jQuery(this),
                    n = $t.find(".count-text").attr("data-stop"),
                    r = parseInt($t.find(".count-text").attr("data-speed"), 10);

                if (!$t.hasClass("counted")) {
                    $t.addClass("counted");
                    $({
                        countNum: $t.find(".count-text").text()
                    }).animate({
                        countNum: n
                    }, {
                        duration: r,
                        easing: "linear",
                        step: function () {
                            $t.find(".count-text").text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $t.find(".count-text").text(this.countNum);
                        }
                    });
                }

            }, {
                accY: 0
            });
        }

        /*===============================  
             Magnific Popup
        ================================*/
        var videopopup = jQuery('.video-popup');
        videopopup.magnificPopup({
            type: 'iframe'
        });


        /*===============================  
             Magnific Popup
        ================================*/
        var imagepopup = jQuery('.image-popup');
        imagepopup.magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });


        

let draw = anime.timeline({
    easing: 'easeOutExpo',
    duration: 3000,
    endDelay: 500 });
    draw.add({
        targets: '.line-ic',
        opacity: [0, 1],
        easing: 'easeInOutSine',
        duration: 500,
    }) 
    .add({
        targets: '.line-ic',
        // loop: true,
        // direction: 'alternate',
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: 'easeInOutSine',
        duration: 3000,
        delay: (el, i) => { return i * 500 }
    })
let tl = anime.timeline({
    easing: 'easeOutExpo',
    duration: 3000,
    endDelay: 500 });
  
  
  tl.add({
        targets: '.svg-logo path',
        opacity: [0, 1],
        easing: 'easeInOutSine',
        duration: 500,
    })
      .add({
        targets: '.svg-logo path',
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: 'easeInOutSine',
        duration: 1500,
    })
    
    .add({
        targets: '.svg-logo path',
        fillOpacity: [0, 1],
        easing: 'easeInOutCubic',
        duration: 1000
    },'-=800')
    .add({
        targets: '.pri-text path',
        opacity: [0, 1],
        translateX: [-25, 0],
        // rotateY: ['-18deg', 0],
        delay: anime.stagger(60) 
    },'-=2000')
    .add({
        targets: '.pri-text-1 path',
        opacity: [0, 1],
        translateX: [-25, 0],
        // rotateY: ['-18deg', 0],
        delay: anime.stagger(40) 
    },'-=4500')

    $(document).ready(function(){
        setTimeout(() => {
            $('.loading').fadeOut(1000);
            
        }, 3000);

    });
        
        /*===============================  
             wow js
        ================================*/

        if ($('.wow').length) {
            var wow = new WOW({
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 250, // distance to the element when triggering the animation (default is 0)
                mobile: true, // trigger animations on mobile devices (default is true)
                live: true // act on asynchronously loaded content (default is true)
            });
            wow.init();
        }





        /*===============================  
             Back to top
        ================================*/

        jQuery(window).on('scroll', function () {
            if (jQuery(this).scrollTop() > 600) {
                jQuery('.back-to-top').fadeIn(200)
            } else {
                jQuery('.back-to-top').fadeOut(200)
            }
        });
        jQuery('.back-to-top').on('click', function (event) {
            jQuery('html, body').animate({
                scrollTop: 0,
            }, 1500);
            event.preventDefault();
        });

    });


    jQuery(window).on('load', function (event) {

        /*===============================  
             Prealoder 
        ================================*/
        jQuery('.preloader').delay(500).fadeOut(500);
    });

})(jQuery);;

/*!
 * Particleground
 *
 * @author Jonathan Nicol - @mrjnicol
 * @version 1.1.0
 * @description Creates a canvas based particle system background
 *
 * Inspired by http://requestlab.fr/ and http://disruptivebydesign.com/
 */
!function(a,b){"use strict";function c(a){a=a||{};for(var b=1;b<arguments.length;b++){var c=arguments[b];if(c)for(var d in c)c.hasOwnProperty(d)&&("object"==typeof c[d]?deepExtend(a[d],c[d]):a[d]=c[d])}return a}function d(d,g){function h(){if(y){r=b.createElement("canvas"),r.className="pg-canvas",r.style.display="block",d.insertBefore(r,d.firstChild),s=r.getContext("2d"),i();for(var c=Math.round(r.width*r.height/g.density),e=0;c>e;e++){var f=new n;f.setStackPos(e),z.push(f)}a.addEventListener("resize",function(){k()},!1),b.addEventListener("mousemove",function(a){A=a.pageX,B=a.pageY},!1),D&&!C&&a.addEventListener("deviceorientation",function(){F=Math.min(Math.max(-event.beta,-30),30),E=Math.min(Math.max(-event.gamma,-30),30)},!0),j(),q("onInit")}}function i(){r.width=d.offsetWidth,r.height=d.offsetHeight,s.fillStyle=g.dotColor,s.strokeStyle=g.lineColor,s.lineWidth=g.lineWidth}function j(){if(y){u=a.innerWidth,v=a.innerHeight,s.clearRect(0,0,r.width,r.height);for(var b=0;b<z.length;b++)z[b].updatePosition();for(var b=0;b<z.length;b++)z[b].draw();G||(t=requestAnimationFrame(j))}}function k(){i();for(var a=d.offsetWidth,b=d.offsetHeight,c=z.length-1;c>=0;c--)(z[c].position.x>a||z[c].position.y>b)&&z.splice(c,1);var e=Math.round(r.width*r.height/g.density);if(e>z.length)for(;e>z.length;){var f=new n;z.push(f)}else e<z.length&&z.splice(e);for(c=z.length-1;c>=0;c--)z[c].setStackPos(c)}function l(){G=!0}function m(){G=!1,j()}function n(){switch(this.stackPos,this.active=!0,this.layer=Math.ceil(3*Math.random()),this.parallaxOffsetX=0,this.parallaxOffsetY=0,this.position={x:Math.ceil(Math.random()*r.width),y:Math.ceil(Math.random()*r.height)},this.speed={},g.directionX){case"left":this.speed.x=+(-g.maxSpeedX+Math.random()*g.maxSpeedX-g.minSpeedX).toFixed(2);break;case"right":this.speed.x=+(Math.random()*g.maxSpeedX+g.minSpeedX).toFixed(2);break;default:this.speed.x=+(-g.maxSpeedX/2+Math.random()*g.maxSpeedX).toFixed(2),this.speed.x+=this.speed.x>0?g.minSpeedX:-g.minSpeedX}switch(g.directionY){case"up":this.speed.y=+(-g.maxSpeedY+Math.random()*g.maxSpeedY-g.minSpeedY).toFixed(2);break;case"down":this.speed.y=+(Math.random()*g.maxSpeedY+g.minSpeedY).toFixed(2);break;default:this.speed.y=+(-g.maxSpeedY/2+Math.random()*g.maxSpeedY).toFixed(2),this.speed.x+=this.speed.y>0?g.minSpeedY:-g.minSpeedY}}function o(a,b){return b?void(g[a]=b):g[a]}function p(){console.log("destroy"),r.parentNode.removeChild(r),q("onDestroy"),f&&f(d).removeData("plugin_"+e)}function q(a){void 0!==g[a]&&g[a].call(d)}var r,s,t,u,v,w,x,y=!!b.createElement("canvas").getContext,z=[],A=0,B=0,C=!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i),D=!!a.DeviceOrientationEvent,E=0,F=0,G=!1;return g=c({},a[e].defaults,g),n.prototype.draw=function(){s.beginPath(),s.arc(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY,g.particleRadius/2,0,2*Math.PI,!0),s.closePath(),s.fill(),s.beginPath();for(var a=z.length-1;a>this.stackPos;a--){var b=z[a],c=this.position.x-b.position.x,d=this.position.y-b.position.y,e=Math.sqrt(c*c+d*d).toFixed(2);e<g.proximity&&(s.moveTo(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY),g.curvedLines?s.quadraticCurveTo(Math.max(b.position.x,b.position.x),Math.min(b.position.y,b.position.y),b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY):s.lineTo(b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY))}s.stroke(),s.closePath()},n.prototype.updatePosition=function(){if(g.parallax){if(D&&!C){var a=(u-0)/60;w=(E- -30)*a+0;var b=(v-0)/60;x=(F- -30)*b+0}else w=A,x=B;this.parallaxTargX=(w-u/2)/(g.parallaxMultiplier*this.layer),this.parallaxOffsetX+=(this.parallaxTargX-this.parallaxOffsetX)/10,this.parallaxTargY=(x-v/2)/(g.parallaxMultiplier*this.layer),this.parallaxOffsetY+=(this.parallaxTargY-this.parallaxOffsetY)/10}var c=d.offsetWidth,e=d.offsetHeight;switch(g.directionX){case"left":this.position.x+this.speed.x+this.parallaxOffsetX<0&&(this.position.x=c-this.parallaxOffsetX);break;case"right":this.position.x+this.speed.x+this.parallaxOffsetX>c&&(this.position.x=0-this.parallaxOffsetX);break;default:(this.position.x+this.speed.x+this.parallaxOffsetX>c||this.position.x+this.speed.x+this.parallaxOffsetX<0)&&(this.speed.x=-this.speed.x)}switch(g.directionY){case"up":this.position.y+this.speed.y+this.parallaxOffsetY<0&&(this.position.y=e-this.parallaxOffsetY);break;case"down":this.position.y+this.speed.y+this.parallaxOffsetY>e&&(this.position.y=0-this.parallaxOffsetY);break;default:(this.position.y+this.speed.y+this.parallaxOffsetY>e||this.position.y+this.speed.y+this.parallaxOffsetY<0)&&(this.speed.y=-this.speed.y)}this.position.x+=this.speed.x,this.position.y+=this.speed.y},n.prototype.setStackPos=function(a){this.stackPos=a},h(),{option:o,destroy:p,start:m,pause:l}}var e="particleground",f=a.jQuery;a[e]=function(a,b){return new d(a,b)},a[e].defaults={minSpeedX:.1,maxSpeedX:.7,minSpeedY:.1,maxSpeedY:.7,directionX:"center",directionY:"center",density:1e4,dotColor:"#666666",lineColor:"#666666",particleRadius:7,lineWidth:1,curvedLines:!1,proximity:100,parallax:!0,parallaxMultiplier:5,onInit:function(){},onDestroy:function(){}},f&&(f.fn[e]=function(a){if("string"==typeof arguments[0]){var b,c=arguments[0],g=Array.prototype.slice.call(arguments,1);return this.each(function(){f.data(this,"plugin_"+e)&&"function"==typeof f.data(this,"plugin_"+e)[c]&&(b=f.data(this,"plugin_"+e)[c].apply(this,g))}),void 0!==b?b:this}return"object"!=typeof a&&a?void 0:this.each(function(){f.data(this,"plugin_"+e)||f.data(this,"plugin_"+e,new d(this,a))})})}(window,document),/**
 * requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel
 * @see: http://paulirish.com/2011/requestanimationframe-for-smart-animating/
 * @see: http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating
 * @license: MIT license
 */
function(){for(var a=0,b=["ms","moz","webkit","o"],c=0;c<b.length&&!window.requestAnimationFrame;++c)window.requestAnimationFrame=window[b[c]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[c]+"CancelAnimationFrame"]||window[b[c]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(b){var c=(new Date).getTime(),d=Math.max(0,16-(c-a)),e=window.setTimeout(function(){b(c+d)},d);return a=c+d,e}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(a){clearTimeout(a)})}();
$(window).on('load', function() {
    for( i=1; i < 100; i++ ) { 
        particleground(document.getElementById('particles-foreground-' + i), {
            dotColor: 'rgba(249, 180, 0, 1)',
            lineColor: 'rgba(255, 255, 255, 0.2)',
            minSpeedX: 0.3,
            maxSpeedX: 0.6,
            minSpeedY: 0.3,
            maxSpeedY: 0.6,
            density: 50000, // One particle every n pixels
            curvedLines: false,
            proximity: 250, // How close two dots need to be before they join
            parallaxMultiplier: 10, // Lower the number is more extreme parallax
            particleRadius: 4, // Dot size
          });
          
          particleground(document.getElementById('particles-background-' + i), {
            dotColor: 'rgba(249, 180, 0, 0.9)',
            lineColor: 'rgba(255, 255, 255, 0.2)',
            minSpeedX: 0.075,
            maxSpeedX: 0.15,
            minSpeedY: 0.075,
            maxSpeedY: 0.15,
            density: 30000, // One particle every n pixels
            curvedLines: false,
            proximity: 20, // How close two dots need to be before they join
            parallaxMultiplier: 20, // Lower the number is more extreme parallax
            particleRadius: 2, // Dot size
          });       
    }
})


