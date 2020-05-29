<?php
/**
 * Plugin Name:     Hide drafts and private posts from menu
 * Description:     Hides from the menu the posts, pages and custom post types, which have draft or personal status if the website is viewed by someone who does not have the right to see them.
 * Version:         0.0.01
 * Author:          Gleb Kemarsky
 * Author URI:      http://glebkema.ru/
 */


//**** abort, if this file is called directly
if ( ! defined( 'WPINC' ) ) {
	die;
}
