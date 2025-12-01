<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Carpinteria Araón</title>
    {{-- <link rel="shortcut icon" href="assets/images/logo/logo5.png"> --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo5.png') }}">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- icon - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">

    <!-- popup - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!-- select options - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nice-select.css') }}">

    <!-- pricing range - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui.css') }}">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">


<body>


    <!-- backtotop - start -->
    <div id="thetop"></div>
    <div class="backtotop">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- preloader - start -->
    <div class="preloader">
        <div class="animation_preloader">
            <div class="spinner"></div>
            <p class="text-center">Cargando...</p>
        </div>
        <div class="loader">
            <div class="row vh-100">
                <div class="col-3 loader_section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader_section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader_section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader_section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader - end -->


    <!-- header_section - start
  ================================================== -->
    <header class="header_section secondary_header sticky text-white clearfix">
        <div class="header_top clearfix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <ul class="header_contact_info ul_li clearfix">
                            <li><i class="fal fa-envelope"></i>apolinariocastrejon787@gmail.com</li>
                            <li><i class="fal fa-phone"></i>+51 974257017</li>
                        </ul>
                    </div>

                    <div class="col-lg-5">
                        <ul class="primary_social_links ul_li_right clearfix">
                            <li><a href="https://www.facebook.com/jesusdavid.castrejon"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/araon_leo/"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/@davidcastrejoncastrejon1487"><i
                                        class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_bottom clearfix">
            <div class="container">
                <div class="row align-items-center">
                    {{-- logo de la imagen --}}
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="brand_logo">
                            <img src="assets/images/logo/logo4.png" alt="logo_not_found">
                        </div>
                    </div>
                    {{-- div para el icono de carrito de venta --}}
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 order-last">
                        <ul class="header_action_btns ul_li_right clearfix">
                            <li>
                                <button type="button" class="search_btn" data-toggle="collapse"
                                    data-target="#collapse_search_body" aria-expanded="false"
                                    aria-controls="collapse_search_body">
                                    <i class="fal fa-search"></i>
                                </button>
                            </li>
                            <li class="dropdown">
                                <button type="button" class="cart_btn" id="cart_dropdown" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fal fa-shopping-cart"></i>
                                    <span class="cart_counter bg_default_red">3</span>
                                </button>
                                <div class="cart_dropdown rotors_dropdown dropdown-menu"
                                    aria-labelledby="cart_dropdown">
                                    <h4 class="wrap_title">Cart Items: (3)</h4>
                                    <ul class="cart_items_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_image">
                                                <img src="assets/images/cart/img_2.png" alt="image_not_found">
                                            </div>
                                            <div class="item_content">
                                                <h4 class="item_title">Digital Infrared Thermometer</h4>
                                                <span class="item_price">$39.50</span>
                                            </div>
                                            <button type="button" class="remove_btn"><i
                                                    class="fal fa-times"></i></button>
                                        </li>

                                        <li>
                                            <div class="item_image">
                                                <img src="assets/images/cart/img_2.png" alt="image_not_found">
                                            </div>
                                            <div class="item_content">
                                                <h4 class="item_title">Digital Infrared Thermometer</h4>
                                                <span class="item_price">$39.50</span>
                                            </div>
                                            <button type="button" class="remove_btn"><i
                                                    class="fal fa-times"></i></button>
                                        </li>

                                        <li>
                                            <div class="item_image">
                                                <img src="assets/images/cart/img_2.png" alt="image_not_found">
                                            </div>
                                            <div class="item_content">
                                                <h4 class="item_title">Digital Infrared Thermometer</h4>
                                                <span class="item_price">$39.50</span>
                                            </div>
                                            <button type="button" class="remove_btn"><i
                                                    class="fal fa-times"></i></button>
                                        </li>
                                    </ul>
                                    <ul class="btns_group ul_li_block clearfix">
                                        <li><a href="cart.html" class="custom_btn bg_default_red text-uppercase">View
                                                Cart <img src="assets/images/icons/icon_01.png"
                                                    alt="icon_not_found"></a></li>
                                        <li><a href="#!"
                                                class="custom_btn bg_default_black text-uppercase">Checkout <img
                                                    src="assets/images/icons/icon_01.png" alt="icon_not_found"></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <button type="button" class="user_btn" id="user_dropdown" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fal fa-user"></i>
                                </button>
                                <div class="user_dropdown rotors_dropdown dropdown-menu clearfix"
                                    aria-labelledby="user_dropdown">
                                    <div class="profile_info clearfix">
                                        <a href="#!" class="user_thumbnail">
                                            <img src="assets/images/meta/img_01.jpg" alt="thumbnail_not_found">
                                        </a>
                                        <div class="user_content">
                                            <h4 class="user_name"><a href="#!">Araón Castrejón</a></h4>
                                            <span class="user_title">Gerente</span>
                                        </div>
                                    </div>
                                    <ul class="ul_li_block clearfix">
                                        <li><a href="#!"><i class="fal fa-user-circle"></i> Profile</a></li>
                                        <li><a href="#!"><i class="fal fa-user-cog"></i> Ajustes</a></li>
                                        <li><a href="#!"><i class="fal fa-sign-out"></i> Cerrar sesión</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <button type="button" class="mobile_sidebar_btn"><i
                                        class="fal fa-align-right"></i></button>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <nav class="main_menu clearfix">
                            <ul class="ul_li_center clearfix">
                                <li class="{{ request()->is('/') ? 'active' : '' }}"><a
                                        href="{{ url('/') }}">Inicio</a></li>
                                <li class="{{ request()->is('servicios') ? 'active' : '' }}"><a
                                        href="{{ url('/servicios') }}">Servicios</a></li>
                                <li class="{{ request()->is('productos') ? 'active' : '' }}"><a
                                        href="{{ url('/productos') }}">Modelos en madera</a></li>
                                <li class="{{ request()->is('nosotros') ? 'active' : '' }}"><a
                                        href="{{ url('/nosotros') }}">Nosotros</a></li>
                                <li class="{{ request()->is('contactanos') ? 'active' : '' }}"><a
                                        href="{{ url('/contactanos') }}">Contáctanos</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>

        <div id="collapse_search_body" class="collapse_search_body collapse">
            <div class="search_body">
                <div class="container">
                    <form action="#">
                        <div class="form_item">
                            <input type="search" name="search" placeholder="Type here...">
                            <button type="submit"><i class="fal fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- header_section - end
  ================================================== -->
    <!-- Esto es un diseño para celular
   ================================================== -->
    <div class="sidebar-menu-wrapper">
        <div class="mobile_sidebar_menu">
            <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

            <div class="about_content mb_60">
                <div class="brand_logo mb_15">
                    {{-- cambiar el logo a la barra lateral derecha del menú --}}
                    <a href="#!">
                        <img src="assets/images/logo/logo4.png" alt="logo_not_found">
                    </a>
                </div>
                <p class="mb-0">
                    Somos una empresa dedicada a la carpintería y fabricación de muebles de madera de alta calidad. Nos
                    especializamos en crear piezas únicas y personalizadas que combinan funcionalidad y diseño,
                    utilizando técnicas tradicionales y modernas para satisfacer las necesidades de nuestros clientes
                </p>
            </div>

            <div class="menu_list mb_60 clearfix">
                <h3 class="title_text text-white">Menú</h3>
                <ul class="ul_li_block clearfix">
                    <li class="active has_child"><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a href="{{ url('/servicios') }}">Servicios</a></li>
                    <li><a href="{{ url('/productos') }}">Modelos en madera</a></li>
                    <li><a href="{{ url('/nosotros') }}">Nosotros</a></li>
                    <li class="has_child">
                        <a href="{{ url('/contactanos') }}">Contáctanos</a>
                    </li>
                </ul>
            </div>

            <div class="booking_car_form">
                <h3 class="title_text text-white mb-2">Book A Car</h3>
                <p class="mb_15">
                    Nullam id dolor auctor, dignissim magna eu, mattis ante. Pellentesque tincidunt, elit a facilisis
                    efficitur.
                </p>
            </div>

        </div>
        <div class="overlay"></div>
    </div>
    <!-- mobile menu - end
   ================================================== -->

    <main>
        @yield('content')
    </main>


    <!-- footer_section - start
  ================================================== -->
    <footer class="footer_section clearfix">
        <div class="footer_widget_area sec_ptb_100 clearfix" data-bg-color="#F2F2F2">
            <div class="container">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
                        <div class="footer_about" data-aos="fade-up" data-aos-delay="100">
                            <div class="brand_logo mb_30">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo4.png" alt="logo_not_found">
                                </a>
                            </div>
                            <p class="mb_15">
                                Somos una empresa dedicada a la carpintería y fabricación de muebles de madera de alta
                                calidad.
                                Nos especializamos en crear piezas únicas y personalizadas que combinan funcionalidad y
                                diseño,
                                utilizando técnicas tradicionales y modernas para satisfacer las necesidades de nuestros
                                clientes.
                            </p>
                            {{-- <div class="footer_useful_links mb_30">
									<ul class="ul_li_block clearfix">
										<li><a href="#!"><i class="fal fa-angle-right"></i> Rental Information</a></li>
										<li><a href="#!"><i class="fal fa-angle-right"></i> F.A.Q.</a></li>
									</ul>
								</div> --}}
                            {{-- <div class="form_item mb-0">
									<form action="#">
										<input id="footer_search" type="search" name="search" placeholder="Search">
										<label for="footer_search" class="input_icon"><i class="fal fa-search"></i></label>
									</form>
								</div> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-12 col-sm-12">
                        <div class="footer_contact_info" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="footer_widget_title">Contactanos:</h3>
                            <ul class="ul_li_block clearfix">
                                <li>
                                    <strong><i class="fas fa-map-marker-alt"></i> Dirección:</strong>
                                    <p class="mb-0">
                                        San Antonio de Agomarca, Cajamarca, Perú
                                    </p>
                                </li>
                                <li><i class="fas fa-clock"></i> 8:00am-9:30pm</li>
                                {{-- <li><i class="far fa-angle-right"></i> Other Office Locations</li> --}}
                                <li><i class="fas fa-envelope"></i> <strong>apolinariocastrejon787@gmail.com</strong>
                                </li>
                                <li><i class="fas fa-phone"></i> <strong>+51 974257017</strong></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
                        <div class="footer_useful_links" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="footer_widget_title">Información:</h3>
                            <ul class="ul_li_block clearfix">
                                <li><a href="{{ url('/contactanos') }}"><i class="fal fa-angle-right"></i>
                                        Dirección</a></li>
                                <li><a href="{{ url('/productos') }}"><i class="fal fa-angle-right"></i>
                                        Modelos en madera</a></li>
                                <li><a href="{{ url('/nosotros') }}"><i class="fal fa-angle-right"></i> Sobre
                                        Nosotros</a></li>
                                <li><a href="{{ url('/servicios') }}"><i class="fal fa-angle-right"></i>
                                        Servicios</a></li>
                                <li><a href="#!"><i class="fal fa-angle-right"></i> habla con Nosotros via
                                        whatsApp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_bottom text-white clearfix" data-bg-color="#000C21">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p class="copyright_text mb-0">Copyright © 2025. <a class="author_links text-white"
                                href="#!"> Carpintería Araón</a> by David</p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <ul class="primary_social_links ul_li_right clearfix">
                            <li><a href="https://www.facebook.com/apolinario.castrejon"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/araoncastrejon/tagged"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_section - end
  ================================================== -->


    <!-- fraimwork - jquery include -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- animation - jquery include -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/parallaxie.js') }}"></script>

    <!-- carousel - jquery include -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <!-- popup - jquery include -->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>

    <!-- select ontions - jquery include -->
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>

    <!-- isotope - jquery include -->
    <script src="{{ asset('assets/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>

    <!-- google map - jquery include -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
    <script src="{{ asset('assets/js/gmaps.min.js') }}"></script>

    <!-- pricing range - jquery include -->
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

    <!-- counter - jquery include -->
    <script src="{{ asset('assets/js/waypoint.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>

    <!-- contact form - jquery include -->
    <script src="{{ asset('assets/js/validate.js') }}"></script>

    <!-- mobile menu - jquery include -->
    <script src="{{ asset('assets/js/mCustomScrollbar.js') }}"></script>

    <!-- custom - jquery include -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star-item');
            const ratingInput = document.getElementById('rating_value');
            const starArea = document.querySelector('.star-rating-area');

            // Función para actualizar la selección visual
            function updateStars(rating) {
                stars.forEach(star => {
                    const starValue = parseInt(star.getAttribute('data-rating'));
                    if (starValue <= rating) {
                        star.classList.add('selected');
                    } else {
                        star.classList.remove('selected');
                    }
                });
            }

            // 1. Manejo del Clic (Selección permanente)
            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const rating = this.getAttribute('data-rating');
                    // 1.1. Actualiza el input oculto que se enviará a Laravel
                    ratingInput.value = rating;

                    // 1.2. Actualiza la selección visual
                    updateStars(rating);

                    // 1.3. Elimina el error de required si existe, ya que se ha seleccionado un valor
                    ratingInput.removeAttribute('required');
                });
            });

            // 2. Manejo del Hover (Previsualización de la selección)
            starArea.addEventListener('mouseover', function(e) {
                if (e.target.classList.contains('star-item')) {
                    const hoverRating = parseInt(e.target.getAttribute('data-rating'));
                    updateStars(hoverRating);
                }
            });

            // 3. Manejo de Salida (Restaurar al valor seleccionado o a vacío)
            starArea.addEventListener('mouseout', function() {
                const currentRating = ratingInput.value ? parseInt(ratingInput.value) : 0;
                updateStars(currentRating);
            });

            // Opcional: Si el campo está vacío, añade la validación required de HTML5
            const form = ratingInput.closest('form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    if (!ratingInput.value) {
                        e.preventDefault();
                        alert('Por favor, selecciona una calificación por estrellas.');
                        ratingInput.setAttribute('required', 'required');
                    }
                });
            }
        });
    </script>
</body>

</html>
