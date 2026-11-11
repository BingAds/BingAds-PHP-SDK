<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an audience based on an AI prompt.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/aipromptaudience?view=bingads-13 AIPromptAudience Data Object
     */
    final class AIPromptAudience extends Audience
    {
        /**
         * The text prompt that describes the audience.
         * @var string
         */
        public $Prompt;
    }

}
