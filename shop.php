<?php include "layout/header.php" ?>
<!-- breadcrumbs Section start -->
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <h1>Shop</h1>
        </div>
    </div>
</section>
<!-- breadcrumbs Section End -->
<!-- material section start -->
<section class="material material-shop">
    <div class="container">
        <div class="row">
        <?php
                include 'dbconnect/config.php';
                $query ="Select * from addproduct";
                $result = mysqli_query($con,$query);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){  
                ?>

                <div class="col-lg-3  col-md-4  col-sm-6  material-image">
                    <img src="admin/productimage/<?= $row ['image']?>" alt="material Image" class="img-fluid">
                    <span class="brandname"><?= $row ['brand']?></span>
                    <h3 class="material-titel"><?= $row ['productname']?></h3>
                    <strong class="material-price"><?= 'INR'. number_format($row['price'],2);?></strong>
                    <button class="btn btn-primary">Add Cart</button>
                    <small class="material-price"><?= $row ['description']?></small>
                    <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid plus">
                </span>
                </div>
                <div class="col-lg-3  col-md-4  col-sm-6  material-image">
                    <img src="admin/productimage/<?= $row ['image']?>" alt="material Image" class="img-fluid">
                    <span class="brandname"><?= $row ['brand']?></span>
                    <h3 class="material-titel"><?= $row ['productname']?></h3>
                    <strong class="material-price"><?= 'INR'. number_format($row['price'],2);?></strong>
                    <button class="btn btn-primary">Add Cart</button>
                    <small class="material-price"><?= $row ['description']?></small>
                    <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid plus">
                </span>
                </div>
                <div class="col-lg-3  col-md-4  col-sm-6  material-image">
                    <img src="admin/productimage/<?= $row ['image']?>" alt="material Image" class="img-fluid">
                    <span class="brandname"><?= $row ['brand']?></span>
                    <h3 class="material-titel"><?= $row ['productname']?></h3>
                    <strong class="material-price"><?= 'INR'. number_format($row['price'],2);?></strong>
                    <button class="btn btn-primary">Add Cart</button>
                    <small class="material-price"><?= $row ['description']?></small>
                    <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid plus">
                </span>
                </div>
                <?php
                   }
                }
                ?>
        </div>
    </div>
</section>
<!-- material section end -->
<!-- material section start -->
<section class="material material-shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 material-image">
                <img src="images/product-3.png" alt="material Image" class="img-fluid">
                <h3 class="material-title">Ergonomic Chair</h3>
                <strong class="material-price">$43.00</strong>
                <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid plus">
                </span>
            </div>

            <div class="col-lg-3  col-md-4  col-sm-6  material-image shop-image">
                <img src="images/product-1.png" alt="material Image" class="img-fluid">
                <h3 class="material-title">Nordic Chair</h3>
                <strong class="material-price">$50.00</strong>
                <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid plus">
                </span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 material-image">
                <img src="images/product-2.png" alt="material Image" class="img-fluid">
                <h3 class="material-title">Kruzo Aero Chair</h3>
                <strong class="material-price">$78.00</strong>
                <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid plus">
                </span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 material-image">
                <img src="images/product-3.png" alt="material Image" class="img-fluid">
                <h3 class="material-title">Ergonomic Chair</h3>
                <strong class="material-price">$43.00</strong>
                <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid plus">
                </span>
            </div>
        </div>
    </div>
</section>
<!-- material section end -->
<?php include "layout/footer.php" ?>