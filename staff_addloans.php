<?php include('includes/navbar.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  body{
    background:white;
  }
</style>
</head>
<body>
<div class="container">
  <div class="row justify-content-center b9o">
    <div class="col-6">
    <h2 class="text-center" >Loans</h2> 
    <form method="post" action="">
        <label>Loan Name::</label>
        <input type="text" name="LoanName"><br><br>
        <label>Loan Amount::</label>
        <input type="text" name="LoanAmount"><br><br>
        <label>Tenure::</label>
        <input type="text" name="Duration"><br><br>
        <label>Interest::</label>
        <input type="text" name="Interest"><br><br>
        <button type="submit" name="submit" class="btn btn-primary w-100">Add Loan</button>
    </form>
</div>
</div>
</div>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","root","tyla");
if(!$conn){
    echo "connection failed";
}

if(isset($_POST["submit"]))
{
    $LoanName=$_POST["LoanName"];
    $LoanAmount=$_POST["LoanAmount"]; 
    $Duration=$_POST["Duration"];
    $Interest=$_POST["Interest"];
    $insert=$conn->query("INSERT INTO tyla.`loan` (`LoanName`,`LoanAmount`,`Duration`,`Interest`) VALUES ('$LoanName','$LoanAmount','$Duration','$Interest')");
    echo mysqli_error($conn);
}
if(isset($_POST["update"])){
    $LoanName=$_POST["update"];
    $LoanAmount=$_POST["LoanAmount"]; 
    $Duration=$_POST["Duration"];
    $Interest=$_POST["Interest"];
    $update=$conn->query("UPDATE `loan` SET `LoanAmount`='$LoanAmount',`Duration`='$Duration',`Interest`='$Interest' WHERE `LoanName`='$LoanName' ");
}

$s=$conn->query("SELECT * FROM `loan`");
if($s->num_rows>0){
?>    
<div class="container">
<div class="row p-5">
    <?php
    while($r=mysqli_fetch_array($s)){
        ?>
        <div class="col">
    
    <form action="" method="post" >
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h1 class="card-title"><?php echo $r["LoanName"];?></h1>
      <h5 class="card-subtitle">Loan Name<input class="form-control " type="text" name="LoanName" value="<?php echo $r['LoanName'];?>"></h5>
      <p class="card-text">Loan Amount<input class="form-control " type="text" name="LoanAmount" value="<?php echo $r['LoanAmount'];?>"></p>
      <p class="card-text">Duration<input class="form-control " type="text" name="Duration" value="<?php echo $r['Duration'];?>"></p>
      <p class="card-text">Interest<input class="form-control " type="text" name="Interest" value="<?php echo $r['Interest'];?>"></p>
      <button type="submit" class="btn w-100 mt-2   btn-warning" name="update" value="<?php echo $r['LoanName'];?>">UPDATE</button> </form>
      
    </div>
  </div>
  
  </div>
  <?php
    }
    ?>
    </div>
</div>
<?php
}
else{
    echo "table is empty";
}
?>
<?php include('includes/footer.php')?>
