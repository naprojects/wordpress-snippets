<?php

//Elimina el logo de Wordpress que se encuentra en wp-admin en el extremo superior izquierdo

function eliminar_logo_wp()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'eliminar_logo_wp');
