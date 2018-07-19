<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--    Bootstrap 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--    Font awsome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
          integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <!--    Personal style-->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/toggled-search-bar.css">
</head>
<style>
    #menu ul {
        height: 100%;
    }

    .navbar-nav {
        padding-left: 10px;
    }
</style>
<body>

<div class="container">

    <div class="search-form-wrapper">
        <form class="search-form" id="" action="">
            <div class="input-group">
                <input type="text" name="search" class="search form-control" placeholder="Search">
                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i>
         </span>
                <span class="input-group-addon search-close" id="basic-addon2"><i class="fa fa-window-close"
                                                                                  aria-hidden="true"></i>
         </span>
            </div>
        </form>
    </div>
    <header>
        <div style="text-align: right; margin-top: 10px">

            <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
        </div>
        <nav id="menu" class="panel" role="navigation">
            <ul class="navbar-nav" style="background: aliceblue">
                <li class="nav-item" style="text-align: right"><a href="#"><i class="fa fa-backspace"></i></a></li>
                <li class="nav-item"><a href="#">Home</a></li>
                <li class="nav-item"><a href="#">The Ballad of El Goodo</a></li>
                <li class="nav-item"><a href="#">Thirteen</a></li>
                <li class="nav-item"><a href="#">September Gurls</a></li>
                <li class="nav-item"><a href="#">What's Going Ahn</a></li>
            </ul>
        </nav>

    </header>

</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="public/js/bigSlide.js"></script>
<script>
    $(document).ready(function () {
        $('.menu-link').bigSlide({
            'side': 'right',
            'menuWidth': '70%',
            'easyClose': true
        });

        $('[data-toggle=search-form]').click(function () {
            $('.search-form-wrapper').toggleClass('open');
            $('.search-form-wrapper .search').focus();
            $('html').toggleClass('search-form-open');
        });
        $('[data-toggle=search-form-close]').click(function () {
            $('.search-form-wrapper').removeClass('open');
            $('html').removeClass('search-form-open');
        });
        $('.search-form-wrapper .search').keypress(function (event) {
            if ($(this).val() == "Search") $(this).val("");
        });

        $('.search-close').click(function (event) {
            $('.search-form-wrapper').removeClass('open');
            $('html').removeClass('search-form-open');
        });
    });
</script>

</html>