<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a negative keyword with match type.
     * @link http://msdn.microsoft.com/en-us/library/dn743739(v=msads.110).aspx NegativeKeyword Data Object
     * 
     * @uses MatchType
     * @used-by EntityNegativeKeyword
     */
    final class NegativeKeyword extends SharedListItem
    {
        public $Id;
        public $MatchType;
        public $Text;
    }

}
