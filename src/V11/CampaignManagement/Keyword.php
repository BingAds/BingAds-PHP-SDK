<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a keyword.
     * @link http://msdn.microsoft.com/en-us/library/bb671833(v=msads.110).aspx Keyword Data Object
     * 
     * @uses Bid
     * @uses BiddingScheme
     * @uses KeywordEditorialStatus
     * @uses AppUrl
     * @uses KeyValuePairOfstringstring
     * @uses MatchType
     * @uses KeywordStatus
     * @uses CustomParameters
     * @used-by AddKeywordsRequest
     * @used-by GetKeywordsByAdGroupIdResponse
     * @used-by GetKeywordsByEditorialStatusResponse
     * @used-by GetKeywordsByIdsResponse
     * @used-by UpdateKeywordsRequest
     */
    final class Keyword
    {
        /**
         * The bid to use when the user's search term and the keyword match.
         * @var Bid
         */
        public $Bid;

        /**
         * The bid strategy type for how you want to manage your bids.
         * @var BiddingScheme
         */
        public $BiddingScheme;

        /**
         * The URL of the webpage to take the user to when they click the ad.
         * @var string
         */
        public $DestinationUrl;

        /**
         * The editorial review status of the keyword, which indicates whether the keyword is pending review, has been approved, or has been disapproved.
         * @var KeywordEditorialStatus
         */
        public $EditorialStatus;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * The mobile landing page URL.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * The landing page URL.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The system-generated identifier of the keyword.
         * @var integer
         */
        public $Id;

        /**
         * The type of match to compare the keyword and the user's search term.
         * @var MatchType
         */
        public $MatchType;

        /**
         * The string to use as the substitution value in an ad if the ad's title, text, display URL, or destination URL contains the {Param1} dynamic substitution string.
         * @var string
         */
        public $Param1;

        /**
         * The string to use as the substitution value in an ad if the title, text, display URL, or destination URL contains the {Param2} dynamic substitution string.
         * @var string
         */
        public $Param2;

        /**
         * The string to use as the substitution value in an ad if the title, text, display URL, or destination URL contains the {Param3} dynamic substitution string.
         * @var string
         */
        public $Param3;

        /**
         * The keyword's status.
         * @var KeywordStatus
         */
        public $Status;

        /**
         * The keyword text.
         * @var string
         */
        public $Text;

        /**
         * The tracking template to use as a default for all FinalUrls and FinalMobileUrls.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

}
