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


/** Block Anchor **/
function get_anchor( $block_name ) {
	$block_input = get_sub_field( $block_name );
	if( !empty( $block_input ) ) { 
		$anchor = 'id="' . $block_input . '" data-magellan-target="' . $block_input . '"'; } 
	else {
		$anchor = '';
	}
	return $anchor;
}


/** Block Title */
function get_block_title($title, $tag, $classes) {
	return '<'.$tag.' class="block-title '.$classes.'">'.$title.'</'.$tag.'>';
}


/** Theme Button **/
function get_button( $link, $target, $style, $text ) {
	$link = $link ? $link : '#';
	$link_target = $target ? $target : '_self';
	$text = $text ? $text : 'Lue lisää';

	$button = '<a href="'.$link.'" target="'.$link_target.'" class="btn '.$style.'">'.$text.'</a>';
	
	return $button;
}

?>
