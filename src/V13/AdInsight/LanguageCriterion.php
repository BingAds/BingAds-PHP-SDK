<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The language criterion that you can include when requesting keyword ideas or traffic estimates.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/languagecriterion?view=bingads-13 LanguageCriterion Data Object
     * 
     * @used-by LanguageSearchParameter
     */
    final class LanguageCriterion extends Criterion
    {
        /**
         * The language that you require.
         * @var string
         */
        public $Language;
    }

}
