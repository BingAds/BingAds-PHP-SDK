<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Represents the access_token, refresh_token, and expires_in values returned or sent via the authorization service. 
 */
class OAuthTokens
{   
    /** 
     * Represents the access_token value returned by the authorization service.
     */
    public $AccessToken;

    /** 
     * Represents the expires_in value returned by the authorization service.
     */
    public $AccessTokenExpiresInSeconds;

    /** 
     * Represents the refresh_token value returned or sent via the authorization service.
     */
    public $RefreshToken;

    public function __construct() {}

    /**
     * Includes the access token.
     *
     * @param string $accessToken
     *
     * @return OAuthTokens
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
     * @return OAuthTokens
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
     * @return OAuthTokens
     */
    public function withRefreshToken($refreshToken) {
        $this->RefreshToken = $refreshToken;
        return $this;
    }
}
