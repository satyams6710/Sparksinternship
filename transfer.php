<?php
require 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $name=$_POST["name"];
   $account_no=$_POST["account_no"];
   $amount=$_POST["amount"];
   
   $sql="SELECT * FROM allusers WHERE name= '$name'";
   $result = $conn->query($sql);
   $varr2 =mysqli_fetch_assoc($result);
//    var_dump($varr2["current_balance"]);
   $old_balance=(int)$varr2["current_balance"];
//    echo $amount;
   $new_balance=$old_balance+$amount;
//    echo $new_balance;
   
   $sql2="UPDATE allusers SET current_balance='$new_balance' WHERE name='$name' ";
   $result = $conn->query($sql2);

   if(isset($result)){
      $sql3="INSERT INTO history(name,amount,transfer_to) VALUES('$name','$amount','$account_no')";
      $result2 = $conn->query($sql3);
      if(isset($result2)){
          
          header("Location:index.php?msg=Successful");
         
      }
       
   }

}

?>
<!DOCTYPE html>
<html> 
    <head>
        <link rel="stylesheet" href="styleoftransfer.css">
        <title>
BANK SYSTEM
        </title>
    </head>
    <body>
        <div class=upperbox>
            <section class="img">
            <a href="SparksProject/topnavpic.jpeg"></a>
        <h1>The Bank of Sparks Foundation</h1>
</section>
</div>
<div class=body>
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="payinfo">
        Name of the person to pay:
        <input type="text" placeholder="Enter the name" name="name">

        Account Number:
        <input type="number" placeholder="Enter account_no" name="account_no">

        
        Amount to Pay:
        <input type="number" placeholder="Enter amount" name="amount">

<div class="pay">
        <button class="btn" type="submit" name="paynow">PAY NOW</button>
        
</div>

<div class=cancle>
<a  href="index.php" type="button">Cancle Payment</a>
</div>
</form> 


</div>
</body>
</html>