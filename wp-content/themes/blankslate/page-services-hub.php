<?php /* Template Name: Service Hub Template */ ?>
<?php 
   $parent_category = get_term_by('slug', 'Residential', 'category');
    
   
   // Получаем список дочерних категорий
    $subcategories = get_terms(array(
      'taxonomy' => 'category', // Таксономия (в данном случае - категории)
      'child_of' => $parent_category->term_id, // ID родительской категории
  ));

    // Создаем простой массив из значений term_id
    $subcategories_ids = array();

    // Проходимся по каждой подкатегории
    foreach ($subcategories as $subcategory) {
        // Добавляем term_id в массив $subcategories_ids
        $subcategories_ids[] = $subcategory->term_id;
    }


  // echo '<pre>';
  // print_r($subcategories_ids);
  // echo '</pre>';

  $args = array(
    'post_type' => 'post', // Тип записи (в данном случае - посты)
    'posts_per_page' => -1, // Количество постов (-1 для получения всех)
    'category__in' => $subcategories_ids, // ID категории
  );


?>
<?php get_header(); ?>

<section class="services-hub-hero-section">
    <div class="container">
        <div class="main-title-block">
            <h1 class="services-hub-hero-section__title">Our services</h1>
            <p  class="services-hub-hero-section__desc">Professional team of repair technicians with 12 years experience.</p>
        </div>
    </div> 
</section>

<section class="services-section">
        <div class="container">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                <div class="middle-title-block">
                   <h2 class="services-section__title">ALl list of services we provided</h2>
                   <p class="services-section__desc">Professional team of repair technicians with 12 years experience.</p>
                </div>
            </div>
            <div class="services_tabs">
            <?php 
              // Добавляем кнопку "All" в начало списка кнопок
              echo '<button class="btn btn-default filter-button active" data-filter="all">All</button>';

              // Создаем кнопки для каждой дочерней категории
              foreach ($subcategories as $category) {
                  $category_name = $category->name;
                  $category_slug = $category->slug;
                  // Создаем кнопку
                  echo '<button class="btn btn-default filter-button" data-filter="' . $category_slug . '">' . $category_name . '</button>';
              }
              ?>
            </div>
            <div class="row services_list">
            <?php 
             $query = new WP_Query($args);

             if ($query->have_posts()) {
                 while ($query->have_posts()) {
                     $query->the_post();
                     // Получаем категории текущего поста
                     $categories = get_the_category();
                     if ($categories) {
                      // Получаем первую категорию и используем ее название в качестве класса
                        $category_class = sanitize_title($categories[0]->name);
                        echo '<div class="service_item col filter ' . $category_class . '">';
                        echo '<div class="service_item__bl">';
                        echo '<a href="' . get_permalink() . '" title="' . get_the_title() . '">';
                        echo '<img class="service_item__image" src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '">';
                        echo '</a>';
                        echo '</div>';
                        echo '<h3 class="service_item__title"><a href="' . get_permalink() . ' "title="' . get_the_title() . '">' . get_the_title() . '</a></h3>';
                        echo '</div>';
                  }

                 }
                 wp_reset_postdata(); // Восстанавливаем оригинальные данные поста
             } else {
                 // Если постов в этой категории нет
                 echo 'Нет постов в данной категории.';
             }
            ?>



                
            </div>
        </div>
</section>

