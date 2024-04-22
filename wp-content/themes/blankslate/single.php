<?php get_header(); ?>

<section class="services-hero-section">
    <div class="container">
        <div class="col-sm-6 main-title-block">
            <h1 class="services-hero-section__title"><?php the_title(); ?></h1>
            <div class="services-hero-section__desc"><?php the_content(); ?></div>
        </div>
    </div> 
</section>


<section id="counters" class="counters container-fluid">
<div class="container-xl">
<div class="row row-cols-1 row-cols-md-4 text-center counters-service__item">
<h3 class="counters__item"><span class="counters__value">11 203</span> <span class="counters__text">Happy clients</span></h3>
<h3 class="counters__item"><span class="counters__value">4.67</span> <span class="counters__text">Average rating</span></h3>
<h3 class="counters__item"><span class="counters__value">14 420</span> <span class="counters__text">Jobs complete</span></h3>
<h3 class="counters__item"><span class="counters__value">28</span> <span class="counters__text">Qualified stafs</span></h3>
</div>
</div>
</section>


<section id="quality-services" class="quality-services container-fluid quality-services-serv-page">
<div class="container-xl text-center">
<h2>we <span class="text-primary-emphasis">provide</span> best quality services</h2>
<p class="text-body-secondary">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>

<div id="swiper-best-quality" class="swiper-best-quality mobile-slider">
<div class="quality-services__wrapper row row-cols-1 swiper-wrapper quality-services-serv-page">
    <article class="col-4 swiper-slide">
        <div class="quality-services__item">
            <span class="quality-services__icon"></span>
            <h4>Sameday Service</h4>
            <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
        </div>
   </article>
    <article class="col-4 swiper-slide">
        <div class="quality-services__item">
            <span class="quality-services__icon"></span>
            <h4>Sameday Service</h4>
            <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
        </div>
    </article>
    <article class="col-4 swiper-slide">
        <div class="quality-services__item">
            <span class="quality-services__icon"></span>
            <h4>Sameday Service</h4>
            <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
        </div>
    </article>
    <article class="col-4 swiper-slide">
        <div class="quality-services__item">
            <span class="quality-services__icon"></span>
            <h4>Sameday Service</h4>
            <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
        </div>
    </article>
    <article class="col-4 swiper-slide">
        <div class="quality-services__item">
            <span class="quality-services__icon"></span>
            <h4>Sameday Service</h4>
            <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
        </div>
    </article>
    <article class="col-4 swiper-slide">
        <div class="quality-services__item">
            <span class="quality-services__icon"></span>
            <h4>Sameday Service</h4>
            <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
        </div>
    </article>
</div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
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


<section class="repair-form-section">
    <div class="container">

      <div class="repair-form">
        <div class="repair-form__left">
            <h2>Essential Window Repair Tips for New York City Residents</h2>
             <div class="repair-form__left-text">
                <p>The Importance of Regular Maintenance Regular maintenance is essential for preserving the integrity and functionality of windows in NYC. By addressing minor issues promptly, homeowners can prevent more significant problems and prolong the lifespan of their windows. Tasks such as cleaning, lubricating hinges and tracks, and inspecting for signs of damage should be part of a routine maintenance regimen.</p>

                <p>Common Window Problems and Solutions In NYC, windows may encounter various issues, including air leaks, condensation, drafts, and broken seals. This section will explore common window problems faced by city dwellers and provide practical solutions for addressing them. From installing weatherstripping to repairing cracked glass or malfunctioning hardware, proactive measures can help mitigate these issues and enhance comfort and energy efficiency.</p>

                <p>Professional Repair and Restoration Services While DIY maintenance can address many window issues, some repairs may require professional expertise. NYC residents can benefit from hiring experienced window repair and restoration professionals who specialize in addressing the unique challenges of urban living. From historic brownstones to modern high-rises, these experts have the skills and resources to restore windows to their former glory.</p>
             </div>
            <img src="../wp-content/themes/blankslate/img/services/repair-tips-img.png" alt="Essential Window Repair Tips - 01">
        </div>

        <div class="repair-form__right">

    

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
      </div>

 
