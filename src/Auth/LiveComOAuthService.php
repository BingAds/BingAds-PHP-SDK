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
    const DESKTOP_REDIRECTION_URI = "https://login.live.com/oauth20_desktop.srf";

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
    public function GetAccessTokens(OAuthRequestParameters $oauthRequestParameters)
    {
        /** 
         * This is the URL used to exchange the authorization token for an
         * access token and a refresh token.
         */
        $accessTokenExchangeUrl = "https://login.live.com/oauth20_token.srf";

        $accessTokenExchangeParams = array(
            'client_id' => $oauthRequestParameters->ClientId,
            'grant_type' => $oauthRequestParameters->GrantType,
            $oauthRequestParameters->GrantParamName => $oauthRequestParameters->GrantValue,
            'redirect_uri' => $oauthRequestParameters->RedirectUri
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
            $accessTokenExchangeUrl,
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
                ->withRefreshToken($refreshToken);
        }
        else
        {
            $errorName = $responseArray['error'];
            $errorDesc = $responseArray['error_description'];
            throw (new OAuthTokenRequestException())
                ->withError($errorName)
                ->withDescription($errorDesc);
        }
    }
    
    /** 
     * Gets the Microsoft Account authorization endpoint, for example where the user should be navigated to give their consent.
     */
    public static function GetAuthorizationEndpoint(OAuthUrlParameters $parameters)
    {
        return sprintf(
            "https://login.live.com/oauth20_authorize.srf?client_id=%s&scope=bingads.manage&response_type=%s&redirect_uri=%s",
            $parameters->ClientId,
            $parameters->ResponseType,
            $parameters->RedirectUri
        ) . (($parameters->State == null) ? "" : ("&state=" . $parameters->State));
    }
}
