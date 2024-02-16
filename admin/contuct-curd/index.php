<?php
include 'header.php';
include 'demo.php';
$sql = "SELECT * FROM `curd` WHERE 1";
$result = mysqli_query($con,$sql) or die( "<script> alert('insert data succes fulley')</script>");

?>

<h4 id="page-title">All Record</h4>

<table>
    <thead>
          <tr>
            <th>Sr No</th>
            <th>Name</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
    <?php
        if(mysqli_num_rows($result)>0){
            while($fech = mysqli_fetch_assoc($result))
            {
                ?>
        <tr>
            <td><?php echo $fech['srno']?></td>
            <td><?php echo $fech['name']?></td>
            <td><?php echo $fech['class']?></td>
            <td><?php echo $fech['phone']?></td>
            <td>
                <a href="update.php?id=<?php echo $fech['srno']?>" id="btn">Edit</a>
                <a href="inlinedelet.php?id=<?php echo $fech['srno']?>" id="btn" onclick="return confirm('Are You Sure?');">Delete</a>
            </td>
        </tr>
       <?php
           }

          
        } 

        else{
            echo "no record  found";
    }  
         ?>
    </tbody>
</table>

<!-- pagination -->

        <div class="pagination">
        <ul>
            <li><a href="index.php"><<</a></li>
            <li><a href="index.php">1<a></li>
            <li><a href="index.php">2<a></li>
            <li><a href="index.php">3<a></li>
            <li><a href="index.php">>></a></li>
        </ul>
        </div>
<?php

include 'footer.php';
?>