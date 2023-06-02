<?php
/**
* Plugin Name: urp-wx-contact
* Plugin URI: https://wx-contact.uranplus.com
* Description: This is a plug-in for displaying WeChat QR codes on the sidebar of the website.
* Version: 1.0
* Author: Ray_wu
* Author URI: https://www.yfblog.cn
**/

$imageURL = plugins_url( 'images/code.jpg', __FILE__ );
function myplugin_load_scripts() {
    wp_enqueue_style( 'my-floating-box-style', plugin_dir_url( __FILE__ ) . 'css/style.css', array(), '1.0.0', 'all' );
}
function myplugin_add_dialog() {
    global $imageURL;
    echo '<div class="my-dialog-icon">
        联系我们
        <div class="code">
            <img src="' . $imageURL . '" alt="My Image">
        </div>
        </div>';
}
add_action( 'wp_head', 'myplugin_add_dialog' );
add_action( 'wp_enqueue_scripts', 'myplugin_load_scripts' );


