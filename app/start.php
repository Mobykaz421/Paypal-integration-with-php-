<?php
require 'vendor/autoload.php';

define('SITE_URL', 'http://localhost/paypal_int');

$paypal =  new \PayPal\Rest\ApiContext(

    new \PayPal\Auth\OAuthTokenCredential(
        'Aagy81XH721lA2evbeLxnMRx0CJ3uNcYOIPToAU6Zf5amtoy_jH64HOCMV1T86J9mNOc79JnbgHDb5tA',
        'EKwUWoVqr4uAEyyFDrARl1K_z3ta8S27MPtBMrmJUK-NU5ZsftJ-GzcfYvD2zCH7zLm1-zGSNOgwDpxB'
    )
);
