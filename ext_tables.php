<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wdbcontact_domain_model_organization', 'EXT:wdb_contact/Resources/Private/Language/locallang_csh_tx_wdbcontact_domain_model_organization.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wdbcontact_domain_model_organization');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wdbcontact_domain_model_person', 'EXT:wdb_contact/Resources/Private/Language/locallang_csh_tx_wdbcontact_domain_model_person.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wdbcontact_domain_model_person');
});
