<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
  <script src="https://kit.fontawesome.com/b1f6153efb.js" crossorigin="anonymous"></script>

  <style>
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    body{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 0 50px;
    }

    .navbar{
      width: 100%;
      height: 100px;
      background-color: #FFFFFF;
      display: flex;
      justify-content: space-between;
      position: fixed;
      top: 0;
      z-index: 100;
      box-shadow: 0px 19px 13px -10px rgba(0,0,0,0.1);
    }

    .navbar ul {
      width: 500px;
      height: 100px;
      list-style: none;
      display: flex;
      margin-left: 200px;
      justify-content: space-around;
      align-items:center ;
    }
    .navbar li{
      height: 100px;
      padding: 0 20px;
    }
    .navbar li:hover a{
      color: #9F78FF;
    }
    .navbar li a{
      text-decoration: none;
      line-height: 100px;
      color: #131313;
    }
    .navicon{
      width: 500px;
      height: 100px;
      display: flex;
      align-items: center;
    }
    .navicon a{
      width: 40px;
      height: 40px;
      border: 0.5px solid #252525;
      border-radius: 50%;
      margin: 0 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-decoration: none;
    }

    a.icon5{
      width: 80px; !important;
      border-radius: 40px;
    }
    [class^='icon']{
      color: #282828;
      transition: .5s;
    }
    [class^='icon']:hover{
      color: #9F78FF;
    }

  </style>
</head>
<body>
<nav class="navbar">
  <ul>
    <li><a href="FashionShop.php">HOME</a></li>
    <li><a href="#">SHOP</a></li>
    <li><a href="#">ABOUT</a></li>
    <li><a href="#">BLOG</a></li>
    <li><a href="#">CONTACT US</a></li>
  </ul>
  <div class="navicon">
    <a href="" class="icon1"><i class="fa-brands fa-instagram"></i></a>
    <a href="" class="icon2"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="" class="icon3"><i class="fa-brands fa-twitter"></i></a>
    <a href="" class="icon4"><i class="fa-solid fa-magnifying-glass"></i></a>
    <a href="" class="icon5"><i class="fa-solid fa-cart-shopping"></i></a>
  </div>
</nav>

</body>
</html>