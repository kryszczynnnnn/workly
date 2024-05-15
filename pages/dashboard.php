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
    <div class="nav-bar">
        <div class="logo">
            <img src="../assets/WhiteOutlineLOGO.png">
            <span id="logo-text">Workly</span>
        </div>
        <ul>
            <li><a href="#">Strona Główna</a></li>
            <li><a href="#">Profil</a></li>
            <li><a href="#">Kalendarz</a></li>
            <li><a href="#">Ustawienia</a></li>
        </ul>
        <button id="log-out">
            <i class="ri-logout-box-r-line" id="pfp"></i>
        </button>
    </div>
    <div class="welcome">
        <span>Witaj, <?php echo $_SESSION['name'];?>!</span>
    </div>
    <div class="container">
        <div id="col1">
            <div id="kalendarz">
                <span id="kalendarz-title">Kalendarz</span>
                    <ul class="days">
                        <li>Pon</li>
                        <li>Wt</li>
                        <li>Śr</li>
                        <li>Czw</li>
                        <li>Pt</li>
                        <li>Sob</li>
                        <li>Niedz</li>
                    </ul>
                    <div class="calendar-grid" id="calendar">
                    </div>
            </div>
            <div id="zadania">
                <span class="container-title">Zadania</span>
                <ul class="assignments">
                    <div class="assignment">
                        <div class="as-info">
                            <span class="assignment-title">Rozprawka</span>
                            <span class="assignment-course">j polski</span>
                            <span class="assignment-date">20/04/2024</span>
                        </div>
                        <button>Zobacz</button>
                    </div>
                    <div class="assignment">
                        <div class="as-info">
                            <span class="assignment-title">Rozprawka</span>
                            <span class="assignment-course">j polski</span>
                            <span class="assignment-date">20/04/2024</span>
                        </div>
                        <button>Zobacz</button>
                    </div>
                    <div class="assignment">
                        <div class="as-info">
                            <span class="assignment-title">Rozprawka</span>
                            <span class="assignment-course">j polski</span>
                            <span class="assignment-date">20/04/2024</span>
                        </div>
                        <button>Zobacz</button>
                    </div>
                </ul>
            </div>
        </div>
        <div id="col2">
            <div id="lekcje">
                <span class="container-title">Klasy</span>
                <ul class="subjects">
                    <button class="class">
                        <span class="subject-title">j polski</span>
                        <div>
                            <span>Więcej</span>
                            <span class="projects-amount">13<i class="ri-file-line"></i></span>
                        </div>
                    </button>
                    
                </ul>
            </div>
        </div>
    </div>
    <script src="../scripts/dashboard.js"></script>
</body>
</html>