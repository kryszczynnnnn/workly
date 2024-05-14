<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="WhiteOutlineLOGO.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../styles/style-course.css">
    <title>Workly - ${nazwa_lekcji}</title>
</head>
<body>
    <div class="nav-bar">
        <div class="logo">
            <img src="WhiteOutlineLOGO.png">
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
        <button class="open-nav" id="open-nav">
            <i class="ri-menu-line"></i>
        </button>
    </div>

    <!-- SMALL NAV-->

    <div class="small-nav" id="small-nav">
        <ul>
            <li><a href="#">Strona Główna</a></li>
            <li><a href="#">Profil</a></li>
            <li><a href="#">Kalendarz</a></li>
            <li><a href="#">Ustawienia</a></li>
            <button id="log-out">
                Wyloguj się
            </button>
        </ul>
        <button class="close-small" id="close-nav">
            <i class="ri-close-large-line" id></i>
        </button>
    </div>

    <!-- CONTAINER -->
    
    <div class="container">
        <div class="course-title">
            <span>${nazwa-lekcji}</span>
        </div>
        <div class="course-container">
            <div class="users">
                <span class="title" id="users-title"><i class="ri-graduation-cap-fill"></i> Członkowie</span>
                <ul>
                    <li class="user"><i class="ri-user-line"></i><span class="username">Jan Nowak</span></li>
                </ul>
            </div>
            <div class="assignments">
                <span class="title" id="assignments-title">Zadania</span>
                <ul>
                    <div class="assignment">
                        <div class="as-info">
                            <span class="assignment-title">Rozprawka</span>
                            <span class="assignment-date"><i class="ri-calendar-fill"> </i><span class="date-value">20/04/2024</span></span>
                        </div>
                        <button>Więcej</button>
                    </div>
                </ul>
            </div>
            <div class="users" id="users2">
                <span class="title" id="users-title"><i class="ri-graduation-cap-fill"></i> Członkowie</span>
                <ul>
                    <li class="user"><i class="ri-user-line"></i><span class="username">Jan Nowak</span></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="course.js"></script>
</body>
</html>