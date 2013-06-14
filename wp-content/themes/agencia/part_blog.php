<div id="blog" class="page">
	<div class="row">
		<h1 class="span5">
			<span>BLOG</span>
			<small>Compartilhamos ideias</small>
		</h1>

		<div class="menu span5 pull-right">
			<ul>
				<li><a href="#portfolio">PORTFÓLIO</a></li>
				<li><a href="#quemsomos">QUEM SOMOS</a></li>
				<li><a href="#clientes">CLIENTES</a></li>
				<li><a href="javascript:void(0);" class="focused">BLOG</a></li>
				<li><a href="#contato">CONTATO</a></li>
				<li class="topo"><a href="#header"><img src="<?php bloginfo('template_directory'); ?>/img/topo.png" alt="Topo"></a></li>
			</ul>
		</div>
	</div>


<div class="row mais btn_mais_blog">
	<a href="javascript:void(0);" onClick="carregaMaisBlog();"><img src="<?php bloginfo('template_directory'); ?>/img/mais.png" alt=""></a>
</div>

</div>

<script type="text/javascript">
	carregaMaisBlog();
	var count;

	function carregaMaisBlog(){
		count = $('.links .span4').size();
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