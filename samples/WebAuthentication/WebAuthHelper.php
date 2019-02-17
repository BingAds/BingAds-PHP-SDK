<?php

namespace Microsoft\BingAds\Samples;

require_once "./vendor/autoload.php";

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ApiEnvironment;

/** 
* Defines global settings that you can use for testing your application.
* Your production implementation may vary, and you should always store sensitive information securely.
*/
final class WebAuthHelper {

    const DeveloperToken = 'DeveloperTokenGoesHere';
    const ApiEnvironment = ApiEnvironment::Production;
    const ClientId = 'ClientIdGoesHere'; 
    const ClientSecret = 'ClientSecretGoesHere'; 
    const RedirectUri = '/OAuth2Callback.php'; 

    static function GetApiEnvironment() 
    {
        return WebAuthHelper::ApiEnvironment;
    }
}