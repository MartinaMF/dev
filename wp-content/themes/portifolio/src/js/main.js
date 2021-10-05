import 'bootstrap';

import {smoothNavigation} from './smoothNavigation';
import {revealSections} from './revealSections';

const sectionSkills = document.querySelector('.section-skills');
const AllSections = document.querySelectorAll('.section');



smoothNavigation();



const sectionsObserver = new IntersectionObserver(revealSections , {
  root : null,
  threshold : 0.15
});
AllSections.forEach(function(section){
  sectionsObserver.observe(section);
  
  
});





 
  
 /* window.onscroll = function() {
    if (window.scrollY > containerTop && !handlerFired ) {
         circlesProgress()
         handlerFired = true;
        }
    }; */


/*
console.log('hello world');
  // core version + navigation, pagination modules:
  import Swiper, { Navigation, Pagination } from 'swiper';

  // configure Swiper to use modules
  Swiper.use([Navigation, Pagination]);

  // init Swiper:
var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
 
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
  */