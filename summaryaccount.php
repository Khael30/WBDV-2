<?php
session_start(); // Resume the session

// Check if the session variables are set
if (isset($_SESSION['firstname']) && isset($_SESSION['lastname']) && isset($_SESSION['username']) && isset($_SESSION['age']) && isset($_SESSION['email'])) {
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $username = $_SESSION['username'];
    $age = $_SESSION['age'];
    $email = $_SESSION['email'];

    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Registration Summary</title>
    </head>
    <style>
            *{
            margin: 0;
            padding: 0;
            }
            body{
                min-height: 100vh;
                background: url('/HTML\ _CSS/Black\ and\ Red\ Minimalist\ Modern\ Registration\ Gym\ Website\ Prototype.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            nav{
                background-color: white;
                background: rgb(255, 255, 255);
                box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1);
            }
            ul .logo{
                font-size: xx-large;
            }
            nav ul{
                width: 100%;
                list-style: none;
                display: flex;
                justify-content: flex-end;
                align-items: center;
            }
            nav li{
                height: 70px;
            }
            nav a{
                height: 100%;
                padding: 0px 30px;
                text-decoration: none;
                display: flex;
                align-items: center;
                color: black;
            }
            nav a:hover{
                background-color: #f0f0f0fc;
            }
            nav li:first-child{
                margin-right: auto;
            }
            .main{
            background-color: white;
            width: 45rem;
            border-radius:20px;
            margin: 5% 26%;

            }

            .container2{
            background-image: linear-gradient(to right top, #00b1a7, #00aca8, #00a7a8, #0aa2a8, #169da7, #17a3ae, #18a9b4, #19afbb, #10c3ca, #0bd6d8, #13ebe5, #24fff1);
            font-family (stack): Montserrat, sans-serif;
            color:white;
            padding: 30px;
            width: 45dvh;
            height: 49.2vh;
            border-bottom-right-radius: 20px;
            border-top-right-radius: 20px;
            }
            .img{
            width:55dvh;
            height: 57.8vh;
            border-bottom-left-radius: 20px;
            border-top-left-radius: 20px;
            }
            .container1{
            display:flex;
            justify-content: center;
            margin-top:5%            
            }
            .info{
            line-height: 1.9;
            }
        </style>

        
    </head>
    <header>
        <nav>
            <ul>
              <li class='logo'><a href=''><b>Hello World</b></a></li>
              <li class='hideOnMobile'><a href=''>Home</a></li>
              <li class='hideOnMobile'><a href=''>Tutors</a></li>
              <li class='hideOnMobile'><a href=''>Subjects</a></li>
              <li class='hideOnMobile'><a href=''>About Us</a></li>
              <li class='hideOnMobile'><a href=''>Contact Us</a></li>
              <li class='hideOnMobile'><a href='../PHP FILE/summaryaccount.php'>Account</a></li>
            </ul>
          </nav>
    </header>

    <body>
    <main class='main'>
        <div class='container1'>
            <img src='depositphotos_602117308-stock-photo-online-tutoring-concept-man-having (1).jpg' alt='' class='img'>
                <div class='container2'>
                    <h1>Your Profile</h1><br>
                    <p class='info'>First Name: <strong>$firstname</strong></p>
                    <p class='info'class='info'class='info'class='info'>Last Name: <strong>$lastname</strong></p>
                    <p class='info'class='info'class='info'>Username: <strong>$username</strong></p>
                    <p class='info'class='info'>Age: <strong>$age</strong></p>
                    <p class='info'>Email: <strong>$email</strong></p>
                </div>
        </div>
    </main>
    </body>
    </html>
    ";
} else {
    echo "No registration data found. Please go back to the signup page.";
}
?>
