<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking.css">
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

<div style="margin-left: 37%; margin-top: 50px; font-size: 15px; 
            color: black; background-color:rgb(255, 255, 255); width: 350px;
            padding: 25px; border-radius: 15px; box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.1);" >
    <h2 style="padding-bottom: 10px; margin-left: 65px;">Booking Confirmed</h2>
    <?php
        // Retrieve form data
        $subjects = htmlspecialchars($_POST['subjects'] ?? 'Not provided');
        $tutors = htmlspecialchars($_POST['tutors'] ?? 'Not provided');
        $date = htmlspecialchars(string: $_POST['date'] ?? 'Not provided');
        $time = htmlspecialchars($_POST['time'] ?? 'Not provided');

        // Mapping tutor codes to names
        $tutorNames = [
            'juan' => 'Sir Juan dela Cruz',
            'maria' => 'Ms. Maria Santos',
            'antonio' => 'Sir Antonio Reyes',
            'carlos' => 'Sir Carlos Fernandez',
            'liza' => 'Ms. Liza Torres'
        ];

        // Mapping subject codes to names
        $subjectNames = [
            'python' => 'Python',
            'java' => 'Java',
            'c++' => 'C++',
            'javascript' => 'JavaScript',
            'c#' => 'C#',
            'array' => 'Arrays, Linked Lists',
            'stacks' => 'Stacks, Queues',
            'trees' => 'Trees, Graphs',
            'sorting' => 'Sorting and Searching Algorithms',
            'frontend' => 'Frontend Development (HTML, CSS, JavaScript)',
            'backend' => 'Backend Development (Node.js, PHP, Ruby on Rails)',
            'frameworks' => 'Web Frameworks (React, Angular, Vue.js)',
            'database' => 'Database Integration (SQL, NoSQL)'
        ];

        // Translate codes to names
        $subjectName = $subjectNames[$subjects] ?? 'Unknown Subject';
        $tutorName = $tutorNames[$tutors] ?? 'Unknown Tutor';

        // Display confirmation
        echo "<p><strong>Subject:</strong> $subjectName</p>";
        echo "<br>";
        echo "<p><strong>Tutor:</strong> $tutorName</p>";
        echo "<br>";
        echo "<p><strong>Date:</strong> $date</p>";
        echo "<br>";
        echo "<p><strong>Time:</strong> $time</p>";
        echo "<br>";
        echo "<p>Thank you for booking your session!</p>";
    ?>
</div>

</body>
</html>
