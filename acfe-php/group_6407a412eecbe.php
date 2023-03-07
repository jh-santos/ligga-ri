<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6407a412eecbe',
	'title' => 'SOLUÇÕES V1',
	'fields' => array(
		array(
			'key' => 'field_6407a41306e41',
			'label' => 'SESSÃO 1',
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
			'hide_admin' => 0,
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_6407a4130a8e0',
			'label' => 'Sessão 1',
			'name' => 'modulo_03_1',
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
			'hide_admin' => 0,
			'layout' => 'block',
			'acfe_seamless_style' => 0,
			'acfe_group_modal' => 0,
			'sub_fields' => array(
				array(
					'key' => 'field_6407a4131d2b8',
					'label' => 'Inserir nessa sessão',
					'name' => 'campos_opcionais',
					'aria-label' => '',
					'type' => 'checkbox',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'choices' => array(
						'arq_down' => 'Arquivo para Download ( PDF)',
						'cta' => 'CTA',
					),
					'default_value' => array(
					),
					'return_format' => 'value',
					'allow_custom' => 0,
					'layout' => 'horizontal',
					'toggle' => 0,
					'save_custom' => 0,
				),
				array(
					'key' => 'field_6407a41320db2',
					'label' => 'Titulo',
					'name' => 'titulo_1',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_6407a41324a95',
					'label' => 'Descrição',
					'name' => 'titulo_2',
					'aria-label' => '',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'default_value' => '',
					'acfe_textarea_code' => 0,
					'maxlength' => '',
					'rows' => '',
					'placeholder' => '',
					'new_lines' => 'wpautop',
				),
				array(
					'key' => 'field_6407a413285a6',
					'label' => 'Imagem da Sessão',
					'name' => 'img',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => 'Layout do Figma: </br>
&nbsp;&nbsp;&nbsp;width: 562px </br>
&nbsp;&nbsp;&nbsp;height: 449px </br>
RETINA (preferencialmente)</br>
&nbsp;&nbsp;&nbsp;width: 1124px </br>
&nbsp;&nbsp;&nbsp;height: 898px </br>
TIPO de arquivo - WEBP</br>
Máx tamanho do arquivo - 300kb</br>
Tamanho preferencialmente - 50kb</br>
OBS: para otimizar a imagem, utilize o conversão automática do wordpress na ABA Mídia, ele irá converter a imagem automaticamente em webp',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '60',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'uploader' => '',
					'acfe_thumbnail' => 0,
					'return_format' => 'array',
					'min_width' => 560,
					'min_height' => 440,
					'min_size' => '',
					'max_width' => 1200,
					'max_height' => 900,
					'max_size' => '.3',
					'mime_types' => 'webp',
					'preview_size' => 'medium',
					'library' => 'all',
				),
				array(
					'key' => 'field_6407a4132c018',
					'label' => 'Arquivo PDF',
					'name' => 'arquivo_pdf',
					'aria-label' => '',
					'type' => 'file',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_6407a4131d2b8',
								'operator' => '==',
								'value' => 'arq_down',
							),
						),
					),
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'uploader' => '',
					'return_format' => 'array',
					'min_size' => '',
					'max_size' => '',
					'mime_types' => '',
					'library' => 'all',
				),
				array(
					'key' => 'field_6407a4132fab1',
					'label' => 'CTA',
					'name' => 'cta',
					'aria-label' => '',
					'type' => 'link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_6407a4131d2b8',
								'operator' => '==',
								'value' => 'cta',
							),
						),
					),
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'return_format' => 'array',
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
				'value' => 'pagina_solucoes.php',
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
	'modified' => 1678222392,
));

endif;