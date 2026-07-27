<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads to users by a specific topic.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/topiccriterion?view=bingads-13 TopicCriterion Data Object
     */
    final class TopicCriterion extends Criterion
    {
        /**
         * The ID of the topic.
         * @var integer
         */
        public $TopicId;

        /**
         * The name of the topic.
         * @var string
         */
        public $TopicName;
    }

}
