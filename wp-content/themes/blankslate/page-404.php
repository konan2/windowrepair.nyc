<?php /* Template Name: Page 404 Template */ ?>


<?php get_header(); ?>

<section class="not-found-section">
    <div class="container">
        <div class="not-found-block">
            <img class="not-found-block__img" src="../wp-content/themes/blankslate/img/services-up-404.png" alt="Page not found - 01">
            <h1 class="not-found-block__title">Oops... Page not found</h1>
        </div>
    </div> 
</section>


<section class="services-section">
        <div class="container">
         <div class="services-block">
            <p class="services-block__desc poppins-semibold">Maybe you were looking for</p>

            <div class="row services_list">
                <div class="service_item col filter center windows">
                    <div class="service_item__bl">
                       <img class="service_item__image" src="../wp-content/themes/blankslate/img/services/window_replacement.png" alt="Our services Window Replacement - 01">
                     </div>
                    <h3 class="service_item__title poppins-medium">Window Replacement</h3>
                </div>

                <div class="service_item col filter windows">
                  <div class="service_item__bl">
                   <img class="service_item__image" src="../wp-content/themes/blankslate/img/services/window_repair.png" alt="Our services Window Repair - 02">
                  </div>
                <h3 class="service_item__title poppins-medium">Window Repair</h3>
                </div>

                <div class="service_item col filter windows">
                 <div class="service_item__bl">
                  <img class="service_item__image" src="../wp-content/themes/blankslate/img/services/window_installation.png" alt="Our services Window Installation - 03">
                 </div>
                <h3 class="service_item__title poppins-medium">Window Installation</h3>
                </div>

                <div class="service_item col filter windows">
                 <div class="service_item__bl">
                  <img class="service_item__image" src="../wp-content/themes/blankslate/img/services/door_glass_replacement.png" alt="Our services Window Capping - 04">
                 </div>
                <h3 class="service_item__title poppins-medium">Window Capping</h3>
                </div>

                <div class="service_item col filter mirrors">
                 <div class="service_item__bl">
                   <img class="service_item__image" src="../wp-content/themes/blankslate/img/services/window_replacement.png" alt="Our services Mirror Installation - 18">
                 </div>
                <h3 class="service_item__title poppins-medium">Mirror Installation</h3>
                </div>
            </div>

            <a href="#" class="services-block__link poppins-semibold">See more</a>
          </div>
        </div>
</section>

<?php get_footer(); ?>