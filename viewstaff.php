<?php include('includes/navbar.php')?>

<?php
$con=mysqli_connect("localhost","root","","tyla");
if(isset($_GET["update"])){
  $Name=$_GET["Name"];
  $Address=$_GET["Address"];
  $Mobile=$_GET["Mobile"];
  $Email=$_GET["Email"];
  $Userid=$_GET["update"];
  $Password=$_GET["Password"];
  $update=$con->query("UPDATE `staff` SET `Name`='$Name',`Address`='$Address',`Mobile`='$Mobile',`Email`='$Email',`Password`='$Password' WHERE `Userid`='$Userid'");
}
if(isset($_GET["delete"]))
{

$d=$_GET["delete"];
$delete=$con->query("DELETE FROM staff WHERE Userid='$d'");
}
    $s=$con->query("SELECT * FROM staff ");
    
if($s->num_rows>0){
?>
<style>
  body{
    background:white;
  }
</style>
<div class="container">
<div class="row p-5">
<?php
while($r=mysqli_fetch_array($s))
{
?>

  <div class="col">
    
  <form action="" method="get" >
  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h1 class="card-title"><?php echo $r["Userid"];?></h1>
    <h5 class="card-subtitle">Name<input class="form-control " type="text" name="Name" value="<?php echo $r['Name'];?>"></h5>
    <p class="card-text">Address<input class="form-control " type="text" name="Address" value="<?php echo $r['Address'];?>"></p>
    <p class="card-text">Mobile<input class="form-control " type="text" name="Mobile" value="<?php echo $r['Mobile'];?>"></p>
    <p class="card-text">Email<input class="form-control " type="text" name="Email" value="<?php echo $r['Email'];?>"></p>
    <p class="card-text">Password<input class="form-control " type="text" name="Password" value="<?php echo $r['Password'];?>"></p>
    <button type="submit" class="btn w-100 mt-2   btn-warning" name="update" value="<?php echo $r['Userid'];?>">UPDATE</button> </form>
    <form action="" method="get"><button name="delete" class=" btn w-100 mt-2  btn-danger" type="submit" value=<?php echo $r["Userid"];?>>DELETE</button></form>
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
else
{
  echo "Table is empty";
}
?>
<?php include('includes/footer.php')?>
