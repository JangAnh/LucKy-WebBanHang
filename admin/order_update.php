<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

if (!isset($_SESSION['adm_id'])) {
    $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
    header("Location: index.php");
    exit();
}

if(isset($_POST['update'])) {
    $form_id = $_GET['form_id'];
    $status = $_POST['status'];
    $remark = $_POST['remark'];

    $query = mysqli_query($db, "INSERT INTO remark(frm_id, status, remark) VALUES('$form_id', '$status', '$remark')");
    $sql = mysqli_query($db, "UPDATE users_orders SET status='$status' WHERE o_id='$form_id'");

    echo "<script>alert('Form Details Updated Successfully');</script>";
}
?>

<script language="javascript" type="text/javascript">
function f2() {
    window.close();
}
function f3() {
    window.print(); 
}
</script>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Order Update</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <style type="text/css" rel="stylesheet">
    /* CSS styles here */
    </style>
</head>

<body>
<div style="margin-left:50px;">
    <form name="updateticket" id="updatecomplaint" method="post"> 
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td><b>Form Number</b></td>
                <td><?php echo htmlentities($_GET['form_id']); ?></td>
            </tr>
            <tr>
                <td><b>Status</b></td>
                <td>
                    <select name="status" required="required">
                        <option value="">Select Status</option>
                        <option value="in process">On the way</option>
                        <option value="closed">Delivered</option>
                        <option value="rejected">Cancelled</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><b>Message</b></td>
                <td><textarea name="remark" cols="50" rows="10" required="required"></textarea></td>
            </tr>
            <tr>
                <td><b>Action</b></td>
                <td>
                    <input type="submit" name="update" class="btn btn-primary" value="Submit">
                    <input name="Submit2" type="submit" class="btn btn-danger" value="Close this window" onClick="return f2();" style="cursor: pointer;" />
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
