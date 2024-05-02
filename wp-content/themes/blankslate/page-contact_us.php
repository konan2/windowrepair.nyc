<?php /* Template Name: Contact Us Template */ ?>

<?php
// Получаем значение пользовательского поля
$custom_field_value = get_post_meta(get_the_ID(), 'short_description', true);
?>


<?php get_header(); ?>


<section class="services-hero-section contact-us">
    <div class="container-xl container">
        <div class="col-sm-6 main-title-block">
            <h1 class="services-hero-section__title"><?php the_title() ?></h1>
            <div class="services-hero-section__desc"><?php echo $custom_field_value ?></div>
        </div>
    </div>  
</section>



<section class="contact-us__contacts m-0">
    <div class="container-xl container contact-item-container">
        <?php the_content() ?>
    </div>  
</section>


<section class="contact-areas">
    <div class="container-xl p-0">
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="order-1 order-xl-0">
                <div class="row row-cols-1">
                    












                <section class="areas-section">
<div class="container">
<div class="areas-block">
<div class="areas-block__left">
<h2 class="areas-block__title">AREAS WE SERVICES</h2>
<p class="areas-block__desc">Choose your state</p>
<div class="row areas-list">
<div class="col-auto areas-list__city"><button class="btn btn-default filter-button-city poppins-semibold" data-filter-city="connecticut">CONNECTICUT</button><button class="btn btn-default filter-button-city poppins-semibold" data-filter-city="new-jersey">NEW JERSEY</button><button class="btn btn-default filter-button-city poppins-semibold active" data-filter-city="new-york">NEW YORK </button></div>
<div class="col-6 areas-list__location"><button class="btn poppins-semibold new-york" style="">New York City</button><button class="btn poppins-semibold new-york" style="">New Rochelle</button><button class="btn poppins-semibold new-york" style="">Hempstead </button><button class="btn poppins-semibold new-york" style="">White Plains </button><button class="btn poppins-semibold new-york" style="">Yonkers </button><button class="btn poppins-semibold new-jersey" style="display: none;">Jersey City </button><button class="btn poppins-semibold new-jersey" style="display: none;">Newark </button><button class="btn poppins-semibold new-jersey" style="display: none;">Paterson </button><button class="btn poppins-semibold new-jersey" style="display: none;">Elizabeth </button><button class="btn poppins-semibold new-jersey" style="display: none;">Edison </button><button class="btn poppins-semibold new-jersey" style="display: none;">Clifton </button><button class="btn poppins-semibold new-jersey" style="display: none;">Union City </button><button class="btn poppins-semibold connecticut" style="display: none;">Stamford </button><button class="btn poppins-semibold connecticut" style="display: none;">Norwalk </button><button class="btn poppins-semibold connecticut" style="display: none;">Bridgeport </button></div>
</div>
</div>
<div class="areas-block__right">
<div class="ratio ratio-16x9"><iframe title="Areas we services" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96714.68291250926!2d-74.05953969406828!3d40.75468158321536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20Nowy%20Jork%2C%20Stany%20Zjednoczone!5e0!3m2!1spl!2spl!4v1672242259543!5m2!1spl!2spl" allowfullscreen="allowfullscreen"></iframe></div>
</div>
</div>
</div>
</section>













                </div>    
            </div>
            <div class="contact-areas__form order-0 order-xl-1">
                <div class="form-wrap contact-form-wrapper">	
                    <form id="contactForm" onsubmit="submitCform(); return false;" class="form-wrap__rows repair-form"> 
                        <h3 class="form-wrap__title poppins-bold">FILL OUT THE FORM</h3>
                        <div class="row">
                                <div class="form-group">
                                    <label for="name">Full name</label>
                                    <input type="text" id="name" name="name" placeholder="Your Name" class="form-control" required>
                                </div>
                        </div>
                        <div class="row">
                                <div class="form-group">
                                    <label for="Phone">Phone number</label>
                                    <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="Phone" name="Phone" min="10" max="99" class="form-control" placeholder="+1(___)-___-__-__" >
                                </div>
                        </div>
                        <div class="row">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your e-mail" required>
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Leave a comment</label>
                                        <textarea id="message" class="form-control" name="message" placeholder="How can we help?" required></textarea>
                                    </div>
                                </div>
                            </div>
                        
                        <div class="row-agree">
                            <input type="checkbox" class="custom-control-input" name="agree" value="agree" id="agree" checked="">
                            <label class="custom-control-label" for="agree">I agree to the processing of my personal data</label>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <input id="mybtn" type="submit" value="Send request" class="btn btn-secondary w-100">
                            <span id="status"> </span>
                            <input type="hidden" id="formid" name="formid" value="1001">
                            </div>
                        </div>

                    </form>
                </div>	                    
            </div>
        </div>
    </div>  
</section>        



<?php get_footer(); ?>