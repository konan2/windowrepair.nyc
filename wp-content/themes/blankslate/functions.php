<?php


// Функция для регистрации новой таксономии "Service"
function custom_register_service_taxonomy() {
    $labels = array(
        'name'                       => _x( 'Services', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Service', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Services', 'textdomain' ),
        'popular_items'              => __( 'Popular Services', 'textdomain' ),
        'all_items'                  => __( 'All Services', 'textdomain' ),
        'edit_item'                  => __( 'Edit Service', 'textdomain' ),
        'update_item'                => __( 'Update Service', 'textdomain' ),
        'add_new_item'               => __( 'Add New Service', 'textdomain' ),
        'new_item_name'              => __( 'New Service Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate services with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove services', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used services', 'textdomain' ),
        'not_found'                  => __( 'No services found', 'textdomain' ),
        'menu_name'                  => __( 'Services', 'textdomain' ),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true, // Указываем, что таксономия будет иерархической
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array( 'slug' => 'service' ), // Устанавливаем желаемый slug
    );

    // Регистрируем таксономию
    register_taxonomy( 'service', array( 'post' ), $args );
}
add_action( 'init', 'custom_register_service_taxonomy' );



// Убираем имя родительской категории из url
function remove_parent_category_from_category_url( $termlink, $term, $taxonomy ) {
    // Проверяем, является ли термин категорией и имеет ли он родительскую категорию
    if ( 'category' === $taxonomy && ! is_wp_error( $term ) && $term->parent > 0 ) {
        // Получаем ID родительской категории
        $parent_category_id = $term->parent;

        // Получаем родительскую категорию
        $parent_category = get_category( $parent_category_id );

        // Удаляем имя родительской категории из URL
        $termlink = str_replace( '/' . $parent_category->slug . '/', '/', $termlink );
    }

    return $termlink;
}
add_filter( 'term_link', 'remove_parent_category_from_category_url', 10, 3 );



// Регистрируем меню
function register_my_menus() {
    register_nav_menus(
      array(
        'primary' => __( 'Primary Menu' ),
        'footer' => __( 'Footer Menu' ),
        // Здесь можно добавить другие местоположения меню
      )
    );
}
add_action( 'init', 'register_my_menus' );




// Remove gutenberg

add_filter( 'wp_enqueue_scripts', 'true_dequeue_gutenberg_styles', 999 );
 
function true_dequeue_gutenberg_styles() {
 
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'global-styles' ); // глобальные CSS-переменные
 
}


// Remove Emoji

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');







// Добавление пользовательского поля к посту
function add_custom_field_meta_box() {
    add_meta_box(
        'custom-field-meta-box',
        'Short description',
        'render_custom_field_meta_box',
        array('post', 'page'), // Укажите тип записи, для которой требуется добавить пользовательское поле
        'normal',
        'high'
    );
}

add_action('add_meta_boxes', 'add_custom_field_meta_box');

// Отображение пользовательского поля в административной области
function render_custom_field_meta_box($post) {
    $custom_field_value = get_post_meta($post->ID, 'short_description', true);
    ?>
    <input type="text" id="custom_field" name="custom_field" value="<?php echo esc_attr($custom_field_value); ?>" style="width: 100%" />
    <?php
}

// Сохранение значения пользовательского поля при сохранении поста
function save_custom_field($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['custom_field'])) {
        update_post_meta($post_id, 'short_description', sanitize_text_field($_POST['custom_field']));
    }
}

add_action('save_post', 'save_custom_field');

















