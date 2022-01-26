<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'WdbContact',
    'Organizations',
    'Organizations'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'WdbContact',
    'Person',
    'Person'
);
