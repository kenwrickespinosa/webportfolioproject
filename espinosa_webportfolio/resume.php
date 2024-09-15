<?php
    $header = 'Resume';
    $sti_fblink = 'https://www.facebook.com/davao.sti.edu';
    $mintal = 'Mintal Comprehensive High School';
    $stidavao = 'STI College Davao'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resume.css">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <div id="container-section">
            <h1 id="header-title"><?php echo $header; ?></h1>
            <img src="img/colorful_line.png" alt="colorful line">
            <div>
                <a href="index.php">
                    <img src="img/Home_logo.png">
                </a>
                <a href="work.php">
                    <img src="img/work_logo.png" style="width:30px; margin-left: 25px;">
                </a>
            </div>
        </div>
        
        <div id="section-education">
            <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:30px;">Education</p>
            <div class="school-card">
                <p>2010 - 2016</p>
                <p class="school-name"><?php echo $mintal; ?></p>
                <div class="visit-school">
                    <a href="">Visit Facebook Page</a>
                </div>
            </div>
            <div class="school-card">
                <p>2021 - On going</p>
                <p class="school-name"><?php echo $stidavao; ?></p>
                <div class="visit-school">
                    <a href="<?php echo $sti_fblink; ?>">Visit Facebook Page</a>
                </div>
            </div>
        </div>

        <div>
            <img src="img/skills_section.png" alt="my skills" style="width:600px; text-align:center; justify-content:center;">
        </div>
    </div>
</body>
</html>