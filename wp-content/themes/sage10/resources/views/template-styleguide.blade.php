{{--
  Template Name: StyleGuide Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')

    <div class="styleguide">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3">
            <aside class="styleguide-sidebar sticky-top">
              <ul>
                <li class="list-group-item">
                  <a href="#branding" class="anchor-link">Branding and Colors</a>
                </li>
              </ul>
            </aside>
          </div>

          <div class="col-lg-9">

            <section class="content-wrap" id="branding">
              <div class="row">
                <div class="col">
                  <header class="mb-5">
                    <h3 class="mb-0">Branding and colors</h3>
                  </header>
                  <div class="row mb-5">
                    <div class="col-md-2 mb-5">
                      <span class="bg-fuse-blue d-block px-4 py-4 text-white border">
                        <strong class="d-block">Primary</strong>
                        <small class="mb-4 d-block">
                          <i>$primary</i>
                          <span class="font-size-12 d-block mb-1">#40A8F5</span>
                        </small>
                        <code>.bg-primary</code>
                      </span>
                    </div>

                    <div class="col-md-2 mb-5">
                      <span class="bg-fuse-blue d-block px-4 py-4 text-white border">
                        <strong class="d-block">Primary</strong>
                        <small class="mb-4 d-block">
                          <i>$primary</i>
                          <span class="font-size-12 d-block mb-1">#40A8F5</span>
                        </small>
                        <code>.bg-primary</code>
                      </span>
                    </div>

                    <div class="col-md-2 mb-5">
                      <span class="bg-fuse-blue d-block px-4 py-4 text-white border">
                        <strong class="d-block">Primary</strong>
                        <small class="mb-4 d-block">
                          <i>$primary</i>
                          <span class="font-size-12 d-block mb-1">#40A8F5</span>
                        </small>
                        <code>.bg-primary</code>
                      </span>
                    </div>

                    <div class="col-md-2 mb-5">
                      <span class="bg-fuse-blue d-block px-4 py-4 text-white border">
                        <strong class="d-block">Primary</strong>
                        <small class="mb-4 d-block">
                          <i>$primary</i>
                          <span class="font-size-12 d-block mb-1">#40A8F5</span>
                        </small>
                        <code>.bg-primary</code>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            
          </div>
        </div>
      </div>
    </div>

  @endwhile
@endsection
