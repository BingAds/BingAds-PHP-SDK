<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the experiment arm data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/experimentarm?view=bingads-13 ExperimentArm Data Object
     * 
     * @used-by Experiment
     */
    final class ExperimentArm
    {
        /**
         * The campaign IDs.
         * @var integer[]
         */
        public $CampaignIds;

        /**
         * The experiment arm ID.
         * @var integer
         */
        public $Id;

        /**
         * The experiment arm is a control arm.
         * @var boolean
         */
        public $IsControlArm;

        /**
         * The traffic split number.
         * @var integer
         */
        public $TrafficSplit;
    }

}
