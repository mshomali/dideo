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
        'slug' => '',
        'width' => '100%',
        'height' => 450,
        'style' => 'margin: 15px 1px 10px 1px;' 
    ), $atts ) );

    //<iframe src='https://www.dideo.ir/embed/v/yt/wW7ptD1gB8Q' allowFullScreen='true' webkitallowfullscreen='true' mozallowfullscreen='true' ></iframe>
    return "<style>.h_iframe-dideo_embed_frame{position:relative;} .h_iframe-dideo_embed_frame .ratio {display:block;width:100%;height:auto;} .h_iframe-dideo_embed_frame iframe {position:absolute;top:0;left:0;width:100%; height:100%; border:none;}</style><div class='h_iframe-dideo_embed_frame'>
    <span style='display: block;padding-top: 57%'></span><center style='{$style}'><iframe src='https://www.dideo.ir/embed/{$id}' width='{$width}' height='{$height}' allowfullscreen='true' style='border:none!important'></iframe></center></div>";
}
add_shortcode( 'dideo', 'dideo' );