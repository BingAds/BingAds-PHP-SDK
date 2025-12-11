<?php

namespace Microsoft\BingAds\Auth;

use Exception;

/** 
 * Represents an OAuth authorization object implementing the authorization code grant flow for use in a web application. 
 */
class GoogleOAuthWebAuthCodeGrant extends OAuthWithAuthorizationCode
{
    public function __construct() {
        parent::__construct();
        $this->Type = 'GoogleOAuthWebAuthCodeGrant';
        $this->UseMsaProd = False;
    }
}
