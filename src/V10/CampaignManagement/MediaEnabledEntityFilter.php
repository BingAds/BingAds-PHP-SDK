<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the possible values representing entities that are enabled for media such as images.
     * @link http://msdn.microsoft.com/en-us/library/dn766195(v=msads.100).aspx MediaEnabledEntityFilter Value Set
     * 
     * @used-by MediaAssociation
     * @used-by GetMediaAssociationsRequest
     * @used-by GetMediaMetaDataByAccountIdRequest
     */
    final class MediaEnabledEntityFilter
    {
        /** The media enabled entity is an ImageAdExtension. */
        const ImageAdExtension = 'ImageAdExtension';
    }

}
