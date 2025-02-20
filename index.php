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
    <title>Video List</title>
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
    <h1>Video List</h1>
    <ul>
    <?php
    $videos = array(
        "Abby Yu" => "1jgf5FUlZct4B-skYCj_4Ay8ZrilA7yb9",
        "Addison Ong" => "1IY7v6LUPE6HAvcAfdAZioazSaTT2HrM0",
        "Adelle Wu" => "1wjgUwvmWFTFkY80zYOOzOj7slaYh39yI",
        "Aison Chiu" => "1wfU4Dy-tX6RuHiyuHy5Q1vhskb37AXFf",
        "Andreea Cheung" => "1o-gQyo9LGNufq10InRf1DBKnLq_1Jmf8",
        "Annette Yu" => "1I6-6GMWimRy6XtN4beNDB_JjYznBJX1I",
        "Brandon Kwok" => "1JJdDgjs4D42c4NnKXI2Ku7dqKqccCk0B",
        "Charles Liu" => "1fSzbklx1FVPwWwy-xi-eNzVp4kQ-jYQP",
        "Chloe Wong" => "1LnB7nsnmWnWC1OBRtToEFEZ0pfPquAJ7",
        "Curtis Leung" => "1HO8QyEUM5SJvDu2koB6gdO79KIgFt9nQ",
        "Curtis Wong" => "1FOVJlbMoN9WPnfbKDlYcgtVxnxQa_z4Y",
        "Cyrus Lai" => "1hp6VIfWMq1zTmsnf7DPk7CTX2gAzl5pw",
        "Elgar Lam" => "1TRNgBEd6iQeb1U7igcIuh14loxDg1MGO",
        "Gwan Yu Raven Siu" => "1I32_xN4TpkCgjYoIj7T7IGr6onl_0RU4",
        "Hei Yu Hailey Siu" => "1gpYdsEC0PR0EieG6DtCQjSREb2QnSweK",
        "Jayden Heng" => "1bKTOCp8DpALFnIEeq6C42AlAEl0ESQSc",
        "Marcus Cheung" => "1Sw8cl4cD-SF-r755Dwf4IdWnnT8j5MRv",
        "Maxwell Liu" => "1pMBdzfvNhbLTKGV1JpVMy6itBj_qQyXl",
        "Natalie Tsang" => "1T8vjmFJPrfPaV_n8OrAhGThuMhNf1uQA",
        "Sek Ching Isabella Li" => "1ImgKWFEKdRfjy-7_mkzgrHRVmsAEjC4u",
        "Tin Yat Javen Hooi" => "16V-wP3FFLclw3zYRF_ZkTkrhb2oRiRGL",
        "Tsz Yin Abby Siu" => "1lNJMD8rNKpl-fZ6k4IIVhvkTC083tTSm",
        "Zac Woo" => "1RLZWdZd22h7-6ADTe_uveEAqlKHTujJB"
    );
    
    foreach($videos as $name => $fileId) {
        echo "<li><a href='video.php?name=" . urlencode($name) . "&id=" . urlencode($fileId) . "'>" . htmlspecialchars($name) . "</a></li>";
    }
    ?>
    </ul>
</body>
</html>