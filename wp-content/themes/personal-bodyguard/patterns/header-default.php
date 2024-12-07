<?php
/**
 * Header Default
 * 
 * slug: personal-bodyguard/header-default
 * title: Header Default
 * categories: personal-bodyguard
 */

return array(
    'title'      =>__( 'Header Default', 'personal-bodyguard' ),
    'categories' => array( 'personal-bodyguard' ),
    'content'    => '<!-- wp:group {"className":"header-box-upper","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"center"}} -->
<div class="wp-block-group header-box-upper" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"wide","className":"top-header","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"backgroundColor":"cyan-bluish-gray","layout":{"type":"constrained","contentSize":"85%","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide top-header has-cyan-bluish-gray-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"className":"top-menu-group","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"0"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px","topLeft":"10px","topRight":"10px"}}}} -->
    <div class="wp-block-columns top-menu-group" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"header-mail","style":{"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
    <div class="wp-block-column is-vertically-aligned-center header-mail has-primary-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0;flex-basis:40%"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"tiny","fontFamily":"sourcecodepro"} -->
    <p class="has-text-align-left has-primary-color has-text-color has-link-color has-sourcecodepro-font-family has-tiny-font-size" style="font-style:normal;font-weight:500"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.3168 8.11592L16.4609 5.73598V2.81485C16.4609 2.49773 16.2038 2.24063 15.8867 2.24063H12.2728L10.1378 0.39031C9.92192 0.20323 9.60147 0.20323 9.38564 0.39031L7.25066 2.24063H3.63672C3.3196 2.24063 3.0625 2.49773 3.0625 2.81485V5.73598L0.206604 8.11592C0.0757203 8.22499 0 8.38661 0 8.55704V19.2758C0 19.5929 0.257097 19.85 0.574219 19.85H18.9492C19.2663 19.85 19.5234 19.5929 19.5234 19.2758V8.55704C19.5234 8.38661 19.4477 8.22499 19.3168 8.11592ZM6.52951 13.9164L1.14844 18.1017V9.73108L6.52951 13.9164ZM7.66184 14.4906H11.8616L17.2756 18.7016H2.2478L7.66184 14.4906ZM12.9939 13.9164L18.375 9.73108V18.1017L12.9939 13.9164ZM18.0338 8.54161L16.4609 9.76492V7.2309L18.0338 8.54161ZM9.76171 1.58411L10.5193 2.24063H9.00417L9.76171 1.58411ZM15.3125 3.38907V10.6581L11.8616 13.3422H7.66184L4.21094 10.6581V3.38907H15.3125ZM3.0625 9.76492L1.48968 8.54161L3.0625 7.23094V9.76492Z" fill="#F55E10"/>
