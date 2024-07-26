    @extends('client_layout.master')
    @section('title')
      accueil
    @endsection
    @section('style')
        <link href="{{asset('style/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('style/css/spiner.css')}}" rel="stylesheet">
    @endsection
    @section('content')
     <!-- Spinner Start -->
     <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
            
        </div>
        <span class="sr-only">Loading...</span>
    </div>
    <!-- Spinner End -->
  <!-- Carousel Start-->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img id="1" src="{{asset('style/img/Carousel-1.png')}}" class="d-block img-fluid" alt="...">
            <div class="carousel-caption d-md-block">
              <h5>Bienvenue chez SAKA</h5>
              <p>Nous ne vendons pas de parfums, mais vous offrons plutôt la meilleure expérience au monde.</p>
              <a href="decouvrer.html" type="button" class="btn btn-light p-3 px-5">Découvez</a>
            </div>
          </div>
          <div class="carousel-item">
            <img id="2" src="{{asset('style/img/Carousel-2.png')}}" class="d-block img-fluid" alt="...">
            <div class="carousel-caption d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
              <button type="button" class="btn btn-light p-3 px-5">Découvez</button>
            </div>
          </div>
          <div class="carousel-item">
            <img id="3" src="{{asset('style/img/Carousel-3.png')}}" class="d-block img-fluid" alt="...">
            <div class="carousel-caption d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
              <button type="button" class="btn btn-light p-3 px-5">Découvez</button>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <!-- Carousel End-->

     <!-- About Start -->
     <section id="about">
        <br>
        <div id="about" class="container-fluid overflow-hidden py-5 px-lg-0">
            <div class="container about py-5 px-lg-0">
                <div class="row g-5 mx-lg-0">
                    <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class=" videoDiv position-relative h-100">
                            <video class="position-absolute w-100 h-100" style="object-fit: cover;" controls>
                                <source src="{{asset('style/img/video5830036792828499033.mp4')}}" type="video/mp4">
                                <!-- https://mdbcdn.b-cdn.net/img/video/forest.mp4 -->
                                Votre navigateur ne supporte pas la balise vidéo.
                            </video>
                        </div>
                    </div>
                    <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
                        <h1 class="mb-5">SAKA BRAND</h1>
                        <p class="mb-5">Nous sommes une société spécialisée dans la transformation la fabrication et l'impression du plastique destiné à diverses utilisations suivant votre convenance.</p>
                        <div class="row g-4 mb-3">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-globe fa-3x text-dark mb-3"></i>
                                <h5>Nos produits</h5>
                                <p class="m-0">Nos produits sont fabriqués par un personnel qualifié sur un équipement performant par des techniques nouvelles afin de répondre favorablement aux voeux et exigences de notre clientèle.</p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-shipping-fast fa-3x text-dark mb-3"></i>
                                <h5>Quantité et Livraison</h5>
                                <p class="m-0">Nous sommes en mesure de répondre favorablement à vos besoins en quantité et qualité avec livraison suivant possibilités.</p>
                            </div>
                        </div>

                        <button type="button" class="btn btn-dark mx p-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            En savoir plus
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">EURL UTPS</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Présentation de l'Entreprise</h2>
                                        <span style="font-weight: 700;">Byredoo<br>Mouh.</span>
                                        <br>
                                    </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About End -->

    <!-- parfum start -->

    <!-- start Modal -->
    <div class="modal fade" id="ensavoirplus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Byredo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>Présentation de Byredo</h2>
                    <span style="font-weight: 700;">Byredoo<br>Mouh.</span>
                    <br>
                </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <div class="container-fluid">
        <h6 class="text-secondary text-uppercase mb-3 text-center">Parfum</h6>
        <h1 class="mb-1 text-center text-uppercase">Parfum</h1>
        <div class="text-center">
            <input type="radio" class="btn-check" name="options-base" id="homme" autocomplete="off" checked>
            <label class="" for="homme" style="cursor: pointer;">homme&nbsp; &nbsp; &nbsp;</label>

            <input type="radio" class="btn-check" name="options-base" id="femme" autocomplete="off">
            <label class="" for="femme" style="cursor: pointer;">femme &nbsp; &nbsp; &nbsp;</label>

            <input type="radio" class="btn-check" name="options-base" id="Mixte" autocomplete="off">
            <label class="" for="Mixte" style="cursor: pointer;">Mixte &nbsp; &nbsp; &nbsp;</label>
        </div>
        <div class="row">
            <div class="col-md-12 newSlides">
                <div id="news-slider" class="owl-carousel newSlides2">
                    <div class="post-slide">
                        <div class="post-img">
                            <img src="{{asset('style/img/download (3).jpeg')}}" alt="">
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                            </h3>
                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                            <!--start button de voir parfun-->
                            <button type="button" class="btn btn-dark mx p-2 read-more" data-bs-toggle="modal" data-bs-target="#ensavoirplus">
                                En savoir plus
                            </button>
                            <!--end button de voir parfun-->
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <img src="{{asset('style/img/Carousel-2.png')}}" alt="">
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                            </h3>
                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                            <!--start button de voir parfun-->
                            <button type="button" class="btn btn-dark mx p-2 read-more" data-bs-toggle="modal" data-bs-target="#ensavoirplus">
                                En savoir plus
                            </button>
                            <!--end button de voir parfun-->
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <img src="{{asset('style/img/Carousel-3.png')}}" alt="">
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                            </h3>
                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                            <!--start button de voir parfun-->
                            <button type="button" class="btn btn-dark mx p-2 read-more" data-bs-toggle="modal" data-bs-target="#ensavoirplus">
                                En savoir plus
                            </button>
                            <!--end button de voir parfun-->
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <img src="{{asset('style/img/download (4).jpeg')}}" alt="">
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                            </h3>
                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                            <!--start button de voir parfun-->
                            <button type="button" class="btn btn-dark mx p-2 read-more" data-bs-toggle="modal" data-bs-target="#ensavoirplus">
                                En savoir plus
                            </button>
                            <!--end button de voir parfun-->
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <img src="{{asset('style/img/download (5).jpeg')}}" alt="">
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                            </h3>
                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                           <!--start button de voir parfun-->
                           <button type="button" class="btn btn-dark mx p-2 read-more" data-bs-toggle="modal" data-bs-target="#ensavoirplus">
                            En savoir plus
                        </button>
                        <!--end button de voir parfun-->
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <img src="{{asset('style/img/download (5).jpeg')}}" alt="">
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                            </h3>
                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                           <!--start button de voir parfun-->
                           <button type="button" class="btn btn-dark mx p-2 read-more" data-bs-toggle="modal" data-bs-target="#ensavoirplus">
                            En savoir plus
                           </button>
                           <!--end button de voir parfun-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- parfum end -->


