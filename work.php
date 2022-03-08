<!doctype html>

<html lang="en">

<head>

    <title>Nerd Crew Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/icons8-nerd-100.png">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/main.css">
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
        <aside>
            <h2>
                Skills
            </h2>
            <p>
                Working in the technology sector requires knowledge in many fields. Our team is proficient in expertise
                such as:
            </p>
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
                    Virtualization and Cloud Computing
                </li>
                <li>
                    Database Design
                </li>
            </ul>
        </aside>
        <section>

            <img class="home-image" src="images/keyboard.jpg" alt="">
        </section>
        <section class="sec2">
            <h1>BAS-IS Team</h1>
            <h2>Diverse Backgrounds</h2>
            <p>We are a group of Information System's students that come from different experiences. We have various
                accomplishments in different aspects of higher education and life. Though we may differ, we have come
                together to develop the same high level of skills in the world of technology.</p>
            <h2>
                Service
            </h2>
            <p>
                Our goal is to create expertly crafted projects, learn new skills and develop relationships in the tech
                industry. We are a highly capable team that is ready to take on new challenges and we look forward to
                working with new and diverse clients.
            </p>

        </section>

    </main>
    <footer>
        <p>Olympic College BAS-IS Class 2021</p>
        <p><a target="_blank" href="https://icons8.com/icon/2753/nerd">Nerd</a> icon by <a target="_blank"
                href="https://icons8.com">Icons8</a></p>
    </footer>
</body>

</html>