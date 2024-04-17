<?php /* Template Name: Blog Template */ ?>


<?php get_header(); ?>

<section class="services-hero-section">
    <div class="container">
        <div class="col-sm-6 main-title-block">
            <h1 class="services-hero-section__title">our news</h1>
            <p  class="services-hero-section__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
        </div>
    </div> 
</section>

<section class="services-section blog-services-section">
        <div class="container">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                <div class="middle-title-block">
                   <h2 class="services-section__title">Recent blog posts</h2>
                   <p class="services-section__desc">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
            </div>
            <div class="services_tabs">
                <button class="btn btn-default filter-button poppins-semibold active" data-filter="all">All</button>
                <button class="btn btn-default filter-button poppins-semibold" data-filter="windows">Windows</button>
                <button class="btn btn-default filter-button poppins-semibold" data-filter="glass">Glass </button>
                <button class="btn btn-default filter-button poppins-semibold" data-filter="doors">Doors</button>
                <button class="btn btn-default filter-button poppins-semibold" data-filter="mirrors">Mirrors</button>
                <button class="btn btn-default filter-button poppins-semibold" data-filter="shower-doors">Shower Doors</button>
            </div>
            <div>
            <?php
function display_recent_articles_block($category = 'all') {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC',
    );
    if ($category !== 'all') {
        $args['category_name'] = $category;
    }
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="recent-articles">';
        echo '<ul class="block-recent-articles">';
        while ($query->have_posts()) {
            $query->the_post();
            echo '<li class="item-our-team-block">';
            echo '<div class="item-our-team-block__top">' . '<img src="https://mrglazier.com/wp-content/uploads/2024/03/Rectangle-117.png" alt="post-image" />' . '</div>'; 
            echo '<div class="item-our-team-block__bottom">';
            echo '<span class="post-category">' . get_the_category_list(', ') . '</span>'; 
            echo '<h4>' . get_the_title() . '</h4>'; 
            echo '<div class="post-excerpt">' . get_the_excerpt() . '</div>'; 
            echo '<div class="row-bottom"><a href="' . get_permalink() . '">' . 'Read more' . '</a>'; 
            echo '<span class="post-date">' . get_the_date() . '</span></div></div>'; 
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
        wp_reset_postdata();
    } else {
        echo '<p>No other articles found.</p>';
    }
}

display_recent_articles_block();
            ?>


        </div>
        </div>
</section>

<?php get_footer(); ?>

<script>

</script>