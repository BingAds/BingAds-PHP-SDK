<?php

namespace Microsoft\BingAds\Auth;

use Exception;

/** 
 * Represents an OAuth token request exception. 
 */
class OAuthTokenRequestException extends Exception
{   
    public $Error;
    public $Description;

    public function __construct() {}

    /** 
     * Includes the error.
     */
    public function withError($error) {
        $this->Error = $error;
        return $this;
    }

    /** 
     * Includes the error description.
     */
    public function withDescription($description) {
        $this->Description = $description;
        return $this;
    }
}

?>