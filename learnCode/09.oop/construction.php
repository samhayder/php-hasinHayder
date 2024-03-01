<?php

class FundDetails {
    public $fund;

    public function __construct( $fund ) {
        $this->fund = $fund;
    }

    public function addMoney( float $money ) {
        $this->fund += $money;
    }

    public function reduceMoney( float $money ) {
        $this->fund -= $money;
    }

    public function display() {
        echo "Total Fund is: {$this->fund} \n";
    }
}

$memberOne = new FundDetails( 100 );
$memberOne->reduceMoney( 50 );
$memberOne->addMoney( 12.5 );
echo $memberOne->display();
