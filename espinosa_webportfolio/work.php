<?php
    $header = 'Leave a comment regarding my work';
    
    // Define the file where comments will be stored
    $file = 'comments.txt';

    // Initialize comment variable
    $comment = '';

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize the comment input
        $comment = htmlspecialchars($_POST['comment']);
        
        // Ensure comment is not empty
        if (!empty($comment)) {
            // Append the comment to the file
            $entry = 'Username: Joshua Garcia ' . date('Y-m-d H:i:s') . " - " . $comment . "\n";
            file_put_contents($file, $entry, FILE_APPEND | LOCK_EX);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="work.css">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <div id="container-section">
            <h1 id="header-title"><?php echo $header; ?></h1>
            <img src="img/colorful_line.png" alt="colorful line">
            <div>
                <a href="index.php">
                    <img src="img/Home_logo.png" alt="Home">
                </a>
                <a href="work.php">
                    <img src="img/resume_logo.png" style="width:46px; margin-left: 25px;" alt="Work">
                </a>
            </div>
        </div>

        <form action="work.php" method="post">
            <input type="text" name="comment" placeholder="Enter your comment" required>
            <input type="submit" value="Submit">
        </form>

        <div id="comment-section">
            <?php
                // Check if the comments file exists
                if (file_exists($file)) {
                    // Read the comments from the file
                    $comments = file_get_contents($file);
                    
                    // Display the comments
                    echo nl2br(htmlspecialchars($comments));
                } else {
                    echo "No comments yet.";
                }
            ?>
        </div>
    </div>
</body>
</html>
