<?php 
  the_post_thumbnail();
  the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
  the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
  the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
  the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)
  
  the_post_thumbnail( array(100,100) ); 
  
  add_theme_support( 'post-thumbnails' );
  

// Register Custom Post Type
function main_banner() {

	$labels = array(
		'name'                  => _x( 'Banners', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Banner', 'apk' ),
		'name_admin_bar'        => __( 'Post Type', 'apk' ),
		'archives'              => __( 'Items de Archivos', 'apk' ),
		'attributes'            => __( 'Atributos', 'apk' ),
		'parent_item_colon'     => __( 'artículo principal', 'apk' ),
		'all_items'             => __( 'Todos los items', 'apk' ),
		'add_new_item'          => __( 'Agregar nuevo item', 'apk' ),
		'add_new'               => __( 'Agregar Nuevo', 'apk' ),
		'new_item'              => __( 'Nuevo item', 'apk' ),
		'edit_item'             => __( 'Editar item', 'apk' ),
		'update_item'           => __( 'Actualizar Items', 'apk' ),
		'view_item'             => __( 'Vista del item', 'apk' ),
		'view_items'            => __( 'Vistas de los items', 'apk' ),
		'search_items'          => __( 'Buscar', 'apk' ),
		'not_found'             => __( 'No encontrado', 'apk' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'apk' ),
		'featured_image'        => __( 'Foto Principal', 'apk' ),
		'set_featured_image'    => __( 'Establecer imagen principal', 'apk' ),
		'remove_featured_image' => __( 'Remover foto principal', 'apk' ),
		'use_featured_image'    => __( 'Usar como foto principal', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Subida de este item', 'apk' ),
		'items_list'            => __( 'Lista de items', 'apk' ),
		'items_list_navigation' => __( 'items de lista de navegación', 'apk' ),
		'filter_items_list'     => __( 'Filtros de listas de items', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'Banner', 'apk' ),
		'description'           => __( 'Banner principal', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner', $args );

}
add_action( 'init', 'main_banner', 0 );

function carousel_informativo() {

	$labels = array(
		'name'                  => _x( 'informacion', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'informacion', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Informacion', 'apk' ),
		'name_admin_bar'        => __( 'Post Type', 'apk' ),
		'archives'              => __( 'Items de Archivos', 'apk' ),
		'attributes'            => __( 'Atributos', 'apk' ),
		'parent_item_colon'     => __( 'artículo principal', 'apk' ),
		'all_items'             => __( 'Todos los items', 'apk' ),
		'add_new_item'          => __( 'Agregar nuevo item', 'apk' ),
		'add_new'               => __( 'Agregar Nuevo', 'apk' ),
		'new_item'              => __( 'Nuevo item', 'apk' ),
		'edit_item'             => __( 'Editar item', 'apk' ),
		'update_item'           => __( 'Actualizar Items', 'apk' ),
		'view_item'             => __( 'Vista del item', 'apk' ),
		'view_items'            => __( 'Vistas de los items', 'apk' ),
		'search_items'          => __( 'Buscar', 'apk' ),
		'not_found'             => __( 'No encontrado', 'apk' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'apk' ),
		'featured_image'        => __( 'Foto Principal', 'apk' ),
		'set_featured_image'    => __( 'Establecer imagen principal', 'apk' ),
		'remove_featured_image' => __( 'Remover foto principal', 'apk' ),
		'use_featured_image'    => __( 'Usar como foto principal', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Subida de este item', 'apk' ),
		'items_list'            => __( 'Lista de items', 'apk' ),
		'items_list_navigation' => __( 'items de lista de navegación', 'apk' ),
		'filter_items_list'     => __( 'Filtros de listas de items', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'informacion', 'apk' ),
		'description'           => __( 'carousel-informativo', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields','thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-editor-help',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'informacion', $args );

}
add_action( 'init', 'carousel_informativo', 0 );