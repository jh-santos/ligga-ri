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
					'key' => 'field_640a0a722ec2b',
					'label' => 'Carousel',
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
					'hide_admin' => 0,
					'acfe_repeater_stylised_button' => 0,
					'layout' => 'block',
					'pagination' => 0,
					'min' => 0,
					'max' => 0,
					'collapsed' => '',
					'button_label' => 'Adicionar Linha',
					'rows_per_page' => 20,
					'sub_fields' => array(
						array(
							'key' => 'field_640783ed84dd9',
							'label' => 'Imagem Desktop',
							'name' => 'img_desktop',
							'aria-label' => '',
							'type' => 'image_aspect_ratio_crop',
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
							'hide_admin' => 0,
							'crop_type' => 'aspect_ratio',
							'aspect_ratio_width' => 2732,
							'aspect_ratio_height' => 1280,
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => 1366,
							'min_height' => 640,
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '.5',
							'mime_types' => 'webp',
							'parent_repeater' => 'field_640a0a722ec2b',
						),
						array(
							'key' => 'field_640783ed84dda',
							'label' => 'Imagem Mobile',
							'name' => 'img_mobile',
							'aria-label' => '',
							'type' => 'image_aspect_ratio_crop',
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
							'hide_admin' => 0,
							'crop_type' => 'aspect_ratio',
							'aspect_ratio_width' => 750,
							'aspect_ratio_height' => 1000,
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => 375,
							'min_height' => 500,
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '.3',
							'mime_types' => '',
							'parent_repeater' => 'field_640a0a722ec2b',
						),
						array(
							'key' => 'field_640a209aea90d',
							'label' => 'Link no Banner?',
							'name' => 'link_no_banner',
							'aria-label' => '',
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '30',
								'class' => '',
								'id' => '',
							),
							'hide_admin' => 0,
							'message' => 'Sim',
							'default_value' => 0,
							'ui' => 0,
							'ui_on_text' => '',
							'ui_off_text' => '',
							'parent_repeater' => 'field_640a0a722ec2b',
						),
						array(
							'key' => 'field_640a20c7ea90e',
							'label' => 'Link da Pagina ou URL',
							'name' => 'link',
							'aria-label' => '',
							'type' => 'link',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_640a209aea90d',
										'operator' => '==',
										'value' => '1',
									),
								),
							),
							'wrapper' => array(
								'width' => '70',
								'class' => '',
								'id' => '',
							),
							'hide_admin' => 0,
							'return_format' => 'array',
							'parent_repeater' => 'field_640a0a722ec2b',
						),
					),
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
	'modified' => 1678467301,
));

endif;