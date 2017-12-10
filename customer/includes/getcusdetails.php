<?php

include_once ('../../includes/db.php');

$uname="alan" ;
$sql = "SELECT customer_username,customer_email FROM customer";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){

  if($row["customer_username"]==$uname){
    echo $row["customer_username"] ;
    echo "<br>";
 }

else {

  continue;
}
}
mysqli_close($conn);
?>
