<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" type="text/html">
<title><?php bloginfo( 'name' ); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,700&display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="page-wrapper">


    <header id="header" class="header">
        <section class="header__contacts">
            <div class="header__contacts-container container-xl text-center">
                <span class="navbar-brand flex-grow-1 d-flex">
                    <a href="<?php echo home_url(); ?>" aria-label="Go to homepage">
                        <img class="header__logo-image" src="<?php echo get_template_directory_uri() . '/img/logo.webp'; ?>" alt="<?php bloginfo( 'name' ); ?>" width="105" height="105">
                    </a>
                </span>
                <div class="header__contacts-item d-none d-lg-flex">
                       <i class="icon me-2">
                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.1 18C7.1 18 13.7 11.6033 13.7 6.75C13.7 4.95979 13.0046 3.2429 11.7669 1.97703C10.5292 0.711159 8.85043 0 7.1 0C5.34957 0 3.67084 0.711159 2.4331 1.97703C1.19536 3.2429 0.5 4.95979 0.5 6.75C0.5 11.6033 7.1 18 7.1 18ZM7.1 10.125C6.22479 10.125 5.38542 9.76942 4.76655 9.13649C4.14768 8.50355 3.8 7.64511 3.8 6.75C3.8 5.85489 4.14768 4.99645 4.76655 4.36351C5.38542 3.73058 6.22479 3.375 7.1 3.375C7.97521 3.375 8.81458 3.73058 9.43345 4.36351C10.0523 4.99645 10.4 5.85489 10.4 6.75C10.4 7.64511 10.0523 8.50355 9.43345 9.13649C8.81458 9.76942 7.97521 10.125 7.1 10.125Z" fill="currentColor"/>
                        </svg>
                       </i> 
                    <address>244 5th Avenue 2nd floor, New York, USA</address>
                </div>
                <div class="header__contacts-item flex-grow-1 flex-lg-grow-0 justify-content-end">
                    <div class="flex-column align-items-center flex-xl-row">
                        <span class="me-2">Order Technician</span>
                        <span>
                            <i class="icon me-2">
                                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.0601 15.5C6.06175 15.5113 -0.00854777 9.36828 9.03508e-06 1.43985C9.03508e-06 0.922086 0.419742 0.5 0.937509 0.5H3.41191C3.87651 0.5 4.27119 0.841371 4.33941 1.30093C4.50292 2.40237 4.8236 3.47466 5.2917 4.48503L5.38804 4.69297C5.522 4.9821 5.4312 5.32563 5.17188 5.51082C4.40559 6.05805 4.11274 7.15958 4.70972 8.01908C5.45885 9.09766 6.40317 10.0418 7.4815 10.7906C8.34096 11.3874 9.44231 11.0946 9.98954 10.3284C10.1748 10.069 10.5186 9.97812 10.8079 10.1121L11.0149 10.208C12.0253 10.6761 13.0977 10.9968 14.1992 11.1603C14.6588 11.2285 15 11.6231 15 12.0877V14.5625C15 15.0802 14.5792 15.5 14.0615 15.5L14.0601 15.5Z" fill="white"/>
                                </svg>
                            </i>  
                            <a href="tel:+496170961709" aria-label="Call us">+1 646 255 2766</a>
                        </span>   
                    </div>
                </div>
                <div class="header__contacts-item d-none d-lg-flex ">
                    <span>Hours: Mon-Sat: 8AM to 8PM</span>
                </div>
                <div class="header__contacts-item d-none d-lg-flex pe-0">
                    <span class="me-2">Follow Us</span>
                    <span class="d-flex my-1">
                        <a href="#" class="header__social-icon" title="Follow us on Facebook" aria-label="Follow us on Facebook">
                            <i class="icon">
                                <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.26362 0.600142H4.67915C3.05469 0.600142 1.7331 1.92176 1.7331 3.54623V4.78957H0.734547C0.631723 4.78957 0.54834 4.87296 0.54834 4.97578V6.46544C0.54834 6.56826 0.631723 6.65164 0.734547 6.65164H1.73303V11.2139C1.73303 11.3168 1.81641 11.4001 1.91923 11.4001H3.40889C3.51171 11.4001 3.59509 11.3168 3.59509 11.2139V6.65164H5.07678C5.1796 6.65164 5.26299 6.56826 5.26299 6.46544V4.97578C5.26299 4.87296 5.1796 4.78957 5.07678 4.78957H3.59509V3.54623C3.59509 2.94851 4.08139 2.46221 4.67908 2.46221H5.26355C5.36637 2.46221 5.44975 2.37883 5.44975 2.276V0.786348C5.44983 0.683525 5.36644 0.600142 5.26362 0.600142Z" fill="#2C5697"/>
                                </svg>
                            </i>
                        </a>
                        <a href="#" class="header__social-icon"  title="Follow us on Instagram" aria-label="Follow us on Instagram">
                            <i class="icon">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_916_449)">
                                    <path d="M5.00063 6.60016C5.88429 6.60016 6.60063 5.88381 6.60063 5.00016C6.60063 4.1165 5.88429 3.40016 5.00063 3.40016C4.11698 3.40016 3.40063 4.1165 3.40063 5.00016C3.40063 5.88381 4.11698 6.60016 5.00063 6.60016Z" fill="#2C5697"/>
                                    <path d="M7.2 0H2.8C2.05765 0.000840738 1.34595 0.29611 0.82103 0.82103C0.29611 1.34595 0.000840738 2.05765 0 2.8V7.2C0.000840738 7.94235 0.29611 8.65405 0.82103 9.17897C1.34595 9.70389 2.05765 9.99916 2.8 10H7.2C7.94235 9.99916 8.65405 9.70389 9.17897 9.17897C9.70389 8.65405 9.99916 7.94235 10 7.2V2.8C9.99916 2.05765 9.70389 1.34595 9.17897 0.82103C8.65405 0.29611 7.94235 0.000840738 7.2 0ZM5 7.4C4.52532 7.4 4.06131 7.25924 3.66663 6.99553C3.27195 6.73181 2.96434 6.35698 2.78269 5.91844C2.60104 5.4799 2.55351 4.99734 2.64612 4.53178C2.73872 4.06623 2.9673 3.63859 3.30294 3.30294C3.63859 2.9673 4.06623 2.73872 4.53178 2.64612C4.99734 2.55351 5.4799 2.60104 5.91844 2.78269C6.35698 2.96434 6.73181 3.27195 6.99553 3.66663C7.25924 4.06131 7.4 4.52532 7.4 5C7.39928 5.6363 7.14619 6.24633 6.69626 6.69626C6.24633 7.14619 5.6363 7.39928 5 7.4ZM7.6 3C7.48133 3 7.36533 2.96481 7.26666 2.89888C7.16799 2.83295 7.09109 2.73925 7.04567 2.62961C7.00026 2.51997 6.98838 2.39933 7.01153 2.28295C7.03468 2.16656 7.09183 2.05965 7.17574 1.97574C7.25965 1.89182 7.36656 1.83468 7.48295 1.81153C7.59933 1.78838 7.71997 1.80026 7.82961 1.84567C7.93925 1.89108 8.03295 1.96799 8.09888 2.06666C8.16481 2.16533 8.2 2.28133 8.2 2.4C8.2 2.55913 8.13679 2.71174 8.02426 2.82426C7.91174 2.93679 7.75913 3 7.6 3Z" fill="#2C5697"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_916_449">
                                    <rect width="10" height="10" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </i>
                        </a>
                        <a href="#" class="header__social-icon"  title="Follow us on Yelp" aria-label="Follow us on Yelp">
                            <i class="icon">
                                <svg width="10" height="13" viewBox="0 0 10 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.34747 7.58747L3.90138 7.45924C3.91968 7.4552 3.93779 7.45035 3.95566 7.44471C4.10858 7.4036 4.23957 7.30475 4.32105 7.16898C4.40253 7.03321 4.42813 6.87112 4.39247 6.71684L4.38991 6.70701C4.37169 6.63307 4.3398 6.5632 4.29588 6.501C4.23381 6.42239 4.15701 6.35662 4.06978 6.30738C3.96705 6.24879 3.85953 6.19903 3.74838 6.15865L3.14146 5.93725C2.80081 5.81074 2.45975 5.68722 2.11568 5.56669C1.89301 5.48762 1.70409 5.41795 1.53954 5.36752C1.50877 5.35769 1.47458 5.34829 1.4468 5.33888C1.24805 5.27777 1.10914 5.25255 0.990753 5.25212C0.911973 5.24922 0.833505 5.26351 0.760808 5.29401C0.684864 5.32666 0.616694 5.37502 0.560783 5.4359C0.533008 5.46758 0.506902 5.50068 0.482568 5.53506C0.435176 5.60785 0.39604 5.68569 0.365885 5.76714C0.253273 6.10025 0.197222 6.44985 0.200053 6.80147C0.202618 7.11946 0.211165 7.5272 0.385974 7.80373C0.427859 7.87468 0.484277 7.93623 0.551807 7.98367C0.676182 8.06958 0.80184 8.08112 0.933054 8.09052C1.12838 8.1042 1.31772 8.05633 1.50663 8.01273L3.34619 7.58704L3.34747 7.58747ZM9.5239 4.64606C9.37272 4.32883 9.16946 4.03917 8.92255 3.78911C8.89052 3.75747 8.85623 3.72818 8.81997 3.70149C8.78659 3.67634 8.75192 3.65295 8.71611 3.6314C8.67906 3.61128 8.64097 3.59316 8.60199 3.57712C8.52523 3.54686 8.44293 3.53317 8.36051 3.53694C8.28172 3.54171 8.20489 3.56343 8.13527 3.60063C8.0297 3.6532 7.91558 3.7374 7.76342 3.87844C7.74248 3.89981 7.71641 3.92332 7.69247 3.94511C7.56724 4.06308 7.42748 4.20882 7.26165 4.37808C7.0052 4.63708 6.75303 4.8978 6.50215 5.16108L6.05337 5.62696C5.97131 5.71244 5.89651 5.8039 5.82984 5.90178C5.77299 5.98427 5.73282 6.07701 5.71145 6.17532C5.69882 6.25047 5.70056 6.32734 5.71658 6.40184L5.71914 6.41167C5.75468 6.56576 5.84864 6.70004 5.98123 6.78622C6.11381 6.87241 6.27467 6.90377 6.42992 6.8737C6.45428 6.87028 6.47351 6.866 6.48548 6.86344L8.87895 6.30952C9.06786 6.26593 9.25934 6.22575 9.42859 6.12745C9.54228 6.0612 9.65042 5.99581 9.72436 5.86417C9.76409 5.79162 9.78812 5.71153 9.79488 5.62909C9.83164 5.30298 9.6611 4.93242 9.5239 4.64606ZM5.23959 5.65388C5.41312 5.43591 5.41226 5.11108 5.42765 4.84523C5.47979 3.95794 5.5345 3.07064 5.57767 2.18249C5.59477 1.84655 5.63067 1.51489 5.61015 1.17595C5.59391 0.89643 5.59177 0.575449 5.41526 0.345932C5.10325 -0.0583939 4.43906 -0.0250564 3.98601 0.0381996C3.84711 0.0574329 3.7082 0.0830772 3.57014 0.116415C3.43209 0.149753 3.29575 0.185655 3.16197 0.228823C2.7273 0.371149 2.11568 0.632721 2.01225 1.13407C1.95413 1.41744 2.0926 1.70679 2.19988 1.9658C2.32981 2.27909 2.50762 2.56117 2.67003 2.85608C3.09786 3.63525 3.53424 4.40885 3.96934 5.18374C4.09928 5.41453 4.24075 5.70774 4.49206 5.82741C4.50873 5.83467 4.5254 5.84109 4.54292 5.84664C4.65533 5.88938 4.778 5.89793 4.89553 5.87015L4.9169 5.86545C5.02503 5.83553 5.12291 5.77697 5.19984 5.69491C5.21395 5.68209 5.2272 5.66841 5.23959 5.65388ZM5.03273 8.02983C4.96504 7.93451 4.86891 7.86307 4.75811 7.82575C4.64731 7.78843 4.52755 7.78716 4.41598 7.82211C4.38948 7.83066 4.36427 7.84134 4.33905 7.85374C4.301 7.87343 4.26468 7.8963 4.23049 7.92212C4.1309 7.99564 4.0467 8.0918 3.97063 8.18797C3.95096 8.21276 3.93344 8.24524 3.91036 8.26661L3.5257 8.79659C3.30729 9.09321 3.09188 9.39069 2.8786 9.69286C2.73927 9.88819 2.61917 10.0527 2.52386 10.1985C2.50591 10.2263 2.4871 10.257 2.47 10.2814C2.35589 10.4579 2.29135 10.5866 2.25844 10.7011C2.23351 10.7774 2.22563 10.8582 2.23536 10.9379C2.24604 11.0208 2.27382 11.1003 2.31742 11.1717C2.3405 11.2076 2.36529 11.2422 2.39179 11.2755C2.44947 11.3419 2.51441 11.4015 2.5854 11.4533C2.85125 11.6384 3.14231 11.7713 3.44876 11.8739C3.70345 11.9583 3.96816 12.0088 4.23605 12.0239C4.28135 12.0261 4.32708 12.0252 4.37281 12.0209C4.41484 12.0173 4.45664 12.0114 4.49804 12.0034C4.53954 11.9936 4.58049 11.9817 4.62071 11.9675C4.69781 11.9402 4.76794 11.8962 4.82609 11.8386C4.88423 11.7811 4.92895 11.7114 4.95708 11.6346C5.00153 11.5234 5.03059 11.3824 5.04983 11.1738C5.05153 11.1439 5.05581 11.108 5.0588 11.0755C5.07376 10.902 5.08103 10.6981 5.09214 10.4583C5.11052 10.0899 5.12547 9.72321 5.13701 9.35479L5.16138 8.70086C5.16693 8.54955 5.16223 8.38287 5.12035 8.23285C5.10198 8.16092 5.07226 8.09239 5.0323 8.02983H5.03273ZM9.37944 9.05261C9.29909 8.96457 9.1854 8.87652 9.00546 8.76796C8.97982 8.75343 8.94905 8.73419 8.92126 8.71753C8.77167 8.62777 8.59131 8.53289 8.38102 8.41834C8.05798 8.24175 7.73342 8.06793 7.40739 7.89691L6.8304 7.59088C6.80048 7.58234 6.77013 7.56097 6.74192 7.54729C6.63103 7.4905 6.51322 7.4484 6.39145 7.42206C6.34944 7.41412 6.30683 7.40983 6.26408 7.40924C6.2365 7.40843 6.2089 7.41001 6.18159 7.41394C6.06616 7.43173 5.9593 7.48553 5.87625 7.56765C5.7932 7.64978 5.73822 7.75604 5.71914 7.87126C5.7106 7.94478 5.71316 8.01914 5.72726 8.09138C5.75547 8.24524 5.82428 8.39697 5.89523 8.52989L6.20339 9.10732C6.37478 9.433 6.54874 9.75698 6.72654 10.0797C6.84151 10.29 6.93682 10.4703 7.02615 10.6195C7.04325 10.6477 7.06248 10.678 7.07744 10.7037C7.186 10.8832 7.27361 10.9965 7.36209 11.0772C7.41979 11.1328 7.4886 11.1751 7.56425 11.2012C7.64332 11.2273 7.72752 11.2367 7.81044 11.2285C7.85269 11.2234 7.89464 11.216 7.93609 11.2063C7.97713 11.1956 8.0173 11.1824 8.05705 11.1674C8.09979 11.1512 8.14125 11.1319 8.181 11.1097C8.41517 10.9783 8.63102 10.8167 8.82296 10.6289C9.05333 10.4024 9.25678 10.1549 9.41492 9.87237C9.43704 9.83223 9.45618 9.79052 9.47219 9.74757C9.48713 9.7081 9.49997 9.66787 9.51066 9.62704C9.52006 9.58516 9.52733 9.54327 9.53203 9.50096C9.53998 9.41783 9.53037 9.33395 9.50382 9.25477C9.47778 9.17913 9.43547 9.11013 9.37987 9.05261H9.37944Z" fill="#2C5697"/>
                                </svg>
                            </i>
                        </a>
                    </span>
                    
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

                <button class="btn btn-secondary btn-medium header__menu-button" data-bs-toggle="modal" data-bs-target="#request-call">Request a call</button>
                    
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
   
 