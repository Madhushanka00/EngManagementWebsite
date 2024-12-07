<?php
/**
 * Category Section
 * 
 * slug: personal-bodyguard/team-section
 * title: Team Section
 * categories: personal-bodyguard
 */

return array(
    'title'      =>__( 'Team Section', 'personal-bodyguard' ),
    'categories' => array( 'personal-bodyguard' ),
    'content'    => '<!-- wp:columns {"className":"about-section-inner","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns about-section-inner" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"className":"about-sec01"} -->
<div class="wp-block-column about-sec01"><!-- wp:columns {"className":"image-section"} -->
<div class="wp-block-columns image-section"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":146,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/guard.png" alt="" class="wp-image-146" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"video-blog-section"} -->
<div class="wp-block-columns video-blog-section"><!-- wp:column {"width":"30%","className":"video-blog-section01"} -->
<div class="wp-block-column video-blog-section01" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%","className":"video-blog-section02","backgroundColor":"background"} -->
<div class="wp-block-column video-blog-section02 has-background-background-color has-background" style="flex-basis:75%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"100px","className":"video-blog01"} -->
<div class="wp-block-column video-blog01" style="flex-basis:100px"><!-- wp:image {"id":151,"width":"100px","height":"100px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"right"} -->
<figure class="wp-block-image alignright size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/video-back.png" alt="" class="wp-image-151" style="object-fit:cover;width:100px;height:100px"/></figure>
<!-- /wp:image -->

<!-- wp:wpzoom-video-popup-block/block {"url":"https://youtu.be/9xwazD5SyVg?si=hJDVZEw9TUHTJ3SA","text":"","icon":2,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontSize":"24px"}},"textColor":"secaccent"} -->
<a class="wp-block-wpzoom-video-popup-block-block wpzoom-video-popup-block has-secaccent-color has-text-color has-link-color" href="https://youtu.be/9xwazD5SyVg?si=hJDVZEw9TUHTJ3SA" style="font-size:24px"><span class="wpzoom-video-popup-block_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true"><path d="m14.25 10.367c-1-0.57778-2.2504 0.14388-2.2504 1.2988v8.6674c0 1.155 1.2504 1.8766 2.2504 1.2988l8.2498-4.7666c0.3094-0.1786 0.4998-0.5088 0.4998-0.86588 0-0.35714-0.1904-0.68718-0.4998-0.86586zm-14.25 5.6326c0-8.8366 7.1634-16 16-16 8.8366 0 16 7.1634 16 16 0 8.8366-7.1634 16-16 16-8.8366 0-16-7.1634-16-16zm16-14c-7.732 0-14 6.268-14 14 0 7.732 6.268 14 14 14 7.732 0 14-6.268 14-14 0-7.732-6.268-14-14-14z" fill="currentColor"></path></svg></span></a>
<!-- /wp:wpzoom-video-popup-block/block --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"video-blog02","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column video-blog02" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"upper-heading","fontFamily":"sourcecodepro"} -->
<h2 class="wp-block-heading has-sourcecodepro-font-family has-upper-heading-font-size" style="font-style:normal;font-weight:600">'. esc_html('Watch Our Intro','personal-bodyguard') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"lineHeight":"1.5","fontSize":"11px"}},"textColor":"secaccent","fontFamily":"roboto"} -->
<p class="has-secaccent-color has-text-color has-link-color has-roboto-font-family" style="font-size:11px;line-height:1.5">'. esc_html('Your safety is our priority. We provide expert bodyguard services tailored to protect you, your family, and your assets.','personal-bodyguard') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","className":"about-section"} -->
<div class="wp-block-column is-vertically-aligned-top about-section"><!-- wp:paragraph {"align":"left","className":"about-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontSize":"upper-heading","fontFamily":"roboto"} -->
<p class="has-text-align-left about-text has-accent-color has-text-color has-link-color has-roboto-font-family has-upper-heading-font-size"><img class="wp-image-147" style="width: 32px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/about-icon.png" alt="">'. esc_html(' About Us','personal-bodyguard') .'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"about-heading","style":{"typography":{"fontSize":"26px"}},"fontFamily":"sourcecodepro"} -->
<h2 class="wp-block-heading about-heading has-sourcecodepro-font-family" style="font-size:26px">'. esc_html('Professional Bodyguard Services You Can Trust','personal-bodyguard') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"about-content","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"lineHeight":"1.8"}},"textColor":"secaccent","fontSize":"extra-small","fontFamily":"roboto"} -->
<p class="about-content has-secaccent-color has-text-color has-link-color has-roboto-font-family has-extra-small-font-size" style="line-height:1.8">'. esc_html('We specialize in providing elite, confidential, and highly trained security services tailored to meet the needs of individuals, executives, and high-profile clients. With years of experience in personal protection, our team of dedicated professionals','personal-bodyguard') .'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"about-list01","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"secaccent","fontSize":"medium","fontFamily":"roboto"} -->
<h2 class="wp-block-heading about-list01 has-secaccent-color has-text-color has-link-color has-roboto-font-family has-medium-font-size" style="font-style:normal;font-weight:400">'. esc_html('Our Commitment to Your Safety','personal-bodyguard') .'</h2>
<!-- /wp:heading -->

<!-- wp:heading {"className":"about-list02","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"secaccent","fontSize":"medium","fontFamily":"roboto"} -->
<h2 class="wp-block-heading about-list02 has-secaccent-color has-text-color has-link-color has-roboto-font-family has-medium-font-size" style="font-style:normal;font-weight:400">'. esc_html('Protecting What Matters Most','personal-bodyguard') .'</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"client-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group client-section" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":145,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/client.png" alt="" class="wp-image-145"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"secaccent","fontSize":"medium","fontFamily":"sourcecodepro"} -->
<p class="has-secaccent-color has-text-color has-link-color has-sourcecodepro-font-family has-medium-font-size" style="font-style:normal;font-weight:500">'. esc_html('Happy Customer','personal-bodyguard') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"about-button"} -->
<div class="wp-block-buttons about-button"><!-- wp:button {"backgroundColor":"secaccent","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"capitalize"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"3px"}},"fontSize":"medium","fontFamily":"roboto"} -->
<div class="wp-block-button has-custom-font-size has-roboto-font-family has-medium-font-size" style="font-style:normal;font-weight:400;text-transform:capitalize"><a class="wp-block-button__link has-secaccent-background-color has-background wp-element-button" style="border-radius:3px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">'. esc_html('More About Us','personal-bodyguard') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',
    );