
<?php include('includes/navbar.php')?>
<style>
  .container{
    padding-bottom:5%;
    padding-top:5%;
  }
  body{
    background:white;
  }
</style>
<div class="container">
  <div class="row justify-content-center b9o">
    <div class="col-7">
    <h2 class="text-center" >Staff Form</h2> 
<form action="" method="get">
  <input class="form-control"  type="text" name="Name" placeholder="Enter your Name"  required><br>
  <input class="form-control"  type="text" name="Address"  placeholder="Enter your Address "  required><br>
  <input class="form-control"  type="number" name="Mobile"  placeholder="Enter your Mobile "  required><br>
  <input class="form-control"  type="text" name="Email"  placeholder="Enter your  Email"  required><br>
  <input class="form-control"  type="text" name="Userid" placeholder="Enter your Userid"  required><br>
  <input class="form-control"  type="text" name="Password" placeholder="Enter your Password"  required><br>
<button  type="submit" name="StaffForm" class="btn btn-primary w-100" >submit </button>
</form>
    </div>
  </div>
</div>
<?php
$con=mysqli_connect("localhost","root","root","tyla");
if($con){
  
}
else{
  echo "error detected";
}
if(isset($_GET["StaffForm"]))
{
  $Name=$_GET["Name"];
  $Address=$_GET["Address"];
  $Mobile=$_GET["Mobile"];
  $Email=$_GET["Email"];
  $Userid=$_GET["Userid"];
  $Password=$_GET["Password"];
$insert=$con->query("INSERT INTO staff (`Name`,`Mobile`,`Address`,`Email`, `Userid`, `Password`) VALUES ('$Name','$Mobile','$Address','$Email','$Userid', '$Password')");
echo mysqli_error($con);
}
?>
<?php include('includes/footer.php')?>
