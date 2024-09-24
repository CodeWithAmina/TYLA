<style>
  .container{
    padding-bottom:28%;
  }
</style>
<?php include('includes/navbar.php')?>
<?php
$con=mysqli_connect("localhost","root","","tyla");
if($con)
{
    
}
else{
    echo "not connected";
}
    $LoanName="Personal Loan";
    $TransactionStatus="Pending";
    $DateANDtime=date('Y-m-d H:i:s');
    $Userid=$_SESSION['Userid'];
      $s=$con->query("SELECT * FROM `transaction` where `Userid`='$Userid' ");
      
  if($s->num_rows>0){
  ?>
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
    <td><?php echo $r['TransactionStatus'];?></td>
    <td><?php echo $r['DateANDtime'];?></td>
    <td><?php echo $r['Document'];?></td>
    <td><?php echo $r["Userid"];?></td>
    
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
    echo "No Results Found";
  }
  ?>

      <?php include('includes/footer.php')?>
      