</section>



<section id="clients" class="clients">
    <div class="container-xl text-center">
    <h2>our business <span class="text-primary-emphasis">clients</span></h2>
        <p class="text-body-secondary">Within a decade we were able to complete different jobs and made happy more than 12000 clients and counting</p>
    </div>

    <div class="clients-block container-xl position-relative">
        <div class="swiper-button-prev"></div>
        <div id="brands-slider" class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><div class="swiper-slide__card"><img src="../wp-content/uploads/2024/04/crystal.png" alt="" width="128" height="43" /></div></div>
                <div class="swiper-slide"><div class="swiper-slide__card"><img src="../wp-content/uploads/2024/04/logo-2.png" alt="" width="160" height="60" /></div></div>
                <div class="swiper-slide"><div class="swiper-slide__card"><img src="../wp-content/uploads/2024/04/logo-1.png" alt="" width="160" height="60" /></div></div>
                <div class="swiper-slide"><div class="swiper-slide__card"><img src="../wp-content/uploads/2024/04/logo.png" alt="" width="160" height="60" /></div></div>
                <div class="swiper-slide"><div class="swiper-slide__card"><img src="../wp-content/uploads/2024/04/image-62.png" alt="" width="128" height="37" /></div></div>
                <div class="swiper-slide"><div class="swiper-slide__card"><img src="../wp-content/uploads/2024/04/logo-5.png" alt="" width="160" height="60" /></div></div>
                <div class="swiper-slide"><div class="swiper-slide__card"><img src="../wp-content/uploads/2024/04/logo-3.png" alt="" width="160" height="60" /></div></div>
                <div class="swiper-slide"><div class="swiper-slide__card"><img src="../wp-content/uploads/2024/04/logo-4.png" alt="" width="160" height="60" /></div></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper-button-next"></div>
    </div>
</section>  

<section class="contact-banner-section">
    <div class="container">
        <div class="contact-banner">
             <h2 class="contact-banner__title">Our professionals offer you sincere advice as to whether the time has come to go for window repair and installation services or not</h2>
             <p class="contact-banner__desc">All you are required to do is just give us a call as and when you stumble upon the problem. Our representative immediately rushes to your home after getting the call and explains the entire process.</p>
             <button data-bs-toggle="modal" data-bs-target="#request-call" class=" btn btn-light contact-banner__btn" type="button">request a call</button>
    </div>

    <div class="modal fade" id="request-call" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal__content">
        <form id="request-call-form" onsubmit="submitCform(); return false;" class="form-wrap form-wrap__rows"> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41L17.59 5Z" fill="currentColor"/>
                </svg>

                </button>
                <h3 class="form-wrap__title poppins-bold">ENTER YOUR PHONE NUMBER AND WE WILL CONTACT YOU</h3>
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
        
           
            <label id="website" for="website">website:</label>
            <input type="text" id="website" name="website" autocomplete="off" placeholder="www.yoursite.com">
           
            
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

