<?php get_header(); ?>

<section class="services-hero-section">
    <div class="container">
        <div class="col-sm-6 main-title-block">
            <h1 class="services-hero-section__title">window repair</h1>
            <p  class="services-hero-section__desc">Professional team of repair technicians with 12 years experience. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
    </div> 
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>

<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
<?php get_footer(); ?>