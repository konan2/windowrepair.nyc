<?php get_header(); ?>

<section class="services-hero-section">
    <div class="container">
        <div class="col-sm-6 main-title-block">
            <h1 class="services-hero-section__title">WHAT ARE THE BASICS OF  WINDOW REPAIR SERVICE ?</h1>
            <p  class="services-hero-section__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
    </div> 
</section>

<div class="main-post-content">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
        <?php endwhile; endif; ?>

    <div class="categories">

    <?php
// Отримання всіх категорій статей
$categories = get_categories();

// Перевірка, чи є категорії
if (!empty($categories)) {
    echo '<ul>';
    // Виведення категорій та створення посилань на сторінку блогу
    foreach ($categories as $category) {
        $category_link = get_category_link($category->term_id);
        echo '<li><a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a></li>';
    }
    echo '</ul>';
} else {
    echo '<p>No categories found.</p>';
}
?>
    </div>
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
                    echo '<ul class="block-recent-articles">';
                    while ($query->have_posts()) {
                        $query->the_post();
                        echo '<li class="item-our-team-block">';

                           if (has_post_thumbnail()) {
                            echo '<div class="item-our-team-block__top">' . get_the_post_thumbnail() . '</div>'; // Фото статті
                        }
                   

                        


                          echo ' <div class="item-our-team-block__bottom">
                          <span class="post-category">' . get_the_category_list(', ') . '</span>'; // Категорія статті
                          echo '<h4>' . get_the_title() . '</h4>'; // Заголовок статті
                           echo '<div class="post-excerpt">' . get_the_excerpt() . '</div>'; // Початок опису статті


                           echo '<div class="row-bottom"><a href="' . get_permalink() . '">' . 'Read more' . '</a>'; // Заголовок статті
                        echo '<span class="post-date">' . get_the_date() . '</span></div></div>'; // Дата статті
                      
                     

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