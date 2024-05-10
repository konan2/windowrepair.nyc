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
                               

                               // Создаем пустой массив для хранения всех постов
$all_posts = array();

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
            'posts_per_page' => -1, // Выводим все посты
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
            // Добавляем посты в общий массив
            while ($query->have_posts()) {
                $query->the_post();
                $all_posts[] = get_post(); // Добавляем пост в массив
            }
            
            // Сбрасываем данные постов
            wp_reset_postdata();
        }
    }
}

// Если есть посты, сортируем массив и выводим только первые 4
if (!empty($all_posts)) {
    // Сортируем посты по дате в обратном порядке
    usort($all_posts, function($a, $b) {
        return strtotime($b->post_date) - strtotime($a->post_date);
    });

    // Выводим только первые 4 поста
    $count = 0;
    foreach ($all_posts as $post) {
        setup_postdata($post);
        $category_class = sanitize_title(get_the_category($post)[0]->name);
        echo '<div class="service_item col filter ' . $category_class . '">';
        echo '<div class="service_item__bl">';
        echo '<a href="' . get_permalink() . '" title="' . get_the_title() . '">';
        echo '<img class="service_item__image" src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '">';
        echo '</a>';
        echo '</div>';
        echo '<h3 class="service_item__title"><a href="' . get_permalink() . ' "title="' . get_the_title() . '">' . get_the_title() . '</a></h3>';
        echo '</div>';

        $count++;
        if ($count >= 4) break; // Прерываем цикл после вывода 4 постов
    }
} else {
    // Если посты отсутствуют
    echo 'No posts found.';
}

?>
            </div>

            <?php
                // Получаем объект страницы по заголовку
                $page = get_page_by_title('Our Services');

                // Проверяем, найдена ли страница
                if ($page) {
                    // Получаем ссылку на страницу
                    $page_link = get_permalink($page->ID);
                    // Выводим ссылку
                    echo '<a class="services-block__link poppins-semibold" href="' . $page_link . '">See more</a>';
                } else {
                    // Если страница не найдена
                    echo 'Page "Our Services" not found';
                }
            ?>
          </div>
        </div>
</section>


<?php get_footer(); ?>