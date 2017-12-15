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

$name        = 'Alena';
$string_one  = "Learning to display \"Hello $name!\" to the screen.\n";
$string_one  = 'Learning to display ';
$string_one .= '"Hello ';
$string_one .= $name;
$string_one .= '!" to the screen.';
$string_one = $string_one . "\n";

//prepend to a string
$string_one = 'I am ' . $string_one;
echo $string_one;

