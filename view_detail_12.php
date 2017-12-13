<?php
session_start();
include ('includes/db.php');


if(isset($_POST['submit'])){
    $id=$_POST['pid'];
    $d=0;
    if(is_array($_COOKIE['item'])){
        foreach ($_COOKIE['item'] as $name => $value){
            $d=$d+1;
        }
        $d=$d+1;
    }else{
        $d=$d+1;
    }
    $result=mysqli_query($conn,"SELECT * FROM product WHERE product_id='$id'");
    //var_dump($result);
    while($row=mysqli_fetch_array($result)){
        $pimg=$row['product_image'];
        $nm=$row['product_name'];
        $price=$row['product_price'];
        $qty=1;
        $total=$price*$qty;

    }
    if (is_array($_COOKIE['item'])){
        foreach ($_COOKIE['item'] as $name1 => $value){
            $value11=explode("__",$value);
            $found=0;
            if ($pimg==$value11[0]){
                $found=$found+1;
                $qty=$value11[3]+1;
                $tb_qty;
                $res=mysqli_query($conn,"SELECT * FROM product WHERE product_image='$pimg'");
                while($row=mysqli_fetch_array($res)){
                    $tb_qty=$row['product_quantity'];
                }
                if($tb_qty< $qty){
                    ?>
                    <script type="text/javascript">
                        alert("ha ha");
                    </script>
                    <?php
                }else{
                    $total=$value11[2]*$qty;
                    setcookie("item[$name1]",$pimg."__".$nm."__".$price."__".$qty."__".$total,time()+1800);
                }
            }
        }
        if ($found==0){$tb_qty;
                $res=mysqli_query($conn,"SELECT * FROM product WHERE product_image='$pimg'");
                while($row=mysqli_fetch_array($res)){
                    $tb_qty=$row['product_quantity'];
                }
                if($tb_qty< $qty){
                    ?>
                    <script type="text/javascript">
                        alert("ha ha");
                    </script>
                    <?php
                }else{
           
                setcookie("item[$d]",$pimg."__".$nm."__".$price."__".$qty."__".$total,time()+1800);
            }
        }
    }else{
        $tb_qty;
                $res=mysqli_query($conn,"SELECT * FROM product WHERE product_image='$pimg'");
                while($row=mysqli_fetch_array($res)){
                    $tb_qty=$row['product_quantity'];
                }
                if($tb_qty< $qty){
                    ?>
                    <script type="text/javascript">
                        alert("ha ha");
                    </script>
                    <?php
                }else{
            setcookie("item[$d]",$pimg."__".$nm."__".$price."__".$qty."__".$total,time()+1800);
        }
    }



    header('Location:single.php?product_id='.$id);
}
?>