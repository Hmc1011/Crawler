<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94f962281c3c931eab6cdc06851bcce9
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '6648cb078c0e92a79ed4c0ca12afb102' => __DIR__ . '/../..' . '/Router/Route.php',
        'c34204101e63573c2dbb9f34243766d0' => __DIR__ . '/../..' . '/App/Helpers/Curl/Curl.php',
        '71bb698139bb3280a338ff036da001b7' => __DIR__ . '/../..' . '/App/Controllers/IndexController.php',
        '6d81413a45b89a59d500e3d537088489' => __DIR__ . '/../..' . '/App/Helpers/Parser/Base/Parser.php',
        '80687276062d0638ac878e3bb21bdc0f' => __DIR__ . '/../..' . '/App/Helpers/Parser/DanTriParser.php',
        'bb199b382aa28ac460a1d851a2a06fd7' => __DIR__ . '/../..' . '/App/Helpers/Parser/VietNamNetParser.php',
        '73378c40ea2bb055366ec88133975a89' => __DIR__ . '/../..' . '/App/Helpers/Parser/VNexpressParser.php',
        '615e2a9989b2f7d7c06c14eee8104b43' => __DIR__ . '/../..' . '/App/Models/Article.php',
        '640e153a810432a508d44b8301d26b42' => __DIR__ . '/../..' . '/App/Helpers/Parser/ParserFactory.php',
        '193b18e4020ed438103313856ce29336' => __DIR__ . '/../..' . '/App/Helpers/Facade/Facade.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'PhpOption\\' => 10,
        ),
        'G' => 
        array (
            'GrahamCampbell\\ResultType\\' => 26,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'GrahamCampbell\\ResultType\\' => 
        array (
            0 => __DIR__ . '/..' . '/graham-campbell/result-type/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94f962281c3c931eab6cdc06851bcce9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94f962281c3c931eab6cdc06851bcce9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit94f962281c3c931eab6cdc06851bcce9::$classMap;

        }, null, ClassLoader::class);
    }
}