<section id="best-solutions" class="best-solutions container-fluid">
    <div class="container-xl text-center">
        <h2>our the <span class="text-primary-emphasis">best solution</span> to your vision</h2>
        <p class="text-body-secondary">Our 4 step project system makes everything seamless from connecting with our representative to getting job done by our Glass Technician.</p>
    </div>

    <div class="container-xl">
        <div class="best-solutions__list  swiper-best-solutions">
          <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="best-solutions__item">
                <div class="best-solutions__item-counter">01</div>
                <div class="best-solutions__item-wrapper">
                    <div class="best-solutions__item-content">
                        <div>
                            <h5 class="best-solutions__item-title">Design Visit</h5>
                            <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
            </div>  
          </div>

          <div class="swiper-slide">
            <div class="best-solutions__item">
            <div class="best-solutions__item-counter">02</div>
                <div class="best-solutions__item-wrapper">
                    <div class="best-solutions__item-content">
                        <div>
                            <h5 class="best-solutions__item-title">Design Visit</h5>
                            <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
            </div> 
          </div>  
            
          <div class="swiper-slide"> 
            <div class="best-solutions__item">
            <div class="best-solutions__item-counter">03</div>
                <div class="best-solutions__item-wrapper">
                    <div class="best-solutions__item-content">
                        <div>
                            <h5 class="best-solutions__item-title">Design Visit</h5>
                            <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
            </div> 
          </div>

          <div class="swiper-slide">            
            <div class="best-solutions__item">
            <div class="best-solutions__item-counter">04</div>
                <div class="best-solutions__item-wrapper">
                    <div class="best-solutions__item-content">
                        <div>
                            <h5 class="best-solutions__item-title">Design Visit</h5>
                            <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
            </div> 
          </div> 

         </div> 

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section> 


<section class="areas-section">
     <div class="container">

     <div class="areas-block">

      <div class="areas-block__left">
        <h2 class="areas-block__title">AREAS WE SERVICES</h2>
        <p class="areas-block__desc">Choose your state</p>
       
         <div class="row areas-list">
            <div class="col-auto areas-list__city">
                <button class="btn btn-default filter-button-city poppins-semibold " data-filter-city="connecticut">CONNECTICUT</button>
                <button class="btn btn-default filter-button-city poppins-semibold" data-filter-city="new-jersey">NEW JERSEY</button>
                <button class="btn btn-default filter-button-city poppins-semibold active" data-filter-city="new-york">NEW YORK </button>
            </div>
            <div class="col-6 areas-list__location">
                <button class="btn poppins-semibold new-york" >New York City</button>
                <button class="btn poppins-semibold new-york" >New Rochelle</button>
                <button class="btn poppins-semibold new-york" >Hempstead </button>
                <button class="btn poppins-semibold new-york" >White Plains </button>
                <button class="btn poppins-semibold new-york" >Yonkers </button>

                <button class="btn poppins-semibold new-jersey" >Jersey City </button>
                <button class="btn poppins-semibold new-jersey" >Newark </button>
                <button class="btn poppins-semibold new-jersey" >Paterson </button>
                <button class="btn poppins-semibold new-jersey" >Elizabeth </button>
                <button class="btn poppins-semibold new-jersey" >Edison </button>
                <button class="btn poppins-semibold new-jersey" >Clifton </button>
                <button class="btn poppins-semibold new-jersey" >Union City </button>

                <button class="btn poppins-semibold connecticut" >Stamford </button>
                <button class="btn poppins-semibold connecticut" >Norwalk </button>
                <button class="btn poppins-semibold connecticut" >Bridgeport </button>
            </div>
         </div>
     </div>


     <div class="areas-block__right">
        <div class="ratio ratio-16x9">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96714.68291250926!2d-74.05953969406828!3d40.75468158321536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20Nowy%20Jork%2C%20Stany%20Zjednoczone!5e0!3m2!1spl!2spl!4v1672242259543!5m2!1spl!2spl"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
     </div>

     </div>
     </div>
</section>


<?php get_footer(); ?>



    <script>
   


  //   $(document).ready(function(){
  //    var defaultCity = 'new-york';
  //    showDistricts(defaultCity);
   
  //    function showDistricts(city) {
  //    $('.new-york, .new-jersey, .connecticut').hide();
  //    $('.' + city).show();
  //    $(".filter-button-city").removeClass("active");
  //    $(".filter-button-city[data-filter-city='" + city + "']").addClass("active");
  //    }

  //   $(".filter-button-city").click(function(){
  //   var city = $(this).attr('data-filter-city');
  //   showDistricts(city);
  //   });
  // });
</script>

