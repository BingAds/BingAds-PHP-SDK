<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Represents an argument null exception.
 */
class ArgumentNullException extends \InvalidArgumentException
{
    /**
     * @var string $type Could be "refreshToken", "accessToken"
     */
    public function __construct($type) {
        $message = sprintf(
            'OAuthWithAuthorizationCode received a null argument for: "%s". Please provide a valid value.', $type
        );
        
        parent::__construct($message);
    }
}
