<?php
/**
 * Banner Section
 * 
 * slug: personal-bodyguard/banner
 * title: Banner
 * categories: personal-bodyguard
 */

return array(
    'title'      =>__( 'Banner', 'personal-bodyguard' ),
    'categories' => array( 'personal-bodyguard' ),
    'content'    => '<!-- wp:group {"className":"slider-main-box","style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<div class="wp-block-group slider-main-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/banner-image.png","id":143,"dimRatio":60,"overlayColor":"secaccent","isUserOverlayColor":true,"minHeight":500,"minHeightUnit":"px","contentPosition":"center center","className":"banner-section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"85%","wideSize":"85%"}} -->
<div class="wp-block-cover banner-section" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-secaccent-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-143" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner-image.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"banner-column-section"} -->
<div class="wp-block-columns banner-column-section"><!-- wp:column {"width":"","className":"banner-content-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-column banner-content-section" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3","textTransform":"capitalize","fontSize":"45px"}},"fontFamily":"roboto"} -->
<h2 class="wp-block-heading has-roboto-font-family" style="font-size:45px;font-style:normal;font-weight:700;line-height:1.3;text-transform:capitalize">'. esc_html('Bodyguards','personal-bodyguard') .'<br>'. esc_html('At Your Service','personal-bodyguard') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-col01-text","style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"small","fontFamily":"sourcecodepro"} -->
<p class="banner-col01-text has-background-color has-text-color has-link-color has-sourcecodepro-font-family has-small-font-size" style="font-style:normal;font-weight:500;line-height:1.5">'. esc_html('Trusted Protection for High-Profile Clients.','personal-bodyguard') .'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","className":"banner-button-text","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"3px"}},"fontSize":"medium","fontFamily":"roboto"} -->
<div class="wp-block-button has-custom-font-size banner-button-text has-roboto-font-family has-medium-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><a class="wp-block-button__link has-accent-background-color has-background wp-element-button" style="border-radius:3px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">'. esc_html('learn More','personal-bodyguard') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","className":"column-section02","style":{"spacing":{"padding":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column column-section02" style="padding-left:var(--wp--preset--spacing--40);flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);