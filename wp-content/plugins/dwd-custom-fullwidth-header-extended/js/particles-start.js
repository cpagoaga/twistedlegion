jQuery(document).ready(function($) {
    var particlesitemnumber = $("#particles-js").data('particles-value'),
    particlesitemcolor = $("#particles-js").data('particles-color'),
    particlesitemcolorlink = $("#particles-js").data('particles-color-link'),
    particlesitemspeed = $("#particles-js").data('particles-speed'),
    particlesitemsize = $("#particles-js").data('particles-size'),
    particlesitemwidth = $("#particles-js").data('particles-width'),
    particlesitemshape = $("#particles-js").data('particles-shape'),
    particlesitemdirection = $("#particles-js").data('particles-direction');
    if (particlesitemwidth == 0) {
      var line_linked = false;
    } else {
      var line_linked = true;
    }
    particlesJS('particles-js', {
        "particles": {
            "number": {
                "value": particlesitemnumber,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": particlesitemcolor
            },
            "shape": {
                "type": particlesitemshape,
                "stroke": {
                    "width": 0,
                    "color": particlesitemcolor
                },
                "polygon": {
                    "nb_sides": 5
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
                "value": particlesitemsize,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": line_linked,
                "distance": 150,
                "color": particlesitemcolorlink,
                "opacity": 0.4,
                "width": particlesitemwidth
            },
            "move": {
                "enable": true,
                "speed": particlesitemspeed,
                "direction": particlesitemdirection,
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
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
                    "mode": "grab"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
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
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });

});
