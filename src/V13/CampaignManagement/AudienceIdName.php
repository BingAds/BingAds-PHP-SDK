<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the audience ID name data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/audienceidname?view=bingads-13 AudienceIdName Data Object
     * 
     * @used-by NewCustomerAcquisitionGoal
     */
    final class AudienceIdName
    {
        /**
         * The Microsoft Advertising identifier of the audience.
         * @var integer
         */
        public $Id;

        /**
         * The audience name.
         * @var string
         */
        public $Name;
    }

}
