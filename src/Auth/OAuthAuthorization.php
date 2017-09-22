<?php

namespace Microsoft\BingAds\Auth;

/** 
 * The abstract base class for all OAuth authentication classes.
 */
abstract class OAuthAuthorization extends Authentication 
{
    /**
     * @var string
     * The client identifier corresponding to your registered application.
     */
    public $ClientId;
 
    /**
     * @var OAuthTokens
     * Contains information about OAuth access tokens received from the Microsoft Account authorization service.
     */
    public $OAuthTokens;

    /**
     * @var string
     * The URI to which the user of the app will be redirected after receiving user consent.
     */
    public $RedirectUri;

    public function __construct() {}

    /**
     * Includes the client ID. 
     *
     * @param string $clientId
     * @return static this builder
     */
    public function withClientId($clientId) {
        $this->ClientId = $clientId;
        return $this;
    }

    /** 
     * Includes the redirect URI. 
     *
     * @param string $redirectUri
     * @return static this builder
     */
    public function withRedirectUri($redirectUri) {
        $this->RedirectUri = $redirectUri;
        return $this;
    }

    /**
     * Includes the refresh token. 
     *
     * @param string $refreshToken
     * @return static this builder
     */
    public function withRefreshToken($refreshToken) {
        $this->OAuthTokens = (new OAuthTokens())->withRefreshToken($refreshToken);
        return $this;
    }

    /** 
     * Includes the OAuth tokens. 
     *
     * @param string $oauthTokens
     * @return static this builder
     */
    public function withOAuthTokens($oauthTokens) {
        $this->OAuthTokens = $oauthTokens;
        return $this;
    }
   
    /**
     * Implementations of this abstract method will get the Microsoft Account authorization endpoint 
     * where the user should be navigated to give their consent.
     */
    abstract public function GetAuthorizationEndpoint();
}

?>