                @if (!empty($image) && is_array($image))
                <div class="slider-cards__media col-12 col-md-6 pe-lg-8">
                    <figure>
                        <img src="{{ $image['url'] }}" alt="{!! $image['alt'] !!}" class="slider-cards__image" />
                    </figure>
                </div>
                @endif

                <div class="slider-cards__content col-12 col-md-6 p-lg-0 ps-lg-8">
                    <div class="p-6 p-md-10 ps-lg-0 bg-white d-flex flex-column justify-content-center h-100 gap-10">

                        @if ($slideTitle)
                        <p class="slider-cards__content-title h5 m-0">
                            {!! $slideTitle !!}
                        </p>
                        @endif

                        @if ($slideDescription)
                        <p class="slider-cards__content-desc body-text__xl">
                            {!! $slideDescription !!}
                        </p>
                        @endif

                    </div>
                </div>
