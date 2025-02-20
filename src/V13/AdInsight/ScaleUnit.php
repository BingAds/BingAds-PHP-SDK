<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a value set for the scale unit.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/scaleunit?view=bingads-13 ScaleUnit Value Set
     * 
     * @used-by DecimalRoundedResult
     */
    final class ScaleUnit
    {
        /** The scale unit is billion. */
        const Billion = 'Billion';

        /** The scale unit is million. */
        const Million = 'Million';

        /** The scale unit is thousand. */
        const Thousand = 'Thousand';

        /** There is no scale unit. */
        const None = 'None';
    }

}
