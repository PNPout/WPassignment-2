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
    <div class="container-xxl py-5 px-4 p-md-6 p-lg-8">
        <div class="hero-block-top">
            <div class="row g-6">
                <div class="col-md-5 col-12">
                    <img src="@asset('./images/hero-2.jpg')" alt="hero 1"
                        class="hero__img hero__img--first">
                </div>
                <div class="col-7 d-none d-md-flex">
                    <img src="@asset('./images/hero-1.jpg')" alt="hero 2"
                        class="hero__img hero__img--second">
                </div>
                <div class="col-lg-8 d-none d-md-flex">
                    <div class="hero-block__content bg-white p-6 p-lg-8 border-success">
                        <p class="h2">Look deep into nature, and then you will understand everything better.</p>
                        <p class="body-xl">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                        </p>
                        <a href="#" class="button button__border button__with-icon mt-4 mt-lg-6" title="Contact us">Contact Us<span
                                class="button__icon"><svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 15.3879L17 8.38794L10 1.38794" stroke="#222222" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17 8.38794L1 8.38794" stroke="#222222" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg> </span></a>
                    </div>
                </div>
                <div class="col-12 col-lg-8 d-md-none">
                    <div class="hero-block__content bg-white py-6 px-4  border-success">
                        <p class="h2">From the depths of the Earth to outer space, we are building the barely possible.
                        </p>
                        <div class="body-xl post-basic">
                            <p>
                                First Mode is a creative engineering company meeting humanity’s challenges
                                and opportunities—wherever we find them.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-none d-lg-flex"><img src="@asset('./images/hero-3.jpg')" alt="hero 3"
                        class="hero__img hero__img--third"></div>
            </div>
        </div>
    </div>
</section>