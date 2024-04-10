<?php /* Template Name: Service Template */ ?>


<?php get_header(); ?>

<section id="portfolio">
        <div class="container">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                <h1 class="gallery-title">ALl list of services we provided</h1>
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
                </div>

                <div class="gallery_product col-md-4 filter glass">
                    <img src="https://via.placeholder.com/365">
                </div>

                <div class="gallery_product col-md-4 filter windows">
                    <img src="https://via.placeholder.com/365">
                </div>

                <div class="gallery_product col-md-4 filter doors">
                    <img src="https://via.placeholder.com/365">
                </div>

                <div class="gallery_product col-md-4 filter mirrors">
                    <img src="https://via.placeholder.com/365">
                </div>

                <div class="gallery_product col-md-4 filter doors">
                    <img src="https://via.placeholder.com/365">
                </div>

                <div class="gallery_product col-md-4 filter mirrors">
                    <img src="https://via.placeholder.com/365">
                </div>

                <div class="gallery_product col-md-4 filter doors">
                    <img src="https://via.placeholder.com/365">
                </div>

                <div class="gallery_product col-md-4 filter doors">
                    <img src="https://via.placeholder.com/365">
                </div>

                <div class="gallery_product col-md-4 filter windows">
                    <img src="https://via.placeholder.com/365">
                </div>

                <div class="gallery_product col-md-4 filter mirrors">
                    <img src="https://via.placeholder.com/365">
                </div>

                <div class="gallery_product col-md-4 filter glass">
                    <img src="https://via.placeholder.com/365">
                </div>
                <div class="gallery_product col-md-4 filter shower-doors">
                    <img src="https://via.placeholder.com/365">
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