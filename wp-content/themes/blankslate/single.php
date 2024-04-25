<?php /* Template for services item */ ?>

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
            <h2 class="advantages-block__right-title">what window repair services do we have?</h2>
            <p class="advantages-block__right-desc">Extensive experience, proven working methods and cooperation with manufacturv</p>
            <ul class="advantages-block__right-list poppins-semibold">
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

<?php
echo do_shortcode('[show_section post_id="291"]');
?>
<?php
echo do_shortcode('[show_section post_id="295"]');
?>
<?php
echo do_shortcode('[show_section post_id="290"]');
?>
<?php
echo do_shortcode('[show_section post_id="292"]');
?>
<?php
echo do_shortcode('[show_section post_id="293"]');
?>
<?php
echo do_shortcode('[show_section post_id="294"]');
?>




<?php get_footer(); ?>


    
