<?php 
include 'header.php';
// include 'demo.php';
if(isset($_GET['id']))
{
    $id =$_GET['id'];

}
else{
    $id =null;
}
?>


<h4 id="page-title1"></h4>

<!-- search form -->  

<div class="form-conatiner">
    <form action="" method="post">
        <div class="form-group">
            <input type="text" name="srno" value=" <?php echo $id;?>" placeholder="Enter Sr No" requiredd>
        </div>
        <input id="form-btn" type="submit" name="search" value="search">
    </form>
</div>
<?php
if(isset($_POST['search']))
{
    $srno = $_POST['srno'];
    $sql = "SELECT * FROM `curd` WHERE srno =$srno";
    $result = mysqli_query($con,$sql) or die("<script>alert('Server down')</script>");
    if(mysqli_num_rows($result)>0)
    {
        $fech = mysqli_fetch_assoc($result)
   
?>

<!-- delete form -->

<div class="form-conatiner">
    <form action="" method="post">
        <div class="form-group">
            <input type="hidden" name="srno" value="<?php echo $fech['srno'];?>" >
        </div>

        <div class="form-group">
            <input type="text" name="name" value=" <?php echo $fech['name'];?>" placeholder="Enter Name" readonly required>
        </div>
        <div class="form-group">
            <input type="text" name="class" value=" <?php echo $fech['class'];?>" placeholder="Enter Class" readonly required>
        </div>
        <div class="form-group">
            <input type="text" name="phone" value=" <?php echo $fech['phone'];?>" pattern="[0-9]{10}" maxlength="10" placeholder="Enter Phone" readonly required>
        </div>
        <input id="form-btn" type="submit" name="delete" value="delete" onclick="return confirm('Are You Sure?')">
    </form>
</div>
<?php
 }
 else
 {
     echo "<script>alert('No REcord')</script>";
 }
}
?>

<?php
if(isset($_POST['delete'])){
    $srno = $_POST['srno'];
    $delete = "DELETE FROM `contuct` WHERE srno = $srno";
    $result1 = mysqli_query($con, $delete) or die("<script>alert('server down')</script>");
    
    echo "<script> alert('data delete success fulley')</script>";

}
include 'footer.php';
?>