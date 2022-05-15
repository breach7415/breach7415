<?php
include 'dbconfig.php';
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$txtmsg = mysqli_real_escape_string($conn, $_REQUEST['txtmsg']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$sql = "insert into contact_us(name,textValue,email) values ('".$name."','".$txtmsg."','".$email."')";

if(mysqli_query($conn, $sql)){
        echo "<script>
alert('Record successfully Inserted, We will let you know.');
window.location.href='contact.php';
</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>