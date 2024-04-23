
<?php 
   $parent_category = get_term_by('slug', 'blog', 'category');
    
   
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

  $args = array(
    'post_type' => 'post', // Тип записи (в данном случае - посты)
    'posts_per_page' => -1, // Количество постов (-1 для получения всех)
    'category__in' => $subcategories_ids, // ID категории
  );


?>


<?php get_header(); ?>

<section class="services-hero-section">
    <div class="container">
        <div class="col-sm-6 main-title-block">
            <h1 class="services-hero-section__title" itemprop="name"><?php echo $parent_category->name ?></h1>
            <?php 
            $category_description = $parent_category->description; // Получаем описание категории
            if ( $category_description ) {
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
                   <h2 class="services-section__title">Recent blog posts</h2>
                   <p class="text-body-secondary">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
            </div>
            <div class="services_tabs">
            <?php
                // Получаем ID текущей категории, если мы находимся на странице категории
                $current_category_id = is_category() ? get_queried_object_id() : null;

                // Добавляем кнопку "All" в начало списка кнопок
                echo '<a href="' . get_category_link($parent_category->term_id) . '" class="btn btn-default filter-button' . ($current_category_id === $parent_category->term_id ? ' active' : '') . '">All</a>';

                // Создаем кнопки для каждой дочерней категории
                foreach ($subcategories as $category) {
                    $category_name = $category->name;
                    $category_url =  get_category_link($category->term_id);
                    
                    // Проверяем, находимся ли мы на странице этой категории
                    $is_current_category = $current_category_id === $category->term_id;

                    // Создаем кнопку и добавляем класс active, если категория активна
                    echo '<a href="' . $category_url . '" class="btn btn-default filter-button' . ($is_current_category ? ' active' : '') . '">' . $category_name . '</a>';
                }
                ?>

            </div>

            <div class="row row-cols-1 row-cols-md-3">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="blog-item-container">
                        <div class="blog-item">
                            <div class="blog-item__image">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Featured Image">
                            </div>
                            <div class="blog-item__text-wrapper">
                                <div class="blog-item__category"><?php echo get_the_category_list( ', ' ); ?></div>
                                <h4 class="blog-item__title"><?php the_title(); ?></h4>
                                <div class="blog-item__text-excerpt text-body-secondary">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="blog-item__footer">
                                    <a class="read-more-button" href="<?php the_permalink(); ?>">Read more</a>
                                    <span class="blog-item__date"><?php the_date( 'M j, Y' ); ?></span>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile; else: ?>
                    <p>No articles found.</p>
                <?php endif; ?>
                </div>
        
           
                <?php 
                $args = array(
                    'show_all'           => false, // показаны все страницы участвующие в пагинации
                    'end_size'           => 1,     // количество страниц на концах
                    'mid_size'           => 2,     // количество страниц вокруг текущей
                    'prev_next'          => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                    'prev_text'          => __('Previous'),
                    'next_text'          => __('Next'),
                    'add_args'           => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                    'add_fragment'       => '',     // Текст который добавиться ко всем ссылкам.
                    'screen_reader_text' => '',
                    'aria_label'         => __( 'Posts' ), // aria-label="" для nav элемента. С WP 5.3
                    'class'              => 'pagination',  // class="" для nav элемента. С WP 5.5
                );

                echo get_the_posts_pagination($args);
                ?>
    

           

    
           
               
           







        </div>
</section>

<?php get_footer(); ?>
