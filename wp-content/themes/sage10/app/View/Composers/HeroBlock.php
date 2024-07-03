<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class HeroBlock extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.hero-block',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $heroBlock = get_field('hero_block') ?? false;
        $imageGroup = $heroBlock['hero_block_image_group'] ?? false;
        $heroImageFirst = $imageGroup['heroImage_1'] ?? false;
        $heroImageSecond = $imageGroup['heroImage_2'] ?? false;
        $heroImageSecondForTablet = $imageGroup['heroImage_tab_2'] ?? false;
        $heroImageThird = $imageGroup['heroImage_3'] ?? false;
        $headerBlockDesktopText = $heroBlock['hero_block_desktop_text'] ?? false;
        $headerBlockDesktopTextHeading = $headerBlockDesktopText['hero_block_desktop_heading'] ?? false;
        $headerBlockDesktopTextDescription = $headerBlockDesktopText['hero_block_desktop_description'] ?? false;
        $headerBlockDesktopTextLink = $headerBlockDesktopText['hero_block_desktop_button'] ?? false;
        $headerBlockMobileText = $heroBlock['hero_block_mobile_text'] ?? false;
        $headerBlockMobileTextHeading = $headerBlockMobileText['hero_block_mobile_heading'] ?? false;
        $headerBlockMobileTextDescription = $headerBlockMobileText['hero_block_mobile_description'] ?? false;

        return [
            'heroImageFirst' => $heroImageFirst,
            'heroImageSecond' => $heroImageSecond,
            'heroImageSecondForTablet' => $heroImageSecondForTablet,
            'heroImageThird' => $heroImageThird,
            'headerBlockDesktopTextHeading' => $headerBlockDesktopTextHeading,
            'headerBlockDesktopTextDescription' => $headerBlockDesktopTextDescription,
            'headerBlockDesktopTextLink' => $headerBlockDesktopTextLink,
            'headerBlockMobileText' => $headerBlockMobileText,
            'headerBlockMobileTextHeading' => $headerBlockMobileTextHeading,
            'headerBlockMobileTextDescription' => $headerBlockMobileTextDescription,
        ];
    }
}
