<?php
/*
Template Name: Contato
*/?>
<div id="contato" class="page contato">
	<div class="row">
		<h1 class="span7">
			<span>CONTATO</span>
			<small>Fique a vontade para enviar sua mensagem</small>
		</h1>

		<div class="menu span5 pull-right">
			<ul>
				<li><a href="#portfolio">PORTFÓLIO</a></li>
				<li><a href="#quemsomos">QUEM SOMOS</a></li>
				<li><a href="#clientes">CLIENTES</a></li>
				<li><a href="#blog">BLOG</a></li>
				<li><a href="javascript:void(0);" class="focused">CONTATO</a></li>
				<li class="topo"><a href="#header"><img src="<?php bloginfo('template_directory'); ?>/img/topo.png" alt="Topo"></a></li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="span5">

			<?php if(have_posts()): ?>
			<?php while(have_posts()):the_post(); ?>
			<?php  the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>

			<script type="text/javascript">
				$(document).ready(function(){
					$('.wpcf7-not-valid-tip-no-ajax').addClass('span3 erro_form')
						.css('color','red').css('font-size','10px').css('margin-top','-5px').css('margin-bottom','10px');
					$('.wpcf7-mail-sent-ok').addClass('span3').css('color','green').css('margin','10px 20px');
					$('.wpcf7-validation-errors').remove();
				});
			</script>
		</div>

		<div class="span5 pull-right">
            <a href="http://goo.gl/maps/pYtnD" class="mapa" target="_blank"></a>
        </div>

	</div>

</div>