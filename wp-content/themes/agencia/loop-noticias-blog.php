<div class="container ">

    <div class="row">
      <div class="span12">

        <div id="blog" class="page">
          <div class="row">
            <h1 class="span5">
              <span>BLOG</span>
              <small>Compartilhamos ideias</small>
              <br>
            </h1>
          </div>

		<?php if(have_posts()): ?>
 			<?php while(have_posts()):the_post(); ?>

          <div class="row">
            <div class="span6 images_blog">
              	<?php $image = wp_get_attachment_image_src(get_field('foto_noticia'), 'full'); ?>
				        <img src="<?php echo image_resize_crop($image[0],460,277); ?>" alt="<?php echo the_title(); ?>" style="display: block; margin-bottom: 30px;"/>
                <?php if(get_field('link_video_youtube') != null): ?>
              	   <iframe width="460" height="277" src="<?php echo get_field('link_video_youtube'); ?>" frameborder="0" allowfullscreen></iframe>
                <?php endif; ?>
            </div>

            <div class="span5 pull-right">
              <h2><?php the_title(); ?></h2>

              <div class="autor">
                <?php echo get_the_author(); ?>
              </div>

              <div class="texto">
                <p>
                	<?php the_content(); ?>
                </p>
              </div>

              <div class="social">
                <a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank"><img src="/designprint/img/icon-fb.png" alt=""/></a>
                <a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php the_title(); ?> - <?php echo get_permalink(); ?>" target="_blank"><img src="/designprint/img/icon-twitter.png" alt=""/></a>
              </div>

              <!-- <div class="tags">
                Tag1, Tag2, Tag3
              </div> -->

            </div>
          </div>
		<?php endwhile; ?>
 	<?php  endif; ?>

          <div class="row links">
            <div class="span12">
              <h3>Outras ideias</h3>
            </div>
            <?php
            	$args = array('post_type'=>'noticia', 'numberposts'=>3, 'orderby' => 'date', 'order' => 'DESC');
		 		$my_posts = get_posts($args);
		 	?>
		 	<?php foreach($my_posts as $i => $post): ?>
      <div class="items_blog">
				 <a href="<?php echo get_permalink(); ?>" class="span4">
				 	<?php $image = wp_get_attachment_image_src(get_field('foto_noticia'), 'medium'); ?>
				 	<img src="<?php echo image_resize_crop($image[0],300,191); ?>" alt="<?php echo the_title(); ?>" />
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
          </div>
            <?php endforeach;?>
          </div>

          <div class="row mais btn_mais_blog">
            <a href="javascript:void(0);" onClick="carregaMaisSingle();"><img src="<?php bloginfo('template_directory'); ?>/img/mais.png" alt=""></a>
          </div>
        </div>


      </div>
    </div>
  </div> <!-- /container -->
<script type="text/javascript">
  carregaMaisSingle();
  var count;

  function carregaMaisSingle(){
    count = $('.row .links .span4').size();
    $.ajax({
      type      : 'POST',
      url: '<?php bloginfo("url"); ?>/wp-admin/admin-ajax.php',
      data: 'action=getMaisNoticias&indice_ultimo=' + count,
      dataType  : 'html',
      success : function(txt){
        $('.btn_mais_blog').before(txt);
      }
    });
  };
</script>