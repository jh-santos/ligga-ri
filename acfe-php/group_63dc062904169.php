<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_63dc062904169',
	'title' => 'HOME V1',
	'fields' => array(
		array(
			'key' => 'field_63dc06290dbc7',
			'label' => 'BANNER',
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
			'endpoint' => 1,
		),
		array(
			'key' => 'field_63dc06710dbc8',
			'label' => 'Banner',
			'name' => 'modulo_01',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'acfe_group_modal' => 1,
			'acfe_group_modal_close' => 0,
			'acfe_group_modal_button' => '',
			'acfe_group_modal_size' => 'full',
			'sub_fields' => array(
				array(
					'key' => 'field_63dc068d0dbc9',
					'label' => 'Slides',
					'name' => 'repetidor',
					'aria-label' => '',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_repeater_stylised_button' => 0,
					'layout' => 'table',
					'pagination' => 0,
					'min' => 0,
					'max' => 0,
					'collapsed' => '',
					'button_label' => 'Adicionar Linha',
					'rows_per_page' => 20,
					'sub_fields' => array(
						array(
							'key' => 'field_63dc069f0dbca',
							'label' => 'Imagem Desktop',
							'name' => 'img_desktop',
							'aria-label' => '',
							'type' => 'image',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'uploader' => 'wp',
							'acfe_thumbnail' => 0,
							'return_format' => 'array',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '.3',
							'mime_types' => 'png, webp',
							'preview_size' => 'medium',
							'parent_repeater' => 'field_63dc068d0dbc9',
						),
						array(
							'key' => 'field_63dc06cd0dbcb',
							'label' => 'Imagem Mobile',
							'name' => 'img_mobile',
							'aria-label' => '',
							'type' => 'image',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'uploader' => 'wp',
							'acfe_thumbnail' => 0,
							'return_format' => 'array',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '.2',
							'mime_types' => 'png, webp',
							'preview_size' => 'medium',
							'parent_repeater' => 'field_63dc068d0dbc9',
						),
					),
				),
			),
			'acfe_seamless_style' => 0,
		),
		array(
			'key' => 'field_63dc286f35b3b',
			'label' => 'Sessão 1',
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
			'key' => 'field_63dc287f35b3c',
			'label' => 'Documentos',
			'name' => 'modulo_02',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'acfe_seamless_style' => 0,
			'acfe_group_modal' => 0,
			'sub_fields' => array(
				array(
					'key' => 'field_63dc29523f884',
					'label' => 'Quantidade de Documentos apresentada por Categoria',
					'name' => 'quant_documentos',
					'aria-label' => '',
					'type' => 'number',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 5,
					'min' => 3,
					'max' => 10,
					'placeholder' => '',
					'step' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_63dc28d835b3d',
					'label' => 'Lado Esquerdo',
					'name' => 'grupo_1',
					'aria-label' => '',
					'type' => 'taxonomy',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'taxonomy' => 'categorias',
					'add_term' => 0,
					'save_terms' => 0,
					'load_terms' => 0,
					'return_format' => 'object',
					'field_type' => 'select',
					'allow_null' => 0,
					'acfe_bidirectional' => array(
						'acfe_bidirectional_enabled' => '0',
					),
					'multiple' => 0,
				),
				array(
					'key' => 'field_63dc29379f481',
					'label' => 'Lado Direito',
					'name' => 'grupo_2',
					'aria-label' => '',
					'type' => 'taxonomy',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'taxonomy' => 'categorias',
					'add_term' => 0,
					'save_terms' => 0,
					'load_terms' => 0,
					'return_format' => 'object',
					'field_type' => 'select',
					'allow_null' => 0,
					'acfe_bidirectional' => array(
						'acfe_bidirectional_enabled' => '0',
					),
					'multiple' => 0,
				),
			),
			'acfe_group_modal_close' => 0,
			'acfe_group_modal_button' => '',
			'acfe_group_modal_size' => 'large',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'pagina_home.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'block_editor',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'discussion',
		4 => 'comments',
		5 => 'featured_image',
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
		'pagina' => 'PAGINA',
	),
	'modified' => 1675373078,
));

endif;