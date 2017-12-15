<?php
/**
 * Description
 *
 * @package CampFirePixels\${MY_NAMESPACE}
 * @since   0.1.0
 * @author  Danny G Smith
 * @link    https://CampFirePixels.com
 * @license GNU General Public License 2.0+
 */

// namespace CampFirePixels\${MY_NAMESPACE};

// install kint and whoops
require_once( __DIR__ . '/assets/vendor/autoload.php' );

# used for the function
$hello_world = "hello world";

/**
 * Function with one variable and no return value
 *
 * @since 1.0.0
 *
 * @param  string -  string sent to function
 *
 * @return void
 */
function hello_world( $hello_world ) {
   echo "$hello_world\n";
}

# call the function
hello_world( $hello_world );