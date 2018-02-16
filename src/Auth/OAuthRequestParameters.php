<?php

namespace Microsoft\BingAds\Auth;

/** 
 * The supported parameters for requesting OAuth tokens the authorization service. 
 */
class OAuthRequestParameters
{
    /**
     * @var string
     * Your application's registered client identifier.
     */
    public $ClientId;

    /**
     * @var string
     * Your application's registered client secret. 
     * This parameter is required with OAuthWebAuthCodeGrant requests. 
     */
    public $ClientSecret;

    /**
     * @var string
     * The URI where you want the authorization response to be redirected.
     */
    public $RedirectUri;

    /**
     * @var string
     * The authorization grant param name. 
     * For example the grant param name could be 'refresh_token' or 'authorization_code'.
     */
    public $GrantType;

    /**
     * @var string
     * The authorization grant param name. 
     * For example the grant param name could be 'refresh_token' or 'code'.
     */
    public $GrantParamName;

    /**
     * @var string
     * The value depends on the $GrantType and $GrantParamName. 
     * For example if $GrantType and $GrantParamName are both set to 'refresh_token',
     * the value is equal to the last known and valid refresh token.
     */
    public $GrantValue;

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
     * Includes the client secret. 
     *
     * @param string $clientSecret
     * @return static this builder
     */
    public function withClientSecret($clientSecret) {
        $this->ClientSecret = $clientSecret;
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
     * Includes the grant type. 
     *
     * @param string $grantType
     * @return static this builder
     */
    public function withGrantType($grantType) {
        $this->GrantType = $grantType;
        return $this;
    }

    /** 
     * Includes the grant param name. 
     *
     * @param string $grantParamName
     * @return static this builder
     */
    public function withGrantParamName($grantParamName) {
        $this->GrantParamName = $grantParamName;
        return $this;
    }

    /** 
     * Includes the grant value. 
     *
     * @param string $grantValue
     * @return static this builder
     */
    public function withGrantValue($grantValue) {
        $this->GrantValue = $grantValue;
        return $this;
    }

}
