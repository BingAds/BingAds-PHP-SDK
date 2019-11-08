<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Represents a user who intends to access the corresponding customer and account.
 */
class AuthorizationData
{
    /** 
     * An object representing the authentication headers that should be used in calls to the Bing Ads API.
     * @var OAuthAuthorization
     */
    public $Authentication;

    /** 
     * The identifier of the account that owns the entities in the request. Used as the CustomerAccountId header element in calls to the Bing Ads API.
     * @var string
     */
    public $AccountId;

    /** 
     * The identifier of the customer that owns the account. Used as the CustomerId header element in calls to the Bing Ads API.
     * @var string
     */
    public $CustomerId;

    /** 
     * The Bing Ads developer access token. Used as the DeveloperToken header element in calls to the Bing Ads API.
     * @var string
     */
    public $DeveloperToken;


    public function __construct() {}

    /** 
     * Includes the authentication. 
     *
     * @param Authentication $authentication
     * @return AuthorizationData this builder
     */
    public function withAuthentication($authentication) {
        $this->Authentication = $authentication;
        return $this;
    }

    /** 
     * Includes the account ID. 
     *
     * @param string $accountId
     * @return AuthorizationData this builder
     */
    public function withAccountId($accountId) {
        $this->AccountId = $accountId;
        return $this;
    }

    /** 
     * Includes the customer ID. 
     *
     * @param string $customerId
     * @return AuthorizationData this builder
     */
    public function withCustomerId($customerId) {
        $this->CustomerId = $customerId;
        return $this;
    }

    /** 
     * Includes the developer token. 
     *
     * @param string $developerToken
     * @return AuthorizationData this builder
     */
    public function withDeveloperToken($developerToken) {
        $this->DeveloperToken = $developerToken;
        return $this;
    }
}
