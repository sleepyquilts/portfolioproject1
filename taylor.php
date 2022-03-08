<?php
require_once('database.php');
// Get developer ID
if (!isset($developer_id)) {
    $developer_id = filter_input(INPUT_GET, 'developerID', 
            FILTER_VALIDATE_INT);
    if ($developer_id == NULL || $developer_id == FALSE) {
        $developer_id = 3 ;
    }
}
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

//Get all education

$query = 'SELECT * FROM education';
$statement = $db->prepare($query);
//$statement->bindValue(':developerID', $developer_id);
$statement->execute();
$education = $statement->fetchAll();
$statement->closeCursor();

?>

<!doctype html>

<html lang="en">

<head>

    <title>Taylor Hillis' Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/icons8-nerd-100.png">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/carlo.css">
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
        <!-- <img src="images/logo.gif" alt="Town Hall Logo"> -->
        <h2>Nerd Crew</h2>
        <h3>Portfolio</h3>
    </header>
    <nav id="mobile_menu"></nav>
    <nav id="nav_menu">
        <ul id="menu">
            <li><a class="current" href="index.php">Home</a></li>
            <li><a href="work.php">Work</a>
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
<!--            <p><?php echo print_r($developer); ?></p>
            <ul>
            <?php foreach ($developer as $dev) : ?>
            <li>
                 <?php echo $dev['developerName']; ?>
            </li>
            <?php endforeach; ?>-->
            
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
                <a class="icon-link" href="https://github.com/TaylorHillis" target="_blank">
                    <ion-icon name="logo-github"></ion-icon>
                </a>
                <a class="icon-link" href="https://www.linkedin.com/in/taylor-hillis-a43320199/" target="_blank">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                

            </p>
            <div id="advice">
                <h3>Words of wisdom</h3>

            </div>
            
        </section>
        <section class="img-01">

            <img class="profile-img" src="images/taylor-01.jpg" alt="">

        </section>
        <section class="sec2">
            <h1>Taylor Hillis</h1>
            <h2>Networking & Security</h2>
            <p></p>

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