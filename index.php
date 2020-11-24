<?php

# ปรับแก้ตามชื่อที่แชร์
$share = "opentpn";

# code ==================================================
$test = false;
require __DIR__ . '/vendor/autoload.php';
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;


try {

    $connector = new WindowsPrintConnector($share);
    
    $printer = new Printer($connector);

    if($test) {
        for ($i=0; $i < 10; $i++) { 
            $printer -> text("Hello World!\n");
        }
        $printer -> cut();
    }
    

    $printer -> pulse();
    
    $printer -> close();

    return 1;

} catch (\Exception $e) {

    return $e;

}
# =======================================================