<?php
/*
Plugin Name: Dideo
Plugin URI: 
Description: نمایش ویدئوهای دیدئو با استفاده از شورتکد
Version: 1.0
Author: Mehran Shomali
Author URI: http://mshomali.ir
*/

function dideo($atts) {
    extract( shortcode_atts( array(
        'id' => '',
    ), $atts ) );

    return "<style>.h_iframe-dideo_embed_frame{position:relative;} .h_iframe-dideo_embed_frame .ratio {display:block;width:100%;height:auto;} .h_iframe-dideo_embed_frame iframe {position:absolute;top:0;left:0;width:100%; height:100%; border:none;}</style><div class='h_iframe-dideo_embed_frame'>
    <span style='display: block;padding-top: 57%'></span><iframe src='https://www.dideo.ir/embed/{$id}' allowfullscreen='true' style='border:none!important'></iframe></div>";
}
add_shortcode( 'dideo', 'dideo' );

function dideo_editor_button($buttons) {
    array_push($buttons, "separator", "dideo_shortcode");
    return $buttons;
}
add_filter('mce_buttons', 'dideo_editor_button');

function dideo_shortcode_register($plugin_array)	{
    $plugin_array['dideo_shortcode'] = plugins_url('tinyMCE/scripts.js', __FILE__);
    return $plugin_array;
}
add_filter('mce_external_plugins', "dideo_shortcode_register");