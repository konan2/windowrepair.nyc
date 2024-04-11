<?php /* Template Name: Service Template */ ?>


<?php get_header(); ?>

<section class="services-hero-section">
    <div class="container">
        <div class="col-sm-6 main-title-block">
            <h1 class="services-hero-section__title">window repair</h1>
            <p  class="services-hero-section__desc">Professional team of repair technicians with 12 years experience. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
    </div> 
</section>

<section class="advantages-section">
    <div class="container-bg">
      <div class="advantages-block">
          <div class="advantages-block__left">
            <img  src="../wp-content/themes/blankslate/img/services/advantages-block-img.png" alt="Advantages window repair services - 01">
        </div>
        <div class="advantages-block__right">
            <h2>what window repair services do we have?</h2>
            <p>Extensive experience, proven working methods and cooperation with manufacturv</p>
            <ul>
                <li>Window Replacement</li>
                <li>Window Repair</li>
                <li>Window Installation</li>
                <li>Window Capping</li>
                <li>Wooden Windows Restoration</li>
            </ul>
        </div>
      </div>
    </div>
</section>

<section>
    <div class="container">

      <div class="repair-form">
        <div class="repair-form__left">
            <h2>Essential Window Repair Tips for New York City Residents</h2>
            <p>The Importance of Regular Maintenance Regular maintenance is essential for preserving the integrity and functionality of windows in NYC. By addressing minor issues promptly, homeowners can prevent more significant problems and prolong the lifespan of their windows. Tasks such as cleaning, lubricating hinges and tracks, and inspecting for signs of damage should be part of a routine maintenance regimen.</p>

            <p>Common Window Problems and Solutions In NYC, windows may encounter various issues, including air leaks, condensation, drafts, and broken seals. This section will explore common window problems faced by city dwellers and provide practical solutions for addressing them. From installing weatherstripping to repairing cracked glass or malfunctioning hardware, proactive measures can help mitigate these issues and enhance comfort and energy efficiency.</p>

            <p>Professional Repair and Restoration Services While DIY maintenance can address many window issues, some repairs may require professional expertise. NYC residents can benefit from hiring experienced window repair and restoration professionals who specialize in addressing the unique challenges of urban living. From historic brownstones to modern high-rises, these experts have the skills and resources to restore windows to their former glory.</p>
            <img src="../wp-content/themes/blankslate/img/services/repair-tips-img.png" alt="Essential Window Repair Tips - 01">
        </div>
        <div class="repair-form__right"></div>
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



<?php get_template_part('section-counters'); ?>
<?php get_template_part('section-quality-services'); ?>

<?php get_footer(); ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
   
    $(document).ready(function(){
     var defaultCity = 'new-york';
     showDistricts(defaultCity);
   
     function showDistricts(city) {
     $('.new-york, .new-jersey, .connecticut').hide();
     $('.' + city).show();
     $(".filter-button-city").removeClass("active");
     $(".filter-button-city[data-filter-city='" + city + "']").addClass("active");
     }

    $(".filter-button-city").click(function(){
    var city = $(this).attr('data-filter-city');
    showDistricts(city);
    });
  });
</script>