{{--
    script[]script
    style[modules/header-block.scss]style
    Title: Header Block
    Description: This is a header block]
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

<header class="header-block">
  <div class="header__container container-xxl px-3 py-3 px-md-6 py-md-5 d-flex flex-row justify-content-between align-items-center">
    <div class="header__left d-flex gap-5">
      <div class="navbar d-md-flex d-lg-none">
        <button class="header__mobile-toggle navbar-toggler border border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <a href="{{ home_url('/') }}"><img src="@asset('./images/logo.svg')" alt="Logo of Followed Text" class="header__logo" /></a>
    </div>
    <div class="header__right">
      <nav class="header__nav d-flex flex-lg-row flex-column  offcanvas-lg offcanvas-end pt-6 px-3" id="offcanvasResponsive">
        <button type="button" class="btn-close d-flex d-lg-none align-self-end bg-transparent" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive"  aria-label="Close"></button>
        <ul class="d-flex flex-lg-row flex-column justify-content-between gap-6">
          <li class="header__nav-item h6 mb-0 text-capitalize">
            <a href="#" class="header__nav-link text-body">About</a>
          </li>
          <li class="header__nav-item h6 mb-0 text-capitalize">
            <a href="#" class="header__nav-link text-body">Blog</a>
          </li>
          <li class="header__nav-item h6 mb-0 text-capitalize">
            <a href="#" class="header__nav-link text-body">Team</a>
          </li>
          <li class="header__nav-item h6 mb-0 text-capitalize">
            <a href="#" class="header__nav-link text-body">Career</a>
          </li>
        </ul>
      </nav>
      <button class="header__button d-none d-md-flex d-lg-none bg-transparent button__border">Join Us Now</button>
    </div>
  </div>
</header>
