<?php
/**
 * Title: footer
 * Slug: gerdes-wollmann/footer
 * Inserter: no
 */
?>
<!-- wp:group {"className":"gw-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"backgroundColor":"contrast","textColor":"base-2","layout":{"type":"constrained","wideSize":"1280px"}} -->
<div id="kontakt" class="wp-block-group gw-footer has-base-2-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":null,"className":"gw-footer-columns","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns gw-footer-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"300","lineHeight":"1"}},"textColor":"base","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-x-large-font-size" style="font-weight:300;line-height:1"><?php esc_html_e('Gerdes &amp; Wollmann', 'gerdes-wollmann');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.15em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0.5rem"}}},"textColor":"accent-1","fontSize":"small"} -->
<p class="has-accent-1-color has-text-color has-small-font-size" style="margin-top:0.5rem;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e('Fachärztinnnen für Allgemeinmedizin', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"spacing":{"margin":{"top":"1.25rem"}}},"textColor":"accent-4","fontSize":"medium"} -->
<p class="has-accent-4-color has-text-color has-medium-font-size" style="margin-top:1.25rem;line-height:1.7"><?php esc_html_e('Ihre Gesundheit in vertrauten Händen. Persönlich, nahbar und seit Jahren Teil Ihrer Nachbarschaft.', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:30%"><!-- wp:heading {"level":4,"style":{"typography":{"letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"}},"textColor":"accent-1","fontSize":"small"} -->
<h4 class="wp-block-heading has-accent-1-color has-text-color has-small-font-size" style="font-weight:500;letter-spacing:0.16em;text-transform:uppercase"><?php esc_html_e('Kontakt', 'gerdes-wollmann');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"},"spacing":{"margin":{"top":"1rem"}}},"textColor":"accent-4","fontSize":"medium"} -->
<p class="has-accent-4-color has-text-color has-medium-font-size" style="margin-top:1rem;line-height:1.8"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Ludwig-Wucherer-Str. 10,%1$s06108 Halle (Saale)', 'gerdes-wollmann' ), '<br>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"},"spacing":{"margin":{"top":"1rem"}}},"textColor":"accent-4","fontSize":"medium"} -->
<p class="has-accent-4-color has-text-color has-medium-font-size" style="margin-top:1rem;line-height:1.8"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element, 3. is a 'br' HTML element, 4. is the start of a 'a' HTML element, 5. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$s0345 678 23 33%2$s%3$s%4$spraxis@gerdes-wollmann.de%5$s', 'gerdes-wollmann' ), '<a href="' . esc_url( 'tel:03456782333' ) . '">', '</a>', '<br>', '<a href="' . esc_url( 'mailto:praxis@gerdes-wollmann.de' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:30%"><!-- wp:heading {"level":4,"style":{"typography":{"letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"accent-1","fontSize":"small"} -->
<h4 class="wp-block-heading has-accent-1-color has-text-color has-link-color has-small-font-size" style="font-weight:500;letter-spacing:0.16em;text-transform:uppercase"><?php esc_html_e('Heute', 'gerdes-wollmann');?></h4>
<!-- /wp:heading -->

<!-- wp:telex/block-telex-hours-block {"displayMode":"day","showReasonClosed":false,"friendlyTwelves":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|30"}}},"backgroundColor":"contrast-2"} -->
<hr class="wp-block-separator has-text-color has-contrast-2-color has-alpha-channel-opacity has-contrast-2-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator -->

<!-- wp:navigation {"textColor":"base","backgroundColor":"contrast","overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"}} /--></div>
<!-- /wp:group -->