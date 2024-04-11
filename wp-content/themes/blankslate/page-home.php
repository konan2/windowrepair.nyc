<?php /* Template Name: Home page */ ?>


<?php get_header(); ?>

<?php the_content(); ?>


<?php
// Получаем массив значений поля
$field_values = get_field('page_section');

// Проверяем, есть ли значения в массиве
if ($field_values) {
    // Создаем пустую переменную для хранения контента
    $content = '';

    // Перебираем каждый элемент массива
    foreach ($field_values as $value) {
        // Проверяем, что значение является массивом и не пустым
        if (is_array($value) && !empty($value['post'])) {
            // Извлекаем объект WP_Post из массива
            $post = $value['post'][0];

            // Добавляем контент текущего поста к общему контенту
            $content .= $post->post_content;
        }
    }

    // Выводим общий контент
    echo $content;
} else {
    echo 'Значение поля не найдено';
}
?>


<section id="front-banner-mirrors" class="front-banner-mirrors container-fluid">
    <div class="front-banner-mirrors__container container-xl">
        <div class="row">
            <div class="col-md-5 flex-column justify-content-center pe-0">
                <h2>One Call Can Solve All Your Window, Doors and Mirrors Problems</h2>
                <p class="mb-2">We created easy to use online appointment booking system where you can schedule your next window repair or glass replacement service in seconds.</p>
                <button class="btn btn-light mt-4">Request a call</button>
            </div>
            <div class="col-md-7">
                <img src="http://localhost/window-repair-nyc/wp-content/uploads/2024/04/img1.jpg" alt="" width="540" height="565" class="alignnone size-full wp-image-87" />
            </div>
        </div>
    </div>
</section>



<section id="best-solutions" class="best-solutions container-fluid">
    <div class="container-xl text-center">
        <h2>our the <span class="text-primary-emphasis">best solution</span> to your vision</h2>
        <p class="text-body-secondary">Our 4 step project system makes everything seamless from connecting with our representative to getting job done by our Glass Technician.</p>
    </div>

    <div class="container-xl">
        <ul class="best-solutions__list row">
            <li class="best-solutions__item col-3 justify-content-center">
                <div class="best-solutions__item-wrapper">
                    <div class="best-solutions__item-content">
                        <div>
                            <h5 class="best-solutions__item-title">Design Visit</h5>
                            <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
            </li>  
            <li class="best-solutions__item col-3 justify-content-center">
                <div class="best-solutions__item-wrapper">
                    <div class="best-solutions__item-content">
                        <div>
                            <h5 class="best-solutions__item-title">Design Visit</h5>
                            <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
            </li>  
            <li class="best-solutions__item col-3 justify-content-center">
                <div class="best-solutions__item-wrapper">
                    <div class="best-solutions__item-content">
                        <div>
                            <h5 class="best-solutions__item-title">Design Visit</h5>
                            <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
            </li>  
            <li class="best-solutions__item col-3 justify-content-center">
                <div class="best-solutions__item-wrapper">
                    <div class="best-solutions__item-content">
                        <div>
                            <h5 class="best-solutions__item-title">Design Visit</h5>
                            <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
            </li>  
        </ul>
    </div>
</section> 



<section id="our-services" class="our-services container-fluid">
    <div class="container-xl text-center">
        <strong class="text-primary-emphasis">Our services</strong>
        <h2>we provide best quality services</h2>
        <p class="text-body-secondary">Welcome to Window Repair NYC – Premier Window Replacement & Repair, Glass Replacement, Mirrors and Shower Doors Services in NYC and Northern New Jersey</p>
    </div>
    <div class="container-xl">
        <div class="our-services__filter">
            <label class="form-check form-check-inline">
                <input type="radio" value="All" id="filter-all" name="filter-type" data-type="all" class="form-check-input filter-radio" checked>
                <span class="form-check-label">All</label>
            </label>
            <label class="form-check form-check-inline">
                <input type="radio" value="Residential" id="filter-type1" name="filter-type" data-type="type1" class="form-check-input filter-radio">
                <span class="form-check-label">Residential</label>
            </label>
            <label class="form-check form-check-inline">
                <input type="radio" value="Commercial" id="filter-type2" name="filter-type" data-type="type2" class="form-check-input filter-radio">
                <span class="form-check-label">Commercial</label>
            </label>
        </div>

    
        <div class="our-services__list row">
       
            <article class="filter-card col-3" data-type="type1">
                <div class="our-services__list-item">
                    <img src="http://localhost/window-repair-nyc/wp-content/uploads/2024/04/img1.jpg" alt="" width="255" height="450" class="alignnone size-full wp-image-87" />
                    <div class="our-services__list-item-wrapper">
                        <h5 class="our-services__list-item-title">Windows</h5>
                        <p class="our-services__list-item-text fw-light">Choose from our wide selection of custom made aluminium windows.</p>
                        <button class="btn btn-primary btn-sm">Windows</button>
                    </div>
                </div>
            </article>
            <article class="filter-card col-3" data-type="type2">
                <div class="our-services__list-item">
                    <img src="http://localhost/window-repair-nyc/wp-content/uploads/2024/04/img1.jpg" alt="" width="255" height="450" class="alignnone size-full wp-image-87" />
                    <div class="our-services__list-item-wrapper">
                        <h5 class="our-services__list-item-title">Windows</h5>
                        <p class="our-services__list-item-text fw-light">Choose from our wide selection of custom made aluminium windows.</p>
                        <button class="btn btn-primary btn-sm">Windows</button>
                    </div>
                </div>
            </article>
            <article class="filter-card col-3" data-type="type1">
                <div class="our-services__list-item">
                    <img src="http://localhost/window-repair-nyc/wp-content/uploads/2024/04/img1.jpg" alt="" width="255" height="450" class="alignnone size-full wp-image-87" />
                    <div class="our-services__list-item-wrapper">
                        <h5 class="our-services__list-item-title">Windows</h5>
                        <p class="our-services__list-item-text fw-light">Choose from our wide selection of custom made aluminium windows.</p>
                        <button class="btn btn-primary btn-sm">Windows</button>
                    </div>
                </div>
            </article>
            <article class="filter-card col-3" data-type="type2">
                <div class="our-services__list-item">
                    <img src="http://localhost/window-repair-nyc/wp-content/uploads/2024/04/img1.jpg" alt="" width="255" height="450" class="alignnone size-full wp-image-87" />
                    <div class="our-services__list-item-wrapper">
                        <h5 class="our-services__list-item-title">Windows</h5>
                        <p class="our-services__list-item-text fw-light">Choose from our wide selection of custom made aluminium windows.</p>
                        <button class="btn btn-primary btn-sm">Windows</button>
                    </div>
                </div>
            </article>
        </div>
   
</section>



<script>
  // Получаем все радио кнопки
const radioButtons = document.querySelectorAll('.filter-radio');

// Добавляем обработчик событий для каждой радио кнопки
radioButtons.forEach(function(radioButton) {
  radioButton.addEventListener('change', function() {
    const type = this.dataset.type; // Получаем значение атрибута data-type радио кнопки

    // Получаем все карточки
    const cards = document.querySelectorAll('.filter-card');

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

</script>

<?php get_footer();?>