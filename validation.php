<?php

ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );
error_reporting( E_ALL );

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bodaboda';
session_start();
if ( isset( $_POST[ 'submit' ] ) ) {
    $numberplate = $_POST[ 'numberplate' ];

    $dbname = new mysqli( $servername, $username, $password, $dbname );

    $result = $dbname->query( "SELECT * FROM `ownerdetails` WHERE  `numberplate` = '$numberplate'" );
    $row = mysqli_fetch_array( $result );
    $numplate = $row[ 'numberplate' ];
    $IDNum = $row[ 'IDNumber' ];

    if ( mysqli_num_rows( $result ) == 1 ) {
        if ( !empty( $IDNum ) )
 {
            echo '<script>alert("Success")</script>';

        } else {
            echo '<script>alert("Your ID Number is not found. Please input in the next menu")</script>';
            header( "Refresh: 0.2; url=idnumber.php?np=$numplate" );
        }

    } else {
        echo '<script>alert("Failed. The number plate does not exist!")</script>';
        header( 'Refresh: 0.2; url=dial.html' );
    }

}

?>