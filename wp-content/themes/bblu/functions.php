<?php
//Cambior el logo de inicio de Sesion
add_action('login_head', 'custom_login_logo');
include('library/login-logo.php');
//Funciones para crear post y Caetegory personalizados
add_action('init', 'theme_custom_types');
include('library/custom-post-type.php');
//Texto de desarrollado por y el enlace a web de desarrollo
add_filter('admin_footer_text', 'left_admin_footer_text_output');
add_filter('update_footer', 'right_admin_footer_text_output', 11);
include('library/copyright.php');
//borrar dashboard y mensaje de actualizacion
//add_action('wp_dashboard_setup', 'custom_dashboard_widgets');
include('library/widget-delete.php');
//Debug para las consultas
include('library/debug.php');
//funcion para extraer la url del thumbnail
include('library/imgurl.php');
// funcion para el boton de withlist y add_to_cart
include('library/with.php');
//
include('library/pk_get_the_category.php');


function theme_custom_types() {
    
}


?>