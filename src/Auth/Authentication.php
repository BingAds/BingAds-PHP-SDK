<?php

namespace Microsoft\BingAds\Auth;

/** 
 * The abstract base class for all authentication classes.
 */
abstract class Authentication
{
    /** 
     * The Authentication type for example PasswordAuthentication or OAuthDesktopMobileImplicitGrant.
     */
    public $Type;
}
