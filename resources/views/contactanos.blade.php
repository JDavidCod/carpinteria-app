@extends('layouts.app')
@section('content')
			<!-- main body - start
		================================================== -->
		<main>

			<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section text-center clearfix">
				<div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="assets/images/breadcrumb/bg_06.png">
					<div class="overlay"></div>
					<div class="container" data-aos="fade-up" data-aos-delay="100">
						<h1 class="page_title text-white mb-0">Contactanos</h1>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- google_map_section - start
			================================================== -->
			<div class="google_map_section clearfix" data-aos="fade-up" data-aos-delay="100">
				<div>
					<iframe id="mapBox" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.3386709031142!2d-78.50353295134279!3d-7.20994418399027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91b25d8c15201771%3A0x138a0a735cbe7067!2sCarpinter%C3%ADa%20Araon!5e1!3m2!1ses-419!2spe!4v1763428506602!5m2!1ses-419!2spe" width="100%" {{-- height="450" --}} style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
			<!-- google_map_section - end
			================================================== -->


			<!-- contact_section - start
			================================================== -->
			<section class="contact_section clearfix">
				<div class="container">
					<div class="contact_details_wrap text-white" data-bg-color="#1F2B3E" data-aos="fade-up" data-aos-delay="100">
						<div class="row justify-content-lg-between">
							<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
								<div class="image_area">
									<div class="brand_logo mb_15">
										<a href="{{ url('/nosotros') }}">
											<img src="assets/images/logo/logo4.png" srcset="assets/images/logo/logo4.png 2x" alt="logo_not_found">
										</a>
									</div>
									<div class="image_wrap">
										<img src="assets/images/about/img_02.jpg" alt="image_not_found">
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<div class="content_area">
									<h3 class="item_title text-white mb_30">Puedes Contactarnos:</h3>
									<ul class="ul_li_block mb_30 clearfix">
										<p class="mb_30">
										Cotiza tu proyecto en madera con nosotros.
									</p>
										<li>
											<i class="fas fa-map-marker-alt"></i>
											San Antonio de Agomarca S/N, Cajamarca, Cajamarca, PERÚ.
										</li>
										<li><i class="fas fa-clock"></i> Horario de atención: 8:00am - 6:00pm</li>
										<li><i class="fas fa-phone"></i> +51 974 257 017</li>
										<li><i class="fas fa-envelope"></i> apolinariocastrejon787@gmail.com</li>
									</ul>
									<form action="#">
										<div class="form_item mb-0">
											<input id="search_input" type="search" name="search" placeholder="Buscar">
											<label for="search_input" class="input_icon"><i class="fal fa-search"></i></label>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- contact_section - end
			================================================== -->


			<!-- contact_form_section - start
			================================================== -->
			<section class="contact_form_section sec_ptb_100 clearfix">
				<div class="container">

					<div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
						<h2 class="title_text mb-0">
							<span>Envianos un mensaje</span>
						</h2>
					</div>

					<form id="contact_form" action="mail.php" method="POST">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form_item" data-aos="fade-up" data-aos-delay="100">
									<input type="text" name="firstname" placeholder="Nombres*">
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form_item" data-aos="fade-up" data-aos-delay="200">
									<input type="text" name="lastname" placeholder="Apellidos*">
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form_item" data-aos="fade-up" data-aos-delay="300">
									<input type="email" name="email" placeholder="correo electrónico*">
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form_item" data-aos="fade-up" data-aos-delay="400">
									<input type="tel" name="phone" placeholder="Numero de teléfono*">
								</div>
							</div>
						</div>
						<div class="form_item" data-aos="fade-up" data-aos-delay="500">
							<textarea name="message" placeholder="Escriba su mensaje*"></textarea>
						</div>
						<div class="abtn_wrap text-center clearfix" data-aos="fade-up" data-aos-delay="600">
							<button type="submit" value="submit" class="custom_btn btn_width bg_default_red text-uppercase">Enviar<img src="assets/images/icons/icon_01.png" alt="icon_not_found"></button>
						</div>
					</form>
					
				</div>
			</section>
			<!-- contact_form_section - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->
@endsection