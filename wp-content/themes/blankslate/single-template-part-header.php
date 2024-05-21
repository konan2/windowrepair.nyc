

<section class="services-alone-hero-section">
    <div class="container-bg">
       <div class="alone-hero__block">
        <div class="col-sm-6 main-title-block alone-hero__left">
            <h2 class="services-hero-section__title"><?php echo $args['custom_title']; ?></h1>
            <p class="services-hero-section__desc"><?php echo $args['custom_text']; ?></p>
        </div>
        <div class="alone-hero__right">
        <?php echo '<img class="" src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '">'; ?>
        </div>
     </div>
    </div> 
</section>