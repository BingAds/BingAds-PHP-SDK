<?php

namespace Microsoft\BingAds\Auth;

/** 
 * The supported parameters for requesting the authorization service URL. 
 */
class OAuthUrlParameters
{
    /** 
     * Your application's registered client identifier.
     * @var string
     */
    public $ClientId;

    /** 
     * The authorization response type. 
     * For implicit grant flow, the response type is 'token'.
     * For authorization code grant flow, the response type is 'code'.
     * @var string
     */
    public $ResponseType;

    /** 
     * The URI where you want the authorization response to be redirected.
     * @var string
     */
    public $RedirectUri;

    /** 
     * An opaque value used by the client to maintain state between the request and callback.
     * @var string
     */
    public $State;

    public function __construct() {}

    /** 
     * Includes the client ID. 
     *
     * @param string $clientId
     * @return OAuthUrlParameters this builder
     */
    public function withClientId($clientId) {
        $this->ClientId = $clientId;
        return $this;
    }

    /** 
     * Includes the response type. 
     *
     * @param string $responseType
     * @return OAuthUrlParameters this builder
     */
    public function withResponseType($responseType) {
        $this->ResponseType = $responseType;
        return $this;
    }

    /** 
     * Includes the redirect URI. 
     *
     * @param string $redirectUri
     * @return OAuthUrlParameters this builder
     */
    public function withRedirectUri($redirectUri) {
        $this->RedirectUri = $redirectUri;
        return $this;
    }
    
    /** 
     * Includes the state. 
     *
     * @param string $state
     * @return OAuthUrlParameters this builder
     */
    public function withState($state) {
        $this->State = $state;
        return $this;
    }

}
