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
     *
     * @param string $userName
     *
     * @return PasswordAuthentication this builder
     */
    public function withUserName($userName) {
        $this->UserName = $userName;
        return $this;
    }

    /** 
     * Includes the password.
     *
     * @param string $password
     *
     * @return PasswordAuthentication this builder
     */
    public function withPassword($password) {
        $this->Password = $password;
        return $this;
    }
    
}
