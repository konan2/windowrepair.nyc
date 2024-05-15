import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/collapse';
import 'bootstrap/js/dist/dropdown';
import 'bootstrap/js/dist/modal';
import videojs from 'video.js';


import Swiper from '../node_modules/swiper/swiper-bundle.min.mjs';
import $ from 'jquery';

// Book online form


window.addEventListener('DOMContentLoaded',function () {

if (document.getElementById('monday-form')) {
  document.getElementById('monday-form').addEventListener('submit', function(event) {
    event.preventDefault();

    
    const trackingId = 'G-MSLQV6CC5K';  

    const form = document.getElementById('monday-form');    
    const name = document.getElementById('name_field').value; 
    const email = document.getElementById('email').value; 
    const phone = document.getElementById('phone').value; 
    const address = document.getElementById('address').value; 
    const projectDescription = document.getElementById('description').value; 
    const button = document.getElementById('form-submit-button'); 

    button.textContent  = 'Please wait...';


    // Data for sending to hubspot
    var formData = {
      'name': name,
      'email': email,
      'phone': phone,
      'address': address,
      'description': projectDescription
  };


    const columnValues = {
        "email": { "text": email,  "email": email },
        "text": phone, 
        "text5": address,
        "long_text": projectDescription
    };

    const data = {
        'query': `mutation {
            create_item (
                board_id: 2614272835,
                item_name: "${name}",
                column_values: "${JSON.stringify(columnValues).replace(/"/g, '\\"')}"
            ) {
                id
                name
            }
        }`
    };



    // Отправка данных


 // Отправляем данные на сервер Hubspot.com

      // fetch('https://api.hsforms.com/submissions/v3/integration/submit/6cbe3e4e-f3e6-480c-b943-8e860bd78322', {
      //   method: 'POST',
      //   headers: {
      //     'Content-Type': 'application/json'
      //   },
      //   body: JSON.stringify(formData)
      // })
      // .then(response => {
      //   if (response.ok) {
      //     console.log('Form data submitted successfully');
      //     // Добавьте здесь код обработки успешной отправки формы
      //   } else {
      //     console.error('Error submitting form data:', response.statusText);
      //     // Добавьте здесь код обработки ошибки отправки формы
      //   }
      // })
      // .catch(error => {
      //   console.error('Error submitting form data:', error);
      //   // Добавьте здесь код обработки ошибки отправки формы
      // });



    // Отправляем данные на сервер Monday.com
    fetch("https://api.monday.com/v2", {
        method: 'post',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'eyJhbGciOiJIUzI1NiJ9.eyJ0aWQiOjM1MjQxMjkxMywiYWFpIjoxMSwidWlkIjo1ODA1MzIzOSwiaWFkIjoiMjAyNC0wNC0yNlQwNjo1ODozOS4zMjZaIiwicGVyIjoibWU6d3JpdGUiLCJhY3RpZCI6NjE2NjcwOSwicmduIjoidXNlMSJ9.szfHVjo2r8QOTzy9ulsOF2xA2ODrEyAZBAvWmpCQ3mI',
            'API-Version': '2023-04'
        },
        body: JSON.stringify(data)
    }).then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
            button.value = 'Please try again.';
        }
        if (response.ok) {
            form.innerHTML = `<div id="success"><h2>Thank You.</h2><p>We will contact you. Shortly.</p></div>`;
        }
        return response.json();
    }).then(data => {
        console.log(data);
    }).catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });







    function sendConversionData(trackingId, email, phone, address, description) {
        // URL для отправки данных о событии конверсии
        var url = 'https://www.google-analytics.com/collect';

        // Данные для отправки
        var data = {
            v: '1',                    // Версия протокола
            tid: trackingId,           // Идентификатор отслеживания (Tracking ID)
            cid: Math.floor(Math.random() * 10000000000), // Идентификатор клиента (Client ID)
            t: 'event',                // Тип запроса
            ec: 'conversion',          // Категория события
            ea: 'submit',              // Действие события
            el: 'form',                // Метка события
            ev: 1,                     // Значение события
            name: name,              // name
            email: email,              // Email
            phone: phone,              // Телефон
            address: address,          // Адрес
            description: projectDescription   // Описание проекта
        };

        // Форматирование данных для отправки
        var params = new URLSearchParams(data);

        // Опции запроса
        var options = {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: params
        };

        // Отправка данных на сервер Google Analytics
        fetch(url, options)
            .then(response => {
                // Обработка ответа (можно добавить дополнительную логику)
                console.log('Conversion data sent successfully');
            })
            .catch(error => {
                // Обработка ошибок (можно добавить дополнительную логику)
                console.error('Error sending conversion data:', error);
            });
    }

    sendConversionData(trackingId, name, email, phone, address, projectDescription);

});
}

});
   

