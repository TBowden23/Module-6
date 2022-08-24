<?php

//1. Create a database connection
$DatanaseConnection = mysqli_connect( "localhost", "root", "root","Dragginthrudungeons")

if ( 
    mysql_connect_errno() ) {
    exit( "Database connection failed") 
    ;
}

echo ("Connection to the database is successful");

//2. Perform a database query

//3. Use the returned data from the database

//4. Release the return data

//5.Close the database connection

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Learning Java Script/ Tiny Social
        </title>
    </head>
    <body>
        <h1>Welcome to Tiny Social</h1>
    </body>
</html>

<?php
    if( $DatanaseConnection   ) {
        mysqli_close( $$DatanaseConnection  );
    }
?>