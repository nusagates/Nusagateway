<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=sms_gateway", "root", "beta");
} catch (Exception $ex) {
    echo $ex->getMessage();
}