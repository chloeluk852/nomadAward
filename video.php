<?php
$name = isset($_GET['name']) ? $_GET['name'] : '';
$fileId = isset($_GET['id']) ? $_GET['id'] : '';

if (!$fileId) {
    die("Video not found");
}

$embedUrl = "https://drive.google.com/file/d/" . $fileId . "/preview";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            font-family: Arial, sans-serif;
        }
        .video-container {
            width: 95vw;
            height: 85vh;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
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
        <iframe src="<?= htmlspecialchars($embedUrl) ?>" allowfullscreen></iframe>
    </div>
</body>
</html>