<?php

define('TM_DIR', get_template_directory(__FILE__));
define('TM_URL', get_template_directory_uri(__FILE__));

require_once TM_DIR . '/lib/Parser.php';

function add_style(){
    /*wp_enqueue_style( 'my-bootstrap-extension', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');*/
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), '1');
    wp_enqueue_style( 'my-styles', get_template_directory_uri() . '/css/style.css', array('fancybox'), '1');
   /* wp_enqueue_style( 'my-sass', get_template_directory_uri() . '/sass/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'fotorama', get_template_directory_uri() . '/css/fotorama.css', array('my-bootstrap-extension'), '1');*/
}

function add_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script( 'jq', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1');
    // wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1');
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array('jq'), '1');
    wp_enqueue_script( 'fancybox-pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('fancybox'), '1');
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.js', array('fancybox-pack'), '1');
    // wp_enqueue_script( 'fotorama-js', get_template_directory_uri() . '/js/fotorama.js', array(), '1');
    wp_localize_script( 'jquery', 'myajax', 
array(
   'url'   => admin_url('admin-ajax.php'),
   'nonce' => wp_create_nonce('myajax-nonce')
));
}

function add_admin_script(){
    /*wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script('admin',get_template_directory_uri() . '/js/admin.js', array(), '1');
    wp_enqueue_style( 'my-bootstrap-extension-admin', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1');
    wp_enqueue_style( 'my-style-admin', get_template_directory_uri() . '/css/admin.css', array(), '1');*/
}



add_action('admin_enqueue_scripts', 'add_admin_script');
add_action( 'wp_enqueue_scripts', 'add_style' );
add_action( 'wp_enqueue_scripts', 'add_script' );

function prn($content) {
    echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
    print_r ( $content );
    echo '</pre>';
}

function my_pagenavi() {
    global $wp_query;

    $big = 999999999; // уникальное число для замены

    $args = array(
        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) )
    ,'format' => ''
    ,'current' => max( 1, get_query_var('paged') )
    ,'total' => $wp_query->max_num_pages
    );

    $result = paginate_links( $args );

    // удаляем добавку к пагинации для первой страницы
    $result = str_replace( '/page/1/', '', $result );

    echo $result;
}

function excerpt_readmore($more) {
    return '... <br><a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Читать далее' . '</a>';
}
add_filter('excerpt_more', 'excerpt_readmore');


if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );


// Custom page types
add_action('init', 'my_custom_init'); 

function my_custom_init() 
{ 

//scenario
$labels = array( 
    'name' => 'Сценарии', // Основное название типа записи 
    'singular_name' => 'Сценарий', // отдельное название записи типа Book 
    'add_new' => 'Добавить Сценарий', 
    'add_new_item' => 'Добавить новоый Сценарий', 
    'edit_item' => 'Редактировать Сценарий', 
    'new_item' => 'Новый Сценарий', 
    'view_item' => 'Посмотреть Сценарий', 
    'search_items' => 'Найти Сценарий', 
    'not_found' => 'Сценариев не найдено', 
    'menu_name' => 'Сценарии' 
); 
$args = array( 
    'labels' => $labels, 
    'public' => true, 
    'publicly_queryable' => true, 
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true, 
    'rewrite' => true, 
    'capability_type' => 'post', 
    'has_archive' => true, 
    'hierarchical' => false, 
    'menu_position' => null, 
    'supports' => array('title', 'editor', 'thumbnail') 
); 

register_post_type('scenario', $args); 

}

// подключаем функцию активации мета блока в сценарии(my_extra_fields)
add_action('add_meta_boxes', 'my_extra_fields', 1);

function my_extra_fields() {
    add_meta_box( 'extra_fields', 'Дополнительные поля', 'extra_fields_box_func', 'scenario', 'normal', 'high'  );
}

// код блока
function extra_fields_box_func( $post ){
    ?>
    <p>Город</p><input type="text" name="extra[city]" value="<?php echo get_post_meta($post->ID, 'city', 1); ?>" style="width:50%" />
    <input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
     <label for="meta-box-checkbox">New</label>
            <?php
                $checkbox_value = get_post_meta($post->ID, "meta-box-checkbox", true);

                if($checkbox_value == "")
                {
                    ?>
                        <input name="meta-box-checkbox" type="checkbox" value="true">
                    <?php
                }
                else if($checkbox_value == "true")
                {
                    ?>  
                        <input name="meta-box-checkbox" type="checkbox" value="true" checked>
                    <?php
                }
            ?>
    <?php
}

// включаем обновление полей при сохранении
add_action('save_post', 'my_extra_fields_update', 0);

/* Сохраняем данные, при сохранении поста */
function my_extra_fields_update( $post_id ){
    if ( !wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__) ) return false; // проверка
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false; // если это автосохранение
    if ( !current_user_can('edit_post', $post_id) ) return false; // если юзер не имеет право редактировать запись
    $chk = isset( $_POST['my_meta_box_check'] ) && $_POST['my_meta_box_select'] ? 'on' : 'off';
    if( !isset($_POST['extra']) ) return false; 
     $meta_box_checkbox_value = "";
     if(isset($_POST["meta-box-checkbox"]))
    {
        $meta_box_checkbox_value = $_POST["meta-box-checkbox"];
    }   
    update_post_meta($post_id, "meta-box-checkbox", $meta_box_checkbox_value);
    // Все ОК! Теперь, нужно сохранить/удалить данные
    $_POST['extra'] = array_map('trim', $_POST['extra']);
    foreach( $_POST['extra'] as $key=>$value ){
        if( empty($value) ){
            delete_post_meta($post_id, $key); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
    }
    return $post_id;
}

add_action( 'wp_ajax_nopriv_myajax-submit', 'myajax_submit' );
add_action( 'wp_ajax_myajax-submit', 'myajax_submit' );
function myajax_submit() {
    // $nonce = $_POST['nonce'];

    // // проверяем nonce код, если проверка не пройдена прерываем обработку
    // if ( !wp_verify_nonce( $nonce, 'myajax-nonce' ) )
    //     die ( 'Stop!')

    // обрабатываем данные и возвращаем
    add_filter( 'wp_mail_content_type', 'set_html_content_type' );
    $admin_email=get_option('admin_email');
    $form_name= $_POST['title'];
    wp_mail( $admin_email, $form_name, 'Имя:'.$_POST['name'].'<br>Телефон:'.$_POST['phone'].'<br>Email:'.$_POST['email'].'<br>Сообщение:'.$_POST['comment'] );

// Сбросим content-type, чтобы избежать возможного конфликта
    remove_filter( 'wp_mail_content_type', 'set_html_content_type' );
    function set_html_content_type() {
        return 'text/html';
    }
    // echo $_POST['comment'];
    // echo $_POST['email'];
    // echo $_POST['phone'];
    // echo get_option('admin_email');
    // Не забываем выходить
    exit;
}
