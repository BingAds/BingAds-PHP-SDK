<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Provides method for getting OAuth tokens from the live.com authorization server.
 */
class LiveComOAuthService extends IOAuthService
{
    /** 
     * The redirect Uri for a desktop or mobile application.
     */
    const REDIRECTION_URI = array(
        'Production' =>'https://login.live.com/oauth20_desktop.srf',
        'Sandbox' => 'https://login.live-int.com/oauth20_desktop.srf'
    );
    /** 
     * This is the URL used to exchange the authorization token for an
     * access token and a refresh token.
     */
    const AUTH_TOKEN_URI = array(
        'Production' =>'https://login.live.com/oauth20_token.srf',
        'Sandbox' => 'https://login.live-int.com/oauth20_token.srf'
    );
    /**
     * Where the user should be navigated to give their consent.
     */
    const AUTHORIZE_URI = array(
        'Production' =>'https://login.live.com/oauth20_authorize.srf?scope=bingads.manage',
        'Sandbox' => 'https://login.live-int.com/oauth20_authorize.srf?scope=bingads.manage&prompt=login'
    );
    
    private $httpService;

    public function __construct($httpService) {
        if($httpService == null){
            $this->httpService = new HttpService();
        }
        else {
            $this->httpService = $httpService;
        }
    }

    
    /** 
     * Calls live.com authorization server with the oauthRequestParameters passed in, deserializes the response and returns back OAuth tokens.
     */
    public function GetAccessTokens(OAuthRequestParameters $oauthRequestParameters, $environment)
    {
        $accessTokenExchangeParams = array(
            'client_id' => $oauthRequestParameters->ClientId,
            'grant_type' => $oauthRequestParameters->GrantType,
            $oauthRequestParameters->GrantParamName => $oauthRequestParameters->GrantValue,
            'redirect_uri' => $oauthRequestParameters->RedirectUri,
            'scope' => 'bingads.manage'
        );

        if ($oauthRequestParameters->ClientSecret != null)
        {
            $accessTokenExchangeParams["client_secret"] = $oauthRequestParameters->ClientSecret;
        }

        /** 
         * Create an HTTP client and execute an HTTP POST request to
         * exchange the authorization token for an access token and
         * refresh token.
         */
        $this->httpService = new HttpService();
    
        $responseJson = $this->httpService->post(
            LiveComOAuthService::AUTH_TOKEN_URI[$environment],
            $accessTokenExchangeParams);

        /** 
         * The response formatted in json.
         */
        $responseArray = json_decode($responseJson, TRUE);

        /** 
         * If the response contains an access_token element, it was successful.
         * If not, an error occurred and the description will be displayed below.
         */
        if(isset($responseArray['access_token']))
        {
            $accessToken = $responseArray['access_token'];
            $expiresIn = $responseArray['expires_in'];
            $refreshToken = $responseArray['refresh_token'];

            return (new OAuthTokens())
                ->withAccessToken($accessToken)
                ->withAccessTokenExpiresInSeconds($expiresIn)
                ->withRefreshToken($refreshToken)
                ->withResponseFragments($responseArray);
        }
        else if(isset($responseArray['error']))
        {
            $errorName = $responseArray['error'];
            $errorDesc = "The error_description was not provided by the authentication service.";
            if(isset($responseArray['error_description'])){
                $errorDesc = $responseArray['error_description'];
            }
            
            throw (new OAuthTokenRequestException())
                ->withError($errorName)
                ->withDescription($errorDesc);
        }
    }
    
    /** 
     * Gets the Microsoft Account authorization endpoint, for example where the user should be navigated to give their consent.
     */
    public static function GetAuthorizationEndpoint(OAuthUrlParameters $parameters, $environment)
    {
        return sprintf(
            "%s&client_id=%s&response_type=%s&redirect_uri=%s",
            LiveComOAuthService::AUTHORIZE_URI["$environment"],
            $parameters->ClientId,
            $parameters->ResponseType,
            $parameters->RedirectUri
        ) . (($parameters->State == null) ? "" : ("&state=" . $parameters->State));
    }

    public static function GetRedirectUrl($environment) {
        return LiveComOAuthService::REDIRECTION_URI[$environment];
    }

    public static function GetAuthTokenUrl($environment) {
        return LiveComOAuthService::AUTH_TOKEN_URI[$environment];
    }

    public static function GetAuthorizeUrl($environment) {
        return LiveComOAuthService::AUTHORIZE_URI[$environment];
    }
}