<path d="M7.19666 11.6862C7.90184 12.2356 8.78024 12.5517 9.67009 12.5763C9.67553 12.5765 9.68088 12.5766 9.68628 12.5766C9.99605 12.5766 10.2514 12.3298 10.26 12.0182C10.2687 11.7012 10.0188 11.4371 9.70186 11.4284C8.35203 11.391 7.16887 10.4508 6.82465 9.14186C6.4101 7.56567 7.30282 5.94346 8.857 5.44871C9.64547 5.19774 10.4826 5.27163 11.2139 5.65681C11.9427 6.04058 12.4758 6.6852 12.7159 7.47253C12.8655 8.04047 12.8147 8.57147 12.5465 9.24587C12.4804 9.41209 12.2766 9.79865 11.8132 9.79865C11.762 9.79865 11.7164 9.76048 11.6937 9.73771C11.6284 9.67202 11.5896 9.57428 11.5901 9.47636L11.6059 6.28619C11.6075 5.96907 11.3517 5.71071 11.0345 5.70914C11.0336 5.70914 11.0326 5.70914 11.0316 5.70914C10.7515 5.70914 10.5181 5.91023 10.4679 6.1764C10.2089 6.04016 9.92056 5.96785 9.61718 5.96785C9.06559 5.96785 8.52537 6.21576 8.13501 6.64795C7.73918 7.08623 7.52121 7.68254 7.52121 8.32697C7.52121 8.96852 7.72609 9.57126 8.09807 10.0242C8.48391 10.494 9.02352 10.7634 9.57852 10.7634C10.0034 10.7634 10.3936 10.6119 10.7155 10.3502C10.7644 10.4205 10.819 10.4869 10.8797 10.5479C11.1359 10.8054 11.4674 10.9472 11.8132 10.9472C12.7663 10.9472 13.3681 10.2876 13.6136 9.67033C13.9768 8.75717 14.0415 7.98523 13.8232 7.16754C13.8216 7.16157 13.8199 7.1556 13.8181 7.1497C13.4897 6.06148 12.7549 5.17045 11.749 4.64071C10.7433 4.11102 9.59249 4.00938 8.50864 4.35445C7.48128 4.68148 6.62669 5.38632 6.10228 6.33914C5.57767 7.29226 5.43975 8.39139 5.71395 9.43402C5.95141 10.3367 6.46411 11.1155 7.19666 11.6862ZM9.57856 9.61498C9.13963 9.61498 8.66969 9.09741 8.66969 8.32697C8.66969 7.56915 9.15146 7.11628 9.61722 7.11628C10.0915 7.11628 10.4271 7.57903 10.4478 8.24983L10.447 8.39419C10.4198 9.07418 10.0408 9.61498 9.57856 9.61498Z" fill="#F55E10"/>
</svg><a href="mailto:support@example.com">'. esc_html('support@example.com','personal-bodyguard') .'</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"20%","className":"top-header-empty"} -->
    <div class="wp-block-column is-vertically-aligned-center top-header-empty" style="flex-basis:20%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"40%","className":"header-translate-col","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"80px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-column is-vertically-aligned-center header-translate-col" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:80px;flex-basis:40%"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"","layout":{"type":"default"}} -->
    <div class="wp-block-column"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#fff","openInNewTab":true,"size":"has-normal-icon-size","className":"is-style-logos-only","style":{"spacing":{"margin":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":{"left":"0"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
    <ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /-->
    
    <!-- wp:social-link {"url":"www.twitter.com","service":"x"} /-->
    
    <!-- wp:social-link {"url":"www.pintrest.com","service":"pinterest"} /-->
    
    <!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"110px","className":"header-translate"} -->
