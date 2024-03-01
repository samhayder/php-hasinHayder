 <?php

// echo time();
$startTime = microtime( true );
factorial( 900000000 );
// sleep( 2 );
$endTime = microtime( true );
$executeTime = $endTime - $startTime;
printf( "%10.8f", $executeTime );

function factorial( $n ) {
    $result = 1;
    for ( $i = 1; $i <= $n; $i++ ) {
        $result *= $i;
    }
    return $result;
}
