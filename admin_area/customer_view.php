<?php include "inc/db.php";?>
<?php session_start(); ?>
<?php
if (!isset($_SESSION['id'])) {
    header('Location: admin_login.php');
}

?>
<?php include "header.php";?>
<?php include "content/menu.php";?>
    <style type="text/css">
        table{
            width: 1000px;
            margin:auto;

        }
        .block table, tr, th, td{
            padding:14px;
            color:black;
            border:1px solid #080808;
            border-collapse: collapse;
            font-size: 14px;
            background: linear-gradient(top,#bdc3c7 0%,#ecf0f1 100%);
            background: -webkit-linear-gradient(top,#bdc3c7 0%,#ecf0f1 100%);
        }
        .img{
            height: 50px; width: 50px;
            text-align: center;
        }
    </style>
    <div class="grid_10">
        <div class="box round first">
            <h2>
                Customer Details</h2>
            <div class="block">
                <?php
                $query="SELECT * FROM customer ";
                $result=mysqli_query($conn,$query);
                echo "<table>";
                echo "<tr>";
                //echo "<td>";  echo 'ProfileImage'; echo "</td>";
                echo "<td>";  echo 'First Name'; echo "</td>";
                echo "<td>";  echo 'Last Name'; echo "</td>";
                echo "<td>";  echo 'Middle Name'; echo "</td>";
                echo "<td>";  echo 'Email'; echo "</td>";
                echo "<td>";  echo 'Address'; echo "</td>";
                echo "<td>";  echo 'Phone Number'; echo "</td>";
                echo "<td>";  echo 'Username'; echo "</td>";


                echo "</tr>";
                while($row=mysqli_fetch_array($result)){
                    echo "<tr>";
                    //echo "<td>"; /**/?><!-- <img class="img" src="<?php /*echo $row['agent_profile_image']; */?>" alt=""> --><?php /*echo "</td>";*/
                    echo "<td>";  echo $row['customer_first_name']; echo "</td>";
                    echo "<td>";  echo $row['customer_middle_name'];; echo "</td>";
                    echo "<td>";  echo $row['customer_last_name'];; echo "</td>";
                    echo "<td>";  echo $row['customer_email'];; echo "</td>";
                    echo "<td>";
                    $addrId=$row['customer_address_id'];
                    $res=mysqli_query($conn,"SELECT * FROM agent_address WHERE id='{$addrId}'");
                    while($row1=mysqli_fetch_array($res)){
                        echo $row1['house_number']."<br/>";
                        echo $row1['street_name']."<br/>";
                        echo $row1['city']."<br/>";
                        echo $row1['country']."<br/>";
                        echo $row1['postal_code']."<br/>";
                    }
                    echo "</td>";
                    echo "<td>";  echo $row['customer_phone_num']; echo "</td>";
                    echo "<td>";  echo $row['user_username']; echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>
        </div>

    </div>
<?php include "content/footer.php";?>