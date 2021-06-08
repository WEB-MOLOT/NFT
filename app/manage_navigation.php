<?php

use App\Support\Navigation\ManageMenu;

return [
    [
        'name' => 'Dashboard',
        'route' => 'pages.index',
        'icon' => 'fas fa-tachometer-alt',
        'type' => ManageMenu::TYPE_ITEM
    ],

    [
        'name' => 'Users',
        'route' => 'resources.users.index',
        'aliases' => ['resources.users.create', 'resources.users.edit'],
        'icon' => 'fas fa-user',
        'type' => ManageMenu::TYPE_ITEM
    ],

    [
        'name' => 'Content',
        'type' => ManageMenu::TYPE_HEADER
    ],

    [
        'name' => 'Pages',
        'route' => 'resources.pages.index',
        'aliases' => ['resources.pages.create', 'resources.pages.edit'],
        'icon' => 'fas fa-file',
        'type' => ManageMenu::TYPE_ITEM
    ],

    [
        'name' => 'Listings',
        'route' => 'resources.listings.index',
        'aliases' => ['resources.listings.create', 'resources.listings.edit'],
        'icon' => 'fas fa-dumbbell',
        'type' => ManageMenu::TYPE_ITEM
    ],

    [
        'name' => 'NFT',
        'type' => ManageMenu::TYPE_HEADER
    ],

    [
        'name' => 'Categories',
        'route' => 'resources.categories.index',
        'aliases' => ['resources.categories.create', 'resources.categories.edit'],
        'icon' => 'fas fa-list-alt',
        'type' => ManageMenu::TYPE_ITEM
    ],

    [
        'name' => 'Projects',
        'route' => 'resources.projects.index',
        'aliases' => ['resources.projects.edit'],
        'icon' => 'fas fa-project-diagram',
        'type' => ManageMenu::TYPE_ITEM
    ],
];
