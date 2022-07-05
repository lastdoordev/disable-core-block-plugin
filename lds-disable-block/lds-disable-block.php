<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://lastdoorsolutions.com/
 * @since             1.0.0
 * @package           Lds_Disable_Block
 *
 * @wordpress-plugin
 * Plugin Name:       Disable Default Blocks
 * Plugin URI:        https://lastdoorsolutions.com/
 * Description:       This plugin disables the default WordPress core block except for Paragraphs, heading, pullquote and spacer.
 * Version:           1.0.0
 * Author:            Last Door Solutions
 * Author URI:        https://lastdoorsolutions.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lds-disable-block
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'LDS_DISABLE_BLOCK_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-lds-disable-block-activator.php
 */
function activate_lds_disable_block() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lds-disable-block-activator.php';
	Lds_Disable_Block_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-lds-disable-block-deactivator.php
 */
function deactivate_lds_disable_block() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lds-disable-block-deactivator.php';
	Lds_Disable_Block_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_lds_disable_block' );
register_deactivation_hook( __FILE__, 'deactivate_lds_disable_block' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-lds-disable-block.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_lds_disable_block() {

	$plugin = new Lds_Disable_Block();
	$plugin->run();

}
run_lds_disable_block();

function lds_allowed_block_types($allowed_blocks){

    //$blocksList = array_keys( WP_Block_Type_Registry::get_instance()->get_all_registered() );
    $blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();

   // echo '<pre>' . print_r( $blocksList, true ) . '</pre>';

    // then disable some of them
    unset( $blocks[ 'core/archives' ] );
    unset( $blocks[ 'core/avatar' ] );
    //unset( $blocks[ 'core/block' ] );
    unset( $blocks[ 'core/calendar' ] );
    unset( $blocks[ 'core/categories' ] );
    unset( $blocks[ 'core/comment-author-name' ] );
    unset( $blocks[ 'core/comment-content' ] );
    unset( $blocks[ 'core/comment-date' ] );
    unset( $blocks[ 'core/comment-edit-link' ] );
    unset( $blocks[ 'core/comment-reply-link' ] );
    unset( $blocks[ 'core/comment-template' ] );
    unset( $blocks[ 'core/comments-pagination-next' ] );
    unset( $blocks[ 'core/comments-pagination-numbers' ] );
    unset( $blocks[ 'core/comments-pagination-previous' ] );
    unset( $blocks[ 'core/comments-pagination' ] );
    unset( $blocks[ 'core/comments-title' ] );
    unset( $blocks[ 'core/cover' ] );
    unset( $blocks[ 'core/gallery' ] );
    unset( $blocks[ 'core/home-link' ] );
    unset( $blocks[ 'core/latest-comments' ] );
    unset( $blocks[ 'core/latest-posts' ] );
    unset( $blocks[ 'core/legacy-widget' ] );
    unset( $blocks[ 'core/loginout' ] );
    unset( $blocks[ 'core/navigation-link' ] );
    unset( $blocks[ 'core/navigation-submenu' ] );
    unset( $blocks[ 'core/navigation' ] );
    unset( $blocks[ 'core/page-list' ] );
    unset( $blocks[ 'core/pattern' ] );
    unset( $blocks[ 'core/post-author-biography' ] );
    unset( $blocks[ 'core/post-author' ] );
    unset( $blocks[ 'core/post-comments' ] );
    unset( $blocks[ 'core/post-comments-form' ] );
    unset( $blocks[ 'core/post-content' ] );
    unset( $blocks[ 'core/post-date' ] );
    unset( $blocks[ 'core/post-excerpt' ] );
    unset( $blocks[ 'core/post-featured-image' ] );
    unset( $blocks[ 'core/post-navigation-link' ] );
    unset( $blocks[ 'core/post-template' ] );
    unset( $blocks[ 'core/post-terms' ] );
    unset( $blocks[ 'core/post-title' ] );
    unset( $blocks[ 'core/query-no-results' ] );
    unset( $blocks[ 'core/query-pagination-next' ] );
    unset( $blocks[ 'core/query-pagination-numbers' ] );
    unset( $blocks[ 'core/query-pagination-previous' ] );
    unset( $blocks[ 'core/query-pagination' ] );
    unset( $blocks[ 'core/query-title' ] );
    unset( $blocks[ 'core/query' ] );
    unset( $blocks[ 'core/read-more' ] );
    unset( $blocks[ 'core/rss' ] );
    unset( $blocks[ 'core/search' ] );
    unset( $blocks[ 'core/shortcode' ] );
    unset( $blocks[ 'core/site-logo' ] );
    unset( $blocks[ 'core/site-tagline' ] );
    unset( $blocks[ 'core/site-title' ] );
    unset( $blocks[ 'core/social-link' ] );
    unset( $blocks[ 'core/tag-cloud' ] );
    unset( $blocks[ 'core/template-part' ] );
    unset( $blocks[ 'core/term-description' ] );
    unset( $blocks[ 'core/widget-group' ] );
    unset( $blocks[ 'core/audio' ] );
    unset( $blocks[ 'core/button' ] );
    unset( $blocks[ 'core/buttons' ] );
    unset( $blocks[ 'core/freeform' ] );
    unset( $blocks[ 'core/code' ] );
    unset( $blocks[ 'core/column' ] );
    unset( $blocks[ 'core/columns' ] );
    unset( $blocks[ 'core/embed' ] );
    unset( $blocks[ 'core/file' ] );
    unset( $blocks[ 'core/gallery' ] );
    unset( $blocks[ 'core/group' ] );
    //unset( $blocks[ 'core/heading' ] );
    unset( $blocks[ 'core/html' ] );
    unset( $blocks[ 'core/image' ] );
    unset( $blocks[ 'core/list' ] );
    unset( $blocks[ 'core/media-text' ] );
    unset( $blocks[ 'core/missing' ] );
    unset( $blocks[ 'core/more' ] );
    unset( $blocks[ 'core/nextpage' ] );
    //unset( $blocks[ 'core/paragraph' ] );
    unset( $blocks[ 'core/preformatted' ] );
    //unset( $blocks[ 'core/pullquote' ] );
    unset( $blocks[ 'core/quote' ] );
    unset( $blocks[ 'core/separator' ] );
    unset( $blocks[ 'core/social-links' ] );
    //unset( $blocks[ 'core/spacer' ] );
    unset( $blocks[ 'core/subhead' ] );
    unset( $blocks[ 'core/table' ] );
    unset( $blocks[ 'core/text-columns' ] );
    unset( $blocks[ 'core/verse' ] );
    unset( $blocks[ 'core/video' ] );

    //Gravity Form Block
    unset( $blocks[ 'gravityforms/form' ] );

    //Yoast Block
    unset( $blocks[ 'yoast/faq-block' ] );
    unset( $blocks[ 'yoast/how-to-block' ] );
    unset( $blocks[ 'yoast-seo/related-links' ] );
    unset( $blocks[ 'yoast-seo/siblings' ] );
    unset( $blocks[ 'yoast-seo/subpages' ] );
    unset( $blocks[ 'yoast-seo/breadcrumbs' ] );
    unset( $blocks[ 'yoast-seo/estimated-reading-time' ] );

    //BreadCrumb NavXT block
    unset( $blocks[ 'bcn/breadcrumb-trail' ] );

    // return the new list of allowed blocks
    return array_keys( $blocks );

}

$wpVersion = get_bloginfo('version');

//Function added to remove default WordPress Gutenberg blocks
if($wpVersion >= '5.8.0'){
    add_filter( 'allowed_block_types_all', 'lds_allowed_block_types', 25, 2 );
} else {
    add_filter( 'allowed_block_types', 'lds_allowed_block_types', 25, 2 );
}
