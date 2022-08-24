<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rare Cakes</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            What's Your name?
            <form method="POST">
                <input type="text" id="charname" name="charname">
                <?php
                    $Charname = $_POST['charname'];
                ?>
                <a href="intro.php">
                    <input type="button" id="submit" name="submit" value="Submit">
                </a>
            </form>

        </p>
        <!-- <section>
        <p>Choose your Profession:
            <form>
                <input type="radio" id="War" name="class" value="Warrior">
                <label for="War">Warrior</label>
                <input type="radio" id="Rog" name="class" value="Rogue">
                <label for="Rog">Rogue</label>
                <input type="radio" id="Wiz" name="class" value="Wizard">
                <label for="Wiz">Wizard</label>
                <input type=buttom id="choose" name="choose" value="Submit">
                <label for="choose">I Choose This Profession
            </form>
        </p>
        </section> -->

        <footer>
            Dat's all Folks
             &copy; 
            <?php
                $copyYear = 2020; // Set your website start date
                $curYear = date('Y'); // Keeps the second year updated
                echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
            ?> Copyright Tremarica LLC
        </footer>
    </body>