<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Represents a user who intends to access the corresponding customer and account.
 */
class AuthorizationData
{
    /**
     * @var OAuthAuthorization
     * An object representing the authentication headers that should be used in calls to the Bing Ads web services.
     */
    public $Authentication;

    /**
     * @var string
     * The identifier of the account that owns the entities in the request. Used as the CustomerAccountId header element in calls to the Bing Ads web services.
     */
    public $AccountId;

    /**
     * @var string
     * The identifier of the customer that owns the account. Used as the CustomerId header element in calls to the Bing Ads web services.
     */
    public $CustomerId;

    /**
     * @var string
     * The Bing Ads developer access token. Used as the DeveloperToken header element in calls to the Bing Ads web services.
     */
    public $DeveloperToken;


    public function __construct() {}

    /** 
     * Includes the authentication. 
     *
     * @param Authentication $authentication
     * @return static this builder
     */
    public function withAuthentication($authentication) {
        $this->Authentication = $authentication;
        return $this;
    }

    /** 
     * Includes the account ID. 
     *
     * @param string $accountId
     * @return static this builder
     */
    public function withAccountId($accountId) {
        $this->AccountId = $accountId;
        return $this;
    }

    /** 
     * Includes the customer ID. 
     *
     * @param string $customerId
     * @return static this builder
     */
    public function withCustomerId($customerId) {
        $this->CustomerId = $customerId;
        return $this;
    }

    /** 
     * Includes the developer token. 
     *
     * @param string $developerToken
     * @return static this builder
     */
    public function withDeveloperToken($developerToken) {
        $this->DeveloperToken = $developerToken;
        return $this;
    }
}

?>