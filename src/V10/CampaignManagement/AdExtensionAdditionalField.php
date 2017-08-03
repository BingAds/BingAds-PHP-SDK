<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a list of optional AdExtension elements that you can request when calling GetAdExtensionsAssociations and GetAdExtensionsByIds.
     * @link http://msdn.microsoft.com/en-us/library/mt763243(v=msads.100).aspx AdExtensionAdditionalField Value Set
     * 
     * @used-by GetAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionsByIdsRequest
     */
    final class AdExtensionAdditionalField
    {
        /** Includes the Scheduling element in the AdExtension or SiteLink object. */
        const Scheduling = 'Scheduling';
    }

}
