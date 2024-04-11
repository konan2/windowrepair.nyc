// import Modal from '../node_modules/bootstrap/js/src/modal';
// import Tab from '../node_modules/bootstrap/js/src/tab';
// import Dropdown from '../node_modules/bootstrap/js/src/dropdown';
// import Tooltip from '../node_modules/bootstrap/js/src/tooltip';
// import Carousel from '../node_modules/bootstrap/js/src/carousel';

//import '../node_modules/bootstrap/js/src/carousel';
import Swiper from '../node_modules/swiper/swiper-bundle.min.mjs';


window.addEventListener('DOMContentLoaded',function () {

  

// Получаем все элементы с классом 'swiper'
var swiperContainers = document.querySelectorAll('.swiper');

// Перебираем все элементы и инициализируем Swiper для каждого из них
swiperContainers.forEach(function(container) {
  new Swiper(container, {
    loop: true,
    grabCursor: true,
    slidesPerView: 4,
    initialSlide: 0,
    speed: 1000,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    autoplay: {
      delay: 1000,
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
        slidesPerView: 4,
      },
    }
  });
});



/// Filter

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





});