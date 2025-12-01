@extends('layouts.app')
@section('content')
    <!-- main body - start
          ================================================== -->
    <main>

        <!-- breadcrumb_section - start
           ================================================== -->
        <section class="breadcrumb_section text-center clearfix">
            <div class="page_title_area has_overlay d-flex align-items-center clearfix"
                data-bg-image="assets/images/breadcrumb/bg_07.jpg">
                <div class="overlay"></div>
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <h1 class="page_title text-white mb-0">Sobre Nosotros</h1>
                </div>
            </div>
        </section>
        <!-- breadcrumb_section - end
           ================================================== -->


        <!-- details_section - start
           ================================================== -->
        <section class="details_section blog_details sec_ptb_100 clearfix">
            <div class="container">
                <h2 data-aos="fade-up" data-aos-delay="100">
                    CARPINTERIA ARAON: MAS DE 18 AÑOS CREANDO MUEBLES EN MADERA A MEDIDA
                </h2>
                <ul class="post_meta ul_li mb_30 clearfix" data-aos="fade-up" data-aos-delay="200">
                    <li>Aug. 10, 2020</li>
                </ul>
                <div class="details_image mb_30" data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/images/details/img_01.jpg" alt="image_not_found">
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-sm-11 col-xs-12">
                        <h3 class="mb_30" data-aos="fade-up" data-aos-delay="100">
                            Nuestra Historia:
                        </h3>
                        <p class="mb-0" data-aos="fade-up" data-aos-delay="100">
                            Fundada en el 2007, Carpintería Araón nació con el firme propósito de revitalizar el arte de la
                            carpintería y responder a las necesidades de quienes valoran la calidad y la durabilidad de la
                            madera. Desde nuestros inicios, hemos trabajado incansablemente para convertirnos en un
                            referente en la región, destacándonos tanto en la fabricación de piezas únicas como en la venta
                            de maderas de la mejor calidad. Nos enorgullece ofrecer productos y servicios personalizados,
                            diseñados para satisfacer las más altas expectativas de nuestros clientes.
                        </p>
                        <div class="row mb_30 justify-content-center">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-delay="100">
                                <div class="child_image">
                                    <img src="assets/images/details/child_01.jpg" alt="image_not_found">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="child_image">
                                    <img src="assets/images/details/child_02.jpg" alt="image_not_found">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-delay="300">
                                <div class="child_image">
                                    <img src="assets/images/details/child_03.jpg" alt="image_not_found">
                                </div>
                            </div>
                        </div>
                        <p class="mb_30" data-aos="fade-up" data-aos-delay="100">
                            Nuestro equipo de especialistas en madera aporta experiencia, dedicación y una atención al
                            detalle que garantiza la excelencia en cada proyecto. Contamos con una variedad de servicios de
                            carpintería, desde la elaboración de muebles personalizados hasta estructuras, pisos y acabados
                            en madera. Nos adaptamos a las necesidades específicas de cada cliente, brindando soluciones que
                            combinan funcionalidad, diseño y estilo.
                        </p>
                        <blockquote class="text-center mb_30" data-aos="fade-up" data-aos-delay="100">
                            <span class="line bg_default_red"></span>
                            <p>
                                “Nuestra misión es brindar soluciones innovadoras y de calidad en el ámbito de la
                                carpintería, comprometidos con preservar el arte de trabajar la madera y atender las
                                necesidades de cada cliente de manera personalizada y eficiente.”
                            </p>
                            <h4>Araón Castrejón</h4>
                            <div class="row mb_40 align-items-center justify-content-lg-between" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <ul class="primary_social_links ul_li clearfix">
                                        <li><a href="https://www.facebook.com/apolinario.castrejon"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/araoncastrejon/tagged"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://wa.me/51974257017"><i class="fab fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <a class="comment_btn" href="#!"><i class="fas fa-comment-dots mr-1"></i> Palabras
                                        del fundador</a>
                                </div>
                            </div>
                            <span class="line bg_default_red mb-0"></span>
                        </blockquote>
                        <p class="mb_30" data-aos="fade-up" data-aos-delay="100">
                            Además de nuestros servicios, en Carpintería Araón ofrecemos una amplia selección de maderas,
                            ideal para quienes buscan materiales duraderos y confiables. Cada pieza de madera que vendemos
                            es cuidadosamente seleccionada para garantizar su resistencia y belleza, permitiendo que
                            nuestros clientes desarrollen sus propios proyectos con la misma calidad que nos representa.
                        </p>


                        <div class="section_title mb_30" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="title_text mb_15">Deja un comentario:</h2>
                            <p class="mb-0">
                                Tu dirección de correo electrónico no será publicada. Los campos obligatorios están
                                marcados con *
                            </p>
                        </div>
                        <div class="comment_form" data-aos="fade-up" data-aos-delay="200">
                            <form action="{{ route('reviews.store') }}" method="POST">
                                @csrf
                                <div class="form_item">
                                    <input type="text" name="name" placeholder="Nombres*" required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form_item">
                                    <input type="email" name="email" placeholder="Correo Electrónico*" required>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form_item">
                                    <textarea name="comment" placeholder="Esctriba su mensaje*" required></textarea>
                                    @error('comment')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form_item mb-3">
                                    <lavel class="d-block"> Tu calificación *</lavel>
                                    <div class="rating_input_stars">
                                        <input type="hidden" name="rating" id="rating_value" value="" required>

                                        <div class="star-rating-area">
                                            <i class="fas fa-star star-item" data-rating="1"></i>
                                            <i class="fas fa-star star-item" data-rating="2"></i>
                                            <i class="fas fa-star star-item" data-rating="3"></i>
                                            <i class="fas fa-star star-item" data-rating="4"></i>
                                            <i class="fas fa-star star-item" data-rating="5"></i>
                                        </div>
                                    </div>
                                    @error('rating')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="checkbox_input">
                                    <label for="alart_input"><input id="alart_input" type="checkbox">
                                        Guardar mis datos en este navegador para la próxima vez que comente.
                                    </label>
                                </div>
                                <button type="submit" class="custom_btn bg_default_red btn_width text-uppercase">
                                    Enviar mensaje
                                    <img src="assets/images/icons/icon_01.png" alt="icon_not_found">
                                </button>

                                @if (session('success'))
                                    <div class="alert alert-success mt-3">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- details_section - end
           ================================================== -->

        <!-- gallery_section - start
           ================================================== -->
        <section class="gallery_section clearfix">
            <div class="container">
                <div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="title_text mb-0">
                        <span>Nuestros Proyectos</span>
                    </h2>
                </div>
            </div>
            <div class="updown_style_wrap minus_bottom">
                <div class="updown_style">
                    <div class="gallery_fullimage" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/images/blog/img_07.jpg" alt="image_not_found">
                        <div class="item_content text-white">
                            <h3 class="item_title text-white">Puertas de Exterior en Huayruro</h3>
                        </div>
                    </div>

                    <div class="gallery_fullimage" data-aos="fade-up" data-aos-delay="300">
                        <img src="assets/images/blog/img_08.jpg" alt="image_not_found">
                        <div class="item_content text-white">
                            <h3 class="item_title text-white">Mueble Alto de Cocina (Repostero)</h3>
                        </div>
                    </div>
                </div>

                <div class="updown_style">
                    <div class="gallery_fullimage" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/images/blog/img_01.jpg" alt="image_not_found">
                        <div class="item_content text-white">
                            <h3 class="item_title text-white">Mueble Bajo de Cocina (Repostero)</h3>
                        </div>
                    </div>

                    <div class="gallery_fullimage" data-aos="fade-up" data-aos-delay="300">
                        <img src="assets/images/blog/img_09.jpg" alt="image_not_found">
                        <div class="item_content text-white">
                            <h3 class="item_title text-white">Armario Modular con Diseño Nórdico</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery_section - end
           ================================================== -->



        <!-- search_section - start
           ================================================== -->
        <section class="search_section sec_ptb_100 clearfix" data-bg-color="#161829">

            <div class="offers_car_carousel slideshow4_slider" data-aos="fade-up" data-aos-delay="700">
                <div class="item">
                    <div class="gallery_fullimage_2">
                        <img src="assets/images/gallery/img_03.jpg" alt="image_not_found">
                        <div class="item_content text-white">
                            <h3 class="item_title text-white">Juego de Sala Esquinero Premium</h3>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="gallery_fullimage_2">
                        <img src="assets/images/gallery/img_04.jpg" alt="image_not_found">
                        <div class="item_content text-white">
                            <h3 class="item_title text-white">Cama Matrimonial con Cajones y Repisa</h3>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="gallery_fullimage_2">
                        <img src="assets/images/gallery/img_05.jpg" alt="image_not_found">
                        <div class="item_content text-white">
                            <h3 class="item_title text-white">Sofá Modular y Mesa de Centro para Sala</h3>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="gallery_fullimage_2">
                        <img src="assets/images/gallery/img_06.jpg" alt="image_not_found">
                        <div class="item_content text-white">
                            <h3 class="item_title text-white">Juego de Sofás y Mesas de Madera Rústica</h3>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="gallery_fullimage_2">
                        <img src="assets/images/gallery/img_07.jpg" alt="image_not_found">
                        <div class="item_content text-white">
                            <h3 class="item_title text-white">Cama de Almacenamiento con Cabecera Integrada</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- search_section - end
           ================================================== -->


    </main>
    <!-- main body - end
          ================================================== -->
@endsection
