<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九霄空間設計</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/menu.css">
</head>
<body>
    <header id="header">
        <a href="/"><img src="./images/logo.jpg" alt=""></a>
        <div class="frame" id="menuBtn">
            <div class="center">
                <div class="menu-icon">
                <div class="line1 no-animation"></div>
                <div class="line2 no-animation"></div>
                <div class="line3 no-animation"></div>
                </div>
            </div>
        </div>
    </header>
    <div id="menu">
        <div class="border"></div>
        <img src="./images/logo.jpg" alt="">
        <li>HOME</li>
        <li>WORK</li>
        <li>ABOUT</li>
        <li>COTACT</li>
    </div>
    <div class="banner">
        <div class="intro">
            <h1>九霄空間室內設計</h1>
            <p>JIOUSAIO INTERIOR DESIGN</p>
            <a href="javascript:;"> <p>VIEW PROJECT</p> </a>
        </div>
        <div id="docs">
            <div class="doc"></div>
        </div>
        <div id="imgList">
            <img src="./images/banner-1.jpg" alt="">
            <img src="./images/banner-2.jpg" alt="">
            <img src="./images/banner-3.jpg" alt="">
            <img src="./images/banner-1.jpg" alt="">
        </div>
    </div>
    <div class="work">
        <h2>Our Finished Projects</h2>
        <div class="projects">
            <?php for($n=0;$n<11;$n++){ ?>
            <div class="project">
                <div class="imgBox">
                    <img src="./images/合遠/IMG_001.JPG">
                    <div class="view">
                        <div class="icon"> <i class="fa-solid fa-magnifying-glass"></i> </div>
                    </div>
                </div>
                <div class="text">
                    <p>INTERIOR DESIGN</p>
                    <h3>Name</h3>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <script src="./script/script.js"></script>
</body>
</html>