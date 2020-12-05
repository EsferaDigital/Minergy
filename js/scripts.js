jQuery(document).ready(function($){
  $('.site-header .menu-principal .menu').slicknav({
    label: '',
    appendTo: '.site-header',
  });
  particlesJS(
    {
    "particles": {
      "number": {
        "value": 120,
        "density": {
          "enable": true,
          "value_area": 2000
        }
      },
      "color": {
        "value": "#1E5C56"
      },
      "shape": {
        "type": ["circle"],
        "stroke": {
          "width": 5,
          "color": "#1E5C56"
        },
      },
      "size": {
        "value": 12,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 45,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 200,
        "color": "#1E5C56",
        "opacity": 1,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 1.2,
        "direction": "top-bottom-right",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
          "enable": false,
          "rotateX": 1200,
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
          "size": 1,
          "duration": 2,
          "opacity": 1,
          "speed": 3
        },
        "repulse": {
          "distance": 100,
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