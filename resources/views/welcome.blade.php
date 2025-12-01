		@extends('layouts.app')		
		
		@section('content') <!-- main body - start
		================================================== -->
		<main class="mt-0">
			
			<!-- slider_section - start
			================================================== -->
			<section class="slider_section text-white text-center position-relative clearfix">
				<div class="main_slider clearfix">
					<div class="item has_overlay d-flex align-items-center" data-bg-image="img/mesa2.jpg">
						<div class="overlay"></div>
						<div class="container">
							
							<div class="row justify-content-center">
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
									<div class="slider_content text-center">
										<h3 class="text-white text-uppercase" data-animation="fadeInUp" data-delay=".3s">Tus proyectos en manos profecionales</h3>
										<p data-animation="fadeInUp" data-delay=".5s">
                                            Creamos muebles y estructuras de madera con dedicación y experiencia, garantizando calidad, diseño y durabilidad en cada proyecto.
											{{-- 6.6L V8 32V DDI OHV Turbo Diesel, 5-Speed Automatic, Fuel Type: Diesel, Color: Black --}}
										</p>
										<div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".7s">
											<a class="custom_btn bg_default_red btn_width text-uppercase" href="#!">Nuestros Modelos<img src="assets/images/icons/icon_01.png" alt="icon_not_found"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item has_overlay d-flex align-items-center" data-bg-image="img/mesa18.jpg">
						<div class="overlay"></div>
						<div class="container">
							
							<div class="row justify-content-center">
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
									<div class="slider_content text-center">
										<h3 class="text-white text-uppercase" data-animation="fadeInUp" data-delay=".3s">Los mejores acabados en madera</h3>
										<p data-animation="fadeInUp" data-delay=".5s">
                                            Trabajamos cada pieza con precisión y detalle para lograr superficies perfectas que resaltan la belleza natural de la madera.
											{{-- 6.6L V8 32V DDI OHV Turbo Diesel, 5-Speed Automatic, Fuel Type: Diesel, Color: Black --}}
										</p>
										<div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".7s">
											<a class="custom_btn bg_default_red btn_width text-uppercase" href="#!">Nuestros modelos <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item has_overlay d-flex align-items-center" data-bg-image="img/dormitorio.jpg">
						<div class="overlay"></div>
						<div class="container">
							
							<div class="row justify-content-center">
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
									<div class="slider_content text-center">
										<h3 class="text-white text-uppercase" data-animation="fadeInUp" data-delay=".3s">Dormitorios y Armarios</h3>
										<p data-animation="fadeInUp" data-delay=".5s">
                                            Diseñamos espacios únicos que combinan funcionalidad y estilo, creando ambientes acogedores y personalizados para tu hogar.
											{{-- 6.6L V8 32V DDI OHV Turbo Diesel, 5-Speed Automatic, Fuel Type: Diesel, Color: Black --}}
										</p>
										<div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".7s">
											<a class="custom_btn bg_default_red btn_width text-uppercase" href="#!">Nuestros Modelos<img src="assets/images/icons/icon_01.png" alt="icon_not_found"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="carousel_nav clearfix">
					<button type="button" class="main_left_arrow"><i class="fal fa-chevron-left"></i></button>
					<button type="button" class="main_right_arrow"><i class="fal fa-chevron-right"></i></button>
				</div>
			</section>
			<!-- slider_section - end
			================================================== -->


			<!-- inicio de la sección de productos
			================================================== -->
			<section class="feature_section sec_ptb_150 clearfix">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
							<div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
								<h2 class="title_text mb_15">
									<span>Busca un modelo que se adapte a ti</span>
								</h2>
								<p class="mb-0">
									Descubre nuestra colección de muebles y diseños exclusivos, elaborados con la mejor calidad 
									en madera. Con solo un clic podrás encontrar el producto ideal que se adapta a tu estilo y necesidades.
								</p>
							</div>
						</div>
					</div>

					<ul class="button-group filters-button-group ul_li_center mb_30 clearfix" data-aos="fade-up" data-aos-delay="300">
						<li><button class="button active" data-filter="*">Todos</button></li>
						<li><button class="button" data-filter=".mesas">Mesas</button></li>
						<li><button class="button" data-filter=".puertas">Puertas</button></li>
						<li><button class="button" data-filter=".camas">Camas</button></li>
						<li><button class="button" data-filter=".reposteros">Reposteros</button></li>
						<li><button class="button" data-filter=".roperos">Roperos</button></li>
					</ul>

					{{-- MESAS --}}

						<div class="feature_vehicle_filter element-grid clearfix">
						<div class="element-item mesas " data-category="mesas">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="300">
								<h3 class="item_title mb-0">
									<a href="#!">
										MESA COMEDOR DE 4 PUESTOS
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="assets/images/mesas/mesa2.jpeg" alt="image_not_found">
									</a>
									{{-- <span class="item_price bg_default_blue">$230/Day</span> --}}
								</div>
							</div>
						</div>
						<div class="element-item mesas " data-category="mesas">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">
								<h3 class="item_title mb-0">
									<a href="#!">
										MESA COMEDOR DE 4 PUESTOS
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="assets/images/mesas/mesa3.jpeg" alt="image_not_found">
									</a>
									{{-- <span class="item_price bg_default_blue">$230/Day</span> --}}
								</div>
							</div>
						</div>


						{{-- PUERTAS --}}


						<div class="element-item puertas " data-category="puertas">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="300">
								<h3 class="item_title mb-0">
									<a href="#!">
										PUERTA DE MADERA PANELADAS CON MARCO
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="assets/images/puertas/puerta17.png" alt="image_not_found">
									</a>
									{{-- <span class="item_price bg_default_blue">$230/Day</span> --}}
								</div>
							</div>
						</div>

						<div class="element-item puertas " data-category="puertas">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="500">
								<h3 class="item_title mb-0">
									<a href="#!">
										PUERTAS DE MADERA PANELADAS TIPO ARTEVI
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="assets/images/puertas/puerta7.jpeg" alt="image_not_found">
									</a>
									{{-- <span class="item_price bg_default_blue">$120/Day</span> --}}
								</div>
							</div>
						</div>
						{{-- CAMAS --}}
						<div class="element-item camas " data-category="camas">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">
								<h3 class="item_title mb-0">
									<a href="#!">
										CAMA DE MADERA KING SIZE
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="assets/images/camas/cama1.jpeg" alt="image_not_found">
									</a>
									{{-- <span class="item_price bg_default_blue">$230/Day</span> --}}
								</div>
							</div>
						</div>
						<div class="element-item camas " data-category="camas">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">
								<h3 class="item_title mb-0">
									<a href="#!">
										CAMA DE MADERA KING SIZE
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="assets/images/camas/cama4.jpeg" alt="image_not_found">
									</a>
									{{-- <span class="item_price bg_default_blue">$230/Day</span> --}}
								</div>
							</div>
						</div>
						{{-- REPOSTEROS --}}
						<div class="element-item reposteros " data-category="reposteros">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="300">
								<h3 class="item_title mb-0">
									<a href="#!">
										REPOSTEROS DE MADERA
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="assets/images/reposteros/repostero1.png" alt="image_not_found">
									</a>
									{{-- <span class="item_price bg_default_blue">$160/Day</span> --}}
								</div>
							</div>
						</div>

						<div class="element-item reposteros " data-category="reposteros">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="300">
								<h3 class="item_title mb-0">
									<a href="#!">
										REPOSTEROS DE MADERA
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="assets/images/reposteros/repostero2.png" alt="image_not_found">
									</a>
									{{-- <span class="item_price bg_default_blue">$160/Day</span> --}}
								</div>
							</div>
						</div>

						{{-- ARMARIOS --}}
						<div class="element-item roperos " data-category="roperos">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="500">
								<h3 class="item_title mb-0">
									<a href="#!">
										ROPEROS DE MADERA
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="assets/images/armarios/armario6.jpeg" alt="image_not_found">
									</a>
									{{-- <span class="item_price bg_default_blue">$230/Day</span> --}}
								</div>
								{{--<ul class="info_list ul_li_center clearfix">
									<li>Sports</li>
									<li>Auto</li>
									<li>2 Passengers</li>
									<li>Hybrid</li>
								</ul> --}}
							</div>
						</div>	
						<div class="element-item roperos " data-category="roperos">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="500">
								<h3 class="item_title mb-0">
									<a href="#!">
										ROPEROS DE MADERA
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="assets/images/armarios/armario17.jpeg" alt="image_not_found">
									</a>
									{{-- <span class="item_price bg_default_blue">$230/Day</span> --}}
								</div>
							</div>
						</div>
					</div>

					<div class="abtn_wrap text-center clearfix" data-aos="fade-up" data-aos-delay="100">
						<a class="custom_btn bg_default_red btn_width text-uppercase" href="#!">Ver más modelos<img src="assets/images/icons/icon_01.png" alt="icon_not_found"></a>
					</div>

				</div>
			</section>
			<!-- fin de la sección de productos
			================================================== -->


			<!-- inicio de la sección de nuestos servicios
			================================================== -->
			<section class="service_section text-white clearfix"
			style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/images/fondos_carpinteria/servicio.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;">
				<div class="container p-5">

					<div class="section_title mb_30 text-center" data-aos="fade-up" data-aos-delay="100">
						<h2 class="title_text text-white mb-0">
							<span>Nuestros Servicios</span>
						</h2>
					</div>

					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="100">
								<div class="item_icon">
									<i class="far fa-shield-alt"></i>
								</div>
								<h3 class="item_title text-white">Muebles a Medida</h3>
								<p class="mb-0">
									Diseño y fablicación de muebles personalizados según las necesidades y el espacio del cliente.
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="300">
								<div class="item_icon">
									<i class="fal fa-headset"></i>
								</div>
								<h3 class="item_title text-white">Consultoría y Asesoria</h3>
								<p class="mb-0">
									Guía y asesoramiento para elegir el mejor material y diseño para cualquier proyecto de carpintería.
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="500">
								<div class="item_icon">
									<i class="far fa-shield-alt"></i>
								</div>
								<h3 class="item_title text-white">Carpinteria para Interior</h3>
								<p class="mb-0">
									Fabricación e instalación de puertas, escaleras, ventanas de madera para cualquier tipo de estancia.
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="100">
								<div class="item_icon">
									<i class="fas fa-briefcase"></i>
								</div>
								<h3 class="item_title text-white">Proyectos Especiales</h3>
								<p class="mb-0">
									Diseño y fabricación de mobiliario para comercios y decorativos.
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="300">
								<div class="item_icon">
									<i class="fas fa-user-plus"></i>
								</div>
								<h3 class="item_title text-white">Venta de Madera</h3>
								<p class="mb-0">
									Venta de madera de tornillo, cedro, pino , eucalipto y más.
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="500">
								<div class="item_icon">
									<i class="fas fa-gem"></i>
								</div>
								<h3 class="item_title text-white">Renovación y Restauración de Muebles</h3>
								<p class="mb-0">
									Reparacion,lijado y acabado de muebles antiguos o dañados para devolverles su belleza y funcionalidad.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- fin de la sección de nuestos servicios
			================================================== -->


			<!-- incio de la seccion de valores de la empresa
			================================================== -->
			<section class="blog_section clearfix">
				<div class="container sec_ptb_150 pb-0 mb_100">
					<div class="row justify-content-lg-between justify-content-center">
						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="blog_wrap">
								<h3 class="wrap_title mb-0" data-aos="fade-up" data-aos-delay="100">Cómo transformamos la madera en piezas únicas</h3>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="blog_child" data-aos="fade-up" data-aos-delay="300">
											<a class="item_image" href="blog_details.html">
												<img src="assets/images/armarios/armario3.jpeg" alt="image_not_found">
											</a>
											<div class="item_content">
												<h4 class="item_title mb-0">
													<a href="blog_details.html">
														Tendencias en diseño de muebles 2025
													</a>
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="newsletter_form1">
								<h3 class="form_title mb_30" data-aos="fade-up" data-aos-delay="100">Suscríbete:</h3>
								<p class="mb_30" data-aos="fade-up" data-aos-delay="300">
									Buscanos en nuestras redes sociales y enterate de todos nuestro proyectos.
								</p>
								<ul class="primary_social_links ul_li mb_30 clearfix" data-aos="fade-up" data-aos-delay="500">
									<li><a href="https://www.facebook.com/apolinario.castrejon"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="https://www.instagram.com/araoncastrejon/tagged"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
								</ul>
								<div class="row" data-aos="fade-up" data-aos-delay="700">
									<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
										<button type="submit" class="custom_btn bg_default_red text-uppercase w-100 d-block">Contactanos<img src="assets/images/icons/icon_01.png" alt="icon_not_found"></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="valores">
					<div class="container">
						<div class="valor1">
					<h2>Responsabilidad</h2>
					</div>
					<div class="valor2">
						<h2>Ecologia</h2>
					</div>
					<div class="valor3">
						<h2>Puntualidad</h2>
					</div>
					</div>
				</div>
			</section>
			<!-- fin de la seccion de valores de la emopresa
			================================================== -->

			<hr class="m-0" data-aos="fade-up" data-aos-delay="100">


        <!-- testimonial_section - start
                           ================================================== -->
        <section class="testimonial_section sec_ptb_150 clearfix">
            <div class="container">

                <div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="title_text mb-0">
                        <span>Comentarios de nuestros clientes</span>
                    </h2>
                </div>

                <div class="testimonial_carousel" data-slick='{"dots": false}' data-aos="fade-up" data-aos-delay="300">

                    @foreach ($reviews as $review)
                        <div class="item">
                            <div class="testimonial_item2 text-center">
                                <p class="mb_30">
                                    “{{ $review['comment'] }}”
                                </p>
                                <div class="admin_info">
                                    <div class="admin_image">
                                        <img src="assets/images/meta/user.png" alt="image_not_found">
                                    </div>
                                    <h4 class="admin_name">{{ $review['name'] }}</h4>

                                    <ul class="rating_star ul_li_center clearfix">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <li class="{{ $i <= $review['rating'] ? 'active' : '' }}">
                                                <i class="fas fa-star"></i>
                                            </li>
                                        @endfor
                                    </ul>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="carousel_nav position_ycenter">
                    <button type="button" class="ts_left_arrow"><i class="fal fa-angle-left"></i></button>
                    <button type="button" class="ts_right_arrow"><i class="fal fa-angle-right"></i></button>
                </div>
            </div>

            </div>
        </section>
        <!-- testimonial_section - end
                           ================================================== -->


		</main>
		<!-- main body - end
		================================================== -->
		@endsection