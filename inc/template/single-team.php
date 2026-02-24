<?php get_header();


$tanspot_team_meta = get_post_meta(get_the_ID(), 'tanspot_toolkit_team', true);

$team_designation = isset($tanspot_team_meta['team_designation']) ? $tanspot_team_meta['team_designation'] : '';
$team_social_link_facebook = isset($tanspot_team_meta['team_social_link_facebook']) ? $tanspot_team_meta['team_social_link_facebook'] : '';




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
                                <a href="#"><i class="icon-twitter1"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                            </div>
                            <p class="team-details__client-text"><?php the_content(); ?></p>
                            <ul class="team-details__client-address list-unstyled">
                                <li>
                                    <p><span class="icon-location1"></span>Address</p>
                                    <h5>4140 Parker Rd. Allentown, New Mexico 31134</h5>
                                </li>
                                <li>
                                    <p><span class="icon-phone-call"></span>Phone Number</p>
                                    <h5><a href="tel:2085550112">(208) 555-0112</a></h5>
                                </li>
                                <li>
                                    <p><span class="icon-email"></span>Email</p>
                                    <h5><a href="mailto:michael.mitc@example.com">michael.mitc@example.com</a>
                                    </h5>
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
                        <h3 class="team-details__bottom-title">Biography</h3>
                        <p class="team-details__bottom-text">Neque porro quisquam est, qui dolorem ipsum quia
                            dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                            incidunt ut labore et dolore ma gnam aliquam quaerat voluptatem. Ut enim ad minima
                            veniam</p>
                        <div class="team-details__practice-area">
                            <h4 class="team-details__practice-area-title">Practice Area</h4>
                            <div class="team-details__practice-area-list-box">
                                <ul class="list-unstyled team-details__practice-area-list">
                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Ocean Freight</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Road Freight</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Fast Personal Delivery</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul
                                    class="list-unstyled team-details__practice-area-list team-details__practice-area-list--two">
                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>International Shipping</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Rail Freight</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Local Truck Transport</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__bottom-right">
                        <h3 class="team-details__progress-title-1">Skills</h3>
                        <ul class="team-details__progress-list list-unstyled">
                            <li>
                                <div class="team-details__progress">
                                    <h4 class="team-details__progress-title">Product Delivery</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="80%">
                                            <div class="count-text">80%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="team-details__progress">
                                    <h4 class="team-details__progress-title">Quick Response</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="95%">
                                            <div class="count-text">95%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="team-details__progress">
                                    <h4 class="team-details__progress-title">Customer Satisfaction</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="65%">
                                            <div class="count-text">65%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>