<?php
$con=mysqli_connect('localhost', 'root', 'toor');
if($con){
    echo "Connection successful";
}

mysqli_select_db($con, 'website_project');

$name=$_POST['name'];
$comments=$_POST['comments'];

if ($name === '') {
    $name = 'Anonymous';
}
$query="insert into comments(name,comments)
values('$name','$comments')";
echo "$query";
mysqli_query($con,$query);
header("location:contact.php");
echo "$name", "$comments";
?>

