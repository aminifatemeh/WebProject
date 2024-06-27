<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .footer{
            width: 100%;
            height: 450px;
            background-color: #1D2547;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding-left: 50px;
            margin-top: 20px;
        }
        [class^="item"]{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 150px;

        }

        [class^="items"]{
            margin: 0 20px;
        }

        .item1{
            margin-right: 100px;
            width: 300px;
        }

        .item1 p{
            font-size: 1.2rem;
            color: #FFFFFF;
            line-height: 25px;
        }

        [class^="item"] li a{
            text-decoration: none;
            color: #FFFFFF;
            line-height: 10px;
        }
        [class^="item"] li{
            list-style: none;
            line-height: 30px;
        }
        [class^="item"] span{
            font-size: 1.5em;
            color: #FFFFFF;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<footer class="footer">
    <div class="item1">
        <span>Lorem ipsum dolor.</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum ex molestiae suscipit. Aperiam, assumenda
            nesciunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, sequi?</p>
    </div>
    <div class="items2">
        <span>Lorem ipsum dolor.</span>
        <ul>
            <li><a href="#">Lorem ipsum dolor.</a></li>
            <li><a href="#">Lorem ipsum dolor.</a></li>
            <li><a href="#">Lorem ipsum dolor.</a></li>
            <li><a href="#">Lorem ipsum dolor.</a></li>
        </ul>
    </div>
    <div class="items3">
        <span>Lorem ipsum dolor.</span>
        <ul>
            <li><a href="#">Lorem ipsum dolor.</a></li>
            <li><a href="#">Lorem ipsum dolor.</a></li>
            <li><a href="#">Lorem ipsum dolor.</a></li>
            <li><a href="#">Lorem ipsum dolor.</a></li>
        </ul>
    </div>
    <div class="items4">
        <span>Lorem ipsum dolor.</span>
        <ul>
            <li><a href="#">Lorem ipsum dolor.</a></li>
            <li><a href="#">Lorem ipsum dolor.</a></li>
            <li><a href="#">Lorem ipsum dolor.</a></li>
            <li><a href="#">Lorem ipsum dolor.</a></li>
        </ul>
    </div>
    <div class="items5">
        <span>Lorem ipsum dolor.</span>
        <ul>
            <li><a href="#">Lorem ipsum dolor.</a></li>
            <li><a href="#">Lorem ipsum dolor.</a></li>
            <li><a href="#">Lorem ipsum dolor.</a></li>
            <li><a href="#">Lorem ipsum dolor.</a></li>
        </ul>
    </div>
</footer>
</body>
</html>