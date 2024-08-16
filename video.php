<?php
$name = isset($_GET['name']) ? $_GET['name'] : '';
$videoExtensions = array('.mp4', '.mov');
$videoFile = '';

foreach ($videoExtensions as $ext) {
    if (file_exists("videos/" . $name . $ext)) {
        $videoFile = "videos/" . $name . $ext;
        break;
    }
}

if (!$videoFile) {
    die("Video not found");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <title><?= htmlspecialchars($name) ?></title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #000;
            color: #fff;
            font-family: "Montserrat", sans-serif;
        }
        .video-container {
            width: 95vw;
            height: 85vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        video {
            width: 100%;
            height: 100%;
            object-fit: contain;
            max-width: 100%;
            max-height: 100%;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h1><?= htmlspecialchars($name) ?></h1>
    <div class="video-container">
        <video controls autoplay>
            <source src="<?= htmlspecialchars($videoFile) ?>" type="video/<?= pathinfo($videoFile, PATHINFO_EXTENSION) ?>">
            Your browser does not support the video tag.
        </video>
    </div>
</body>
</html>