<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the possible components of a rich ad that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/hh180146(v=msads.90).aspx ComponentTypeFilter Value Set
     * 
     * @used-by RichAdComponentPerformanceReportFilter
     */
    final class ComponentTypeFilter
    {
        /** The title of the ad that contains a hyperlink to a destination URL. */
        const Basic = 'Basic';

        /** A hyperlink to a webpage inside the destination website. */
        const Deeplink = 'Deeplink';

        /** An entry form on the ad that gathers data from the user. */
        const Form = 'Form';

        /** An image in the ad that contains a hyperlink to a destination URL. */
        const Image = 'Image';

        /** The icon that displays next to the display URL. */
        const FavoriteIcon = 'FavoriteIcon';

        /** A video embedded in the ad that the user can click to play. */
        const Video = 'Video';

        /** A link in a pharmaceutical ad that links to additional drug information. */
        const TitledLink = 'TitledLink';
        const Unknown = 'Unknown';
    }

}
