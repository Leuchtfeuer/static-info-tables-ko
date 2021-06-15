<?php
defined('TYPO3_MODE') || die;

call_user_func(
    function($extensionKey) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extensionKey . '/Configuration/TypoScript/Extbase/setup.typoscript">');

        if (version_compare(TYPO3_branch, '9.5', '>=')) {
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
                '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extensionKey . '/Configuration/PageTSconfig/Suggest.tsconfig">'
            );
        } else {
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
                '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extensionKey . '/Configuration/PageTSconfig/Suggest_prior_9.tsconfig">'
            );
        }

    }, \Bitmotion\StaticInfoTablesKo\Extension::EXTENSION_KEY
);
