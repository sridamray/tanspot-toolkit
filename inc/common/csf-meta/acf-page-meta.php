<?php
if (! function_exists('acf_add_local_field_group')) {
    return;
}

acf_add_local_field_group(
    array(
        'key' => 'tanspot_page_settings',
        'title' => 'Page Settings',
        'fields' => array(
            // Breadcrumb Hide/Show Settings
            array(
                'key' => 'tanspot_hide_breadcrumb',
                'label' => 'Hide Breadcrumb ?',
                'name' => 'tanspot_hide_breadcrumb',
                'type' => 'true_false',
                'required' => 0,
                'ui' => 1,
                'wrapper' => array(
                    'width' => '25', // Set width to 50%
                    'class' => '',
                    'id' => '',
                ),
            ),
            // Breadcrumb Image Settings
            array(
                'key' => 'tanspot_page_breadcrumb_image',
                'label' => 'Breadcrumb Image',
                'name' => 'tanspot_page_breadcrumb_images',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'wrapper' => array(
                    'width' => '25', // Set width to 50%
                    'class' => '',
                    'id' => '',
                ),
            ),

            array(
                'key' => 'tanspot_field_header_style',
                'label' => 'Header Style',
                'name' => 'tanspot_header_style',
                'type' => 'select',
                'instructions' => 'Select Header Style',
                'required' => 0,
                'ui' => 1,
                'choices' => array(
                    'header-style-1' => 'Header Style 1',
                    'header-style-2' => 'Header Style 2',
                    'header-style-3' => 'Header Style 3',
                ),
                'wrapper' => array(
                    'width' => '25', // Set width to 50%
                    'class' => '',
                    'id' => '',
                ),
            ),
            array(
                'key' => 'tanspot_field_footer_style',
                'label' => 'Footer Style',
                'name' => 'tanspot_Footer_style',
                'type' => 'select',
                'instructions' => 'Select Footer Style',
                'required' => 0,
                'ui' => 1,
                'choices' => array(
                    'footer-style-1' => 'Footer Style 1',
                    'footer-style-2' => 'Footer Style 2',
                    'footer-style-3' => 'Footer Style 3',
                ),
                'wrapper' => array(
                    'width' => '25', // Set width to 50%
                    'class' => '',
                    'id' => '',
                ),
            ),


            array(
                'key' => 'tanspot_page_logos',
                'label' => 'Header Logo',
                'name' => 'tanspot_page_logo',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'wrapper' => array(
                    'width' => '25', // Set width to 50%
                    'class' => 'tanspot_page_header_logo',
                    'id' => '',
                ),
            ),



        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),

            ),
        ),
    )
);
