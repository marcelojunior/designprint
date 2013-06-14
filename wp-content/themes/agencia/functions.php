<?php
	add_filter( 'wpcf7_form_class_attr', 'wildli_custom_form_class_attr' );
	function wildli_custom_form_class_attr( $class ) {
		$class .= ' row contato';
		return $class;
	}

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'cliente-thumb', 155, 100 ); // Soft Crop Mode
	add_image_size( 'port-thumb', 300, 191, true );

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