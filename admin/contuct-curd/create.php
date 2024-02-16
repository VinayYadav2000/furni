<?php 
include 'header.php';
// include 'demo.php';
include "../dbconnect/config.php";
?>

<h3 class="h34"></h3>

<!-- create form -->

<div class="form-conatiner">
    <form action="" method="post">
        <div class="form-group">
            <input type="text" name="name" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <input type="text" name="class" placeholder="Enter Class" required>
        </div>
        <div class="form-group">
            <input type="text" name="phone" pattern="[0-9]{10}" maxlength="10" placeholder="Enter Phone" required>
        </div>
        <input id="form-btn" type="submit" name="submit" value="Submit">
    </form>
</div>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];

    $class = $_POST['class'];

    $phone = $_POST['phone'];

    $sql = "INSERT INTO `contuct`(`srno`, `name`, `class`, `phone`) VALUES ('','$name','$class','$phone')";
    $ruselt = mysqli_query($con,$sql);

    if($ruselt)
    {
        echo "<script> alert('insert data succes fulley')</script>";
    }
    else
    {
        echo "<script> alert('server down')</script>";
    }


}
include 'footer.php';
?>
