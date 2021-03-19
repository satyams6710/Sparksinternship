
<!DOCTYPE html>
<head>
        <link rel="stylesheet" href="styleofcustomers.css">
        <title>
BANK SYSTEM
        </title>
    </head>
    <body>
        <div class=upperbox>
            <section class="img">
            <a href="SparksProject/topnavpic.jpeg"></a>
        <h1>The Bank of Sparks Foundation</h1>
        </div>
<a href="index.php" class="back"  type="button" >Home</a>

</div>
        <div class=details>
        <a>History Of All Transaction:</a></div>
        
</section>
</div>
<div class=body>

<?php
require "connect.php";
$sql="SELECT * FROM history";
$result = $conn->query($sql);

$result= mysqli_fetch_all($result);

foreach ($result as &$value){
    echo "<section align='center'> <font color=black  size='6pt'>₹ $value[1] Sent To: $value[0] ,Account_No: $value[2] At $value[3] </font> </section>";
    

  
    
    echo nl2br("\n");
    

    
    
}

?>

</div>
</body>
</html>
