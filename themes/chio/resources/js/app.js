import Alpine from 'alpinejs'
import AOS from "aos";
import gsap from "gsap";

// get other plugins:
import ScrollTrigger from "gsap/ScrollTrigger";
import Flip from "gsap/Flip";
import Draggable from "gsap/Draggable";

import { CountUp } from 'countup.js';

// don't forget to register plugins
gsap.registerPlugin(ScrollTrigger, Draggable, Flip); 

window.Alpine = Alpine;

jQuery(function($){

      $(document).ready(function(){
  
          let mouseX = 0, mouseY = 0;
          let windowHalfX = window.innerWidth / 2;
          let windowHalfY = window.innerHeight / 2;

          document.addEventListener( 'mousemove', onDocumentMouseMove );
  
          function onDocumentMouseMove( event ) {
                mouseX = ( event.clientX - windowHalfX ) / 5;
                mouseY = ( event.clientY - windowHalfY ) / 5;
            
                var tl = gsap.timeline();
            
                if($(".landing-content").length){
                    tl.to (".landing-content", {
                        scale: 1,
                        duration: .45,
                        y: -(  mouseY ) * .15,
                        x: -(  mouseX ) * .15,
                    }, "<");
                }
            
                if($("#layer-image").length){
                    tl.to ("#layer-image", {
                        scale: 1,
                        duration: .45,
                        y: -(  mouseY ) * .05,
                        x: -(  mouseX ) * .05,
                    }, "<");
                }

                if($("#parallax-image").length){
                    tl.to ("#parallax-image", {
                        scale: 1,
                        duration: .45,
                        y: (  mouseY ) * .05,
                        x: (  mouseX ) * .05,
                    }, "<");
                }
            
            }

            window.addEventListener('scroll', () => {
                const header = $('#main-header');
                if (window.scrollY > 120) {
                    header.addClass('fixed top-0 !py-1 shadow w-full bg-white/75 backdrop-blur-sm z-20');
                } else {
                    header.removeClass('fixed top-0 !py-1 shadow w-full bg-white/75 backdrop-blur-sm z-20');
                }
            });

            /* Counter */
            $('.counter').each(function () {
                const counterElement = $(this);
                new Waypoint({
                    element: counterElement[0], // Lấy phần tử DOM
                    handler: function () {
                        // Kích hoạt Counter.js khi thấy phần tử
                        const value = counterElement[0].dataset.value;
                        const counter = new CountUp(counterElement[0], value, {
                            useEasing: true,
                            useGrouping: true,
                            separator: ",",
                            decimal: "."
                        });
                        counter.start();
                    }, 
                    offset: '85%', // Kích hoạt khi phần tử xuất hiện 75% trong viewport
                });
            });
            $('.progress').each(function () {
                const progressElement = this; // 'this' là phần tử DOM hiện tại trong vòng lặp
                console.log('element', progressElement);
            
                new Waypoint({
                    element: progressElement, // Lấy phần tử DOM
                    handler: function () {
                        // Kích hoạt Counter.js khi thấy phần tử
                        const value = progressElement.dataset.value; // Lấy giá trị data-value
                        $(progressElement).animate({ "width": `${value}%` }, 2000); // Chạy animation
                    }, 
                    offset: '85%', // Kích hoạt khi phần tử xuất hiện 85% trong viewport
                });
            });

            /* Swipper */
            const swiper = new Swiper('.swiper', {
                slidesPerView: 3,
                centeredSlides: false,
                spaceBetween: 35,
                pagination: {
                  el: '.swiper-pagination',
                  type: 'fraction',
                },
                navigation: {
                  nextEl: '.swiper-button-next',
                  prevEl: '.swiper-button-prev',
                }
            });

      });
})

// Navigation toggle
window.addEventListener('load', function () {
      AOS.init();
      Alpine.start();
});
