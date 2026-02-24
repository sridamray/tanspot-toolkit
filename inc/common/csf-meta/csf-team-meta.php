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
