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
$query = 'SELECT * FROM developer WHERE developerID = 1';
$statement = $db->prepare($query);
//$statement->bindValue(':developerID', $developer_id);
$statement->execute();
$developer = $statement->fetchAll();
$statement->closeCursor();

//Get all skills
$query = 'SELECT * FROM skill WHERE developerID = 1';
$statement = $db->prepare($query);
//$statement->bindValue(':developerID', $developer_id);
$statement->execute();
$skills = $statement->fetchAll();
$statement->closeCursor();

//Get all education

$query = 'SELECT * FROM education WHERE developerID = 1';
$statement = $db->prepare($query);
//$statement->bindValue(':developerID', $developer_id);
$statement->execute();
$education = $statement->fetchAll();
$statement->closeCursor();

$query = 'SELECT * FROM images WHERE developerID = 1';
$statement = $db->prepare($query);
//$statement->bindValue(':developerID', $developer_id);
$statement->execute();
$images = $statement->fetchAll();
$statement->closeCursor();
?>

<!doctype html>

<html lang="en">
    <head>
        <title>Carlo Santos Portfolio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/icons8-nerd-100.png">
        <link rel="stylesheet" href="styles/normalize.css">
        <link rel="stylesheet" href="styles/carlophp.css">
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
                <li><a class="current" href="index.php">Home</a></li>
                <li><a href="#">Work</a>
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
                <li class="lastitem"><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <main>
            <section class="bio">
                <h2>
                    Education
                </h2>

                <ul>
                    <?php foreach ($education as $edu) : ?>
                        <li>
                            <?php echo $edu['school']; ?>: <?php echo $edu['major']; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <h2>
                    Skills
                </h2>

                <p>
                    I have training and experience in the following areas:
                </p>
                <ul>
                    <?php foreach ($skills as $skill) : ?>
                        <li>
                            <?php echo $skill['skill']; ?> 
                        </li>
                    <?php endforeach; ?>
                </ul>

                <p>
                    <a class="icon-link" href="https://github.com/carlox7" target="_blank">
                        <ion-icon name="logo-github"></ion-icon>
                    </a>
                    <a class="icon-link" href="https://www.instagram.com/sp1r4lnem3sis/" target="_blank">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a class="icon-link" href="https://twitter.com/Carlo_Santos" target="_blank">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a class="icon-link" href="https://www.linkedin.com/in/carlo-steven-santos/" target="_blank">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </p>
                <div id="advice">
                    <h3>Words of wisdom</h3>
                </div>
            </section>
            <?php foreach ($images as $img) : ?>
                <section class="img-0<?php echo $img['imageID']; ?>">
                    <img class="profile-img" src="<?php echo $img['imageURL']; ?>" alt="">
                </section>
            <?php endforeach; ?>

            <section class="sec2">
                <?php foreach ($developer as $dev) : ?>
                    <h1><?php echo $dev['developerName']; ?> </h1>
                    <h2><?php echo $dev['jobRoll']; ?> </h2>
                    <p><?php echo $dev['biography']; ?> </p>
                <?php endforeach; ?>
            </section>
        </main>

        <footer>
            <p>Olympic College BAS-IS Class 2021</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="js/advice.js"></script>
<!-- <script src="test/advice.spec.js"></script> -->
    </body>

</html>