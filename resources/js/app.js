$(document).ready(function(e) {
    $("#navbar .dropbtn").mouseenter(function(){
        $("#navbar .dropdown-menu").show();
    });
    $("#navbar .dropbtn").mouseleave(function(){
        $("#navbar .dropdown-menu").hide();
    });
    $("#navbar .dropdown-menu").mouseleave(function(){
        $(this).hide();
    });
    $("#navbar .dropdown-menu").mouseenter(function(){
        $(this).show();
    });

    //$(".social_media_left").hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            //$(".navbar-fixed-top").addClass('menu-fixed');
        } else {
            //$(".navbar-fixed-top").removeClass('menu-fixed');
        }
    });

    $('#contact').click(function(e) {
        e.preventDefault();//in this way you have no redirect
        $('html, body').animate({
            scrollTop: $(".footer").offset().top
        }, 1000)

    });

    $(function() {
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 80,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#c2b59b"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#c2b59b"
                    },
                    "polygon": {
                        "nb_sides": 2
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#c2b59b",
                    "opacity": 1,
                    "width": 0.4
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true,
            "config_demo": {
                "hide_card": false,
                "background_color": "#b61924",
                "background_image": "",
                "background_position": "50% 50%",
                "background_repeat": "no-repeat",
                "background_size": "cover"
            },
            "retina_detect": true
        });
        var update;
        update = function() {
            if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {}
            requestAnimationFrame(update);
        };
        requestAnimationFrame(update);
    });

});