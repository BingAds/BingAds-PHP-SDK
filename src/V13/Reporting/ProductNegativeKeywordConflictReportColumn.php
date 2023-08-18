<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes columns that you can include in the ProductNegativeKeywordConflictReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/productnegativekeywordconflictreportcolumn?view=bingads-13 ProductNegativeKeywordConflictReportColumn Value Set
     * 
     * @used-by ProductNegativeKeywordConflictReportRequest
     */
    final class ProductNegativeKeywordConflictReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The current account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The current campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The current ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The unique identifier provided by a merchant for each product offer. */
        const MerchantProductId = 'MerchantProductId';

        /** The product item name. */
        const Title = 'Title';

        /** The Microsoft Advertising assigned identifier of an ad group criterion. */
        const AdGroupCriterionId = 'AdGroupCriterionId';

        /** The backward slash delimited list of product conditions, reported as Operand = Attribute. */
        const ProductGroup = 'ProductGroup';

        /** The Microsoft Advertising assigned identifier of a negative keyword. */
        const NegativeKeywordId = 'NegativeKeywordId';

        /** The negative keyword text. */
        const NegativeKeyword = 'NegativeKeyword';

        /** The Microsoft Advertising assigned identifier of a negative keyword list. */
        const NegativeKeywordListId = 'NegativeKeywordListId';

        /** The entity level where the keyword and negative keyword conflict occurs. */
        const ConflictLevel = 'ConflictLevel';

        /** The type of match to compare the negative keyword and the user's search term. */
        const NegativeKeywordMatchType = 'NegativeKeywordMatchType';

        /** The campaign type. */
        const CampaignType = 'CampaignType';

        /** The Microsoft Advertising assigned identifier of an asset group. */
        const AssetGroupId = 'AssetGroupId';

        /** The asset group name. */
        const AssetGroupName = 'AssetGroupName';

        /** The asset group status. */
        const AssetGroupStatus = 'AssetGroupStatus';
    }

}
