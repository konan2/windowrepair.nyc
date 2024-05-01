<?php /* Template Name: Service Hub Template */ ?>

<?php
// Получаем значение пользовательского поля
$custom_field_value = get_post_meta(get_the_ID(), 'short_description', true);
?>

<?php 
   $parent_category = get_term_by('slug', 'service', 'taxonomy');
    
   
   // Получаем список дочерних категорий
    $subcategories = get_terms(array(
      'taxonomy' => 'service', // Таксономия (в данном случае - категории)
      'child_of' => $parent_category->term_id, // ID родительской категории
  ));

    // Создаем простой массив из значений term_id
    $subcategories_ids = array();

    // Проходимся по каждой подкатегории
    foreach ($subcategories as $subcategory) {
        // Добавляем term_id в массив $subcategories_ids
        $subcategories_ids[] = $subcategory->term_id;
    }
?>
<?php get_header(); ?>


<section class="services-hub-hero-section">
    <div class="container">
    <div class="main-title-block">
        <h1 class="services-hub-hero-section__title"><?php the_title(); ?></h1>
        <div class="services-hub-hero-section__desc col-12 col-md-6"><?php echo esc_html($custom_field_value); ?></div>
    </div>
    </div> 
</section>


<section class="services-section">
        <div class="container">
            <div class="gallery">
                <div class="middle-title-block">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="services_tabs_scrl">
            <div class="services_tabs">
            <?php 
     
            if (!empty($subcategories_ids)) {
              // Добавляем кнопку "All" в начало списка кнопок
              echo '<button class="btn btn-default filter-button active" data-filter="all">All</button>';

              // Создаем кнопки для каждой дочерней категории
              foreach ($subcategories as $category) {
                  $category_name = $category->name;
                  $category_slug = str_replace('-services', '', $category->slug);
                  // Создаем кнопку
                  echo '<button class="btn btn-default filter-button" data-filter="' . $category_slug . '">' . $category_slug . '</button>';
              }
            }
              ?>
            </div>   
             <div class="scroll-arrow scroll-arrow-left"></div>
            <div class="scroll-arrow scroll-arrow-right"></div>
            </div>
            <div class="row services_list">
            
                        <?php 

                    // Получаем все термины таксономии 'service'
                    $service_terms = get_terms( array(
                        'taxonomy' => 'service',
                        'hide_empty' => false, // показываем пустые таксономии
                    ) );

                    // Проверяем, есть ли термины
                    if ( ! empty( $service_terms ) && ! is_wp_error( $service_terms ) ) {
                        // Перебираем каждый термин
                        foreach ( $service_terms as $service_term ) {
                            // Формируем аргументы для запроса к постам
                            $args = array(
                                'post_type'      => 'post', // Тип записи (в данном случае - посты)
                                'posts_per_page' => -1, // Количество постов (-1 для получения всех)
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'service', // Указываем таксономию
                                        'field'    => 'term_id', // Поле поиска по идентификатору термина
                                        'terms'    => $service_term->term_id, // Указываем идентификатор текущего термина
                                    ),
                                ),
                            );

                            // Запрос к постам
                            $service_posts = new WP_Query( $args );

                            // Проверяем, есть ли посты
                            if ( $service_posts->have_posts() ) {

                                


                           
                                // Перебираем посты
                                while ( $service_posts->have_posts() ) {
                                    $service_posts->the_post(); ?>

                                    <article id="post-<?php the_ID(); ?>" class="service_item col filter <?php echo sanitize_title(str_replace('Services', '', $service_term->name)); ?>">
                                        <div class="service_item__bl">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <img class="service_item__image" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>">
                                            </a>
                                            <?php else : ?>
                                                <p>No image</p>
                                            <?php endif; ?>
                                        </div>
                                        <h3 class="service_item__title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                    </article>

                                    <?php 
              
                                }
                                // Сбрасываем данные о посте
                                wp_reset_postdata();
                            }
                        }
                    }
                    ?>
                
            </div>
        </div>
</section>

<!-- We started Window Repair NYC 8 years ago -->
<?php
echo do_shortcode('[show_section post_id="583"]');
?>

<!-- Certification section -->
<?php echo do_shortcode('[show_section post_id="580"]'); ?>


<!-- Areas section -->
<?php echo do_shortcode('[show_section post_id="294"]'); ?>



<?php get_footer(); ?>


