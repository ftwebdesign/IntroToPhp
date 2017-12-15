<?php
/**
 * Description
 *
 * @package CampFirePixels\${MY_NAMESPACE}
 * @since   1.0.0
 * @author  Danny G Smith
 * @link    https://CampFirePixels.com
 * @license GNU General Public License 2.0+
 */

//namespace CampFirePixels\${MY_NAMESPACE};

// install kint and whoops
require_once( __DIR__ . '/assets/vendor/autoload.php' );

// echo "<pre>";
// print <<<END
// For debugging it is very helpful to use a number of tools
//
// echo - Outputs all parameters. No additional newline is appended.
//
// print_r() displays information about a variable in a way that's readable by humans.
//
// var_dump - This function displays structured information about one or more expressions that includes its type and value. Arrays and objects are explored recursively with values indented to show structure.
//
// d() and ddd() from kint - At first glance Kint is just a pretty replacement for var_dump(), print_r() and debug_backtrace().
//
// However, it's much, much more than that. Even the excellent xdebug var_dump improvements don't come close - you will eventually wonder how you developed without it.
//
// whoops is very handy for errors
//
// END;
// echo "</pre>";
//
// $fruits = array (
//    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
//    "numbers" => array(1, 2, 3, 4, 5, 6),
//    "holes"   => array("first", 5 => "second", "third")
// );
//
// echo "<pre>";
// ////echo $fruits;
// //
// print_r( $fruits );
//
// var_dump( $fruits );
//
// d( $fruits );
// echo "</pre>";