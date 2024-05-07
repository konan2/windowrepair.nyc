import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/collapse';
import 'bootstrap/js/dist/dropdown';
import 'bootstrap/js/dist/modal';
import videojs from 'video.js';

import Swiper from '../node_modules/swiper/swiper-bundle.min.mjs';
import $ from 'jquery';




// Функция для управления поведением dropdown меню на мобильных устройствах

function manageMobileDropdown() {
  var dropdowns = document.querySelectorAll('.header__menu-container a.nav-link.dropdown-toggle');
  

  if (window.innerWidth < 992) {
      console.log('window.innerWidth < 992');
      dropdowns.forEach((element) => {
        element.setAttribute('data-bs-toggle', 'dropdown')
      });
      
    } 
  else{
    dropdowns.forEach((element) => element.removeAttribute('data-bs-toggle'));

  }
}

// Вызываем функцию manageMobileDropdown при загрузке страницы и изменении размера окна

window.addEventListener('resize', manageMobileDropdown);
window.addEventListener('load', manageMobileDropdown);









window.addEventListener('DOMContentLoaded',function () {

  $(document).ready(function(){
    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');

        $(".filter-button").removeClass("active"); 
        $(this).addClass("active"); 

        if(value == "all") {
            $('.filter').show('1000');
        } else {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
        }
    });
});





///////////////////////


/// Filter works
const tabs = document.querySelectorAll('#our-works .tab');
const cards = document.querySelectorAll('#our-works .filter-card');

// Добавляем обработчик событий для каждой вкладки
tabs.forEach(function(tab) {
  tab.addEventListener('click', function() {
    
    // Удаляем класс .tab--active у всех элементов с классом .tab
    tabs.forEach(function(otherTab) {
      otherTab.classList.remove('tab--active');
    });

    // Добавляем класс .tab--active к текущему элементу
    this.classList.add('tab--active');

    const type = this.dataset.type; // Получаем значение атрибута data-type элемента

    // Перебираем все карточки и проверяем их data-type
    cards.forEach(function(card) {
      if (type === 'all' || card.dataset.type === type) {
        card.style.display = 'block'; // Показываем карточку, если она соответствует выбранному типу или если выбран фильтр "все"
      } 
      else {
        card.style.display = 'none'; // Скрываем карточку, если она не соответствует выбранному типу
      }
    });
  });

  // Установим активный таб по умолчанию
  // if (tab.dataset.type === 'all') {
  //   tab.click();
  // }
});



/// Swipers

const brandSlider = new Swiper('#brands-slider', {
  loop: true,
  grabCursor: true,
  slidesPerView: 3,
  initialSlide: 0,
  speed: 1000,
  autoplay: {
      delay: 3000,
  },
  pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  breakpoints: {
      320: {
          slidesPerView: 1,
      },
      550: {
          slidesPerView: 2,
      },
      768: {
          slidesPerView: 3,
      },
      1300: {
          slidesPerView: 6,
      },
  }
});



const clientsSlider = new Swiper('#clients-slider', {
  loop: true,
  grabCursor: true,
  slidesPerView: 3,
  initialSlide: 0,
  speed: 1000,
  autoplay: {
      delay: 3000,
  },
  pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  breakpoints: {
      320: {
          slidesPerView: 1,
      },
      550: {
          slidesPerView: 2,
      },
      768: {
          slidesPerView: 3,
      },
      1300: {
          slidesPerView: 6,
      },
  }
});



const bestSolutionsSlider = new Swiper('#best-solutions-carousel', {
  loop: true,
  grabCursor: true,
  slidesPerView: 3,
  initialSlide: 0,
  speed: 1000,
  autoplay: {
      delay: 3000,
  },
  pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  breakpoints: {
      320: {
          slidesPerView: 1,
      },
      550: {
          slidesPerView: 2,
      },
      768: {
          slidesPerView: 4,
      },
      1300: {
          slidesPerView: 4,
      },
  }
});

const swiperBestSolutions = new Swiper('.swiper-best-solutions', {
  grabCursor: true,
  slidesPerView: 4,
  initialSlide: 0,
  speed: 1000,
  pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  breakpoints: {
      320: {
          slidesPerView: 1,
      },
      550: {
          slidesPerView: 1,
      },
      768: {
          slidesPerView: 2,
      },
      1100: {
          slidesPerView: 3,
      },
      1300: {
          slidesPerView: 4,
      },
  }
});

