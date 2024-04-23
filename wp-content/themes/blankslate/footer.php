</main>

<div class="footer__menu-buttons-wrapper">
                    <button class="btn btn-secondary footer__menu-button" data-bs-toggle="modal" data-bs-target="#request-call">request a quote</button>
                    <a class="btn btn-secondary footer__menu-button d-lg-none d-flex align-items-center ms-3" href="tel:+496170961709">
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
                <img src="<?php echo get_template_directory_uri() . '/img/logo.webp'; ?>" alt="<?php bloginfo( 'name' ); ?>" width="105" height="105">
            </a>
            <ul class="footer__menu">
               <li class="footer__menu-item">    
                     <address><strong>Address:</strong> 244 5th Avenue 2nd floor<br>New York NY 10001</address>
               </li>   
               <li class="footer__menu-item">
                  <strong>Phone:</strong> <a href="tel:+16462552766">+1 646 255 2766</a>
               </li> 
               <li class="footer__menu-item">
                  <strong>Email:</strong> <a href="mailto:support@WindowRepairNYC.com">support@WindowRepairNYC.com</a>
               </li>    
            </ul>     
         </div>
         <nav class="col-lg-3">
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
         <div class="col-lg-3">
            <h6 class="footer__title">OPENING HOURS</h6>
            <ul class="footer__menu">
               <li class="footer__menu-item">Mon - Sat 8AM to 8PM</li>
               <li class="footer__menu-item">Sunday Closed</li>
            </ul>
         </div>
         <div class="col-lg-2">
            <h6 class="footer__title">LOCATIONS</h6>
            <ul class="footer__menu">
               <li class="footer__menu-item">Connecticut</li>
               <li class="footer__menu-item">New Jersey</li>
               <li class="footer__menu-item">New York</li>
            </ul>
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
   document.querySelector("form#request-call-form #mybtn").disabled = "true"
   document.querySelector("form#request-call-form #mybtn").value = 'Please wait...'

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
			document.querySelector("form#request-call-form #mybtn").disabled = false
			document.querySelector("form#request-call-form #mybtn").value = 'Try again'
	}}	
});

  </script>  


<?php wp_footer(); ?>
</body>
</html>