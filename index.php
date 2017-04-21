<?php
//exec('cd inc\gammu\bin & gammu 2>&1', $output, $return_var);
//print_r($output);
include_once 'db.php';
include_once 'class/Gammu.php';
include_once 'class/SMS.php';
$gammu = new Gammu();
$gammu->setPath("inc\gammu\bin");
//$gammu->service_start();
$sms= new SMS($gammu);
$sms->single_long("081575073873", "SMS Long character");