var swiperOurTeam = new Swiper(".swiper-container-our-team-block", {
  slidesPerView: 3,
  grabCursor: true,
  spaceBetween: 5,
  speed: 1000,
  // freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
    breakpoints: {
    360: {
    slidesPerView: 1,
    spaceBetween: 0
    },
 550: {
    slidesPerView: 2,
   },
  990: {
slidesPerView: 3,
},
    },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const swiperIconsPartners = new Swiper('.swiper-google-reviews', {
  loop: true,
  grabCursor: true,
  slidesPerView: 3,
  initialSlide: 0,
  speed: 1000,
  autoplay: {
      delay: 3000,
  },
  pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  breakpoints: {
      320: {
          slidesPerView: 1,
      },
      550: {
          slidesPerView: 1,
      },
      768: {
          slidesPerView: 2,
      },
      1300: {
          slidesPerView: 3,
      },
  }
});



////////////////////////////////
let swiperBestQuality;

function initSwiperBestQuality() {
    if (window.innerWidth < 992) {
        swiperBestQuality = new Swiper('#swiper-best-quality', {
            loop: true,
            grabCursor: true,
            slidesPerView: 1,
            initialSlide: 0,
            speed: 1000,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                550: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                }
            }
        });
    }
}

function destroySwiperBestQuality() {
    if (swiperBestQuality) {
        swiperBestQuality.destroy();
        swiperBestQuality = undefined;
    }
}

// Инициализируем слайдер при загрузке страницы
initSwiperBestQuality();

// Слушаем событие изменения размера окна
window.addEventListener('resize', () => {
    if (window.innerWidth >= 992) {
        destroySwiperBestQuality();
    } else {
        destroySwiperBestQuality(); // Додано для перевірки існування Swiper перед знищенням
        initSwiperBestQuality();
    }
});

///// Certification swiper

var certificatesSlider = new Swiper("#certification", {
  loop: true,
  grabCursor: true,
  slidesPerView: 3,
  initialSlide: 0,
  spaceBetween: 30,
  speed: 1000,
  autoplay: {
      delay: 1000,
  }
});


///// Our-services-slider swiper


// breakpoint where swiper will be destroyed
// and switches to a dual-column layout
const breakpoint = window.matchMedia('(max-width: 576px)');

// keep track of swiper instances to destroy later
let ourServicesSlider;

const breakpointChecker = function () {
  // if larger viewport and multi-row layout needed
  if (breakpoint.matches === true) {
    // clean up old instances and inline styles when available
    if (ourServicesSlider !== undefined) ourServicesSlider.destroy(true, true);

    // or/and do nothing
    return;
    // else if a small viewport and single column layout needed
  } else if (breakpoint.matches === false) {
    // fire small viewport version of swiper
    enableOurServicesSlider();
  }
};

const enableOurServicesSlider = function () {
  const visibleSlides = document.querySelectorAll('#our-services-slider .swiper-slide:not(.hidden)');
  const initialSlide = Array.from(visibleSlides).indexOf(visibleSlides[0]);

  ourServicesSlider = new Swiper('#our-services-slider', {
    loop: true,
    grabCursor: true,
    slidesPerView: 4,
    initialSlide: initialSlide,
    spaceBetween: 30,
    speed: 1000,
    autoplay: {
      delay: 1000,
    },
    breakpoints: {
      576: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
    },
  });
};

// keep an eye on viewport size changes
breakpoint.addListener(breakpointChecker);

// kickstart
breakpointChecker();

/// Filter services

const radioButtons = document.querySelectorAll('#our-services .filter-radio');

// Добавляем обработчик событий для каждой радио кнопки
radioButtons.forEach(function (radioButton) {
  radioButton.addEventListener('change', function () {
    const type = this.dataset.type; // Получаем значение атрибута data-type радио кнопки

    // Получаем все карточки
    const cards = document.querySelectorAll('#our-services .filter-card');

    // Перебираем все карточки и проверяем их data-type
    cards.forEach(function (card) {
      if (type === 'all' || card.dataset.type === type) {
        card.classList.remove('d-none'); // Показываем карточку, если она соответствует выбранному типу или если выбран фильтр "все"
      } else {
        card.classList.add('d-none'); // Скрываем карточку, если она не соответствует выбранному типу
      }
    });
    
    if (ourServicesSlider !== undefined) {
      ourServicesSlider.destroy(true, true);
      enableOurServicesSlider();
    }
  });
});



///////////////////////////////


function Tabs() {
var bindAll = function () {
  var menuElements = document.querySelectorAll(".tabs-show-photos-block-21 a[data-tab]");
  for (var i = 0; i < menuElements.length; i++) {
    menuElements[i].addEventListener("click", change, false);
  }
};

var clear = function () {
  var menuElements = document.querySelectorAll(".tabs-show-photos-block-21 a[data-tab]");
  for (var i = 0; i < menuElements.length; i++) {
    menuElements[i].classList.remove("active");
    var id = menuElements[i].getAttribute("data-tab");
    document.getElementById(id).classList.remove("active");
  }
};

var change = function (e) {
  clear();
  e.target.classList.add("active");
  var id = e.currentTarget.getAttribute("data-tab");
  document.getElementById(id).classList.add("active");
  
 
  e.preventDefault();
};

bindAll();
}

