<?php get_header(); ?>





<section class="not-found-section">
    <div class="container">
        <div class="not-found-block">
            <img class="not-found-block__img" src="https://test.windowrepair.nyc/wp-content/uploads/2024/04/services-up-404.png" alt="Page not found - 01">
            <h1 class="not-found-block__title">Oops... Page not found</h1>
        </div>
    </div> 
</section>



<section class="services-section">
        <div class="container">
         <div class="services-block">
            <p class="services-block__desc poppins-semibold">Maybe you were looking for</p>

            <div class="row services_list">
            

                <?php
                // Получаем все термины таксономии 'service'
                $terms = get_terms(array(
                    'taxonomy' => 'service',
                    'hide_empty' => false,
                ));

                // Проверяем, есть ли термины
                if (!empty($terms)) {
                    // Проходимся по каждому термину
                    foreach ($terms as $term) {
                        // Создаем аргументы для WP_Query
                        $args = array(
                            'posts_per_page' => 4, // Выводим все посты
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'service', 
                                    'field'    => 'slug',
                                    'terms'    => $term->slug, // Используем текущий термин в качестве аргумента
                                ),
                            ),
                        );

                        // Создаем новый запрос
                        $query = new WP_Query($args);

                        // Проверяем, есть ли посты для текущего термина
                        if ($query->have_posts()) {
                    
                            // Выводим посты для текущего термина
                            while ($query->have_posts()) {
                                $query->the_post();
                                
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
                            
                            // Сбрасываем данные постов
                            wp_reset_postdata();
                        }
                    }
                } else {
                    // Если термины отсутствуют
                    echo 'No terms found.';
                }

                ?>

            </div>

            <a href="https://test.windowrepair.nyc/service/" class="services-block__link poppins-semibold">See more</a>
          </div>
        </div>
</section>


<?php get_footer(); ?>