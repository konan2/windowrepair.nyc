import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/collapse';
import 'bootstrap/js/dist/dropdown';
import 'bootstrap/js/dist/modal';
import Swiper from '../node_modules/swiper/swiper-bundle.min.mjs';
import $ from 'jquery';


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



/// Filter services

const radioButtons = document.querySelectorAll('#our-services .filter-radio');

// Добавляем обработчик событий для каждой радио кнопки
radioButtons.forEach(function(radioButton) {
  radioButton.addEventListener('change', function() {
    const type = this.dataset.type; // Получаем значение атрибута data-type радио кнопки

    // Получаем все карточки
    const cards = document.querySelectorAll('#our-services .filter-card');

    // Перебираем все карточки и проверяем их data-type
    cards.forEach(function(card) {
      if (type === 'all' || card.dataset.type === type) {
        card.style.display = 'block'; // Показываем карточку, если она соответствует выбранному типу или если выбран фильтр "все"
      } else {
        card.style.display = 'none'; // Скрываем карточку, если она не соответствует выбранному типу
      }
    });
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

// function bestQualityServices() {
//   if (window.innerWidth < 768) {
//     const bestQualityServicesSlider = new Swiper('.swiper-best-quality', {
//       loop: true,
//       grabCursor: true,
//       slidesPerView: 3,
//       initialSlide: 0,
//       speed: 1000,
//       autoplay: false,
//       pagination: {
//             el: ".swiper-pagination",
//             clickable: true,
//           },
//       navigation: {
//             nextEl: ".swiper-button-next",
//             prevEl: ".swiper-button-prev",
//           },
//       breakpoints: {
//           320: {
//               slidesPerView: 1,
//           },
//           550: {
//               slidesPerView: 2,
//           },
//           768: {
//               slidesPerView: 3,
//           },
//           1300: {
//               slidesPerView: 6,
//           },
//       }
//     });
//     }
// }
// bestQualityServices();

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
        initSwiperBestQuality();
    }
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
  var defaultCity = 'new-york';
  showDistricts(defaultCity);

  function showDistricts(city) {
  $('.new-york, .new-jersey, .connecticut').hide();
  $('.' + city).show();
  $(".filter-button-city").removeClass("active");
  $(".filter-button-city[data-filter-city='" + city + "']").addClass("active");
  }

 $(".filter-button-city").click(function(){
 var city = $(this).attr('data-filter-city');
 showDistricts(city);
 });
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

var submitButtons = document.querySelectorAll("form input[type='submit']");

    submitButtons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            event.preventDefault(); 
            submitCform(this.closest('form')); 
        });
});


function submitCform(form) {
    form.querySelector("input[type='submit']").disabled = true;
    form.querySelector("input[type='submit']").textContent = 'Please wait...';

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


//add form on the btn call us

$(document).ready(function() {
  $('#showContactForm').click(function() {
      $('.form-wrap.btn-call-us').fadeIn();
      $('#contactFormBackdrop').fadeIn();
  });

  $('#contactFormBackdrop, #closeContactForm').click(function() {
      $('.form-wrap.btn-call-us').fadeOut();
      $('#contactFormBackdrop').fadeOut();
  });
});


