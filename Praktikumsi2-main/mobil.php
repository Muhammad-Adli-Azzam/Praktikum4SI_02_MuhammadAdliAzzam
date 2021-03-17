<?php

class Mobil{


    public function __construct($name,$wheel){
        $this->name = $name;
        $this->wheel = $wheel;

    }

  
    public function jalan()
    {
        return "mobil sedang berjalan";
    }


}

$mobilYazid = new Mobil("BMW","4");
echo $mobilYazid->name;
echo "<br>";
echo $mobilYazid->wheel;
?>