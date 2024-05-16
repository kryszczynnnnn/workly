<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/WhiteOutlineLOGO.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../styles/style-course.css">
    <title>Workly - ${nazwa_lekcji}</title>
</head>
<body>
    <?php include("../includes/logged-nav.html"); ?>

    <!-- CONTAINER -->
    
    <div class="container">
        <div class="course-title">
            <span>${nazwa-lekcji}</span>
        </div>
        <div class="course-container">
            <div class="users">
                <span class="title" id="users-title"><i class="ri-graduation-cap-fill"></i> Members</span>
                <ul>
                    <li class="user"><i class="ri-user-line"></i><span class="username">Jan Nowak</span></li>
                </ul>
            </div>
            <div class="assignments">
                <span class="title" id="assignments-title">Assingnments</span>
                <ul>
                    <div class="assignment">
                        <div class="as-info">
                            <span class="assignment-title">Rozprawka</span>
                            <span class="assignment-date"><i class="ri-calendar-fill"> </i><span class="date-value">20/04/2024</span></span>
                        </div>
                        <button>More</button>
                    </div>
                </ul>
                <div class="bottom">
                    <button class="invite" id="inviteBtn">Invite code</button>
                    <button class="create" id="createBtn">Create assignment</button>
                </div>
            </div>
            <div class="users" id="users2">
                <span class="title" id="users-title"><i class="ri-graduation-cap-fill"></i> Members</span>
                <ul>
                    <li class="user"><i class="ri-user-line"></i><span class="username">Jan Nowak</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="create-assignment-background" id="create-assignment">
        <div class="create-assignment">
            <i class="ri-close-large-line" id="closeCreate"></i>
            <div class="header">Create assignment</div>
            <form action="create-assignment.php" method="post">
                <input type="text" name="title" placeholder="Title">
                <textarea name="description" placeholder="Description" class="desc"></textarea>
                <input type="date" name="deadline">
                <input type="submit" value="Create" name="submit" class="submit">
            </form>
        </div>
    </div>
    <div class="invite-background" id="invite-code">
        <div class="invite-code">
            <i class="ri-close-large-line" id="closeInvite"></i>
            <div class="header">Invite code</div>
            <div class="desc">Share this code with anyone who you want to join the course</div>
            <div id="code">No valid code</div>
            <button class="new-code">Generate new code</button>
        </div>
    </div>
    <script src="../scripts/course.js"></script>
</body>
</html>