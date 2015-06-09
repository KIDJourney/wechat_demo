<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h>Welcome <?php echo $_SESSION['u_nick']?> , You have loged in</h>
    <p>This is your info :<p>
    <p><?php echo strlen($_SESSION['u_info'])?$_SESSION['u_info']:"Nothing yet";?></p>
    <br>
    <a href="edit.php">Edit your info</a>
</body>
</html>