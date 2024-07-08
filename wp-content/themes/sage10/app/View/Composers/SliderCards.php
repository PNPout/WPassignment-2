<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SliderCards extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.slider-cards',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $sliderCards = get_field('slider_cards') ?? false;
        $sliderSectionTitle = $sliderCards['slider_section_title'] ?? false;
        $sliderCard = $sliderCards['slider_card'] ?? false;
         
        return [
            'sliderCard' => $sliderCard,
            'sliderSectionTitle' => $sliderSectionTitle
        ];
    }
}
