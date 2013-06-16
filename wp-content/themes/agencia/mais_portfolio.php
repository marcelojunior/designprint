<?php
$cat_id = $_POST["cat_id"];
$ultimoIndice = $_POST['ultimoIndice'];

if($cat_id != null){
	if($cat_id == 1){
		$args = array(
		'posts_per_page'  => 6,
		'post_type'=>'portifolio',
		'offset'=> 0,
		'numberposts'=>-1,
		'orderby' => 'date',
		'order' => 'DESC'
		);
	}else{
		$args = array(
		'posts_per_page'  => 6,
		'post_type'=>'portifolio',
		'offset'=> 0,
		'numberposts'=>-1,
		'orderby' => 'date',
		'order' => 'DESC',
		'category' => $cat_id
		);
	}
}else{
	$args = array(
		'posts_per_page'  => 6,
		'post_type'=>'portifolio',
		'offset'=> $ultimoIndice,
		'numberposts'=>6,
		'orderby' => 'date',
		'order' => 'DESC'
		);
}

$my_port = get_posts($args);
?>

<div class="row imgs">

	<?php foreach($my_port as $i => $post): ?>

	<a href="javascript:void(0);" class="span4" rel="#lightbox_<?php echo $post->ID ?>">
		<!-- VERIFICAR SE EH VIDEO, AUDIO, OU FOTO -->
		<?php if(get_field('foto_port_345x460') != null):?>
			<?php $image = wp_get_attachment_image_src(get_field('foto_port_345x460'),'full'); ?>
			<img src="<?php echo image_resize_crop($image[0],300,191); ?>" alt="<?php echo get_the_title(get_field('logo')) ?>" />
			<img src="<?php bloginfo('template_directory'); ?>/img/portfolio-hover.png" class="hover">
		<?php endif; ?>

		<?php if(get_field('id_youtube_port') != null):?>
			<?php $image = wp_get_attachment_image_src(get_field('miniatura_foto_video'),'full'); ?>
			<img src="<?php echo $image[0]; ?>"/>
			<img src="<?php bloginfo('template_directory'); ?>/img/video-hover.png" class="hover">
		<?php endif; ?>

		<?php if(get_field('iframe_sound_cloud_port') != null):?>
			<img src="<?php bloginfo('template_directory'); ?>/img/soundcloud-logo.jpg" />
			<img src="<?php bloginfo('template_directory'); ?>/img/video-hover.png" class="hover">
		<?php endif; ?>
	</a>


	<!-- overlay -->
	<div class="simple_overlay" id="lightbox_<?php echo $post->ID ?>">
		<div class="container">
			<div class="span12" style="margin:20px 0 0 0;">
				<div class="span5">
					<?php if(get_field('id_youtube_port') != null): ?>
						<?php  echo '<iframe width="300" height="400" src="http://www.youtube.com/embed/'. get_field('id_youtube_port')  . '?rel=0" frameborder="0" allowfullscreen></iframe>';?>
					<?php elseif(get_field('iframe_sound_cloud_port') != null): ?>
						<?php  echo get_field('iframe_sound_cloud_port');?>
					<?php else: ?>
						<?php $image345 = wp_get_attachment_image_src(get_field('foto_port_345x460'), 'thumb_portifa_over'); ?>
						<img src="<?php echo image_resize_crop($image345[0],345,430); ?>" alt="<?php echo get_the_title(get_field('logo')) ?>"/>
					<?php endif; ?>
				</div>
				<div class="span6">
					<a href="#" class="fechar"></a>
					<h2><?php the_title();?></h2>

					<div class="autor">
<?php
$categoria = get_the_category();
$nomeCategoria = $categoria[0]->cat_name;
echo $nomeCategoria;
?>
</div>

					<div class="texto">
						<p>
							<?php echo get_field('descricao'); ?>
						</p>

						<p>
							<strong>Título:</strong> <?php the_title();?><br>
							<strong>Cliente:</strong> <?php echo get_field('cliente'); ?> <br>
							<strong>Criação:</strong> <?php echo get_field('criacao'); ?> <br>
							<strong>Direção de criação:</strong> <?php echo get_field('direcao_criacao'); ?> <br>
							<strong>Atendimento:</strong> <?php echo get_field('atendimento'); ?>
						</p>
					</div>

					<div class="social">
						<a href="javascript:void(0);" style="display:inline;"><img src="<?php bloginfo('template_directory'); ?>/img/icon-fb.png" alt="" style="width:20px;height:20px;margin:5px;"/></a>
						<a href="javascript:void(0);" style="display:inline;"><img src="<?php bloginfo('template_directory'); ?>/img/icon-twitter.png" alt="" style="width:20px;height:20px;margin:5px;"/></a>
					</div>
				</div>

			</div>
		</div>
	</div>
<?php endforeach; ?>
</div><!-- imgs -->