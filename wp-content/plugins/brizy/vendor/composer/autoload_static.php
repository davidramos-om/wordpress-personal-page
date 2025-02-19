<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf11a338d507ea6745de52a0099ffaea
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '8ec4222c68e580a23520eef4abe4380f' => __DIR__ . '/..' . '/shortpixel/shortpixel-php/lib/ShortPixel.php',
        'c93afce03290e70ec0d051b69a50edb0' => __DIR__ . '/..' . '/shortpixel/shortpixel-php/lib/ShortPixel/Exception.php',
    );

    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'enshrined\\svgSanitize\\' => 22,
        ),
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Dotenv\\' => 25,
            'ShortPixel\\' => 11,
        ),
        'B' => 
        array (
            'BrizyMerge\\' => 11,
            'BrizyMergeTests\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'enshrined\\svgSanitize\\' => 
        array (
            0 => __DIR__ . '/..' . '/enshrined/svg-sanitize/src',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dotenv',
        ),
        'ShortPixel\\' => 
        array (
            0 => __DIR__ . '/..' . '/shortpixel/shortpixel-php/lib/ShortPixel',
        ),
        'BrizyMerge\\' => 
        array (
            0 => __DIR__ . '/..' . '/bagrinsergiu/brizy-merge-page-assets/lib',
        ),
        'BrizyMergeTests\\' => 
        array (
            0 => __DIR__ . '/..' . '/bagrinsergiu/brizy-merge-page-assets/tests',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'G' => 
        array (
            'Gaufrette' => 
            array (
                0 => __DIR__ . '/..' . '/knplabs/gaufrette/src',
            ),
        ),
        'B' => 
        array (
            'Brizy' => 
            array (
                0 => __DIR__ . '/..' . '/bagrinsergiu/brizy-migration-utils/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'pQuery' => __DIR__ . '/..' . '/tburry/pquery/pQuery.php',
        'pQuery\\AspEmbeddedNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\CSSQueryTokenizer' => __DIR__ . '/..' . '/tburry/pquery/gan_selector_html.php',
        'pQuery\\CdataNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\CommentNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\ConditionalTagNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\DoctypeNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\DomNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\EmbeddedNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\Html5Parser' => __DIR__ . '/..' . '/tburry/pquery/gan_parser_html.php',
        'pQuery\\HtmlFormatter' => __DIR__ . '/..' . '/tburry/pquery/gan_formatter.php',
        'pQuery\\HtmlParser' => __DIR__ . '/..' . '/tburry/pquery/gan_parser_html.php',
        'pQuery\\HtmlParserBase' => __DIR__ . '/..' . '/tburry/pquery/gan_parser_html.php',
        'pQuery\\HtmlSelector' => __DIR__ . '/..' . '/tburry/pquery/gan_selector_html.php',
        'pQuery\\IQuery' => __DIR__ . '/..' . '/tburry/pquery/IQuery.php',
        'pQuery\\TextNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\TokenizerBase' => __DIR__ . '/..' . '/tburry/pquery/gan_tokenizer.php',
        'pQuery\\XML2ArrayParser' => __DIR__ . '/..' . '/tburry/pquery/gan_xml2array.php',
        'pQuery\\XmlNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf11a338d507ea6745de52a0099ffaea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf11a338d507ea6745de52a0099ffaea::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitbf11a338d507ea6745de52a0099ffaea::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitbf11a338d507ea6745de52a0099ffaea::$classMap;

        }, null, ClassLoader::class);
    }
}
