<?php

add_filter('gettext',  'wps_translate_words_array');
add_filter('ngettext',  'wps_translate_words_array');

function wps_translate_words_array($translated)
{

    $words = array(
        // 'palabra a traducir' = > 'traducción'
        'Remember Me' => 'Recordar',
        'Lost your password?' => '¿Olvidaste tu contraseña?',
        '¿Has olvidado tu contraseña?' => '¿Olvidaste tu contraseña?',
        'Recuérdame' => 'Recordar',
        'Por favor, introduce tu nombre de usuario o dirección de correo electrónico. Recibirás un mensaje de correo electrónico con instrucciones sobre cómo restablecer tu contraseña.' => 'Por favor, introducí tu dirección de correo electrónico. Recibirás un mensaje de correo electrónico con instrucciones sobre cómo restablecer tu contraseña.',
        'Nombre de usuario o correo electrónico' => 'Correo electrónico de ingreso a Legales',
    );

    $translated = str_ireplace(array_keys($words),  $words,  $translated);
    return $translated;
}
