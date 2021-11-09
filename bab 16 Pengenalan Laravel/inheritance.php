<?php

    //parent class
    class warga {
        protected $kota="Aku warga Situbondo";
        public function kecamatan(){
            return "<br> Aku dari kecamatan Banyuputih";
        }
    }

    //child class
    class orang extends warga{
        function kenalkan(){
            return "Halo, Aku Insa'atus Sholehah. " . $this->kota;
        }    
    }

    //instansiasi dari class orang
    $obj_orang = new orang();
    echo $obj_orang->kenalkan();
    echo $obj_orang->kecamatan();
?>