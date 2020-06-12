@extends('layouts.app')

@section('content')
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/portfolio/fullsize/1.jpg" alt="Los Angeles" width="1200" height="550">
                                <div class="carousel-caption">
                                    <h3>Los Angeles</h3>
                                    <p>We had such a great time in LA!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/portfolio/fullsize/2.jpg" alt="Chicago" width="1200" height="550">
                                <div class="carousel-caption">
                                    <h3>Chicago</h3>
                                    <p>Thank you, Chicago!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/portfolio/fullsize/3.jpg" alt="New York" width="1200" height="550">
                                <div class="carousel-caption">
                                    <h3>New York</h3>
                                    <p>We love the Big Apple!</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>

                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section about" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Nós temos o que você precisa!</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">
                            RIGOR SOLUÇÕES AMBIENTAIS é uma empresa de consultoria, serviços, execução de projetos e treinamentos em temáticas ambientais e de sustentabilidade.
                        </p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href=" {{route('empresa.index')}} ">CONHEÇA MAIS!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0"><a style="text-decoration: none; color:#58a09fff;" href=" {{route('servicos.index')}} ">Nossos Serviços</a></h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <a href="{{route('servicos.index')}}" style="text-decoration: none; color:#58a09fff;">
                                <i class="fas fa-4x fa-chalkboard-teacher mb-4" style="color:gray"></i>
                                <h3 class="h4 mb-2">Palestras</h3>
                                <p class="text-muted mb-0">Realizamos palestras e Treinamentos Interativos</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <a href="{{route('servicos.index')}}" style="text-decoration: none; color:#58a09fff;">
                                <i class="fas fa-4x fa-flask mb-4" style="color:gray"></i>
                                <h3 class="h4 mb-2">Oficinas Sustentáveis</h3>
                                <p class="text-muted mb-0">Odorizadores, Ecosabão, Reaproveitamento, Recicláveis</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <a href="{{route('servicos.index')}}" style="text-decoration: none; color:#58a09fff;">
                                <i class="fas fa-4x fa-recycle mb-4" style="color:gray"></i>
                                <h3 class="h4 mb-2">PGRS</h3>
                                <p class="text-muted mb-0">Plano de Gerenciamento de Resíduos Sólidos</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <a href="{{route('servicos.index')}}" style="text-decoration: none; color:#58a09fff;">
                                <i class="fas fa-4x fa-trash-restore mb-4" style="color:gray"></i>
                                <h3 class="h4 mb-2">Coleta Seletiva</h3>
                                <p class="text-muted mb-0">Implantação da Coleta Seletiva</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Notícias -->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <!--
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Notícias</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Notícias</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Notícias</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                -->
                    <div class="col-lg-12 col-sm-6">
                        <h3>&nbsp&nbsp&nbsp&nbsp</h3>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Notícias</div>
                                <div class="project-name">Título</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Notícias</div>
                                <div class="project-name">Título</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Notícias</div>
                                <div class="project-name">Título</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
                <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
            </div>
        </section>-->
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Entre em Contato!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Pronto para iniciar seu próximo projeto conosco!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>
                            (82) 98154-0163 <i class="fab fa-whatsapp"></i>
                            <br>
                            (82) 98192-2142 <i class="fas fa-mobile-alt"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fab fa-instagram fa-3x mb-3 text-muted"></i>
                        <div>@rigorsoluçõesambientais</div>
                    </div>
                    <div class="col-lg-3 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fab fa-facebook fa-3x mb-3 text-muted"></i>
                        <div>Rigor Soluções Ambientais</div>
                    </div>
                    <div class="col-lg-3 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <a class="d-block" href="mailto:comercial@rigorsolucoesambientais.com.br">comercial@rigorsolucoesambientais.com.br</a>
                    </div>
                </div>
            </div>
        </section>

@endsection
