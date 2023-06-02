<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines possible payment methods for a Microsoft Advertising account.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/paymentmethodtype?view=bingads-13 PaymentMethodType Value Set
     * 
     * @used-by AdvertiserAccount
     */
    final class PaymentMethodType
    {
        /** The payments are made with a credit card. */
        const CreditCard = 'CreditCard';

        /** An invoice is sent to the customer requesting payment. */
        const Invoice = 'Invoice';

        /** The payments are made with a check. */
        const Check = 'Check';

        /** The payments are made with an electronic funds transfer. */
        const ElectronicFundsTransfer = 'ElectronicFundsTransfer';

        /** A payment service that allows customers to pay for their Microsoft Advertising transactions online. */
        const PayPal = 'PayPal';

        /** The ELV value represents the SEPA payment method. */
        const ELV = 'ELV';

        /** Meant to signal when a customer is funding a prepay account by making payment via a check or a bank transfer. */
        const OfflinePaymentMethod = 'OfflinePaymentMethod';

        /** Virtual Bank Account is a form of payment used widely in Taiwan. */
        const VBA = 'VBA';

        /** Boleto is a form of payment used widely in Brazil. */
        const Boleto = 'Boleto';
    }

}
