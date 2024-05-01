<?php /* Template Name: Service Hub Template */ ?>

<?php get_header(); ?>


<?php
get_header(); // Подключаем шапку сайта
?>

<main id="main" class="site-main">

    <?php
    // Проверяем, есть ли заголовок у текущей категории
    if (is_category()) :
    ?>
        <header class="page-header">
            <h1 class="page-title"><?php single_cat_title(); ?></h1>
            <?php
            // Выводим описание текущей категории, если оно задано
            if (category_description()) :
            ?>
                <div class="category-description"><?php echo category_description(); ?></div>
            <?php endif; ?>
        </header><!-- .page-header -->
    <?php endif; ?>

    <div class="post-wrapper">
        <?php
        // Запрашиваем посты из текущей категории
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-<?php the_ID(); ?> -->
        <?php
            endwhile;
        else :
            // Если в категории нет постов, выводим сообщение
            echo 'No posts found';
        endif;
        ?>
    </div><!-- .post-wrapper -->

    <?php
    // Выводим пагинацию, если она доступна
    the_posts_pagination(array(
        'prev_text' => __('Previous page', 'textdomain'),
        'next_text' => __('Next page', 'textdomain'),
    ));
    ?>

</main><!-- #main -->

<?php
get_sidebar(); // Подключаем сайдбар сайта
get_footer(); // Подключаем подвал сайта
?>








<section class="services-hub-hero-section">
    <div class="container">
        <div class="main-title-block">
            <h1 class="services-hub-hero-section__title">Our services</h1>
            <p  class="services-hub-hero-section__desc">Professional team of repair technicians with 12 years experience. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
    </div> 
</section>



<section class="contact-banner-section">
<div class="container container-xl">
<div class="contact-banner">
<h2 class="contact-banner__title">We started Window Repair NYC 8 years ago</h2>
<p class="contact-banner__desc">Per a recent study, 84% of our customers say they would refer Window Repair NYC to their own friends and family. (Based on +6K actual customers surveyed)</p>
<button class=" btn btn-secondary contact-banner__btn" type="button" data-bs-toggle="modal" data-bs-target="#request-call">request a call</button>
</div>
</div>
</section>

<section class="certification about-us-sec-certific">
<div class="container-xl">
<div class="row row-cols-1 row-cols-md-2">
<div class="flex-column justify-content-center">
<h2>OUR CERTIFICATION</h2>
<p class="text-body-secondary">We are recognized all over New York and New Jersey - our awards throughit.</p>
</div>
<div id="certification" class="swiper">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="card"><img src="https://test.windowrepair.nyc/wp-content/uploads/2024/04/image-399.svg" alt="" width="120" height="120" class="alignnone size-full wp-image-550" /></div>
</div>
<div class="swiper-slide">
<div class="card"><img src="https://test.windowrepair.nyc/wp-content/uploads/2024/04/Frame-5.svg" alt="" width="120" height="120" class="alignnone size-full wp-image-549" /></div>
</div>
<div class="swiper-slide">
<div class="card"><img src="https://test.windowrepair.nyc/wp-content/uploads/2024/04/Frame-4.svg" alt="" width="120" height="120" class="alignnone size-full wp-image-548" /></div>
</div>
<div class="swiper-slide">
<div class="card"><img src="https://test.windowrepair.nyc/wp-content/uploads/2024/04/Frame-3.svg" alt="" width="120" height="123" class="alignnone size-full wp-image-547" /></div>
</div>
<div class="swiper-slide">
<div class="card"><img src="https://test.windowrepair.nyc/wp-content/uploads/2024/04/Frame-2.svg" alt="" width="120" height="120" class="alignnone size-full wp-image-546" /></div>
</div>
<div class="swiper-slide">
<div class="card"><img src="https://test.windowrepair.nyc/wp-content/uploads/2024/04/Frame-1.svg" alt="" width="120" height="120" class="alignnone size-full wp-image-545" /></div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="areas-section">
     <div class="container">
     <div class="areas-block">
      <div class="areas-block__left">
        <h2 class="areas-block__title">AREAS WE SERVICES</h2>
        <p class="areas-block__desc">Choose your state</p>
       
         <div class="row areas-list">
            <div class="col-auto areas-list__city">
                <button class="btn btn-default filter-button-city poppins-semibold " data-filter-city="connecticut">CONNECTICUT</button>
                <button class="btn btn-default filter-button-city poppins-semibold" data-filter-city="new-jersey">NEW JERSEY</button>
                <button class="btn btn-default filter-button-city poppins-semibold active" data-filter-city="new-york">NEW YORK </button>
            </div>
            <div class="col-6 areas-list__location">
                <button class="btn poppins-semibold new-york" >New York City</button>
                <button class="btn poppins-semibold new-york" >New Rochelle</button>
                <button class="btn poppins-semibold new-york" >Hempstead </button>
                <button class="btn poppins-semibold new-york" >White Plains </button>
                <button class="btn poppins-semibold new-york" >Yonkers </button>

                <button class="btn poppins-semibold new-jersey" >Jersey City </button>
                <button class="btn poppins-semibold new-jersey" >Newark </button>
                <button class="btn poppins-semibold new-jersey" >Paterson </button>
                <button class="btn poppins-semibold new-jersey" >Elizabeth </button>
                <button class="btn poppins-semibold new-jersey" >Edison </button>
                <button class="btn poppins-semibold new-jersey" >Clifton </button>
                <button class="btn poppins-semibold new-jersey" >Union City </button>

                <button class="btn poppins-semibold connecticut" >Stamford </button>
                <button class="btn poppins-semibold connecticut" >Norwalk </button>
                <button class="btn poppins-semibold connecticut" >Bridgeport </button>
            </div>
         </div>
     </div>

     <div class="areas-block__right">
        <div class="ratio ratio-16x9">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96714.68291250926!2d-74.05953969406828!3d40.75468158321536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20Nowy%20Jork%2C%20Stany%20Zjednoczone!5e0!3m2!1spl!2spl!4v1672242259543!5m2!1spl!2spl"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
     </div>
     </div>
     </div>
</section>


<?php get_footer(); ?>


