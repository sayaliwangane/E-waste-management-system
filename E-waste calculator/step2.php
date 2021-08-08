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

        <div class="wrapper2">
            <p class="ptext2">Pick all icons that represent your old,<br> broken, or neglected gadgets from the lists.</p>
        </div>

        <div class="steps">
            <ul class = "flex-list">
                <li class="li1">Step 1</li>
                <li class="li2"><b>Step 2</b></li>
                <li class="li3">Step 3</li>
            </ul>
            <ul class="flex-arrow">
                <li class="li1"><img class="arr" src= "https://weee4future.eitrawmaterials.eu/wp-content/uploads/2020/09/arrow.svg"></li>
                <li class="li2"><img class="arr" src= "https://weee4future.eitrawmaterials.eu/wp-content/uploads/2020/09/arrow.svg"></li>
                <li class="li3"><img class="arr" src= "https://weee4future.eitrawmaterials.eu/wp-content/uploads/2020/09/arrow_light.svg"></li>
            </ul>
        </div>
        <div class="gadget-wrapper container">
            <form method="post" action="step3.php">
                <div class="gadget-items">
                    <?php foreach ($gadgets as $gadget): ?>
                        <div class="gadget-item">
                            <img src="<?php echo $gadget->getImage() ?>" class="gadget-item-image">
                            
                            <h3 class="gadget-item-name">
                                <?php echo $gadget->getName() ?>
                            </h3>
                            
                            
                            <div class="input-wrap">
                                <div class="subtract" onclick="subtracting(this)">-</div>
                                <input type="text" value="0" name="<?php echo $gadget->getName() ?>">
                                <div class="add" onclick="adding(this)">+</div>
                            </div>

                        </div>
                    <?php endforeach ?>
                </div>
                <input type="submit" value="RESULT">
            </form>
        </div>
        <script type="text/javascript" id="ct_code_block_js_4">
            var adding = function(clicked)
            {
                clicked.previousElementSibling.value ++;
                clicked.previousElementSibling.style.color="black";
            }

            var subtracting = function(clicked)
            {
                clicked.nextElementSibling.value --;
                if(clicked.nextElementSibling.value <= 0)
                {
                    clicked.nextElementSibling.style.color="grey";
                    clicked.nextElementSibling.value = 0;
                }
        }

        </script>
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