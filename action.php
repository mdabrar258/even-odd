
<?php require ('header.html')?>

<body>
    <div class="head"><h1>Assalamu alaikum</h1></div>

        <div class="login">

        <div class="top"><h2>Output</h2></div>

        <div class="output">

               <h2> 
                <?php
                if($_POST['number'] % 2 == 0){
                    echo "It's EVEN";
                }elseif($_POST['number'] % 2 == 1){
                    echo "It's ODD";
                }
                else {echo "Opps... <br> You Don't Enter Any Number";}
                    
                ?>
                </h2>
         </div>

        </div>>



</body>