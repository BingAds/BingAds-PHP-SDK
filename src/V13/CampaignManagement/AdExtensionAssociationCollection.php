<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an array of objects that associate an ad extension and its editorial status to an account, campaign, or ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adextensionassociationcollection?view=bingads-13 AdExtensionAssociationCollection Data Object
     * 
     * @uses AdExtensionAssociation
     * @used-by GetAdExtensionsAssociationsResponse
     */
    final class AdExtensionAssociationCollection
    {
        /**
         * An array of objects that associate an ad extension and its editorial status to an account, campaign, or ad group.
         * @var AdExtensionAssociation[]
         */
        public $AdExtensionAssociations;
    }

}
