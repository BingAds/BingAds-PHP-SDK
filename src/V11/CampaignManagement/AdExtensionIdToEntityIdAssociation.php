<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object that associates an ad extension to a supported entity, for example ad group or campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn249980(v=msads.110).aspx AdExtensionIdToEntityIdAssociation Data Object
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
