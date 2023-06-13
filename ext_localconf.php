<?php

use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') || die();

(function () {
    // register icons
    $iconRegistry = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'tx-bootstrapgrids-col2',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        ['source' => 'EXT:bootstrap_grids/Resources/Public/Icons/gridlayout_col2.gif']
    );
    $iconRegistry->registerIcon(
        'tx-bootstrapgrids-col3',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        ['source' => 'EXT:bootstrap_grids/Resources/Public/Icons/gridlayout_col3.gif']
    );
    $iconRegistry->registerIcon(
        'tx-bootstrapgrids-col4',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        ['source' => 'EXT:bootstrap_grids/Resources/Public/Icons/gridlayout_col4.gif']
    );
    $iconRegistry->registerIcon(
        'tx-bootstrapgrids-simpletabs',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        ['source' => 'EXT:bootstrap_grids/Resources/Public/Icons/grid_simpletabs.png']
    );
    $iconRegistry->registerIcon(
        'tx-bootstrapgrids-tabs4',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        ['source' => 'EXT:bootstrap_grids/Resources/Public/Icons/grid_tabs4.png']
    );
    $iconRegistry->registerIcon(
        'tx-bootstrapgrids-tabs6',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        ['source' => 'EXT:bootstrap_grids/Resources/Public/Icons/grid_tabs6.png']
    );
    $iconRegistry->registerIcon(
        'tx-bootstrapgrids-accordion',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        ['source' => 'EXT:bootstrap_grids/Resources/Public/Icons/grid_accordion.png']
    );
    $iconRegistry->registerIcon(
        'tx-bootstrapgrids-slider',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        ['source' => 'EXT:bootstrap_grids/Resources/Public/Icons/grid_slider.png']
    );

    // Add pageTS config
    $versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
    if ($versionInformation->getMajorVersion() < 12) {
        ExtensionManagementUtility::addPageTSConfig('@import "EXT:bootstrap_grids/Configuration/page.tsconfig"');
    }
    // Only if enabled
    $enableGridSimpleRow = GeneralUtility::makeInstance(ExtensionConfiguration::class)
        ->get('bootstrap_grids', 'enableGridSimpleRow');
    if ($enableGridSimpleRow) {
        ExtensionManagementUtility::addPageTSConfig(
            '@import "EXT:bootstrap_grids/Configuration/TsConfig/Page/simpleRow.tsconfig"'
        );
    }
})();
