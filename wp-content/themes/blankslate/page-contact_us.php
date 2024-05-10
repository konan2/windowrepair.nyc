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
          

                    <!-- Areas we serve section -->
                    <?php
                    echo do_shortcode('[show_section post_id="294"]');
                    ?>


                </div>    
            </div>
            <div class="contact-areas__form order-0 order-xl-1">
                <div class="form-wrap contact-form-wrapper">	
                    <form id="contactForm" onsubmit="submitCform(); return false;" class="form-wrap__rows repair-form"> 
                        <h3 class="form-wrap__title poppins-bold">FILL OUT THE FORM</h3>
                        <div class="row">
                                <div class="form-group">
                                    <label for="name">Full name*</label>
                                    <input type="text" id="name" name="name" placeholder="Your Name" class="form-control" required autocomplete="name">
                                </div>
                        </div>
                        <div class="row">
                                <div class="form-group">
                                    <label for="Phone">Phone number*</label>
                                    <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="Phone" name="Phone" min="10" max="99" class="form-control" placeholder="+1(___)-___-__-__" autocomplete="phone" >
                                </div>
                        </div>
                        <div class="row">
                                <div class="form-group">
                                    <label for="email">Email*</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your e-mail" required autocomplete="email">
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
                            <input type="checkbox" class="custom-control-input"  name="agree" value="agree" id="agree-for-processing" checked="">
                            <label class="custom-control-label" for="agree-for-processing">I agree to the processing of my personal data</label>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <input type="submit" value="Send request" class="btn btn-secondary w-100">
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