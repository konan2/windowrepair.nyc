<?php 

/* Template Name: Blog Template */ 

$obj_id = get_queried_object_id();
$blog_page_url = get_permalink($obj_id );


// Получаем информацию о родительской категории "blog"
$parent_category = get_term_by('slug', 'blog', 'category');
$parent_category_url = get_term_link( 'blog', 'category' );

// Получаем список дочерних категорий
$subcategories = get_terms(array(
  'taxonomy' => 'category',
  'child_of' => $parent_category->term_id,
));

// Создаем массив с ID дочерних категорий
$subcategories_ids = array();
foreach ($subcategories as $subcategory) {
    $subcategories_ids[] = $subcategory->term_id;
}

?>

<?php get_header(); ?>

<section class="services-hero-section">
    <div class="container">
        <div class="col-sm-6 main-title-block">
            <h2 class="services-hero-section__title" itemprop="name"><?php echo $parent_category->name ?></h1>
            <?php 
            $category_description = $parent_category->description;
            if ($category_description) {
                echo '<div class="services-hero-section__desc">' . $category_description . '</div>';
            }
            ?>
        </div>
    </div> 
</section>

<section class="blog-services-section">
    <div class="container">
        <div class="gallery mb-4">
            <div class="middle-title-block">
               <?php the_content(); ?>
            </div>
        </div>
        <div class="services_tabs_scrl blog_tabs">
            <div class="services_tabs">
                <?php
                // Добавляем ссылку "All" в начало списка
                echo '<a href="' . $blog_page_url . '" class="btn btn-default filter-button active">All</a>';

                // Создаем кнопки для каждой дочерней категории
                foreach ($subcategories as $category) {
                    $category_name = $category->name;
                    $category_url =  get_category_link($category->term_id);
                    echo '<a href="' . $category_url . '" class="btn btn-default filter-button">' . $category_name . '</a>';
                }
                ?>
            </div>
            <div class="scroll-arrow scroll-arrow-left"></div>
            <div class="scroll-arrow scroll-arrow-right"></div>
        </div>

        <div class="blog row row-cols-1 row-cols-md-3">
            <?php
            // Устанавливаем параметры для запроса постов
            $args = array(
                'category__in' => $subcategories_ids,
                'post_type' => 'post',
                'posts_per_page' => 4, // Количество постов на странице
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // Номер текущей страницы
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <article class="blog-item-container">
                        <div class="blog-item">
                            <div class="blog-item__image">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            </div>
                            <div class="blog-item__text-wrapper">
                                <div class="blog-item__category"><?php echo get_the_category_list(', '); ?></div>
                                <h4 class="blog-item__title"><?php the_title(); ?></h4>
                                <div class="blog-item__text-excerpt text-body-secondary">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="blog-item__footer">
                                    <a class="read-more-button" href="<?php the_permalink(); ?>">Read more</a>
                                    <span class="blog-item__date"><?php echo get_the_date(); ?></span>
                                    
                                </div>
                            </div>
                        </div>
                    </article>
            <?php
                endwhile;
                wp_reset_postdata(); // Восстанавливаем оригинальные данные запроса
            else :
            ?>
                <p>No articles found.</p>
            <?php endif; ?>
        </div>
        
        <div class="pagination">
            <div class="nav-links">
                <?php 
                // Выводим пагинацию
                echo paginate_links(array(
                    'total' => $query->max_num_pages,
                    'current' => max(1, get_query_var('paged')),
                    'prev_text' => __('Prev'),
                    'next_text' => __('Next'),
                    'screen_reader_text' => '',
                    'aria_label'         => __( 'Posts' ),
                ));
                ?>
            </div>
        </div>

    


    </div>
</section>

<?php get_footer(); ?>
