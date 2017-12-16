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

$online = array(
	"Anna"   =>  Array ( "Module" => "8.4",  "Major" => "Dev"    ),
	"Chris"  =>  Array ( "Module" => "4.1",  "Major" => "Dev"    ),
	"DavidB" =>  Array ( "Module" => "6.4",  "Major" => "Dev"    ),
	"David"  =>  Array ( "Module" => "8.2",  "Major" => "Dev"    ),
	"Edward" =>  Array ( "Module" => "3.3",  "Major" => "Design" ),
	"James"  =>  Array ( "Module" => "9.1",  "Major" => "Dev"    ),
	"Jenn"   =>  Array ( "Module" => "5.5",  "Major" => "Design" ),
	"Mary"   =>  Array ( "Module" => "4.1",  "Major" => "Dev"    )
);

d( $online );

$online2 = array(
	"Anna"   =>  "8.4",
	"Chris"  =>  "4.1",
	"DavidB" =>  "6.4",
	"David"  =>  "8.2",
	"Edward" =>  "3.3",
	"James"  =>  "9.1",
	"Jenn"   =>  "5.5",
	"Mary"   =>  "4.1"
);

foreach ( $online2 as $name => $module ) {
	printf("<pre>%7s: %3s </pre>", $name, $module);
}