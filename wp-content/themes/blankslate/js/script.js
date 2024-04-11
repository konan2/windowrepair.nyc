// import Modal from '../node_modules/bootstrap/js/src/modal';
// import Tab from '../node_modules/bootstrap/js/src/tab';
// import Dropdown from '../node_modules/bootstrap/js/src/dropdown';
// import Tooltip from '../node_modules/bootstrap/js/src/tooltip';
// import Carousel from '../node_modules/bootstrap/js/src/carousel';

import '../node_modules/bootstrap/js/src/carousel';

//export default {
  // Alert,
  // Button,
  //Carousel,
  // Collapse,
  //Dropdown,
  //Modal,
  // Offcanvas,
  // Popover,
  // ScrollSpy,
  //Tab,
  // Toast,
    // Popper,
  //Tooltip
//}

window.addEventListener('DOMContentLoaded',function () {



// Brands slider


  // Находим все карусели на странице с классом "carousel"
var carousels = document.querySelectorAll(".carousel");

// Перебираем каждую карусель
carousels.forEach(function(carousel, index) {
    var carouselId = "carousel-" + index; // Генерируем уникальный id для карусели

    // Устанавливаем уникальный id для карусели
    carousel.setAttribute("id", carouselId);

    var carouselItems = carousel.querySelectorAll(".carousel-item");

    // Создаем контейнер для индикаторов
    var indicatorsContainer = document.createElement("div");
    indicatorsContainer.classList.add("carousel-indicators");

    // Создаем кнопку prev
    var prevButton = document.createElement("button");
    prevButton.classList.add("carousel-control-prev");
    prevButton.setAttribute("type", "button");
    prevButton.setAttribute("data-bs-target", "#" + carouselId);
    prevButton.setAttribute("data-bs-slide", "prev");
    prevButton.innerHTML = '<i class="arrow left"></i>';

    // Создаем кнопку next
    var nextButton = document.createElement("button");
    nextButton.classList.add("carousel-control-next");
    nextButton.setAttribute("type", "button");
    nextButton.setAttribute("data-bs-target", "#" + carouselId);
    nextButton.setAttribute("data-bs-slide", "next");
    nextButton.innerHTML = '<i class="arrow right"></i>';

    // Создаем индикаторы для каждого слайда
    carouselItems.forEach(function(item, index) {
        var indicatorButton = document.createElement("button");
        indicatorButton.setAttribute("type", "button");
        indicatorButton.setAttribute("data-bs-target", "#" + carouselId);
        indicatorButton.setAttribute("data-bs-slide-to", index);
        if (index === 0) {
            indicatorButton.classList.add("active");
            indicatorButton.setAttribute("aria-current", "true");
        }
        indicatorsContainer.appendChild(indicatorButton);
    });

    // Вставляем кнопки prev и next перед контейнером индикаторов
    carousel.insertBefore(prevButton, carousel.firstChild);
    carousel.appendChild(nextButton);

    // Вставляем контейнер индикаторов после элемента .carousel-inner
    var carouselInner = carousel.querySelector(".carousel-inner");
    carousel.insertBefore(indicatorsContainer, carouselInner.nextSibling);
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