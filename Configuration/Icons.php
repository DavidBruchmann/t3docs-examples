<?php

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'tx_examples-dummy' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:examples/Resources/Public/Images/Flask.svg',
    ],
    'tx_examples-haiku' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:examples/Resources/Public/Images/Haiku.svg',
    ],
    'tx_examples-error-plugin' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:examples/Resources/Public/Images/ErrorWizard.svg',
    ],
    'tx_examples-page-tree' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:examples/Resources/Public/Images/PageTree.svg',
    ],
    'tx_examples-archive-page' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:examples/Resources/Public/Images/ArchivePage.svg',
    ],
    'tx_examples-backend-module' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:examples/Resources/Public/Images/BackendModule.svg',
    ],
];
