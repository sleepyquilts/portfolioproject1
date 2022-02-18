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
                    <li><a href="carlo.html">Carlo</a></li>
                    <li><a href="jennah.html">Jennah</a></li>
                    <li><a href="tamara.html">Tamara</a></li>
                    <li><a href="taylor.html">Taylor</a></li>
                </ul>
            </li>
            <li class="lastitem"><a href="contact.html">Contact</a></li>
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