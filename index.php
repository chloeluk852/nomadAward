<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <style>
        body {
            font-family: "Montserrat", sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <h1>Creative Media Design Student Movie Trailers</h1>
    <ul>
    <?php
    $videos = array(
        "Abby Yu.mp4", "Addison Ong.mp4", "Adelle Wu.mp4", "Aison Chiu.mp4",
        "Andreea Cheung.mp4", "Annette Yu.mp4", "Brandon Kwok.mp4", "Charles Liu.mp4",
        "Chloe Wong.mp4", "Curtis Leung.mp4", "Curtis Wong.mp4", "Cyrus Lai.mp4",
        "Elgar Lam.mp4", "Gwan Yu Raven Siu.mov", "Hei Yu Hailey Siu.mp4",
        "Jayden Heng.mov", "Marcus Cheung.mp4", "Maxwell Liu.mp4", "Natalie Tsang.mp4",
        "Sek Ching Isabella Li.mp4", "Tin Yat Javen Hooi.mp4", "Tsz Yin Abby Siu.mp4",
        "Zac Woo.mp4"
    );
    
    foreach($videos as $video) {
        $name = pathinfo($video, PATHINFO_FILENAME);
        echo "<li><a href='video.php?name=" . urlencode($name) . "'>" . htmlspecialchars($name) . "</a></li>";
    }
    ?>
    </ul>
</body>
</html>