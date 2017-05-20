<?php


add_theme_support( 'post-thumbnails' );

function prfx_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
	$prfx_stored_meta = get_post_meta( $post->ID );
	?>

	<p>
		<label for="meta-prof" class="prfx-row-title"><?php _e( 'Enseignant affecté', 'prfx-textdomain' )?></label>
		<input type="text" name="meta-prof" id="meta-prof" value="<?php if ( isset ( $prfx_stored_meta['meta-prof'] ) ) echo $prfx_stored_meta['meta-prof'][0]; ?>" />
			<br>
		<label for="meta-hor" class="prfx-row-title"><?php _e( 'Nombre horaire', 'prfx-textdomain' )?></label>
		<input type="number" name="meta-hor" id="meta-hor" value="<?php if ( isset ( $prfx_stored_meta['meta-hor'] ) ) echo $prfx_stored_meta['meta-hor'][0]; ?>" />
	</p>

	<?php
}
function prfx_meta_save( $post_id ) {

	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}

	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-prof' ] )||isset( $_POST[ 'meta-hor' ] ) ) {
		update_post_meta( $post_id, 'meta-prof', sanitize_text_field( $_POST[ 'meta-prof' ] ) );
		update_post_meta( $post_id, 'meta-hor', sanitize_text_field( $_POST[ 'meta-hor' ] ) );

	}

}
add_action( 'save_post', 'prfx_meta_save' );

function prfx_custom_meta() {
	add_meta_box( 'prfx_meta', __( 'Enseignant et Nombre D\'horaire', 'prfx-textdomain' ), 'prfx_meta_callback', 'post' );
}
add_action( 'add_meta_boxes', 'prfx_custom_meta' );