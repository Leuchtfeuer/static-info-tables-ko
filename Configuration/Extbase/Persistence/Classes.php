<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (KO)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Max Rösch <m.roesch@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

return [
    \SJBR\StaticInfoTables\Domain\Model\Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameKo' => [
                'fieldName' => 'cn_short_ko',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Language::class => [
        'tableName' => 'static_languages',
        'properties' => [
            'nameKo' => [
                'fieldName' => 'lg_name_ko',
            ],
        ],
    ],
];
