<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test CSS, Html preject</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <style>
@media only screen and (min-width: 1280px) {
    .container {
        width: 1280px;
        text-align: center;
        position: relative;
    }
    .container .columns{
        float: left;
    }
    .container .seven {
        margin-left: 200px;
    }
    .container .five {
        float: right;
    }

    .sidebar{
        width: 230px;
        margin-left: 10px;
        position: relative;
        float: left;
    }

    .pagecontent {
        float: left;
        width: 940px;
        margin: 0 10px;
        padding-left: 80px;
    }
    .thumbnail img{
        width: 270px;
    }
    .thumbnail {
        float: left;
        margin: 0 10px 30px;
        text-align: center;
        width: 290px;
    }
}
@media only screen and (min-width: 960px) and (max-width: 1279px) {
    .container {
        width: 960px;
        position: relative;
    }
    .sidebar {
        width: 160px;
        margin: 0 10px;
        float: left;
    }
    .pagecontent {
        float: left;
        width: 700px;
        padding-left: 60px;
        margin: 0 10px;
    }
    .thumbnail {
        width: 210px;
        margin: 0 10px 30px;
        float: left;
        text-align: center;
    }
    .thumbnail img {
        width: 200px;
    }
}

@media only screen and (min-width: 768px) and (max-width: 959px) {
    .container {
        width: 768px;
        position: relative;
    }
    .sidebar {
        width: 124px;
        float: left;
        margin: 0 10px;
    }

    .pagecontent {
        float: left;
        width: 556px;
        padding-left: 20px;
        margin: 0 10px;
    }
    .thumbnail {
        width: 258px;
        text-align: center;
        float: left;
        margin: 0 10px 30px;
    }
    .thumbnail img {
        width: 240px;
    }
    .mobile {
        display: none;
    }

}

@media only screen and (min-width: 480px) and (max-width: 767px) {
    .container {
        width:420px;
    }
    .pagecontent {
        width: 420px;
    }
    .thumbnail img {
        width: 360px;
    }
    .thumbnail {
        width: 380px;
        margin-bottom: 40px;
        text-align: center;
    }

}

@media only screen and (max-width: 767px) {
    .mobile {
        display: block !important;
    }
    .desktop {
        display: none;
    }
}

@media only screen and (max-width: 479px) {
    .container {
        width: 300px;
    }
    .sidebar {
        width: 300px;
    }
    .pagecontent {
        width: 300px;
    }
    .thumbnail {
        width: 300px;
        text-align: center;
    }
    .thumbnail img {
        width: 280px;
    }

}

/*all common styles shared all media*/
body{
    font-family: 'Helvetica Neue', Arial, Helvetica, Gevena, sans-serif;
    font-size: 13px;
}
header{
    display: block;
    padding: 10px 0;
    border-top: 0;
}
a {
    text-decoration: none;
}
a: visited {
    color: green;
}
a:link {
    color: ;
}
.container{
    margin: 0 auto;
    /*position: relative;*/
    padding: 0;
}
header div.container.upper{
    border-bottom: 1px solid #e8e8e8;
}
.clear{
    clear: both;
}
div .logo {
    font-size: 40px;
    display: inline-block;
    float: left;
    margin-left: 40px;
}
div .slogan {
    float: right;
    display: block;
    line-height: 48px;
    margin-right: 40px;
    font-size: 20px;
}
.mobile {
    display: none;
}
.sidebar .accordion li {
        list-style: none;
        text-align: left;
        line-height: 25px;
    }
    .accordion ul {
        margin: 0;
        padding-left: 5px;
    }




    </style>
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
    <script>
    jQuery(function($){
        $(".accordion a").click(function(){
            $(this).next("ul").toggle().closest("li").siblings("li").children("ul").hide();
        }).next("ul").hide();
    });
</script>
</head>