<section class="company-history container-fluid company-history-serv-page">
    <div class="company-history__wrapper container-xl">
        <div class="company-history-block row">
            <div class="company-history-block__left col-md-5 flex-column justify-content-center">
                <span class="text-primary-emphasis poppins-bold">About us</span>
                <h2>Company history</h2>
                <p class="text-body-secondary">Window Repair and Installation services from us will address frame repair problems for many types of windows that include Double Hung Window, Picture Window, Bay Windows, Casement Window, Bow Windows, and Basement Window.</p>
                
                <p class="text-body-secondary">
                    If you are fed up with the noise and the dirt of the city that makes way into your clean home, then we can proffer you a simple, sensible, and affordable solution to get rid of the noise.</p>
                <a href="https://test.windowrepair.nyc/about-us/" class="btn btn-primary mt-4">Read more</a>
            </div>
            <div class="company-history-block__right col-md-6 offset-md-1">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <img src="../wp-content/themes/blankslate/img/company-history-img-01.png" alt="Company history - 01"   />    
                    </div>
                    <div class="col-md-6">
                        <img src="../wp-content/themes/blankslate/img/company-history-img-02.png" alt="Company history - 02"  />    
                    </div>
                    <div class="col-md-6">
                        <img src="../wp-content/themes/blankslate/img/company-history-img-03.png" alt="Company history - 03"  />    
                    </div>
                    <div class="col-md-6">
                        <img src="../wp-content/themes/blankslate/img/company-history-img-04.png" alt="Company history - 04"  />    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section  class="clients-google-reviews container-fluid">
    <div class="container-xl text-center">
        <h2>what <span class="text-primary-emphasis">other’s says</span></h2>
        <p class="text-body-secondary">Our professional glaziers are always going above and beyond to satisfy every customer, as customer satisfaction is our top priority</p>
    </div>


    <div class="swiper-google-reviews">
            <div class="swiper-wrapper">
        
                <div class="swiper-slide">
                   <div class="google-reviews-item">
                        <div class="google-reviews-item__top">
                            <div class="google-reviews-item__title">
                                <h5 class="poppins-bold">Kurt Bates</h4>
                            </div>
                        </div>
                        <p class="google-reviews-item__desc">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        <span class="google-reviews-item__date poppins-medium">13.04.2021</span>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="google-reviews-item">
                        <div class="google-reviews-item__top">
                            <div class="google-reviews-item__title">
                                <h5 class="poppins-bold">Marc Anthony</h4>
                            </div>
                        </div>
                        <p class="google-reviews-item__desc">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        <span class="google-reviews-item__date poppins-medium">13.04.2021</span>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="google-reviews-item">
                        <div class="google-reviews-item__top">
                            <div class="google-reviews-item__title">
                                <h5 class="poppins-bold">Gregory Abbott</h4>
                            </div>
                        </div>
                        <p class="google-reviews-item__desc">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        <span class="google-reviews-item__date poppins-medium">13.04.2021</span>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="google-reviews-item">
                        <div class="google-reviews-item__top">
                            <div class="google-reviews-item__title">
                                <h5 class="poppins-bold">Kurt Bates</h4>
                            </div>
                        </div>
                        <p class="google-reviews-item__desc">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        <span class="google-reviews-item__date poppins-medium">13.04.2021</span>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="google-reviews-item">
                        <div class="google-reviews-item__top">
                            <div class="google-reviews-item__title">
                                <h5 class="poppins-bold">Gregory Abbott</h4>
                            </div>
                        </div>
                        <p class="google-reviews-item__desc">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        <span class="google-reviews-item__date poppins-medium">13.04.2021</span>
                   </div>
                </div>
           </div>
           <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
   </div>
</section>


<section class="our-work-section">
   <div class="container-xl text-center">
        <strong class="text-primary-emphasis">Our work</strong>
        <h2>latest projects we made</h2>
    </div>

