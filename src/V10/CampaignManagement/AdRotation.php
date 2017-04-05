<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines an object that specifies the type of ad rotation to apply to the ad group.
     * @link http://msdn.microsoft.com/en-us/library/jj219952(v=msads.100).aspx AdRotation Data Object
     * 
     * @uses AdRotationType
     * @used-by AdGroup
     */
    final class AdRotation
    {
        /**
         * Reserved for future use only.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * Reserved for future use only.
         * @var \DateTime
         */
        public $StartDate;

        /**
         * The type of ad rotation to apply to the ad group.
         * @var AdRotationType
         */
        public $Type;
    }

}
