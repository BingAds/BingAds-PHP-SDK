<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Represents the UserName and Password authentication headers that should be used in calls to the Bing Ads web services. 
 */
class PasswordAuthentication extends Authentication 
{
    public $UserName;

    public $Password;

    public function __construct() {
        $this->Type = 'PasswordAuthentication';
    }

    /** 
     * Includes the user name.
     */
    public function withUserName($userName) {
        $this->UserName = $userName;
        return $this;
    }

    /** 
     * Includes the password.
     */
    public function withPassword($password) {
        $this->Password = $password;
        return $this;
    }
    
}

?>