<?php
/**
 * Class ini digunakan untuk menghandel Gammu melalui exec.
 *
 * @author Nusagates <nusagates@gmail.com>
 */
class Gammu {
    private $gammu_path;
    /**
     * 
     * Fungsi untuk menentukan lokasi gammu.exe
     * @param String $dir
     * @return string
     */
    public function setPath($dir){
      return  $this->gammu_path = $dir;
    }
    public function getPath(){
        return $this->gammu_path;
    }

    /**
     * 
     * Fungsi untuk mendeteksi device/modem yang digunakan untuk sms
     * @return string
     */
    public function identify(){
        exec("cd ".$this->gammu_path." & gammu identify 2>&1", $output, $val);
        return print_r($output);
    }
    /**
     * Fungsi untuk membuat (install) service gammu menggunakan argumen <b><code>gammu-smsd -c smsdrc -i</code></b>. <br/>Fungsi ini jika dijalankan akan memunculkan dialog run as administrator. <br><br>
     * Do you want to allow this app from an unknown publisher to make changes to your defice?<br><br>
     * Klik yes untuk melanjutkan.
     * @return string
     */
    public function service_install(){
        exec("cd ".$this->gammu_path." & gammu-smsd -c smsdrc -i 2>&1", $output, $val);
        echo print_r($output);
    }
    /**
     * Fungsi untuk membuat (uninstall) service gammu menggunakan argumen <b><code>gammu-smsd -c smsdrc -u</code></b>. <br/>Fungsi ini jika dijalankan akan memunculkan dialog run as administrator. <br><br>
     * Do you want to allow this app from an unknown publisher to make changes to your defice?<br><br>
     * Klik yes untuk melanjutkan.
     * @return string
     */
    public function service_uninstall(){
        exec("cd ".$this->gammu_path." & gammu-smsd -c smsdrc -u 2>&1", $output, $val);
        echo print_r($output);
    }
    /**
     * Fungsi untuk menjalankan (start) service gammu menggunakan argumen <b><code>gammu-smsd -c smsdrc -s</code></b>. <br/>Fungsi ini jika dijalankan akan memunculkan dialog run as administrator. <br><br>
     * Do you want to allow this app from an unknown publisher to make changes to your defice?<br><br>
     * Klik yes untuk melanjutkan.
     * @return string
     */
    public function service_start(){
        exec("cd ".$this->gammu_path." & gammu-smsd -c smsdrc -s 2>&1", $output, $val);
        return print_r($output);
    }
    /**
     * Fungsi untuk memberhentikan (stop/kill) service gammu menggunakan argumen <b><code>gammu-smsd -c smsdrc -k</code></b>. <br/>Fungsi ini jika dijalankan akan memunculkan dialog run as administrator. <br><br>
     * Do you want to allow this app from an unknown publisher to make changes to your defice?<br><br>
     * Klik yes untuk melanjutkan.
     * @return string
     */
    public function service_stop(){
        exec("cd ".$this->gammu_path." & gammu-smsd -c smsdrc -k 2>&1", $output, $val);
        return print_r($output);
    }
}
