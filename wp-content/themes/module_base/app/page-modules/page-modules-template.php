<?php
if( function_exists('acf_add_local_field_group') ):
  acf_add_local_field_group(array (
    'key' => 'group_580680050c149',
    'title' => 'Page Modulaire',
    'fields' => array (
      array (
        'key' => 'field_5806803664e6e',
        'label' => 'Bloc de contenu',
        'name' => 'content_blocks',
        'type' => 'flexible_content',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'button_label' => 'Ajoutez un module',
        'min' => '',
        'max' => '',
        'layouts' => array (
          // MODULE_BANNER
          array (
            'key' => 'mod_banner',
            'title' => 'Bannière',
            'label' => 'Bannière',
            'name' => 'module_banner',
            'sub_fields' => array (
              array(
                'key' => 'field_5d307e2c399ffadsfasddsafads55',
                'label' => 'Image de fond',
                'name' => 'banner_bg',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '50',
                  'class' => '',
                  'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
              ),
              array(
                'key' => 'field_5d307e3a39956fds',
                'label' => 'Titre de page',
                'name' => 'banner_title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '50',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
              ),
            ),
          ),
        ),
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
        ),
      ),

      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'block',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array (
      0 => 'the_content',
    ),
    'active' => 1,
    'description' => '',
  ));
endif;
