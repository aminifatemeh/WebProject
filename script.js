$(function() {

    var ProductData = null;
    var ProductItem = null;
    var objectData = {
        jsonData : 'API/API.json',
        XMLData : 'API/products.xml'
    }


    $.ajax({
        url: objectData.XMLData,
        success: function (response){
            ProductData = response;
            ProductItem = $(ProductData).find("product");
            NewArrivals()
            ProductCards()
            ShopPage()
        }
    });



    function Slideshow() {

        $(".home > img:gt(0)").hide();

        setInterval(function() {
            $('.home > img:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('.home');
        }, 3000);



}
    Slideshow()

    for (let i = 1; i < 5; i++){
        $(".crd"+i).attr("src","images/card0"+i+".jpg");


    }

    let arr = ["0110","0111","0114","0118","0120","0123","0128","0132"]
    let arr1 = []
    let arr2 = []
    let arr3 = []
    let arr4 = []
    let arr5 = []
    let arr6 = []
    let arr7 = []
    let women = []
    let men = []
    let shoes = []
    let watches = []
    let Pwomen = []
    let Pmen = []
    let Pshoes = []
    let Pwatches = []
    let Rwomen = []
    let Rmen = []
    let Rshoes = []
    let Rwatches = []
    let Type = ["0101","0125","0135"]
    let arr8 = []



    for (let i = 0; i <8 ; i++) {
        $(".blg"+(i+1)).attr("src","images/"+arr[i]+".jpg");


    }
    for (let i = 1; i < 9; i++){

        $(".blog").eq(i-1).append("<div></div>")
        $(".blog").eq(i-1).append("<div class='bag-shopping'><i class='fa-solid fa-bag-shopping'></i></div>")
        $(".blog").eq(i-1).append("<div class=\"bubble\">Add to cart</div>")
        $(".blog").eq(i-1).children().eq(1).attr("class","bloginfo"+i)
    }




    function NewArrivals() {

        for (let i = 0; i < 36; i++) {
            for (let j = 0; j < 8; j++) {
                if($(ProductItem).eq(i).attr("id")===arr[j]){
                    arr1.push ($(ProductItem).eq(i).find("price").text())
                    arr2.push ($(ProductItem).eq(i).find("title").text())
                    arr3.push ($(ProductItem).eq(i).find("rating").text())
                }
            }

        }
        for (let i = 1; i < 9; i++) {
            $(".bloginfo"+i).append("<span class='blgtitle'>"+ arr2[(i-1)] +"</span>","<span class='blgprice'>"+arr1[(i-1)]+"</span>")
        }

        for (let i = 0; i <8; i++) {
            $(".bloginfo"+(i+1)).append("<div></div>")
            $(".bloginfo"+(i+1)).children().eq(2).attr("class","starcontainer"+(i+1))
        }

        for (let i = 0; i < 8; i++) {
            for (let j = 0; j < arr3[i]; j++) {
                $(".starcontainer"+(i+1)).append("<i class='fa-solid fa-star'></i>")
            }
        }
        $(".fa-bag-shopping").click(function () {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Thanks for shopping!',
                showConfirmButton: false,
                timer: 1500
            })
        })

        
    }

    let ID = window.location.href.split("?")[1].split("=")[1];




    function ProductCards() {

        $(".pageBanner").append("<h1></h1>").children().text("Our Products")
        for (let i = 0; i < 36; i++) {
            if ($(ProductItem).eq(i).find("category").text()==="men"){
                arr4.push($(ProductItem).eq(i).attr("id"))
                men.push($(ProductItem).eq(i).find("title").text())
                Pmen.push($(ProductItem).eq(i).find("price").text())
                Rmen.push($(ProductItem).eq(i).find("rating").text())



            }
            if ($(ProductItem).eq(i).find("category").text()==="women"){
                arr5.push($(ProductItem).eq(i).attr("id"))
                women.push($(ProductItem).eq(i).find("title").text())
                Pwomen.push($(ProductItem).eq(i).find("price").text())
                Rwomen.push($(ProductItem).eq(i).find("rating").text())
            }
            if ($(ProductItem).eq(i).find("category").text()==="watch"){
                arr6.push($(ProductItem).eq(i).attr("id"))
                watches.push($(ProductItem).eq(i).find("title").text())
                Pwatches.push($(ProductItem).eq(i).find("price").text())
                Rwatches.push($(ProductItem).eq(i).find("rating").text())
            }
            if ($(ProductItem).eq(i).find("category").text()==="shoes"){
                arr7.push($(ProductItem).eq(i).attr("id"))
                shoes.push($(ProductItem).eq(i).find("title").text())
                Pshoes.push($(ProductItem).eq(i).find("price").text())
                Rshoes.push($(ProductItem).eq(i).find("rating").text())
            }


        }

        console.log(Type)

        if (ID === "women"){
        for (let i = 0; i < arr5.length; i++) {
            $(".ProductCardContainer").append("<div class='Pcard'></div>")
            $(".Pcard").eq(i).append("<div class='Pshadow'></div>")
            $(".Pcard").eq(i).append("<img>")
            $(".Pcard").eq(i).children().eq(1).attr({
                src: "images/"+arr5[i]+".jpg",
                class : "Pimg"+(i+1)
            })
            $(".Pshadow").eq(i).append("<div class='Pinfo slide-top'></div>")
            $(".Pinfo").eq(i).append("<span>"+women[i]+"</span><span>"+Pwomen[i]+"</span><div class='Pstar'></div>")
            $(".Pinfo").eq(i).append("<a class='ShopLink'><button class=\"button-74\" role=\"button\">Shop Now</button></a>")
            $(".ShopLink").eq(i).attr("href","Shop.php?id="+arr5[i])
            for (let j = 0; j < Rwomen[i]; j++) {
                $(".Pstar").eq(i).append("<i class='fa-solid fa-star'></i>")
            }
        }
        }

        if (ID === "men"){
        for (let i = 0; i < arr4.length; i++) {
            $(".ProductCardContainer").append("<div class='Pcard'></div>")
            $(".Pcard").eq(i).append("<div class='Pshadow'></div>")
            $(".Pcard").eq(i).append("<img>")
            $(".Pcard").eq(i).children().eq(1).attr({
                src: "images/"+arr4[i]+".jpg",
                class : "Pimg"+(i+1)
            })
            $(".Pshadow").eq(i).append("<div class='Pinfo slide-top'></div>")
            $(".Pinfo").eq(i).append("<span>"+men[i]+"</span><span>"+Pmen[i]+"</span><div class='Pstar'></div>")
            $(".Pinfo").eq(i).append("<a class='ShopLink'><button class=\"button-74\" role=\"button\">Shop Now</button></a>")
            $(".ShopLink").eq(i).attr("href","Shop.php?id="+arr4[i])
            for (let j = 0; j < Rmen[i]; j++) {
                $(".Pstar").eq(i).append("<i class='fa-solid fa-star'></i>")
            }
        }
        }
        if (ID === "shoes"){
        for (let i = 0; i < arr7.length; i++) {
            $(".ProductCardContainer").append("<div class='Pcard'></div>")
            $(".Pcard").eq(i).append("<div class='Pshadow'></div>")
            $(".Pcard").eq(i).append("<img>")
            $(".Pcard").eq(i).children().eq(1).attr({
                src: "images/"+arr7[i]+".jpg",
                class : "Pimg"+(i+1)
            })
            $(".Pshadow").eq(i).append("<div class='Pinfo slide-top'></div>")
            $(".Pinfo").eq(i).append("<span>"+shoes[i]+"</span><span>"+Pshoes[i]+"</span><div class='Pstar'></div>")
            $(".Pinfo").eq(i).append("<a class='ShopLink'><button class=\"button-74\" role=\"button\">Shop Now</button></a>")
            $(".ShopLink").eq(i).attr("href","Shop.php?id="+arr7[i])
            for (let j = 0; j < Rshoes[i]; j++) {
                $(".Pstar").eq(i).append("<i class='fa-solid fa-star'></i>")
            }
        }
        }
        if (ID === "watches"){
        for (let i = 0; i < arr6.length; i++) {
            $(".ProductCardContainer").append("<div class='Pcard'></div>")
            $(".Pcard").eq(i).append("<div class='Pshadow'></div>")
            $(".Pcard").eq(i).append("<img>")
            $(".Pcard").eq(i).children().eq(1).attr({
                src: "images/"+arr6[i]+".jpg",
                class : "Pimg"+(i+1)
            })
            $(".Pshadow").eq(i).append("<div class='Pinfo slide-top'></div>")
            $(".Pinfo").eq(i).append("<span>"+watches[i]+"</span><span>"+Pwatches[i]+"</span><div class='Pstar'></div>")
            $(".Pinfo").eq(i).append("<a class='ShopLink'><button class=\"button-74\" role=\"button\">Shop Now</button></a>")
            $(".ShopLink").eq(i).attr("href","Shop.php?id="+arr6[i])
            for (let j = 0; j < Rwatches[i]; j++) {
                $(".Pstar").eq(i).append("<i class='fa-solid fa-star'></i>")
            }
        }
        }

    }

    function ShopPage() {

        $(".Shopimg").attr("src","images/"+ID+".jpg")
        $('.Shopimg')
            .wrap('<span style="display:inline-block"></span>')
            .css('display', 'block')
            .parent()
            .zoom();
        let rating = []
        for (let i = 0; i < 36; i++) {


            if ($(ProductItem).eq(i).attr("id")===ID){

                rating.push($(ProductItem).eq(i).find("rating").text())
                console.log(rating)
                $(".Title").text($(ProductItem).eq(i).find("title").text())
                $(".ProductDetailsContainer").children().eq(1).text("Category:    "+$(ProductItem).eq(i).find("category").text())
                $(".ProductDetailsContainer").children().eq(2).text("Type:     "+$(ProductItem).eq(i).find("type").text())
                $(".ProductDetailsContainer").children().eq(3).text("Price:    "+$(ProductItem).eq(i).find("price").text())

                for (let j = 0; j <rating ; j++) {
                    $(".ProductDetailsContainer").children().eq(4).append("<i class='fa-solid fa-star'></i>")
                }




            }


        }
        for (let i = 0; i < Type.length; i++) {
            $(".AsideContainer").append("<a class='AsideLink'><img class='Asideimg'></a>")
            $(".AsideLink").eq(i).attr("href","Shop.php?id="+Type[i])
            $(".Asideimg").eq(i).attr("src","images/"+Type[i]+".jpg")
        }
        $(".Asideimg").css({"width":"100%","height":"220px","margin":"20px 0","border":"1px solid #E8E8EC","border-radius":"20px"})
        $(".button-74").click(function () {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Thanks for shopping!',
                showConfirmButton: false,
                timer: 1500
            })


        })

    }


    })