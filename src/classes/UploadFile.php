<?php

/**
 * Description of Upload
 *
 * @author def
 */

namespace src\classes;

class UploadFile {

    private $f_name;
    private $f_ext;
    private $f_size;
    private $f_uploaddir;
    private $config;
    private $vin;

    public function __construct($vin) {

        $_config = parse_ini_file("../../appconfig/appconfig.ini", true);

        $this->config = $_config['app'];

        $this->f_uploaddir = $this->config['uploaddir'];

        $this->vin = $vin;
    }
/***
 * 
 * 
 * 
 * 
 */
    public function upload($obj) {

        if (isset($obj)) {

            for ($i = 0; $i < count($obj['file']['name']); $i++) {

                //Get the temp file path
                $tmpFilePath = $obj['file']['tmp_name'][$i];

                $fb = basename($obj['file']['name'][$i]);

                $this->f_ext = end(explode('.', $fb));

                $new = $this->vin . "_$i." . $this->f_ext;

                rename($fb, $new);

                if ($tmpFilePath != "") {

                    $newFilePath = $this->f_uploaddir . "/" . $new;

                    move_uploaded_file($tmpFilePath, $newFilePath);
                }
            }
        }
    }
    
/***
 * 
 * 
 * 
 * angularjs passing data
 */
    public function upload_s($obj, $snt) {

        if (isset($obj)) {

            $tmpFilePath = $obj['file']['tmp_name'];

            $fb = basename($obj['file']['name']);

            $this->f_ext = end(explode('.', $fb));

            $new = $this->vin . "_$snt" . "." . $this->f_ext;

            rename($fb, $new);

            if ($tmpFilePath != "") {

                $newFilePath = $this->f_uploaddir . "/" . $new;

                move_uploaded_file($tmpFilePath, $newFilePath);
            }
        }
    }

    public function __destruct() {

        $this->f_name = null;

        $this->f_ext = null;

        $this->f_size = null;

        $this->f_uploaddir = null;

        $this->config = null;

        $this->vin = null;
    }

    public function getF_name() {
        return $this->f_name;
    }

    public function getF_ext() {
        return $this->f_ext;
    }

    public function getF_size() {
        return $this->f_size;
    }

    public function setF_name($f_name) {
        $this->f_name = $f_name;
    }

    public function setF_ext($f_ext) {
        $this->f_ext = $f_ext;
    }

    public function setF_size($f_size) {
        $this->f_size = $f_size;
    }

}
