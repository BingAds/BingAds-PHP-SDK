<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/systemaidetectionsignal?view=bingads-13 SystemAIDetectionSignal Value Set
     *
     * @used-by MediaMetaData
     * @used-by Video
     */
    final class SystemAIDetectionSignal
    {
        /** Reserved. */
        const NotSupportedForGivenRevision = 'NotSupportedForGivenRevision';

        /** Reserved. */
        const MicrosoftAIGenerated = 'MicrosoftAIGenerated';

        /** Reserved. */
        const AISignatureDetected = 'AISignatureDetected';

        /** Reserved. */
        const NoSignalDetected = 'NoSignalDetected';
    }

}
