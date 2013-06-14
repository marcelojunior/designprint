<div id="portfolio" class="page">
	<div class="row">
		<h1 class="span5">
			<span>PORTFÓLIO</span>
			<small>Conheça nossos trabalhos recentes</small>
		</h1>

		<div class="select-cont">
          <!-- <select id="categorias" title="Categorias">
            <option value="2">ANÚNCIOS</option>
            <option value="3">OUTDOORS</option>
            <option value="4">EMBALAGENS</option>
            <option value="5">VÍDOES</option>
            <option value="6">SPOTS</option>
        </select> -->
        <select id="categorias" title="Categorias" name="category_list" class="styled-select">
        	<?php
        	$values = array(
        		`orderby` => `name`,
        		`order` => `ASC`,
        		`echo` => 1,
        		`selected` => $kat = get_query_var( `cat` ),
        		`name` => 'cat',
        		`id` => ``,
        		`taxonomy` => `category`
        		);
        	$categories = get_categories($values); 
        	foreach ($categories as $category) {
        		$option = '<option value="'.$category->cat_ID.'">';
        		$option .= $category->cat_name;
        		$option .= '</option>';
        		echo $option;
        	}
        	?>
        </select>
    </div>

    <div class="menu span5 pull-right">
    	<ul>
    		<li><a href="javascript:void(0);" class="focused">PORTFÓLIO</a></li>
    		<li><a href="#quemsomos">QUEM SOMOS</a></li>
    		<li><a href="#clientes">CLIENTES</a></li>
    		<li><a href="#blog">BLOG</a></li>
    		<li><a href="#contato">CONTATO</a></li>
    		<li class="topo"><a href="#header"><img src="<?php bloginfo('template_directory'); ?>/img/topo.png" alt="Topo"></a></li>
    	</ul>
    </div>
</div>


<div class="row mais btn_mais_port">
	<a href="javascript:void(0);" onClick="carregaMaisPort();"><img src="<?php bloginfo('template_directory'); ?>/img/mais.png" alt=""></a>
</div>
</div>
<script type="text/javascript">
			carregaMaisPort();
			var count_port;

            // Customização do select
            $(document).ready(function(){
                $('#categorias').SelectCustomizer(function(){
                  $.ajax({
                    type      : 'POST',
                    url: '<?php bloginfo("url"); ?>/wp-admin/admin-ajax.php',
                    data: 'action=maisPortfolio&cat_id='+$('#categorias_customselect').val()+'&ultimoIndice='+count_port,
                    dataType  : 'html',
                    success : function(txt){
                        $('#portfolio .imgs').remove();
                        $('.btn_mais_port').before(txt);
                    }
                  });
              });
            });

			function carregaMaisPort(){
				count_port = $('#portfolio .imgs > .span4').size();
				$.ajax({
					type      : 'POST',
					url: '<?php bloginfo("url"); ?>/wp-admin/admin-ajax.php',
					data: 'action=maisPortfolio&ultimoIndice='+count_port,
					dataType  : 'html',
					success : function(txt){
						$('.btn_mais_port').before(txt);
					}
				});
			};
			</script>