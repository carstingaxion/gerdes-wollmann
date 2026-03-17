<?php
/**
 * Title: home
 * Slug: gerdes-wollmann/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"front-page-header"} /-->

<!-- wp:group {"className":"gw-hero gw-dot-pattern","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0"}}},"backgroundColor":"base","layout":{"type":"constrained","wideSize":"1280px"}} -->
<div class="wp-block-group gw-hero gw-dot-pattern has-base-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"className":"gw-hero-columns","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns gw-hero-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"className":"gw-practice-name","style":{"typography":{"fontWeight":"300","lineHeight":"0.95","letterSpacing":"-0.03em"}},"fontSize":"huge"} -->
<h1 class="wp-block-heading gw-practice-name has-huge-font-size" style="font-weight:300;letter-spacing:-0.03em;line-height:0.95"><?php /* Translators: 1. is a 'br' HTML element, 2. is the start of a 'em' HTML element, 3. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( 'Gerdes%1$s%2$s&%3$s Wollmann', 'gerdes-wollmann' ), '<br>', '<em>', '</em>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gw-subtitle","style":{"typography":{"letterSpacing":"0.15em","textTransform":"uppercase","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|40"}}},"textColor":"accent-3","fontSize":"medium"} -->
<p class="gw-subtitle has-accent-3-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--40);font-weight:400;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e('Fachärztinnnen für Allgemeinmedizin', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7","fontStyle":"italic","fontWeight":"400"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:italic;font-weight:400;line-height:1.7"><?php esc_html_e('Ihre Gesundheit in vertrauten Händen. Persönlich, nahbar und seit Jahren Teil Ihrer Nachbarschaft.', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"radius":{"topLeft":"9px","topRight":"9px","bottomLeft":"9px","bottomRight":"9px"},"top":{"color":"var:preset|color|accent-3","width":"2px"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"backgroundColor":"contrast","textColor":"base-2","layout":{"type":"constrained"}} -->
<div id="sprechzeiten" class="wp-block-group has-base-2-color has-contrast-background-color has-text-color has-background has-link-color" style="border-top-left-radius:9px;border-top-right-radius:9px;border-bottom-left-radius:9px;border-bottom-right-radius:9px;border-top-color:var(--wp--preset--color--accent-3);border-top-width:2px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);text-transform:uppercase"><?php esc_html_e('Sprechzeiten', 'gerdes-wollmann');?></h2>
<!-- /wp:heading -->

<!-- wp:telex/block-telex-hours-block {"showTodaysDate":false} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"gw-image-frame","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group gw-image-frame" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Bildschirmfoto-vom-2026-03-17-12-51-38-1024x684.png" alt="<?php esc_attr_e('Das Haus unserer Praxis in der Ludwig-Wucherer-Straße in Halle, aufgenommen an einem sonnigen Tag.', 'gerdes-wollmann');?>" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gw-contact-strip","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0"}}},"backgroundColor":"accent-4","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group gw-contact-strip has-accent-4-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500","lineHeight":"1"}},"textColor":"accent-3","fontSize":"small"} -->
<p class="has-accent-3-color has-text-color has-small-font-size" style="font-weight:500;letter-spacing:0.12em;line-height:1;text-transform:uppercase"><?php esc_html_e('Telefon', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$s0345 678 23 33%2$s', 'gerdes-wollmann' ), '<a href="' . esc_url( 'tel:03456782333' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500","lineHeight":"1"}},"textColor":"accent-3","fontSize":"small"} -->
<p class="has-accent-3-color has-text-color has-small-font-size" style="font-weight:500;letter-spacing:0.12em;line-height:1;text-transform:uppercase"><?php esc_html_e('E-Mail', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$spraxis@gerdes-wollmann.de%2$s', 'gerdes-wollmann' ), '<a href="' . esc_url( 'mailto:praxis@gerdes-wollmann.de' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500","lineHeight":"1"}},"textColor":"accent-3","fontSize":"small"} -->
<p class="has-accent-3-color has-text-color has-small-font-size" style="font-weight:500;letter-spacing:0.12em;line-height:1;text-transform:uppercase"><?php esc_html_e('Adresse', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('Ludwig-Wucherer-Str. 10, 06108 Halle (Saale)', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0"}}},"backgroundColor":"base","layout":{"type":"constrained","wideSize":"1280px"}} -->
<div id="aktuelles" class="wp-block-group has-base-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"300"},"spacing":{"margin":{"bottom":"0.5rem"}}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-bottom:0.5rem;font-weight:300"><?php esc_html_e('Aktuelles aus der Praxis', 'gerdes-wollmann');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"accent-1","fontSize":"small"} -->
<p class="has-text-align-center has-accent-1-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-weight:500;letter-spacing:0.16em;text-transform:uppercase"><?php esc_html_e('Neuigkeiten und Hinweise', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":1,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false},"className":"gw-news-query","layout":{"type":"default"}} -->
<div class="wp-block-query gw-news-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"30rem"}} -->
<!-- wp:post-date {"format":"j. F Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500"}},"textColor":"accent-1","fontSize":"small"} /-->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontWeight":"500","lineHeight":"1.35"},"spacing":{"margin":{"top":"0.5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|accent-1"}}}}},"fontSize":"large"} /-->

<!-- wp:post-content {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|accent-1"}}}}},"fontSize":"medium"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Derzeit gibt es keine aktuellen Meldungen.', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->