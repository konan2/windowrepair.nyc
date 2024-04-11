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


// Brands slider

document.addEventListener("DOMContentLoaded", function() {
  var carousel = document.getElementById("carousel-brands-posts");
  var carouselItems = carousel.querySelectorAll(".carousel-item");

  // Создаем контейнер для индикаторов
  var indicatorsContainer = document.createElement("div");
  indicatorsContainer.classList.add("carousel-indicators");

  // Создаем кнопку prev
  var prevButton = document.createElement("button");
  prevButton.classList.add("carousel-control-prev");
  prevButton.setAttribute("type", "button");
  prevButton.setAttribute("data-bs-target", "#carousel-brands-posts");
  prevButton.setAttribute("data-bs-slide", "prev");
  prevButton.innerHTML = '<i class="arrow left"></i>';

  // Создаем кнопку next
  var nextButton = document.createElement("button");
  nextButton.classList.add("carousel-control-next");
  nextButton.setAttribute("type", "button");
  nextButton.setAttribute("data-bs-target", "#carousel-brands-posts");
  nextButton.setAttribute("data-bs-slide", "next");
  nextButton.innerHTML = '<i class="arrow right"></i>';

  // Создаем индикаторы для каждого слайда
  carouselItems.forEach(function(item, index) {
      var indicatorButton = document.createElement("button");
      indicatorButton.setAttribute("type", "button");
      indicatorButton.setAttribute("data-bs-target", "#carousel-brands-posts");
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
