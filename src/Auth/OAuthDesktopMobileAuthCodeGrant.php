<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Represents an OAuth authorization object implementing the authorization code grant flow for use in a desktop or mobile application. 
 */
class OAuthDesktopMobileAuthCodeGrant extends OAuthWithAuthorizationCode
{       
    public function __construct() {
        parent::__construct();
        $this->Type = 'OAuthDesktopMobileAuthCodeGrant';
    }
}
