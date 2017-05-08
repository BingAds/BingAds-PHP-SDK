<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the base object of a conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759548(v=msads.110).aspx ConversionGoal Data Object
     * 
     * @uses ConversionGoalCountType
     * @uses ConversionGoalRevenue
     * @uses EntityScope
     * @uses ConversionGoalStatus
     * @uses ConversionGoalTrackingStatus
     * @uses ConversionGoalType
     * @used-by AddConversionGoalsRequest
     * @used-by GetConversionGoalsByIdsResponse
     * @used-by GetConversionGoalsByTagIdsResponse
     * @used-by UpdateConversionGoalsRequest
     */
    class ConversionGoal
    {
        /**
         * The conversion window is the length of time in minutes after a click that you want to track conversions.
         * @var integer
         */
        public $ConversionWindowInMinutes;

        /**
         * This determines how your conversions are recorded within your chosen conversion window.
         * @var ConversionGoalCountType
         */
        public $CountType;

        /**
         * The unique Bing Ads identifier for the conversion goal.
         * @var integer
         */
        public $Id;

        /**
         * The conversion goal name.
         * @var string
         */
        public $Name;

        /**
         * Determines how much each conversion is worth to your business.
         * @var ConversionGoalRevenue
         */
        public $Revenue;

        /**
         * Determines if the goal applies to all accounts or only the account specified in the required CustomerAccountId header element.
         * @var EntityScope
         */
        public $Scope;

        /**
         * Defines the possible user-determined status values of a conversion goal.
         * @var ConversionGoalStatus
         */
        public $Status;

        /**
         * The unique Bing Ads identifier of the UET tag that you added to your website to allow Bing Ads to collect actions people take on your website.
         * @var integer
         */
        public $TagId;

        /**
         * Defines the possible system-determined status values of a conversion goal.
         * @var ConversionGoalTrackingStatus
         */
        public $TrackingStatus;

        /**
         * The type of the conversion goal.
         * @var ConversionGoalType
         */
        public $Type;
    }

}
