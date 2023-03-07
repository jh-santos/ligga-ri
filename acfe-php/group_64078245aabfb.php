<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_64078245aabfb',
	'title' => 'BANNER TIPO 3',
	'fields' => array(
		array(
			'key' => 'field_64078245565f7',
			'label' => 'Banner',
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
			'key' => 'field_640783ed84dd6',
			'label' => 'Banner Principal',
			'name' => 'modulo_01_1',
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
			'acfe_group_modal_size' => 'large',
			'sub_fields' => array(
				array(
					'key' => 'field_640783ed84dd9',
					'label' => 'Imagem Desktop',
					'name' => 'img_desktop',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => 'Layout do Figma: </br>
&nbsp;&nbsp;&nbsp;width: 1366px </br>
&nbsp;&nbsp;&nbsp;height: 640px </br>
RETINA (preferencialmente)</br>
&nbsp;&nbsp;&nbsp;width: 2732px </br>
&nbsp;&nbsp;&nbsp;height: 1280px </br>
TIPO de arquivo - WEBP</br>
Máx tamanho do arquivo - 500kb</br>
Tamanho preferencialmente - 100kb</br>
OBS: para otimizar a imagem, utilize o conversão automatica do wordpress na ABA Mídia, ele irá converter a imagem automaticamente em webp',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'uploader' => '',
					'acfe_thumbnail' => 0,
					'return_format' => 'array',
					'min_width' => 1366,
					'min_height' => 350,
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '.5',
					'mime_types' => 'webp',
					'preview_size' => 'medium',
					'library' => 'all',
				),
				array(
					'key' => 'field_640783ed84dda',
					'label' => 'Imagem Mobile',
					'name' => 'img_mobile',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => 'Layout: </br>
&nbsp;&nbsp;&nbsp;width: 375px </br>
&nbsp;&nbsp;&nbsp;height: 500px </br>
RETINA </br>
&nbsp;&nbsp;&nbsp;width: 750px </br>
&nbsp;&nbsp;&nbsp;height: 1000px </br>
TIPO de arquivo - WEBP</br>
Máx tamanho do arquivo - 100kb</br>
OBS: para otimizar a imagem, utilize o conversão automatica do wordpress na ABA Mídia, ele irá converter a imagem automaticamente em webp',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'uploader' => '',
					'acfe_thumbnail' => 0,
					'return_format' => 'array',
					'library' => 'all',
					'min_width' => 375,
					'min_height' => 500,
					'min_size' => '',
					'max_width' => 750,
					'max_height' => 1000,
					'max_size' => '.1',
					'mime_types' => 'webp',
					'preview_size' => 'medium',
				),
			),
			'acfe_seamless_style' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
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
	'hide_on_screen' => '',
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
	'modified' => 1678214263,
));

endif;