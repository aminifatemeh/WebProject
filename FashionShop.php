<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://kit.fontawesome.com/b1f6153efb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<?php include "Header.php"; ?>

<div class="home">
    <img src="images/hdr0.jpg" alt="" class="hdr img2">
    <img src="images/hdr1.jpg" alt="" class="hdr img1">
    <img src="images/hdr2.jpg" alt="" class="hdr img0">

</div>
<div class="shadow">
    <span>fashion changing always</span>
</div>

<div class="cards">
    <div class="cardcontainer">
        <img class="crd crd1">
        <a href="Product.php?id=women" class="a1"><div class="cardshdaow"><span class="cardtext tracking-in-contract">WOMEN'S WEAR</span></div></a>
    </div>
    <div class="cardcontainer">
        <img class="crd crd2">
        <a href="Product.php?id=men" class="a2"><div class="cardshdaow"><span class="cardtext tracking-in-contract">MEN'S WEAR</span></div></a>
    </div>
    <div class="cardcontainer">
        <img class="crd crd3">
        <a href="Product.php?id=shoes" class="a3"><div class="cardshdaow"><span class="cardtext tracking-in-contract">SHOES</span></div></a>
    </div>
    <div class="cardcontainer">
        <img class="crd crd4">
        <a href="Product.php?id=watches" class="a4"><div class="cardshdaow"><span class="cardtext tracking-in-contract">WATCHES</span></div></a>
    </div>
</div>
<span id="arrival">NEW ARRIVALS</span>
<div class="BlogCards">
    <div class="blog"><img src="" alt="" class="blg blg1"></div>
    <div class="blog"><img src="" alt="" class="blg blg2"></div>
    <div class="blog"><img src="" alt="" class="blg blg3"></div>
    <div class="blog"><img src="" alt="" class="blg blg4"></div>
    <div class="blog"><img src="" alt="" class="blg blg5"></div>
    <div class="blog"><img src="" alt="" class="blg blg6"></div>
    <div class="blog"><img src="" alt="" class="blg blg7"></div>
    <div class="blog"><img src="" alt="" class="blg blg8"></div>
</div>
<div class="features">
    <div class="ftr ftr1">
        <img src="images/services1.svg" alt="" class="ftricon">
        <span>Lorem ipsum dolor sit.</span>
        <p>Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="ftr ftr2">
        <img src="images/services2.svg" alt="" class="ftricon">
        <span>Lorem ipsum dolor sit.</span>
        <p>Lorem ipsum dolor.</p>
    </div>
    <div class="ftr ftr3">
        <img src="images/services3.svg" alt="" class="ftricon">
        <span>Lorem ipsum dolor sit.</span>
        <p>Lorem ipsum.</p>
    </div>
    <div class="ftr ftr4">
        <img src="images/services4.svg" alt="" class="ftricon">
        <span>Lorem ipsum dolor sit.</span>
        <p>Lorem ipsum dolor.</p>
    </div>
</div>

<?php include "Footer.php"; ?>

<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="script.js" ></script>
</body>
</html>