<!-- parfum start -->

    <!-- start Modal -->
    <div class="modal fade" id="ensavoirplus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Byredo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>Présentation de Byredo</h2>
                    <span style="font-weight: 700;">Byredoo<br>Mouh.</span>
                    <br>
                </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal -->

    <!--start parfum-->
    <div class="container-fluid">
        <h6 class="text-secondary text-uppercase mb-3 text-center">Parfum</h6>
        <h1 class="mb-1 text-center text-uppercase">promotion</h1>
        <div class="row">
            <div class="col-md-12 newSlides">
                <div id="news-slider" class="owl-carousel newSlides2">
                    <div class="post-slide">
                        <div class="post-img">
                            <img src="{{asset('style/img/download (3).jpeg')}}" alt="">
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                            </h3>
                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                            <!--start button de voir parfun-->
                            <button type="button" class="btn btn-dark mx p-2 read-more" data-bs-toggle="modal" data-bs-target="#ensavoirplus">
                                En savoir plus
                            </button>
                            <!--end button de voir parfun-->
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <img src="{{asset('style/img/Carousel-2.png')}}" alt="">
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                            </h3>
                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                            <!--start button de voir parfun-->
                            <button type="button" class="btn btn-dark mx p-2 read-more" data-bs-toggle="modal" data-bs-target="#ensavoirplus">
                                En savoir plus
                            </button>
                            <!--end button de voir parfun-->
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <img src="{{asset('style/img/Carousel-3.png')}}" alt="">
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                            </h3>
                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                            <!--start button de voir parfun-->
                            <button type="button" class="btn btn-dark mx p-2 read-more" data-bs-toggle="modal" data-bs-target="#ensavoirplus">
                                En savoir plus
                            </button>
                            <!--end button de voir parfun-->
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <img src="{{asset('style/img/download (4).jpeg')}}" alt="">
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                            </h3>
                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                            <!--start button de voir parfun-->
                            <button type="button" class="btn btn-dark mx p-2 read-more" data-bs-toggle="modal" data-bs-target="#ensavoirplus">
                                En savoir plus
                            </button>
                            <!--end button de voir parfun-->
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <img src="{{asset('style/img/download (5).jpeg')}}" alt="">
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                            </h3>
                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                           <!--start button de voir parfun-->
                           <button type="button" class="btn btn-dark mx p-2 read-more" data-bs-toggle="modal" data-bs-target="#ensavoirplus">
                            En savoir plus
                        </button>
                        <!--end button de voir parfun-->
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <img src="{{asset('style/img/download (5).jpeg')}}" alt="">
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                            </h3>
                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                           <!--start button de voir parfun-->
                           <button type="button" class="btn btn-dark mx p-2 read-more" data-bs-toggle="modal" data-bs-target="#ensavoirplus">
                            En savoir plus
                           </button>
                           <!--end button de voir parfun-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- parfum end -->


    <!-- start service -->
    <section id="service">
        <div class="container-xxl py-5">
            <div class="container py-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Nos Services</h6>
                    <h1 class="mb-5">Explorés Nos Services</h1>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 order-md-1 order-2 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <h4 class="mb-3">Services 1</h4>
                            <p>Le marketing du parfum est une discipline unique qui se situe à l'intersection de l'art et de la science. Vendre des parfums ne se limite pas à promouvoir un produit, mais à vendre une expérience sensorielle et émotionnelle. Voici quelques aspects clés du marketing dans l'industrie du parfum.</p>
                            <a class="btn btn-light mt-2 mb-6" data-bs-toggle="modal" data-bs-target="#ensavoirplus"  href=""><span>voir plus</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2 order-1 wow fadeInUp text-center" data-wow-delay="0.3s">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid my-1" src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=328,h=555,fit=crop/AMqaOrQ0N0cJaeaq/jgmu3jlfcslk2nazlogr1kbydealem6m-YX4168BrrGtnZJkP.jpg" alt="" style="height: 500px; width: 250px; border-radius: 20px;">
                            <img class="img-fluid my-1" src="https://i.pinimg.com/474x/37/e4/4c/37e44c358a76b11f6cc2fcba94248957.jpg" alt="" style="height: 500px; width: 250px; border-radius: 20px;">
                        </div>
                    </div>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 order-md-1 order-1 wow fadeInUp text-center" data-wow-delay="0.3s">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid my-1" src="https://i.pinimg.com/474x/f4/03/54/f40354aa8beac623cfd8bf3ffb164099.jpg" alt="" style="height: 500px; width: 250px; border-radius: 20px;">
                            <img class="img-fluid my-1" src="https://i.pinimg.com/474x/70/b8/22/70b8222751bb7f5b860eb53701ab3c7d.jpg" alt="" style="height: 500px; width: 250px; border-radius: 20px;">
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2 order-2 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <h4 class="mb-3">Services 1</h4>
                            <p>Le marketing du parfum est une discipline unique qui se situe à l'intersection de l'art et de la science. Vendre des parfums ne se limite pas à promouvoir un produit, mais à vendre une expérience sensorielle et émotionnelle. Voici quelques aspects clés du marketing dans l'industrie du parfum.</p>
                            <a class="btn btn-light mt-2 mb-6" data-bs-toggle="modal" data-bs-target="#ensavoirplus" href=""><span>voir plus</span></a>
                        </div>
                    </div>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 order-md-1 order-2 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <h4 class="mb-3">Services 1</h4>
                            <p>Le marketing du parfum est une discipline unique qui se situe à l'intersection de l'art et de la science. Vendre des parfums ne se limite pas à promouvoir un produit, mais à vendre une expérience sensorielle et émotionnelle. Voici quelques aspects clés du marketing dans l'industrie du parfum.</p>
                            <a class="btn btn-light mt-2 mb-6" data-bs-toggle="modal" data-bs-target="#ensavoirplus" href=""><span>voir plus</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2 order-1 wow fadeInUp text-center" data-wow-delay="0.3s">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid my-1" src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=328,h=555,fit=crop/AMqaOrQ0N0cJaeaq/jgmu3jlfcslk2nazlogr1kbydealem6m-YX4168BrrGtnZJkP.jpg" alt="" style="height: 500px; width: 250px; border-radius: 20px;">
                            <img class="img-fluid my-1" src="https://i.pinimg.com/474x/37/e4/4c/37e44c358a76b11f6cc2fcba94248957.jpg" alt="" style="height: 500px; width: 250px; border-radius: 20px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service End -->

    <!--start pub-->
    <div class="container pub">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">instagram</h6>
            <h1 class="mb-5">instagram</h1>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="post-slide">
                    <div class="post-img">
                        <img src="https://i.pinimg.com/474x/35/94/79/3594793ee69d85ab8e82e780537fa83e.jpg" class="card-img-top" alt="Image 1">
                        <a href="#" class="over-layer"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                  <div class="post-slide">
                    <div class="post-img">
                        <img src="https://i.pinimg.com/474x/a0/44/ae/a044ae082120400c45464a2e0bbad86e.jpg" class="card-img-top" alt="Image 1">
                        <a href="#" class="over-layer"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                  <div class="post-slide ">
                    <div class="post-img">
                        <img src="https://i.pinimg.com/474x/49/25/15/492515fd6fa47b0845e8c998e2291a6c.jpg" class="card-img-top" alt="Image 1">
                        <a href="#" class="over-layer"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                  <div class="post-slide">
                    <div class="post-img">
                        <img src="https://i.pinimg.com/474x/f0/dd/7e/f0dd7e5af6e884863f17b5798efa7ee5.jpg" class="card-img-top" alt="Image 1">
                        <a href="#" class="over-layer"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                  <div class="post-slide">
                    <div class="post-img">
                        <img src="https://i.pinimg.com/474x/cc/28/7b/cc287be8b0c484c0cdfd5c4ca07b709b.jpg" class="card-img-top" alt="Image 1">
                        <a href="#" class="over-layer"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                  <div class="post-slide">
                    <div class="post-img">
                        <img src="https://i.pinimg.com/474x/a1/d5/ae/a1d5ae537357352358639bf3ca8dd069.jpg" class="card-img-top" alt="Image 1">
                        <a href="#" class="over-layer"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                  <div class="post-slide">
                    <div class="post-img">
                        <img src="https://i.pinimg.com/474x/a0/e2/82/a0e282a0649a601b2a9ed39f5461f662.jpg" class="card-img-top" alt="Image 1">
                        <a href="#" class="over-layer"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="post-slide">
                  <div class="post-img">
                      <img src="https://i.pinimg.com/474x/df/51/70/df51701345ea94bae3829fa44d367ec1.jpg" class="card-img-top" alt="Image 1">
                      <a href="#" class="over-layer"><i class="fab fa-instagram"></i></a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!--end pub-->
    <!--start Nos Clients -->

    <div class="container">
        <div id="Testimonial" class="testimonials-clean">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mt-5">Nos Clients</h6>
                    <h1 class="mb-2">Nos Clients</h1>
                </div>
                <div class="row people">
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="{{asset('style/img/download (3).jpeg')}}">
                            <h5 class="name">Ben Johnson</h5>
                            <p class="title">CEO of Company Inc.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id.</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="{{asset('style/img/download (4).jpeg')}}">
                            <h5 class="name">Carl Kent</h5>
                            <p class="title">Founder of Style Co.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="{{asset('style/img/Carousel-2.jpg')}}">
                            <h5 class="name">Emily Clark</h5>
                            <p class="title">Owner of Creative Ltd.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="{{asset('style/img/Carousel-3.jpg')}}">
                            <h5 class="name">Emily Clark</h5>
                            <p class="title">Owner of Creative Ltd.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="{{asset('style/img/Carousel-2.jpg')}}">
                            <h5 class="name">Emily Clark</h5>
                            <p class="title">Owner of Creative Ltd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- end nos client -->
@endsection

