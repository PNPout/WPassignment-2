{{--
    script[]script
    style[modules/footer-block.scss]style
    Title: Footer Block
    Description: This is a footer block]
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

<div class="footer-block">
    <div class="footer__wrapper">
        <div class="footer-top">
            <div class="footer__logo"><img src="@asset('./images/logo-white.svg')" alt="Logo in Footer"></div>
        </div>
        <div class="footer-middle">
            <div class="footer-middle__navs">
                <div class="footer__navs">
                    <h6 class="nav__title"><a href="#">About Us</a></h6>
                    <h6 class="nav__title"><a href="#">Our Team</a></h6>
                    <h6 class="nav__title"><a href="#">Who We Are</a></h6>
                    <h6 class="nav__title"><a href="#">Resources</a></h6>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer__navs">
                <h6 class="nav__title"><a href="#">Contact</a></h6>
                <div class="footer__newsletter-wrapper">
                    <i>Sign up for our newsletter:</i>
                    <form action="" method="post" class="newsletter__form newsletter__form--footer">
                        <input type="email" name="Email" id="email" placeholder="Email address">
                        <button type="submit" class="button__border button__with-icon button__border--white">Submit <span class="button__icon"
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
              </svg></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-copyright">Site content copyright © 2021 Allowded Text</div>
    </div>
</div>