<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_63dc0eb42d57a',
	'title' => 'DOCUMENTOS',
	'fields' => array(
		array(
			'key' => 'field_63dc2e9b3abad',
			'label' => 'Arquivo',
			'name' => 'arquivo',
			'aria-label' => '',
			'type' => 'file',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
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
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'documentos',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'permalink',
		1 => 'block_editor',
		2 => 'the_content',
		3 => 'excerpt',
		4 => 'discussion',
		5 => 'comments',
		6 => 'send-trackbacks',
	),
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
	'modified' => 1678471270,
));

endif;