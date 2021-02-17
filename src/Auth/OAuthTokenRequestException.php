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
     *
     * @param string $error
     *
     * @return OAuthTokenRequestException
     */
    public function withError($error) {
        $this->Error = $error;
        $this->code = $error;
        return $this;
    }

    /**
     * Includes the error description.
     *
     * @param string $description
     *
     * @return OAuthTokenRequestException
     */
    public function withDescription($description) {
        $this->Description = $description;
        $this->message = $description;
        return $this;
    }
}
