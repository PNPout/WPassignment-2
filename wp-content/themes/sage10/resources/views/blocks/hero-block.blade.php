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
                    <img src="@asset('./images/hero-2.jpg')" alt="hero 1" class="hero-block__img hero-block__img--first">
                </div>
                <div class="col-7 ps-md-10 ps-lg-4 d-none d-md-flex">
                    <img src="@asset('./images/hero-1.jpg')" alt="hero 2" class="hero-block__img hero-block__img--second d-md-none d-lg-flex">
                    <img src="@asset('./images/hero-1-tab.jpg')" alt="hero 2 tab" class="hero-block__img hero-block__img--second d-md-flex d-lg-none">
                </div>
                <div class="col-lg-8 d-none d-md-flex">
                    <div class="hero-block__content bg-white p-md-10 p-lg-20 border-success">
                        <p class="h2 pb-4 m-0">Look deep into nature, and then you will understand everything better.</p>
                        <div class="body-text__xl post-basic">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                        </p></div>
                        <a href="#" class="button button__border button__with-icon mt-6 mt-lg-10" title="Contact us">Contact Us<span class="button__icon"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 15.3879L17 8.38794L10 1.38794" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17 8.38794L1 8.38794" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg> </span></a>
                    </div>
                </div>
                <div class="col-12 col-lg-8 d-md-none">
                    <div class="hero-block__content bg-white py-10 px-6 border-success">
                        <p class="h2 pb-4">From the depths of the Earth to outer space, we are building the barely possible.
                        </p>
                        <div class="body-text__xl post-basic">
                            <p>
                                First Mode is a creative engineering company meeting humanity’s challenges
                                and opportunities—wherever we find them.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-none d-lg-flex ">
                    <div class="me-lg-6"><img src="@asset('./images/hero-3.jpg')" alt="hero 3" class="hero-block__img hero-block__img--third"></div>
                </div>
            </div>
        </div>
    </div>
</section>