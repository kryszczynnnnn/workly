<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/WhiteOutlineLOGO.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../styles/style-courses.css">
    <title>Workly - ${nazwa_lekcji}</title>
</head>
<body>
    <?php include("../includes/logged-nav.html"); ?>
    <div class="container">
        <div id="lekcje">
            <span class="container-title">Courses</span>
            <ul class="subjects">
                <button class="class">
                    <span class="subject-title">Konstantynopolitańczykowianeczka</span>
                    <div>
                        <span>More</span>
                        <span class="projects-amount">13<i class="ri-file-line"></i></span>
                    </div>
                </button>
            </ul>
            <button class="more-btn" id="createBtn">Create course</button>
        </div>
    </div>
    <div class="create-course-background" id="create-course">
        <div class="create-course">
            <i class="ri-close-large-line" id="closeCreate"></i>
            <div class="header">Create assignment</div>
            <form action="../scripts/create-course.php" method="post">
                <input type="text" name="title" placeholder="Title">
                <input type="submit" value="Create" name="submit" class="submit">
            </form>
        </div>
    </div>
    <script src="../scripts/courses.js"></script>
</body>
</html>