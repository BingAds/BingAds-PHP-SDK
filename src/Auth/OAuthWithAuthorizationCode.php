<?php

namespace Microsoft\BingAds\Auth;

use Exception;
use LogicException;

abstract class OAuthWithAuthorizationCode extends OAuthAuthorization {
    private $oauthService;

    /**
     * @var string
     * An opaque value used by the client to maintain state between the request and callback.
     */
    public $State;

    /**
     * @var string
     * Your application's registered client secret. 
     */
    public $ClientSecret;

    public function __construct() {
        parent::__construct();
        
        $this->oauthService = new LiveComOAuthService(null);
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
     * Includes the state. 
     *
     * @param string $state
     * @return static this builder
     */
    public function withState($state) {
        $this->State = $state;
        return $this;
    }
    
    /** 
     * Gets the Microsoft Account authorization endpoint where the user should be navigated to give their consent.
     */
    public function GetAuthorizationEndpoint(){
        $oauthUrlParameters = new OAuthUrlParameters();
        $oauthUrlParameters->ClientId = $this->ClientId;
        $oauthUrlParameters->ResponseType = "code";
        $oauthUrlParameters->RedirectUri = $this->RedirectUri;
        $oauthUrlParameters->State = $this->State;

        return LiveComOAuthService::GetAuthorizationEndpoint($oauthUrlParameters);
    }

    /**
     * Retrieves OAuth access and refresh tokens from the Microsoft Account authorization service
     * using the specified authorization response redirect Uri.
     * @param $responseUri
     * @return OAuthTokens
     * @throws Exception
     * @throws OAuthTokenRequestException
     */
    public function RequestOAuthTokensByResponseUri($responseUri)
    {
        if ($responseUri == null)
        {
            throw new Exception("The ResponseUri is not set. ");
        }

        $parsed_url = parse_url($responseUri);

        if (!isset($parsed_url['query']))
        {
            throw new LogicException(
                'Argument $responseUri in ' . __METHOD__ . ' should contains query string with `error`, or `code` params.' .
                'See examples: https://msdn.microsoft.com/library/bing-ads-overview-getting-started-php-with-web-services.aspx#oauth'
            );
        }
        
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

        $this->OAuthTokens = $this->oauthService->GetAccessTokens($oauthRequestParameters); 
        
        return $this->OAuthTokens; 
    }

    /** 
     * Retrieves OAuth access and refresh tokens from the Microsoft Account authorization service 
     * using the specified refresh token.
     */
    public function RequestOAuthTokensByRefreshToken($refreshToken) 
    {
        if ($refreshToken == null)
        {
            throw new Exception("The RefreshToken is not set. ");
        }

        $oauthRequestParameters = (new OAuthRequestParameters())
            ->withClientId($this->ClientId)
            ->withClientSecret($this->ClientSecret)
            ->withRedirectUri($this->RedirectUri)
            ->withGrantType("refresh_token")
            ->withGrantParamName("refresh_token")
            ->withGrantValue($refreshToken);

        $this->OAuthTokens = $this->oauthService->GetAccessTokens($oauthRequestParameters); 
        
        return $this->OAuthTokens; 
    }
}

?>