var connectTabs = new Tabs();

function initSwipers() {
if (window.innerWidth < 990) {
const swiperShowPhotossss4 = new Swiper('.swiper-show-photos-4', {
   slidesPerView: 2,
        grabCursor: true,
        spaceBetween: 20,
        speed: 1000,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
        breakpoints: {
      320: {
          slidesPerView: 1,
      },
      768: {
          slidesPerView: 2,
      },
      }
  });
  const swiperShowPhotossss5 = new Swiper('.swiper-show-photos-5', {
   slidesPerView: 2,
        grabCursor: true,
        spaceBetween: 20,
        speed: 1000,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
        breakpoints: {
      320: {
          slidesPerView: 1,
      },
      768: {
          slidesPerView: 2,
      },

      }
  });
  const swiperShowPhotossss6 = new Swiper('.swiper-show-photos-6', {
   slidesPerView: 2,
        grabCursor: true,
        spaceBetween: 20,
        speed: 1000,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
        breakpoints: {
      320: {
          slidesPerView: 1,
      },
      768: {
          slidesPerView: 2,
      }
      }
  });
  const swiperShowPhotossss7 = new Swiper('.swiper-show-photos-7', {
   slidesPerView: 2,
        grabCursor: true,
        spaceBetween: 20,
        speed: 1000,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
        breakpoints: {
      320: {
          slidesPerView: 1,
      },
      768: {
          slidesPerView: 2,
      }
      }
  });
  const swiperShowPhotossss8 = new Swiper('.swiper-show-photos-8', {
   slidesPerView: 2,
        grabCursor: true,
        spaceBetween: 20,
        speed: 1000,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
        breakpoints: {
      320: {
          slidesPerView: 1,
      },
      768: {
          slidesPerView: 2,
      }
      }
  });
  const swiperShowPhotossss9 = new Swiper('.swiper-show-photos-9', {
        slidesPerView: 2,
        grabCursor: true,
        spaceBetween: 20,
        speed: 1000,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
        breakpoints: {
      320: {
          slidesPerView: 1,
      },
      768: {
          slidesPerView: 2,
      }
      }
  });
}
}

initSwipers();




/// End of document ready


});



//Tabs map

    $(document).ready(function(){
  
      var mapIframe = document.getElementById('map-iframe');
      var initialCity = document.querySelector(".areas-list__city .filter-button-city.active").getAttribute('data-filter-city-coord');
  
    
   

      function showDistricts(city, coordinates) {
        $('.new-york, .new-jersey, .connecticut').hide();
        $('.' + city).show();
        $(".filter-button-city").removeClass("active");
        $(".filter-button-city[data-filter-city='" + city + "']").addClass("active");
        
        // Проверяем, нужно ли устанавливать новый src
        if (mapIframe.src != coordinates) {
          mapIframe.src = coordinates;
        }
      }
    
      $(".filter-button-city").click(function(){
        var city = $(this).attr('data-filter-city');
        showDistricts(city, $(this).attr('data-filter-city-coord'));
      });
    
    
      showDistricts('new-york', initialCity);
    
    });
    
    

//Counter block

$(document).ready(function() {
 $('.counters__value').each(function () {
     var value = parseFloat($(this).text().replace(/,/g, '').replace(/\s/g, ''));

     var isDecimal = value % 1 !== 0;

     $(this).prop('Counter', 0).animate({
         Counter: value
     }, {
         duration: 4000,
         easing: 'swing',
         step: function (now) {
             var formattedValue;
             if (isDecimal) {
                 formattedValue = now.toLocaleString('en', {minimumFractionDigits: 1, maximumFractionDigits: 2, useGrouping: false}).replace(/\B(?=(\d{3})+(?!\d))/g, " ");
             } else {
                 formattedValue = Math.ceil(now).toLocaleString('en').replace(/,/g, " ");
             }
             $(this).text(formattedValue);
         }
     });
 });
});


//blog filter posts

$(document).ready(function() {
  $('.item-our-team-block:visible:first').addClass('first-element'); 

  $('.filter-button').click(function() {
    var category = $(this).data('filter');
    $('.filter-button').removeClass('active');
    $(this).addClass('active');

    var categorySlug = category.replace(/\s+/g, '-').toLowerCase();
    filterArticlesByCategory(categorySlug);
  });
});

