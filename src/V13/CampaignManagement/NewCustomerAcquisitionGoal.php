<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the new customer acquisition goal data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/newcustomeracquisitiongoal?view=bingads-13 NewCustomerAcquisitionGoal Data Object
     * 
     * @uses AudienceIdName
     * @used-by AddNewCustomerAcquisitionGoalsRequest
     * @used-by GetNewCustomerAcquisitionGoalsByAccountIdResponse
     * @used-by UpdateNewCustomerAcquisitionGoalsRequest
     */
    final class NewCustomerAcquisitionGoal
    {
        /**
         * Reserved.
         * @var float
         */
        public $AdditionalValue;

        /**
         * Reserved.
         * @var AudienceIdName[]
         */
        public $Audiences;

        /**
         * Reserved.
         * @var integer
         */
        public $Id;
    }

}
