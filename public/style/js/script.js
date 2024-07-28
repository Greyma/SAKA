(function ($) {
    // Spinner
    var spinner = function () {
        $(".top-search").slideUp();
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.navbarClass').css('position', 'fixed');
            $('.navbarClass').css('opacity', '0');  
            $i =( $(this).scrollTop() - 300) / 300
            $('.navbarClass').css('opacity',$i );
        } else {
            $('.navbarClass').css('position', 'inherit');
            $('.navbarClass').css('opacity', '1');
        }
    });

        const $navbar = $(".navbar-nav");
        const $a = $("a");
        const $normalsize = "m-4";
        const $middelsize = "m-2";
        const $smallsize = "m-1";

        const $carousel = $(".carousel-item");
        const $img = $("img");
        const $img1 = "../images/Carousel-1.png";
        const $img11 = "../images/Carousel-2.png";
        const $parfum = $("#parfumCART");
        function checkWindowSize() {
            if ($(window).width() < 1200) {
                $parfum.removeClass("row-cols-md-4").addClass("row-cols-md-2");
                $navbar.find($a).removeClass($normalsize).addClass($middelsize);
                if($(window).width() < 600){
                    $navbar.find($a).removeClass($middelsize).addClass($smallsize);
                }
                $('#1').attr("src", $img11);
            } else {
                $navbar.find($a).removeClass($middelsize).addClass($normalsize);
                $parfum.removeClass("row-cols-md-2").addClass("row-cols-md-4");
                $('#1').attr("src", $img1);
            }
        }

        checkWindowSize();

        $(window).resize(function() {
            checkWindowSize();
        });

        $(".newSlides2").owlCarousel({
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [980, 2],
            itemsMobile: [600, 1],
            navigation: true,
            navigationText: ["", ""],
            pagination: true,
            autoPlay: true });

            // Slider Change

            
        $('input[name="options-base"]').change(function() {
            var selectedOption = $(this).attr('id');
            var newSlides = '';
    
            if (selectedOption === 'homme') { // homme
                newSlides = `
                <div id="news-slider" class="owl-carousel newSlides2">
                     <div class="post-slide">
                        <div class="post-img">
                            <img src="../images/download (3).jpeg" alt="">
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
                            <img src="../images/Carousel-1.png" alt="">
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
                            <img src="../images/Carousel-3.png" alt="">
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
                            <img src="../images/Carousel-2.png" alt="">
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
    
                `;
            } else if (selectedOption === 'femme') { // femme
                newSlides = `
                <div id="news-slider" class="owl-carousel newSlides2">
                    <div class="post-slide">
                        <div class="post-img">
                            <img src="../images/Carousel-3.png" alt="">
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
                            <img src="../images/download (4).jpeg" alt="">
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
                            <img src="../images/download (3).jpeg" alt="">
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
                `;
            } else if (selectedOption === 'Mixte') { // mixte
                newSlides = `
                <div id="news-slider" class="owl-carousel newSlides2">
                    <div class="post-slide">
                        <div class="post-img">
                            <img src="../images/download (5).jpeg" alt="">
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
                            <img src="../images/Carousel-3.png" alt="">
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
                            <img src="https://images.unsplash.com/photo-1484656551321-a1161420a2a0?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=306&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=506" alt="">
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
                            <img src="../images/Carousel-1.png" alt="">
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
                `;
            }
            $('.newSlides').html(newSlides);
            
            $('.newSlides2').owlCarousel({
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [980, 2],
                itemsMobile: [600, 1],
                navigation: true,
                navigationText: ["", ""],
                pagination: true,
                autoPlay: true });
            });
            
            $(".navbar-nav").each(function(){  
                $(".Search_Main", this).on("click", function(e){
                    e.preventDefault();
                    $(".top-search").slideToggle();
                });
            });
            $(".input-group-addon.close-search").on("click", function(){
                $(".top-search").slideUp();
            });

})(jQuery);