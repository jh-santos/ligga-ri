<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_63402d82f117d',
	'title' => '- PAGINA- POST TYPE - MODELO PADRÃO',
	'fields' => array(
		array(
			'key' => 'field_6340348755e28',
			'label' => 'Configurações da Pagina',
			'name' => '',
			'aria-label' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_6340349555e29',
			'label' => 'Preload',
			'name' => 'preload_ativo',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Sim',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_63402d958f95a',
			'label' => 'S E O',
			'name' => '',
			'aria-label' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_634031cc054d2',
			'label' => 'Head',
			'name' => 'seo_head_pagina',
			'aria-label' => '',
			'type' => 'acfe_code_editor',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '//inicio no <head> usar tags <meta>',
			'mode' => 'text/html',
			'lines' => 1,
			'indent_unit' => 4,
			'maxlength' => '',
			'rows' => 4,
			'max_rows' => '',
			'return_entities' => 0,
		),
		array(
			'key' => 'field_634031f4054d3',
			'label' => 'Body',
			'name' => 'seo_body_pagina',
			'aria-label' => '',
			'type' => 'acfe_code_editor',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '//inicio depois de abrir o <body> conteudo ....',
			'mode' => 'text/html',
			'lines' => 1,
			'indent_unit' => 4,
			'maxlength' => '',
			'rows' => 4,
			'max_rows' => '',
			'return_entities' => 0,
		),
		array(
			'key' => 'field_63402da18f95b',
			'label' => 'Dados Estruturados da Pagina',
			'name' => 'dados_estruturados',
			'aria-label' => '',
			'type' => 'acfe_code_editor',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '// Dados estruturados usar a tag <script> conteudo </script>',
			'mode' => 'text/html',
			'lines' => 1,
			'indent_unit' => 4,
			'maxlength' => '',
			'rows' => 4,
			'max_rows' => '',
			'return_entities' => 0,
		),
		array(
			'key' => 'field_64022aed7b877',
			'label' => 'TAG H1',
			'name' => 'tag_h1',
			'aria-label' => '',
			'type' => 'acfe_code_editor',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'insira o conteudo da tag H1',
			'mode' => 'text/html',
			'lines' => 1,
			'indent_unit' => 4,
			'maxlength' => '',
			'rows' => 4,
			'max_rows' => '',
			'return_entities' => 0,
		),
		array(
			'key' => 'field_635f3ce13c7bb',
			'label' => 'DEV',
			'name' => '',
			'aria-label' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_635f3ceb3c7bc',
			'label' => 'Jquery - Document Ready - Footer',
			'name' => 'jquery_custom_footer',
			'aria-label' => '',
			'type' => 'acfe_code_editor',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '// Usar Jquery, função executada depois do carregamento da pagina ...',
			'mode' => 'javascript',
			'lines' => 1,
			'indent_unit' => 4,
			'maxlength' => '',
			'rows' => 4,
			'max_rows' => '',
			'return_entities' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'default',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'all',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'block_editor',
		1 => 'the_content',
		2 => 'discussion',
		3 => 'comments',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'acfe_categories' => array(
		'geral' => 'GERAL',
		'lp' => 'LP',
		'pagina' => 'PAGINA',
		'post-type' => 'POST TYPE',
	),
	'modified' => 1677868547,
));

endif;