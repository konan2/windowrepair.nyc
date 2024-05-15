</main>

<div class="footer__menu-buttons-wrapper">
                    <button class="btn btn-secondary footer__menu-button" data-bs-toggle="modal" data-bs-target="#request-call">request a quote</button>
                    <a class="btn btn-secondary footer__menu-button d-lg-none d-flex align-items-center ms-3" href="tel:+16462552766">
                        <svg width="15" height="16" viewBox="0 0 15 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.0601 15.5C6.06175 15.5113 -0.00854777 9.36828 9.03508e-06 1.43985C9.03508e-06 0.922086 0.419742 0.5 0.937509 0.5H3.41191C3.87651 0.5 4.27119 0.841371 4.33941 1.30093C4.50292 2.40237 4.8236 3.47466 5.2917 4.48503L5.38804 4.69297C5.522 4.9821 5.4312 5.32563 5.17188 5.51082C4.40559 6.05805 4.11274 7.15958 4.70972 8.01908C5.45885 9.09766 6.40317 10.0418 7.4815 10.7906C8.34096 11.3874 9.44231 11.0946 9.98954 10.3284C10.1748 10.069 10.5186 9.97812 10.8079 10.1121L11.0149 10.208C12.0253 10.6761 13.0977 10.9968 14.1992 11.1603C14.6588 11.2285 15 11.6231 15 12.0877V14.5625C15 15.0802 14.5792 15.5 14.0615 15.5L14.0601 15.5Z" fill="currentColor"/>
                                </svg>
                    </a>
                </div>

