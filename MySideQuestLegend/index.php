<?php

//1. Create a database connection
$DatabaseConnection = mysqli_connect( "localhost", "root", "root","Dragginthrudungeons");

if ( 
    mysqli_connect_errno() ) {
    exit( "Database connection failed");
}

echo ( "Connection to the database is successful" );

//2. Perform a database query
// $Enemy_no = rand(1, 5);

// for ($Enemy_no; $Enemy_no>0,$Enemy_no--)


function StartBattle($DatabaseConnection) {
    $get_plyr_stats = "INSERT INTO CURRENTCHAR (CHARNME, ATTACK, DEFENCE, SPEED, HEALTH, MAGIC)
    SELECT CHARNME, BS_ATT, BS_DEF, BS_SPD, BS_HLT, BS_MGC FROM CHARSTATS WHERE CHARNME = 'Warrior'"
    ;

$insertedplyrsuccessfully = mysqli_query( $DatabaseConnection, $get_plyr_stats );

if(  $get_plyr_stats ) {
    echo "player stats updated";    
}

$get_plyr_move = "UPDATE CURRENTCHAR SET ATTACK_1='Sword Strike' WHERE CHARNME='Warrior'";

$updatedmovesuccessfully = mysqli_query( $DatabaseConnection, $get_plyr_move );

if(  $updatedmovesuccessfully ) {
    echo "Playersuccessfully updated";
    
}

}

StartBattle($DatabaseConnection);

function SpawnSewRat($DatabaseConnection) {
    $sql = "INSERT INTO CURRENTENEMY (CHARNME, BS_ATT, BS_DEF, BS_SPD, BS_HLT, BS_MGC, CDid)
SELECT CHARNME, BS_ATT, BS_DEF, BS_SPD, BS_HLT, BS_MGC, CDid FROM CHARSTATS WHERE CHARNME = 'Sewer Rat'
";

    $insertedtablesuccessfully = mysqli_query( $DatabaseConnection, $sql );

if(  $insertedtablesuccessfully ) {
    echo "User successfully inserted";
    
}

$sql1 = "UPDATE CURRENTENEMY SET ATTACK_1='Bite' WHERE CHARNME='Sewer Rat'";

$updatedtablesuccessfully = mysqli_query( $DatabaseConnection, $sql1 );

if(  $updatedtablesuccessfully ) {
    echo "User successfully updated";
    
}
}

SpawnSewRat($DatabaseConnection);
SpawnSewRat($DatabaseConnection);
$RatATT = "SELECT BS_ATT FROM CHARSTATS WHERE CHARNME= 'Sewer Rat'";
$RatDEF = "SELECT BS_DEF FROM CHARSTATS WHERE CHARNME= 'Sewer Rat'";
$RatHLT = "SELECT BS_HLT FROM CHARSTATS WHERE CHARNME= 'Sewer Rat'";

$CharATT ="SELECT BS_ATT FROM CHARSTATS WHERE CHARNME= 'Warrior'";
$CharDEF ="SELECT BS_DEF FROM CHARSTATS WHERE CHARNME= 'Warrior'";
$CharHLT ="SELECT BS_HLT FROM CHARSTATS WHERE CHARNME= 'Warrior'";

function Att_Rat_1($RatATT, $RatDEF, $RatHLT, $CharATT, $CharDEF, $CharHLT){

$turnorder = rand("1-10");


if( $turnorder<="4"){
 echo $RatATT;
 echo $RatDEF;
 echo $RatHLT;
}


elseif( $turnorder>"7")
{
 echo $CharATT;
 echo $CharDEF;
}

else
 {
 echo $CharHLT;

}
}
ATT_Rat_1($RatATT, $RatDEF, $RatHLT, $CharATT, $CharDEF, $CharHLT)


//3. Use the returned data from the database

//4. Release the return data


//5.Close the database connection



?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            MYSideQuestLegend
        </title>
    </head>
    <body>
        <h1>Welcome to Tiny Social</h1>
    </body>
</html>
<?php

    if( $DatabaseConnection    ) {
        mysqli_close( $DatabaseConnection );
    }

?>
