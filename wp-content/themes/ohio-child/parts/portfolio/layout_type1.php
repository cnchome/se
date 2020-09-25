<?php 
global $post;

# Project settings
$project = OhioObjectParser::parse_to_project_object( $post );

if ( is_array( $project['images_full'] ) && count( $project['images_full'] ) > 0 ) {
	$project['images'] = $project['images_full'];
}

# Page container settings
$show_breadcrumbs = OhioOptions::get( 'page_breadcrumbs_visibility', true );
$page_wrapped = OhioOptions::get( 'page_add_wrapper', true );
$add_content_padding = OhioOptions::get( 'page_add_top_padding', true );
$show_header_title = OhioOptions::get( 'page_header_title_visibility', true );
$header_blank_spacer = OhioOptions::get( 'page_header_add_cap', true );

$page_container_class = '';
$layout_container_class = '';
if (!$show_breadcrumbs && !$add_content_padding && !$show_header_title && !$header_blank_spacer) {
	$layout_container_class .= ' full-top-position'; 
}
if ( !$show_breadcrumbs && $add_content_padding ) {
	$page_container_class .= ' top-offset'; 
}
if ( ! $page_wrapped ) {
	$page_container_class .= ' full';
}
if ( $add_content_padding ) {
	$page_container_class .= ' bottom-offset';
}

if ( $show_breadcrumbs ) {
	get_template_part( 'parts/elements/breadcrumbs' );
}
	
?>

<div class="page-container <?php echo esc_attr( $page_container_class ); ?>">

	<?php if ( $project['custom_content_position'] == 'top' ) : ?>
	<div class="project-page-custom-content">
		<?php echo do_shortcode( get_post_field( 'post_content', $post->ID ) ); ?>
	</div>
	<?php endif; ?>

	<!-- Content -->
	<div class="project-page layout-type1 boxed  <?php echo esc_attr( $layout_container_class ); ?>" id="scroll-portfolio" >
		<div class="vc_row">
			<div class="vc_col-lg-6 vc_col-md-6 vc_col-sm-12 project-page-media-holder port-center">
	            <?php if ( is_array( $project['images'] ) ) : ?>
	                <?php foreach ( $project['images'] as $key => $art ) :
	                    $alt = get_post_meta(OhioHelper::get_attachment_id($art), '_wp_attachment_image_alt', true);
	                    ?>
	                    <?php if ($key == 0 ) : ?>
	                        <div class="project-first-image">
	                            <img src="<?php echo esc_url( $art ); ?>" alt="<?php echo esc_attr($alt) ?>">
	                            <?php if (isset($project['video']['link']) && !empty($project['video']['link'])) : ?>
	                                <div class="ohio-video-module-sc video-module with-animation open-popup" data-video-module="<?php echo esc_url($project['video']['link']); ?>">
	                                    <div class="btn-play btn-round" >
	                                        <i class="ion ion-ios-play"></i>
	                                    </div>
	                                </div>
	                            <?php endif; ?>
	                            <?php if ( $project['show_sharing'] && $project['sharing_links'] && count( $project['sharing_links'] ) > 0 ) : ?>
	                                <div class="clb-share-bar">
	                                    <div class="socialbar flat">
	                                        <?php vprintf('%s', $project['sharing_links_html']); ?>
	                                    </div>  
	                                </div>  
	                            <?php endif; ?>
	                        </div>
	                    <?php else:  ?>
	                        <img src="<?php echo esc_url( $art ); ?>" alt="<?php echo esc_attr($alt) ?>">
	                    <?php endif ?>
	                <?php endforeach; ?>
	            <?php endif; ?>

			</div>
			 
		</div>
	</div>
</div>

<!-- Custom WPBakery content -->
<?php if ($project['custom_content_position'] == 'bottom') : ?>
    <div class="page-container <?php echo esc_attr($custom_page_container_class); ?>">
        <div class="project-page-custom-content">
            <?php echo do_shortcode(get_post_field('post_content', $post->ID)); ?>
        </div>
    </div>
<?php endif; ?>

<!-- Next & Prev nav -->
<?php if ( $project['show_navigation'] ) {
    get_template_part('parts/elements/nav_projects');
}?>