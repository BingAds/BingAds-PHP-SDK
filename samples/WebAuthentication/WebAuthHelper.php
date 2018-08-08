<?php

namespace Microsoft\BingAds\Samples;

/** 
 * Defines global settings that you can use for testing your application.
 * Your production implementation may vary, and you should always store sensitive information securely.
 */
final class WebAuthHelper {

    const DeveloperToken = 'BBD37VB98'; // For sandbox use BBD37VB98
    const ApiEnvironment = ApiEnvironment::Sandbox;
    const ClientId = 'ClientIdGoesHere'; 
    const ClientSecret = 'ClientSecretGoesHere'; 
    const RedirectUri = 'RedirectUriGoesHere'; 
}
