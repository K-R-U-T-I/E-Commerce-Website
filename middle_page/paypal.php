<?php
/*$id = $_REQUEST['id'];
$sql = mysqli_query($con,"SELECT * FROM food_order WHERE order_id='$id'");
$row = mysqli_fetch_assoc($sql);*//*
$user_id=$_SESSION['userSessionId'];
 $sq = "SELECT * FROM food_order WHERE order_id='".$_SESSION['last_order_id']."'";
 $qr=mysqli_query($con,$sq);
 $row = mysqli_fetch_assoc($qr);*/

        /*$sel = "SELECT * FROM `order` WHERE `ord_id`='".$_SESSION['order_id']."'";
        $qry = mysqli_query($conn, $sel);
        $row = mysqli_fetch_assoc($qry);*/

?>
<form method="post" name="paypal_form" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
    <input type="hidden" value="kruti.wtw@gmail.com" name="business">
    <input type="hidden" name="rm" value="2"/>
    <input type="hidden" name="cmd" value="_xclick"/>
    <input type="hidden" value="http://localhost/eCommerce2/index.php?page=thanks" id="edit-return" name="return">
    <input type="hidden" name="method" value="Paypal"/>
    <input type="hidden" value="index.php?page=thanks&email=notify" name="notify_url">
    <input type="hidden" value="index.php?page=thanks&order=cancel" name="cancel_return">
    <input type="hidden" value="USD" id="edit-currency-code" name="currency_code">
    <input type="hidden" name="custom" value="<?php echo $_SESSION['last_order_id']; ?>">
    <input type="hidden" value="<?php echo nl2br($rwFetchUser['Address']); ?>"  name="address1">
    <input type="hidden" value="<?php echo $rwFetchUser['City'];  ?>" name="city">
    <input type="hidden" value="<?php echo $rwFetchUser['State']; ?>"  name="State">
    <input type="hidden" value="<?php echo $rwFetchUser['Email']; ?>"  name="email">
    <input type="hidden" value="<?php echo $rwFetchUser['First_Name']; ?>"  name="first_name">
    <input type="hidden" value="<?php echo $rwFetchUser['Last_Name']; ?>" name="last_name">
    <input type="hidden" value="<?php echo $rwFetchUser['Mobile_No']; ?>"  name="phone">
    <input type="hidden" value="<?php echo $_SESSION['grand_total']/60.00,2;?>" name="amount">
    <input type="hidden" value="Order <?php echo  $_SESSION['order_id']; ?> At Chuzpah Restaurant" name="item_name">
    <span class=" button ">     
    <input type="submit" name="confirm_order"  value="Confirm Order" style="margin-top: 150px;">
    </span>
</form>