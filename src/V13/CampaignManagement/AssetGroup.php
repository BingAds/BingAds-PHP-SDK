<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an asset group in an advertising campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/assetgroup?view=bingads-13 AssetGroup Data Object
     * 
     * @uses CallToAction
     * @uses AssetLink
     * @uses AssetGroupEditorialStatus
     * @uses Date
     * @uses KeyValuePairOfstringstring
     * @uses AssetGroupStatus
     * @used-by AddAssetGroupsRequest
     * @used-by GetAssetGroupsByCampaignIdResponse
     * @used-by GetAssetGroupsByIdsResponse
     * @used-by UpdateAssetGroupsRequest
     */
    final class AssetGroup
    {
        /**
         * The name of the business.
         * @var string
         */
        public $BusinessName;

        /**
         * A brief, punchy reason for customers to click your ad right now.
         * @var CallToAction
         */
        public $CallToAction;

        /**
         * The descriptions that are shown below the path in your ad.
         * @var AssetLink[]
         */
        public $Descriptions;

        /**
         * The editorial review status of the asset group, which indicates whether the asset group is pending review, has been approved, or has been disapproved.
         * @var AssetGroupEditorialStatus
         */
        public $EditorialStatus;

        /**
         * The date that the asset group will expire.
         * @var Date
         */
        public $EndDate;

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
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * Headlines are the most prominent text that appears in your ad, so you should make the most out of the available characters.
         * @var AssetLink[]
         */
        public $Headlines;

        /**
         * The system generated asset group ID.
         * @var integer
         */
        public $Id;

        /**
         * Image assets with different sizes and aspect ratios so they can flexibly display across a variety of publishers and placements.
         * @var AssetLink[]
         */
        public $Images;

        /**
         * You must set between 1-5 long headlines.
         * @var AssetLink[]
         */
        public $LongHeadlines;

        /**
         * The name of the asset group.
         * @var string
         */
        public $Name;

        /**
         * The first part of the optional path that will be appended to the domain portion of your display URL.
         * @var string
         */
        public $Path1;

        /**
         * The second part of the optional path that will be appended to the domain portion of your display URL.
         * @var string
         */
        public $Path2;

        /**
         * The date that the asset group can begin serving; otherwise, the service can begin serving ads the day that the asset group becomes active.
         * @var Date
         */
        public $StartDate;

        /**
         * The status of the Asset group.
         * @var AssetGroupStatus
         */
        public $Status;
    }

}
