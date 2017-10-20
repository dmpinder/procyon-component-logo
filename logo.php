<?php
/*
  Plugin Name: Procyon Component: Logo
  Plugin URI: https://github.com/dmpinder/procyon-component-logo
  Description: A drop-in PHP component to create a WCAG-compliant logo. Based on the excellent 10up component library.
  Author: Darren Pinder, 10up, mattradford
  Version: 1.0.1
  Author URI: https://vatu.co.uk
  GitHub Plugin URI: https://github.com/dmpinder/procyon-component-logo
  GitHub Branch:     master
 */

function procyon_component_logo() { ?>

<?php if ( has_custom_logo() ) : ?>
	<div itemscope itemtype="http://schema.org/Organization">
		<?php the_custom_logo(); // The WordPress-provided function to create the logo ?>
		<!--
			Visually hide this text.
			WCAG 2.0: “image alt text cannot be the primary text of a link"
		-->
		<span class="screen-reader-text"><?php echo get_bloginfo('name'); ?></span>
	</div>
<?php endif; ?>

<?php } ?>
