<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that pairs one header with between 3 and 10 snippet values that tell customers more about your business.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/structuredsnippetadextension?view=bingads-13 StructuredSnippetAdExtension Data Object
     */
    final class StructuredSnippetAdExtension extends AdExtension
    {
        /**
         * The header that is appended with a colon (:) and precedes the snippet values.
         * @var string
         */
        public $Header;

        /**
         * The snippet values that follow after the Header component of the ad that is shown.
         * @var string[]
         */
        public $Values;
    }

}
