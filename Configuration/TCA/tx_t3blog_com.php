<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:t3extblog/Resources/Private/Language/locallang_db.xlf:tx_t3blog_com',
        'label' => 'email',
        'label_alt' => 'title, author, fk_post',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate DESC',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
            'fe_group' => 'fe_group',
        ],
        'typeicon_classes' => [
            'default' => 'extensions-t3extblog-comment',
        ],
        'dividers2tabs' => true,
        'searchFields' => 'title,author,email,website,text',
    ],
    'columns' => [
        'crdate' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'tstamp' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'deleted' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => '0',
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038),
                ],
            ],
        ],
        'fe_group' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'size' => 7,
                'maxitems' => 20,
                'items' => [
                    ['', 0],
                    ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login', -1],
                    ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login', -2],
                    ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups', '--div--']
                ],
                'exclusiveKeys' => '-1,-2',
                'foreign_table' => 'fe_groups',
                'foreign_table_where' => 'ORDER BY fe_groups.title',
            ],
        ],
        'title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:t3extblog/Resources/Private/Language/locallang_db.xlf:tx_t3blog_com.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
            ],
        ],
        'author' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:t3extblog/Resources/Private/Language/locallang_db.xlf:tx_t3blog_com.author',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'required',
            ],
        ],
        'email' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:t3extblog/Resources/Private/Language/locallang_db.xlf:tx_t3blog_com.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'email',
                'softref' => 'email',
            ],
        ],
        'website' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:t3extblog/Resources/Private/Language/locallang_db.xlf:tx_t3blog_com.website',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'softref' => 'typolink,url',
            ],
        ],
        'date' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:t3extblog/Resources/Private/Language/locallang_db.xlf:tx_t3blog_com.date',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0',
            ],
        ],
        'text' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:t3extblog/Resources/Private/Language/locallang_db.xlf:tx_t3blog_com.text',
            'config' => [
                'type' => 'text',
                'cols' => 30,
                'rows' => 5,
                'enableRichtext' => '1',
                'richtextConfiguration' => 'default',
                'softref' => 'typolink_tag,email[subst],url',
            ],
        ],
        'approved' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:t3extblog/Resources/Private/Language/locallang_db.xlf:tx_t3blog_com.approved',
            'config' => [
                'type' => 'check',
            ],
        ],
        'spam' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:t3extblog/Resources/Private/Language/locallang_db.xlf:tx_t3blog_com.spam',
            'config' => [
                'type' => 'check',
            ],
        ],
        'fk_post' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:t3extblog/Resources/Private/Language/locallang_db.xlf:tx_t3blog_com.fk_post',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_t3blog_post',
                'foreign_table_where' => ' AND tx_t3blog_post.deleted = 0 AND tx_t3blog_post.pid=###CURRENT_PID###',
                'minitems' => 1,
                'maxitems' => 1,
                'size' => 1,
                'wizards' => [
                    'add' => [
                        'type' => 'suggest',
                    ],
                ],
            ],
        ],
        'mails_sent' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:t3extblog/Resources/Private/Language/locallang_db.xlf:tx_t3blog_com.mails_sent',
            'config' => [
                'type' => 'check',
            ],
        ],
        'privacy_policy_accepted' => [
            'label' => 'LLL:EXT:t3extblog/Resources/Private/Language/locallang_db.xlf:tx_t3blog_com.privacy_policy_accepted',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => '
            --div--;LLL:EXT:t3extblog/Resources/Private/Language/locallang_db.xlf:tx_t3blog_com.tabs.general,
                --palette--;;relation,
                --palette--;;main,
                --palette--;;contact,
                text,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access'
        ],
    ],
    'palettes' => [
        'relation' => [
            'showitem' => 'fk_post,date',
        ],
        'main' => [
            'showitem' => 'title,author',
        ],
        'contact' => [
            'showitem' => 'email,website',
        ],
        'visibility' => [
            'showitem' => 'approved, spam, --linebreak--, hidden, privacy_policy_accepted',
        ],
        'access' => [
            'showitem' => '
				starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.starttime_formlabel,
				endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.endtime_formlabel,
				--linebreak--, fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_group_formlabel',
        ],
    ],
];
