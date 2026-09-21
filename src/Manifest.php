<?php

namespace Microsoft\BingAds;

/**
 * SDK-wide constants for the Microsoft Advertising SOAP PHP SDK.
 */
class Manifest
{
    /**
     * The revision date this SDK was built against. Sent as the Api-Revision HTTP
     * transport header on every outgoing SOAP request so an SDK upgrade alone surfaces
     * every API field gated on or before this date.
     *
     * Update this constant in lockstep with the SDK release version. The format is strict
     * yyyy-MM-dd; the server validates with DateTime::TryParseExact(DateTimeStyles.None).
     */
    public const SDK_API_REVISION = '2026-09-14';
}
