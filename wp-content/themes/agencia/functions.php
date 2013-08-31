<?php

add_theme_support( 'post-thumbnails', array( 'post','noticia','cliente','portifolio' ) );

add_image_size( 'thumb_portifa', 345, 460, true );
add_image_size( 'thumbnail_blog', 470, 277, true );

set_post_thumbnail_size( 300, 191, true ); 

add_filter( 'wpcf7_form_class_attr', 'wildli_custom_form_class_attr' );
function wildli_custom_form_class_attr( $class ) {
	$class .= ' row contato';
	return $class;
}

function maisPortfolio(){
	get_template_part('mais_portfolio');
	die();
}
	//Adiciona a funcao extra votos aos hooks ajax do WordPress.
add_action('wp_ajax_maisPortfolio', 'maisPortfolio');
add_action('wp_ajax_nopriv_maisPortfolio', 'maisPortfolio');


function getMaisNoticias(){
	get_template_part('mais_noticias');
	die();
}
//Adiciona a funcao extra votos aos hooks ajax do WordPress.
add_action('wp_ajax_getMaisNoticias', 'getMaisNoticias');
add_action('wp_ajax_nopriv_getMaisNoticias', 'getMaisNoticias');


?>