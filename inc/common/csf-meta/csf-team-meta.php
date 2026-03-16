<?php
// Control core classes for avoid errors
if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $prefix = 'tanspot_toolkit_team';

    //
    // Create a metabox
    CSF::createMetabox($prefix, array(
        'title'     => 'Team Details',
        'post_type' => 'team',
    ));

    //
    // Team Designation
    CSF::createSection($prefix, array(
        'title'  => 'Team Designation',
        'fields' => array(

            //
            // A text field
            array(
                'id'    => 'team_designation',
                'type'  => 'text',
                'title' => esc_html__('Team Designation', 'tanspot-toolkit'),
                'default' => esc_html__('Business Lawyer', 'tanspot-toolkit'),
            ),

        )
    ));
    // Team Biography
    CSF::createSection($prefix, array(
        'title'  => 'Team Biography',
        'fields' => array(

            //
            // A text field
            array(
                'id'    => 'team_biography',
                'type'  => 'text',
                'title' => esc_html__('Team Biography Title', 'tanspot-toolkit'),
                'default' => esc_html__('Biography', 'tanspot-toolkit'),
            ),
            array(
                'id'    => 'team_biography_description',
                'type'  => 'textarea',
                'title' => esc_html__('Team Biography Description', 'tanspot-toolkit'),
                'default' => esc_html__('Biography Description', 'tanspot-toolkit'),
            ),

        )
    ));
    // Team Contact Info
    CSF::createSection($prefix, array(
        'title'  => 'Team Contact Info',
        'fields' => array(

            //
            // A text field
            array(
                'id'    => 'team_contact_address',
                'type'  => 'text',
                'title' => esc_html__('Address', 'tanspot-toolkit'),
                'default' => esc_html__('4140 Parker Rd. Allentown, New Mexico 31134', 'tanspot-toolkit'),
            ),
            array(
                'id'    => 'team_contact_phone',
                'type'  => 'text',
                'title' => esc_html__('Phone', 'tanspot-toolkit'),
                'default' => esc_html__('(208) 555-0112', 'tanspot-toolkit'),
            ),
            array(
                'id'    => 'team_contact_email',
                'type'  => 'text',
                'title' => esc_html__('Email', 'tanspot-toolkit'),
                'default' => esc_html__('michael.mitc@example.com', 'tanspot-toolkit'),
            ),


        )
    ));
    // Team Practice Info
    CSF::createSection($prefix, array(
        'title'  => 'Team Practice',
        'fields' => array(

            //
            // A text field
            array(
                'id'    => 'team_practice_title',
                'type'  => 'text',
                'title' => esc_html__('Practice Title', 'tanspot-toolkit'),
                'default' => esc_html__('Practice Area', 'tanspot-toolkit'),
            ),

            array(
                'id'     => 'team_practice_left_lists',
                'type'   => 'repeater',
                'title'  => 'Practice List Left',
                'fields' => array(

                    array(
                        'id'    => 'left_list_item',
                        'type'  => 'text',
                        'title' =>  esc_html__('Practice Item', 'tanspot-toolkit'),
                        'default' => esc_html__('Ocean Freight', 'tanspot-toolkit'),
                    ),

                ),
                'default'   => array(
                    array(
                        'left_list_item' => esc_html__('Ocean Freight', 'tanspot-toolkit')
                    ),
                    array(
                        'left_list_item' => esc_html__('Road Freight', 'tanspot-toolkit')
                    ),
                    array(
                        'left_list_item' => esc_html__('Fast Personal Delivery', 'tanspot-toolkit')
                    ),
                )
            ),
            array(
                'id'     => 'team_practice_right_lists',
                'type'   => 'repeater',
                'title'  => 'Practice List Right',
                'fields' => array(

                    array(
                        'id'    => 'right_list_item',
                        'type'  => 'text',
                        'title' =>  esc_html__('Practice Item', 'tanspot-toolkit'),
                        'default' => esc_html__('International Shipping', 'tanspot-toolkit'),
                    ),

                ),
                'default'   => array(
                    array(
                        'right_list_item' => esc_html__('International Shipping', 'tanspot-toolkit')
                    ),
                    array(
                        'right_list_item' => esc_html__('Rail Freight', 'tanspot-toolkit')
                    ),
                    array(
                        'right_list_item' => esc_html__('Local Truck Transport', 'tanspot-toolkit')
                    ),
                )
            ),




        )
    ));
    // Team Skill
    CSF::createSection($prefix, array(
        'title'  => 'Team Skill',
        'fields' => array(

            //
            // A text field
            array(
                'id'    => 'team_skill_title',
                'type'  => 'text',
                'title' => esc_html__('Skill Title', 'tanspot-toolkit'),
                'default' => esc_html__('Skills', 'tanspot-toolkit'),
            ),

            array(
                'id'     => 'team_skill_repeater',
                'type'   => 'repeater',
                'title'  => 'Skill List',
                'fields' => array(

                    array(
                        'id'    => 'skill_item_title',
                        'type'  => 'text',
                        'title' =>  esc_html__('Skill Title', 'tanspot-toolkit'),
                        'default' => esc_html__('Product Delivery', 'tanspot-toolkit'),
                    ),
                    array(
                        'id'    => 'skill_item_percentage',
                        'type'  => 'text',
                        'title' =>  esc_html__('Skill Percentage', 'tanspot-toolkit'),
                        'default' => esc_html__('85%', 'tanspot-toolkit'),
                    ),

                ),
                'default'   => array(
                    array(
                        'skill_item_title' => esc_html__('Product Delivery', 'tanspot-toolkit'),
                        'skill_item_percentage' => esc_html__('85%', 'tanspot-toolkit')
                    ),
                    array(
                        'skill_item_title' => esc_html__('Quick Response', 'tanspot-toolkit'),
                        'skill_item_percentage' => esc_html__('95%', 'tanspot-toolkit')
                    ),
                    array(
                        'skill_item_title' => esc_html__('Customer Satisfaction', 'tanspot-toolkit'),
                        'skill_item_percentage' => esc_html__('65%', 'tanspot-toolkit')
                    ),
                )
            ),





        )
    ));


    // Team Social
    CSF::createSection($prefix, array(
        'title'  => 'Team Social',
        'fields' => array(

            //
            // A text field
            array(
                'id'    => 'team_social_link_facebook',
                'type'  => 'text',
                'title' => esc_html__('Facebook', 'tanspot-toolkit'),
                'default' => esc_html__('#', 'tanspot-toolkit'),
            ),
            array(
                'id'    => 'team_social_link_twitter',
                'type'  => 'text',
                'title' => esc_html__('Twitter', 'tanspot-toolkit'),
                'default' => esc_html__('#', 'tanspot-toolkit'),
            ),
            array(
                'id'    => 'team_social_link_instagram',
                'type'  => 'text',
                'title' => esc_html__('Instagram', 'tanspot-toolkit'),
                'default' => esc_html__('#', 'tanspot-toolkit'),
            ),
            array(
                'id'    => 'team_social_link_youtube',
                'type'  => 'text',
                'title' => esc_html__('Youtube', 'tanspot-toolkit'),
                'default' => esc_html__('#', 'tanspot-toolkit'),
            ),

        )
    ));
}
