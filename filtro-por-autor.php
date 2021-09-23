<?php

//En este caso se crea un filtro de autor para todos los post types

function filtrar_por_autor()
{
	$params = array(
		'name' => 'author', // Este es el nombre del atributo para filtrar <select>
		'show_option_all' => 'Todos los autores', // label
		'role__not_in' => array('role' => 'Subscriber') // Se excluyen los usuarios suscriptores de esta lista
	);

	if (isset($_GET['user']))
		$params['selected'] = $_GET['user']; // elegir usuario seleccionado con variable $_GET

	wp_dropdown_users($params); // imprimir lista de autores
}
add_action('restrict_manage_posts', 'filtrar_por_autor');
