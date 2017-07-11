<?php
// Generated on 7/10/2017 3:08:23 PM

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
