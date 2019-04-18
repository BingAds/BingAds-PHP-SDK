<?php

namespace Microsoft\BingAds\Samples\V13;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

use SoapVar;
use SoapFault;
use Exception;

final class OutputHelper {

    /// Set the read-only properties of an ad extension to null. This operation can be useful between calls to
    /// GetAdExtensionsByIds and UpdateAdExtensions. 
    /// Otherwise, the update operation would fail if you send certain read-only fields.
    static function SetReadOnlyAdExtensionElementsToNull($extension)
    {
        if (empty($extension) || !isset($extension->Id))
        {
            return null;
        }
        else
        {
            // Set to null for all extension types.
            $extension->Version = null;

            if ($extension->Type == "LocationAdExtension")
            {
                $extension->GeoCodeStatus = null;
            }
            return $extension;
        }
    }

    static function StripEncoding($object)
    {
        if(isset($object->enc_value))
        {
            return $object->enc_value;
        }
        else
        {
            return $object;
        }
    }
}
