# BingAds-PHP-SDK

You can develop Bing Ads applications with any programming language that supports web services. The Bing Ads PHP Software Development Kit (SDK) enhances the experience of developing Bing Ads applications with the PHP programming language. The SDK includes a proxy to all Bing Ads API web services and abstracts low level details of authentication with OAuth. The SDK follows the PSR-4 standard to support autoloading classes from file paths, so that you don’t have to include each classes manually. Your application can simply require autoload.php: `require_once __DIR__ . "/vendor/autoload.php";`

## Installing the SDK
You can install the Bing Ads PHP SDK using the [Composer](https://getcomposer.org/doc/00-intro.md#introduction) package manager to fetch from [Packagist](https://packagist.org/packages/microsoft/bingads). We recommend using Composer as a dependency manager so that you don’t have to manually download the proxy classes. 

1. Download and install [Composer](https://getcomposer.org/doc/00-intro.md#introduction). Microsoft Windows users should also add composer.phar to your *PATH* variable.

2. Open a command prompt and type `composer require microsoft/bingads`. 

   **Note:** Windows users who did not add *composer.phar* to the *PATH* will need to type `php composer.phar require microsoft/bingads` instead.

3. To get updates going forward, type `composer update`. If any updates are available at packagist, composer will install the latest version.

For more information see [Get Started Using PHP with Bing Ads Services](https://docs.microsoft.com/en-us/bingads/guides/get-started-php).