<footer id="footer" class="footer" role="contentinfo">
   <div class="container-xl">
      <div class="row text-center text-lg-start">
         <div class="col-lg-4 footer__contacts-menu">
            <a class="footer-brand" href="<?php echo home_url(); ?>" aria-label="Go to homepage">
                <img src="<?php echo get_template_directory_uri() . '/img/logo.webp'; ?>" alt="<?php bloginfo( 'name' ); ?>" width="110" height="110">
            </a>
            <ul class="footer__menu">
               <li class="footer__menu-item">    
                     <address><strong>Address:</strong>&nbsp;&nbsp;<span class="footer-link">244 5th Avenue 2nd floor<br>New York NY 10001</span></address>
               </li>   
               <li class="footer__menu-item">
                  <strong>Phone:</strong><a class="footer-link" href="tel:+16462552766">&nbsp;&nbsp;+1 646 255 2766</a>
               </li> 
               <li class="footer__menu-item">
                  <strong>Email:</strong><a class="footer-link" href="mailto:support@WindowRepairNYC.com">&nbsp;&nbsp;support@WindowRepairNYC.com</a>
               </li>  
               <li class="footer__menu-item">
                  <strong>Follow Us:</strong>
                  <span class="d-inline-block">
                  <span class="d-flex my-1 ms-3">
                        <a href="https://www.facebook.com/WindowRepairNYC/" class="footer__social-icon" title="Follow us on Facebook" aria-label="Follow us on Facebook">
                            <i class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="16" viewBox="0 0 8 16" fill="none">
                                <path d="M7.01849 0.799805H6.2392C4.07324 0.799805 2.31113 2.56197 2.31113 4.72793V6.38571H0.979721C0.842623 6.38571 0.731445 6.49689 0.731445 6.63399V8.6202C0.731445 8.7573 0.842623 8.86847 0.979721 8.86847H2.31103V14.9515C2.31103 15.0886 2.4222 15.1998 2.5593 15.1998H4.54551C4.68261 15.1998 4.79378 15.0886 4.79378 14.9515V8.86847H6.76937C6.90646 8.86847 7.01764 8.7573 7.01764 8.6202V6.63399C7.01764 6.49689 6.90646 6.38571 6.76937 6.38571H4.79378V4.72793C4.79378 3.93096 5.44218 3.28256 6.2391 3.28256H7.01839C7.15548 3.28256 7.26666 3.17139 7.26666 3.03429V1.04808C7.26676 0.910983 7.15558 0.799805 7.01849 0.799805Z" fill="#2C5697"/>
                            </svg>
                            </i>
                        </a>


                        <?php /*?> 
                        Закоментовано на час поки немає посилань на діючі соц мережі

                        <a href="#" class="footer__social-icon" title="Follow us on Instagram" aria-label="Follow us on Instagram">
                            <i class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <g clip-path="url(#clip0_1518_430)">
                                <path d="M6.00105 7.92008C7.06144 7.92008 7.92105 7.06046 7.92105 6.00008C7.92105 4.93969 7.06144 4.08008 6.00105 4.08008C4.94067 4.08008 4.08105 4.93969 4.08105 6.00008C4.08105 7.06046 4.94067 7.92008 6.00105 7.92008Z" fill="#2C5697"/>
                                <path d="M8.64 0H3.36C2.46918 0.00100889 1.61514 0.355332 0.985236 0.985236C0.355332 1.61514 0.00100889 2.46918 0 3.36V8.64C0.00100889 9.53082 0.355332 10.3849 0.985236 11.0148C1.61514 11.6447 2.46918 11.999 3.36 12H8.64C9.53082 11.999 10.3849 11.6447 11.0148 11.0148C11.6447 10.3849 11.999 9.53082 12 8.64V3.36C11.999 2.46918 11.6447 1.61514 11.0148 0.985236C10.3849 0.355332 9.53082 0.00100889 8.64 0ZM6 8.88C5.43039 8.88 4.87357 8.71109 4.39996 8.39463C3.92634 8.07817 3.55721 7.62838 3.33923 7.10213C3.12125 6.57588 3.06421 5.99681 3.17534 5.43814C3.28646 4.87947 3.56076 4.36631 3.96353 3.96353C4.36631 3.56076 4.87947 3.28646 5.43814 3.17534C5.99681 3.06421 6.57588 3.12125 7.10213 3.33923C7.62838 3.55721 8.07817 3.92634 8.39463 4.39996C8.71109 4.87357 8.88 5.43039 8.88 6C8.87914 6.76356 8.57543 7.4956 8.03551 8.03551C7.4956 8.57543 6.76356 8.87914 6 8.88ZM9.12 3.6C8.9776 3.6 8.83839 3.55777 8.71999 3.47866C8.60159 3.39954 8.5093 3.28709 8.45481 3.15553C8.40031 3.02397 8.38605 2.8792 8.41383 2.73953C8.44162 2.59987 8.51019 2.47158 8.61088 2.37088C8.71158 2.27019 8.83987 2.20162 8.97954 2.17383C9.1192 2.14605 9.26397 2.16031 9.39553 2.21481C9.52709 2.2693 9.63954 2.36159 9.71866 2.47999C9.79777 2.59839 9.84 2.7376 9.84 2.88C9.84 3.07096 9.76414 3.25409 9.62912 3.38912C9.49409 3.52414 9.31096 3.6 9.12 3.6Z" fill="#2C5697"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1518_430">
                                <rect width="12" height="12" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </i>
                        </a>
                        <a href="#" class="footer__social-icon" title="Follow us on Yelp" aria-label="Follow us on Yelp">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17" fill="none">
                                <path d="M4.7963 10.1166L5.53485 9.94566C5.55925 9.94027 5.5834 9.9338 5.60723 9.92628C5.81111 9.87147 5.98577 9.73967 6.09441 9.55864C6.20304 9.37761 6.23719 9.16149 6.18964 8.95579L6.18622 8.94268C6.16193 8.8441 6.11941 8.75094 6.06085 8.668C5.97808 8.56319 5.87569 8.4755 5.75939 8.40985C5.62241 8.33172 5.47905 8.26538 5.33084 8.21153L4.52162 7.91634C4.06743 7.74765 3.61267 7.58296 3.15392 7.42226C2.85702 7.31683 2.60513 7.22394 2.38573 7.15669C2.3447 7.14359 2.29911 7.13105 2.26207 7.11851C1.99708 7.03702 1.81187 7.0034 1.65401 7.00283C1.54897 6.99896 1.44435 7.01802 1.34742 7.05868C1.24616 7.10221 1.15527 7.16669 1.08072 7.24787C1.04369 7.2901 1.00888 7.33424 0.976432 7.38008C0.913242 7.47713 0.861061 7.58092 0.820855 7.68953C0.670706 8.13366 0.595971 8.5998 0.599746 9.06862C0.603165 9.49261 0.614561 10.0363 0.847639 10.405C0.903487 10.4996 0.978711 10.5816 1.06875 10.6449C1.23458 10.7594 1.40213 10.7748 1.57708 10.7874C1.83751 10.8056 2.08997 10.7418 2.34185 10.6836L4.79459 10.116L4.7963 10.1166ZM13.0315 6.19475C12.83 5.77177 12.559 5.38555 12.2297 5.05215C12.187 5.00995 12.1413 4.97091 12.093 4.93532C12.0485 4.90179 12.0022 4.87059 11.9545 4.84187C11.9051 4.81504 11.8543 4.79088 11.8023 4.76949C11.7 4.72915 11.5903 4.71089 11.4803 4.71592C11.3753 4.72228 11.2729 4.75125 11.18 4.80083C11.0393 4.87093 10.8871 4.98319 10.6842 5.17125C10.6563 5.19975 10.6216 5.23109 10.5896 5.26015C10.4227 5.41744 10.2363 5.61176 10.0152 5.83744C9.67328 6.18278 9.33705 6.5304 9.00254 6.88144L8.40417 7.50261C8.29476 7.61658 8.19503 7.73854 8.10613 7.86904C8.03033 7.97902 7.97677 8.10268 7.94827 8.23376C7.93143 8.33396 7.93375 8.43645 7.95511 8.53579L7.95853 8.5489C8.00592 8.75435 8.1312 8.93338 8.30798 9.0483C8.48476 9.16321 8.69923 9.20502 8.90623 9.16493C8.93871 9.16037 8.96436 9.15467 8.98032 9.15125L12.1716 8.4127C12.4235 8.35457 12.6788 8.301 12.9045 8.16993C13.0561 8.0816 13.2002 7.99441 13.2988 7.81889C13.3518 7.72216 13.3838 7.61537 13.3928 7.50546C13.4419 7.07064 13.2145 6.57656 13.0315 6.19475ZM7.31913 7.53851C7.5505 7.24787 7.54936 6.81477 7.56987 6.46031C7.6394 5.27725 7.71235 4.09419 7.7699 2.90999C7.7927 2.46207 7.84057 2.01985 7.81321 1.56794C7.79156 1.19524 7.78871 0.767265 7.55335 0.461242C7.13734 -0.0778586 6.25176 -0.0334085 5.64769 0.0509328C5.46248 0.0765772 5.27727 0.11077 5.0932 0.15522C4.90913 0.19967 4.72734 0.247539 4.54897 0.305097C3.96941 0.494865 3.15392 0.843628 3.01601 1.51209C2.93851 1.88992 3.12315 2.27572 3.26619 2.62107C3.43943 3.03878 3.6765 3.4149 3.89305 3.80811C4.46349 4.84699 5.04533 5.87847 5.62547 6.91165C5.79871 7.21938 5.98734 7.61031 6.32242 7.76988C6.34465 7.77957 6.36687 7.78812 6.39023 7.79552C6.54011 7.85251 6.70367 7.86391 6.86038 7.82687L6.88887 7.8206C7.03305 7.78071 7.16356 7.70263 7.26613 7.59322C7.28494 7.57612 7.30261 7.55789 7.31913 7.53851ZM7.04331 10.7064C6.95306 10.5793 6.82488 10.4841 6.67715 10.4343C6.52943 10.3846 6.36974 10.3829 6.22098 10.4295C6.18565 10.4409 6.15203 10.4551 6.11841 10.4717C6.06767 10.4979 6.01925 10.5284 5.97366 10.5628C5.84088 10.6609 5.72861 10.7891 5.62717 10.9173C5.60096 10.9503 5.5776 10.9937 5.54682 11.0222L5.03394 11.7288C4.74273 12.1243 4.45551 12.5209 4.17115 12.9238C3.98537 13.1843 3.82523 13.4037 3.69815 13.598C3.67421 13.635 3.64914 13.6761 3.62635 13.7085C3.47419 13.9439 3.38814 14.1154 3.34426 14.2682C3.31102 14.3699 3.30052 14.4776 3.31348 14.5839C3.32773 14.6944 3.36477 14.8004 3.4229 14.8956C3.45367 14.9435 3.48673 14.9896 3.52206 15.0341C3.59897 15.1225 3.68556 15.202 3.78021 15.2711C4.13467 15.5179 4.52276 15.6951 4.93136 15.8319C5.27095 15.9444 5.62389 16.0117 5.98107 16.0319C6.04147 16.0348 6.10245 16.0336 6.16343 16.0279C6.21946 16.0231 6.27519 16.0153 6.3304 16.0046C6.38573 15.9915 6.44032 15.9755 6.49395 15.9567C6.59676 15.9202 6.69026 15.8616 6.76779 15.7848C6.84531 15.7081 6.90495 15.6152 6.94244 15.5128C7.00171 15.3646 7.04046 15.1765 7.06611 14.8984C7.06839 14.8585 7.07408 14.8107 7.07807 14.7674C7.09802 14.536 7.10771 14.2642 7.12253 13.9445C7.14703 13.4532 7.16697 12.9643 7.18236 12.4731L7.21485 11.6011C7.22225 11.3994 7.21599 11.1772 7.16014 10.9771C7.13565 10.8812 7.09602 10.7899 7.04274 10.7064H7.04331ZM12.8389 12.0701C12.7318 11.9528 12.5802 11.8354 12.3403 11.6906C12.3061 11.6712 12.2651 11.6456 12.228 11.6234C12.0286 11.5037 11.7881 11.3772 11.5077 11.2245C11.077 10.989 10.6442 10.7572 10.2095 10.5292L9.4402 10.1212C9.40031 10.1098 9.35985 10.0813 9.32224 10.0631C9.17439 9.98734 9.0173 9.93121 8.85494 9.89608C8.79893 9.8855 8.74211 9.87978 8.68512 9.87898C8.64834 9.87791 8.61155 9.88001 8.57513 9.88525C8.42122 9.90897 8.27874 9.9807 8.16801 10.0902C8.05728 10.1997 7.98397 10.3414 7.95853 10.495C7.94713 10.593 7.95055 10.6922 7.96936 10.7885C8.00697 10.9937 8.09872 11.196 8.19332 11.3732L8.6042 12.1431C8.83272 12.5773 9.06465 13.0093 9.30172 13.4396C9.45502 13.7199 9.5821 13.9604 9.70121 14.1593C9.724 14.1969 9.74964 14.2374 9.76959 14.2716C9.91434 14.5109 10.0312 14.6619 10.1491 14.7696C10.2261 14.8437 10.3178 14.9001 10.4187 14.9349C10.5241 14.9697 10.6364 14.9822 10.7469 14.9714C10.8033 14.9645 10.8592 14.9546 10.9145 14.9417C10.9692 14.9275 11.0227 14.9098 11.0757 14.8899C11.1327 14.8682 11.188 14.8426 11.241 14.813C11.5532 14.6378 11.841 14.4222 12.097 14.1718C12.4041 13.8698 12.6754 13.5399 12.8862 13.1632C12.9157 13.1096 12.9412 13.054 12.9626 12.9968C12.9825 12.9441 12.9996 12.8905 13.0139 12.8361C13.0264 12.7802 13.0361 12.7244 13.0424 12.6679C13.053 12.5571 13.0402 12.4453 13.0048 12.3397C12.97 12.2388 12.9136 12.1468 12.8395 12.0701H12.8389Z" fill="#2C5697"/>
                                </svg>
                            </i>
                        </a>
                        <?php */ ?>

                    </span>
                    </span>
                </li>    
            </ul>     
         </div>
         <div class="col-lg-8">
            <div class="row">
                <nav class="col-lg-4">
                    <h6 class="footer__title">USEFUL LINKS</h6>
                    <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer', // Идентификатор местоположения меню
                                'container' => 'ul', // Обертка для меню, в данном случае <ul>
                                'menu_class' => 'footer__menu', // Классы меню
                                'fallback_cb' => false, // Отключаем стандартный вывод меню при его отсутствии
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' // Обертка для элементов меню, теперь включает вложенные элементы

                            ));
                    ?>
                </nav>
                <div class="col-lg-4">
                    <h6 class="footer__title">OPENING HOURS</h6>
                    <ul class="footer__menu">
                    <li class="footer__menu-item">Mon - Sat <strong>&nbsp;&nbsp;8AM to 8PM</strong></li>
                    <li class="footer__menu-item">Sunday <strong>&nbsp;&nbsp;Closed</strong></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h6 class="footer__title">LOCATIONS</h6>
                    <ul class="footer__menu">
                    <li class="footer__menu-item"><strong>Connecticut</strong></li>
                    <li class="footer__menu-item"><strong>New Jersey</strong></li>
                    <li class="footer__menu-item"><strong>New York</strong></li>
                    </ul>
                </div>
            </div>
            <div class="footer-payments row align-items-center justify-content-between">
                <div class="col-12 col-xl-4">
                    <h6 class="base-font-size my-3"><strong>All major cards accepted</strong></h6>
                </div>
                <div class="col-12 col-xl-8 d-flex justify-content-center justify-content-lg-start">
                     <div class="row payments-cards">
                        <div class="payments-cards__item col-4">
                            <div class="payment-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/cards/visa_card.svg" width="37" height="20" alt="Visa">
                            </div>
                        </div>
                        <div class="payments-cards__item col-4">
                            <div class="payment-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/cards/master_card.svg" width="34" height="20" alt="Master Card">
                            </div>
                        </div>
                        <div class="payments-cards__item col-4">
                            <div class="payment-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/cards/disacover.svg" width="60" height="20" alt="Discover">
                            </div>
                        </div>
                        <div class="payments-cards__item col-4">
                            <div class="payment-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/cards/union_card.svg" width="32" height="20" alt="Union Pay">
                            </div>
                        </div>
                        <div class="payments-cards__item col-4">
                            <div class="payment-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/cards/paypal_card.svg" width="75" height="20" alt="Pay Pal">
                            </div>
                        </div>
                        <div class="payments-cards__item col-4">
                            <div class="payment-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/cards/american-express.svg" width="73" height="20" alt="American Express">
                            </div>
                        </div>
                   </div>
                </div>  
            </div>    
         </div>
      </div>  
   </div>
