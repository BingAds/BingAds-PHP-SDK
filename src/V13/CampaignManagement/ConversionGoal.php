<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the base object of a conversion goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/conversiongoal?view=bingads-13 ConversionGoal Data Object
     * 
     * @uses AttributionModelType
     * @uses ConversionGoalCountType
     * @uses ConversionGoalCategory
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
         * Determines which attribution model, _LastTouch_ or _LastClick_, is used with a conversion goal.
         * @var AttributionModelType
         */
        public $AttributionModelType;

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
         * Determines whether or not to exclude data otherwise related to this conversion goal from a subset of performance report columns.
         * @var boolean
         */
        public $ExcludeFromBidding;

        /**
         * The category used to segment the conversion goal.
         * @var ConversionGoalCategory
         */
        public $GoalCategory;

        /**
         * The unique Microsoft Advertising identifier for the conversion goal.
         * @var integer
         */
        public $Id;

        /**
         * Determines whether enhanced conversions are enabled for a conversion goal.
         * @var boolean
         */
        public $IsEnhancedConversionsEnabled;

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
         * The unique Microsoft Advertising identifier of the UET tag that you added to your website to allow Microsoft Advertising to collect actions people take on your website.
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

        /**
         * The view-through conversion window is the length of time in minutes after a click that you want to track view-through conversions.
         * @var integer
         */
        public $ViewThroughConversionWindowInMinutes;
    }

}
