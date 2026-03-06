<?php
/**
 * Title: index
 * Slug: gerdes-wollmann/index
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"className":"gw-hero gw-dot-pattern","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0"}}},"backgroundColor":"cream","layout":{"type":"constrained","wideSize":"1280px"}} -->
<div class="wp-block-group gw-hero gw-dot-pattern has-cream-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"className":"gw-hero-columns","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns gw-hero-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"className":"gw-practice-name","style":{"typography":{"fontWeight":"300","lineHeight":"0.95","letterSpacing":"-0.03em"}},"textColor":"forest","fontSize":"huge"} -->
<h1 class="wp-block-heading gw-practice-name has-forest-color has-text-color has-huge-font-size" style="font-weight:300;letter-spacing:-0.03em;line-height:0.95"><?php /* Translators: 1. is a 'br' HTML element, 2. is the start of a 'em' HTML element, 3. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( 'Gerdes%1$s%2$s&%3$s Wollmann', 'gerdes-wollmann' ), '<br>', '<em>', '</em>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gw-subtitle","style":{"typography":{"letterSpacing":"0.15em","textTransform":"uppercase","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|40"}}},"textColor":"dusty-rose","fontSize":"medium"} -->
<p class="gw-subtitle has-dusty-rose-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--40);font-weight:400;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e('Fachärztinnen für Allgemeinmedizin', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7","fontStyle":"italic","fontWeight":"400"}},"textColor":"forest-light","fontSize":"large"} -->
<p class="has-forest-light-color has-text-color has-large-font-size" style="font-style:italic;font-weight:400;line-height:1.7"><?php esc_html_e('Ihre Gesundheit in vertrauten Haenden. Persoenlich, nahbar und seit Jahren Teil Ihrer Nachbarschaft.', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gw-hours-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|40"}},"border":{"radius":"6px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group gw-hours-card has-white-background-color has-background" style="border-radius:6px;margin-top:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4,"style":{"typography":{"letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"}},"textColor":"amber","fontSize":"small"} -->
<h4 class="wp-block-heading has-amber-color has-text-color has-small-font-size" style="font-weight:500;letter-spacing:0.16em;text-transform:uppercase"><?php esc_html_e('Sprechzeiten', 'gerdes-wollmann');?></h4>
<!-- /wp:heading -->

<!-- wp:group {"className":"gw-hours-row","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group gw-hours-row" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"forest","fontSize":"medium"} -->
<p class="has-forest-color has-text-color has-medium-font-size" style="font-weight:500"><?php esc_html_e('Montag', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"forest-light","fontSize":"small"} -->
<p class="has-forest-light-color has-text-color has-small-font-size"><?php esc_html_e('08:00 – 12:00 / 15:00 – 18:00', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gw-hours-row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group gw-hours-row"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"forest","fontSize":"medium"} -->
<p class="has-forest-color has-text-color has-medium-font-size" style="font-weight:500"><?php esc_html_e('Dienstag', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"forest-light","fontSize":"small"} -->
<p class="has-forest-light-color has-text-color has-small-font-size"><?php esc_html_e('08:00 – 12:00 / 15:00 – 18:00', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gw-hours-row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group gw-hours-row"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"forest","fontSize":"medium"} -->
<p class="has-forest-color has-text-color has-medium-font-size" style="font-weight:500"><?php esc_html_e('Mittwoch', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"forest-light","fontSize":"small"} -->
<p class="has-forest-light-color has-text-color has-small-font-size"><?php esc_html_e('08:00 – 12:00', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gw-hours-row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group gw-hours-row"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"forest","fontSize":"medium"} -->
<p class="has-forest-color has-text-color has-medium-font-size" style="font-weight:500"><?php esc_html_e('Donnerstag', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"forest-light","fontSize":"small"} -->
<p class="has-forest-light-color has-text-color has-small-font-size"><?php esc_html_e('08:00 – 12:00 / 15:00 – 18:00', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gw-hours-row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group gw-hours-row"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"forest","fontSize":"medium"} -->
<p class="has-forest-color has-text-color has-medium-font-size" style="font-weight:500"><?php esc_html_e('Freitag', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"forest-light","fontSize":"small"} -->
<p class="has-forest-light-color has-text-color has-small-font-size"><?php esc_html_e('08:00 – 12:00', 'gerdes-wollmann');?></p>
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

<!-- wp:group {"className":"gw-contact-strip","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0"}}},"backgroundColor":"aged-paper","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group gw-contact-strip has-aged-paper-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500","lineHeight":"1"}},"textColor":"dusty-rose","fontSize":"small"} -->
<p class="has-dusty-rose-color has-text-color has-small-font-size" style="font-weight:500;letter-spacing:0.12em;line-height:1;text-transform:uppercase"><?php esc_html_e('Telefon', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"forest","fontSize":"medium"} -->
<p class="has-forest-color has-text-color has-medium-font-size"><?php esc_html_e('0800 123 4567', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500","lineHeight":"1"}},"textColor":"dusty-rose","fontSize":"small"} -->
<p class="has-dusty-rose-color has-text-color has-small-font-size" style="font-weight:500;letter-spacing:0.12em;line-height:1;text-transform:uppercase"><?php esc_html_e('E-Mail', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"forest","fontSize":"medium"} -->
<p class="has-forest-color has-text-color has-medium-font-size"><?php esc_html_e('praxis@gerdes-wollmann.de', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500","lineHeight":"1"}},"textColor":"dusty-rose","fontSize":"small"} -->
<p class="has-dusty-rose-color has-text-color has-small-font-size" style="font-weight:500;letter-spacing:0.12em;line-height:1;text-transform:uppercase"><?php esc_html_e('Adresse', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"forest","fontSize":"medium"} -->
<p class="has-forest-color has-text-color has-medium-font-size"><?php esc_html_e('Lindenstr. 42, 10115 Berlin', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0"}}},"backgroundColor":"cream","layout":{"type":"constrained","wideSize":"1280px"}} -->
<div class="wp-block-group has-cream-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"300"},"spacing":{"margin":{"bottom":"0.5rem"}}},"textColor":"forest","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-forest-color has-text-color has-xx-large-font-size" style="margin-bottom:0.5rem;font-weight:300"><?php esc_html_e('Aktuelles aus der Praxis', 'gerdes-wollmann');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"amber","fontSize":"small"} -->
<p class="has-text-align-center has-amber-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-weight:500;letter-spacing:0.16em;text-transform:uppercase"><?php esc_html_e('Neuigkeiten und Hinweise', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"gw-news-grid","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns gw-news-grid"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"gw-news-pin","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"5px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group gw-news-pin has-white-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500"}},"textColor":"amber","fontSize":"small"} -->
<p class="has-amber-color has-text-color has-small-font-size" style="font-weight:500;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('15. Januar 2025', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"500","lineHeight":"1.35"},"spacing":{"margin":{"top":"0.5rem"}}},"textColor":"forest","fontSize":"large"} -->
<h4 class="wp-block-heading has-forest-color has-text-color has-large-font-size" style="margin-top:0.5rem;font-weight:500;line-height:1.35"><?php esc_html_e('Grippeschutzimpfung weiterhin verfuegbar', 'gerdes-wollmann');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65"},"spacing":{"margin":{"top":"0.75rem"}}},"textColor":"forest-light","fontSize":"medium"} -->
<p class="has-forest-light-color has-text-color has-medium-font-size" style="margin-top:0.75rem;line-height:1.65"><?php esc_html_e('Die saisonale Grippeschutzimpfung ist weiterhin in unserer Praxis moeglich. Bitte vereinbaren Sie telefonisch einen Termin. Wir beraten Sie gerne zu Ihrem individuellen Impfschutz.', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"gw-news-pin-alt","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"5px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group gw-news-pin-alt has-white-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500"}},"textColor":"dusty-rose","fontSize":"small"} -->
<p class="has-dusty-rose-color has-text-color has-small-font-size" style="font-weight:500;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('08. Januar 2025', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"500","lineHeight":"1.35"},"spacing":{"margin":{"top":"0.5rem"}}},"textColor":"forest","fontSize":"large"} -->
<h4 class="wp-block-heading has-forest-color has-text-color has-large-font-size" style="margin-top:0.5rem;font-weight:500;line-height:1.35"><?php esc_html_e('Neue Vorsorge-Sprechstunde ab Februar', 'gerdes-wollmann');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65"},"spacing":{"margin":{"top":"0.75rem"}}},"textColor":"forest-light","fontSize":"medium"} -->
<p class="has-forest-light-color has-text-color has-medium-font-size" style="margin-top:0.75rem;line-height:1.65"><?php esc_html_e('Ab Februar bieten wir eine erweiterte Vorsorge-Sprechstunde an. Schwerpunkte sind Herz-Kreislauf-Checks, Hautkrebs-Screening und individuelle Gesundheitsberatung fuer alle Altersgruppen.', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"gw-news-grid","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns gw-news-grid" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"gw-news-pin-alt","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"5px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group gw-news-pin-alt has-white-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500"}},"textColor":"dusty-rose","fontSize":"small"} -->
<p class="has-dusty-rose-color has-text-color has-small-font-size" style="font-weight:500;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('20. Dezember 2024', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"500","lineHeight":"1.35"},"spacing":{"margin":{"top":"0.5rem"}}},"textColor":"forest","fontSize":"large"} -->
<h4 class="wp-block-heading has-forest-color has-text-color has-large-font-size" style="margin-top:0.5rem;font-weight:500;line-height:1.35"><?php esc_html_e('Praxis ueber die Feiertage geschlossen', 'gerdes-wollmann');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65"},"spacing":{"margin":{"top":"0.75rem"}}},"textColor":"forest-light","fontSize":"medium"} -->
<p class="has-forest-light-color has-text-color has-medium-font-size" style="margin-top:0.75rem;line-height:1.65"><?php esc_html_e('Vom 23. Dezember bis zum 1. Januar bleibt unsere Praxis geschlossen. In dringenden Faellen wenden Sie sich bitte an den aerztlichen Bereitschaftsdienst unter 116 117.', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"gw-news-pin","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"5px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group gw-news-pin has-white-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500"}},"textColor":"amber","fontSize":"small"} -->
<p class="has-amber-color has-text-color has-small-font-size" style="font-weight:500;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('01. Dezember 2024', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"500","lineHeight":"1.35"},"spacing":{"margin":{"top":"0.5rem"}}},"textColor":"forest","fontSize":"large"} -->
<h4 class="wp-block-heading has-forest-color has-text-color has-large-font-size" style="margin-top:0.5rem;font-weight:500;line-height:1.35"><?php esc_html_e('Willkommen Frau Dr. Liebermann', 'gerdes-wollmann');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65"},"spacing":{"margin":{"top":"0.75rem"}}},"textColor":"forest-light","fontSize":"medium"} -->
<p class="has-forest-light-color has-text-color has-medium-font-size" style="margin-top:0.75rem;line-height:1.65"><?php esc_html_e('Wir freuen uns, Frau Dr. Liebermann als neue Kollegin in unserem Team begruessen zu duerfen. Sie verstaerkt uns im Bereich der inneren Medizin und Vorsorge.', 'gerdes-wollmann');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->