<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RAIS.KZ | SPORT PHAZA</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        html, body, header, .carousel{
            height: 70vh;
        }
        
        @media (max-width: 740px){
            html, body, header, .carousel{
            height: 100vh;
            }
        }
        
        @media (min-width: 800px) and (max-width: 850px){
            html, body, header, .carousel{
            height: 100vh;
            }
        }

    </style>
</head>

<body id="main">

    <!--   NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container nav-tel" style="display: flex; justify-content: center;">
            <a href="#main" class="navbar-brand waves-effect">
                <strong class="a">RAIS.KZ</strong>
                <strong class="b">+7 (702) 350 03 93</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="#main" class="nav-link waves-effect">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a href="#catalog" class="nav-link waves-effect">Каталог товаров</a>
                    </li>
                    <li class="nav-item">
                        <a href="#delivery" class="nav-link waves-effect">Оплата и доставка</a>
                    </li>
                </ul>

                <ul class="navbar-nav nav-flex-icons mr-right">
                    <li class="nav-item">
                        <a href="#" class="navbar-brand waves-effect" style="font-size: 24px; margin-right: 70px;">+7 (702) 350 03 93</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/rais.kz/" class="nav-link waves-effect" target="_blank">
                            <i class="fa fa-instagram fa-2x"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://vk.com/lirax2000" class="nav-link waves-effect" target="_blank">
                            <i class="fa fa-vk fa-2x"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--   CAROUSEL-->
    <div id="carousel-ex" class="carousel slide carousel-fade pt-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li class="active" data-target="#carousel-ex" data-slide-to="0"></li>
            <li data-target="#carousel-ex" data-slide-to="1" id="catalog"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="carousel-item">
                <div class="view" style="background-image: url(img/walpaper-3.jpg); background-repeat: no-repeat; background-size: cover;">
                    <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">RAILS.KZ - спорт гарантия здоровья!</h1>
                            <p class="sex">
                                <strong>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, quidem?
                                </strong>
                            </p>
                            <a id="navbarContent" href="#request" class="btn btn-light">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item active">
                <div class="view" style="background-image: url(img/walpaper-1.jpg); background-repeat: no-repeat; background-size: cover;">
                    <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4 textt">RAILS.KZ - спорт гарантия здоровья!</h1>
                            <p>
                                <strong>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, quidem?
                                </strong>
                            </p>
                            <a id="navbarContent" href="#request" class="btn btn-light">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carousel-ex" role="button" data-slide="prev" style="margin-top: 7%">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carousel-ex" role="button" data-slide="next" style="margin-top: 7%">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>

    <!--CATALOG    -->
    <main>
        <div class="container">
            <h2 class="text-center">Каталог товаров</h2>

            <!-- Card deck -->
            <div class="card-deck">

                <!-- Card -->
                <div class="card mb-3">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="img/card1.png" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <h4 class="card-title">Турник-брусья-пресс</h4>
                        <h5>28 800 тг</h5>
                        <p class="card-text"></p>
                        <button type="button" class="btn btn-light btn-md" data-toggle="modal" data-target="#infoModal">Подробнее</button>
                    </div>
                </div>

                <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <!--
                            <div class="modal-header">
                                
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
-->
                            <div class="modal-body">
                                <!--Carousel Wrapper-->
                                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" style="height: auto">
                                    <!--Indicators-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active" style="background-color: black"></li>
                                        <li data-target="#carousel-example-1z" data-slide-to="1" style="background-color: black"></li>
                                        <li data-target="#carousel-example-1z" data-slide-to="2" style="background-color: black"></li>
                                    </ol>
                                    <!--/.Indicators-->
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <!--First slide-->
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="img/card1.jpg" alt="First slide" style="background-size: 100px 100px;">
                                        </div>
                                        <!--/First slide-->
                                        <!--Second slide-->
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/card2.jpg" alt="Second slide" style="background-size: 100px 100px;">
                                        </div>
                                        <!--/Second slide-->
                                        <!--Third slide-->
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/card2.png" alt="Third slide" style="background-size: 100px 100px;">
                                        </div>
                                        <!--/Third slide-->
                                    </div>
                                    <!--/.Slides-->
                                </div>
                                <!--/.Carousel Wrapper-->

                                <p class="card-text" style="margin-top: 25px"></p>


                            </div>
                            <!--
                            <div class="modal-footer">
                                
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>

                            </div>
