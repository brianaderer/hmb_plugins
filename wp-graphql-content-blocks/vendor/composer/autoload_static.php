<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2cc12698747b8c0bb244875cc1fed0b
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\ContentBlocks\\' => 24,
        ),
        'D' => 
        array (
            'DiDom\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\ContentBlocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'DiDom\\' => 
        array (
            0 => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DiDom\\ClassAttribute' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/ClassAttribute.php',
        'DiDom\\Document' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/Document.php',
        'DiDom\\DocumentFragment' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/DocumentFragment.php',
        'DiDom\\Element' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/Element.php',
        'DiDom\\Encoder' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/Encoder.php',
        'DiDom\\Errors' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/Errors.php',
        'DiDom\\Exceptions\\InvalidSelectorException' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/Exceptions/InvalidSelectorException.php',
        'DiDom\\Node' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/Node.php',
        'DiDom\\Query' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/Query.php',
        'DiDom\\StyleAttribute' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/StyleAttribute.php',
        'WPGraphQLContentBlocks' => __DIR__ . '/../..' . '/includes/WPGraphQLContentBlocks.php',
        'WPGraphQL\\ContentBlocks\\Blocks\\Block' => __DIR__ . '/../..' . '/includes/Blocks/Block.php',
        'WPGraphQL\\ContentBlocks\\Blocks\\CoreButton' => __DIR__ . '/../..' . '/includes/Blocks/CoreButton.php',
        'WPGraphQL\\ContentBlocks\\Blocks\\CoreButtons' => __DIR__ . '/../..' . '/includes/Blocks/CoreButtons.php',
        'WPGraphQL\\ContentBlocks\\Blocks\\CoreCode' => __DIR__ . '/../..' . '/includes/Blocks/CoreCode.php',
        'WPGraphQL\\ContentBlocks\\Blocks\\CoreColumn' => __DIR__ . '/../..' . '/includes/Blocks/CoreColumn.php',
        'WPGraphQL\\ContentBlocks\\Blocks\\CoreColumns' => __DIR__ . '/../..' . '/includes/Blocks/CoreColumns.php',
        'WPGraphQL\\ContentBlocks\\Blocks\\CoreHeading' => __DIR__ . '/../..' . '/includes/Blocks/CoreHeading.php',
        'WPGraphQL\\ContentBlocks\\Blocks\\CoreImage' => __DIR__ . '/../..' . '/includes/Blocks/CoreImage.php',
        'WPGraphQL\\ContentBlocks\\Blocks\\CoreList' => __DIR__ . '/../..' . '/includes/Blocks/CoreList.php',
        'WPGraphQL\\ContentBlocks\\Blocks\\CoreParagraph' => __DIR__ . '/../..' . '/includes/Blocks/CoreParagraph.php',
        'WPGraphQL\\ContentBlocks\\Blocks\\CoreQuote' => __DIR__ . '/../..' . '/includes/Blocks/CoreQuote.php',
        'WPGraphQL\\ContentBlocks\\Blocks\\CoreSeparator' => __DIR__ . '/../..' . '/includes/Blocks/CoreSeparator.php',
        'WPGraphQL\\ContentBlocks\\Data\\ContentBlocksResolver' => __DIR__ . '/../..' . '/includes/Data/ContentBlocksResolver.php',
        'WPGraphQL\\ContentBlocks\\Field\\BlockSupports\\Anchor' => __DIR__ . '/../..' . '/includes/Field/BlockSupports/Anchor.php',
        'WPGraphQL\\ContentBlocks\\Registry\\Registry' => __DIR__ . '/../..' . '/includes/Registry/Registry.php',
        'WPGraphQL\\ContentBlocks\\Type\\InterfaceType\\EditorBlockInterface' => __DIR__ . '/../..' . '/includes/Type/InterfaceType/EditorBlockInterface.php',
        'WPGraphQL\\ContentBlocks\\Type\\InterfaceType\\PostTypeBlockInterface' => __DIR__ . '/../..' . '/includes/Type/InterfaceType/PostTypeBlockInterface.php',
        'WPGraphQL\\ContentBlocks\\Type\\Scalar\\Scalar' => __DIR__ . '/../..' . '/includes/Type/Scalar/Scalar.php',
        'WPGraphQL\\ContentBlocks\\Utilities\\DOMHelpers' => __DIR__ . '/../..' . '/includes/Utilities/DomHelpers.php',
        'WPGraphQL\\ContentBlocks\\Utilities\\WPGraphQLHelpers' => __DIR__ . '/../..' . '/includes/Utilities/WPGraphqlHelpers.php',
        'WPGraphQL\\ContentBlocks\\Utilities\\WPHelpers' => __DIR__ . '/../..' . '/includes/Utilities/WPHelpers.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2cc12698747b8c0bb244875cc1fed0b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2cc12698747b8c0bb244875cc1fed0b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf2cc12698747b8c0bb244875cc1fed0b::$classMap;

        }, null, ClassLoader::class);
    }
}
