<?php include "layout/header.php";
include 'dbconnect/config.php';
$fnameerr=$emailerr=$phoneerr=$passworderr=$cpassworderr="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    // print_r($_POST);
    if(isset($_POST['signup'])){
        if(empty($_POST['first_name'])|| $_POST['first_name']==''){
            $fnameerr="*Please Enter your first name";
        }
        elseif(empty($_POST['last_name'])|| $_POST['last_name']==''){
            $lnameerr="Please Enter your last name";
        }
        elseif(empty($_POST['email'])|| $_POST['email']==''){
            $emailerr="*Please Enter your email";
        }
        elseif(empty($_POST['phone'])|| $_POST['phone']==''){
            $phoneerr="*Please Enter your Phone No.";
        }
        elseif(empty($_POST['password'])|| $_POST['password']==''){
            $passworderr="*Please Enter your Password";
        }
        elseif((empty($_POST['c_password']) || $_POST['c_password']=='')){
            $cpassworderr="Please Enter your confirm password";
        }
        elseif($_POST['c_password']!=$_POST['password']){
            $cpassworderr="Your confirm password is not same as password";
        }
        else{
            $firstname= $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $query = "INSERT INTO user1 (firstname, lastname, email, phone, password, role) values('$firstname','$lastname', '$email', '$phone','$password', 'user')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Your account Created successfully');
                    window.location.href='login.php';
                </script>";
            }
            // else
            // {
            //     echo "tom tamtam";
            // }
            
        }
    }
}

?>
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-12 col-sm-12"></div>
            <div class="col-lg-10 contact-info col-md-12 col-sm-12">
                <h1 style="text-decoration:underline; text-align:center; color:#3b5d50">Sign Up</h1>
                 <form class="row g-3 mt-4 contact-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

                    <div class="col-lg-6 col-md-6">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control news-field" name="first_name"  id="fname">
                        <small style="color:red;"><?php echo $fnameerr; ?></small>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control news-field" name="last_name" id="lname">

                    </div>
                    <div class="col-lg-6">
                    <label for="email">Email</label>
                        <input type="email" class="form-control news-field" name="email" id="email">
                        <small style="color:red;"><?php echo $emailerr; ?></small>
                    </div>
                    <div class="col-lg-6">
                    <label for="phone">Phone</label>
                        <input type="phone" class="form-control news-field" name="phone" id="phone">
                        <small style="color:red;"><?php echo $phoneerr; ?></small>
                    </div>
                    <div class="col-lg-6">
                    <label for="password">Password</label>
                        <input type="password" class="form-control news-field" name="password" id="password">
                        <small style="color:red;"><?php echo $passworderr; ?></small>
                    </div>
                    <div class="col-lg-6">
                    <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control news-field" name="c_password" id="cpassword">
                        <small style="color:red;"><?php echo $cpassworderr; ?></small>
                    </div>
                    
                     <div class="col-auto">
                        <input type="submit" class="btn  mb-3 px-4 me-2 rounded-pill text-white news-field bg-dark" style="background:#3b5d50;" value="SignUp" name="signup">
                        <span>Already have an account? <a href="login.php" class="text-decoration-none">SignIn here</a></span>
                    </div> 
                </form>
            </div>

        </div>

        <div class="col-lg-1 col-md-12 col-sm-12"></div>
    </div>
    </div>
</section>
<?php include "layout/footer.php" ?>