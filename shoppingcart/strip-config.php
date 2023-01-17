<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51MP4BhKm8uIwk1BTBZZrmjDfldq6SATIj9Qu66SSEbC0gKPrsRiIxqujCJMyqDqdsAQ6QCTDY68KfFlWSJ2AvgCZ007DTWZryd";

$secretKey="sk_test_51MP4BhKm8uIwk1BTMungFvypOeSIOvNShXOttWlmmy6bOddEb2YkbBiTjh5UdgfQe3LBOa1l9HaltxPSlbuDdLUx00Uwsc1LFb";

\Stripe\Stripe::setApiKey($secretKey);
?>