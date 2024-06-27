<!-- <header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header> -->

<header class="header">
  <div class="header__container container p-0">
    <div class="header__wrapper px-6 py-4 px-lg-10 py-lg-8 py-md-6 d-flex flex-row justify-content-between align-items-center">
      <div class="header-left d-flex gap-9 justify-content-start">
        <div class="header-left__navbar navbar d-md-flex d-lg-none">
          <button class="header-left__navbar-toggle navbar-toggler border border-0 p-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
            <!-- <span class="header-left__navbar-icon navbar-toggler-icon"></span> -->
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 14H15M1 2H15H1ZM1 8H15H1Z" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
        <a href="{{ home_url('/') }}"><img src="@asset('./images/logo.svg')" alt="Logo of Followed Text" class="header-left__logo" /></a>
      </div>
      <div class="header-right">
        <nav class="header-right-nav d-flex flex-lg-row flex-column  offcanvas-lg offcanvas-start" id="offcanvasResponsive" role="navigation">
          <div class="header-offcanvas d-flex d-lg-none flex-row gap-6 px-6 py-9 align-items-center border border-peach">
            <button type="button" class="header-offcanvas__close btn-close btn-close-white d-flex d-lg-none p-0 border border-0 bg-transparent" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close offcanvas menu">
              <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_2_4040)">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.792893C0.683417 0.402369 1.31658 0.402369 1.70711 0.792893L8 7.08579L14.2929 0.792893C14.6834 0.402369 15.3166 0.402369 15.7071 0.792893C16.0976 1.18342 16.0976 1.81658 15.7071 2.20711L9.41421 8.5L15.7071 14.7929C16.0976 15.1834 16.0976 15.8166 15.7071 16.2071C15.3166 16.5976 14.6834 16.5976 14.2929 16.2071L8 9.91421L1.70711 16.2071C1.31658 16.5976 0.683417 16.5976 0.292893 16.2071C-0.0976311 15.8166 -0.0976311 15.1834 0.292893 14.7929L6.58579 8.5L0.292893 2.20711C-0.0976311 1.81658 -0.0976311 1.18342 0.292893 0.792893Z" fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0_2_4040">
                    <rect width="16" height="16" fill="white" transform="translate(0 0.5)" />
                  </clipPath>
                </defs>
              </svg>
            </button>
            <a href="{{ home_url('/') }}">
              <img src="@asset('./images/logo-white.svg')" alt="Logo of Followed Text" class="header-offcanvas__logo" />
            </a>
          </div>
          <ul class="header-right-nav__list d-flex flex-lg-row flex-column px-10 py-11 px-lg-0 h-100 align-items-center justify-content-center gap-10 list-unstyled my-0">
            <li class="header-right-nav__item h6 mb-0 text-capitalize">
              <a href="#" class="header-right-nav__link" aria-label="Read about our company">About</a>
            </li>
            <li class="header-right-nav__item h6 mb-0 text-capitalize">
              <a href="#" class="header-right-nav__link" aria-label="Read our blog">Blog</a>
            </li>
            <li class="header-right-nav__item h6 mb-0 text-capitalize">
              <a href="#" class="header-right-nav__link" aria-label="Know more about our team">Team</a>
            </li>
            <li class="header-right-nav__item h6 mb-0 text-capitalize">
              <a href="#" class="header-right-nav__link" aria-label="Explore career with us">Career</a>
            </li>
            <li class="header-right-nav__item h6 mb-0 text-capitalize">
              <a href="#" class="header-right-nav__link" aria-label="Contact us">Contact</a>
            </li>
          </ul>
        </nav>
        <button class="header-right__button d-none d-md-flex d-lg-none bg-transparent button__border">Join Us Now</button>
      </div>
    </div>
  </div>
</header>