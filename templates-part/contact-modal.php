<div id="id01" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <span class="modal-close">&times;</span>
        <img class="modal-header" src="<?php echo get_template_directory_uri() . '/assets/images/Contact_header.png'; ?>" alt="Titre contact">
      <?php
		// On insère le formulaire de demandes de renseignements
		echo do_shortcode('[contact-form-7 id="38" title="Formulaire Contact Motaphoto"]');
		?>
    </div>
  </div>
</div> 