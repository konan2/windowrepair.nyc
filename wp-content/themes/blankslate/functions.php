<?php

//Remove JQuery migrate
 
function remove_jquery_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
         $script = $scripts->registered['jquery'];
    if ( $script->deps ) { 
 // Check whether the script has any dependencies
         $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
        }
    }
  }
 add_action( 'wp_default_scripts', 'remove_jquery_migrate' );


function include_my_scripts() {

    // // Подключаем стили
    // wp_enqueue_style(
    //     'default',
    //     get_template_directory_uri() . 'build/app.min.css'
    // );

    // //Подключаем скрипты
    // wp_enqueue_script( 
    //     'app-js',
    //      get_template_directory_uri() . 'build/app.min.js',
    //      true
    // );
}

//add_action( 'wp_enqueue_scripts', 'include_my_scripts' );



function my_custom_menu() {
    register_nav_menus(
      array(
        'pages-menu' => __( 'Pages menu' )
      )
    );
  }
  add_action( 'init', 'my_custom_menu' );
  
  
  // let's add "*active*" as a class to the li
  
  add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
  function special_nav_class($classes, $item){
       if( in_array('current-menu-item', $classes) ){
               $classes[] = 'active ';
       }
       return $classes;
  }
  
  // let's add our custom class to the actual link tag
  
//   function atg_menu_classes($classes, $item, $args) {
//     if($args->theme_location == 'pages-menu') {
//       $classes[] = 'nav-link';
//     }
//     return $classes;
//   }
//   add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);
  
  function add_menuclass($ulclass) {
     return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
  }
  add_filter('wp_nav_menu','add_menuclass');
  




  function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

?>