<div class="row links">
	<?php
	$indice_ultimo = $_POST['indice_ultimo'];

	$args = array('posts_per_page'  => 3,'post_type'=>'noticia', 'offset'=> $indice_ultimo, 'numberposts'=>3, 'orderby' => 'date', 'order' => 'DESC');

	$my_posts = get_posts($args);

	?>

	<?php foreach($my_posts as $i => $post): ?>

	<a href="<?php echo get_permalink(); ?>" class="span4">
		<?php $image = wp_get_attachment_image_src(get_field('foto_noticia'), 'medium'); ?>
		<img src="<?php echo $image[0]; ?>" alt="<?php echo the_title(); ?>" />
		<!-- <img src="http://placehold.it/300x191" alt=""/> -->
		<img src="<?php bloginfo('template_directory'); ?>/img/portfolio-hover.png" class="hover">
		<div>
			<p>
				<?php echo the_title(); ?>
			</p>

			<p class="leiamais">
				LEIA MAIS
                  <!--
                    <a href="javascript:void(0);"><img src="<?php //bloginfo('template_directory'); ?>/img/icon-fb.png" alt=""/></a>
                    <a href="javascript:void(0);"><img src="<?php //bloginfo('template_directory'); ?>/img/icon-twitter.png" alt=""/></a>
                -->
            </p>
		</div>
	</a>
	<?php endforeach;?>
</div>