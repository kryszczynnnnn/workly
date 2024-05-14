<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../assets/WhiteOutlineLOGO.png">
        <link rel="stylesheet" href="../styles/style-index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <title>Workly - Dashboard</title>
</head>
<body>
    <?php include("../includes/normal-nav.html"); ?>
    <div class="container">
        <span class="logo">Workly</span>
        <span class="desc">A new way to make your assignments done and on time! No matter where you are, you can submit them from all around the world! Get your team a new way to send a files, documents and everything else. There's no need to buy anything, beacuse Workly is completely FREE.</span>
        <div class="buttons">
            <button class="more-info">More info</button>
            <a href="../pages/login.php" class="login">Get started</a>
        </div>
    </div>
    <div class="about">
        <span class="about-text">About us</span>
        <div class="block">
            <div class="left">
                <img src="../assets/members-icon.png">
            </div>
            <div class="right">
                <span>Many people trusted us!</span>
                <span id="amount">+10,000</span>
                <span>accounts made</span>
            </div>
        </div>
        <div class="block">
            <div class="left">
                <img src="../assets/dosc.png">
            </div>
            <div class="right">
                <span>A lot of work done!</span>
                <span id="amount">+500,000</span>
                <span>files sent</span>
            </div>
        </div>
        <div class="block">
            <div class="left">
                <i class="ri-earth-line"></i>
            </div>
            <div class="right">
                <span>Our servies are worldwide!</span>
                <span id="amount">+20</span>
                <span>countries</span>
            </div>
        </div>
    </div>
    <div class="socials">
        <span class="socials-text">Our socials</span>
        <span>Follow us to be on date with everything new coming up to Workly!</span>
        <ul>
            <li><a href="#"><i class="ri-twitter-x-line"></i></a></li>
            <li><a href="#"><i class="ri-facebook-box-fill"></i></a></li>
            <li><a href="#"><i class="ri-youtube-fill"></i></a></li>
            <li><a href="#"><i class="ri-instagram-line"></i></a></li>
            <!--

                <li><a href="#"><i class="ri-threads-line"></i></a></li>
                <li><a href="#"><i class="ri-tiktok-fill"></i></a></li>
            -->
        </ul>
    </div>
    <?php include("../includes/footer.html");   ?>
</body>
</html>