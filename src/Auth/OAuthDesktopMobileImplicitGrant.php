<?php

namespace Microsoft\BingAds\Auth;

use Exception;

/** 
 * Represents an OAuth authorization object implementing the implicit grant flow for use in a desktop or mobile application. 
 */
class OAuthDesktopMobileImplicitGrant extends OAuthAuthorization
{       
    /** 
     * An opaque value used by the client to maintain state between the request and callback. 
     */
    public $State;
    
    public function __construct() {
        parent::__construct();
        $this->Type = 'OAuthDesktopMobileImplicitGrant';      
    }

    /** 
     * Includes the state. 
     *
     * @param string $state
     * @return OAuthDesktopMobileImplicitGrant this builder
     */
    public function withState($state) {
        $this->State = $state;
        return $this;
    }

    /** 
     * Gets the Microsoft Account authorization endpoint where the user should be navigated to give their consent.
     * 
     * @return string
     */
    public function GetAuthorizationEndpoint(){

        $oauthUrlParameters = (new OAuthUrlParameters())
            ->withClientId($this->ClientId)
            ->withResponseType("token")
            ->withRedirectUri($this->RedirectUri)
            ->withState($this->State);

        return UriOAuthService::GetAuthorizationEndpoint(
            $oauthUrlParameters, 
            $this->Environment, 
            $this->OAuthScope, 
            $this->Tenant);
    }

    /** 
     * Extracts the access token from the specified Uri.
     * 
     * @param string $redirectUri
     * 
     * @return OAuthTokens
     * @throws Exception
     */
    public function ExtractAccessTokenFromUri($redirectUri){
        $fragmentParts = parse_url($redirectUri)["fragment"];
        if (!array_key_exists("access_token", $fragmentParts)) 
        {
            throw new Exception("UriDoesntContainAccessToken");
        }

        if (!array_key_exists("expires_in", $fragmentParts)) 
        {
            throw new Exception("UriDoesntContainExpiresIn");
        }

        return $OAuthTokens = (new OAuthTokens())
            ->withAccessToken($fragmentParts["access_token"])
            ->withAccessTokenExpiresInSeconds($fragmentParts["expires_in"])
            ->withRefreshToken(null); 
    }
}
