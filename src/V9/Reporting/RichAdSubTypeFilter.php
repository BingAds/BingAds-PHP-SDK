<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the rich ad types that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/hh180148(v=msads.90).aspx RichAdSubTypeFilter Value Set
     * 
     * @used-by RichAdComponentPerformanceReportFilter
     */
    final class RichAdSubTypeFilter
    {
        /** An ad that can contain a maximum of two images and four deep links. */
        const Rais2Images4Links = 'Rais2Images4Links';

        /** An ad that can contain a maximum of two images, two deep links, and an input form. */
        const Rais2Images2Links1Form = 'Rais2Images2Links1Form';

        /** A pharmaceutical ad. */
        const RaisPharma = 'RaisPharma';

        /** An ad that can contain one video and a maximum of four deep links. */
        const Rais1Video4Links = 'Rais1Video4Links';

        /** An ad that can contain one video, a maximum of two deep links, and an input form. */
        const Rais1Video2Links1Form = 'Rais1Video2Links1Form';

        /** An ad that can contain a maximum of four deep links. */
        const Rais4Links = 'Rais4Links';

        /** A Bing Shopping ad. */
        const RaisBingShopping = 'RaisBingShopping';
    }

}
