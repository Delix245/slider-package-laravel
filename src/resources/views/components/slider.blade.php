{{-- updated design --}}
<section class="banner-one wow fadeInUp">

    <div class="banner-one__slider slick"
         data-slick='{"dots": true, "infinite": true, "speed": 300, "slidesToShow": 1, "slidesToScroll": 1, "arrows": true, "autoplay": true, "autoplaySpeed": 5000, "fade": true, "pauseOnHover": false}'>

        @foreach($slides as $slide)

            <div class="banner-one__single-slide d-flex align-items-center position-relative"
                 style="background-image: url('{{ $slide->image }}'); background-size: cover; background-position: center;">

                <!-- затемнённый оверлей -->
                <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);"></div>

                <div class="container position-relative" style="z-index: 2;">
                    <div class="row">
                        <div class="col-xxl-6 col-md-8">

                            <div class="banner-one__single-content text-white"> <!-- белый текст -->

                                <div class="banner-one__inner-title">

                                    <div class="banner-one__big-title">
                                        <h2 class="left text-white">{{ $slide->small_title_left }}</h2>
                                        <h2 class="right text-white">{{ $slide->small_title_right }}</h2>
                                    </div>

                                    <a href="#" class="d-block subtitle text-white">
                                        <h4>{{ $slide->subtitle }}</h4>
                                    </a>

                                    <div class="title">
                                        <h1 class="text-white">{!! $slide->title !!}</h1>
                                    </div>

                                    <!-- вывод описания -->
                                    @if($slide->description)
                                        <p class="description text-white mt-2">{{ $slide->description }}</p>
                                    @endif

                                </div>

                                @if($slide->button_link)
                                    <div class="banner-one__button-box mt-3">
                                        <a href="{{ $slide->button_link }}" class="btn--secondary style2">
                                            {{ $slide->button_text }}
                                        </a>
                                    </div>
                                @endif

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        @endforeach

    </div>
</section>
