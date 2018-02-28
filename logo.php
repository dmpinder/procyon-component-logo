<?php
/*
 * Plugin Name: Procyon Component: Logo
 * Plugin URI: https://github.com/dmpinder/procyon-component-logo
 * Description: A drop-in PHP component to create a WCAG-compliant logo. Based on the excellent 10up component library.
 * Author: Darren Pinder, 10up, mattradford
 * Version: 1.0.2
 * Author URI: https://vatu.co.uk
 * GitHub Plugin URI: https://github.com/dmpinder/procyon-component-logo
 * GitHub Branch:     master
 */

/**
 * Function to output a logo which is defined as an option.
 */
function procyon_component_logo() {
	$logo = get_option( 'options_main_logo' );
	if ( ! empty( $logo ) ) {
		$url = wp_get_attachment_image_src( 526, 'full' )[0];
		?>
		<div itemscope itemtype="http://schema.org/Organization">
			<!--
				Visually hide this text.
				WCAG 2.0: “image alt text cannot be the primary text of a link"
			-->
			<a href="<?php echo esc_url( home_url() ); ?>" class="custom-logo-link" rel="home" itemprop="url">
				<img src="<?php echo esc_url( $url ); ?>" class="custom-logo" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" itemprop="logo">
			</a>

			<span class="screen-reader-text"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
		</div>
		<?php
	}
}
