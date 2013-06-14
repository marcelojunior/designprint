<?php $cat_atual =  single_cat_title("", false); ?>
<?php 

	if ($cat_atual == "Video") {

		$cat = get_category_by_slug("video");

		$id = $cat->term_id;

	}

	?>
<div class="row imgs">
		<?php
			$args = array('post_type'=>'portifolio', 'numberposts'=>6, 'orderby' => 'date', 'order' => 'DESC', 'category' => $id);

			$my_posts = get_posts($args);
		?>

		<?php foreach($my_posts as $i => $post): ?>
			<a href="javascript:void(0);" class="span4" rel="#lightbox_<?php echo $i ?>">
				<!-- VERIFICAR SE EH VIDEO, AUDIO, OU FOTO -->
				<?php if(get_field('midia_foto') != null):
					$image = wp_get_attachment_image_src(get_field('midia_foto'));?>
					<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('logo')) ?>" />
				<?php endif; ?>

				<?php if(get_field('midia_video') != null):?>
					<?php echo get_field('midia_video'); ?>
				<?php endif; ?>

				<img src="<?php bloginfo('template_directory'); ?>/img/portfolio-hover.png" class="hover">
			</a>


			<!-- overlay -->
			<div class="simple_overlay" id="lightbox_<?php echo $i ?>">
				<div class="eng_foto">
					<?php $image = wp_get_attachment_image_src(get_field('midia_foto'),'full');?>
					<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('logo')) ?>" />
				</div>
				<div class="conteudo_port">
					<h2><?php echo the_title(); ?></h2>
					<p><?php echo get_the_author(); ?></p>
				</div>
			</div>

		<?php endforeach; ?>
	</div>