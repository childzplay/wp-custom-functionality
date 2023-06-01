<?php

/** Print WP Custom Logo in svg format */
function custom_logo_output() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	if ( has_custom_logo() ) {
		if( pathinfo($logo[0], PATHINFO_EXTENSION) === 'svg' ) {
			$svg_logo = file_get_contents( get_attached_file( $custom_logo_id ) );
			echo '<a class="site-logo" href="' . esc_url( home_url( '/' ) ) . '">' . $svg_logo . '</a>';
		} else {
			the_custom_logo();
		}
	}
}

?>
