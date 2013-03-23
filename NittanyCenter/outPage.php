<?php
// get variables from your form
$name=$_POST['name'];
$name=$_POST['category'];
$name=$_POST['isbn'];
$name=$_POST['desc'];
// then you can display them however you want.
?>
<html>
<body>
Welcome <?php echo $_POST["name"]; ?><br>
<?php echo $_POST["category"]; ?><br>
<?php echo $_POST["isbn"]; ?><br>
<?php echo $_POST["desc"]; ?><br>
</body>
</html>
