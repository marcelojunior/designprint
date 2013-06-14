<div id="footer-top">
    <a href="#header"><img src="<?php bloginfo('template_directory'); ?>/img/footer-topo.png" alt="Voltar ao topo"></a>
</div>

<footer>
    <div class="container">
        <img src="<?php bloginfo('template_directory'); ?>/img/bg-footer.png" class="g"/>
      <div class="menu clearfix">

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

    <div class="social">
      <a href="https://www.facebook.com/designprintpropaganda" class="facebook"></a>
      <a href="#" class="twitter"></a>
  </div>

</div>

<div class="info clearfix">
    Copyright 2013 - Todos os direitos reservados
    <a href="http://magee.com.br/" target="_blank" class="magee"><img src="<?php bloginfo('template_directory'); ?>/img/magee.png" alt=""></a>
</div>


</div>
</footer>

    <script src="<?php bloginfo('template_directory'); ?>/js/application.js"></script>

      <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
  <script src="http://autobahn.tablesorter.com/jquery.tablesorter.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/google-code-prettify/prettify.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery/jquery.scrollTo.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery/jquery.nav.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery/jquery.jparallax.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery/jquery.selectCustomizer.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/application.js"></script>
  <script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/comment-reply.min.js?ver=3.5.1'></script>
</body>
</html>