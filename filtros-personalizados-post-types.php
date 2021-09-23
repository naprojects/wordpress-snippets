<?php

//Este snippet sirve para agregar filtros por taxonomía que aplican sobre post types en particular

function filtro_personalizado_taxonomia_convenios()
{
    global $typenow;

    // En el siguiente arreglo añadimos la taxonomía que queremos mostrar.
    // Hay que poner el slug de la taxonomía
    $taxonomias = array('actividades', 'nro_de_convenio');

    // Debemos seleccionar el post type sobre el que se va a mostrar este filtro.
    if ($typenow == 'convenios_colectivos') {
        foreach ($taxonomias as $slug_taxonomia) {
            $taxonomia = get_taxonomy($slug_taxonomia);
            $nombre_taxonomia = $taxonomia->labels->name;
            $terms = get_terms($slug_taxonomia);
            if (count($terms) > 0) {
                echo "<select name='$slug_taxonomia' id='$slug_taxonomia' class='postform'>";
                echo "<option value=''>Mostrar $nombre_taxonomia</option>";
                foreach ($terms as $term) {
                    echo '<option value=' . $term->slug, $_GET[$slug_taxonomia] == $term->slug ? ' selected="selected"' : '', '>' . $term->name . ' (' . $term->count . ')</option>';
                }
                echo "</select>";
            }
        }
    }
}
add_action('restrict_manage_posts', 'filtro_personalizado_taxonomia_convenios');
