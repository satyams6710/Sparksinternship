<?php
session_start();
$msg=$_GET['msg'];

if(isset($msg)){
if($_SESSION['transaction1'] && $_SESSION['transaction2'] )
{
echo '<script>alert("Transaction Successful")</script>'; }

}

?>
<!DOCTYPE html>
<html> 
    <head>
        <link rel="stylesheet" href="styleofindex.css">
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
<div class=topnavbar>
    <a class="active" href="#home">Home</a>
    <a class="active" href="customers.php">ViewAllCustomers</a>
    <a class="active" href="transfer.php">TransferMoney</a>
    <a class="active" href="history.php">TransactionHistory</a>
    
    </div>
<div class=sitebody>
    <div class=onlinebanking>
<h1>Online Banking</h1>
</div>

<div class=bank>
    <h1>Bank</h1>
    </div>
    <a class="payinstruct">➤ To Pay, Please Click "PAY NOW"</a>
    <div class=pay>
<a  href="transfer.php" type="button">PAY NOW</a>

</div>

</div>

    </body>
</html>
