<?php

//require "vendor/autoload.php";
require "config.php";
require "functions.php";
if(isset($_POST['save'])){

$choosed_date=$_POST['date'];
$choosed_time=$_POST['time'];
if(!empty($choosed_date)&&!empty($choosed_time)){
$res=getShippingDate($choosed_date,$choosed_time);

}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Select Date and Time</h2>
  <form class="form-horizontal" action="#" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Date:</label>
      <div class="col-sm-10">
        <input type="date" required=""  class="form-control" id="date"  value="<?php if(isset($_POST['date'])){ echo $_POST['date']; } ?>" name="date">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Time:</label>
      <div class="col-sm-10">          
        <input type="time" required=""  class="form-control" id="time" name="time" value="<?php if(isset($_POST['time'])){ echo $_POST['time']; } ?>" >
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="save" class="btn btn-success">Place Order</button>
      </div>
    </div>
  </form>
<?php if(isset($_POST['save'])){ ?>
<p>Shipping Date  Is : <?php echo $res; ?></p>
<?php } ?>
</div>

</body>
</html>