<body>

    {{-- begin of top parts of website --}}
    <header>
        {{-- top part 1 of website --}}
        <div class="container upper">
            {{-- product search  --}}
            <div class="three columns product-search-wrapper">
                <div id="product-search">
                    <form action="/search" method="get" class="search-form" role="search">
                      <input type="hidden" name="type" value="product">
                        <input type="submit" id="search-submit" class="icon ">
                        <input class="search" placeholder="Product search" name="q" type="text" id="search-field">
                    </form>
                    <br class="clear">
                </div>
            </div>
            {{-- end of product search --}}

            {{-- navigation of menu --}}
            <div class="seven columns offset-by-one desktop">
                <nav>
                    <a href="/pages/about-us">About us</a>
                    <a href="/pages/contact-us">Contact</a>
                    <a href="/pages/frequently-asked-questions">FAQs</a>
                    <a href="/account/login" id="customer_login_link">Log In</a>
                </nav>
            </div>
            {{-- end of navigation menu --}}

            {{-- begin of cart-item --}}
            <div class="five columns minicart-wrapper">
                <div id="minicart">
                    <a href="/cart" class="toggle-drawer cart desktop ">My Cart <span class="count cart-target">(18)</span></a>
                    <a href="/cart" class="cart mobile cart-target">My Cart <span class="count">(18)</span></a>
                    <a href="/cart" class="checkout">Check Out</a>
                </div>
            </div>
            {{-- end of cart-item --}}
        </div>
        {{-- end of top part1 of website --}}
        <br class="clear">
        {{-- begin of top part2 of website --}}
        <div class="container lower">
            <div class="logo">
                <a href="#">
                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                </a>
            </div>
            <div class="slogan table-cell">One site wholesale stop solution</div>
        </div>
        {{-- end of top part2 of website --}}
    </header>
    <br class="clear">
    {{-- end of top parts of website --}}

    {{-- centre part of website --}}
    <div class="container" id="main">

        <div class="mobile mobile-header">
            <nav>
                <a href="/pages/about-us">About us</a>
                <a href="/pages/contact-us">Contact</a>
                <a href="/pages/frequently-asked-questions">FAQs</a>
                <a href="/account/login" id="customer_login_link">Log In</a>
            </nav>
        </div>

        <div class="sidebar">
            <nav>
                <a href="#" id="toggle-menu" class="mobile">Menu</a>
                <ul class="accordion desktop">
                    <li>
                        <a>Floor Scale</a>
                    </li>
                    <li>
                        <a>Bathroom Scales</a>
                        <ul>
                            <li>App bathroom scale</li>
                            <li>Mechanical bathroom scale</li>
                            <li>Body compostion scale</li>
                        </ul>
                    </li>
                    <li>
                        <a>Kitchen Scale</a>
                        <ul>
                            <li>dial kitchen scale</li>
                            <li>digital kitchen scale</li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>

        <div class="pagecontent">
            <div class="breadcrumb"></div>
                <h3>App Bathroom Scales</h3>
                <div class="description">
                    <p>We've got dozens of different types of coffee beans for you to choose from! If you want to narrow down your search based on origin, brand, or roast, please use the navigation menu. Otherwise, feel free to browse through all our coffee beans below. There are multiple pages so please use the links at the bottom to carry on to the next one.</p>
                </div>
                <section class="product-grid">
                    <div class="thumbnail">
                        <img src="//cdn.shopify.com/s/files/1/0280/5548/products/Bean-There-Burundi-Musema_1024x1024.jpg" alt="">
                        <h5>App Bathroom Scale</h5>
                    </div>
                    <div class="thumbnail">
                        <img src="//cdn.shopify.com/s/files/1/0280/5548/products/Decaf-4bag-bundle-may15_1024x1024.jpg" alt="">
                        <h5>App Connection Scale</h5>
                    </div>
                    <div class="thumbnail">
                        <img src="//cdn.shopify.com/s/files/1/0280/5548/products/Single-Origin-Gift-Box-Africa-Open-600x600-no-highlights_53d313ca-a068-46be-8760-0dfd91a8d9d7_1024x1024.jpg" alt="">
                        <h5>Origin Coffee Roasting - Costa Rica Danilo Salazar Natural</h5>
                    </div>
                    <div class="thumbnail">
                        <img src="https://cdn.shopify.com/s/files/1/0280/5548/products/hazz-coffee-bag-front_1db67769-1c25-4f6f-ab6a-7bd4cb071363_1024x1024.jpg?v=1487506707" alt="">
                        <h5>Portland Project - Costa Rica Trojas</h5>
                    </div>
                    <div class="thumbnail">
                        <img src="https://cdn.shopify.com/s/files/1/0280/5548/products/Truth-Manhattan-GPAC-Front_1024x1024.jpg?v=1569761788" alt="">
                        <h5>Origin Coffee Roasting - Costa Rica Danilo Salazar Natural</h5>
                    </div>
                    <div class="thumbnail">
                        <img src="https://cdn.shopify.com/s/files/1/0280/5548/products/Origin-Black-Plain-Bag-With-Labels-Ethiopia-Yirgacheffe-Kochere-Natural-201907_large.jpg?v=1562768428" alt="">
                        <h5>App Bathroom Scale</h5>
                    </div>

                </section>
        </div>

    </div>
    {{-- end of centre part of website --}}

</body>
</html>
