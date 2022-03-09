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
    $developer_id = filter_input(INPUT_GET, 'developerID', FILTER_VALIDATE_INT);
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
$query = 'SELECT * FROM skill';
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

//Get all from images

$query = 'SELECT * FROM images';
$statement = $db->prepare($query);
//$statement->bindValue(':developerID', $developer_id);
$statement->execute();
$images = $statement->fetchAll();
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
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
        <style>
            .bio-field{
                width: 300px;
                height: 400px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">


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
                </div>
            </div>


            <?php foreach ($developer as $dev) : ?>
                <div class="row" style="margin-bottom: 1em;">
                    <div class="col-md-6">
                        <h2><?php echo $dev['developerName']; ?> Info Form</h2>
                        <form action="update_dev.php" method="post"
                              id="update_dev_form">

                            <label for="developer">Name:</label><br>
                            <input  type="hidden" name="developerID"
                                    value="<?php echo $dev['developerID']; ?>">
                            <input style="width: 300px;" type="text" value="<?php echo $dev['developerName']; ?>" name="developer-name">
                            <br>
                            <br>
                            <label for="developer">Job Roll:</label><br>
                            <input style="width: 300px;" type="text" value="<?php echo $dev['jobRoll']; ?>" name="jobRoll">
                            <br>
                            <br>
                            <label for="developer">Biography:</label><br>
                            <textarea class="bio-field" name="biography"><?php echo $dev['biography']; ?></textarea>
                            <br>
                            <br>
                            <input type="submit" name="update" value="Update info"><br>
                        </form>
                        <br>
                        <form action="update_images.php" method="post"
                              id="update_images_form">

                            <label for="developer">Images:</label><br>
                            <input type="hidden" name="developerID"
                                   value="<?php echo $dev['developerID']; ?>">
                                   <?php foreach ($images as $img) : ?>
                                       <?php if ($img['developerID'] === $dev['developerID']): ?>
                                    <input style="width: 300px;" type="text" value="<?php echo $img['imageURL']; ?>" name="imgUrl">
                                    <br>
                                    <br>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <input type="submit" name="update" value="Update images"><br>
                        </form>
                        <br>

                    </div>
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <table style="border-collapse: collapse; border: 1px solid; margin-top: 2em;">
                                <tr style="border-collapse: collapse; border: 1px solid;">
                                    <th style="border-collapse: collapse; border: 1px solid;">ID</th>
                                    <th style="border-collapse: collapse; border: 1px solid;">Skill</th>
                                    <th style="border-collapse: collapse; border: 1px solid;">Delete</th>
                                </tr>

                                <?php foreach ($skills as $skill) : ?>
                                    <tr style="border-collapse: collapse; border: 1px solid;">
                                        <?php if ($skill['developerID'] === $dev['developerID']): ?>
                                            <td style="border-collapse: collapse; border: 1px solid; padding: 1em;">
                                                <?php echo $skill['developerID']; ?>
                                            </td>
                                            <td style="border-collapse: collapse; border: 1px solid; padding: 1em;">
                                                <?php echo $skill['skill']; ?> 

                                                <br>

                                            </td>
                                            <td style="border-collapse: collapse; border: 1px solid; padding: 1em;">
                                                <form class="delete-button" action="delete_skill.php" method="post">
                                                    <input type="hidden" name="skillID"
                                                           value="<?php echo $skill['skillID']; ?>">
                                                    <input type="hidden" name="developerID"
                                                           value="<?php echo $skill['developerID']; ?>">
                                                    <input type="submit" value="Delete">
                                                </form>

                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </table>


                            <form action="add_skill.php" method="post"
                                  id="add_skill_form">

                                <input type="hidden" name="developerID"
                                       value="<?php echo $dev['developerID']; ?>"><br>

                                <label>Add skill:</label><br>
                                <input style="width: 300px;" type="text" name="skill"><br>

                                <label>&nbsp;</label>
                                <br>
                                <input type="submit" value="Add Skill"><br>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <table style="border-collapse: collapse; border: 1px solid; margin-top: 2em;">
                                <tr style="border-collapse: collapse; border: 1px solid;">
                                    <th style="border-collapse: collapse; border: 1px solid;">ID</th>
                                    <th style="border-collapse: collapse; border: 1px solid;">School</th>
                                    <th style="border-collapse: collapse; border: 1px solid;">Major</th>
                                    <th style="border-collapse: collapse; border: 1px solid;">Delete</th>
                                </tr>

                                <?php foreach ($education as $edu) : ?>
                                    <tr style="border-collapse: collapse; border: 1px solid;">
                                        <?php if ($edu['developerID'] === $dev['developerID']): ?>
                                            <td style="border-collapse: collapse; border: 1px solid; padding: 1em;">
                                                <?php echo $edu['developerID']; ?>
                                            </td>
                                            <td style="border-collapse: collapse; border: 1px solid; padding: 1em;">
                                                <?php echo $edu['school']; ?> 

                                                <br>

                                            </td>
                                            <td style="border-collapse: collapse; border: 1px solid; padding: 1em;">
                                                <?php echo $edu['major']; ?> 

                                                <br>

                                            </td>
                                            <td style="border-collapse: collapse; border: 1px solid; padding: 1em;">
                                                <form class="delete-button" action="delete_edu.php" method="post">
                                                    <input type="hidden" name="eduID"
                                                           value="<?php echo $edu['educationID']; ?>">
                                                    <input type="hidden" name="developerID"
                                                           value="<?php echo $edu['developerID']; ?>">
                                                    <input type="submit" value="Delete">
                                                </form>

                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </table>
                            <form action="add_edu.php" method="post"
                                  id="add_edu_form">

                                <input type="hidden" name="developerID"
                                       value="<?php echo $dev['developerID']; ?>"><br>

                                <label>Add School:</label><br>
                                <input style="width: 300px;" type="text" name="school"><br>
                                <label>Add Major:</label><br>
                                <input style="width: 300px;" type="text" name="major"><br>
                                <label>&nbsp;</label>
                                <br>
                                <input type="submit" value="Add Education"><br>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div style="display: none;" class="row">
                <div class="col-md-6">
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
                </div>
                <div class="col-md-6">
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
                </div>
            </div>
            <div style="display: none;" class="row">
                <div class="col-md-6">
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
                </div>
                <div class="col-md-6">
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
                </div>
            </div>

        </div>

        <!--    <footer>
                <p>Olympic College BAS-IS Class 2021</p>
                <p><a target="_blank" href="https://icons8.com/icon/2753/nerd">Nerd</a> icon by <a target="_blank"
                        href="https://icons8.com">Icons8</a></p>
            </footer>-->
    </body>

</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

