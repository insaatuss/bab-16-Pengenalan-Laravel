<?php

    class orang{
        //property
        #var $nama;
        #var $asal;

        #public $nama;
        #public $asal;

        private $nama;
        private $asal;

        //constructor
        function __construct($NamaOrang, $AsalOrang)
        {
            echo "Construct otomatis dijalankan.. <br>";

            //mengubah value property
            $this->nama=$NamaOrang;
            $this->asal=$AsalOrang;
        }

        //destructor
        function __destruct()
        {
            echo "Destruct dijalankan terakhir";
        }

        //method
        function kenalkan(){
            return "Halo, Aku ". $this->nama ." dari ". $this->asal ."<br>";
        }
    }

    //instasisasi dari class orang
    $obj_orang = new orang("Atus", "Situbondo");
    echo $obj_orang->kenalkan();

?>