<!doctype html>

<html lang="en">

<head>

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
                Put your contact information here! 

		<form action="/action_page.php">
		  <label for="eaddress">Email address:</label>
		  <input type="text" id="eaddress" name="eaddress"><br><br>
  		  <label for="pnumber">Phone number:</label>
		  <input type="text" id="pnumber" name="pnumber"><br><br>
		  <input type="submit" value="Submit">
		</form>
            </h2>

        </aside>
        <section>


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