<?php

include "config.php";
$ID = $_POST['id'];
$list = $_POST['list'];

mysqli_query($con,"UPDATE `tabeltodo` SET `list`='$list' WHERE `tabeltodo`. `id`= '$ID' ");
header("location:index.php");

?>