<?php

return [
    'company_name' => 'Protelekom',
    'company_owner' => 'Grzegorz Romański',
    // 'company_logo' => 'https://woda-kolonska.pl/storage/img/woda_kolonska_logo.png',
    // 'company_section' => 'beauty',
    'company_description' => 'Telefony komórkowe, smartfony, tablety i alkomaty',
    'site_keywords' => 'Telefony komórkowe, gsm, smartfony, tablety, alkomaty, serwis telefonów komórkowych',
    'account_number' => '12345678901234567890',
    'mail' => 'arturmilkowsky@gmail.com', //'protelekom.firma@gmail.com',  // 'poczta@protelekom.pl',
    'company_address' => [
        'street' => 'Łukasiewicza 4',
        'city' => 'Oświęcim',
        'zip_code' => '32-600',
        'voivodeship' => 'małopolskie',
        'phone' => '+48 33 843 66 92',
    ],
    'facebook' => 'https://www.facebook.com/Protelekom-serwis-102431194534407',
    // 'instagram' => 'https://www.instagram.com/woda_kolonska_pl/',
    // 'twitter' => '',
    'currency' => 'zł',
    'delivery' => [
        'polish_post_office' => [
            'name' => 'Poczta Polska',
            'methods' => [
                'list polecony',
                'paczka'
            ],
            'cost' => [
                '1' => 15,
                '2' => 15,
                '3' => 15,
                '4' => 15,
                '5' => 20,
                'more' => 45
            ],
        ],
        'methods_of_payment' => ['prepayment' => 'przedpłata na konto']
    ],
    'ui' => [
        'backend' => [
            'alerts' => [
                'success' => 'alert-success',
                'warning' => 'alert-warning',
                'danger' => 'alert-danger',
            ],
            'messages' => [
                'added' => 'Dodano',
                'not_added' => 'Nie dodano',
                'changed' => 'Zmieniono',
                'not_changed' => 'Nie zmieniono',
                'removed' => 'Usunięto',
                'not removed' => 'Nie usunięto',
                'file_uploaded' => 'Plik przesłano',
                'removed_basket' => 'Usunięto cały koszyk',
            ]
        ],
    ],
    'storage' => [
        'products_storage_path' => 'storage/img/products',
        'types_storage_path' => 'storage/img/products/types',
        'products_images_path' => 'public/img/products',
        'types_images_path' => 'public/img/products/types',
        'posts_images_path' => 'public/img/posts',
        'posts_storage_path' => '/img/posts',
    ]
];
