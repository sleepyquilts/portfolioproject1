<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!doctype html>
<?php
require_once('database.php');
// Get developer ID
if (!isset($developer_id)) {
    $developer_id = filter_input(INPUT_GET, 'developerID', 
            FILTER_VALIDATE_INT);
    if ($developer_id == NULL || $developer_id == FALSE) {
        $developer_id = 1;
    }
}

// Get name for selected category
//$queryCategory = 'SELECT * FROM categories
//                  WHERE categoryID = :category_id';
//$statement1 = $db->prepare($queryCategory);
//$statement1->bindValue(':category_id', $category_id);
//$statement1->execute();
//$category = $statement1->fetch();
//$category_name = $category['categoryName'];
//$statement1->closeCursor();


// Get all categories
$query = 'SELECT * FROM developer';
$statement = $db->prepare($query);
//$statement->bindValue(':developerID', $developer_id);
$statement->execute();
$developer = $statement->fetchAll();
$statement->closeCursor();

//Get all skills
$query = 'SELECT * FROM skill WHERE developerID=1';
$statement = $db->prepare($query);
//$statement->bindValue(':developerID', $developer_id);
$statement->execute();
$skills = $statement->fetchAll();
$statement->closeCursor();

$skillsJson = json_encode($skills, JSON_FORCE_OBJECT);



//Get all education

$query = 'SELECT * FROM education';
$statement = $db->prepare($query);
//$statement->bindValue(':developerID', $developer_id);
$statement->execute();
$education = $statement->fetchAll();
$statement->closeCursor();


?>
<html lang="en">

<head>
    <style>
        .delete-button {
            font-size: 10px;
        }
    </style>
    <title>Nerd Crew Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/icons8-nerd-100.png">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/slicknav.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Source+Code+Pro:ital,wght@1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&family=Source+Code+Pro:ital,wght@1,900&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#nav_menu').slicknav({
                prependTo: "#mobile_menu"
            });
        });
    </script>
</head>

<body>
    <header>
        <h2>Nerd Crew</h2>
        <h3>Portfolio</h3>
    </header>
    <nav id="mobile_menu"></nav>
    <nav id="nav_menu">
        <ul id="menu">
            <li><a class="current" href="index.html">Home</a></li>
            <li><a href="work.html">Work</a>
                <ul>
                    <li><a href="carlowork.php">Carlo</a></li>
                    <li><a href="jennahwork.php">Jennah</a></li>
                    <li><a href="tamarawork.php">Tamara</a></li>
                    <li><a href="taylorwork.php">Taylor</a></li>
                </ul>
            </li>
            <li> <a href="#">About us</a>
                <ul>
                    <li><a href="carlo.php">Carlo</a></li>
                    <li><a href="jennah.php">Jennah</a></li>
                    <li><a href="tamara.php">Tamara</a></li>
                    <li><a href="taylor.php">Taylor</a></li>
                </ul>
            </li>
            <li class="lastitem"><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
    <main>
        
        <aside>
            <form action="add_skill.php" method="post"
              id="add_skill_form">

            <label for="developer">Developer:</label>
            <select id="developer" name="developer">
                <?php foreach ($developer as $dev) : ?>
                <option value="<?php echo $dev['developerID']; ?>">
                 <?php echo $dev['developerName']; ?>
                </option>
                <?php endforeach; ?>
                </select><br>

            <label>Skill:</label>
            <input type="text" name="skill"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Skill"><br>
        </form>
                       
            
        </aside>
        <section>
             <ul>
            <?php foreach ($skills as $skill) : ?>
            <li>
                 <?php echo $skill['skill']; ?> <form class="delete-button" action="delete_skill.php" method="post">
                    <input type="hidden" name="skillID"
                           value="<?php echo $skill['skillID']; ?>">
                    <input type="hidden" name="developerID"
                           value="<?php echo $skill['developerID']; ?>">
                    <input type="submit" value="Delete">
                </form>
            </li>
            <?php endforeach; ?>
        </ul>

        </section>
        <section class="sec2">


        </section>

    </main>
    <footer>
        <p>Olympic College BAS-IS Class 2021</p>
        <p><a target="_blank" href="https://icons8.com/icon/2753/nerd">Nerd</a> icon by <a target="_blank"
                href="https://icons8.com">Icons8</a></p>
    </footer>
</body>

</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

