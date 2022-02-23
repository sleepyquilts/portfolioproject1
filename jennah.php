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

    <title>Jennah Hubenak's Portfolio</title>
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
            <li class="lastitem"><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main>
        <article>
            <h1>Jennah</h1>
            <img src="images/jennah.jpg" alt="Jennah Hubenak" width="300px"/>
            <p>I am an avid crafter and quilter and I also have 5 cats and 2 dogs.   
             
            <h3>A few of my accomplishments are:</h3>
            <ul>
            <li>Created a HTML portfolio website</li>
            <li>Developed a business website</li>
            </ul>
          </article>
          <aside>
            <nav>
              <p>
              <h4>
               I have training and experience in the following areas:
               </h4>
               <ul>
               <li>
                  Project Management
                  </li>
                  <li>
                      HTML5/CSS
                  </li>
                  <li>
                      JavaScript
                  </li>
                  <li>
                      Github
                  </li>
                  <li>
                      Cisco
                  </li>
                  </ul>
                  </p>
                  
            </nav>
            
          </aside>
          
    </main>
    <footer>
        <p>Olympic College BAS-IS Class 2021</p>
        <p><a target="_blank" href="https://icons8.com/icon/2753/nerd">Nerd</a> icon by <a target="_blank"
                href="https://icons8.com">Icons8</a></p>
    </footer>
</body>

</html>