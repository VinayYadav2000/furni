<?php include "layout/header.php";
   
    include 'dbconnect/config.php';
    $emailerr=$passworderr=$failerr="";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['login'])){
            if(empty($_POST['email'])|| $_POST['email']==''){
                $emailerr="*Please Enter your email/username";
            }
            elseif(empty($_POST['password'])|| $_POST['password']==''){
                $passworderr="*Please Enter your password";
            }
            else{
                $email = $_POST['email'];
                $password = $_POST['password'];
                $query = "Select * from user1 where email='$email' && password='$password'";
                $result = mysqli_query($con,$query);
                // print_r($result);
                if(mysqli_num_rows($result)==1){
                    $data = mysqli_fetch_assoc($result);
                    session_start();
                    $_SESSION['name'] = $data['firstname'].''.$data['lastname'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['phone'] = $data['phone'];
                    $_SESSION['role'] = $data['role'];
                    $_SESSION['id'] = $data['id'];
                    if($data['role']=='admin'){
                        header('Location:admin/dashboard.php');
                    }
                    else{
                        header('Location:dashboard.php');
                    }
                    
                }
                else{
                   $failerr = "You are entering wrong email and password";
                }
            }
        }
    }
?>
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12"></div>
            <div class="col-lg-6 contact-info col-md-12 col-sm-12">
                <h1 style="text-decoration:underline; text-align:center; color:#3b5d50">Sign In</h1>
                <p style="color:red;"><?php  echo $failerr; ?></p>
                 <form class="row g-3 mt-4 contact-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <div class="col-lg-12">
                    <label for="password">Username / Email</label>
                        <input type="email" class="form-control news-field" name="email" id="email">
                       <small style="color:red;"><?php echo $emailerr; ?></small>
                    </div>
                    <div class="col-lg-12">
                    <label for="password">Password</label>
                        <input type="password" class="form-control news-field" name="password" id="password">
                        <small style="color:red;"><?php echo $passworderr; ?></small>
                    </div>
                    <!-- <p class="text-center"><b>Forgot Password ?</b></p> -->
                     <div class="col-auto">
                        <input type="submit" class="btn  mb-3 px-4 rounded-pill text-white news-field bg-dark me-2" style="background:#3b5d50;" value="SignIn" name="signup">
                        <span>Don't have an account?<a href="sign.php" class="text-decoration-none">SignUp here</a></span>
                    </div> 
                </form>
            </div>

        </div>

        <div class="col-lg-3 col-md-12 col-sm-12"></div>
    </div>
    </div>
</section>
<?php include "layout/footer.php" ?>