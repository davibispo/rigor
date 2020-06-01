<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rigor - Soluções Ambientais</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

</head>
<body>
    <div class="container">

        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <a class="navbar-brand" href=" {{route('home.index')}} ">
                <img src="assets/img/logo.png" alt="Logo" style="width:60px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">A Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <main>
        @yield('content')

    </main>

    <!-- Footer-->
    <footer class="footer py-5">
        <div class="container">
            <div class="small text-center text-white">
                <div class="row">
                    <div class="col-sm-3">
                        MAPA DO SITE <br>
                        MAPA DO SITE <br>
                        MAPA DO SITE <br>
                        MAPA DO SITE <br>
                        MAPA DO SITE <br>
                        MAPA DO SITE <br>
                    </div>
                    <div class="col-sm-3">.col-sm-3</div>
                    <div class="col-sm-3">.col-sm-3</div>
                    <div class="col-sm-3">.col-sm-3</div>
                </div>
                Copyright © 2020 - Start Bootstrap
            </div>
        </div>
    </footer>

</body>
</html>
