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

<section class="slider-section">
      <h6 class="slider-section__title">Our Team</h6>
      <div class="swiper js-swiper sider-wrapper">
        <div class="slider-cards-wrapper swiper-wrapper">
    @include('blocks.cards.slider-card', [
        'imgScr' => @asset('images/slider-image-1.jpg'),
        'slideTitle' => 'Dally Albana - Site Engineer',
        'slideDesc'  => '“It is not so much for its beauty that the forest makes a claim upon men’s hearts, as for that subtle something, that quality of air that emanation from old trees, that so wonderfully changes and renews a weary spirit.”'
    ])
    @include('blocks.cards.slider-card', [
        'imgScr' => @asset('images/slider-image-1.jpg'),
        'slideTitle' => 'Sally Albana - Site Engineer',
        'slideDesc'  => '“It is not so much for its beauty that the forest makes a claim upon men’s hearts, as for that subtle something, that quality of air that emanation from old trees, that so wonderfully changes and renews a weary spirit.”'
    ])
    @include('blocks.cards.slider-card', [
        'imgScr' => @asset('images/slider-image-1.jpg'),
        'slideTitle' => 'Mally Albana - Site Engineer',
        'slideDesc'  => '“It is not so much for its beauty that the forest makes a claim upon men’s hearts, as for that subtle something, that quality of air that emanation from old trees, that so wonderfully changes and renews a weary spirit.”'
    ])
    @include('blocks.cards.slider-card', [
        'imgScr' => @asset('images/slider-image-1.jpg'),
        'slideTitle' => 'Tally Albana - Site Engineer',
        'slideDesc'  => '“It is not so much for its beauty that the forest makes a claim upon men’s hearts, as for that subtle something, that quality of air that emanation from old trees, that so wonderfully changes and renews a weary spirit.”'
    ])
    </div>
      </div>
      <div class="swiper-nav">
        <div class="swipe-prev"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M8 1.17798L1 8.17798L8 15.178" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M1 8.17798H17" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          </div>
        <div class="swiper-pagination slider-card-pagination"></div>
        <div class="swipe-next"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M10 15.178L17 8.17798L10 1.17798" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M17 8.17798L1 8.17798" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          </div>
      </div>
    </section>
