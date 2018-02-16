<?php

namespace Microsoft\BingAds\Auth;

/** 
 * The supported parameters for requesting the authorization service URL. 
 */
class OAuthUrlParameters
{
    /**
     * @var string
     * Your application's registered client identifier.
     */
    public $ClientId;

    /**
     * @var string
     * The authorization response type. 
     * For implicit grant flow, the response type is 'token'.
     * For authorization code grant flow, the response type is 'code'.
     */
    public $ResponseType;

    /**
     * @var string
     * The URI where you want the authorization response to be redirected.
     */
    public $RedirectUri;

    /**
     * @var string
     * An opaque value used by the client to maintain state between the request and callback.
     */
    public $State;

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
     * Includes the response type. 
     *
     * @param string $responseType
     * @return static this builder
     */
    public function withResponseType($responseType) {
        $this->ResponseType = $responseType;
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
     * Includes the state. 
     *
     * @param string $state
     * @return static this builder
     */
    public function withState($state) {
        $this->State = $state;
        return $this;
    }

}
