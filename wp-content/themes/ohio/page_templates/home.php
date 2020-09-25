<?php /* Template Name: Home Page */ ?>

<?php
	get_header();

	// Settings
	$show_breadcrumbs = OhioOptions::get( 'page_breadcrumbs_visibility', true );
	$page_wrapped = OhioOptions::get( 'page_add_wrapper', true );
	$no_ecommerce = !OhioOptions::page_is( 'ecommerce' );
	$add_content_padding = OhioOptions::get( 'page_add_top_padding', true );
	$sidebar_position = OhioOptions::get( 'page_sidebar_position', 'left' );
	$sidebar_layout = OhioOptions::get( 'page_sidebar_layout', 'simple' );
	$page_container_class = '';
	$content_container_class = '';
	$sidebar_class = '';

	if ( $add_content_padding && !$show_breadcrumbs ) {
		$page_container_class .= ' top-offset'; 
	}
	if ( ! $page_wrapped ) {
		$page_container_class .= ' full';
	}
	if ( $add_content_padding ) {
		$page_container_class .= ' bottom-offset';
	}

	if ( is_active_sidebar( 'ohio-sidebar-page' ) ) {
		if ( $no_ecommerce && $sidebar_position == 'left' ) {
			$content_container_class = 'with-left-sidebar';
		}
		if ( $no_ecommerce && $sidebar_position == 'right' ) {
			$content_container_class = 'with-right-sidebar';
		}
		if ( $sidebar_layout ) {
			$sidebar_class .= ' sidebar-' . $sidebar_layout;
		}
	}

?>



 

<div class="project-page project layout-type8 top-offset bottom-offset myHome">
    <div class="project-page-media-holder">
        <div class="project-fullscreen-slider" data-slider-navigation="1" data-slider-loop="1" data-slider-autoplay="" data-slider-autoplay-time="" data-slider-pagination="&quot;true&quot;">
                                                <div class="parallax" data-parallax-bg="vertical" data-parallax-speed=".5">
                        <div class="project-image parallax-bg" style="background-image: url(&quot;http://dynamicxx.com/se/wp-content/uploads/2019/10/bas.png&quot;); height: 863px; transform: translate3d(0px, -73.5652px, 0px);" alt=""><div class="project-image-overlay"></div></div> 
                    </div>
                                    </div>      
    </div>
    <div class="page-container">
        <div class="project-page-content">
            <div class="vc_row animated-holder">
                <div class="vc_col-md-12">
                                            <div class="ohio-video-module-sc video-module with-animation open-popup" data-video-module="https://www.youtube.com/embed/t67_zAg5vvI">
                            <div class="btn-play btn-round btn-round-outline btn-round-light" tabindex="1">
                                <i class="ion ion-ios-play"></i>
                            </div>
                        </div><br>
                                    </div>

                <div class="vc_col-md-12 date-and-category">
                    
                                         
                                    </div>

                <div class="vc_col-md-12 project-title">
                                    <?php get_template_part( 'parts/elements/page_headline' ); ?>  
                </div>

                <div class="vc_col-md-7">
                    <div class="project-description">
                                                                    </div>
                </div>
                <div class="vc_col-md-6">
                    <ul class="project-meta">
                                                    <li>
                                <h6 class="project-meta-title">Strategy</h6>
                                <p>Brand Strategy, UX Strategy</p>
                            </li>
                        
                                                    <li>
                                <h6 class="project-meta-title">Design</h6>
                                <p>UI/UX Design, Art Direction</p>
                            </li>
                        
                                                    <li>
                                <h6 class="project-meta-title">Client</h6>
                                <p>Envato</p>
                            </li>
                        
                        
                                            </ul>    
                </div>

                <div class="vc_col-md-12">
                                            <a href="http://dynamicxx.com/se/" class="btn btn-link" target="_blank">
                            Open Project                            <i class="ion-right ion"><svg class="arrow-icon" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 7H16M16 7L11 1M16 7L11 13" stroke-width="2"></path></svg></i>
                        </a>
                                    </div>
            </div>

                            <div class="clb-share-bar">
                    <div class="socialbar socialbar-horizontal flat">
                        						 <a href="#" class="cm">  <span class="social-text">Creative Market</span></a>
						 <a href="#" class="up">   <span class="social-text">Upwork</span> </a>
						 <a href="#" class="evento">  <span class="social-text">Evento</span> </a> 
                    </div>  
                </div>  
                    </div>
    </div>
</div>

<div class="page-container<?php echo esc_attr( $page_container_class ); ?>">
	<div class="page-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'parts/content', 'page' );
					}
				?>
			</main>
		</div>
	</div>
</div>

<?php

	get_footer();
