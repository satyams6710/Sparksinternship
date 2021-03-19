<?php

session_start();
require "connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $transferto=$_POST["transferto"];
    $amount=$_POST["transferamount"];
    $sql2="SELECT * FROM allusers WHERE name='$transferto' ";
    $varrr=mysqli_query($conn,$sql2);
    $varrr2 =mysqli_fetch_assoc($varrr);
    $transferfrom=$_SESSION['data']['name'];
   if(is_null($varrr)){
       header("Location:index.php?unsucessful");
   }
   else{
    
       
    
   
    


    $paisadalo=$varrr2['current_balance'];
    $paisanikalo=$_SESSION['data']['current_balance'];
    $kitnapaisa=$amount;
    $finalpaisa=$paisanikalo-$amount;
    $sql3="UPDATE allusers SET current_balance='$finalpaisa' WHERE name='$transferfrom' ";
    $result1 = $conn->query($sql3);
    $finalpaisa2=$paisadalo+$amount;
    $sql4="UPDATE allusers SET current_balance='$finalpaisa2' WHERE name='$transferto' ";
    $result2 = $conn->query($sql4);
    $_SESSION['transaction1']=$result1;
    $_SESSION['transaction2']=$result2;
    header("Location:index.php?msg=Successful");
   }
    

}
else{
$x=$_GET['name'];
$sql="SELECT * FROM allusers WHERE name='$x' ";
$varr=mysqli_query($conn,$sql);
$varr2 =mysqli_fetch_assoc($varr);

$_SESSION['data']=$varr2;}





?>

<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="styleofdetail.css">
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
        
</section>
</div>
<div class=body>
<div class=heading>
        <h2 >Transaction</h2>
            
</div>        
        
            <table class="detailtable">
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Account_no</th>
                    <th class="text-center">Email id</th>
                    <th class="text-center">Current_balance</th>
                </tr>
                <tr>
                <th class="text-center"><?php echo $_SESSION['data']['name'];?></th>
                <th class="text-center"><?php echo $_SESSION['data']['account_no'];?></th>
                <th class="text-center"><?php echo $_SESSION['data']['email'];?></th>
                <th class="text-center"><?php echo $_SESSION['data']['current_balance'];?></th>
</tr>    

            </table>
        
        <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="payinfo" >
        Transfer To Name:
        <input type="text" name="transferto" placeholder="Enter name">
        Amount:
        <input type="number" name="transferamount" placeholder="Enter amount"> 
    
        <div class="text-center" >
            <button class="btn" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
        </form>
    </div>
</body>
</html>