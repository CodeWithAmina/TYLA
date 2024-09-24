<?php include('includes/navbar.php')?>
<?php
$con=mysqli_connect("localhost","root","root","tyla");
if(!$con){
  echo "connection Failed!!";
}
if(isset($_POST["apply"])){
    $Document=$_FILES["Document"]["name"];
    $Document_tmp=$_FILES["Document"]["tmp_name"];
    $document_dest="uploads/document/".$Document;
    move_uploaded_file($Document_tmp, $document_dest);
    $LoanName="Personal Loan";
    $TransactionStatus="Pending";
    $DateANDtime=date('Y-m-d H:i:s');
    
    $Userid=$_SESSION['Userid'];
    
    $insert=$con->query("INSERT INTO tyla.transaction (`Document`,`LoanName`,`TransactionStatus`,`DateANDtime`,`Userid`) VALUES ('$document_dest','$LoanName','$TransactionStatus','$DateANDtime','$Userid')");
    
       
if($insert){
  
  header("Location:loans.php");
}
echo mysqli_error($con);
}



?>
<style>
body{
    background:white;
  }
  </style>
  <h2 style="text-align:center;">Personal Loan</h2>
  <p>The Personal Loan from Take Your Loan Anywhere offers you the flexibility to handle various personal expenses with ease. Whether you’re dealing with unexpected medical bills, planning a significant event, making home improvements, or simply consolidating existing debt, our app provides a streamlined process for obtaining the financial support you need. By using our app, you can apply for a loan and upload your documents securely online, eliminating the need for physical paperwork and bank visits. We aim to make personal financial management more accessible and convenient.</p>
  <h4>Eligibility Criteria:</h4>
<p>
Age: Applicants must be between 21 and 60 years old to ensure they are in a stable stage of life and able to manage repayment. <br>
Income: A stable and verifiable source of income is required. This includes salaried employees, freelancers, or individuals with consistent self-employment income. Proof of income can be provided through recent pay stubs, bank statements, or income tax returns. <br>
Employment Status: Full-time employment or a consistent self-employment status is necessary to demonstrate financial stability. <br>
Credit History: A positive credit history is preferred to reflect a track record of responsible borrowing and repayment. However, we consider various factors, including income and employment, which may allow for exceptions. <br>
Residency: Applicants must be legal residents of the country where our app is available to ensure compliance with local lending regulations.</p> 
  <div class="mb-8">
    <form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="LoanName" value="Personal Loan" hidden><br>
  <input type="text" name="TransactionStatus" hidden ><br>
  <input type="text" name="DateANDtime" hidden><br>
 <b>Upload your documents here</b><br>
  <label for="formFile" class="form-label"> Income Certificate:</label>
  <input class="form-control" type="file" name="Document" id="formFile">

  <input type="text" name="Userid" value=<?php echo $_SESSION["Userid"];?> hidden><br>
  <button class="btn btn-primary" name="apply" type="submit">Submit</button>

</div> 
</form>
  <?php include('includes/footer.php')?>
    </form>
</body>
</html>