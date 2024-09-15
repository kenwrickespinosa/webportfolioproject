<!-- Php -->
<?php
    $header_title = 'Kenwrick Portfolio Project';
    $name = 'Kenwrick Espinosa';
    $title = 'Computer Science Student at STI Davao';
    $phone_number = '+12345321331';
    $email = 'kenwrick12345678@gmail.com';
    $location = 'Davao City, Philippines';
    $facebook_link = "www.facebook.com";
?>
<!-- Html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Web Portfolio</title>
</head>
<body>
    <!-- Personal details -->
    <div class="container">
        <div class="profile-image">
            <img src="img/leonardo_dicaprio.jpg" alt="Profile Picture">
        </div>
    <div class="name"><?php echo $name; ?></div>
    <div class="title"><?php echo $title; ?></div>
    <div class="social-media">
        <a href="<?php echo $facebook_link; ?>" target="_blank" title="Facebook">
            <img src="img/facebook_logo.png" alt="Facebook">
        </a>
    </div>

    <div class="info">
        <div class="info-item">
            <i class="fas fa-phone-alt"></i>
            <span><?php echo $phone_number; ?></span>
        </div>
        <div class="info-item">
            <i class="fas"></i>
            <span><?php echo $email; ?></span>
        </div>
        <div class="info-item">
            <i class="fas fa-map-marker-alt"></i>
            <span><?php echo $location; ?></span>
        </div>
    </div>

    <!-- About Me section outside of the container -->
    <div id="about-me">
        <a class="pages" href="resume.php">
            <img src="img/resume_logo.png" alt="Resume">
        </a>
        <a class="pages" href="work.php">
            <img src="img/work_logo.png" alt="Work" style="width:30px; padding-left:25px;">
        </a>
    </div>
</body>
</html>