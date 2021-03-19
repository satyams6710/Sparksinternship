<!DOCTYPE html>
<html> 
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
        <a>Details of all Customers:</a></div>
        
</section>
</div>
<div class=body>
<table class=dataofcustomer>
    <tr>
        <th> Name </th>
        <th> Account_No </th>
        <th> Email </th>
        <th> Mob_no </th>
        <th> Details</th>
    </tr>
    </div>

    <?php
require 'connect.php';
$sql = "SELECT * FROM allusers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    
echo "<tr>
<td>" . $row["name"]. "</td>
<td>" . $row["account_no"] ."</td>
<td>" .$row["email"] .  "</td><td>" . $row["mob_no"] . "</td><td>" . "</td>
</tr>";

}

echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<div class="viewuser">
    <?php
     require "connect.php";
     $sql="SELECT * FROM allusers";
     $varr=mysqli_query($conn,$sql);
     $varr2=$varr;

    
     if ($varr->num_rows > 0) {
        // output data of each row
        while($row = $varr->fetch_assoc()) {
            $name=$row["name"];
     echo "<input type=\"button\" value=\"Details\" onclick=\"location.href='detail.php?name=$name'\">";
    
        }}
     ?>

</div>
</body>

</html>