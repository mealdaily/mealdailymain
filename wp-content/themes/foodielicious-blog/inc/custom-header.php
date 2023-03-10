<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package foodielicious_blog
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses foodielicious_blog_header_style()
 */
function foodielicious_blog_custom_header_setup() {
	add_theme_support( 'custom-logo', array(
		'width'       => 155,
		'height'      => 44,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
		) );
	add_theme_support( 'custom-header', array(
		'default-image'			=> get_theme_file_uri( '/images/bg-image.jpg' ),
		'default-text-color'	=> 'fff',
		'width'					=> 1400,
		'height'				=> 500,
		'flex-width'			=> true,
		'flex-height'			=> true,
		'wp-head-callback'		=> 'foodielicious_blog_header_style',
		) );
	register_default_headers( array(
		'header-bg' => array(
			'url'           => get_theme_file_uri( '/images/bg-image.jpg' ),
			'thumbnail_url' => get_theme_file_uri( '/images/bg-image.jpg' ),
			'description'   => _x( 'Default', 'Default header image', 'foodielicious-blog' )
			),	
		) );

}
add_action( 'after_setup_theme', 'foodielicious_blog_custom_header_setup' );

if ( ! function_exists( 'foodielicious_blog_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see foodielicious_blog_custom_header_setup().
 */
function foodielicious_blog_header_style() {
	$header_text_color = get_header_textcolor();

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
		#site-header {
			background-image: url(<?php header_image(); ?>);
		    background-size: cover;
		    background-position:center;
		}


	<?php if ( ! display_header_text() ) : ?>
	.site-title,
	.site-description {
		position: absolute;
		clip: rect(1px, 1px, 1px, 1px);
	}
	<?php else : ?>
	.site-branding .site-title,
	.site-branding .site-description {
		color: #<?php echo esc_attr( $header_text_color ); ?>;
	}
	.site-branding .site-title:after {
		background: #<?php echo esc_attr( $header_text_color ); ?>;
	}
	<?php endif; ?>
	</style>
	<?php
}
endif;
