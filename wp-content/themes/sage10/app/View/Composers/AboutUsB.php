<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class AboutUsB extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.about-us-b',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $aboutBlock = get_field('about_us_b') ?? false;
        $aboutBlockContent = $aboutBlock['about_us_content'] ?? false;
        $aboutBlockMedia = $aboutBlock['about_us_media_right'] ?? false;
        $aboutBlockContentHeading = $aboutBlockContent['about_us_content_heading'] ?? false;
        $aboutBlockContentDescription = $aboutBlockContent['about_us_block_description'] ?? false;
        $aboutBlockContentButton = $aboutBlockContent['about_us_content_button'] ?? false;
        $aboutBlockMediaTitle = $aboutBlockMedia['about_us_block_media_title'] ?? false;
        $aboutBlockMediaImage = $aboutBlockMedia['about_us_block_media_image'] ?? false;
        $aboutBlockMediaLink = $aboutBlockMedia['about_us_content_media_link'] ?? false;

        return [
            'aboutBlockContentHeading' => $aboutBlockContentHeading,
            'aboutBlockContentDescription' => $aboutBlockContentDescription,
            'aboutBlockContentButton' => $aboutBlockContentButton,
            'aboutBlockMediaTitle' => $aboutBlockMediaTitle,
            'aboutBlockMediaImage' => $aboutBlockMediaImage,
            'aboutBlockMediaLink' => $aboutBlockMediaLink
        ];
    }

}
