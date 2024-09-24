<style>
  .container{
    padding-bottom:19%;
  }


</style>
<body>
<?php include('includes/navbar.php')?>
<?php
$con=mysqli_connect("localhost","root","root","tyla");
if($con)
{
    
}
else{
    echo "not connected";
}
if(isset($_POST["update"])){

    $TransactionStatus=$_POST["TransactionStatus"];
    

    $TransactionId=$_POST["update"];
    
    $update=$con->query("UPDATE `transaction` SET`TransactionStatus`='$TransactionStatus' WHERE `TransactionId`='$TransactionId'");
  }
      $s=$con->query("SELECT * FROM `transaction` ");
      
  if($s->num_rows>0){
  ?>
  <style>
  body{
    background:white;
  }
</style>
  <div class="container">
  <table class="table table-dark table-striped-columns">
    <tr>
      <td>Loan Name</td>
      <td>Transaction Status</td>
      <td>Date And Time</td>
      <td>Document</td>
      <td>Userid</td>
    </tr>
  <?php
  while($r=mysqli_fetch_array($s))
  {
  ?>
  <tr >
    <form action="" method="post">
    <td><?php echo $r['LoanName'];?></td>
    <td><?php echo $r['TransactionStatus'];?>
  <select name="TransactionStatus" id="">
    <option value="Pending">Pending</option>
    <option value="Accepted">Accepted</option>
    <option value="Rejected">Rejected</option>
  </select>
  </td>
    <td><?php echo $r['DateANDtime'];?></td>
    <td><?php echo $r['Document'];?></td>
    <td><?php echo $r["Userid"];?></td>
    <td><button type="submit" class="btn btn-primary"  name="update" value="<?php echo $r['TransactionId'];?>">UPDATE</button></td></form>
  </tr>
  <?php
  }
  ?>
  </table>
  </div>
   
  <?php
  }
  else
  {
    echo "Table is empty";
  }
  ?>

      <?php include('includes/footer.php')?>
      


</body>