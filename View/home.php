<!DOCTYPE html>
<html lang="en">
<?php include('head.php');?>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form method="POST">
    <div class="form-group">
      <label for="email">Product Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Productname" name="pname" require>
    </div>
    <div class="form-group">
      <label for="email">Product price:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Productname" name="price" require>
    </div>
    <div class="form-group">
      <label for="email">Product qty:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Productname" name="qty" require>
    </div>
    
    <input type="submit" value="submit" name="submit" class="btn btn-default">
  </form>
</div>

</body>
</html>
