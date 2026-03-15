<section class="banner-one wow fadeInUp">

    <div class="banner-one__slider slick"
         data-slick='{"dots": true, "infinite": true, "speed": 300, "slidesToShow": 1, "slidesToScroll": 1, "arrows": true, "autoplay": true, "autoplaySpeed": 5000, "fade": true, "pauseOnHover": false}'>

        @foreach($slides as $slide)

            <div class="banner-one__single-slide d-flex align-items-center"
                 style="background-image: url('{{ $slide->image }}');">

                <div class="container">
                    <div class="row">
                        <div class="col-xxl-6 col-md-8">

                            <div class="banner-one__single-content">

                                <div class="banner-one__inner-title">

                                    <div class="banner-one__big-title">
                                        <h2 class="left">{{ $slide->small_title_left }}</h2>
                                        <h2 class="right">{{ $slide->small_title_right }}</h2>
                                    </div>

                                    <a href="#" class="d-block subtitle">
                                        <h4>{{ $slide->subtitle }}</h4>
                                    </a>

                                    <div class="title">
                                        <h1>{!! $slide->title !!}</h1>
                                    </div>

                                </div>

                                @if($slide->button_link)
                                    <div class="banner-one__button-box">
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
