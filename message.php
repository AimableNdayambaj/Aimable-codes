<?php
$con=mysqli_connect('localhost','root','','ur');
if (isset($_POST['message'])){
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $text=$_POST['Subject'];
    $message=$_POST['Message'];
    $insert="INSERT INTO messages_cms(`No`, `Name`, `Email`, `Subject`, `Message`) VALUES(null, ?, ?, ?, ?)";
    if (mysqli_query($con,$insert)){
        echo "<script>alert('Data inserted Successfully')</script>";
    }
    else{
        echo "<script>alert('Oooooops!! Data not inserted Successfully')</script>";
    }
}
?>