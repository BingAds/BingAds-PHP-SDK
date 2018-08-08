<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Represents the deprecated UserName and Password authentication headers. 
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
