<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that associates an ad extension to a supported entity, for example ad group or campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adextensionidtoentityidassociation?view=bingads-13 AdExtensionIdToEntityIdAssociation Data Object
     * 
     * @used-by DeleteAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionsEditorialReasonsRequest
     * @used-by SetAdExtensionsAssociationsRequest
     */
    final class AdExtensionIdToEntityIdAssociation
    {
        /**
         * The system-generated identifier of the ad extension.
         * @var integer
         */
        public $AdExtensionId;

        /**
         * The identifier of an entity associated with the ad extension.
         * @var integer
         */
        public $EntityId;
    }

}
