<?php /* Template Name: Home page */ ?>

<?php get_header(); ?>


<section class="areas-section">
    <div class="container">
        <div class="areas-block">
            <div class="areas-block__left">
                <h2 class="areas-block__title">AREAS WE SERVE</h2>
                <p class="areas-block__desc">Choose your state</p>
                <div class="row areas-list">
                    <div class="col-auto areas-list__city">
                        <button class="btn btn-default filter-button-city " data-filter-city="connecticut">CONNECTICUT</button>
                        <button class="btn btn-default filter-button-city" data-filter-city="new-jersey">NEW JERSEY</button>
                        <button class="btn btn-default filter-button-city active" data-filter-city="new-york">NEW YORK </button>
                    </div>
                    <div class="col-6 areas-list__location">
                        <button class="btn new-york">New York City</button>
                        <button class="btn new-york">New Rochelle</button>
                        <button class="btn new-york">Hempstead </button>
                        <button class="btn new-york">White Plains </button>
                        <button class="btn new-york">Yonkers </button>
                        <button class="btn new-jersey">Jersey City </button>
                        <button class="btn new-jersey">Newark </button>
                        <button class="btn new-jersey">Paterson </button>
                        <button class="btn new-jersey">Elizabeth </button>
                        <button class="btn new-jersey">Edison </button>
                        <button class="btn new-jersey">Clifton </button>
                        <button class="btn new-jersey">Union City </button>
                        <button class="btn connecticut">Stamford </button>
                        <button class="btn connecticut">Norwalk </button>
                        <button class="btn connecticut">Bridgeport </button>
                    </div>
                </div>
            </div>
            <div class="areas-block__right">
                <div class="ratio ratio-16x9">
                    <iframe id="map-iframe" title="Areas we services" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96714.68291250926!2d-74.05953969406828!3d40.75468158321536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20Nowy%20Jork%2C%20Stany%20Zjednoczone!5e0!3m2!1spl!2spl!4v1672242259543!5m2!1spl!2spl" allowfullscreen="allowfullscreen"></iframe>
                </div>
        </div>
        </div>
    </div>
</section>

<div id="googlemaps" style="width: 100%; height: 400px;"></div>



<button typeof="button" data-lat="37.9758438" data-long="23.7454209">Na Fianna</button>
<button typeof="button" data-lat="48.8588589" data-long="2.3470599">St. Pauls</button>
<button typeof="button" data-lat="37.4038194" data-long="-122.081267">Kevins</button>
<br>
<div id="info"></div>
<br>
<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?key=AIzaSyCxitB5jQcw7weQdg9MqBRfxr6mj81wT7I&amp;center=-33.8569,151.2152&amp;zoom=18&amp;maptype=roadmap"></iframe>
    


<?php the_content(); ?>

<?php get_footer();?>