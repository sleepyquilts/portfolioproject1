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
        <section class="bio">
            <h2>
                Education
            </h2>
            <ul>
                <li>
                    North Mason High School
                </li>
		<li>
		    Olympic College: Associate of Arts
		</li>
                <li>
                    Olympic College: Information Systems
                </li>
            </ul>
            <h2>
                Skills
            </h2>
            
            <p>
                I have training and experience in the following areas:
            </p>
            <ul>
                <li>
                    Project Management
                </li>
		<li>
		    Group Managment
		</li>
		<li>
		    Group Communication
		</li>
                <li>
                    HTML5
                </li>
                <li>
                    JavaScript
                </li>
		<li>
		    Basic Networking
		</li>
		<li>
		    OS Set Up & Managment
		</li>
            </ul>

            <p>
                Address: 491 NE Haven Lake Drive, Belfair, WA, 98588 <br>
                Phone: <a href="tel:253-278-6365">253-278-6365</a> <br>
                Email: <a href="mailto:taylorhillis@student.olympic.edu">taylorhillis@student.olympic.edu</a>
            </p>
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
        <section class="img-02">

            <img class="profile-img" src="images/taylor-02.jpg" alt="">

        </section>
        <!-- <section class="img-03">
            <img class="profile-img" src="images/taylor-03.jpg" alt="">
        </section> -->
        <section class="img-04">

            <img class="profile-img" src="images/taylor-04.jpg" alt="">

        </section>
        <section class="sec2">
            <h1>Taylor Hillis</h1>
            <h2>Networking & Security</h2>
            <p>While I am competent in the basics of several different fields of IT, I would consider my two areas of 
            greatest expertise to IT networking & IT security. I have an extensive background in food service and customer
            service. My expierence in these fields have taught me several things including how to effectively interact with
            stakeholders, how to be a team player and how to fully contribute to the success of a company. While I have no 
            IT work expierence I am very eager to gain expierence. I look forward to working for my future employers.</p>

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