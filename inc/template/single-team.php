<?php get_header();


$tanspot_team_meta = get_post_meta(get_the_ID(), 'tanspot_toolkit_team', true);

$team_designation = isset($tanspot_team_meta['team_designation']) ? $tanspot_team_meta['team_designation'] : '';
// Team Social Links
$team_social_link_facebook = isset($tanspot_team_meta['team_social_link_facebook']) ? $tanspot_team_meta['team_social_link_facebook'] : '';
$team_social_link_twitter = isset($tanspot_team_meta['team_social_link_twitter']) ? $tanspot_team_meta['team_social_link_twitter'] : '';
$team_social_link_instagram = isset($tanspot_team_meta['team_social_link_instagram']) ? $tanspot_team_meta['team_social_link_instagram'] : '';
$team_social_link_youtube = isset($tanspot_team_meta['team_social_link_youtube']) ? $tanspot_team_meta['team_social_link_youtube'] : '';

// Team Contact Info
$team_contact_address = isset($tanspot_team_meta['team_contact_address']) ? $tanspot_team_meta['team_contact_address'] : '';
$team_contact_phone = isset($tanspot_team_meta['team_contact_phone']) ? $tanspot_team_meta['team_contact_phone'] : '';
$team_contact_email = isset($tanspot_team_meta['team_contact_email']) ? $tanspot_team_meta['team_contact_email'] : '';

// Team Biography
$team_biography = isset($tanspot_team_meta['team_biography']) ? $tanspot_team_meta['team_biography'] : '';
$team_biography_description = isset($tanspot_team_meta['team_biography_description']) ? $tanspot_team_meta['team_biography_description'] : '';

// Team practice area
$team_practice_title = isset($tanspot_team_meta['team_practice_title']) ? $tanspot_team_meta['team_practice_title'] : '';
$team_practice_left_lists = isset($tanspot_team_meta['team_practice_left_lists']) ? $tanspot_team_meta['team_practice_left_lists'] : '';
$team_practice_right_lists = isset($tanspot_team_meta['team_practice_right_lists']) ? $tanspot_team_meta['team_practice_right_lists'] : '';


// Team Skills
$team_skill_title = isset($tanspot_team_meta['team_skill_title']) ? $tanspot_team_meta['team_skill_title'] : '';
$team_skill_repeater = isset($tanspot_team_meta['team_skill_repeater']) ? $tanspot_team_meta['team_skill_repeater'] : '';







?>


<!--Team Details Start-->
<section class="team-details">
    <div class="container">
        <div class="team-details__top">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="team-details__top-left">
                        <div class="team-details__img-1">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="team-details__top-right">
                        <div class="team-details__client-box">
                            <h3 class="team-details__client-name"><?php the_title(); ?></h3>
                            <span class="team-details__client-sub-title"><?php echo esc_html($team_designation, 'tanspot-toolkit'); ?></span>
                            <div class="team-details__social">
                                <?php if (!empty($team_social_link_facebook)): ?>
                                    <a href="<?php echo esc_url($team_social_link_facebook, 'tanspot-toolkit'); ?>"><i class="icon-facebook-app-symbol"></i></a>
                                <?php endif; ?>
                                <?php if (!empty($team_social_link_twitter)): ?>
                                    <a href="<?php echo esc_url($team_social_link_twitter, 'tanspot-toolkit'); ?>"><i class="icon-twitter1"></i></a>
                                <?php endif; ?>

                                <?php if (!empty($team_social_link_instagram)): ?>
                                    <a href="<?php echo esc_url($team_social_link_instagram, 'tanspot-toolkit'); ?>"><i class="icon-instagram"></i></a>
                                <?php endif; ?>

                                <?php if (!empty($team_social_link_youtube)): ?>
                                    <a href="<?php echo esc_url($team_social_link_youtube, 'tanspot-toolkit'); ?>"><i class="icon-youtube"></i></a>
                                <?php endif; ?>
                            </div>
                            <p class="team-details__client-text"><?php the_content(); ?></p>
                            <ul class="team-details__client-address list-unstyled">
                                <li>
                                    <p><span class="icon-location1"></span><?php echo esc_html__('Address', 'tanspot-toolkit'); ?></p>
                                    <h5><?php echo esc_html($team_contact_address, 'tanspot-toolkit'); ?></h5>
                                </li>
                                <li>
                                    <p><span class="icon-phone-call"></span><?php echo esc_html__('Phone Number', 'tanspot-toolkit'); ?></p>
                                    <h5><a href="tel:<?php echo esc_attr($team_contact_phone, 'tanspot-toolkit'); ?>"><?php echo esc_html($team_contact_phone, 'tanspot-toolkit'); ?></a></h5>
                                </li>
                                <li>
                                    <p><span class="icon-email"></span><?php echo esc_html__('Email', 'tanspot-toolkit'); ?></p>
                                    <h5><a href="mailto:<?php echo esc_attr($team_contact_email, 'tanspot-toolkit'); ?>"><?php echo esc_html($team_contact_email, 'tanspot-toolkit'); ?></a></h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-details__bottom">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__bottom-left">
                        <h3 class="team-details__bottom-title"><?php echo esc_html($team_biography, 'tanspot-toolkit'); ?></h3>
                        <p class="team-details__bottom-text"><?php echo esc_html($team_biography_description, 'tanspot-toolkit'); ?></p>
                        <div class="team-details__practice-area">
                            <h4 class="team-details__practice-area-title"><?php echo esc_html($team_practice_title, 'tanspot-toolkit'); ?></h4>
                            <div class="team-details__practice-area-list-box">
                                <ul class="list-unstyled team-details__practice-area-list">
                                    <?php if (is_array($team_practice_left_lists) && !empty($team_practice_left_lists)):
                                        foreach ($team_practice_left_lists as $left_list): ?>
                                            <li>
                                                <div class="icon"></div>
                                                <div class="text">
                                                    <p><?php echo esc_html($left_list['left_list_item'], 'tanspot-toolkit'); ?></p>
                                                </div>
                                            </li>
                                    <?php endforeach;
                                    endif; ?>
                                </ul>
                                <ul class="list-unstyled team-details__practice-area-list team-details__practice-area-list--two">
                                    <?php if (is_array($team_practice_right_lists) && !empty($team_practice_right_lists)):
                                        foreach ($team_practice_right_lists as $right_list): ?>
                                            <li>
                                                <div class="icon"></div>
                                                <div class="text">
                                                    <p><?php echo esc_html($right_list['right_list_item'], 'tanspot-toolkit'); ?></p>
                                                </div>
                                            </li>
                                    <?php endforeach;
                                    endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__bottom-right">
                        <h3 class="team-details__progress-title-1"><?php echo esc_html($team_skill_title, 'tanspot-toolkit'); ?></h3>
                        <ul class="team-details__progress-list list-unstyled">
                            <?php
                            // Check if the variable is an array and not empty before looping
                            if (is_array($team_skill_repeater) && !empty($team_skill_repeater)):
                                foreach ($team_skill_repeater as $skill): ?>
                                    <li>
                                        <div class="team-details__progress">
                                            <h4 class="team-details__progress-title">
                                                <?php echo esc_html($skill['skill_item_title'], 'tanspot-toolkit'); ?>
                                            </h4>
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="<?php echo esc_attr($skill['skill_item_percentage']); ?>">
                                                    <div class="count-text">
                                                        <?php echo esc_html($skill['skill_item_percentage'], 'tanspot-toolkit'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                            <?php endforeach;
                            endif; // End the safety check 
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>