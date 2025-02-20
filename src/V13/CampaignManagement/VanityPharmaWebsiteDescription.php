<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a value set for VanityPharmaWebsiteDescription.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/vanitypharmawebsitedescription?view=bingads-13 VanityPharmaWebsiteDescription Value Set
     * 
     * @used-by VanityPharmaSetting
     */
    final class VanityPharmaWebsiteDescription
    {
        /** The website description is not specified. */
        const Unspecified = 'Unspecified';

        /** A prescription treatment website with website content in English. */
        const PrescriptionTreatmentWebsite_En = 'PrescriptionTreatmentWebsite_En';

        /** A prescription treatment website with website content in Spanish (Sitio de tratamientos con receta). */
        const PrescriptionTreatmentWebsite_Es = 'PrescriptionTreatmentWebsite_Es';

        /** A prescription device website with website content in English. */
        const PrescriptionDeviceWebsite_En = 'PrescriptionDeviceWebsite_En';

        /** A prescription treatment website with website content in Spanish. */
        const PrescriptionDeviceWebsite_Es = 'PrescriptionDeviceWebsite_Es';

        /** A medical device website with website content in English. */
        const MedicalDeviceWebsite_En = 'MedicalDeviceWebsite_En';

        /** A medical device website with website content in Spanish (Sitio de dispositivos medicos). */
        const MedicalDeviceWebsite_Es = 'MedicalDeviceWebsite_Es';

        /** A preventative treatment website with website content in English. */
        const PreventativeTreatmentWebsite_En = 'PreventativeTreatmentWebsite_En';

        /** A preventative treatment website with website content in Spanish (Sitio de tratamientos preventivos). */
        const PreventativeTreatmentWebsite_Es = 'PreventativeTreatmentWebsite_Es';

        /** A prescription contraception website with website content in English. */
        const PrescriptionContraceptionWebsite_En = 'PrescriptionContraceptionWebsite_En';

        /** A prescription contraception website with website content in Spanish (Sitio de anticonceptivos con receta). */
        const PrescriptionContraceptionWebsite_Es = 'PrescriptionContraceptionWebsite_Es';

        /** A prescription vaccine website with website content in English. */
        const PrescriptionVaccineWebsite_En = 'PrescriptionVaccineWebsite_En';

        /** A prescription vaccine website with website content in Spanish (Sitio de vacunas con receta). */
        const PrescriptionVaccineWebsite_Es = 'PrescriptionVaccineWebsite_Es';
    }

}
