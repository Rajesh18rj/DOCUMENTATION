<?php

return [
    'code_theme'     => env('UI_CODE_THEME', 'dark'),
    'fav'           => env('UI_FAV_ICON', 'fav.png'),
    'fa_v4_shims'   => env('UI_FA_V4_SHIMS', true),
    'show_side_bar' => env('UI_SHOW_SIDE_BAR', true),
    'colors'        => [
        'primary'   => env('UI_COLOR_PRIMARY', '#f54257'),
        'secondary' => env('UI_COLOR_SECONDARY', '#2b9cf2'),
    ],
    'theme_order'   => explode(',', env('UI_THEME_ORDER', 'LaRecipeDarkTheme,customTheme')),
];
