<?php

namespace Microsoft\BingAds\Auth;

/** 
 * The abstract base class for all OAuth authentication classes.
 */
abstract class OAuthAuthorization extends Authentication 
{
    /** 
     * The client identifier corresponding to your registered application.
     * @var string
     */
    public $ClientId;
 
    /** 
     * Contains information about OAuth access tokens received from the Microsoft Account authorization service.
     * @var OAuthTokens
     */
    public $OAuthTokens;

    /** 
     * The URI to which the user of the app will be redirected after receiving user consent.
     * @var string
     */
    public $RedirectUri;

    /** 
     * The ApiEnvironment used for the respective authorization URIs. The default is production.
     * @var ApiEnvironment
     */
    public $Environment = ApiEnvironment::Production;

    /** 
     * Determines whether or not to require Live Connect instead of MS Identity in production.
     * @var bool
     */
    public $RequireLiveConnect = false;

    public function __construct() {}

    /** 
     * Includes the client ID. 
     *
     * @param string $clientId
     * @return OAuthAuthorization this builder
     */
    public function withClientId($clientId) {
        $this->ClientId = $clientId;
        return $this;
    }

    /** 
     * Includes the redirect URI. 
     *
     * @param string $redirectUri
     * @return OAuthAuthorization this builder
     */
    public function withRedirectUri($redirectUri) {
        $this->RedirectUri = $redirectUri;
        return $this;
    }

    /** 
     * Includes the refresh token. 
     *
     * @param string $refreshToken
     * @return OAuthAuthorization this builder
     */
    public function withRefreshToken($refreshToken) {
        $this->OAuthTokens = (new OAuthTokens())->withRefreshToken($refreshToken);
        return $this;
    }

    /** 
     * Includes the OAuth tokens. 
     *
     * @param string $oauthTokens
     * @return OAuthAuthorization this builder
     */
    public function withOAuthTokens($oauthTokens) {
        $this->OAuthTokens = $oauthTokens;
        return $this;
    }

    /** 
     * Includes the environment. 
     *
     * @param string $environment
     * @return OAuthAuthorization this builder
     */
    public function withEnvironment($environment) {
        $this->Environment = $environment;
        $this->RedirectUri=UriOAuthService::GetRedirectUrl($environment, $this->RequireLiveConnect);
        return $this;
    }

    /** 
     * Includes the require Live Connect flag. 
     *
     * @param string $requireLiveConnect
     * @return OAuthAuthorization this builder
     */
    public function withRequireLiveConnect($requireLiveConnect) {
        $this->RequireLiveConnect = $requireLiveConnect;
        $this->RedirectUri=UriOAuthService::GetRedirectUrl($this->Environment, $requireLiveConnect);
        return $this;
    }

    /** 
     * Implementations of this abstract method will get the Microsoft Account authorization endpoint 
     * where the user should be navigated to give their consent.
     */
    abstract public function GetAuthorizationEndpoint();
}
