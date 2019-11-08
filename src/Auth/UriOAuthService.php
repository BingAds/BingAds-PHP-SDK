<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Provides method for getting OAuth tokens from the authorization server.
 */
class UriOAuthService extends IOAuthService
{
    const ENDPOINT_URLS = array(
        'ProductionMSIdentityV2' => array(
            'RedirectUrl' => 'https://login.microsoftonline.com/common/oauth2/nativeclient',
            'OAuthTokenUrl' => 'https://login.microsoftonline.com/common/oauth2/v2.0/token',
            'AuthorizationEndpointUrl' => 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize?scope=https://ads.microsoft.com/ads.manage offline_access',
            'Scope' => 'https://ads.microsoft.com/ads.manage offline_access'
        ),
        'ProductionLiveConnect' => array(
            'RedirectUrl' => 'https://login.live.com/oauth20_desktop.srf',
            'OAuthTokenUrl' => 'https://login.live.com/oauth20_token.srf',
            'AuthorizationEndpointUrl' => 'https://login.live.com/oauth20_authorize.srf?scope=bingads.manage',
            'Scope' => 'bingads.manage'
        ),
        'SandboxLiveConnect' => array(
            'RedirectUrl' => 'https://login.live-int.com/oauth20_desktop.srf',
            'OAuthTokenUrl' => 'https://login.live-int.com/oauth20_token.srf',
            'AuthorizationEndpointUrl' => 'https://login.live-int.com/oauth20_authorize.srf?scope=bingads.manage&prompt=login',
            'Scope' => 'bingads.manage'
        ),
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
     * Calls the authorization server with $oauthRequestParameters,   
     * deserializes the response, and returns OAuthTokens.
     * 
     * @param OAuthRequestParameters $oauthRequestParameters
     * @param ApiEnvironment $environment
     * @param bool $requireLiveConnect
     * 
     * @return OAuthTokens
     * @throws Exception
     */
    public function GetAccessTokens(OAuthRequestParameters $oauthRequestParameters, $environment, $requireLiveConnect)
    {
        $endpointType = UriOAuthService::GetOAuthEndpointType($environment, $requireLiveConnect);

        $accessTokenExchangeParams = array(
            'client_id' => $oauthRequestParameters->ClientId,
            'grant_type' => $oauthRequestParameters->GrantType,
            $oauthRequestParameters->GrantParamName => $oauthRequestParameters->GrantValue,
            'scope' => UriOAuthService::ENDPOINT_URLS[$endpointType]['Scope']
        );

        if ($oauthRequestParameters->RedirectUri != null)
        {
            $accessTokenExchangeParams["redirect_uri"] = $oauthRequestParameters->RedirectUri;
        }

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
            UriOAuthService::ENDPOINT_URLS[$endpointType]['OAuthTokenUrl'],
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
     * Gets the Microsoft Account authorization endpoint, for example where the user 
     * should be navigated to give their consent.
     * 
     * @param OAuthUrlParameters $parameters
     * @param ApiEnvironment $environment
     * @param bool $requireLiveConnect
     * 
     * @return string
     */
    public static function GetAuthorizationEndpoint(OAuthUrlParameters $parameters, $environment, $requireLiveConnect)
    {
        $endpointType = UriOAuthService::GetOAuthEndpointType($environment, $requireLiveConnect);

        return sprintf(
            "%s&client_id=%s&response_type=%s&redirect_uri=%s",
            UriOAuthService::ENDPOINT_URLS[$endpointType]['AuthorizationEndpointUrl'],
            $parameters->ClientId,
            $parameters->ResponseType,
            $parameters->RedirectUri
        ) . (($parameters->State == null) ? "" : ("&state=" . $parameters->State));
    }

    private static function GetOAuthEndpointType($environment, $requireLiveConnect)
    {
        $endpointType;
        if ($environment == ApiEnvironment::Production)
        {
            $endpointType = $requireLiveConnect ? OAuthEndpointType::ProductionLiveConnect : OAuthEndpointType::ProductionMSIdentityV2;
        }
        else
        {
            $endpointType = OAuthEndpointType::SandboxLiveConnect;
        }
        return $endpointType;
    }

    public static function GetRedirectUrl($environment, $requireLiveConnect) {
        $endpointType = UriOAuthService::GetOAuthEndpointType($environment, $requireLiveConnect);
        return UriOAuthService::ENDPOINT_URLS[$endpointType]['RedirectUrl'];
    }

    public static function GetAuthTokenUrl($environment, $requireLiveConnect) {
        $endpointType = UriOAuthService::GetOAuthEndpointType($environment, $requireLiveConnect);
        return UriOAuthService::ENDPOINT_URLS[$endpointType]['OAuthTokenUrl'];
    }

    public static function GetAuthorizeUrl($environment, $requireLiveConnect) {
        $endpointType = UriOAuthService::GetOAuthEndpointType($environment, $requireLiveConnect);
        return UriOAuthService::ENDPOINT_URLS[$endpointType]['AuthorizationEndpointUrl'];
    }
}
