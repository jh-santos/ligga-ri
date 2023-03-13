<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_64061fcb6028b',
	'title' => 'BANNER TIPO 2',
	'fields' => array(
		array(
			'key' => 'field_64061fcb4ee7c',
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
			'key' => 'field_640620454ee7d',
			'label' => 'Banner Principal',
			'name' => 'modulo_07_1',
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
					'key' => 'field_640620dc4ee81',
					'label' => 'Titulo do Banner',
					'name' => 'titulo_1',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => 'Titulo da Pagina, limitado a 35 caracteres conforme layout',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => 35,
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_6406210c4ee82',
					'label' => 'Descrição',
					'name' => 'titulo_2',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => 'breve descrição, limitado a 150 caracteres conforme layout',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => 150,
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_6406208b4ee7f',
					'label' => 'Imagem Desktop',
					'name' => 'img_desktop',
					'aria-label' => '',
					'type' => 'image_aspect_ratio_crop',
					'instructions' => 'Layout do Figma: </br>
&nbsp;&nbsp;&nbsp;width: 1366px </br>
&nbsp;&nbsp;&nbsp;height: 350px </br>
RETINA (preferencialmente)</br>
&nbsp;&nbsp;&nbsp;width: 2732px </br>
&nbsp;&nbsp;&nbsp;height: 700px </br>
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
					'aspect_ratio_height' => 700,
					'return_format' => 'array',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '.5',
					'mime_types' => 'webp',
				),
				array(
					'key' => 'field_640620c04ee80',
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
					'max_size' => '.2',
					'mime_types' => 'webp',
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
				'value' => 'pagina_solucoes.php',
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
	'modified' => 1678711507,
));

endif;