class Custom_Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
  // Добавляем элемент списка перед элементом
  public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
      if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
          $t = '';
          $n = '';
      } else {
          $t = "\t";
          $n = "\n";
      }
      // Строим начало элемента списка
      $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'nav-item'; // Добавляем класс "nav-item"
        $classes[] = 'menu-level-' . ($depth + 1); // Добавляем класс "menu-level-N" для уровня вложенности
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        $output .= $indent . '<li' . $class_names .'>'; // Уберите $id из строки
      // Строим ссылку
      $atts = array();
      $atts['href'] = !empty($item->url) ? $item->url : '';
      $atts['class'] = 'nav-link'; // Добавляем класс "nav-link" для ссылки
      if ($args->walker->has_children) {
          $atts['class'] .= ' dropdown-toggle'; // Добавляем класс "dropdown-toggle" для ссылки с дочерними элементами
          //$atts['data-bs-toggle'] = 'dropdown'; // Добавляем атрибут "data-bs-toggle" для активации dropdown в Bootstrap
          $atts['aria-expanded'] = 'false'; // Добавляем атрибут "aria-expanded" для accessibility
      }
      $attributes = '';
      foreach ($atts as $attr => $value) {
          $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
      }
      $item_output = $args->before;
      $item_output .= '<a' . $attributes . '>';
      $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
      $item_output .= '</a>';
      // Добавляем стрелку вниз, если у элемента есть дочерние элементы
      if ($args->walker->has_children) {
          $item_output .= '<i class="icon">
                              <svg width="18" height="18" viewBox="0 0 18 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 6.29251L3.64576 4.625L9.00349 10.0459L14.3612 4.625L16 6.29251L9 13.375L2 6.29369V6.29251Z" fill="currentColor"/>
                              </svg>
                              </i>';
      }
      $item_output .= $args->after;
      // Выводим элемент
      $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }

  // Оборачиваем элемент списка в ul
  public function start_lvl(&$output, $depth = 0, $args = null) {
      if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
          $t = '';
          $n = '';
      } else {
          $t = "\t";
          $n = "\n";
      }
      // Добавляем класс "dropdown-menu" к элементам, имеющим дочерние элементы
      if ($depth === 0) {
          $class_names = 'dropdown-menu';
          if ($args->walker->has_children) {
              $class_names .= ' container-xl'; // Добавляем класс "container-fluid" для корневого ul
          }
          $output .= "{$n}{$t}<div class=\"drop-down-wrapper\">{$n}{$t}<ul class=\"{$class_names}\">{$n}";
      } else {
          // Для вложенных элементов добавляем только класс "dropdown-menu"
          $output .= "{$n}{$t}<div class=\"drop-down-wrapper\">{$n}{$t}<ul class=\"dropdown-menu\">{$n}";
      }
  }

  // Завершаем элемент списка
  public function end_el(&$output, $item, $depth = 0, $args = null) {
      if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
          $t = '';
          $n = '';
      } else {
          $t = "\t";
          $n = "\n";
      }
      // Закрываем элемент списка
      $output .= "</li>{$n}";
  }

  // Завершаем ul
  public function end_lvl(&$output, $depth = 0, $args = null) {
      if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
          $t = '';
          $n = '';
      } else {
          $t = "\t";
          $n = "\n";
      }
      // Закрываем ul и div
      $indent = str_repeat($t, $depth);
      $output .= "{$n}{$t}</ul>{$n}{$t}</div>{$n}";
  }
}




function custom_single_template($template) {
    // Проверяем, является ли текущая страница страницей одной записи
    if (is_single()) {
        // Получаем объект текущей записи
        global $post;

        // Получаем ID категории "blog"
        $blog_category_id = get_cat_ID('blog');

        // Получаем все категории текущей записи
        $categories = get_the_category($post->ID);

        // Проверяем, есть ли среди категорий дочерняя категория категории "blog"
        foreach ($categories as $category) {
            if ($blog_category_id && cat_is_ancestor_of($blog_category_id, $category->term_id)) {
                // Устанавливаем шаблон для этой категории
                $template = get_template_directory() . '/single-post-blog.php';
                break; // Прерываем цикл, если найдена соответствующая категория
            }
        }
    }
    
    return $template;
}
add_filter('template_include', 'custom_single_template');




// Определяем длину обрезанного текста в 20 слов
function custom_excerpt_length( $length ) {
    return 90; // Замените 20 на желаемое количество слов
}
add_filter( 'excerpt_length', 'custom_excerpt_length' );

// После этого вызов the_excerpt() будет выводить только 20 слов

function custom_excerpt_more( $more ) {
    return '...'; // Замените '' на то, что вы хотите использовать вместо [...]
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );






function include_my_scripts() {

  // Подключаем стили
  wp_enqueue_style(
      'default',
      get_template_directory_uri() . '/build/main.min.css'
  );

  //Подключаем скрипты
  wp_enqueue_script( 
      'app-js',
       get_template_directory_uri() . '/build/main.min.js',
       true
  );
}

add_action( 'wp_enqueue_scripts', 'include_my_scripts' );






