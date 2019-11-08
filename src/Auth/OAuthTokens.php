<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Represents the access_token, refresh_token, and expires_in values returned or sent via the authorization service. 
 */
class OAuthTokens
{   
    /** 
     * Represents the access_token value returned by the authorization service.
     * @var string
     */
    public $AccessToken;

    /** 
     * Represents the expires_in value returned by the authorization service.
     * @var int
     */
    public $AccessTokenExpiresInSeconds;

    /** 
     * Represents the refresh_token value returned or sent via the authorization service.
     * @var string
     */
    public $RefreshToken;

    /** 
     * Represents the full set of fragments returned from the authorization service 
     * in resposne to an access token request.
     * @var string
     */
    public $ResponseFragments;

    public function __construct() {}

    /** 
     * Includes the access token.
     *
     * @param string $accessToken
     *
     * @return OAuthTokens this builder
     */
    public function withAccessToken($accessToken) {
        $this->AccessToken = $accessToken;
        return $this;
    }

    /** 
     * Includes the access token expiration time in seconds.
     *
     * @param int $accessTokenExpiresInSeconds
     *
     * @return OAuthTokens this builder
     */
    public function withAccessTokenExpiresInSeconds($accessTokenExpiresInSeconds) {
        $this->AccessTokenExpiresInSeconds = $accessTokenExpiresInSeconds;
        return $this;
    }

    /** 
     * Includes the refresh token.
     *
     * @param string $refreshToken
     *
     * @return OAuthTokens this builder
     */
    public function withRefreshToken($refreshToken) {
        $this->RefreshToken = $refreshToken;
        return $this;
    }
    
    /** 
     * Includes the response fragments.
     *
     * @param string $responseFragments
     *
     * @return OAuthTokens this builder
     */
    public function withResponseFragments($responseFragments) {
        $this->ResponseFragments = $responseFragments;
        return $this;
    }
}
