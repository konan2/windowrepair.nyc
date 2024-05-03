<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" type="text/html">
<title><?php bloginfo( 'name' ); ?>: <?php bloginfo( 'description' ); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,700&display=swap" rel="stylesheet"> -->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="page-wrapper">


    <header id="header" class="header">
        <section class="header__contacts">
            <div class="header__contacts-container container-xl text-center">
                <span class="navbar-brand flex-grow-1 d-flex">
                    <a href="<?php echo home_url(); ?>" aria-label="<?php bloginfo( 'name' ); ?>">
                        <img class="header__logo-image" src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>" alt="<?php bloginfo( 'name' ); ?>" width="105" height="105">
                    </a>
                </span>
                <div class="header__contacts-item d-none d-lg-flex">
                       <i class="icon me-2">
                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.1 18C7.1 18 13.7 11.6033 13.7 6.75C13.7 4.95979 13.0046 3.2429 11.7669 1.97703C10.5292 0.711159 8.85043 0 7.1 0C5.34957 0 3.67084 0.711159 2.4331 1.97703C1.19536 3.2429 0.5 4.95979 0.5 6.75C0.5 11.6033 7.1 18 7.1 18ZM7.1 10.125C6.22479 10.125 5.38542 9.76942 4.76655 9.13649C4.14768 8.50355 3.8 7.64511 3.8 6.75C3.8 5.85489 4.14768 4.99645 4.76655 4.36351C5.38542 3.73058 6.22479 3.375 7.1 3.375C7.97521 3.375 8.81458 3.73058 9.43345 4.36351C10.0523 4.99645 10.4 5.85489 10.4 6.75C10.4 7.64511 10.0523 8.50355 9.43345 9.13649C8.81458 9.76942 7.97521 10.125 7.1 10.125Z" fill="currentColor"/>
                        </svg>
                       </i> 
                    <span>We serve New York & Northern New Jersey</span>
                </div>
                <div class="header__contacts-item flex-grow-1 flex-lg-grow-0 justify-content-end">
                    <div class="flex-column align-items-center">
                        <p class="m-0 text-uppercase">EMERGENCY SERVICE</p>
                        <a href="tel:+496170961709" aria-label="Call us"><strong>+1 646 255 2766</strong></a>
                    </div>
                </div>
                <div class="header__contacts-item d-none flex-column d-lg-flex">
                    <p class="m-0 text-uppercase">OPENING HOURS</p>
                    <time><strong>Mon-Sat: 8AM to 8PM</strong></time>
                </div>
                <div class="header__contacts-item d-none d-lg-flex pe-0">
                    <button class="btn btn-secondary btn-medium" data-bs-toggle="modal" data-bs-target="#request-call">Request a call</button>
                </div>
                <div class="d-lg-none d-flex align-items-center ms-2">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
                        </svg>
                    </button>
                </div>
            </div> 
        </section>
        <section class="navbar navbar-expand-lg">
            <div class="header__menu-wrapper container-xl">
                <nav class="collapse navbar-collapse header__menu-container" id="bdNavbar" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41L17.59 5Z" fill="currentColor"/>
                            </svg>
                    </button>
                
                    

                   
                    <?php
                       wp_nav_menu(array(
                        'theme_location' => 'primary', // Идентификатор местоположения меню
                        'container' => 'ul', // Обертка для меню, в данном случае <ul>
                        'menu_class' => 'navbar-nav flex-column flex-lg-row flex-wrap bd-navbar-nav pt-2 py-md-0 header__menu', // Классы меню
                        'fallback_cb' => false, // Отключаем стандартный вывод меню при его отсутствии
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', // Обертка для элементов меню, теперь включает вложенные элементы
                        'walker' => new Custom_Bootstrap_Walker_Nav_Menu(), // Используем наш кастомный класс обходчика
                    ));
                        ?>

                
                    
                </nav>
            </div>
        </section>
    </header>

    


<div class="modal fade" id="request-call" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal__content">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41L17.59 5Z" fill="currentColor"/>
                </svg>
                </button>
        <form id="request-call-form" onsubmit="submitCform(); return false;" class="form-wrap form-wrap__rows"> 
                
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
                <!-- <button type="submit" id="mybtn" class="btn btn-primary">BOOK ONLINE</button> -->
                <input id="mybtn" type="submit" value="Send request" class="btn btn-secondary w-100">
                <span id="status"> </span>
                <input type="hidden" id="formid" name="formid" value="1001">
                </div>
            </div>
            

        </form>
    </div>
  </div>
</div>


<main id="content" role="main" class="page-wrapper">
   
 