function custom_page_sections_post_type() {
  $labels = array(
      'name'               => __( 'Page Sections', 'text-domain' ),
      'singular_name'      => __( 'Page Section', 'text-domain' ),
      'menu_name'          => __( 'Page Sections', 'text-domain' ),
      'name_admin_bar'     => __( 'Page Section', 'text-domain' ),
      'add_new'            => __( 'Add New', 'text-domain' ),
      'add_new_item'       => __( 'Add New Page Section', 'text-domain' ),
      'new_item'           => __( 'New Page Section', 'text-domain' ),
      'edit_item'          => __( 'Edit Page Section', 'text-domain' ),
      'view_item'          => __( 'View Page Section', 'text-domain' ),
      'all_items'          => __( 'All Page Sections', 'text-domain' ),
      'search_items'       => __( 'Search Page Sections', 'text-domain' ),
      'parent_item_colon'  => __( 'Parent Page Sections:', 'text-domain' ),
      'not_found'          => __( 'No page sections found.', 'text-domain' ),
      'not_found_in_trash' => __( 'No page sections found in Trash.', 'text-domain' )
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'page-section' ),
      'capability_type'    => 'post',
      'has_archive'        => false,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
      'menu_icon'          => 'dashicons-layout',
  );

  register_post_type( 'page-section', $args );
}
add_action( 'init', 'custom_page_sections_post_type' );





function custom_post_shortcode($atts) {
  // Параметры шорткода
  $atts = shortcode_atts(array(
      'post_id' => 0, // ID поста
  ), $atts);

  // Получаем содержимое поста по его ID
  $post_content = '';
  if ($atts['post_id'] > 0) {
      $post = get_post($atts['post_id']);
      if ($post) {
          $post_content = apply_filters('the_content', $post->post_content);
      }
  }

  return $post_content;
}

add_shortcode('show_section', 'custom_post_shortcode');


add_theme_support( 'post-thumbnails' );


// Contact Form

add_action('wp_ajax_submitmyform', 'submitmyform');
add_action('wp_ajax_nopriv_submitmyform', 'submitmyform');

function submitmyform() {
    $tomyform = 'leads@windowrepairnyc.com';

    $system = array();
    if ($_POST['website'] != '') {
        $system['statuse'] = 'er';
        $system['reply'] = 'Suspicious activity was detected, That’s all we know.';
        echo json_encode($system, JSON_UNESCAPED_UNICODE);
        exit;
        die();
    }

    foreach ($_POST as $key => $value) {
        if (strpos($value, '"') !== FALSE) {
            $system['statuse'] = 'er';
            $system['reply'] = 'The character entered in the form is not acceptable, please contact the site support.';
            echo json_encode($system, JSON_UNESCAPED_UNICODE);
            exit;
            die();
        }
    }

    $siteURL = get_site_url();
    $frommyform = 'info@' . substr($siteURL, strpos($siteURL, ".") + 1);
    $headersmyform = "From: $frommyform\n";
    $headersmyform .= "MIME-Version: 1.0\n";
    $headersmyform .= "Content-type: text/html; charset=UTF-8\n";


    function sendForm($tomyform, $headersmyform)
    {
        unset($_POST['formid'], $_POST['website'], $_POST['action']);
        $system = array();
        $post = array();

        foreach ($_POST as $key => $value) {
            if (strpos($value, "\n") !== FALSE) {
                $post[] = $key . ': <b>' . nl2br(filter_var($value, FILTER_SANITIZE_STRING)) . '</b>';
            } else {
                if ((strpos($value, "@") !== FALSE)) {
                    $post[] = $key . ': <b>' . nl2br(filter_var($value, FILTER_SANITIZE_EMAIL)) . '</b>';
                } else {
                    $post[] = $key . ': <b>' . filter_var($value, FILTER_SANITIZE_STRING) . '</b>';
                }
            }
        }
        $Agent = $_SERVER['HTTP_USER_AGENT'];
        preg_match('!\(.*?\)!', $Agent, $userAgent);
        $message = join("<br />", $post);
        $message .= "<br><br>---------<br>";
        $message .= "UserAgent: " . str_replace(array("(", ")"), "", $userAgent[0]) . "<br>";
        $message .= "User IP: " . $_SERVER['REMOTE_ADDR'] . "<br>";
        $subject = 'Contact Form - windowrepair.nyc';

        if (wp_mail($tomyform, $subject, $message, $headersmyform)) {
            $system['statuse'] = 'ok';
            $system['reply'] = '<h2>Thank you.</h2><p>We will contact you. Shortly.</p>';
            echo json_encode($system, JSON_UNESCAPED_UNICODE);
            exit;
            die();
        } else {
            $system['statuse'] = 'er';
            $system['reply'] = 'Sorry, There is a problem in sending your form, please email us your message.';
            echo json_encode($system, JSON_UNESCAPED_UNICODE);
            exit;
            die();
        }
    }

    if ($_POST['formid']) {
        $id = $_POST['formid'];

        sendForm($tomyform, $headersmyform);
    }
}

















?>



