<?php

return array(
    'settings' => array(
        'displayErrorDetails' => true,
        'defaultValues' => array(
            'originUrl' => '{BASE}',
            'callbackUrl' => '{BASE}/callback',
            'confirmUrl' => '{BASE}/confirm',
            'successUrl' => '{BASE}/success',
            'cancelUrl' => '{BASE}/cancel',
            'failureUrl' => '{BASE}/failure',
            'pendingUrl' => '{BASE}/pending',
            'serviceUrl' => '{BASE}/imprint',
            'returnUrl' => '{BASE}/fallback',
            'language' => 'en',
            'customerStatement' => 'WCS Example',
            'autoDeposit' => false,
            'transactionIdentifier' => 'INITIAL',
            'shippingLocationProfile' => 'WDCEDACH',
            'suppressShippingAddressEnabled' => false,
            'orderDescription' => 'test order',
            'orderIdent' => 'Order-1234-5',
            'totalAmount' => '1.0',
            'totalAmountCurrency' => 'EUR',
            'articleNumber' => '',
            'name' => '',
            'description' => '',
            'quantity' => '',
            'imageUrl' => '',
            'unitGrossAmount' => '',
            'unitGrossAmountCurrency' => '',
            'unitTaxAmount' => '',
            'unitTaxAmountCurrency' => '',
            'unitNetAmount' => '',
            'unitNetAmountCurrency' => '',
            'unitTaxRate' => '',
            'consumerEmail' => 'joe.doe@example.com',
            'consumerBirthDate' => '1991-01-01',
            'consumerBillingFirstname' => 'Joe',
            'consumerBillingLastname' => 'Doe',
            'consumerBillingAddress1' => 'Example Street',
            'consumerBillingAddress2' => '66',
            'consumerBillingCity' => 'Vienna',
            'consumerBillingState' => 'Vienna',
            'consumerBillingCountry' => 'AT',
            'consumerBillingZipCode' => '1000',
            'consumerBillingPhone' => '0043123456789',
            'consumerBillingFax' => '00431234567890',
            'consumerShippingFirstname' => 'Joe',
            'consumerShippingLastname' => 'Doe',
            'consumerShippingAddress1' => 'Example Street',
            'consumerShippingAddress2' => '66',
            'consumerShippingCity' => 'Vienna',
            'consumerShippingState' => 'Vienna',
            'consumerShippingCountry' => 'AT',
            'consumerShippingZipCode' => '1000',
            'consumerShippingPhone' => '0043123456789',
            'consumerShippingFax' => '00431234567890',
            'cardHolderName' => 'John Doe',
            'pan' => '9500000000000001',
            'expirationYear' => '2030',
            'expirationMonth' => '01',
            'cardVerifyCode' => '123'
        ),
        'allowedCardTypes' => array(
            'amex',
            'diners',
            'discover',
            'jcb',
            'maestro',
            'master',
            'visa'
        ),
        'apiClientCredentials' => array(
            'merchantId' => 'D200001-demoshopwcs',
            'merchantSecret' => 'af9e76458832fa5424fcff366c3b5e5f'
        ),
        'checkoutClientCredentials' => array(
            'customerId' => 'D200001',
            'shopId' => 'demoshopwcs',
            'secret' => 'B8AKTPWBRMNBV455FG6M2DANE99WU2'
        ),
    )
);