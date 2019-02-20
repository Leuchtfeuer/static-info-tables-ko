<?php
declare(strict_types=1);
defined('TYPO3_MODE') || die;

$initialize = function ($dataSetName) {
    $additionalFields = [
        'cn_short_en' => 'cn_short_ko',
    ];

    \Bitmotion\StaticInfoTablesKo\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
};
$initialize('static_countries');
unset($initialize);
