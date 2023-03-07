<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6406321e3d663',
	'title' => 'BANNER TIPO 1',
	'fields' => array(
		array(
			'key' => 'field_6406321e40b62',
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
			'key' => 'field_6406321e4480e',
			'label' => 'Banner Principal',
			'name' => 'modulo_04_1',
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
					'key' => 'field_6406321e48412',
					'label' => 'Titulo do Banner',
					'name' => 'titulo_1',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => 'Titulo da Pagina, limitado a 35 caracteres conforme layout',
					'required' => 1,
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
					'key' => 'field_6406321e4be94',
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
					'key' => 'field_6406321e4f82c',
					'label' => 'Imagem Desktop',
					'name' => 'img_desktop',
					'aria-label' => '',
					'type' => 'image',
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
					'key' => 'field_6406321e5357e',
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
					'min_width' => 375,
					'min_height' => 500,
					'min_size' => '',
					'max_width' => 750,
					'max_height' => 1000,
					'max_size' => '.1',
					'mime_types' => 'webp',
					'preview_size' => 'medium',
					'library' => 'all',
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
				'value' => 'pagina_sobre.php',
			),
		),
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'pagina_gov_corporativa.php',
			),
		),
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'pagina_servicos_ao_investidor.php',
			),
		),
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'default',
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
	'modified' => 1678217440,
));

endif;