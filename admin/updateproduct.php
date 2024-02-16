<?php
include 'layout/header.php' ;
include '../dbconnect/config.php';
$pnameerr=$imageerr=$caterr=$branderr=$priceerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['updateproduct'])){
    if($_FILES['image']['name']!=''){
    $imagename=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
     move_uploaded_file($tmpname,'productimage/'.$imagename);
    }
    else{
        $imagename= $_POST['oldimg'];
    }
     $id=$_POST['pid'];
    $productname = $_POST['productname'];
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $query="Update  addproduct set productname='$productname',category='$category',brand='$brand',price='$price',description='$description',image='$imagename' where pid='$id'";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<script>
            alert('Your product addded successfully');
            window.location.href='product.php';
        </script>";
    }
    else{
        echo "something went wrong".mysqli_error($con);
    }
}
}

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $select="select * from addproduct where pid=$id";
    $result=mysqli_query($con,$select);
    // print_r($result);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
    }
?>
<div class="addproduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h3 class="text-center">Updateproduct</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-bold">PoroductName:</label>
                        <input type="hidden" value="<?= $row['pid']; ?>" name="id">
                        <input type="text" value="<?= $row['productname'];?>" class="form-control" name="productname" placeholder="Enter your product name">
                        <input type="hidden" value="<?= $row['pid']?>" name="pid">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Product Image:</label>
                        <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Category:</label>
                        <select name="category" id="">
                            <option>--select--</option>
                            <option <?php echo $row['category']=='Wooden'?'selected':''; ?> value="Wooden">Wooden</option>
                            <option <?php echo $row['category']=='Fiber'?'selected':''; ?> value="Fiber">Fiber</option>
                            <option <?php echo $row['category']=='plastic'?'selected':''; ?> value="plastic">plastic</option>
                        </select>
                       
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Brand:</label>
                        <!-- <input type="text" class="form-control" name="brand" placeholder="Enter your brand name"> -->
                        <select name="brand" id="">
                            <option>--select--</option>
                            <option <?php echo $row['brand']=='sleepwell'?'selected':'' ?> value="sleepwell">sleepwell</option>
                            <option <?php echo $row['brand']=='fiber'?'selected':'' ?> value="fiber">fiber</option>
                            <option <?php echo $row['brand']=='plastic'?'selected':'' ?> value="plastic">plastic</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">TotalPrice:</label>
                        <input type="text" value="<?= $row['price']?>" class="form-control" name="price" placeholder="Enter your productprice name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Description:</label>
                        <input type="text" value="<?= $row['description']?>" class="form-control" name="description" placeholder="Enter your description name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Created_at:</label>
                        <input type="text" value="<?= $row['created_at']?>" class="form-control" name="created_at" placeholder="Enter your description name">
                    </div>
                    <input type="submit" class="btn btn-primary" name="updateproduct" value="Updateproduct">
                </form>
                
            </div>
        </div>
    </div>
</div>
<?php
include 'layout/footer.php';
}
else{
   " <script>
    window.location.href='product.php';
   </script>";
}
?>