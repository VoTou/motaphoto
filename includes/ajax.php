<?php
add_action( 'wp_ajax_load_photos', 'load_photos' );
add_action( 'wp_ajax_nopriv_load_photos', 'load_photos' );

function load_photos() {
  
	// Vérification de sécurité
  	if( 
		! isset( $_REQUEST['nonce'] ) or 
       	! wp_verify_nonce( $_REQUEST['nonce'], 'load_photos' ) 
    ) {
    	wp_send_json_error( "Vous n’avez pas l’autorisation d’effectuer cette action.", 403 );
  	}
    
  	// Requête des images attachées à l'article
    $images = get_attached_media( 'photo', $post_id );

    // Préparer le HTML des images
    $html = '';
    if (!empty($images)) {
        foreach ($images as $image) {
            // Récupérer l'URL de l'image et l'alt (titre de l'image)
            $image_url = wp_get_attachment_url($image->ID);
            $image_alt = esc_attr(get_post_meta($image->ID, '_wp_attachment_image_alt', true));
            // Ajouter l'image au HTML
            $html .= '<img src="' . $image_url . '" alt="' . $image_alt . '">';
        }
    }

  	// Envoyer les données au navigateur
	wp_send_json_success( $html );
}

?>