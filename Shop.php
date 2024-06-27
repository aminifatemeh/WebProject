<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="ShopStyle.css">
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>
<?php include "Header.php"; ?>
<div class="ShopBanner"><h1>Product Details</h1></div>
<div class="BodyContainer">
    <div class="AsideContainer">
        <h3>related products</h3>
    </div>
    <div class="ProductImageContainer">
        <img src="" alt="" class="Shopimg">
    </div>
    <div class="ProductDetailsContainer">
        <h2 class="Title"></h2>
        <h3></h3>
        <h3>Type</h3>
        <h3>Price</h3>
        <h3>Rating: </h3>
        <button class="button-74 Cart" role="button">Add to Cart</button>

    </div>

</div>
<?php include "Footer.php"; ?>
<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/jquery-zoom/jquery.zoom.js"></script>
<script src="script.js"></script>
</body>
</html>