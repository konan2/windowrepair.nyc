<?php get_header(); ?>
<h1>Category</h1>
<div class="main-post-content">
    <div class="container">
        <header class="header">
        <h1 class="entry-title" itemprop="name"><?php single_term_title(); ?></h1>
        
        </header>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       
        <?php endwhile; endif; ?>
        <!-- <?php get_template_part( 'nav', 'below' ); ?> -->
</div>
</div>
<?php get_footer(); ?>