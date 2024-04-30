
<?php
// Получаем значение пользовательского поля
$custom_field_value = get_post_meta(get_the_ID(), 'short_description', true);
?>


<?php get_header(); ?>


<?php
get_template_part(
    'single-template-part-header', // Имя файла шаблона без расширения
    get_post_type(), // Передаем тип текущей записи
    array(
        'custom_title' => get_the_title(), // Передаем заголовок
        'custom_text' => esc_html($custom_field_value) // Передаем текст
    )
);
?>

<?php
echo do_shortcode('[show_section post_id="287"]');
?>

<?php
echo do_shortcode('[show_section post_id="288"]');
?>




<section class="advantages-section">
    <div class="container-bg">
      <div class="advantages-block">
          <div class="advantages-block__left">
            <img  src="../wp-content/themes/blankslate/img/services/advantages-block-img.png" alt="Advantages window repair services - 01">
        </div>
        <div class="advantages-block__right">
            <h2 class="advantages-block__right-title">what mirror services do we have?</h2>
            <p class="advantages-block__right-desc">Extensive experience, proven working methods and cooperation with manufacture. See all mirror services.</p>
            <ul class="advantages-block__right-list poppins-semibold">
                <li>Bathroom Mirrors</li>
                <li>Custom Mirrors Installation</li>
                <li>Mirror Replacement</li>
                <li>Mirrored Closet Doors</li>
                <li>Mirror Installation</li>
            </ul>
        </div>
      </div>
    </div>
</section>


<section class="container">
    <div class="row row-cols-1 row-cols-lg-2">

        <div class="col order-1 order-xl-0">
            <?php the_content(); ?>
        </div>

        <div class="col d-flex justify-content-center align-items-start order-0 order-xl-1 mb-4">
            <div class="form-wrap">	
                <form id="contactForm" onsubmit="submitCform(); return false;" class="form-wrap__rows"> 
                    <h3 class="form-wrap__title poppins-bold">GET A TECHNIC NOW</h3>
                    <div class="row">
                            <div class="form-group">
                                <label for="name">Full name*</label>
                                <input type="text" id="name" name="name" placeholder="Your Name" class="form-control" required>
                            </div>
                    </div>

                    <label id="website" for="website">website:</label>
                    <input type="text" id="website" name="website" autocomplete="off" placeholder="www.yoursite.com">
                    
                    <div class="row">
                            <div class="form-group">
                                <label for="Phone">Phone number*</label>
                                <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="Phone" name="Phone" min="10" max="99" class="form-control" placeholder="+1(___)-___-__-__" >
                            </div>
                    </div>

                    <div class="row">
                            <div class="form-group">
                                <label>Choose a service*</label>
                                <div class="row">
                                    <div class="col-md-4 custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" name="repair" value="repair" id="repair" checked>
                                        <label class="custom-control-label" for="repair">Repair</label>
                                    </div>
                                    <div class="col-md-4 custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" name="install" value="install" id="install">
                                        <label class="custom-control-label" for="install">Install</label>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="form-group">
                                <label for="problem">What's the problem*</label>
                                <select id="problem" name="problem" class="form-control" required>
                                    <option selected value="window_Replacement">Window replacement</option>
                                    <option value="window_Repair">Window Repair</option>
                                    <option value="window_Installation">Window Installation</option>
                                    <option value="window_Capping">Window Capping</option>
                                    <option value="wooden_Windows_Restoration">Wooden Windows Restoration</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                    </div>

                    <button type="button" id="show-comment-btn" class="show-comment-form">Would you like to leave a comment?</button>

                    <div id="comment-form" style="display: none;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">Leave a comment</label>
                                    <textarea  id="message" class="form-control" name="message" placeholder="How can we help?"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-agree">
                        <input type="checkbox" class="custom-control-input" name="agree" value="agree" id="agree" checked="">
                        <label class="custom-control-label" for="agree">I agree to the processing of my personal data</label>
                    </div>
                    
                    <div class="row">
                    <div class="col-md-12">
                        <input id="mybtn" type="submit" value="BOOK ONLINE" class="btn btn-primary">
                        <span id="status"> </span>
                        <input type="hidden" id="formid" name="formid" value="1001">
                    </div>
                    </div>

                </form>
            </div>	
        </div>
    </div>
</section>

<section id="brands-section" class="slider">
<div class="container-xl text-center container">
<h2>our <span class="text-primary-emphasis">brand partners</span> we work with</h2>
<p class="text-body-secondary">We are proud to work with some of the biggest and most trusted companies in New York</p>

</div>
<div class="container-xl position-relative">
<div class="swiper-button-prev"></div>
<div id="brands-slider" class="swiper">
<div class="swiper-wrapper">
<div class="swiper-slide text-center"><img class="alignnone size-full wp-image-327" src="https://test.windowrepair.nyc/wp-content/uploads/2024/04/marvin.png" alt="" width="128" height="37" /></div>
<div class="swiper-slide text-center"><img class="alignnone size-full wp-image-332" src="https://test.windowrepair.nyc/wp-content/uploads/2024/04/crystal-2.png" alt="" width="128" height="43" /></div>
<div class="swiper-slide text-center"><img class="alignnone size-full wp-image-333" src="https://test.windowrepair.nyc/wp-content/uploads/2024/04/reynaers.svg" alt="" width="128" height="48" /></div>
<div class="swiper-slide text-center"><img class="alignnone size-full wp-image-334" src="https://test.windowrepair.nyc/wp-content/uploads/2024/04/alumil.svg" alt="" width="128" height="39" /></div>
<div class="swiper-slide text-center"><img class="alignnone size-full wp-image-328" src="https://test.windowrepair.nyc/wp-content/uploads/2024/04/pella.png" alt="" width="250" height="auto" /></div>
<div class="swiper-slide text-center"><img class="alignnone size-full wp-image-329" src="https://test.windowrepair.nyc/wp-content/uploads/2024/04/aluprof.svg" alt="" width="128" height="30" /></div>
<div class="swiper-slide text-center"><img class="alignnone size-full wp-image-330" src="https://test.windowrepair.nyc/wp-content/uploads/2024/04/kawneer.svg" alt="" width="128" height="27" /></div>
<div class="swiper-slide text-center"><img class="alignnone size-full wp-image-331" src="https://test.windowrepair.nyc/wp-content/uploads/2024/04/andrersen.svg" alt="" width="140" height="20" /></div>
</div>
<div class="swiper-pagination"></div>
</div>
<div class="swiper-button-next"></div>
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


<?php
echo do_shortcode('[show_section post_id="294"]');
?>




<?php get_footer(); ?>

