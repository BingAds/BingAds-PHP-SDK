<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes columns that you can include in the NegativeKeywordConflictReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/negativekeywordconflictreportcolumn?view=bingads-13 NegativeKeywordConflictReportColumn Value Set
     * 
     * @used-by NegativeKeywordConflictReportRequest
     */
    final class NegativeKeywordConflictReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The keyword text. */
        const Keyword = 'Keyword';

        /** The Microsoft Advertising assigned identifier of a keyword. */
        const KeywordId = 'KeywordId';

        /** The negative keyword text. */
        const NegativeKeyword = 'NegativeKeyword';

        /** The entity level where the keyword and negative keyword conflict occurs. */
        const ConflictLevel = 'ConflictLevel';

        /** The keyword bid match type. */
        const BidMatchType = 'BidMatchType';

        /** The Microsoft Advertising assigned identifier of a negative keyword list. */
        const NegativeKeywordListId = 'NegativeKeywordListId';

        /** The name of the negative keyword list. */
        const NegativeKeywordList = 'NegativeKeywordList';

        /** The Microsoft Advertising assigned identifier of a negative keyword. */
        const NegativeKeywordId = 'NegativeKeywordId';

        /** The type of match to compare the negative keyword and the user's search term. */
        const NegativeKeywordMatchType = 'NegativeKeywordMatchType';

        /** The current account status. */
        const AccountStatus = 'AccountStatus';

        /** The current campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The current ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The current keyword status. */
        const KeywordStatus = 'KeywordStatus';

        /** The type of negative keyword conflict encountered. */
        const ConflictType = 'ConflictType';
    }

}
