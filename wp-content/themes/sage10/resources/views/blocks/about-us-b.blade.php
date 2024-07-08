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
@if ( ! empty( $is_preview ) )
@php
/* Render screenshot for example */
$imgUrl = \Roots\asset('images/preview/leadspace.webp')->uri();
@endphp
<img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@else
<section class="about-us-b">
    <div class="container container-padding ">
        <div class="row g-10">
            <div class="col-12 col-md-6 col-lg-6 about-content d-flex flex-column gap-10 justify-content-center">
               
                @if ($aboutBlockContentHeading)
                <p class="about-content__title h6 m-0">{!! $aboutBlockContentHeading !!}</p>
                @endif

                @if ($aboutBlockContentDescription)
                <p class="about-content__text h3">
                    {!! $aboutBlockContentDescription !!}
                </p>
                @endif

                @if (!empty($aboutBlockContentButton) && is_array($aboutBlockContentButton))
                <a href="{{ $aboutBlockContentButton['url'] }}" class="about-content__button button button__fill button__with-icon">{!! $aboutBlockContentButton['title'] !!}<span class="button__icon"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 15.3879L17 8.38794L10 1.38794" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17 8.38794L1 8.38794" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> </span></a>
                @endif

            </div>
            <div class="col-12 col-md-6 col-lg-5 offset-lg-1 about-media ">
                <div class="d-flex flex-column bg-mint  p-6 gap-4">
                
                    @if ($aboutBlockMediaTitle)
                    <p class="about-media__title h6 m-0"> {!! $aboutBlockMediaTitle !!}</p>
                    @endif

                    <div class="about-media__wrapper ">

                        @if (!empty($aboutBlockMediaImage) && is_array($aboutBlockMediaImage))
                        <img loading="lazy" src="{{$aboutBlockMediaImage['url'] }}" style="width:100%;height:auto;" alt="{{$aboutBlockMediaImage['alt'] }}" class="about-media__image">
                        @endif
                        @if (!empty($aboutBlockMediaLink) && is_array($aboutBlockMediaLink))
                        <a href="{{$aboutBlockMediaLink['url']}}" class="about-media__play" title="{{$aboutBlockMediaLink['title']}}">
                            <img loading="lazy" src="@asset('images/play-button.svg')" style="width:100%;height:auto;">
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
