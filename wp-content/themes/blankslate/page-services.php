<?php /* Template Name: Service Template */ ?>


<?php get_header(); ?>

<section class="services-hero-section">
    <div class="container">
        <div class="main-title-block">
            <h1 class="services-hero-section__title">Our services</h1>
            <p  class="services-hero-section__desc">Professional team of repair technicians with 12 years experience.</p>
        </div>
    </div> 
</section>



<section>
    <div class="container">

        <div class="block-title">
            <h2>our the <span>best solution</span> to your vision</h2>
            <p>Our 4 step project system makes everything seamless from connecting with our representative to getting job done by our Glass Technician.</p>
        </div>




        <div class="solution-item">
        </div>

    </div>
</section>


<section class="areas-section">
     <div class="container">

     <div class="areas-block">

      <div class="areas-block__left">
        <h2>AREAS WE SERVICES</h2>
        <p>Choose your state</p>
       
         <div class="row areas-list">
            <div class="col areas-list__city">
                <button class="btn btn-default filter-button-city poppins-semibold " data-filter-city="connecticut">CONNECTICUT</button>
                <button class="btn btn-default filter-button-city poppins-semibold" data-filter-city="new-jersey">NEW JERSEY</button>
                <button class="btn btn-default filter-button-city poppins-semibold active" data-filter-city="new-york">NEW YORK </button>
            </div>
            <div class="col areas-list__location">
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