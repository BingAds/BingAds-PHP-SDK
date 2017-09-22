<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Represents the UserName and Password authentication headers that should be used in calls to the Bing Ads web services. 
 */
class PasswordAuthentication extends Authentication 
{
    /**
     * @var string
     */
    public $UserName;

    /**
     * @var string
     */
    public $Password;

    public function __construct() {
        $this->Type = 'PasswordAuthentication';
    }

    /**
     * Includes the user name.
     * @param string $userName
     * @return static
     */
    public function withUserName($userName) {
        $this->UserName = $userName;
        return $this;
    }

    /**
     * Includes the password.
     * @param $password
     * @return static
     */
    public function withPassword($password) {
        $this->Password = $password;
        return $this;
    }
    
}

?>