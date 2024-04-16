<?php get_header(); ?>

<section class="services-hero-section">
    <div class="container">
        <div class="col-sm-6 main-title-block">
            <h1 class="services-hero-section__title">window repair</h1>
            <p  class="services-hero-section__desc">Professional team of repair technicians with 12 years experience. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
    </div> 
</section>

<div class="main-post-content">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
        <?php endwhile; endif; ?>

    <div class="categories"></div>
  </div>
</div>


<div class="main-post-content">
    <div class="container">
         <div>
            <?php
            // Функція, яка відображає компонент блоку з останніми статтями
            function display_recent_articles_block() {
                // Отримуємо останні три статті
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $query = new WP_Query($args);

                // Перевіряємо, чи є статті
                if ($query->have_posts()) {
                    echo '<div class="recent-articles">';
                    echo '<h2>Other articles</h2>';
                    echo '<ul>';
                    while ($query->have_posts()) {
                        $query->the_post();
                        echo '<li>';
                        echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>'; // Заголовок статті
                        echo '<span class="post-date">' . get_the_date() . '</span>'; // Дата статті
                        echo '<span class="post-category">' . get_the_category_list(', ') . '</span>'; // Категорія статті
                        echo '<div class="post-excerpt">' . get_the_excerpt() . '</div>'; // Початок опису статті
                        if (has_post_thumbnail()) {
                            echo '<div class="post-thumbnail">' . get_the_post_thumbnail() . '</div>'; // Фото статті
                        }
                        echo '</li>';
                    }
                    echo '</ul>';
                    echo '</div>';
                    wp_reset_postdata();
                } else {
                    echo '<p>No other articles found.</p>';
                }
            }
            ?>

            <!-- Виклик функції для відображення компонента блоку -->
            <?php display_recent_articles_block(); ?>
        </div>
 </div>
</div>

<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
<?php get_footer(); ?>