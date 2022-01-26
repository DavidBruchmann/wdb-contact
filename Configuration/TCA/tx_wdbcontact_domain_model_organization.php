<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,division,street,house_number,city,zip,country,email,www,telephone,mobile,skype,slack,whats_app,additional_text,kununu,linkedin,xing,twitter,facebook,instagram,github,gitlab,bitbucket',
        'iconfile' => 'EXT:wdb_contact/Resources/Public/Icons/tx_wdbcontact_domain_model_organization.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, division, street, house_number, city, zip, country, email, www, telephone, mobile, skype, slack, whats_app, additional_text, kununu, linkedin, xing, twitter, facebook, instagram, github, gitlab, bitbucket, persons, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_wdbcontact_domain_model_organization',
                'foreign_table_where' => 'AND {#tx_wdbcontact_domain_model_organization}.{#pid}=###CURRENT_PID### AND {#tx_wdbcontact_domain_model_organization}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'division' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.division',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'street' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.street',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'house_number' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.house_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'city' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.city',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'zip' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.zip',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'country' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.country',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'www' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.www',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'telephone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.telephone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'mobile' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.mobile',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'skype' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.skype',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'slack' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.slack',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'whats_app' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.whats_app',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'additional_text' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.additional_text',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            
        ],
        'kununu' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.kununu',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'linkedin' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.linkedin',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'xing' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.xing',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'twitter' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.twitter',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'facebook' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.facebook',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'instagram' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.instagram',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'github' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.github',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'gitlab' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.gitlab',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'bitbucket' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.bitbucket',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'persons' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wdb_contact/Resources/Private/Language/locallang_db.xlf:tx_wdbcontact_domain_model_organization.persons',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_wdbcontact_domain_model_person',
                'MM' => 'tx_wdbcontact_organization_person_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
            
        ],
    
    ],
];
