<?php

class DistrictCollections implements IteratorAggregate {
    private $districts;

    public function __construct() {
        $this->districts = array();
    }

    public function addDistrict( $district ) {
        array_push( $this->districts, $district );
    }

    public function getIterator(): Traversable {
        return new ArrayIterator( $this->districts );
    }
}

$districts = new DistrictCollections();
$districts->addDistrict( "Dhaka" );
$districts->addDistrict( "Dinajpur" );
$districts->addDistrict( "Borisal" );

//$_districts = $district->getDistrict();
//print_r( $_districts );

foreach ( $districts as $district ) {
    echo $district . "\n";
}
