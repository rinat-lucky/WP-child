<?php
add_action('wp_enqueue_scripts', 'childhood_scripts'); /*это пример хука - действия, которое выполняется во время или после определенных действий; в данном случае: первое действие в скобках - сам хук, а второе - функция (действие), которое мы создаем и вызываем */      

function childhood_scripts() {
    wp_enqueue_style('childhood-style', get_stylesheet_uri());
    wp_enqueue_style('mir-style', get_template_directory_uri () . '/assets/styles/main.min.css');
    wp_enqueue_script('childhood-scripts', get_template_directory_uri () . '/assets/js/main.min.js', array(), null, true);
    wp_deregister_script( 'jquery' );
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
};
/*в Вордпрессе 2 вида хуков: фильтры и действия (события). Фильтры нужны для фильтрации каких-либо значений: он получает какое-либо значение и должен его вернуть, измененное или нет. События - ничего не возвращают; например, это подключение скриптов*/

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('menus');

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);

function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main') {
        $atts['class'] = 'header__nav-item';

        if ($item->current) {
            $atts['class'] .= ' header__nav-item-active';
        }

        if( $item->ID === 186 && ( in_category( 'soft_toys' ) || in_category( 'edu_toys' ))){
            $atts['class'] .= ' header__nav-item-active';
        }
    };
    return $atts;
}

function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyDE07cazm16AfC937Vs5wMwIWlUmn_2UeI'; // Ваш ключ Google API
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

?>