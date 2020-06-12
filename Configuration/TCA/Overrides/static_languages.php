<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (KO)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

defined('TYPO3_MODE') || die;

call_user_func(
    function ($additionalFields, $dataSetName) {
        \Bitmotion\StaticInfoTablesKo\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    ['lg_name_en' => 'lg_name_ko'],
    'static_languages'
);
