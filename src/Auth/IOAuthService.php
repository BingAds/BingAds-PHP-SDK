<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Interface for the authorization service.
 */
abstract class IOAuthService
{
    /**
     * Implementations of this abstract method must call the authorization server with the oauthRequestParameters passed in,
     * deserialize the response, and return back OAuth tokens.
     *
     * @param OAuthRequestParameters $oauthParameters
     * @param string $environment
     */
    abstract function GetAccessTokens(OAuthRequestParameters $oauthParameters, $environment);
}
