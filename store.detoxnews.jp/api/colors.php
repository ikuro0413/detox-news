<?php
declare(strict_types=1);

// 商品ごとのカラー。key => 表示名と画像ファイル名。
// tools/build-catalog.mjs が catalog/products.tsv から生成する。直接書き換えない。
return [
    'off-box' => [
        'white' => ['label' => 'ホワイト', 'image' => 'off-box-centered.png'],
    ],
    'charge-lock-case' => [
        'green' => ['label' => '抹茶グリーン', 'image' => 'charge-lock-case-green.jpg'],
    ],
];
