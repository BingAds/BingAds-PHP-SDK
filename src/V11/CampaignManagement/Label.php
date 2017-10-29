<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Labels let you organize campaigns, ad groups, ads, and keywords into groups based on whatever is important to you.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/label?version=11 Label Data Object
     * 
     * @used-by AddLabelsRequest
     * @used-by GetLabelsByIdsResponse
     * @used-by UpdateLabelsRequest
     */
    final class Label
    {
        /**
         * The label color as a hexadecimal code.
         * @var string
         */
        public $ColorCode;

        /**
         * The label description.
         * @var string
         */
        public $Description;

        /**
         * The system-generated identifier of the label.
         * @var integer
         */
        public $Id;

        /**
         * The label name.
         * @var string
         */
        public $Name;
    }

}
