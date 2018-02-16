<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Represents the access_token, refresh_token, and expires_in values returned or sent via the authorization service. 
 */
class OAuthTokens
{   
    /**
     * @var string
     * Represents the access_token value returned by the authorization service.
     */
    public $AccessToken;

    /**
     * @var int
     * Represents the expires_in value returned by the authorization service.
     */
    public $AccessTokenExpiresInSeconds;

    /**
     * @var string
     * Represents the refresh_token value returned or sent via the authorization service.
     */
    public $RefreshToken;

    /** 
     * Initializes a new instance of the OAuthTokens class.
     */
    /*public function __construct($accessToken, $accessTokenExpiresInSeconds, $refreshToken) {
        $this->AccessToken = $accessToken;
        $this->AccessTokenExpiresInSeconds = $accessTokenExpiresInSeconds;
        $this->RefreshToken = $refreshToken;
    }*/

    public function __construct() {}

    /** 
     * Includes the access token.
     * @return static
     */
    public function withAccessToken($accessToken) {
        $this->AccessToken = $accessToken;
        return $this;
    }

    /** 
     * Includes the access token expiration time in seconds.
     * @return static
     */
    public function withAccessTokenExpiresInSeconds($accessTokenExpiresInSeconds) {
        $this->AccessTokenExpiresInSeconds = $accessTokenExpiresInSeconds;
        return $this;
    }

    /**
     * Includes the refresh token.
     * @param $refreshToken
     * @return static
     */
    public function withRefreshToken($refreshToken) {
        $this->RefreshToken = $refreshToken;
        return $this;
    }
}
