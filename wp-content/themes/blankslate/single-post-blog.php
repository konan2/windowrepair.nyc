<?php
    $parent_category_slug = 'blog'; 
    $parent_category = get_term_by('slug', $parent_category_slug, 'category');
 ?>
<?php /* Template for blog item */ ?>
<?php get_header(); ?>


<section class="services-hero-section">
    <div class="container-xl">
        <div class="col-12 col-md-6">
            <h1 class="services-hero-section__title">WHAT ARE THE BASICS OF  WINDOW REPAIR SERVICE ?</h1>
            <p class="services-hero-section__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
    </div> 
</section>

<section class="container-xl">
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="post">
                <h2 class="post__title"><?php the_title(); ?></h2>
                <div class="post__content"><?php the_content(); ?></div>
            </div>
        </div>
        <div class="posts-container col-12 col-md-4">
            <div class="categories">
                <?php $current_category_id = get_query_var('cat');
                
                $categories = get_categories(array(
                    'parent' => $parent_category->term_id
                ));
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
</section>



<section class="container">
<h2>Other articles</h2>

<div class="posts-container row row-cols-1 row-cols-md-3">
<?php 
    // Определите ID категорий, из которых вы хотите выводить посты
    $category_ids = $subcategories_ids;

    $current_post_id = get_the_ID();

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3, // Выводить максимум три поста
        'category__in' => $category_ids, // Выводить посты только из указанных категорий
        'post__not_in' => array($current_post_id),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        <article class="blog-item-container">
            <div class="blog-item">
                <div class="blog-item__image">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Featured Image">
                </div>
                <div class="blog-item__text-wrapper">
                    <div class="blog-item__category"><?php echo get_the_category_list(', '); ?></div>
                    <h4 class="blog-item__title"><?php the_title(); ?></h4>
                    <div class="blog-item__text-excerpt text-body-secondary">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="blog-item__footer">
                        <a class="read-more-button" href="<?php the_permalink(); ?>">Read more</a>
                        <span class="blog-item__date"><?php the_date('M j, Y'); ?></span>
                    </div>
                </div>
            </div>
        </article>
    <?php endwhile; else: ?>
        <p>No articles found.</p>
    <?php endif; 
    wp_reset_postdata(); // Сбросить запрос ?>
</div>


</div>
</section>



<?php get_footer(); ?>