<div class="container">
 <div class="tabs-show-photos-block-21">
    <div class="photos-tabs-22">
        <a href="#tab_04" data-tab="tab_04" class="p-nav-tab active"> All</a>
        <a href="#tab_05" data-tab="tab_05" class="p-nav-tab "> Windows </a>
        <a href="#tab_06" data-tab="tab_06" class="p-nav-tab"> Glass </a>
        <a href="#tab_06" data-tab="tab_07" class="p-nav-tab"> Doors </a>
        <a href="#tab_07" data-tab="tab_08" class="p-nav-tab"> Mirrors </a>
        <a href="#tab_08" data-tab="tab_09" class="p-nav-tab"> Shower Doors </a>
    </div>

        <div id="tab_04" class="b-tab active">
            <div class="block-show-photos">
            <div class="swiper-show-photos swiper-show-photos-4">
                    <div class="swiper-wrapper"> 
                        <div class="swiper-slide photo-slide ">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-6.png" alt="Latest projects we made - 06"/>   
                    </div>  
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-5.png" alt="Latest projects we made - 05"/>      
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-4.png" alt="Latest projects we made - 04"/>  
                    </div>
                    <div class="swiper-slide photo-slide ">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-1.png" alt="Latest projects we made - 01 "/>   
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-3.png" alt="Latest projects we made - 03"/>   
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-2.png" alt="Latest projects we made - 02"/>      
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
            </div>
            </div>
        </div>
        <div id="tab_05" class="b-tab">
            <div class="block-show-photos">
            <div class="swiper-show-photos swiper-show-photos-5">
            <div class="swiper-wrapper">
                    <div class="swiper-slide photo-slide ">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-1.png" alt="Latest projects we made - 01 "/>   
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-2.png" alt="Latest projects we made - 02"/>      
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-3.png" alt="Latest projects we made - 03"/>   
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-4.png" alt="Latest projects we made - 04"/>  
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-5.png" alt="Latest projects we made - 05"/>      
                    </div>
                    <div class="swiper-slide photo-slide ">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-6.png" alt="Latest projects we made - 06"/>   
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
            </div>
            </div>
        </div>
        <div id="tab_06" class="b-tab">
            <div class="block-show-photos">
            <div class="swiper-show-photos swiper-show-photos-6">
            <div class="swiper-wrapper">
                    <div class="swiper-slide photo-slide ">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-1.png" alt="Latest projects we made - 01 "/>   
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-2.png" alt="Latest projects we made - 02"/>      
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-3.png" alt="Latest projects we made - 03"/>   
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-4.png" alt="Latest projects we made - 04"/>  
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-5.png" alt="Latest projects we made - 05"/>      
                    </div>
                    <div class="swiper-slide photo-slide ">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-6.png" alt="Latest projects we made - 06"/>   
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
            </div>
            </div>
        </div>
        <div id="tab_07" class="b-tab">
            <div class="block-show-photos">
            <div class="swiper-show-photos swiper-show-photos-7">
            <div class="swiper-wrapper">
                    <div class="swiper-slide photo-slide ">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-1.png" alt="Latest projects we made - 01 "/>   
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-2.png" alt="Latest projects we made - 02"/>      
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-3.png" alt="Latest projects we made - 03"/>   
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-4.png" alt="Latest projects we made - 04"/>  
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-5.png" alt="Latest projects we made - 05"/>      
                    </div>
                    <div class="swiper-slide photo-slide ">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-6.png" alt="Latest projects we made - 06"/>   
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
            </div>
            </div>
        </div>
        <div id="tab_08" class="b-tab">
        <div class="block-show-photos">
            <div class="swiper-show-photos swiper-show-photos-8">
            <div class="swiper-wrapper">
                    <div class="swiper-slide photo-slide ">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-1.png" alt="Latest projects we made - 01 "/>   
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-2.png" alt="Latest projects we made - 02"/>      
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-3.png" alt="Latest projects we made - 03"/>   
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-4.png" alt="Latest projects we made - 04"/>  
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-5.png" alt="Latest projects we made - 05"/>      
                    </div>
                    <div class="swiper-slide photo-slide ">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-6.png" alt="Latest projects we made - 06"/>   
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
            </div>
            </div>
        </div>
        <div id="tab_09" class="b-tab">
        <div class="block-show-photos">
            <div class="swiper-show-photos swiper-show-photos-9">
            <div class="swiper-wrapper">
                    <div class="swiper-slide photo-slide ">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-1.png" alt="Latest projects we made - 01 "/>   
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-2.png" alt="Latest projects we made - 02"/>      
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-3.png" alt="Latest projects we made - 03"/>   
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-4.png" alt="Latest projects we made - 04"/>  
                    </div>
                    <div class="swiper-slide photo-slide">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-5.png" alt="Latest projects we made - 05"/>      
                    </div>
                    <div class="swiper-slide photo-slide ">
                        <img class="swiper-show-photos__img" src="../wp-content/themes/blankslate/img/our-work-6.png" alt="Latest projects we made - 06"/>   
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
            </div>
        </div>
  </div>
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


<?php get_footer(); ?>


    
