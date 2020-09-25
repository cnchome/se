<?php
    $header_have_social = have_rows( 'global_header_menu_social_links', 'option' );
    $social_icons = OhioOptions::get_global( 'social_network_type', false );
    $social_classes = '';

    if ($social_icons == 'icons') {
        $social_classes = 'icons';
    }
?>

<?php if ( $header_have_social ) : ?>
    <div class="clb-social">
        <ul class="clb-social-holder font-titles <?php echo esc_attr($social_classes); ?>"> 
            <li class="clb-social-holder-follow"><?php esc_html_e( 'Follow Us', 'ohio' ); ?></li>
            <li class="clb-social-holder-dash">&ndash;</li>
            <?php while( have_rows( 'global_header_menu_social_links', 'option' ) ): the_row(); ?>
                <?php switch ( get_sub_field( 'social_network' ) ) {
                    case 'facebook':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="facebook"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-facebook-f'></i> " : "Fb." ?></span></a></li>
                        <?php 
                        break;
                    case 'twitter':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="twitter"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-twitter'></i> " : "Tw." ?></span></a></li>
                        <?php 
                        break;
                    case 'instagram':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="instagram"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-instagram'></i> " : "Inst." ?></span></a></li>
                        <?php 
                        break;
                    case 'dribbble':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="dribbble"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-dribbble'></i> " : "Dr." ?></span></a></li>
                        <?php 
                        break;
                    case 'github':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="github"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-github'></i> " : "Gh." ?></span></a></li>
                        <?php 
                        break;
                    case 'linkedin':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="linkedin"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-linkedin'></i> " : "Lk." ?></span></a></li>
                        <?php 
                        break;
                    case 'vimeo':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="vimeo"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-vimeo'></i> " : "Vm." ?></span></a></li>
                        <?php 
                        break;
                    case 'youtube':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="youtube"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-youtube'></i> " : "Yt." ?></span></a></li>
                        <?php 
                        break;
                    case 'vk':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="vk"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-vk'></i> " : "Vk." ?></span></a></li>
                        <?php 
                        break;
                    case 'behance':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="behance"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-behance'></i> " : "Be." ?></span></a></li>
                        <?php 
                        break;
                    case 'tumblr':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="tumblr"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-tumblr'></i> " : "Tm." ?></span></a></li>
                        <?php 
                        break;
                    case 'flickr':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="flickr"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-flickr'></i> " : "Fl." ?></span></a></li>
                        <?php 
                        break;
                    case 'reddit':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="reddit"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-reddit'></i> " : "Re." ?></span></a></li>
                        <?php 
                        break;
                    case 'snapchat':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="snapchat"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-snapchat'></i> " : "Sn." ?></span></a></li>
                        <?php 
                        break;
                    case 'whatsapp':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="whatsapp"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-whatsapp'></i> " : "Wh." ?></span></a></li>
                        <?php 
                        break;
                    case 'quora':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="quora"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-quora'></i> " : "Qu." ?></span></a></li>
                        <?php 
                        break;
                    case 'vine':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="vine"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-vine'></i> " : "Vn." ?></span></a></li>
                        <?php 
                        break;
                    case 'digg':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="digg"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-digg'></i> " : "Dg." ?></span></a></li>
                        <?php 
                        break;
                    case 'foursquare':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="foursquare"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-foursquare'></i> " : "Fs." ?></span></a></li>
                        <?php 
                        break;
                    case 'tiktok':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="tiktok"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-tiktok'></i> " : "Tk." ?></span></a></li>
                        <?php 
                        break;
                    case 'twitch':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="twitch"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-twitch'></i> " : "Tw." ?></span></a></li>
                        <?php 
                        break;
                    case 'mixer':
                        ?>
                        <li><a target="_blank" href=" <?php echo esc_url( get_sub_field( 'url' ) ) ?>" class="mixer"><?php echo esc_html($social_icons == 'icons') ? "<i class='fab fa-mixer'></i> " : "Mx." ?></span></a></li>
                        <?php 
                        break;
                } ?>
            <?php endwhile; ?>
        </ul>
    </div>
<?php endif; ?>