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
      <p class="slider-cards__title col-12 h6">Our Team</p>
      <div class="slider-cards__swiper col-12 swiper js-swiper">
        <div class="slider-cards__wrapper swiper-wrapper">
          @include('blocks.cards.slider-card', [
          'imgScr' => @asset('images/slider-image-1.jpg'),
          'slideTitle' => 'Dally Albana - Site Engineer',
          'slideDesc' => '“It is not so much for its beauty that the forest makes a claim upon men’s hearts, as for that subtle something, that quality of air that emanation from old trees, that so wonderfully changes and renews a weary spirit.”'
          ])
          @include('blocks.cards.slider-card', [
          'imgScr' => @asset('images/slider-image-1.jpg'),
          'slideTitle' => 'Sally Albana - Site Engineer',
          'slideDesc' => '“It is not so much for its beauty that the forest makes a claim upon men’s hearts, as for that subtle something, that quality of air that emanation from old trees, that so wonderfully changes and renews a weary spirit.”'
          ])
          @include('blocks.cards.slider-card', [
          'imgScr' => @asset('images/slider-image-1.jpg'),
          'slideTitle' => 'Mally Albana - Site Engineer',
          'slideDesc' => '“It is not so much for its beauty that the forest makes a claim upon men’s hearts, as for that subtle something, that quality of air that emanation from old trees, that so wonderfully changes and renews a weary spirit.”'
          ])
          @include('blocks.cards.slider-card', [
          'imgScr' => @asset('images/slider-image-1.jpg'),
          'slideTitle' => 'Tally Albana - Site Engineer',
          'slideDesc' => '“It is not so much for its beauty that the forest makes a claim upon men’s hearts, as for that subtle something, that quality of air that emanation from old trees, that so wonderfully changes and renews a weary spirit.”'
          ])
        </div>
      </div>
      <div class="slider-cards__nav col-12 d-flex justify-content-between">
        <div class="slider-cards__nav-prev swipe-prev p-3 bg-white rounded-circle d-inline-flex"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 1.17798L1 8.17798L8 15.178" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M1 8.17798H17" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
        <div class="slider-cards__pagination swiper-pagination d-inline-flex justify-content-center align-items-center position-relative top-0 gap-2"></div>
        <div class="slider-cards__nav-next swipe-next p-3 bg-white rounded-circle d-inline-flex"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 15.178L17 8.17798L10 1.17798" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M17 8.17798L1 8.17798" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>