<div class="wp-block-column header-translate" style="flex-basis:110px"><!-- wp:shortcode -->
<!-- /wp:shortcode --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"className":"header-middle","layout":{"type":"constrained","contentSize":"85%"}} -->
    <div class="wp-block-group header-middle"><!-- wp:columns {"verticalAlignment":"center","className":"menu-group-top","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px","topLeft":"10px","topRight":"10px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center menu-group-top" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-logo","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"0px","bottom":"0px"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
    <div class="wp-block-column is-vertically-aligned-center header-logo has-primary-color has-text-color has-link-color" style="padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40);flex-basis:20%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"pt-serif"} /--></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"80%","className":"middle-header02"} -->
    <div class="wp-block-column is-vertically-aligned-center middle-header02" style="flex-basis:80%"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"33.33%","className":"info-image"} -->
    <div class="wp-block-column info-image" style="flex-basis:33.33%"><!-- wp:image {"id":142,"sizeSlug":"full","linkDestination":"none","align":"right"} -->
    <figure class="wp-block-image alignright size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/address.png" alt="" class="wp-image-142"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"color":{"text":"#9ea1ac"},"elements":{"link":{"color":{"text":"#9ea1ac"}}}},"fontFamily":"roboto"} -->
    <p class="has-text-color has-link-color has-roboto-font-family" style="color:#9ea1ac"><a href="#">'. esc_html('123 Glassford Street New York, USA','personal-bodyguard') .'</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"}}} -->
    <div class="wp-block-column" style="padding-top:0;padding-bottom:0"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","className":"info-image"} -->
    <div class="wp-block-column is-vertically-aligned-center info-image" style="flex-basis:33.33%"><!-- wp:image {"id":150,"sizeSlug":"full","linkDestination":"none","align":"right"} -->
    <figure class="wp-block-image alignright size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/time.png" alt="" class="wp-image-150"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontFamily":"roboto"} -->
    <h2 class="wp-block-heading has-accent-color has-text-color has-link-color has-roboto-font-family">'. esc_html('Timings','personal-bodyguard') .'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"color":{"text":"#9ea1ac"},"elements":{"link":{"color":{"text":"#9ea1ac"}}}},"fontFamily":"roboto"} -->
    <p class="has-text-color has-link-color has-roboto-font-family" style="color:#9ea1ac">'. esc_html('Mon To Sat: 9:00am - 5:00pm','personal-bodyguard') .'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"}}} -->
    <div class="wp-block-column" style="padding-top:0;padding-bottom:0"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","className":"info-image"} -->
    <div class="wp-block-column is-vertically-aligned-center info-image" style="flex-basis:33.33%"><!-- wp:image {"id":149,"sizeSlug":"full","linkDestination":"none","align":"right"} -->
    <figure class="wp-block-image alignright size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/phone.png" alt="" class="wp-image-149"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontFamily":"roboto"} -->
    <h2 class="wp-block-heading has-accent-color has-text-color has-link-color has-roboto-font-family">'. esc_html('On-Call Service 24/7','personal-bodyguard') .'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"color":{"text":"#9ea1ac"},"elements":{"link":{"color":{"text":"#9ea1ac"}}}},"fontFamily":"roboto"} -->
    <p class="has-text-color has-link-color has-roboto-font-family" style="color:#9ea1ac"><a href="tel:+00 123 456 78900">'. esc_html('Call Us : +00 123 456 78900','personal-bodyguard') .'</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"className":"header-bottom","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%","wideSize":"","justifyContent":"center"}} -->
    <div class="wp-block-group header-bottom" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"className":"menu-group","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px","topLeft":"10px","topRight":"10px"}}}} -->
    <div class="wp-block-columns menu-group" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"7.5%","className":"bottom-empty-col","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"0px","bottom":"0px"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
    <div class="wp-block-column is-vertically-aligned-center bottom-empty-col has-primary-color has-text-color has-link-color" style="padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40);flex-basis:7.5%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"83%","className":"header-inner-menu"} -->
    <div class="wp-block-column is-vertically-aligned-center header-inner-menu" style="flex-basis:83%"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"","className":"menu-column","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
    <div class="wp-block-column is-vertically-aligned-center menu-column" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:navigation {"textColor":"background","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"is-head-menu","style":{"typography":{"textTransform":"capitalize"},"spacing":{"blockGap":"var:preset|spacing|50"}},"fontSize":"small","fontFamily":"roboto","layout":{"type":"flex","justifyContent":"left"}} --><!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
                
        <!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
        
        <!-- wp:navigation-link {"label":"Services","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
        
        <!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
        
        <!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

        <!-- /wp:navigation --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"50px","className":"search-column"} -->
    <div class="wp-block-column is-vertically-aligned-center search-column" style="flex-basis:50px"><!-- wp:search {"label":"Search","showLabel":false,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"align":"right"} /--></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"17%","className":"bottom-button-col","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-column is-vertically-aligned-center bottom-button-col" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:17%"><!-- wp:buttons {"className":"header-button","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"right"}} -->
    <div class="wp-block-buttons header-button" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textAlign":"right","backgroundColor":"primary","textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"tiny","fontFamily":"roboto"} -->
    <div class="wp-block-button has-custom-font-size has-roboto-font-family has-tiny-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color has-text-align-right wp-element-button" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">'. esc_html('Get A Quote','personal-bodyguard') .'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"7.5%","className":"bottom-empty-col","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"0px","bottom":"0px"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
    <div class="wp-block-column is-vertically-aligned-center bottom-empty-col has-primary-color has-text-color has-link-color" style="padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40);flex-basis:7.5%"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);