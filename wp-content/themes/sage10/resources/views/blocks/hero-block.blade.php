{{--
script[]script
style[modules/hero-block.scss]style
Title: Hero Block
Description: This is a Hero block]
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


<section class="hero-block">
    <div class="container p-0">
        <div class="py-8 px-6 p-md-10 p-lg-20">
            <div class="row g-6 gy-lg-16 g-md-10">

                <div class="col-md-5 col-12 pe-md-0 pe-lg-10">

                    @if (!empty($heroImageFirst) && is_array($heroImageFirst))
                    <figure>
                        <img src="{{$heroImageFirst["url"]}}" alt="{!! $heroImageFirst["alt"] !!}" class="hero-block__img hero-block__img--first">
                    </figure>
                    @endif

                </div>
                <div class="col-7 ps-md-10 ps-lg-4 d-none d-md-flex">

                    @if (!empty($heroImageSecond) && !empty($heroImageSecondForTablet) && is_array($heroImageSecond) && is_array($heroImageSecondForTablet))
                    <picture>
                        <source media="(max-width: 1439px)" srcset="{{$heroImageSecondForTablet['url']}}" />
                        <source media="(min-width: 1440px)" srcset="{{$heroImageSecond['url']}}" />
                        <img src="{{$heroImageSecond['url']}}" alt="{!! $heroImageSecond['alt'] !!}" class="hero-block__img hero-block__img--second" />
                    </picture>
                    @endif
                </div>

                <div class="col-lg-8 d-none d-md-flex">
                    <div class="hero-block__content bg-white p-md-10 p-lg-20 border-success">

                        @if ($headerBlockDesktopTextHeading)
                        <p class="h2 pb-4 m-0">
                        {!! $headerBlockDesktopTextHeading !!}
                        </p>
                        @endif

                        @if ($headerBlockDesktopTextDescription)
                        <div class="body-text__xl post-basic">
                            <p> 
                            {!! $headerBlockDesktopTextDescription !!}
                            </p>
                        </div>
                        @endif

                        @if (($headerBlockDesktopTextLink) && is_array($headerBlockDesktopTextLink))
                        <a href="{{ $headerBlockDesktopTextLink['url'] }}" class="button button__border button__with-icon mt-6 mt-lg-10" title="Contact us">{!! $headerBlockDesktopTextLink['title'] !!}<span class="button__icon"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 15.3879L17 8.38794L10 1.38794" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17 8.38794L1 8.38794" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg> </span>
                        </a>
                        @endif
                    </div>
                </div>

                <div class="col-12 col-lg-8 d-md-none">
                    <div class="hero-block__content bg-white py-10 px-6 border-success">
                        @if ($headerBlockMobileTextHeading)
                        <p class="h2 pb-4">
                            {!! $headerBlockMobileTextHeading !!}
                        </p>
                        @endif

                        @if ($headerBlockMobileTextDescription)
                        <div class="body-text__xl post-basic">
                            <p>
                                {!! $headerBlockMobileTextDescription !!}
                            </p>
                        </div>
                        @endif

                    </div>
                </div>

                <div class="col-4 d-none d-lg-flex ">
                    <div class="me-lg-6">

                        @if (!empty($heroImageThird) && is_array($heroImageThird))
                        <figure>
                            <img src="{{ $heroImageThird['url'] }}" alt="{!! $heroImageThird['alt'] !!}" class="hero-block__img hero-block__img--third">
                        </figure>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
