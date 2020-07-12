<?php
    include 'DbConnection.php';

    $dbConnection = new DbConnection;
    $result = getFromDatabase($dbConnection, 'SELECT * FROM messages');
    //print_r($result);
    
    closeDbConnection($dbConnection);

    function getFromDatabase($dbConnection, $query) {
        $dbConnection->connectToDB();
        

        $result = $dbConnection->connection->query($query);

          $i = 0;
          while($row = $result->fetch_assoc()) {
            $data[$i] = $row;
            $i++;
          }

          return $data;
        }

    function closeDbConnection($dbConnection) {
        $dbConnection->closeDbConnection;

    }

//    $lastOperationSuccess = false;
//    $operation = $_GET["operation"];
//    if ($operation == 'sucess')
//    {//
//       $lastOperationSuccess = true;
//    }

   session_start(); /* Starts the session */

   if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
     header("location:login.php");
 	  exit;
   }
?>

<!-- Show password protected content down here -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Personal trainer" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
    <meta name="author" content="Natalia Pilewska" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal trainer website</title>
    <link rel="stylesheet" href="./css/styles.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400&family=Yellowtail&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="./public/favicon.ico" type="image/gif" sizes="16x16">
  </head>

  <body>
 <?
    $lastOperationSuccess = false;
    $operation = $_GET["operation"];

    if ($operation == 'success')
    {
       $lastOperationSuccess = true;
    }

   if ($lastOperationSuccess == true) 
     echo "<p>Sucess</p>"
 ?>

    <header>
      <nav class="main-nav">
        <div class="logo">
          <a href="index.html">Your trainerssss</a>
        </div>
        <div class="hamburger-menu">
          <span class="bar"></span>
        </div>
        <ul class="nav-list">
          <li class="nav-item">
            <a href="index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#service" class="nav-link">Services</a>
          </li>
          <li class="nav-item">
            <a href="#aboutus" class="nav-link">About us</a>
          </li>
          <li class="nav-item">
            <a href="#contactus" class="nav-link">Contact us</a>
          </li>
        </ul>
      </nav>
    </header>

    <section class="hero">
      <div class="hero-clipped">
        <div class="hero-textbox">
          <h1 class="main-heading">DZEJSON Frank</h1>
          <h2 class="sub-heading">
            Learn more about your future personal trainer
          </h2>
          <a href="#" class="cta-btn">Learn more</a>
        </div>
      </div>
    </section>

    <section id="service" class="services">
      <div class="container grid-3 center">
        <div>
          <i class="fas fa-heart"></i>
          <h3 class="icon-title">Be in shape</h3>
          <p class="icon-txt">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
            omnis aliquid esse dolore, nobis consequatur sint, commodi facere
            eius perferendis optio alias laborum fugit tempora excepturi id
            ipsam! Deserunt, distinctio.
          </p>
        </div>
        <div>
          <i class="fas fa-camera fa-3x"></i>
          <h3 class="icon-title">Get your strength</h3>
          <p class="icon-txt">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
            omnis aliquid esse dolore, nobis consequatur sint, commodi facere
            eius perferendis optio alias laborum fugit tempora excepturi id
            ipsam! Deserunt, distinctio.
          </p>
        </div>
        <div>
          <i class="fas fa-heart"></i>
          <h3 class="icon-title">Be in shape</h3>
          <p class="icon-txt">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
            omnis aliquid esse dolore, nobis consequatur sint, commodi facere
            eius perferendis optio alias laborum fugit tempora excepturi id
            ipsam! Deserunt, distinctio.
          </p>
        </div>
      </div>
    </section>

    <section class="background-image"></section>

    <section id="aboutus" class="about">
      <div class="container about-container">
        <div class="grid-2">
          <img src="./assets/images/person-holding-barbell-841130.jpg">
          <div class="about-content">
            <h3 class="icon-title center">About us</h3>
            <p class="icon-txt center">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab
              voluptate, nam sit architecto doloremque laboriosam necessitatibus
              distinctio, dolorum aspernatur ad libero, nihil id voluptatum at
              sunt repellat totam recusandae vero.   Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab
              voluptate, nam sit architecto doloremque laboriosam necessitatibus
              distinctio, dolorum aspernatur ad libero, nihil id voluptatum at
              sunt repellat totam recusandae vero.
            </p>
          </div>
        </div>
      </div>
      <div class="container about-container colors">
        <div class="grid-2">
        <div class="about-content">
            <h3 class="icon-title center color">Learn more about us</h3>
            <p class="icon-txt center color">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab
              voluptate, nam sit architecto doloremque laboriosam necessitatibus
              distinctio, dolorum aspernatur ad libero, nihil id voluptatum at
              sunt repellat totam recusandae vero.   Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab
              voluptate, nam sit architecto doloremque laboriosam necessitatibus
              distinctio, dolorum aspernatur ad libero, nihil id voluptatum at
              sunt repellat totam recusandae vero.
            </p>
          </div>
          <img src="./assets/images/woman.jpg">
        </div>
      </div>


    <section id="contactus" class="contact-wrapper">
      <div class="wrapper">
        <form action="formHandling.php" method="post">
          <div class="contact-form">
            <div class="input-fields">
                <input type="text" class="input" name="name" placeholder="Name">
                <input type="text" class="input" name="surname" placeholder="Surname">
                <input type="text" class="input" name="phone" placeholder="Phone number">
                <input type="text" class="input" name="email" placeholder="Email adress">
            </div>
            <div class="message">
              <textarea placeholder="Message" name="message"></textarea>
                <div class="btn">
                  <input type="submit">
                    Send
                  </input>
              </div>
            </div>
          </div>
          </form>
      </div>
    </section>


    <footer class="footer">
      <h3>Made with &#x2764; by Natalia</h3>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.0/gsap.min.js"></script>

    <script>
      const mainNav = document.querySelector(".main-nav");
      const hamburgerMenu = document.querySelector(".hamburger-menu");

      hamburgerMenu.addEventListener("click", function () {
        mainNav.classList.toggle("open");
      });

      gsap.fromTo(".hero-clipped", { scaleX: 0 }, { duration: 1, scaleX: 1 });
      gsap.fromTo(
        ".logo",
        { x: -200, opacity: 0 },
        { duration: 1, delay: 0.5, x: 0, opacity: 1 }
      );
      gsap.fromTo(
        ".hamburger-menu",
        { x: 200, opacity: 0 },
        { duration: 1, delay: 0.8, x: 0, opacity: 1 }
      );
      gsap.fromTo(
        ".hero-textbox",
        { yPercent: 40, opacity: 0 },
        { duration: 1, delay: 1.3, yPercent: -50, opacity: 1 }
      );
    </script>
  </body>
</html>
