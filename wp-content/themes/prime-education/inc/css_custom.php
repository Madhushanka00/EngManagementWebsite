<?php

$prime_education_custom_css = "";

/*-------------------- Container Width-------------------*/

$prime_education_theme_width = get_theme_mod( 'prime_education_theme_width','full-width');

if($prime_education_theme_width == 'full-width'){
$prime_education_custom_css .='body{';
	$prime_education_custom_css .='max-width: 100% !important;';
$prime_education_custom_css .='}';
}else if($prime_education_theme_width == 'container'){
$prime_education_custom_css .='body{';
	$prime_education_custom_css .='width: 80% !important; padding-right: 15px; padding-left: 15px;  margin-right: auto !important; margin-left: auto !important;';
$prime_education_custom_css .='}';
}else if($prime_education_theme_width == 'container-fluid'){
$prime_education_custom_css .='body{';
	$prime_education_custom_css .='width: 95% !important;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$prime_education_custom_css .='}';
}

/*-------------------- Post Content Alignment-------------------*/

$prime_education_single_post_align = get_theme_mod( 'prime_education_single_post_align','left-align');

if($prime_education_single_post_align == 'left-align'){
$prime_education_custom_css .='body:not(.hide-post-meta) .post{';
	$prime_education_custom_css .='text-align: left';
$prime_education_custom_css .='}';
}else if($prime_education_single_post_align == 'right-align'){
$prime_education_custom_css .='body:not(.hide-post-meta) .post{';
	$prime_education_custom_css .='text-align: right';
$prime_education_custom_css .='}';
}else if($prime_education_single_post_align == 'center-align'){
$prime_education_custom_css .='body:not(.hide-post-meta) .post{';
	$prime_education_custom_css .='text-align: center';
$prime_education_custom_css .='}';
}