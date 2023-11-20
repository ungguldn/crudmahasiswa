<?php
class laundry
{

    function bayar($jenis, $berat, $pdalam = true, $struk = true)
    {

        $setrika = 3500;
        $cuset = 5000;
        $pkdalam = 5000;
        $lupa = 10000;

        if ($jenis == 'setrika') {
            $total = $setrika * $berat;
            echo "total yang harus dibayar dengan jenis laundry " . $jenis . " adalah rp. " . $total ;
            echo "<br/>";
            
        } elseif ($jenis == 'cuset') {
            $total = $cuset * $berat;
            echo "total yang harus dibayar dengan jenis laundry " . $jenis . " adalah rp. " . $total;
            echo "<br/>";
        } 

        if($pdalam){
            $total+=5000;
            echo"anda dikenakan denda sebesar ". $pkdalam." karna membawa pakaian dalam dan total nya ".$total;

        }
        
        if($struk){
            $total+=10000;
            echo"anda dikenakan denda sebesar ". $lupa." karna lupa bawa struk dan total nya ".$total;
        }
    }
}
