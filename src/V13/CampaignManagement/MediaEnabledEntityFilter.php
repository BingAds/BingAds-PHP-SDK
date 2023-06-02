<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible values representing entities that are enabled for media such as images.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/mediaenabledentityfilter?view=bingads-13 MediaEnabledEntityFilter Value Set
     * 
     * @used-by MediaAssociation
     * @used-by GetMediaAssociationsRequest
     * @used-by GetMediaMetaDataByAccountIdRequest
     */
    final class MediaEnabledEntityFilter
    {
        /** The media enabled entity is an ImageAdExtension. */
        const ImageAdExtension = 'ImageAdExtension';

        /** The media enabled entity is an ResponsiveAd. */
        const ResponsiveAd = 'ResponsiveAd';
    }

}
