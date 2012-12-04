<?php
/*
 * Plugin Name: Seriously Simple Podcasting
 * Version: 1.0.0
 * Plugin URI: http://www.hughlashbrooke.com
 * Description: A seriously simple and easy to use podcasting plugin for WordPress.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com
 * 
 * @package WordPress
 * @subpackage SeriouslySimplePodcasting
 * @author Hugh Lashbrooke
 * @since 1.0.0
*/

/*
 * Uses MediaElement.js for audio player
 * http://mediaelementjs.com/
*/

require_once( 'classes/class-seriously-simple-podcasting.php' );

global $ss_podcasting;
$ss_podcasting = new SeriouslySimplePodcasting( __FILE__ );

?>