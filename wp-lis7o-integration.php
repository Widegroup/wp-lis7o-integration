<?php
/**
 * Plugin Name: Lis7o Integration
 * Plugin URI: http://lis7o.com/plugins
 * Description: Platform lis7o Integration
 * Version: 1.0
 * Author: @LucasZdv
 * Author URI: https://github.com/lucaszdv
 * License: GPL2
 */

//Unblock Login in iframe
remove_action('login_init', 'send_frame_options_header');

//Unblock Dashboard in Iframe
remove_action('admin_init', 'send_frame_options_header');