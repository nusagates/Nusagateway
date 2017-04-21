<?php

$fp = fopen('config.json', 'w');
$config= array(
    "gammu"=>
    array(
        "gammu_path"=>"E:\systems\xampp\htdocs\app\Nusagateway\inc\gammu\bin"
        )
);
fwrite($fp, json_encode($config));
fclose($fp);