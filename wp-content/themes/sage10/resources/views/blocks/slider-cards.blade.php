{{--
    script[slider-card.js]script
    style[modules/slider-card.scss]style
    Title: Slider Card
    Description: This contains about us section for homepage]
    Category: outside
    Icon: admin-tools
    Keywords: leadspace
    Mode: auto
    Align: center
    PostTypes: post page
    SupportsMode: false
    SupportsMultiple: true
    SupportsAlign: left right
    SupportsAlignContent: center
    EnqueueStyle:
    EnqueueScript:
    EnqueueAssets: assetsEnqueue
    EnqueueAssetsCSS:
    EnqueueAssetsJS:
--}}

<section class="slider-cards bg-blush">
    <div class="slider-cards__container container p-0">

        <div class="p-6 px-md-10 py-md-20 p-lg-30">
            <div class="row gx-0 gy-6 gy-md-10">
                @if ($sliderSectionTitle)

                <p class="slider-cards__title col-12 h6"> {!! $sliderSectionTitle !!}</p>
                @endif

                <div class="slider-cards__swiper col-12 swiper js-swiper">
                    <div class="slider-cards__wrapper swiper-wrapper">

                        @foreach( $sliderCard as $card)
                        <div class="slider-cards__slide swiper-slide row d-flex g-0 mx-lg-0 bg-white border-success">

                            @php

                            $image = $card['slider_card_image'] ?? false;
                            $slideTitle = $card['slider_card_heading'] ?? false;
                            $slideDescription = $card['slider_card_description'] ?? false;
                            
                            @endphp

                            @include('blocks.cards.slider-card', [
                            'image' => $image,
                            'slideTitle' => $slideTitle,
                            'slideDescription' => $slideDescription,
                            ])
                        </div>

                        @endforeach
                    </div>
                </div>

                <div class="slider-cards__nav col-12 d-flex justify-content-between">
                    <div class="slider-cards__nav-prev swipe-prev p-3 bg-white rounded-circle d-inline-flex" role="button" aria-label="Slide to previous">
                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M8 1.17798L1 8.17798L8 15.178" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 8.17798H17" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <div class="slider-cards__pagination swiper-pagination d-inline-flex justify-content-center align-items-center position-relative top-0 gap-2" aria-hidden="true"></div>

                    <div class="slider-cards__nav-next swipe-next p-3 bg-white rounded-circle d-inline-flex" role="button" aria-label="Slide to next">
                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M10 15.178L17 8.17798L10 1.17798" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17 8.17798L1 8.17798" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
