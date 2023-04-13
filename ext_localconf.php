<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'VncExample1',
        'Dispatching1',
        [
            \Vancado\VncExample1\Controller\DispatchController::class => 'show'
        ],
        // non-cacheable actions
        [
            
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    dispatching1 {
                        iconIdentifier = vnc_example1-plugin-dispatching1
                        title = LLL:EXT:vnc_example1/Resources/Private/Language/locallang_db.xlf:tx_vnc_example1_dispatching1.name
                        description = LLL:EXT:vnc_example1/Resources/Private/Language/locallang_db.xlf:tx_vnc_example1_dispatching1.description
                        tt_content_defValues {
                            CType = list
                            list_type = vncexample1_dispatching1
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
