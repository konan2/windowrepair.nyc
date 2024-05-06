
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



<?php
// GEt term banner
$terms = wp_get_post_terms(get_the_ID(), 'service');
$term_id = $terms[0]->term_id;
$term_title = get_term_meta($term_id, 'banner_title', true); 
$term_text = get_term_meta($term_id, 'banner_text', true); 
$term_image = get_field('banner_image', 'service' . '_' . $term_id);

?>



<section class="advantages-section">
    <div class="container-bg">
      <div class="advantages-block">
          <div class="advantages-block__left">
            <img  src="<?php echo $term_image ?>" alt="<?php echo $term_title ?>">
        </div>
        <div class="advantages-block__right">
            <h2 class="advantages-block__right-title"><?php echo $term_title ?></h2>
            <div class="advantages-block__right-desc"><?php echo $term_text ?></div>
        </div>
      </div>
    </div>
</section>


<section class="container">
    <div class="row row-cols-1 row-cols-lg-2">

        <div class="post-content col-lg-6 order-1 order-lg-0 mb-4">   
            <div class="collapse" id="collapseExample">
                <?php the_content(); ?>
            </div>
            <a class="read-more-button" href="#" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Read more
            </a>
        </div>
        

        <div class="col-lg-6 d-flex justify-content-center align-items-start order-0 order-lg-1 mb-4">
            <div class="form-wrap post-form">	
                <form id="contactForm" onsubmit="submitCform(); return false;" class="form-wrap__rows"> 
                    <h3 class="form-wrap__title poppins-bold">GET A TECHNIC NOW</h3>
                    <div class="row">
                            <div class="form-group">
                                <label for="name">Full name*</label>
                                <input type="text" id="name" name="name" placeholder="Your Name" class="form-control" required autocomplete="name">
                            </div>
                    </div>

                    <label for="website" class="d-none"></label>
                    <input type="text" id="website" name="website" autocomplete="off" placeholder="www.yoursite.com">
                    
                    <div class="row">
                            <div class="form-group">
                                <label for="Phone">Phone number*</label>
                                <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="Phone" name="Phone" min="10" max="99" class="form-control" placeholder="+1(___)-___-__-__" autocomplete="phone" >
                            </div>
                    </div>

                    <div class="row">
                            <div class="form-group">
                                <label for="repair">Choose a service*</label>
                                <div class="row">
                                    <div class="col-md-4 col-4 custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" name="repair" value="repair" id="repair" checked>
                                        <label class="custom-control-label" for="repair">Repair</label>
                                    </div>
                                    <div class="col-md-4 col-4 custom-control custom-checkbox custom-control-inline">
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


<!-- Our brand partners we work with -->
<?php
echo do_shortcode('[show_section post_id="584"]');
?>

<!-- We started Window Repair NYC 8 years ago -->
<?php
echo do_shortcode('[show_section post_id="583"]');
?>

<!-- Certification section -->
<?php echo do_shortcode('[show_section post_id="580"]'); ?>

<!-- Areas we serve section -->
<?php
echo do_shortcode('[show_section post_id="294"]');
?>




<?php get_footer(); ?>