// all form
window.addEventListener('DOMContentLoaded',function () {

  var submitButtons = document.querySelectorAll("form input[type='submit']");
  
      submitButtons.forEach(function (button) {
          button.addEventListener('click', function (event) {
            var form = this.closest('form');
            if (form.checkValidity()) { // Проверка формы
                event.preventDefault(); 
                submitCform(this.closest('form')); 
              }
          });
  });
  
  
  function submitCform(form) {
      form.querySelector("input[type='submit']").disabled = true;
      form.querySelector("input[type='submit']").value = 'Please wait...';
  
      var formData = new FormData(form);
      formData.append('action', 'submitmyform');

      // for (const [key, value] of formData.entries()) {
      //   console.log(`${key}: ${value}`);
      // }
     
      // Send to hubspot

      // var hubspotData = {
      //   'fields': {
      //     'firstname': formData.get('name'),
      //     'phone': formData.get('Phone'),
      //     'message': formData.get('description'),
      //     'email': "test@gmail.com"
      //   }
      // };

      var hs_context = {
        "pageUrl": "https://test.windowrepair.nyc/",
        "pageTitle": "https://test.windowrepair.nyc/",
        "pageId": "https://test.windowrepair.nyc/",
        "pageName": "https://test.windowrepair.nyc/",
      };

      var hubspotData = {
        "fields": [
          {
            "name": "firstname",
            "value": formData.get('name')
          },
          {
            "name": "phone",
            "value": formData.get('Phone')
          },
          {
            "name": "message",
            "value": formData.get('description')
          },
          {
            "name": "email",
            "value": "joh323dfffdfdweq2n@google.com"
          }
        ],
        "context": {
          "hutk": ":hutk", // include this parameter and set it to the hubspotutk cookie value to enable cookie tracking on your submission
          "pageUri": "www.example.com/page",
          "pageName": "Example page"
        },
      }

      console.log(hubspotData);

      fetch('https://api.hsforms.com/submissions/v3/integration/submit/44979414/a72ba619-eacb-4b37-b965-b4719c626659', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(hubspotData)
      })

      .then(response => {
        if (response.ok) {
          console.log('Form data submitted successfully');
        } else {
          console.error('Error submitting form data:', response.statusText);
        }
      })
      .catch(error => {
        console.error('Error submitting form data:', error);
      });
  
      AjaxCform(formData, form);
  }
  
  async function AjaxCform(formData, form) {
      const url = location.protocol + '//' + window.location.hostname + '/wp-admin/admin-ajax.php?action=submitmyform';
      const response = await fetch(url, {
          method: 'POST',
          body: formData,
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
  
  
  
  }); 


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
      768: {
          slidesPerView: 3,
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
      if (document.getElementById('map-iframe')) {

    
  
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
    }
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
      var maxHeight = parseInt(descBlock.css('max-height'), 10);

      if (descBlock[0].scrollHeight > maxHeight) {
          $(this).append('<a class="read-more-button" href="#" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Read more</a>');

          $(this).find(".read-more-button").click(function() {
              var buttonText = $(this).text() === "Read more" ? "Read less" : "Read more";
              $(this).text(buttonText);
              descBlock.toggleClass("expanded");
          });
      }
  });
});