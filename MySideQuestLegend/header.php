<?php
/*
Include_once('connect.php'); -->
*/

$DatabaseConnection = mysqli_connect( "localhost", "root", "root","Dragginthrudungeons");

if ( 
    mysqli_connect_errno() ) {
    exit( "Database connection failed");
}

echo ( "Connection to the database is successful" );

?>