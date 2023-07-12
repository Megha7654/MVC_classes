<!DOCTYPE html>
<html lang="en">
    <?php include('head.php');?>
<body>
    <h1>Product Data</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Action</th>
        </tr>
        <?php
        foreach($productData as $key){
            ?>
            <tr>
                <td><?php echo $key->pname?></td>
                <td><?php echo $key->price?></td>
                <td><?php echo $key->qty?></td>
                <td><a href="delete?pid=<?php echo $key->pid?>" class ="btn btn-danger">Delete</a></td>
                <td><a href="edit?pid=<?php echo $key->pid?>" class ="btn btn-success">EDIT</a></td>

            </tr>

            <?php
        }
        
        ?>
    </table>
</body>
</html>