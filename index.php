<?php 
$workArr = ['合遠', '君天下', '幸福樂', '明築向陽4F', '明築向陽B1-3F', '莉朵', '晴灣', '愛慕', '極光', '權視界'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="九霄空間設計,九霄空間室內設計,九霄,九霄室內設計,空間設計,室內設計,室內,設計,design,jiousaio,九霄空間設計jiousaio"/>
    <link rel="shortcut icon" href="./images/logo.jpg" type="image/x-icon" />
    <title>九霄空間設計</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/menu.css">
</head>
<body>
    <div id="loading">
        <img src="./images/logo.jpg" alt="九霄空間室內設計">
        <div class="progress-bar">
            <div class="bar" id="bar"></div>
        </div>
    </div>
    <main>
        <a href="https://www.facebook.com/profile.php?id=100054229071553" target="_blank" class="fb" id="fb"><img src="./images/fb.png" alt=""></a>
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
            <a href="#home" class="menuItem">HOME</a>
            <a href="#work" class="menuItem">WORK</a>
            <a href="#about" class="menuItem">ABOUT</a>
            <a href="#contact" class="menuItem">CONTACT</a>
        </div>
        <section class="banner" id="home">
            <div class="intro">
                <h1>九霄空間室內設計</h1>
                <p>JIOUSAIO INTERIOR DESIGN</p>
                <a href="#work"> <p>VIEW PROJECT</p> </a>
            </div>
            <div id="docs">
                <div class="doc"></div>
            </div>
            <div id="imgList">
                <img src="./images/極光/1.jpg" alt="">
                <img src="./images/莉朵/5.jpg" alt="">
                <img src="./images/明築向陽B1-3F/3.jpg" alt="">
                <img src="./images/君天下/8.jpg" alt="">
                <img src="./images/合遠/3.jpg" alt="">
                <img src="./images/banner-2.jpg" alt="">
                <img src="./images/banner-3.jpg" alt="">
            </div>
        </section>
        <section class="about" id="about">
            <h2>關於我們</h2>
            <p class="small-title">Jiousaio is An Architecture Agency</p>
            <div class="content">
                <img src="./images/banner-1.jpg" alt="">
                <div class="intro">
                    <small>WELCOME</small>
                    <h2>九霄空間室內設計</h2>
                    <h4>Jiousaio Interior Design Company</h4>
                    <p>
                        『九霄』，表示天空的最高處，比喻極高或極遠的地方<br>
                        想在如此得天獨厚的環境中打造屬於自己的空間<br>
                        九霄空間設計絕對是您的最佳首選<br>
                        我們善於建築、室內、景觀空間設計規劃<br>
                        將空間美學與生活機能巧妙融合<br>
                        落實您對於空間的夢想藍圖<br>
                        創造舒適、獨特的DNA美學
                    </p>
                    <p class="english">
                        "Jiousaio" means the highest point in the sky, referring to a very high or very far place
                        Want to create your own space in such a unique environment
                        Jiousaio Space Design is definitely your best choice
                        We are good at architectural, interior and landscape space design and planning
                        Ingeniously integrate space aesthetics and life functions
                        Realize your dream blueprint for space
                        Create comfortable and unique DNA aesthetics
                    </p>
                    <div class="year">
                        <div class="item">
                            <strong>35</strong>
                            <p>年的室內設計經驗</p>
                        </div>
                        <div class="item">
                            <strong>999+</strong>
                            <p>個完成項目</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="work" id="work">
            <h2>最近完成的項目</h2>
            <p class="small-title">Our Finished Projects</p>
            <div class="projects">
                <?php for($n=0;$n<count($workArr);$n++){ ?>
                <div class="project" onclick="openWorkFn(<?php echo $n; ?>)">
                    <div class="imgBox">
                        <img src="./images/<?php echo $workArr[$n]; ?>/1.jpg" class="img">
                        <div class="view">
                            <div class="icon"> <i class="fa-solid fa-magnifying-glass"></i> </div>
                        </div>
                    </div>
                    <div class="text">
                        <p>INTERIOR DESIGN</p>
                        <h3><?php echo $workArr[$n]; ?></h3>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
        <section class="contact" id="contact">
            <h2>與我們聯絡</h2>
            <p class="small-title">Contact Us</p>
            <div class="content">
                <form action="./fn/send.php" method="post" id="messageForm">
                    <input type="text" placeholder="您的姓名" name="name" id="messageName">
                    <input type="text" placeholder="您的Email" name="email" id="messageEmail">
                    <input type="text" placeholder="主旨" name="title" id="messageTitle">
                    <textarea name="content" id="" cols="30" rows="10" placeholder="訊息..." id="messageContent"></textarea>
                    <a href="javascript:;" id="sendMessage">Send Message</a>
                    <input type="submit" hidden id="messageSubmit">
                </form>
                <div class="info">
                <h3>Contact Information</h3>
                <p>Address: <span class="address">桃園市桃園區力行路385巷33-6 1F</span></p>

                <p>Phone: <span>0930773739</span></p>

                <p>Email: <a href="mailto:h953266583@yahoo.com.tw" >cy9577@gmail.com</a></p>

                <p>Website: <a href="https://jiousaio.com">jiousaio.com</a></p>
                </div>
            </div>
        </section>
        <footer>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.06562214718!2d121.29541661536057!3d24.997886045891423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34681fadb7f8f06f%3A0xc66a9c546341f985!2z5qyK6KaW55WMUEtPTkU!5e0!3m2!1szh-TW!2stw!4v1669542996387!5m2!1szh-TW!2stw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p>©JIOUDSIO 2022 ALL RIGHTS RESERVED</p>
        </footer>
    </main>
    <div class="workModal" id="workModal">
        <div class="content">
            <i class="fas fa-times" id="closeWorkModalBtn"></i>
            <img src="" id="workMainImg">
        </div>
        <div class="smallImgList" id="smallImgList">
            <!-- <img src="" class="smallworkImg"> -->
        </div>
    </div>
    <script src="./script/script.js"></script>
</body>
</html>