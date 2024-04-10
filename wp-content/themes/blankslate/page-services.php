<?php /* Template Name: Service Template */ ?>


<?php get_header(); ?>

<section id="portfolio">
        <div class="container">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                <h2 class="gallery-title">ALl list of services we provided</h2>
            </div>
            <div>
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="windows">Windows</button>
                <button class="btn btn-default filter-button" data-filter="glass">Glass </button>
                <button class="btn btn-default filter-button" data-filter="doors">Doors</button>
                <button class="btn btn-default filter-button" data-filter="mirrors">Mirrors</button>
                <button class="btn btn-default filter-button" data-filter="shower-doors">Shower Doors</button>
            </div>
            <div class="row">
                <div class="gallery_product col-md-4 filter center windows">
                    <img src="../wp-content/themes/blankslate/img/services/window_replacement.png" alt="Our services Window Replacement - 01">
                    <h3>Window Replacement</h3>
                </div>

                <div class="gallery_product col-md-4 filter windows">
                <img src="../wp-content/themes/blankslate/img/services/window_repair.png" alt="Our services Window Repair - 02">
                <h3>Window Repair</h3>
                </div>

                <div class="gallery_product col-md-4 filter windows">
                <img src="../wp-content/themes/blankslate/img/services/window_installation.png" alt="Our services Window Installation - 03">
                <h3>Window Installation</h3>
                </div>

                <div class="gallery_product col-md-4 filter windows">
                <img src="../wp-content/themes/blankslate/img/services/door_glass_replacement.png" alt="Our services Window Capping - 04">
                <h3>Window Capping</h3>
                </div>

                <div class="gallery_product col-md-4 filter windows">
                <img src="../wp-content/themes/blankslate/img/services/restoration.png" alt="Our services Wooden Windows Restoration - 05">
                <h3>Wooden Windows Restoration</h3>
                </div>

                <div class="gallery_product col-md-4 filter doors">
                <img src="../wp-content/themes/blankslate/img/services/door_glass_replacement.png" alt="Our services Door Glass Replacement - 06">
                <h3>Door Glass Replacement</h3>
                </div>

                <div class="gallery_product col-md-4 filter glass">
                <img src="../wp-content/themes/blankslate/img/services/window_repair.png" alt="Our services Table Top Glass Replacement - 07">
                <h3>Table Top Glass Replacement</h3>
                </div>

                <div class="gallery_product col-md-4 filter doors">
                <img src="../wp-content/themes/blankslate/img/services/window_replacement.png" alt="Our services Storefront Replacement  - 08">
                <h3>Storefront Replacement </h3>
                </div>

                <div class="gallery_product col-md-4 filter doors">
                <img src="../wp-content/themes/blankslate/img/services/window_replacement.png" alt="Our services Skylight Installation  - 09">
                <h3>Skylight Installation</h3>
                </div>

                <div class="gallery_product col-md-4 filter glass">
                <img src="../wp-content/themes/blankslate/img/services/window_installation.png" alt="Our services Shower Glass Replacement  - 10">
                <h3>Shower Glass Replacement</h3>
                </div>

                <div class="gallery_product col-md-4 filter glass">
                <img src="../wp-content/themes/blankslate/img/services/window_replacement.png" alt="Our services Glass Railings Installation  - 11">
                <h3>Glass Railings Installation</h3>
                </div>

                <div class="gallery_product col-md-4 filter glass">
                <img src="../wp-content/themes/blankslate/img/services/door_glass_replacement.png" alt="Our services Skylight Glass Replacement - 12">
                <h3>Skylight Glass Replacement</h3>
                </div>

                <div class="gallery_product col-md-4 filter doors">
                 <img src="../wp-content/themes/blankslate/img/services/window_replacement.png" alt="Our services Door Screens Installation - 13">
                <h3>Door Screens Installation</h3>
                </div>

                <div class="gallery_product col-md-4 filter doors">
                 <img src="../wp-content/themes/blankslate/img/services/window_repair.png" alt="Our services Door Mesh Replacement - 14">
                <h3>Door Mesh Replacement</h3>
                </div>

                <div class="gallery_product col-md-4 filter doors">
                 <img src="../wp-content/themes/blankslate/img/services/window_installation.png" alt="Our services Door Installation - 15">
                <h3>Door Installation</h3>
                </div>

                <div class="gallery_product col-md-4 filter doors">
                 <img src="../wp-content/themes/blankslate/img/services/window_replacement.png" alt="Our services Door Capping - 16">
                <h3>Door Capping</h3>
                </div>

                <div class="gallery_product col-md-4 filter shower-doors">
                 <img src="../wp-content/themes/blankslate/img/services/window_repair.png" alt="Our services Shower Doors Repair - 17">
                <h3>Shower Doors Repair</h3>
                </div>

                <div class="gallery_product col-md-4 filter shower-doors">
                 <img src="../wp-content/themes/blankslate/img/services/window_installation.png" alt="Our services Shower Doors Installation - 17">
                <h3>Shower Doors Installation</h3>
                </div>

                <div class="gallery_product col-md-4 filter mirrors">
                 <img src="../wp-content/themes/blankslate/img/services/window_replacement.png" alt="Our services Mirror Installation - 18">
                <h3>Mirror Installation</h3>
                </div>
            </div>
        </div>
</section>

<?php get_template_part('section-counters'); ?>
<?php get_template_part('section-quality-services'); ?>

<?php get_footer(); ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
        $(document).ready(function(){

$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
        //$('.filter').removeClass('hidden');
        $('.filter').show('1000');
    }
    else
    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
        
    }
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
    </script>