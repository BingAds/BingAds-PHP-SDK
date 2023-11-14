<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the Google import options that are available via API.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/googleimportoption?view=bingads-13 GoogleImportOption Data Object
     * 
     * @uses ImportSearchAndReplaceForStringProperty
     */
    final class GoogleImportOption extends ImportOption
    {
        /**
         * Import the account level tracking template and final URL suffix.
         * @var boolean
         */
        public $AccountUrlOptions;

        /**
         * Reserved.
         * @var boolean
         */
        public $AdScheduleUseSearcherTimezone;

        /**
         * The percentage amount that you want to increase or decrease the new or existing Microsoft Advertising bids relative to your Google Ads bids.
         * @var double
         */
        public $AdjustmentForBids;

        /**
         * The percentage amount that you want to increase or decrease the new or existing Microsoft Advertising campaign budgets relative to your Google Ads campaign budgets.
         * @var double
         */
        public $AdjustmentForCampaignBudgets;

        /**
         * Note: AssociatedStoreId is deprecated.
         * @var integer
         */
        public $AssociatedStoreId;

        /**
         * The identifier of the Universal Event Tracking tag (UetTag) that you want to associate with imported remarketing lists.
         * @var integer
         */
        public $AssociatedUetTagId;

        /**
         * When enabled, we will not import negative bid modifiers for desktop targets except modifiers set to -100%.
         * @var boolean
         */
        public $AutoDeviceBidOptimization;

        /**
         * Removed Google Ads items will be deleted along with their associated sub-items.
         * @var boolean
         */
        public $DeleteRemovedEntities;

        /**
         * If the currency in your Google Ads account does not match the currency in your Microsoft Advertising ad account, the imported bids and budgets will be converted to their equivalent currency in Microsoft Advertising.
         * @var boolean
         */
        public $EnableAutoCurrencyConversion;

        /**
         * Google Ads location targets that are unsupported by Microsoft Advertising are expanded in scope and mapped to parent location targets that are supported.
         * @var boolean
         */
        public $EnableParentLocationMapping;

        /**
         * Import new active ads within existing ad groups.
         * @var boolean
         */
        public $NewActiveAdsForExistingAdGroups;

        /**
         * Import active campaigns that have not previously been imported.
         * @var boolean
         */
        public $NewActiveCampaignsAndChildEntities;

        /**
         * Import ad customizer feeds that have not previously been imported.
         * @var boolean
         */
        public $NewAdCustomizerFeeds;

        /**
         * Import new ad groups within existing campaigns.
         * @var boolean
         */
        public $NewAdGroupsAndChildEntitiesForExistingCampaigns;

        /**
         * Import ad schedules that have not previously been imported.
         * @var boolean
         */
        public $NewAdSchedules;

        /**
         * Import app extensions that have not previously been imported.
         * @var boolean
         */
        public $NewAppAdExtensions;

        /**
         * Import campaign and ad group targets and exclusions for in-market audiences.
         * @var boolean
         */
        public $NewAudienceTargets;

        /**
         * Import call extensions that have not previously been imported.
         * @var boolean
         */
        public $NewCallAdExtensions;

        /**
         * Import callout extensions that have not previously been imported.
         * @var boolean
         */
        public $NewCalloutAdExtensions;

        /**
         * Import demographic targets that have not previously been imported.
         * @var boolean
         */
        public $NewDemographicTargets;

        /**
         * Import device targets that have not previously been imported.
         * @var boolean
         */
        public $NewDeviceTargets;

        /**
         * The prerequisite option for importing new entities and settings into Microsoft Advertising.
         * @var boolean
         */
        public $NewEntities;

        /**
         * Reserved.
         * @var boolean
         */
        public $NewImageAdExtensions;

        /**
         * Import new keyword landing page URLs.
         * @var boolean
         */
        public $NewKeywordUrls;

        /**
         * Import new keywords within existing ad groups.
         * @var boolean
         */
        public $NewKeywordsForExistingAdGroups;

        /**
         * Import labels that have not previously been imported.
         * @var boolean
         */
        public $NewLabels;

        /**
         * Import location extensions that have not previously been imported.
         * @var boolean
         */
        public $NewLocationAdExtensions;

        /**
         * Import location targets that have not previously been imported.
         * @var boolean
         */
        public $NewLocationTargets;

        /**
         * Reserved.
         * @var boolean
         */
        public $NewLogoAdExtensions;

        /**
         * Import negative keyword lists that have not previously been imported.
         * @var boolean
         */
        public $NewNegativeKeywordLists;

        /**
         * Import new negative keywords for existing campaigns or existing ad groups.
         * @var boolean
         */
        public $NewNegativeKeywordsForExistingParents;

        /**
         * Import new negative sites for existing campaigns or existing ad groups.
         * @var boolean
         */
        public $NewNegativeSites;

        /**
         * Import page feeds that have not previously been imported.
         * @var boolean
         */
        public $NewPageFeeds;

        /**
         * Import paused ads along with your active ads.
         * @var boolean
         */
        public $NewPausedAdsForExistingAdGroups;

        /**
         * Import paused campaigns along with your active campaigns.
         * @var boolean
         */
        public $NewPausedCampaignsAndChildEntities;

        /**
         * Import price extensions that have not previously been imported.
         * @var boolean
         */
        public $NewPriceAdExtensions;

        /**
         * Import new product filters from your shopping campaigns.
         * @var boolean
         */
        public $NewProductFilters;

        /**
         * Import promotion extensions that have not previously been imported.
         * @var boolean
         */
        public $NewPromotionAdExtensions;

        /**
         * Import review extensions that have not previously been imported.
         * @var boolean
         */
        public $NewReviewAdExtensions;

        /**
         * Import sitelink extensions that have not previously been imported.
         * @var boolean
         */
        public $NewSitelinkAdExtensions;

        /**
         * Import structured snippet extensions that have not previously been imported.
         * @var boolean
         */
        public $NewStructuredSnippetAdExtensions;

        /**
         * Import tracking templates, custom parameters, and final URL suffix URL options with entities that have not previously been imported.
         * @var boolean
         */
        public $NewUrlOptions;

        /**
         * Reserved.
         * @var boolean
         */
        public $PauseAIMAdGroupIfAllAudienceCriterionNotImported;

        /**
         * When enabled this option will pause imported campaigns in case all of their location targets are unsupported by Microsoft Advertising.
         * @var boolean
         */
        public $PauseCampaignsWithoutSupportedLocations;

        /**
         * This option will pause newly imported campaigns allowing you to review your campaigns before you get your campaigns up and running.
         * @var boolean
         */
        public $PauseNewCampaigns;

        /**
         * Due to differences in Microsoft Advertising and Google Ads minimum bid requirements any bids below the our minimum amount will automatically be raised during import.
         * @var boolean
         */
        public $RaiseBidsToMinimum;

        /**
         * Due to differences in Microsoft Advertising and Google Ads minimum bid and budget requirements any budgets below our minimum amount will automatically be raised during import.
         * @var boolean
         */
        public $RaiseCampaignBudgetsToMinimum;

        /**
         * By enabling this option Microsoft Advertising will increase all product group bids to the minimum bid amount.
         * @var boolean
         */
        public $RaiseProductGroupBidsToMinimum;

        /**
         * Reserved.
         * @var boolean
         */
        public $RenameCampaignNameWithSuffix;

        /**
         * If you enable this option, the service will only fetch search ads from mixed campaigns and import them as search campaigns.
         * @var boolean
         */
        public $SearchAndDsaMixedCampaignAsSearchCampaign;

        /**
         * Set this option to find and replace a string within each campaign name during import.
         * @var ImportSearchAndReplaceForStringProperty
         */
        public $SearchAndReplaceForCampaignNames;

        /**
         * Set this option to find and replace a string within each custom parameter during import.
         * @var ImportSearchAndReplaceForStringProperty
         */
        public $SearchAndReplaceForCustomParameters;

        /**
         * Reserved.
         * @var ImportSearchAndReplaceForStringProperty
         */
        public $SearchAndReplaceForFinalURLSuffix;

        /**
         * Set this option to find and replace a string within each tracking template during import.
         * @var ImportSearchAndReplaceForStringProperty
         */
        public $SearchAndReplaceForTrackingTemplates;

        /**
         * Set this option to find and replace a string within each final URL, mobile URL, and destination URL during import.
         * @var ImportSearchAndReplaceForStringProperty
         */
        public $SearchAndReplaceForUrls;

        /**
         * Set this option to insert a string at the end of each campaign name during import.
         * @var string
         */
        public $SuffixForCampaignNames;

        /**
         * Set this option to insert a string at the end of each tracking template during import.
         * @var string
         */
        public $SuffixForTrackingTemplates;

        /**
         * Set this option to insert a string at the end of each final URL, mobile URL, and destination URL during import.
         * @var string
         */
        public $SuffixForUrls;

        /**
         * Import updates to existing ad customizer feeds.
         * @var boolean
         */
        public $UpdateAdCustomizerFeeds;

        /**
         * Import updates to the ad distribution of existing ad groups.
         * @var boolean
         */
        public $UpdateAdGroupNetwork;

        /**
         * Import updates to existing ad schedules.
         * @var boolean
         */
        public $UpdateAdSchedules;

        /**
         * Import updates to existing ad landing page URLs.
         * @var boolean
         */
        public $UpdateAdUrls;

        /**
         * Import updates to existing app extensions.
         * @var boolean
         */
        public $UpdateAppAdExtensions;

        /**
         * Import updates to existing audience targets.
         * @var boolean
         */
        public $UpdateAudienceTargets;

        /**
         * Update the existing campaign, ad group, and keyword bid strategies to match those currently in Google Ads.
         * @var boolean
         */
        public $UpdateBiddingStrategies;

        /**
         * When enabled this option allows you to update the existing keywords, auto-targets, and product ads bid types to match those currently in Google Ads.
         * @var boolean
         */
        public $UpdateBids;

        /**
         * Import updates to existing call extensions.
         * @var boolean
         */
        public $UpdateCallAdExtensions;

        /**
         * Import updates to existing callout extensions.
         * @var boolean
         */
        public $UpdateCalloutAdExtensions;

        /**
         * Import updates to the language of existing campaigns and ad groups.
         * @var boolean
         */
        public $UpdateCampaignAdGroupLanguages;

        /**
         * When enabled this option fetches updates to existing campaign budgets that are now in Microsoft Advertising.
         * @var boolean
         */
        public $UpdateCampaignBudgets;

        /**
         * By enabling this option Microsoft Advertising will update the names of previously imported campaigns if the name was updated in Google Ads.
         * @var boolean
         */
        public $UpdateCampaignNames;

        /**
         * Import updates to existing demographic targets.
         * @var boolean
         */
        public $UpdateDemographicTargets;

        /**
         * Import updates to existing device targets.
         * @var boolean
         */
        public $UpdateDeviceTargets;

        /**
         * The prerequisite option for importing updated entities and settings into Microsoft Advertising.
         * @var boolean
         */
        public $UpdateEntities;

        /**
         * Reserved.
         * @var boolean
         */
        public $UpdateImageAdExtensions;

        /**
         * Import updates to existing keyword landing page URLs.
         * @var boolean
         */
        public $UpdateKeywordUrls;

        /**
         * Import updates to existing labels.
         * @var boolean
         */
        public $UpdateLabels;

        /**
         * Import updates to existing location extensions.
         * @var boolean
         */
        public $UpdateLocationAdExtensions;

        /**
         * Import updates to existing location targets.
         * @var boolean
         */
        public $UpdateLocationTargets;

        /**
         * Reserved.
         * @var boolean
         */
        public $UpdateLogoAdExtensions;

        /**
         * Import updates to existing negative keyword lists.
         * @var boolean
         */
        public $UpdateNegativeKeywordLists;

        /**
         * Import updates to negative sites for existing campaigns and ad groups.
         * @var boolean
         */
        public $UpdateNegativeSites;

        /**
         * Import updates to existing page feeds.
         * @var boolean
         */
        public $UpdatePageFeeds;

        /**
         * Import updates to existing price extensions.
         * @var boolean
         */
        public $UpdatePriceAdExtensions;

        /**
         * When enabled this option updates product filters in shopping campaigns to match those currently in Google Ads.
         * @var boolean
         */
        public $UpdateProductFilters;

        /**
         * Import updates to existing promotion extensions.
         * @var boolean
         */
        public $UpdatePromotionAdExtensions;

        /**
         * Import updates to existing review extensions.
         * @var boolean
         */
        public $UpdateReviewAdExtensions;

        /**
         * Import updates to existing sitelink extensions.
         * @var boolean
         */
        public $UpdateSitelinkAdExtensions;

        /**
         * Reserved.
         * @var boolean
         */
        public $UpdateSitelinkUrls;

        /**
         * Import updates to the status of existing ad groups.
         * @var boolean
         */
        public $UpdateStatusForAdGroups;

        /**
         * Import updates to the status of existing ads.
         * @var boolean
         */
        public $UpdateStatusForAds;

        /**
         * Import updates to the status of existing campaigns.
         * @var boolean
         */
        public $UpdateStatusForCampaigns;

        /**
         * Import updates to the status of existing keywords.
         * @var boolean
         */
        public $UpdateStatusForKeywords;

        /**
         * Import updates to existing structured snippet extensions.
         * @var boolean
         */
        public $UpdateStructuredSnippetAdExtensions;

        /**
         * Import updates to the tracking templates, custom parameters, and final URL suffix of existing entities.
         * @var boolean
         */
        public $UpdateUrlOptions;
    }

}
