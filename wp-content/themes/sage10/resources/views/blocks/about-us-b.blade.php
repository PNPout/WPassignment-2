{{--
    script[]script
    style[modules/leadspace.scss,modules/slider.scss,modules/about-us-b.scss]style
    Title: About Us Block
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
<!-- leadspace html goes here -->
@if ( ! empty( $is_preview  ) )
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/leadspace.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@else
<section class="about-us-b">
<div class="about__wrapper">
        <div class="about__content">
          <h6 class="about__title">About Us</h6>
          <h3 class="about__text">
            Integer at neque ac metus fringilla dapibus et eu eros. Vivamus
            vitae finibus dolor. Suspendisse finibus ante in sapien fermentum,
            quis condimentum turpis consequat.
          </h3>
          <a href="#" class="about__button button__fill button__with-icon"
            >Learn More<span class="button__icon"
              ><svg
                width="18"
                height="17"
                viewBox="0 0 18 17"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M10 15.3879L17 8.38794L10 1.38794"
                  stroke="white"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M17 8.38794L1 8.38794"
                  stroke="white"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg> </span
          ></a>
        </div>

        <div class="about__image-section">
          <h6 class="image__title">How about Us?</h6>
          <div class="about__image-wrapper">

    <img loading="lazy" src="@asset('images/about-image.jpg')" style="width:100%;height:auto;" alt="Picture of Van in desert"
            class="about__image">
            <!-- <img loading="lazy" src="<?php // echo get_template_directory_uri(); ?>/public/images/about-image.jpg"            " style="width:100%;height:auto;" alt="Picture of Van in desert"
            class="about__image">  -->
          <span class="about__play">
    <img loading="lazy" src="@asset('images/play-button.svg')" style="width:100%;height:auto;" alt="play icon for about us video">        
          </span></div>
        </div>
      </div>
</section>
@endif