</footer>

</div>



<script>
document.addEventListener('DOMContentLoaded', function() {
    var dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    dropdownToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(event) {
            var dropdownMenu = this.nextElementSibling;
            if (dropdownMenu && !dropdownMenu.classList.contains('show')) {
                closeOtherDropdowns(this);
            }
        });
    });

    // Добавляем обработчики событий клика для вложенных элементов меню
    var dropdownMenus = document.querySelectorAll('.dropdown-menu');
    dropdownMenus.forEach(function(menu) {
        menu.addEventListener('click', function(event) {
            event.stopPropagation(); // Предотвращаем всплытие события клика
        });
    });

    function closeOtherDropdowns(currentToggle) {
        var openDropdowns = document.querySelectorAll('.dropdown-toggle');
        openDropdowns.forEach(function(toggle) {
            if (toggle !== currentToggle) {
                var dropdownMenu = toggle.nextElementSibling;
                if (dropdownMenu && dropdownMenu.classList.contains('show')) {
                    dropdownMenu.classList.remove('show');
                }
            }
        });
    }

    document.addEventListener('click', function() {
        closeOtherDropdowns(null); // передаем null для закрытия всех меню
    });


    /// Contact form


const requestCallForm = document.querySelector("form#request-call-form");

function submitCform() {
   document.querySelector("form#request-call-form input[type='submit']").disabled = "true"
   document.querySelector("form#request-call-form input[type='submit']").value = 'Please wait...'

   var formdata = new FormData(requestCallForm);

   formdata.append('action', 'submitmyform') 
   AjaxCform(formdata) 
}

async function AjaxCform(formdata) {
  const url = location.protocol+ '//'+ window.location.hostname +'/wp-admin/admin-ajax.php?action=submitmyform'
  const response = await fetch(url, {
      method: 'POST',
      body: formdata,
  });
  const data = await response.json();
	
	if (data['statuse'] == 'ok'){			
			document.querySelector("form#request-call-form").innerHTML = `<div id="success">
			${data['reply']}
			</div>`			
	} else if (data['statuse'] == 'er') {
			document.querySelector("form#request-call-form span#status").innerHTML = `<div id="er">
			Ops, ${data['reply']}
			</div>`
			document.querySelector("form#request-call-form input[type='submit']").disabled = false
			document.querySelector("form#request-call-form input[type='submit']").value = 'Try again'
	}}	
});

  </script>  

<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
<script>
  hbspt.forms.create({
    region: "na1",
    portalId: "44979414",
    formId: "a72ba619-eacb-4b37-b965-b4719c626659"
  });
</script>

<?php wp_footer(); ?>
</body>
</html>