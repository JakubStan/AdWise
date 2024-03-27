<?php
/**
 * The post carousel template.
 * This template can be overridden by copying it to yourtheme/wp-carousel-free/templates/loop/post-type.php
 *
 * @since   2.3.4
 * @package WP_Carousel_Free
 * @subpackage WP_Carousel_Free/public/templates
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
?>
<div class="<?php echo esc_attr( $grid_column ); ?>">
	<div class="wpcp-single-item">
		
			
		
		<div class="wpcp-all-captions">
			<img class="quote" src="http://localhost/AdWise/wp-content/uploads/2024/03/unnamed-file.png" alt="quote">
		<?php
			require WPCF_Helper::wpcf_locate_template( 'loop/post-type/content.php' );
		?>		
		<div class="autor-img">
			<?php
			require WPCF_Helper::wpcf_locate_template( 'loop/post-type/thumbnails.php' );
			require WPCF_Helper::wpcf_locate_template( 'loop/post-type/meta.php' );
		?>
		</div>

			
		
		</div>
	</div>
</div>
