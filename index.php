<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
        $name = "Downy";
        $fullName = "Muhammad Luthfi TR";
        $studentID = "SI4708";
        $nim = "102022300133";
        $university = "Undergraduate Information System Student at Telkom University";
        $cvLink = "https://drive.google.com/file/d/1sJCVqeCdtoM9uBNMJwke7nQF-q9Eu82e/view?usp=sharing";
        $facebookLink = "https://www.facebook.com/share/1Bfs1FETqb/?mibextid=wwXIfr";
        $instagramLink = "https://www.instagram.com/muhammadluthfi_tr/";
        $linkedinLink = "https://www.linkedin.com/in/muhammad-luthfi-tukhfattur-romadhoni-b56562262?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app";
    ?>

    <header class="header">
        <a href="#" class="logo"><?php echo $name; ?>.</a>
        <nav class="navbar">
            <a href="#">About</a>
            <a href="#">Portfolio</a>
        </nav>
    </header>

    <section class="home">
        <div class="home-content">
            <h1>Hi, I'm <?php echo $name; ?></h1>
            <h3><?php echo $fullName; ?></h3>
            <h3><?php echo $studentID; ?></h3>
            <h3>NIM: <?php echo $nim; ?></h3>
            <p><?php echo $university; ?></p> 
            <div class="button-box">
                <a href="<?php echo $cvLink; ?>" target="_blank" rel="noopener noreferrer">My CV</a>
            </div>        
        </div>
        <div class="social-button">
            <a href="<?php echo $facebookLink; ?>" target="_blank" rel="noopener noreferrer"><i class='bx bxl-facebook'></i></a>
            <a href="<?php echo $instagramLink; ?>" target="_blank" rel="noopener noreferrer"><i class='bx bxl-instagram'></i></a>
            <a href="<?php echo $linkedinLink; ?>" target="_blank" rel="noopener noreferrer"><i class='bx bxl-linkedin'></i></a>
        </div>
    </section>
</body>
</html>