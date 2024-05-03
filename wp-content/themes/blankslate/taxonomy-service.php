
<?php
$image_url = get_field('service_image', get_queried_object());
?>


<?php get_header(); ?>


<section class="services-hub-hero-section" <?php if ($image_url) : ?> style="background: url('<?php echo esc_url($image_url); ?>') no-repeat center; background-size: cover;" <?php endif; ?>>

    <div class="container">
        <div class="main-title-block">
            <h1 class="services-hub-hero-section__title"><?php single_cat_title(); ?></h1>
            <?php if (category_description()) : ?>
                <div class="services-hub-hero-section__desc col-12 col-md-6"><?php echo category_description(); ?></div>
            <?php endif; ?>
        </div>
    </div> 
</section>
    
       
<section class="services-section">   
    <div class="container">
        <h2 class="services-section__title">Our services “<?php single_cat_title(); ?>”</h2>
        <div class="row services_list">
        <?php
                // Запрашиваем посты из текущей категории
                $args = array(
                    'posts_per_page' => -1, // Выводим все посты
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'service', 
                            'field'    => 'slug',
                            'terms'    => get_query_var('service'), 
                        ),
                    ),
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
            ?>
                        <article id="post-<?php the_ID(); ?>" class="service_item col filter windows">
                            <div class="service_item__bl">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img class="service_item__image" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>">
                                </a>
                                <?php else : ?>
                                    <p>No image</p>
                                <?php endif; ?>
                            </div>
                            <h3 class="service_item__title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                        $title = get_the_title(); // Получаем заголовок текущей записи
                                        // Разбиваем заголовок на массив слов
                                        $words = explode(' ', $title);
                                        // Вставляем <br> после первого слова
                                        $first_word = array_shift($words); // Удаляем первое слово из массива                  
                                        echo $first_word . "<br>" . implode(' ', $words);
                                    ?>
                                </a>
                            </h3>
                        </article>
            <?php
                    endwhile;
                    wp_reset_postdata(); // Восстанавливаем оригинальные данные запроса
                else :
                    // Если в категории нет постов, выводим сообщение
                    echo 'No posts found';
                endif;
            ?>
      </div>
    </div><!-- .row services_list-->
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


