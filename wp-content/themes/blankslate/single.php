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
        <div class="main-post-content__block">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>

        <?php endwhile; endif; ?>

      <div class="categories">
        <?php
        $current_category_id = get_query_var('cat');
        $categories = get_categories();
            if (!empty($categories)) {
                echo '<div class="dropdown-post-category">';
                echo '<button class="btn dropdown-toggle-post-category" type="button" id="dropdownPostButton" data-toggle="dropdown_post_category" aria-haspopup="true" aria-expanded="false">All Blog Categories</button>';
                echo '<div class="dropdown-cat" aria-labelledby="dropdownPostButton">';

                foreach ($categories as $category) {
                    $category_link = get_category_link($category->term_id);
                    $active_class = ($category->term_id == $current_category_id) ? 'active' : ''; 
                    echo '<a class="dropdown-item ' . esc_attr($active_class) . '" href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a>';
                }
                echo '</div>';
                echo '</div>';
            } else {
                echo '<p>No categories found.</p>';
            }
            ?>
      </div>
    </div>
  </div>
</div>


<div class="main-other-post-content">
    <div class="container">
         <div>
            <?php
            function display_recent_articles_block() {
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    echo '<div class="recent-articles">';
                    echo '<h2 class="recent-articles__title">Other articles</h2>';
                    echo '<ul class="block-recent-articles">';
                    while ($query->have_posts()) {
                        $query->the_post();
                        echo '<li class="item-our-team-block">';

                        //    if (has_post_thumbnail()) {
                            echo '<div class="item-our-team-block__top">' . '   <img src="https://mrglazier.com/wp-content/uploads/2024/03/Rectangle-117.png" alt="post-image" />' . '</div>'; 
                        // }
                   
                        echo ' <div class="item-our-team-block__bottom">
                          <span class="post-category">' . get_the_category_list(', ') . '</span>'; 
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
            ?>

            <?php display_recent_articles_block(); ?>
        </div>
 </div>
</div>


<?php get_footer(); ?>
