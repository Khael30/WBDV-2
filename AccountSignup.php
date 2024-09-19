<?php
session_start(); // Start the session

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and store it in session variables
    $_SESSION['firstname'] = htmlspecialchars($_POST['firstname']);
    $_SESSION['lastname'] = htmlspecialchars($_POST['lastname']);
    $_SESSION['username'] = htmlspecialchars($_POST['username']);
    $_SESSION['age'] = htmlspecialchars($_POST['age']);
    $_SESSION['email'] = htmlspecialchars($_POST['email']);
    $_SESSION['password'] = htmlspecialchars($_POST['password']); // In a real-world app, you should hash the password

    $firstname = $_SESSION['firstname'];

    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Registration Successful</title>
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
            .container{
            margin: auto;
            width: 30%;
            }
            .box{
            background-color: white;
            padding: 30px;
            width: 50dvh;
            border-radius: 20px;
            margin-top: 100px;
            }
            .btn{
            background-color: orange;
            padding: 6px;
            border-style: none;
            margin-left: 30%;
            border-radius: 5px;
            }

        </style>

    </head>
    <body>
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

            <div class='container'>
                <div class='box'>
                <h1>Registration Successful</h1><br>
                    <div class='content'> 
                        <p>Hi! <strong>$firstname</strong></p>
                        <p>You have successfully signed into your account. You can now explore our website.</p><br>
                        
                        <form action='/HTML _CSS/home.html'>
                            <input class='btn' type='submit' value='GO TO HOMEPAGE'>
                        </form>
                    </div>
                </div>
            </div>
    
    
        
    </body>
    </html>
    ";
}
?>
