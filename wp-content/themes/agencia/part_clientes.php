<div id="clientes" class="page">
	<img src="<?php bloginfo('template_directory'); ?>/img/ralador.png" class="ralador">
	<div class="row">
		<h1 class="span3">
			<span>CLIENTES</span>
			<small>É por eles que a gente rala</small>
		</h1>

		<div class="menu span5 pull-right">
			<ul>
				<li><a href="#portfolio">PORTFÓLIO</a></li>
				<li><a href="#quemsomos">QUEM SOMOS</a></li>
				<li><a href="javascript:void(0);" class="focused">CLIENTES</a></li>
				<li><a href="#blog">BLOG</a></li>
				<li><a href="#contato">CONTATO</a></li>
				<li class="topo"><a href="#header"><img src="<?php bloginfo('template_directory'); ?>/img/topo.png" alt="Topo"></a></li>
			</ul>
		</div>
	</div>

	<div class="logos">
		<?php
			$args = array('post_type'=>'cliente', 'numberposts'=>-1, 'orderby' => 'date', 'order' => 'DESC');
			$my_posts = get_posts($args);
			$cont = 1;
		?>
		<?php foreach($my_posts as $i => $post): ?>

			<?php if($cont == 1): ?>
				<div class="items">
			<?php endif; ?>

			<?php if($cont <= 18): ?>
				<a href="<?php echo the_field('link_logo'); ?>" target="_blanck" alt="<?php echo $i; ?>">
					<?php $image = wp_get_attachment_image_src(get_field('logo'),'thumbnail'); ?>
					<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('logo')) ?>" >
				</a>
				<?php $cont ++; ?>
			<?php else: ?>
				</div><!--  fecha items -->
				<?php $cont = 1; ?>
			<?php endif; ?>

			<?php if($i == (count($my_posts) - 1)): ?>
				</div><!--  fecha items -->
			<?php endif; ?>
		<?php endforeach;?>
	</div>

	<div class="nav">
		<div>
			<!-- "previous slide" button -->
			<a href="javascript:void(0);" class="backward prev"></a>
			<!-- "next slide" button -->
			<a href="javascript:void(0);" class="forward next"></a>
			<div class="slidetabs_clientes">

			<?php
				$inteiroDivisao = 0;
				if(count($my_posts) % 18 == 0){
					$inteiroDivisao = (int)(count($my_posts) / 18);
				}else{
					$inteiroDivisao = (int)(count($my_posts) / 18) + 1;
				}
			?>
			<?php
		    	for($x = 0; $x < $inteiroDivisao; $x++){
			   		echo  '<a href="#" style="display:none;"></a>';
			  	};
		    ?>
		</div>
	</div>
</div><!-- nav -->
</div>