function filterArticlesByCategory(category) {
  $('.item-our-team-block').hide().removeClass('first-element'); 
  if (category === 'all') {
    $('.item-our-team-block').show();
  } else {
    $('.item-our-team-block').each(function() {
      var postCategory = $(this).find('.post-category').text().toLowerCase().replace(/\s+/g, '-');
      if (postCategory.indexOf(category) !== -1) {
        $(this).show();
      }
    });
  }
  $('.item-our-team-block:visible:first').addClass('first-element');
}

//toggle btn categories

$(document).ready(function() {
  $('.dropdown-cat').hide(); 
  $('.dropdown-toggle-post-category').click(function() {
    $('.dropdown-cat').toggleClass('show');
  });

  $(document).on('click', function(event) {
    var dropdownCat = $('.dropdown-cat');
    var dropdownToggle = $('.dropdown-toggle-post-category');
    if (!dropdownCat.is(event.target) && !dropdownToggle.is(event.target) && dropdownCat.has(event.target).length === 0) {
      dropdownCat.removeClass('show'); 
    }
  });
});


// all form


window.addEventListener('DOMContentLoaded',function () {

var submitButtons = document.querySelectorAll("form input[type='submit']");

    submitButtons.forEach(function (button) {
        button.addEventListener('click', function (event) {
          var form = this.closest('form');
          if (form.checkValidity()) { // Проверка формы
              event.preventDefault(); 
              console.log("test")
              submitCform(this.closest('form')); 
            }
        });
});


function submitCform(form) {
    form.querySelector("input[type='submit']").disabled = true;
    form.querySelector("input[type='submit']").value = 'Please wait...';

    var formdata = new FormData(form);
    formdata.append('action', 'submitmyform');
    AjaxCform(formdata, form);
}

async function AjaxCform(formdata, form) {
    const url = location.protocol + '//' + window.location.hostname + '/wp-admin/admin-ajax.php?action=submitmyform';
    const response = await fetch(url, {
        method: 'POST',
        body: formdata,
    });
    const data = await response.json();

    if (data['statuse'] === 'ok') {
        form.innerHTML = `<div id="success">${data['reply']}</div>`;
    } else if (data['statuse'] === 'er') {
        form.querySelector("span#status").innerHTML = `<div id="er">${data['reply']}</div>`;
        form.querySelector("input[type='submit']").disabled = false;
        form.querySelector("input[type='submit']").textContent = 'Please try again.';
    }
}



 //Button add comment (form)

var showCommentBtn = document.getElementById('show-comment-btn');
var commentForm = document.getElementById('comment-form');

if (showCommentBtn) {
  showCommentBtn.addEventListener('click', function() {
      if (commentForm && commentForm.style.display === 'none') {
          commentForm.style.display = 'block';
          showCommentBtn.style.display = 'none';
      }
  });
}



}); /// end of dome ready


//scroll categories

$(document).ready(function() {
  var tabsContainer = $('.services_tabs_scrl');
  var scrollArrowLeft = $('.scroll-arrow-left');
  var scrollArrowRight = $('.scroll-arrow-right');


  function checkScrollPosition() {
      if (tabsContainer.scrollLeft() > 0) {
          scrollArrowLeft.show();
      } else {
          scrollArrowLeft.hide();
      }
      if (tabsContainer.width() + tabsContainer.scrollLeft() < tabsContainer.prop('scrollWidth')) {
          scrollArrowRight.show();

      } else {
          scrollArrowRight.hide();
      }
  }

  tabsContainer.on('scroll', checkScrollPosition);
  $(window).on('resize', checkScrollPosition);


  scrollArrowLeft.on('click', function() {
      tabsContainer.animate({
          scrollLeft: Math.max(tabsContainer.scrollLeft() - 200, 0)
      }, 500);
  });


  scrollArrowRight.on('click', function() {
      tabsContainer.animate({
          scrollLeft: Math.min(tabsContainer.scrollLeft() + 200, tabsContainer.prop('scrollWidth') - tabsContainer.width())
      }, 500);
  });

  checkScrollPosition();
});


/// cards google rewiews


$(document).ready(function() {
  var googleReviews = $(".google-reviews-item");

  googleReviews.each(function() {
      var descBlock = $(this).find(".google-reviews-item__desc");

      if (descBlock[0].scrollHeight > descBlock.innerHeight()) {
          $(this).append('<a class="read-more-button" href="#" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Read more</a>');

          $(this).find(".read-more-button").click(function() {
              var buttonText = $(this).text() === "Read more" ? "Read less" : "Read more";
              $(this).text(buttonText);
              descBlock.toggleClass("expanded");
              descBlock.toggleClass("collapsed");
          });
      }
  });
});