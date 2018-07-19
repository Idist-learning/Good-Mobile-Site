<!docype html>
<html lang="5">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--    Font awsome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
          integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <!--    Personal style-->
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
<!--<section id="navbar">-->
<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-light navbar-custom">
    <a class="navbar-brand" href="#">
        <i class="fa fa-flask" style="color:blue"></i><span style="font-weight: bold"> uilabs</span>
    </a>

    <div class="form-inline">
        <div style="margin: 0 5px">
            <a class="fa fa-search" data-toggle="searchBox" data-target="#searchBox"
               aria-controls="navbarSupportedContent" aria-expanded="false"></a>
        </div>

        <div style=" margin: 0 5px">
            <a class="fa fa-bars" data-toggle="slide-collapse" data-target="#my-navbar-collapse"
               aria-controls="navbarSupportedContent" aria-expanded="false">
            </a>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="my-navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>

    </div>
    <div class="collapse navbar-collapse" id="searchBox">
        <form action="#" method="get">
            <div class="form-inline">
                <i class="fas fa-arrow-left" id="closeSearchForm" style="width: 10%;padding: 15px;" data-target="#searchBox"></i>
                <input type="text" class="form-control" style="width: 85%; padding: 5px 40px 5px 20px">
                <i class="fas fa-search" style="margin-left: -30px"></i>
            </div>

        </form>
    </div>
</nav>
<!--</section>-->
<section id="slider">

    <!--//Slider   -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="public/images/1.jpg" alt="Los Angeles">
                <div class="carousel-caption">
                    <h3>SALE FASHION STORE</h3>
                    <p>get discount</p>
                    <button class="btn btn-danger">Shop Now</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="public/images/2.jpg" alt="Chicago">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                    <button class="btn btn-danger">Shop Now</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="public/images/3.jpeg" alt="New York">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                    <button class="btn btn-danger">Shop Now</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div style="text-align: center">
        <h3 style="margin-bottom: 3px">POPULAR</h3>
        <hr style="width: 40px; height: 2px; background: blue; margin-top: 3px">
    </div>
    <div class="container">
        <div class="row">
            <?php
            for ($i = 1; $i < 5; $i++)
                include "card_item.php";
            ?>
            <!-- // Phan trang-->

        </div>
        <div class="row" style="margin-top:20px ">
            <nav aria-label="Page navigation example" style="margin: 0 auto">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">First</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Last</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<section id="footer" style="height: 300px; text-align: center; padding: 50px 0; margin-bottom: 50px">
    <div style="color: aliceblue; font-size: 24px">
        Find & follow us
    </div>
    <div class="row list-item" style="margin: 10px 0">
        <div style="margin: 0 auto">
            <div class="item_social" style="background: blue">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class="item_social" style="background: deepskyblue">
                <i class="fab fa-twitter"></i>
            </div>
            <div class="item_social" style="background: red">
                <i class="fab fa-google"></i>
            </div>
            <div class="item_social" style="background: lightskyblue">
                <i class="fab fa-instagram"></i>
            </div>
            <div class="item_social" style="background: orange">
                <i class="fas fa-rss"></i>
            </div>
        </div>

    </div>
    <div style="color: aliceblue;">
        <span style="font-weight: bold">Tel:</span> 01299 632 522
    </div>
</section>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
    $('[data-toggle="slide-collapse"]').on('click', function () {
        $navMenuCont = $($(this).data('target'));
        $navMenuCont.animate({'width': 'toggle'}, 350);
    });
    $('[data-toggle="searchBox"]').on('click', function () {
        $navMenuCont = $($(this).data('target'));
        $navMenuCont.animate({'width': 'toggle'}, 350);
    });
    $('#closeSearchForm').on('click',function () {
        $navMenuCont = $($(this).data('target'));
        $navMenuCont.animate({'width': 'toggle'}, 150);
    });

</script>
</html>