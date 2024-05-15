<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/WhiteOutlineLOGO.png">
    <link rel="stylesheet" href="../styles/style-dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Workly - Dashboard</title>
</head>
<body>
    <?php include("../includes/logged-nav.html");?>
    <div class="welcome">
        <span>Hello, <?php echo $_SESSION['name'];?>!</span>
    </div>
    <div class="container">
        <div id="col1">
            <div id="kalendarz">
                <span id="kalendarz-title">Calendar</span>
                    <ul class="days">
                        <li>Mon</li>
                        <li>Tue</li>
                        <li>Wen</li>
                        <li>Thu</li>
                        <li>Fri</li>
                        <li>Sat</li>
                        <li>Sun</li>
                    </ul>
                    <div class="calendar-grid" id="calendar">
                    </div>
            </div>
            <div id="zadania">
                <span class="container-title">Assignments</span>
                <ul class="assignments">
                    <div class="assignment" id="39413">
                        <div class="as-info">
                            <span class="assignment-title">Rozprawka</span>
                            <span class="assignment-course">j polski</span>
                            <span class="assignment-date">20/04/2024</span>
                        </div>
                        <button>More</button>
                    </div>
                    <div class="assignment">
                        <div class="as-info">
                            <span class="assignment-title">Rozprawka</span>
                            <span class="assignment-course">j polski</span>
                            <span class="assignment-date">20/04/2024</span>
                        </div>
                        <button>More</button>
                    </div>
                    <div class="assignment">
                        <div class="as-info">
                            <span class="assignment-title">Rozprawka</span>
                            <span class="assignment-course">j polski</span>
                            <span class="assignment-date">20/04/2024</span>
                        </div>
                        <button>More</button>
                    </div>
                </ul>
            </div>
        </div>
        <div id="col2">
            <div id="lekcje">
                <span class="container-title">Courses</span>
                <ul class="subjects">
                    <button class="class">
                        <span class="subject-title">Programowanie</span>
                        <div>
                            <span>More</span>
                            <span class="projects-amount">13<i class="ri-file-line"></i></span>
                        </div>
                    </button>
                </ul>
                <a class="more-btn" href="courses.php">See more</a>
            </div>
        </div>
    </div>
    <script src="../scripts/dashboard.js"></script>
</body>
</html>