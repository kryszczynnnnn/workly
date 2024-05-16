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
</body>
</html>