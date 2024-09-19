<?php
$username = isset($_POST['username']) ? $_POST['username'] :"";
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AccountLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Booking Confirmation</title>
</head>
<body>

<header>
    <nav>
        <ul>
            <li class="logo"><a href="#"><b>Hello World</b></a></li>
            <li><a href="/HTML _CSS/home.html">Home</a></li>
            <li><a href="#">Tutors</a></li>
            <li><a href="#">Subjects</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Account</a></li>
        </ul>
    </nav>
</header>
        <div style="margin: auto;width: 50%;">
            <div style="box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1);background-color: whitesmoke; width: 60dvb; height: 38vh; border-radius: 20px; margin: auto;width: 50%; margin-top: 5%;">
                <div style="text-align: center; padding: 20px;">
                    <i class="fa fa-check" style="font-size:48px;color:green"></i>
                    <h3 style="padding-bottom: 10px;">LOGIN SUCCESSFUL</h3>
                    <h3 style="color: orange; padding-bottom: 10px;"><?php
                    echo "<b>Hi!&nbsp;</b>" . htmlspecialchars($username) . "<br>";
                    ?></h3>
                    <h5>"You have successfully signed into your account. You can now close this window and explore our website."</h5><br>
                    <a href="/HTML _CSS/home.html"><button  style="cursor: grab; background-color: burlywood; padding: 7px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); border-radius: 5px; border-style: none;">CLOSE WINDOW</button></a>
                    
                </div>
            </div>
        </div>
</body>
</html>
