
<?php 
require_once('gadget.php');
    //$gadgetName = new Gadgetclass(name, co2, ewaste, img link)

    $mobile = new Gadget('Mobile', 0.14, 0.13, 'images/mobile_phone.png');
    $laptop = new Gadget('Laptop', 3.21, 2.9, 'images/laptop.png');
    $printer = new Gadget("Printer", 15.69, 14.2, "images/printer.png");
    $router = new Gadget("Router", 2.27, 2.05, "images/router.png");
    $watch = new Gadget("watch", 0.16, 0.14, "images/watch.png");
    $kitchenapp = new Gadget("Kitchen_appliance", 1.78, 1.61, "images/kitchenapp.png");
    $ventilation = new Gadget("Ventilation", 7.74, 7, "images/ventilation.png");
    $microwave = new Gadget("Microwave", 15.03, 13.6, "images/microwave.png");
    $vacuum = new Gadget("Vacuum_Cleaner", 4.48, 4.05, "images/vacuum.png");
    $personalcare = new Gadget("Personal_Care", 0.44, 0.4, "images/personalcare.png");
    $crttv = new Gadget("CRT_TV ", 63, 18 ,"images/crttv.png"); 
    $lcdtv = new Gadget("LCD_TV", 20.04, 18.13, "images/lcdtv.png");
    $dishwasher = new Gadget("Dishwasher", 154, 50.54,"images/dishwasher.png");
    $washingmachine = new Gadget("Washing_Machine", 156, 65.7,"images/washingmachine.png");
    $fridge = new Gadget("Fridge",51, 45, "images/fridge.png");
    $ac = new Gadget("Air_Conditioning", 68, 36.82, "images/ac.png");
    $geyser = new Gadget("Geyser",24.65, 22.3,"images/geyser.png");
    $fluorescencetube = new Gadget("Fluorescencetube", 0.01, 0.14,"images/fluorescencetube.png");
    

    $gadgets = array($mobile,$laptop,$printer,$router,$watch,$kitchenapp,$ventilation,$microwave,$vacuum,$personalcare,$crttv,$lcdtv,$dishwasher,$washingmachine,$fridge,$ac,$geyser,$fluorescencetube);
    
    
?>