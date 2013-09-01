<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Design Print</title>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/estilo.css" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/style.css" />

  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>

<body>

  <div id="header">

    <div class="menu" style="z-index:100;">
      <div class="container">
        <div class="social">
          <a href="https://www.facebook.com/designprintpropaganda" class="facebook"></a>
          <a href="https://twitter.com/designprintam" class="twitter"></a>
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

<!-- container for the slides -->
<div class="images" style="min-height:530px;">
  <?php
    $args = array('post_type'=>'destaque', 'numberposts'=>5, 'orderby' => 'date', 'order' => 'ASC');

    $my_posts = get_posts($args);
  ?>

  <?php foreach($my_posts as $i => $post): ?>
    <?php $image = wp_get_attachment_image_src(get_field('foto_destaque'), 'high'); ?>
        <div class="slide slidetab_header"
        style="background: url('<?php echo $image[0]; ?>') no-repeat center top;" rel="#lightbox_header<?php echo $post->ID ?>">

        <div class="text">
        </div>
      </div>

      <!-- overlay -->
      <div class="simple_overlay" id="lightbox_header<?php echo $post->ID ?>">
        <div class="container">
          <div class="span12" style="margin:20px 0 0 0;">
            <div class="span4">
              <?php if(get_field('id_youtube') != null): ?>
                <?php  echo '<iframe width="300" height="400" src="http://www.youtube.com/embed/'. get_field('id_youtube')  . '?rel=0" frameborder="0" allowfullscreen></iframe>';?>
              <?php elseif(get_field('iframe_soundcloud') != null): ?>
                <?php  echo get_field('iframe_soundcloud');?>
              <?php else: ?>
                <?php $image300 = wp_get_attachment_image_src(get_field('foto_345x460'), 'thumb_portifa'); ?>
                <img src="<?php echo $image300[0]; ?>" alt="<?php echo get_the_title(get_field('logo')) ?>"/>
              <?php endif; ?>

            </div>
            <div class="span7">
              <a href="#" class="fechar"></a>
              <h2><?php the_title();?></h2>

              <div class="autor">
                <?php $category = get_the_category($post-ID);
echo $category[0]->cat_name;?>
              </div>

              <div class="texto">
                <p>
                  <?php echo get_field('descricao'); ?>
                </p>

                <p>
                  <strong>Título:</strong> <?php the_title();?><br>
                  <strong>Cliente:</strong> <?php echo get_field('cliente'); ?> <br>
                  <strong>Criação:</strong> <?php echo get_field('criacao'); ?> <br>
                  <strong>Direção de criação:</strong> <?php echo get_field('direcao'); ?> <br>
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
      </div><!-- end overlay -->
  <?php endforeach;?>
</div>

<div class="nav">
  <div>
   <a href="javascript:void(0);" class="backward prev"></a>
   <a href="javascript:void(0);" class="forward next"></a>
   <div class="slidetabs">
    <?php foreach($my_posts as $i => $post): ?>
      <a href="#" style="display:none;"></a>
    <?php endforeach;?>
  </div>
</div>
</div><!-- nav -->

</div>

<div style="clear:both;"></div>