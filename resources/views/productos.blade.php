@extends('layouts.app')
@section('content')
    <!-- main body - start
              ================================================== -->
    <main>

        <!-- breadcrumb_section - start
               ================================================== -->
        <section class="breadcrumb_section text-center clearfix">
            <div class="page_title_area has_overlay d-flex align-items-center clearfix"
                data-bg-image="assets/images/breadcrumb/bg_13.jpg">
                <div class="overlay"></div>
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <h1 class="page_title text-white mb-0">Galería</h1>
                </div>
            </div>
        </section>
        <!-- breadcrumb_section - end
               ================================================== -->


        <!-- gallery_section - start
               ================================================== -->
        <section class="gallery_section sec_ptb_100 clearfix">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                        <div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="title_text mb_15">
                                <span>busca un modelo que se adapte a tus necesidades</span>
                            </h2>
                            <p class="mb-0">
                                Descubre nuestra coleccion de muebles y diseños en madera, con un solo clic podras encontrar
                                el producto ideal que se adapte a tu estilo y necesidades y lo haremos.
                            </p>
                        </div>
                    </div>
                </div>

                <ul class="button-group filters-button-group ul_li_center mb_30 clearfix" data-aos="fade-up"
                    data-aos-delay="300">
                    <li><button class="button active" data-filter="*">Todos</button></li>
                    <li><button class="button" data-filter=".mesas">Mesas</button></li>
                    <li><button class="button" data-filter=".puertas">Puertas</button></li>
                    <li><button class="button" data-filter=".camas">Camas</button></li>
                    <li><button class="button" data-filter=".reposteros">Reposteros</button></li>
                    <li><button class="button" data-filter=".roperos">Roperos</button></li>
                </ul>

                <div class="feature_vehicle_filter mb-0 element-grid clearfix">

                    @foreach ($galleryModels as $model)
                        <div class="element-item {{ $model['category'] }}" data-category="{{ $model['category'] }}">
                            <div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">
                                <div class="item_image position-relative">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/feature/{{ $model['image'] }}" alt="{{ $model['name'] }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>


            </div>

            <div class="pagination_wrap clearfix">
                <div class="row align-items-center justify-content-lg-between">

                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <span class="page_number" data-aos="fade-up" data-aos-delay="100">
                            Pagina {{ $galleryModels->currentPage() }} de {{ $galleryModels->lastPage() }}
                            ({{ $galleryModels->total() }} modelos)
                        </span>
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        {{ $galleryModels->links('vendor.pagination.carpinteria-custom') }}
                    </div>

                </div>
            </div>

            </div>
        </section>
        <!-- gallery_section - end
               ================================================== -->

    </main>
    <!-- main body - end
              ================================================== -->
@endsection
