<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a negative keyword with match type.
     * @link http://msdn.microsoft.com/en-us/library/dn743739(v=msads.100).aspx NegativeKeyword Data Object
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
