<?php 
  require_once('gdata.php');
  require_once('gadget.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>E-waste Calculator</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
    <header>
            <div class="header-left">
            <a href="http://localhost/E-waste/E-waste%20calculator/calc.php"><div class="logo"> <img class="lg" src = "green-energy.png">E-waste Calculator</div></a>
            </div>

            <div class="header-right">
                <ul>
                    
                    <li><a href="http://localhost/E-waste/recyclemap.html">Donate</a></li>
                    <li><a href="http://localhost/E-waste/recyclemap.html">Recycle</a></li>
                    <li><a class="ewaste" href="http://localhost/E-waste/index.php">Home</a></li>
                </ul>
            </div>
        </header>

        <div class="steps">
            <ul class = "flex-list">
                <li class="li1">Step 1</li>
                <li class="li2"><b>Step 2</b></li>
                <li class="li3"><b>Step 3</b></li>
            </ul>
            <ul class="flex-arrow">
                <li class="li1"><img class="arr" src= "https://weee4future.eitrawmaterials.eu/wp-content/uploads/2020/09/arrow.svg"></li>
                <li class="li2"><img class="arr" src= "https://weee4future.eitrawmaterials.eu/wp-content/uploads/2020/09/arrow.svg"></li>
                <li class="li3"><img class="arr" src= "https://weee4future.eitrawmaterials.eu/wp-content/uploads/2020/09/arrow.svg"></li>
            </ul>
        </div>

        <p class="text2">Calculation completed!</p>

        <div class="order-wrapper">
            <?php $totalEwaste = 0 ?>
            <?php $totalCo2 = 0 ?>
            <?php $equipments=0?>
            
            <?php foreach ($gadgets as $gd): ?>
                <?php 
                if(isset($_POST[$gd->getName()]))
                {
                    $equipments = $_POST[$gd->getName()];
                }
                ?>
                <?php if($equipments>0): ?>
                    <?php 
                        $gd->setEquipments($equipments);
                        $totalEwaste += $gd->getTotalEwaste();
                    ?>

                    <?php 
                        $gd->setEquipments($equipments);
                        $totalCo2 += $gd->getTotalCo2();
                    ?>
                <?php endif ?>
            <?php endforeach ?>
            <div class="s3">
                <p class ="totEwaste" >You collected a total of<span> <?php echo $totalEwaste ?> kg </span>of e-waste. </p>
                <p class="totco2" >Correctly recycled, this saves up to<span> <?php echo $totalCo2 ?> kg </span>CO2 equivalent.</p>
                <?php if($totalCo2>0): ?>
                    <p class ="equal">Which is equal to </p>
                <?php endif ?>
                
                <div class="trees">
                    <?php if($totalCo2>0): ?>
                        <?php $trees = (int)($totalCo2/21)?>
                        <p class="tree"><i class="fas fa-tree"></i> <span><?php echo $trees?></span> Trees</p>
                    <?php endif ?>
                </div>
                
                <div class="petrol">
                    <?php if($totalCo2>0): ?>
                        <?php $petrol = (int)($totalCo2/2.3)?></h3?>
                        <p class="petr"><i class="fas fa-gas-pump"></i> <span><?php echo $petrol?> L</span> of Petrol </p>
                    <?php endif ?>
                </div>
                
                <div class="plastic">
                    <?php if($totalCo2>0): ?>
                        <?php $plastic = (int)($totalCo2/6)?></h3?>
                        <p class="plas"><i class="fas fa-recycle"></i> <span><?php echo $plastic?> kg</span>  of Plastic</p>
                    <?php endif ?>
                </div>

            </div>
            
            

        </div>
        <footer>
        <div class="wrap">
        <a href="http://localhost/E-waste/index.php"><div class="logo"> <img class="lg" src = "green-energy.png"> E-waste Management System</div></a>
            <div id="contactus"> <h4> CONTACT US </h4> </div>
            <div id="info">
              <p> 500, Mumbai </p>
              <p>	T: 1300 229 837	</p>
              <p>	E: enquiries@Ewaste.com.in </p>
            </div>
			<div id="endline"> <p> @2021 - Ewaste </p> </div>
        </div>
        
        </footer>
    </body>
</html>