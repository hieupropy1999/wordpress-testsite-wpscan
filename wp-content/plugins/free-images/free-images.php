<?php
/**
 * Plugin Name: Download Free Images
 * Description: Download royalty free images/photos under CC0 public domain for your own blog. Select images/photos from 1.4 million royalty free stock photos.
 * Plugin URI: https://profiles.wordpress.org/mahesh901122/
 * Author: Mahesh M. Waghmare
 * Author URI: https://maheshwaghmare.com/
 * Version: 1.2.2
 * License: GNU General Public License v2.0
 * Text Domain: free-images
 *
 * @package Free Images
 */

// Set constants.
define( 'FREE_IMAGES_VER', '1.2.2' );
define( 'FREE_IMAGES_FILE', __FILE__ );
define( 'FREE_IMAGES_BASE', plugin_basename( FREE_IMAGES_FILE ) );
define( 'FREE_IMAGES_DIR', plugin_dir_path( FREE_IMAGES_FILE ) );
define( 'FREE_IMAGES_URI', plugins_url( '/', FREE_IMAGES_FILE ) );

require_once FREE_IMAGES_DIR . 'classes/class-free-images.php';
