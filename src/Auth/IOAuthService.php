<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Interface for the authorization service.
 */
abstract class IOAuthService
{
    /** 
     * Implementations of this abstract method must call the authorization server with the  
     * $oauthRequestParameters, must deserialize the response, and must return OAuthTokens. 
     * 
     * @param OAuthRequestParameters $oauthRequestParameters
     * @param ApiEnvironment $environment
     * @param bool $requireLiveConnect
     */
    abstract function GetAccessTokens(OAuthRequestParameters $oauthRequestParameters, $environment, $requireLiveConnect);
}
