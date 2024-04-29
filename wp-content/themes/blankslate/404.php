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
$args = array(
    'posts_per_page' => 5, 
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
       
        $categories = get_the_category();
        if ($categories) {
           
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
    wp_reset_postdata(); 
} else {

    echo 'Немає постів у даній категорії.';
}
?>
            </div>

            <a href="https://test.windowrepair.nyc/service/" class="services-block__link poppins-semibold">See more</a>
          </div>
        </div>
</section>


<?php get_footer(); ?>