<?php
	function blggn_child_enqueue_styles() {

		// Enqueue Stylesheets
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

		// Enqueue JS
		wp_enqueue_script( 'blggn_init', get_template_directory_uri() . '/assets/js/init.js', array('jquery'), null, true );
		wp_enqueue_script( 'blggn_scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true );

	}
	add_action( 'wp_enqueue_scripts', 'blggn_child_enqueue_styles' );

	function blggn_child_admin_scripts() {
		wp_enqueue_style( 'blggn_admin_css', get_template_directory_uri() . '/assets/css/admin-style.css', null, true );
		wp_enqueue_script( 'blggn_admin_js', get_template_directory_uri() . '/assets/js/admin.js', array('jquery'), null, true );
	}
	add_action( 'admin_enqueue_scripts', 'blggn_child_admin_scripts' );

	// Passa o editor do Yoast SEO para baixo dos campos personalizados
	function move_yoast_below_acf() {
    	return 'low';
	}
	add_filter( 'wpseo_metabox_prio', 'move_yoast_below_acf');

	//////////////////////////////////////////
	//  Theme customization starts here
	/////////////////////////////////////////

	function get_receitas($param) {
		global $post;
		$postid = $post->id;

		$getfield1 = get_field( "descricao", $postid);
		if ($getfield1 != "") {
			$content = $getfield1;
		}
		$getfield2 = get_field( "descritivo_produto", $postid);
		if ($getfield2 != "") {
			$content .= "<h4>Ingredientes</h4><br>" . $getfield2;	
		}
		$getfield3 = get_field( "ingredientes", $postid);
		if ($getfield3 != "") {
			$content .= "<h4>Modo de Preparo</h4><br>" . $getfield3;	
		}
		$getfield4 = get_field( "modo_de_preparo", $postid);
		if ($getfield4 != "") {
			$content .= "<h4>Rendimento</h4><br>" . $getfield4;	
		}
		$getfield5 = get_field( "rendimento", $postid);
		if ($getfield5 != "") {
			$content .= "<h4>Calorias por Porção</h4><br>" . $getfield5;	
		}
		$getfield6 = get_field( "calorias_por_porção", $postid);
		if ($getfield6 != "") {
			$content .= "<h4>É bom saber</h4><br>" . $getfield6;	
		}
		$getfield7 = get_field( "eh_bom_saber", $postid);
		if ($getfield7 != "") {
			$content .= "<h4>Mundo Verde Indica</h4><br><img src='" . $getfield7 . "'>"; 	
		}
		$getfield8 = get_field( "mundo_verde_indica", $postid);
		if ($getfield8 != "") {
			$content .= "<img src='" . $getfield8 . "'>"; 
		}
		$getfield9 = get_field( "indica_link", $postid);
		if ($getfield9 != "") {
			$content .= "<a href='". $getfield9 . "'></a>"; 	
		}
		$getfield10 = get_field( "mundo_verde_indica_2", $postid);
		if ($getfield10 != "") {
			$content .= "<img src='" . $getfield10 . "'>";
		}
		$getfield11 = get_field( "indica_link_2", $postid);
		if ($getfield11 != "") {
			$content .= "<a href='". $getfield11 . "'></a>";
		}
		$getfield12 = get_field( "mundo_verde_indica_3", $postid);
		if ($getfield12 != "") {
			$content .= "<img src='" . $getfield12 . "'>"; 	
		}
		$getfield13 = get_field( "indica_link_3", $postid);
		if ($getfield13 != "") {
			$content .= "<a href='". $getfield13 . "'></a>";	
		}
		$getfield14 = get_field( "beneficios", $postid);
		if ($getfield14 != "") {
			$content .= "<h4>Registro no Ministério da Saúde</h4><br>" . $getfield14;	
		}
		$getfield15 = get_field( "registro_no_ministerio_da_saude", $postid);
		if ($getfield15 != "") {
			$content .= "<h4>Registro no Ministério da Agricultura</h4><br>" . $getfield15;	
		}
		$getfield16 = get_field( "registro_no_ministerio_da_agricultura", $postid);
		if ($getfield16 != "") {
			$content .= "<h4>Modo de Usar</h4><br>" . $getfield16;	
		}
		$getfield17 = get_field( "modo_de_usar", $postid);
		if ($getfield17 != "") {
			$content .= "<h4>Informação Nutricional</h4><br>" . $getfield17;	
		}
		$getfield18 = get_field( "informação_nutricional", $postid);
		if ($getfield18 != "") {
			$content .= "<h4>Sugestão de Consumo</h4><br>" . $getfield18;	
		}
		$getfield19 = get_field( "sugestão_de_consumo", $postid);
		if ($getfield19 != "") {
			$content .= "<h4>Contra Indicação</h4><br>" . $getfield19;	
		}
		$getfield20 = get_field( "contra_indicacao", $postid);
		if ($getfield20 != "") {
			$content .= "<h4>Composição dos Ingredientes</h4><br>" . $getfield20;	
		}
		$getfield21 = get_field( "composição_ingredientes", $postid);
		if ($getfield21 != "") {
			$content .= "<h4>Apresentação</h4><br>" . $getfield21;	
		}
		$getfield22 = get_field( "apresentacao", $postid);
		if ($getfield22 != "") {
			$content .= "<h4>Modo de Conservação</h4><br>" . $getfield22;	
		}
		$getfield23 = get_field( "modo_de_conservacao", $postid);
		if ($getfield23 != "") {
			$content .= "<h4>Fabricante</h4><br>" . $getfield23;
		}
		$getfield24 = get_field( "fabricante", $postid);
		if ($getfield24 != "") {
			$content .= "<h4>Validade</h4><br>" . $getfield24;	
		}
		$getfield25 = get_field( "validade", $postid);
		if ($getfield25 != "") {
			$content .= "<h4>Vendas Adicionais</h4><br>" . $getfield25;	
		}
		$getfield26 = get_field( "vendas_adicionais", $postid);
		if ($getfield26 != "") {
			$content .= "<h4>Preço</h4><br>" . $getfield26;	
		}
		$getfield27 = get_field( "imagem_preço", $postid);
		if ($getfield27 != "") {
			$content .= "<img src='" . $getfield27 . "'>"; 	
		}
		$getfield28 = get_field( "nivel", $postid);
		if ($getfield28 != "") {
			$content .= "<h4></h4><br>" . $getfield28;	
		}

	 	return $content;
	}
	add_shortcode('receitas', 'get_receitas');


