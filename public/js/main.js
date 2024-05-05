// navigation js

$('#toggle').click(function() {
  $(this).toggleClass('active');
  $('#overlay').toggleClass('open');
});





  TweenLite.defaultEase = Power0.easeNone;
  TweenMax.set(".mask", {transformOrigin:"100% 50%"});
  TweenMax.from(".mask1", 2.2, {width:"0px",  ease:Power0.easeNone, repeat:-1, repeatDelay:2})
  TweenMax.from(".mask2", 2.2, {width:"0px", ease:Power0.easeNone, repeat:-1, repeatDelay:2})

  var slideIndex = 0;
  showSlides();
  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }

  $(document).ready(function() {  
      $('.banner-arrow[href^="#"]').on("click", function(e) {
          e.preventDefault();
          var t = this.hash,
              n = $(t);
          $("html, body").stop().animate({
              scrollTop: n.offset().top - 70
          }, 500, "swing", function() {}) 
      })
   
      var swiper = new Swiper('.top-builder-slider', {   
          speed: 500,
          loop: true,
          autoplay: { 
          delay: 4000,
          disableOnInteraction: false,  
          },
          pagination: {
              el: ".swiper-pagination-top-builder-slider", 
              clickable: true,
          },
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
          breakpoints: {
              320: {
                  slidesPerView: 1,
                  spaceBetween: 0,
              },
              576: {
                  slidesPerView: 2,
                  spaceBetween: 0,
              },
              768: {
                  slidesPerView: 3,
                  spaceBetween: 15,
              },
              992: {
                  slidesPerView: 5,
                  spaceBetween: 20,
              }
          }       
      });
      var swiper = new Swiper('.testimonials-slider', {    
          speed: 500,
          loop: true,
          autoplay: { 
          delay: 4000,
          disableOnInteraction: false,  
          },            
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
          breakpoints: {
              320: {
                  slidesPerView: 1,
                  spaceBetween: 30,    
              },
              768: {
                  slidesPerView: 2,
                  spaceBetween: 30,
              },
              992: {
                  slidesPerView: 3,
                  spaceBetween: 30,
              }
          }       
      });   
  })

  window.onscroll = function() {myFunction()};
  
  var header = document.getElementById("main-header");
  var sticky = header.offsetTop;
  
  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
  window.onbeforeunload = function (e) {
    window.onunload = function () {
        window.localStorage.isMySessionActive = "false";
    }
    return undefined;
  };

  window.onload = function () {
        window.localStorage.isMySessionActive = "true";
  };

  if(localStorage.isMySessionActive == "false") {
    localStorage.removeItem("utm_source");
  }

  var utmSource = getUrlVars()["utm_source"];
  if(utmSource) {
    localStorage.setItem("utm_source", utmSource);
  }
  utmSource = localStorage.getItem("utm_source");
  console.log("=============="+utmSource);
  if(utmSource == 'google') {
    jQuery('.srd').val(' 64c9f624ed23e973541845ac');
    jQuery('.source').val('PPC'); 
  }
  
  function getUrlVars()
  {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
      hash = hashes[i].split('=');
      vars.push(hash[0]);
      vars[hash[0]] = hash[1];
    }
    return vars;
  }


 /*****counter */

  document.addEventListener("DOMContentLoaded", () => {
     function counter(id, start, end, duration) {
         let obj = document.getElementById (id),
         current = start,
         range = end - start,
         increment = end > start ? 1 : -1,
         step = Math.abs(Math.floor(duration /range)),
         timer = setInterval(() => {
         current += increment;
         obj.textContent = current;
         if(current == end) {
             clearInterval(timer);
         }
   
 },step);
 
 
     }
     counter("achievement-count1", 0, 24, 3000);
     counter("achievement-count2", 100, 125, 2500);
     counter("achievement-count3", 0, 825, 3000);
   

 
 });