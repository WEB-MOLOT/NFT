<?php

use App\Support\Navigation\ManageMenu;

return [
    [
        'name' => 'Dashboard',
        'route' => 'index',
        'icon' => 'fas fa-tachometer-alt',
        'type' => ManageMenu::TYPE_ITEM
    ],

    [
        'name' => 'Users',
        'route' => 'users.index',
        'aliases' => ['users.create', 'users.edit'],
        'icon' => 'fas fa-user',
        'type' => ManageMenu::TYPE_ITEM
    ],

    [
        'name' => 'Content',
        'type' => ManageMenu::TYPE_HEADER
    ],

    [
        'name' => 'Pages',
        'route' => 'pages.index',
        'aliases' => ['pages.create', 'pages.edit'],
        'icon' => 'fas fa-file',
        'type' => ManageMenu::TYPE_ITEM
    ]
];
