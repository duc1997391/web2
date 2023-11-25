<?php
class CSinhVien_20810206 {
    var $masv;
    var $tensv;
    var $dtb;

    function __construct($masv = null, $tensv = null, $diem = null) {
        $this->setInfo($masv, $tensv, $diem);
    }

    public function setInfo($masv, $tensv, $diem) {
        $this->masv = $masv;
        $this->tensv = $tensv;
        $this->dtb = $diem;
    }

    public function isPass() {
        return $this->dtb >= 5;
    }

    public function isFail() {
        return !$this->isPass();
    }
}
?>