<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'WdbContact',
        'Organizations',
        [
            \Wdb\WdbContact\Controller\OrganizationController::class => 'list, show',
        ],
        // non-cacheable actions
        [
            \Wdb\WdbContact\Controller\OrganizationController::class => '',
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'WdbContact',
        'Person',
        [
            \Wdb\WdbContact\Controller\PersonController::class => 'list, show',
        ],
        // non-cacheable actions
        [
            \Wdb\WdbContact\Controller\PersonController::class => '',
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    organizations {
                        iconIdentifier = wdb_contact-plugin-organizations
                        title = LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdb_contact_organizations.name
                        description = LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdb_contact_organizations.description
                        tt_content_defValues {
                            CType = list
                            list_type = wdbcontact_organizations
                        }
                    }
                    person {
                        iconIdentifier = wdb_contact-plugin-person
                        title = LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdb_contact_person.name
                        description = LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdb_contact_person.description
                        tt_content_defValues {
                            CType = list
                            list_type = wdbcontact_person
                        }
                    }
                }
                show = *
            }
       }'
    );

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'wdb_contact-plugin-organizations',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:wdb_contact/Resources/Public/Icons/user_plugin_organizations.svg']
    );
    $iconRegistry->registerIcon(
        'wdb_contact-plugin-person',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:wdb_contact/Resources/Public/Icons/user_plugin_person.svg']
    );
});
