<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The competition search parameter filter that you can include when requesting keyword ideas.
     * @link http://msdn.microsoft.com/en-us/library/mt784424(v=msads.110).aspx CompetitionSearchParameter Data Object
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
