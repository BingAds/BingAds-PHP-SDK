<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an array of objects that associate an ad extension and its editorial status to an account, campaign, or ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adextensionassociationcollection?version=11 AdExtensionAssociationCollection Data Object
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
