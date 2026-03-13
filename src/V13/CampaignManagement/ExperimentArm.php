<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/experimentarm?view=bingads-13 ExperimentArm Data Object
     * 
     * @used-by Experiment
     */
    final class ExperimentArm
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $CampaignIds;

        /**
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var boolean
         */
        public $IsControlArm;

        /**
         * Reserved.
         * @var integer
         */
        public $TrafficSplit;
    }

}
