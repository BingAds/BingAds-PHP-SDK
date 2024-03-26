<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Provides method for getting OAuth tokens from the authorization server.
 */
class UriOAuthService extends IOAuthService
{
    const ENDPOINT_URLS = array(
        'ProductionMSIdentityV2_MSScope' => array(
            'RedirectUrl' => 'https://login.microsoftonline.com/common/oauth2/nativeclient',
            'OAuthTokenUrl' => 'https://login.microsoftonline.com/common/oauth2/v2.0/token',
            'AuthorizationEndpointUrl' => 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize?scope=https://ads.microsoft.com%2Fmsads.manage+offline_access',
            'Scope' => 'https://ads.microsoft.com/msads.manage offline_access'
        ),
        'ProductionMSIdentityV2' => array(
            'RedirectUrl' => 'https://login.microsoftonline.com/common/oauth2/nativeclient',
            'OAuthTokenUrl' => 'https://login.microsoftonline.com/common/oauth2/v2.0/token',
            'AuthorizationEndpointUrl' => 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize?scope=https://ads.microsoft.com/ads.manage+offline_access',
            'Scope' => 'https://ads.microsoft.com/ads.manage offline_access'
        ),
        'ProductionLiveConnect' => array(
            'RedirectUrl' => 'https://login.live.com/oauth20_desktop.srf',
            'OAuthTokenUrl' => 'https://login.live.com/oauth20_token.srf',
            'AuthorizationEndpointUrl' => 'https://login.live.com/oauth20_authorize.srf?scope=bingads.manage',
            'Scope' => 'bingads.manage'
        ),
        'Sandbox' => array(
            'RedirectUrl' => 'https://login.windows-ppe.net/common/oauth2/nativeclient',
            'OAuthTokenUrl' => 'https://login.windows-ppe.net/consumers/oauth2/v2.0/token',
            'AuthorizationEndpointUrl' => 'https://login.windows-ppe.net/consumers/oauth2/v2.0/authorize?scope=https://api.ads.microsoft.com/msads.manage+offline_access&prompt=login',
            'Scope' => 'https://api.ads.microsoft.com/msads.manage offline_access'
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
     * @param OAuthScope $oauthScope
     * @param string $tenant
     * @param array $additionalParams
     * 
     * @return OAuthTokens
     * @throws Exception
     */
    public function GetAccessTokens(OAuthRequestParameters $oauthRequestParameters, $environment, $oauthScope, $tenant, $additionalParams)
    {
        $endpointType = UriOAuthService::GetOAuthEndpointType($environment, $oauthScope);

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
        
        $OAuthTokenUrl = UriOAuthService::ENDPOINT_URLS[$endpointType]['OAuthTokenUrl'];

        if (in_array($endpointType, [OAuthEndpointType::ProductionMSIdentityV2, OAuthEndpointType::ProductionMSIdentityV2_MSScope], true) && (isset($tenant)))
        {
            $OAuthTokenUrl = str_replace("common", $tenant, $OAuthTokenUrl);
        }

        if(is_array($additionalParams)){
            $accessTokenExchangeParams = array_merge($accessTokenExchangeParams, $additionalParams);
        }
        
        /** 
         * Create an HTTP client and execute an HTTP POST request to
         * exchange the authorization token for an access token and
         * refresh token.
         */
        $this->httpService = new HttpService();
    
        $responseJson = $this->httpService->post(
            $OAuthTokenUrl,
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
     * @param OAuthScope $oauthScope
     * 
     * @return string
     */
    public static function GetAuthorizationEndpoint(OAuthUrlParameters $parameters, $environment, $oauthScope, $tenant)
    {
        $endpointType = UriOAuthService::GetOAuthEndpointType($environment, $oauthScope);

        $authorizationEndpointUrl = UriOAuthService::ENDPOINT_URLS[$endpointType]['AuthorizationEndpointUrl'];
        
        if (in_array($endpointType, [OAuthEndpointType::ProductionMSIdentityV2, OAuthEndpointType::ProductionMSIdentityV2_MSScope], true) && (isset($tenant)))
        {
            $authorizationEndpointUrl = str_replace("common", $tenant, $authorizationEndpointUrl);
        }

        return sprintf(
            "%s&client_id=%s&response_type=%s&redirect_uri=%s",
            $authorizationEndpointUrl,
            $parameters->ClientId,
            $parameters->ResponseType,
            rawurlencode($parameters->RedirectUri)
        ) . (($parameters->State == null) ? "" : ("&state=" . $parameters->State));
    }

    private static function GetOAuthEndpointType($environment, $oauthScope)
    {
        $endpointType;
        if ($environment == ApiEnvironment::Production)
        {
            switch ($oauthScope) {
                case OAuthScope::MSADS_MANAGE: 
                    $endpointType = OAuthEndpointType::ProductionMSIdentityV2_MSScope; 
                    break;
                case OAuthScope::BINGADS_MANAGE:
                    $endpointType = OAuthEndpointType::ProductionLiveConnect;
                    break;
                case OAuthScope::ADS_MANAGE:
                    $endpointType = OAuthEndpointType::ProductionMSIdentityV2;
                    break;
                default:
                    $endpointType = OAuthEndpointType::ProductionMSIdentityV2_MSScope; 
            }
        }
        else
        {
            $endpointType = OAuthEndpointType::Sandbox;
        }
        return $endpointType;
    }

    public static function GetRedirectUrl($environment, $oauthScope) {
        $endpointType = UriOAuthService::GetOAuthEndpointType($environment, $oauthScope);
        return UriOAuthService::ENDPOINT_URLS[$endpointType]['RedirectUrl'];
    }

    public static function GetAuthTokenUrl($environment, $oauthScope, $tenant) {
        $endpointType = UriOAuthService::GetOAuthEndpointType($environment, $oauthScope);

        $OAuthTokenUrl = UriOAuthService::ENDPOINT_URLS[$endpointType]['OAuthTokenUrl'];

        if (in_array($endpointType, [OAuthEndpointType::ProductionMSIdentityV2, OAuthEndpointType::ProductionMSIdentityV2_MSScope], true) && (isset($tenant)))
        {
            $OAuthTokenUrl = str_replace("common", $tenant, $OAuthTokenUrl);
        }

        return $OAuthTokenUrl;
    }

    public static function GetAuthorizeUrl($environment, $oauthScope, $tenant) {
        $endpointType = UriOAuthService::GetOAuthEndpointType($environment, $oauthScope);

        $authorizationEndpointUrl = UriOAuthService::ENDPOINT_URLS[$endpointType]['AuthorizationEndpointUrl'];
        
        if (in_array($endpointType, [OAuthEndpointType::ProductionMSIdentityV2, OAuthEndpointType::ProductionMSIdentityV2_MSScope], true) && (isset($tenant)))
        {
            $authorizationEndpointUrl = str_replace("common", $tenant, $authorizationEndpointUrl);
        }

        return $authorizationEndpointUrl;
    }
}