<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8" />
	<title>Design Print</title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/estilo.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/style.css" />

	<script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
</head>

<body>

	<div id="header-blog">
		<div class="menu">
			<div class="social">
				<a href="https://www.facebook.com/designprintpropaganda" class="facebook"></a>
				<a href="#" class="twitter"></a>
			</div>

			<a href="<?php bloginfo('url'); ?>" class="logo">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Design Print">
			</a>

			<div class="menu-header">
				<ul>
					<?php if(is_home()): ?>
					<li><a href="#portfolio">PORTFÓLIO</a></li>
					<li><a href="#quemsomos">QUEM SOMOS</a></li>
					<li><a href="#clientes">CLIENTES</a></li>
					<li><a href="#blog">BLOG</a></li>
					<li><a href="#contato">CONTATO</a></li>
				<?php else: ?>
				<li><a href="<?php bloginfo('url'); ?>/#portfolio">PORTFÓLIO</a></li>
				<li><a href="<?php bloginfo('url'); ?>/#quemsomos">QUEM SOMOS</a></li>
				<li><a href="<?php bloginfo('url'); ?>/#clientes">CLIENTES</a></li>
				<li><a href="<?php bloginfo('url'); ?>/#blog">BLOG</a></li>
				<li><a href="<?php bloginfo('url'); ?>/#contato">CONTATO</a></li>
			<?php endif; ?>
		</ul>
	</div>
</div>


</div>

<?php get_template_part('loop-noticias-blog');?>

<?php get_footer(); ?>