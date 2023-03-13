<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_640731a873b03',
	'title' => 'COLABORADORES',
	'fields' => array(
		array(
			'key' => 'field_640731a8254bb',
			'label' => 'Colaborador',
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
			'key' => 'field_640731e75d184',
			'label' => 'Cargo',
			'name' => 'cargo',
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
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_6407320d5d185',
			'label' => 'Imagem 1',
			'name' => 'img_colab_1',
			'aria-label' => '',
			'type' => 'image_aspect_ratio_crop',
			'instructions' => 'Layout do Figma:
	 width: 300px
	 height: 300px
RETINA (preferencialmente)
	 width: 600px
	 height: 600px
TIPO de arquivo - WEBP
Máx tamanho do arquivo - 200kb
Tamanho preferencialmente - 50kb
OBS: para otimizar a imagem, utilize o conversão automatica do wordpress na ABA Mídia, ele irá converter a imagem automaticamente em webp',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'crop_type' => 'aspect_ratio',
			'aspect_ratio_width' => 600,
			'aspect_ratio_height' => 600,
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => 300,
			'min_height' => 300,
			'min_size' => '',
			'max_width' => 600,
			'max_height' => 600,
			'max_size' => '.2',
			'mime_types' => 'webp',
		),
		array(
			'key' => 'field_640b5c098b63d',
			'label' => 'Imagem 2',
			'name' => 'img_colab_2',
			'aria-label' => '',
			'type' => 'image_aspect_ratio_crop',
			'instructions' => 'Layout do Figma:
	 width: 300px
	 height: 300px
RETINA (preferencialmente)
	 width: 600px
	 height: 600px
TIPO de arquivo - WEBP
Máx tamanho do arquivo - 200kb
Tamanho preferencialmente - 50kb
OBS: para otimizar a imagem, utilize o conversão automatica do wordpress na ABA Mídia, ele irá converter a imagem automaticamente em webp',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'crop_type' => 'aspect_ratio',
			'aspect_ratio_width' => 600,
			'aspect_ratio_height' => 600,
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '.2',
			'mime_types' => 'webp',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'colaboradores',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 1,
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'acfe_categories' => array(
		'post-type' => 'POST TYPE',
	),
	'modified' => 1678466070,
));

endif;