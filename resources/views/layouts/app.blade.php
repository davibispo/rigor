<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Rigor - Soluções Ambientais</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href=" {{route('home.index')}} "><img class="img-responsive" src="assets/img/logo-horizontal.png" width="230px"></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('home.index')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('empresa.index')}}">A empresa</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('servicos.index')}}">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('noticias.index')}}">Notícias</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('contato.index')}}">Contato</a></li>
                        <li class="nav-item">&nbsp&nbsp&nbsp&nbsp</li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#"><i class="fab fa-facebook-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')

        </main>

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="small text-center text-white">
                    <div class="row">
                        <div class="col-sm-4">
                            <h5>A EMPRESA</h5>
                            <p class="text-left">
                                Nosso diferencial é possuir uma equipe multidisciplinar qualificada para conectar pessoas e empresas a valores sustentáveis, com foco na gestão ambiental, que tem como objetivo à execução de treinamento na área de sustentabilidade ambiental e gestão de pessoas, bem como estimular pessoas a refletir sobre consumo consciente, tratamento de resíduos sólidos, responsabilidade e sustentabilidade.
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <h5>MAPA DO SITE</h5>
                            <ul class="text-left">
                                <li><a href=" {{route('home.index')}} " id="link-rodape">Home</a></li>
                                <li><a href=" {{route('empresa.index')}} " id="link-rodape">A empresa</a></li>
                                <li><a href=" {{route('servicos.index')}} " id="link-rodape">Serviços</a></li>
                                <li><a href=" {{route('noticias.index')}} " id="link-rodape">Notícias</a></li>
                                <li><a href=" {{route('contato.index')}} " id="link-rodape">Contato</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 text-left">
                            <h5>ENDEREÇO</h5>
                            <i class="fas fa-map-marker-alt"></i> José Lopes de Araújo, 33A, Centro - Satuba, Alagoas. CEP: 57120-000
                            <br>
                            <i class="fas fa-envelope"></i> comercial@rigorsolucoesambientais.com.br
                            <br>
                            <i class="fas fa-mobile-alt"></i> (82) 98192-2142
                        </div>
                    </div>
                    <div class="container">
                        <br>
                        Copyright © 2020 - Rigor Soluções Ambientais | Todos os direitos reservados | by Davi Bispo (82) 99969-3407
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


        <!-- MAPA -->
        <script>
            function inicializar() {
                var coordenadas = {lat: -9.570679, lng: -35.826096};

                var mapa = new google.maps.Map(document.getElementById('mapa'), {
                zoom: 15,
                center: coordenadas
                });

                var marker = new google.maps.Marker({
                position: coordenadas,
                map: mapa,
                title: 'Meu marcador'
                });
            }
        </script>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwEWoqyKWtErQsCbz6_D6fVRU9n72--9U&callback=inicializar" type="text/javascript">
        </script>
        <!-- FIM MAPA -->


    </body>
</html>
