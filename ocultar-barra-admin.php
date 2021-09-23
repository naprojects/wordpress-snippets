<?php

//Oculta barra de admin para todos los tipos de usuarios

add_action('after_setup_theme', 'ocultar_admin_bar');
function ocultar_admin_bar()
{
    add_filter('show_admin_bar', '__return_false');
}