-->
                        </div>
                    </div>
                </div>

                <!-- Card -->
                <div class="card mb-3">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="img/card2.png" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <h4 class="card-title">Турник</h4>
                        <h5>7 500 тг</h5>
                        <p class="card-text"></p>
                        <button type="button" class="btn btn-light btn-md">Подробнее</button>
                    </div>
                </div>

                <!-- Card -->
                <div class="card mb-3">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="img/card3.png" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <h4 class="card-title">Груши</h4>
                        <h5>от 7 700 тг</h5>
                        <p class="card-text"></p>
                        <button type="button" class="btn btn-light btn-md" id="request">Подробнее</button>
                    </div>
                </div>
                
                <!-- Card -->
                <div class="card mb-3">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="img/card3.png" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <h4 class="card-title">Прочие спортивные товары</h4>
                        <h5></h5>
                        <p class="card-text"></p>
                        <button type="button" class="btn btn-light btn-md" id="request">Подробнее</button>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <main class="grre">
        <div class="container" style="padding: 50px 0 50px 0">
            <h2 class="text-center">Заказать звонок</h2>

            <div class="row justify-content-center" style="margin: 0">
                <div class="col-8">
                    <form method="post" action="mail.php">
                        <div class="form-row">
                            <div class="col">
                                <input name="name" type="text" class="form-control" placeholder="Имя"/>
                            </div>
                            <div class="col inp2">
                                <input name="phone" type="text" class="form-control" placeholder="Телефон"/>
                            </div>
                        </div>
                        
                        <div class="send text-center col-md" style="margin-top: 25px;">
               <input type="submit" id="send" name="send" value="Оставить заявку" class="btn btn-info">
<!--                <a href="#" class="btn btn-info" id="delivery">Оставить заявку</a>-->
            </div>
                    </form>
                </div>
            </div>

            
        </div>
    </main>



    <!--   BUY AND DELIVERY-->
    <main>
        <div class="container">
            <h2 class="text-center">Оплата и доставка</h2>

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div id="map-container" class="z-depth-1" style="height: 300px"></div>
                </div>
                <div class="col-sm-12 col-md-6 inp22">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae vitae maxime eligendi, voluptatum, a, praesentium odio deleniti esse architecto quos nisi corporis porro quibusdam hic ea, est quae voluptas. Vero praesentium nobis fugiat deserunt vel impedit deleniti cumque voluptates magni enim architecto odit porro dolor, ratione officiis consequuntur aliquam quia doloremque esse aspernatur ipsa corporis eos sint labore! Velit explicabo earum magnam nihil. Numquam obcaecati tempore aut, nam iusto itaque perspiciatis animi, doloribus nesciunt maxime deserunt aliquid vel esse mollitia exercitationem qui error labore delectus. Aliquid accusamus eos, delectus asperiores ad? A excepturi animi optio ipsa quasi. Tempora fuga, dolorum!
                    </p>
                </div>

            </div>
        </div>
    </main>


    <!-- Footer -->
    <footer class="page-footer font-small blue-grey lighten-5" style="margin-top: 50px; padding-top: 5px">


        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3 dark-grey-text">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">RAILS.KZ</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Карта сайта</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a class="dark-grey-text" href="#!">Главная</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">Каталог товаров</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">Турники</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">Бруся</a>
                    </p>

                </div>
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Контакты</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3"></i> Казахстан, Алматы</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> 8 (777) 777 77 77</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script type="text/javascript" src="js/main.js"></script>

    <script src="https://maps.google.com/maps/api/js?key=AIzaSyAtMXjnWBKWHOXacRjyzSKpPi7A0RuXwpM"></script>

    <script>
        function regular_map() {
            var var_location = new google.maps.LatLng(43.242027, 76.929940);

            var var_mapoptions = {
                center: var_location,
                zoom: 14
            };

            var var_map = new google.maps.Map(document.getElementById("map-container"), var_mapoptions);

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "Almaty"
            });
        }

        google.maps.event.addDomListener(window, 'load', regular_map);
    </script>

</body>

</html>