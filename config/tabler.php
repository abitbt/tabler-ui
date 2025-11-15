<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Logo Configuration
    |--------------------------------------------------------------------------
    |
    | Configure logo display options. Set custom logo paths to override
    | the default Tabler logo.
    |
    */
    'logo' => [
        // Path to custom logos (set to override the default Tabler logo)
        'small' => 'images/logo-small.svg', // 32x32 logo for compact layouts
        'full' => 'images/logo.svg',  // Full logo for standard layouts

        // Use embedded SVG if no custom logo is provided
        'fallback_svg' => true,

        // Show application name next to logo
        'show_title' => false,
    ],
];
