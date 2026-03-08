<?php
/**
 * Title: home
 * Slug: gerdes-wollmann/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"className":"gw-hero gw-dot-pattern","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0"}}},"backgroundColor":"base","layout":{"type":"constrained","wideSize":"1280px"}} -->
<div class="wp-block-group gw-hero gw-dot-pattern has-base-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"className":"gw-hero-columns","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns gw-hero-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"className":"gw-practice-name","style":{"typography":{"fontWeight":"300","lineHeight":"0.95","letterSpacing":"-0.03em"}},"textColor":"contrast","fontSize":"huge"} -->
<h1 class="wp-block-heading gw-practice-name has-contrast-color has-text-color has-huge-font-size" style="font-weight:300;letter-spacing:-0.03em;line-height:0.95"><?php /* Translators: 1. is a 'br' HTML element, 2. is the start of a 'em' HTML element, 3. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( 'Gerdes%1$s%2$s&%3$s Wollmann', 'gerdes-wollmann' ), '<br>', '<em>', '</em>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gw-subtitle","style":{"typography":{"letterSpacing":"0.15em","textTransform":"uppercase","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|40"}}},"textColor":"accent-3","fontSize":"medium"} -->
<p class="gw-subtitle has-accent-3-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--40);font-weight:400;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e('Fachärztinnnen für Allgemeinmedizin', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7","fontStyle":"italic","fontWeight":"400"}},"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size" style="font-style:italic;font-weight:400;line-height:1.7"><?php esc_html_e('Ihre Gesundheit in vertrauten Händen. Persönlich, nahbar und seit Jahren Teil Ihrer Nachbarschaft.', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gw-hours-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|40"}},"border":{"radius":"6px"}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group gw-hours-card has-base-2-background-color has-background" style="border-radius:6px;margin-top:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4,"style":{"typography":{"letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"}},"textColor":"accent-1","fontSize":"small"} -->
<h4 class="wp-block-heading has-accent-1-color has-text-color has-small-font-size" style="font-weight:500;letter-spacing:0.16em;text-transform:uppercase"><?php esc_html_e('Sprechzeiten', 'gerdes-wollmann');?></h4>
<!-- /wp:heading -->

<!-- wp:group {"className":"gw-hours-row","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group gw-hours-row" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"contrast","fontSize":"medium"} -->
<p class="has-contrast-color has-text-color has-medium-font-size" style="font-weight:500"><?php esc_html_e('Montag', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e('08:00 – 12:00 / 15:00 – 18:00', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gw-hours-row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group gw-hours-row"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"contrast","fontSize":"medium"} -->
<p class="has-contrast-color has-text-color has-medium-font-size" style="font-weight:500"><?php esc_html_e('Dienstag', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e('08:00 – 12:00 / 15:00 – 18:00', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gw-hours-row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group gw-hours-row"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"contrast","fontSize":"medium"} -->
<p class="has-contrast-color has-text-color has-medium-font-size" style="font-weight:500"><?php esc_html_e('Mittwoch', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e('08:00 – 12:00', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gw-hours-row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group gw-hours-row"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"contrast","fontSize":"medium"} -->
<p class="has-contrast-color has-text-color has-medium-font-size" style="font-weight:500"><?php esc_html_e('Donnerstag', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e('08:00 – 12:00 / 15:00 – 18:00', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gw-hours-row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group gw-hours-row"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"contrast","fontSize":"medium"} -->
<p class="has-contrast-color has-text-color has-medium-font-size" style="font-weight:500"><?php esc_html_e('Freitag', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e('08:00 – 12:00', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"gw-image-frame","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group gw-image-frame" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="theme:./assets/design-preview-3-hero.png" alt="<?php esc_attr_e('AI_IMAGE: A warm sunlit view through a clean glass window of a small German medical practice, looking out onto a courtyard garden with flowering window boxes, terracotta pots with herbs, and soft natural daylight filtering through. The interior shows a glimpse of a wooden reception desk with a small vase of wildflowers. Warm amber and green tones dominate. The mood is intimate, welcoming, and homely, like a neighborhood practice that has been there for decades. Shallow depth of field with bokeh on the garden elements. | photorealistic | portrait', 'gerdes-wollmann');?>" style="border-radius:8px"/></figure>
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

<!-- wp:paragraph {"textColor":"contrast","fontSize":"medium"} -->
<p class="has-contrast-color has-text-color has-medium-font-size"><?php esc_html_e('0345 678 23 33', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500","lineHeight":"1"}},"textColor":"accent-3","fontSize":"small"} -->
<p class="has-accent-3-color has-text-color has-small-font-size" style="font-weight:500;letter-spacing:0.12em;line-height:1;text-transform:uppercase"><?php esc_html_e('E-Mail', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast","fontSize":"medium"} -->
<p class="has-contrast-color has-text-color has-medium-font-size"><?php esc_html_e('praxis@gerdes-wollmann.de', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500","lineHeight":"1"}},"textColor":"accent-3","fontSize":"small"} -->
<p class="has-accent-3-color has-text-color has-small-font-size" style="font-weight:500;letter-spacing:0.12em;line-height:1;text-transform:uppercase"><?php esc_html_e('Adresse', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast","fontSize":"medium"} -->
<p class="has-contrast-color has-text-color has-medium-font-size"><?php esc_html_e('Ludwig-Wucherer-Str. 10, 06108 Halle (Saale)', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0"}}},"backgroundColor":"base","layout":{"type":"constrained","wideSize":"1280px"}} -->
<div class="wp-block-group has-base-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"300"},"spacing":{"margin":{"bottom":"0.5rem"}}},"textColor":"contrast","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-xx-large-font-size" style="margin-bottom:0.5rem;font-weight:300"><?php esc_html_e('Aktuelles aus der Praxis', 'gerdes-wollmann');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"accent-1","fontSize":"small"} -->
<p class="has-text-align-center has-accent-1-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-weight:500;letter-spacing:0.16em;text-transform:uppercase"><?php esc_html_e('Neuigkeiten und Hinweise', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":1,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false},"className":"gw-news-query","layout":{"type":"default"}} -->
<div class="wp-block-query gw-news-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"30rem"}} -->
<!-- wp:post-date {"format":"j. F Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500"}},"textColor":"accent-1","fontSize":"small"} /-->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontWeight":"500","lineHeight":"1.35"},"spacing":{"margin":{"top":"0.5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|accent-1"}}}}},"fontSize":"large"} /-->

<!-- wp:post-content {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"contrast-2","fontSize":"medium"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"contrast-2","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-medium-font-size" style="font-style:italic;font-weight:400"><?php esc_html_e('Derzeit gibt es keine aktuellen Meldungen.', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->