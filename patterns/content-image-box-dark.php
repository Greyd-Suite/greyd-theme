<?php
/**
 * Title: Image Box, Dark
 * Slug: greyd-wp/content-image-box-dark
 * Description:
 * Categories: greyd-content
 * Keywords:
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/white-and-black-cubes-and-pyramids.webp","dimRatio":80,"customOverlayColor":"#adadad","focalPoint":{"x":0.29,"y":1},"minHeight":287,"minHeightUnit":"px","gradient":"primary-to-foreground","contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|lightest"}}},"color":{}},"textColor":"lightest"} -->
<div class="wp-block-cover is-light has-lightest-color has-text-color has-link-color" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:287px">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-to-foreground-gradient-background" style="background-color:#adadad"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/white-and-black-cubes-and-pyramids.webp" style="object-position:29% 100%" data-object-fit="cover" data-object-position="29% 100%" />
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|darkest"}}},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"8px","right":"8px"}},"border":{"radius":"4px"}},"backgroundColor":"lightest","textColor":"darkest","layout":{"type":"default"}} -->
			<div class="wp-block-group has-darkest-color has-lightest-background-color has-text-color has-background has-link-color" style="border-radius:4px;padding-top:4px;padding-right:8px;padding-bottom:4px;padding-left:8px">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Creative', 'greyd-wp' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:spacer -->
		<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Join the Excitement', 'greyd-wp' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Be part of an extraordinary gathering. Immerse yourself in unforgettable experiences, connect with like-minded design enthusiasts, and create lasting memories.', 'greyd-wp' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->