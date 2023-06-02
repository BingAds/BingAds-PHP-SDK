<?php

namespace Microsoft\BingAds\Auth;

use Exception;

abstract class OAuthWithAuthorizationCode extends OAuthAuthorization {
    private $oauthService;

    /** 
     * An opaque value used by the client to maintain state between the request and callback.
     * @var string
     */
    public $State;

    /** 
     * Your application's registered client secret. 
     * @var string
     */
    public $ClientSecret;

    public function __construct() {
        parent::__construct();
        
        $this->oauthService = new UriOAuthService(null);
    }    
    
    /** 
     * Includes the client secret. 
     *
     * @param string $clientSecret
     * @return OAuthWithAuthorizationCode this builder
     */
    public function withClientSecret($clientSecret) {
        $this->ClientSecret = $clientSecret;
        return $this;
    }

    /** 
     * Includes the state. 
     *
     * @param string $state
     * @return OAuthWithAuthorizationCode this builder
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
        $oauthUrlParameters = new OAuthUrlParameters();
        $oauthUrlParameters->ClientId = $this->ClientId;
        $oauthUrlParameters->ResponseType = "code";
        $oauthUrlParameters->RedirectUri = $this->RedirectUri;
        $oauthUrlParameters->State = $this->State;

        return UriOAuthService::GetAuthorizationEndpoint(
            $oauthUrlParameters, 
            $this->Environment, 
            $this->OAuthScope, 
            $this->Tenant);
    }
 
    /** 
     * Retrieves OAuth access and refresh tokens from the Microsoft Account authorization service 
     * using the specified authorization response redirect Uri.
     * 
     * @param string $responseUri
     * @param array $additionalParams
     * 
     * @return OAuthTokens
     * @throws Exception
     * @throws OAuthTokenRequestException
     */
    public function RequestOAuthTokensByResponseUri($responseUri, $additionalParams=null)
    {
        if ($responseUri == null)
        {
            throw new Exception("The ResponseUri is not set. ");
        }

        $parsed_url = parse_url($responseUri);
        
        parse_str($parsed_url["query"], $queryParts);

        if (array_key_exists("error", $queryParts)) 
        {
            $errorName = $queryParts['error'];
            $errorDesc = $queryParts['error_description'];
            throw (new OAuthTokenRequestException())
                ->withError($errorName)
                ->withDescription($errorDesc);
        }

        if (!array_key_exists("code", $queryParts)) 
        {
            throw new Exception("UriDoesntContainCode");
        }

        $code = $queryParts["code"];

        $oauthRequestParameters = (new OAuthRequestParameters())
            ->withClientId($this->ClientId)
            ->withClientSecret($this->ClientSecret)
            ->withRedirectUri($this->RedirectUri)
            ->withGrantType("authorization_code")
            ->withGrantParamName("code")
            ->withGrantValue($code);

        $this->OAuthTokens = $this->oauthService->GetAccessTokens(
            $oauthRequestParameters, 
            $this->Environment, 
            $this->OAuthScope,
            $this->Tenant,
            $additionalParams
        ); 
        
        return $this->OAuthTokens; 
    }

    /** 
     * Retrieves OAuth access and refresh tokens from the Microsoft Account authorization service 
     * using the specified refresh token.
     * 
     * @param string $refreshToken
     * @param array $additionalParams
     * 
     * @return OAuthTokens
     * @throws Exception
     */
    public function RequestOAuthTokensByRefreshToken($refreshToken, $additionalParams=null) 
    {
        if ($refreshToken == null)
        {
            throw new Exception("The RefreshToken is not set. ");
        }

        $oauthRequestParameters = (new OAuthRequestParameters())
            ->withClientId($this->ClientId)
            ->withClientSecret($this->ClientSecret)
            ->withGrantType("refresh_token")
            ->withGrantParamName("refresh_token")
            ->withGrantValue($refreshToken);

        $this->OAuthTokens = $this->oauthService->GetAccessTokens(
            $oauthRequestParameters, 
            $this->Environment, 
            $this->OAuthScope,
            $this->Tenant,
            $additionalParams
        ); 
        
        return $this->OAuthTokens; 
    }
}
