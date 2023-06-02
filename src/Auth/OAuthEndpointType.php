<?php

namespace Microsoft\BingAds\Auth;

/** 
 * Represents the endpoint type to use for OAuth.
 */
final class OAuthEndpointType
{
    /** 
     * Production for MS Identity V2 with new MSADS scope
     */
    const ProductionMSIdentityV2_MSScope = 'ProductionMSIdentityV2_MSScope';

    /** 
     * Production for MS Identity V2 
     */
    const ProductionMSIdentityV2 = 'ProductionMSIdentityV2';
    
    /** 
     * Production for Live Connect
     */
    const ProductionLiveConnect = 'ProductionLiveConnect';

    /** 
     * Sandbox for Live Connect
     */
    const Sandbox = 'Sandbox';
}
