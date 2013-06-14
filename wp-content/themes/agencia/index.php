<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="span12">

        <!-- incluindo part portifolio -->
        <?php get_template_part('part_portfolio'); ?>

        <!-- incluindo part quem somos -->
        <?php get_template_part('part_quem_somos'); ?>

        <!-- incluindo part clientes -->
        <?php get_template_part('part_clientes'); ?>

		<!-- -->
        <?php get_template_part('part_blog'); ?>

		<?php get_template_part('page-contato'); ?>

      </div><!-- span12 -->
    </div><!-- row -->
  </div> <!-- /container -->
<?php get_footer(); ?>