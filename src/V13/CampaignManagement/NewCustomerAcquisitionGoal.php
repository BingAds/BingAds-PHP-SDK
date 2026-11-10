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
         * The additional conversion value assigned to a new customer.
         * @var float
         */
        public $AdditionalValue;

        /**
         * The audiences used to identify existing customers.
         * @var AudienceIdName[]
         */
        public $Audiences;

        /**
         * The Microsoft Advertising identifier of the new customer acquisition goal.
         * @var integer
         */
        public $Id;
    }

}
