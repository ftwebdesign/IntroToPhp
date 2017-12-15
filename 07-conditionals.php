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

// Please note: don't program while hungry
$hungry = true;
$thirsty = true;

// // do you see any logic mistakes here?
// if ( $hungry == true ) {
// 	$eat = true;
// } else if ( true == $thirsty ) {
// 	$drink = true;
// }
// d( $hungry );
// d( $thirsty );

// will this terminate?  Is there a better way?
// $eat = 0;
// while ( true === $hungry ) {
// 	$eat = $eat + 1;
// 	if ( $eat >= 3 ) {
// 		$hungry = false;
// 	}
// }
// d( $hungry );
// d( $thirsty );

// Is this better or harder to read?
for ( $eat = 0, $hungry = true; $eat < 3; $eat++ ) {
	if ( $eat >= 2 ) {
		$hungry = false;
	}
}
d( $hungry );
d( $thirsty );
