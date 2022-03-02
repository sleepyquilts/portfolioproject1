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

// Get products for selected category
//$queryDeveloper = 'SELECT * FROM products
//                  WHERE categoryID = :category_id
//                  ORDER BY productID';
//$statement3 = $db->prepare($queryDeveloper);
//$statement3->bindValue(':developer_id', $developer_id);
//$statement3->execute();
//$products = $statement3->fetchAll();
//$statement3->closeCursor();
?>
<!doctype html>

<html lang="en">

<head>

    <title>Carlo Santos Portfolio</title>
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
            <li><a class="current" href="index.html">Home</a></li>
            <li><a href="work.html">Work</a>
                <ul>
                    <li><a href="carlowork.html">Carlo</a></li>
                    <li><a href="jennahwork.html">Jennah</a></li>
                    <li><a href="tamarawork.html">Tamara</a></li>
                    <li><a href="taylorwork.html">Taylor</a></li>
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
<!--        </ul>-->

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
        <section class="img-01">

            <img class="profile-img" src="images/carlo-01.jpg" alt="">

        </section>
        <section class="img-02">

            <img class="profile-img" src="images/carlo-02.jpg" alt="">

        </section>
        <!-- <section class="img-03">

            <img class="profile-img" src="images/carlo-03.jpg" alt="">

        </section> -->
        <section class="img-04">

            <img class="profile-img" src="images/carlo-04.jpg" alt="">

        </section>
        <section class="sec2">
            <h1>Carlo Santos</h1>
            <h2>Web Developer</h2>
            <p>I am a Web Developer and am always looking to learn new skills. I have a background in communications and
                customer service. My many years of customer service have taught me how to effectively interact with
                stakeholders, how to be a team player and how to fully contribute to the success of a company. My
                current role as a Web Developer also has me working in the marketing team. I have been in charge of the
                online presence of new product integrations, promotions and sales in the US and EMEA regions. I look
                forward to working with all future clients.</p>

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