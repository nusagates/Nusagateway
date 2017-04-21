<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Class ini digunakan untuk menghandel proses sms yang dijalankan melalui sistem Gammu. <br/>
 * File yang digunakan pada class ini adalah <b>gammu-smsd-inject.exe</b> yang terletak di dalam folder inc/gammu/bin
 * 
 * @author nusagates <nusagates@gmail.com>
 */
class SMS {
    private $sms;
    function __construct($sms) {
        return $this->sms=$sms;
    }

    public function single_short($number, $text){
        exec("cd ".$this->sms->getPath().' & gammu-smsd-inject -c smsdrc TEXT '.$number.' -text "'.$text.'" 2>&1', $output);
        foreach ($output as $o){
            echo $o;
        }
    }
    public function single_long($number, $text){
        exec("cd ".$this->sms->getPath().' & gammu-smsd-inject -c smsdrc TEXT '.$number.' -len 400 -text "'.$text.'" 2>&1', $output);
        foreach ($output as $o){
            echo $o;
        }
    }
}
