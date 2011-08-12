<?php

$frequency = null;
$times = 5;

for ($i = 1; $i <= $times; $i++) {
    require "twilio/sms/send.php";
}


?>