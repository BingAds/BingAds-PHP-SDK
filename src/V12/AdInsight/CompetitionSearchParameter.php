<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * The competition search parameter filter that you can include when requesting keyword ideas.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/competitionsearchparameter?view=bingads-12 CompetitionSearchParameter Data Object
     * 
     * @uses CompetitionLevel
     */
    final class CompetitionSearchParameter extends SearchParameter
    {
        /**
         * The competition levels that you want for the returned keyword ideas.
         * @var CompetitionLevel[]
         */
        public $CompetitionLevels;
    }

}
