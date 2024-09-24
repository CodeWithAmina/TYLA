<?php include('includes/navbar.php')?>
<?php
$con=mysqli_connect("localhost","root","","tyla");
if(!$con){
    echo "connection failed";
}
if(isset($_POST["apply2"])){
    $Document=$_FILES["Document"]["name"];
    $Document_tmp=$_FILES["Document"]["tmp_name"];
    $document_dest="uploads/document/".$Document;
    move_uploaded_file($Document_tmp, $document_dest);
    $loanName="Business Loan";
    $TransactionStatus="Pending";
    $DateAndTime=date('Y-m-d H:i:s');
    $Userid=$_SESSION['Userid'];
    $insert=$con->query("INSERT INTO transaction (`Document`,`loanName`,`TransactionStatus`,`DateAndTime`,`Userid`) VALUES ('$document_dest','$loanName','$TransactionStatus','$DateAndTime','$Userid')");       
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
<body>
  <h2 style="text-align:center;">Business Loan</h2>
  <p>The Business Loan offered by Take Your Loan Anywhere is tailored to meet the financial needs of entrepreneurs and small business owners. Whether you’re launching a new business, expanding an existing operation, or investing in crucial business assets, our app simplifies the loan application process. By allowing you to apply and submit documents online, we streamline the journey from application to approval, making it easier for you to focus on growing your business.</p>
  <h4>Eligibility Criteria:</h4>
<p>Age: Applicants must be at least 21 years old, which ensures they are legally capable of entering into a financial contract and managing business finances. <br>
Business Type: Our loans are available to a diverse range of businesses, including startups, small and medium-sized enterprises (SMEs), and established companies. This flexibility helps accommodate different business needs and stages. <br>
Business Duration: For established businesses, a minimum operational period of 1 year is generally required. Startups may also be eligible if they present a solid business plan and demonstrate potential for success. <br>
Revenue: Evidence of business revenue and financial stability is necessary. This can include financial statements, tax returns, or bank statements showing a steady income stream. <br>
Credit History: Both personal and business credit histories are reviewed. A strong credit history supports loan approval, though we also consider business potential and financial health. <br>
Residency: The business owner must be a resident of the country where our app operates to ensure compliance with local regulations and lending practices. <br>
</p> 
  <div class="mb-8">
    <form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="LoanName" value="Business Loan" hidden><br>
  <input type="text" name="TransactionStatus" hidden ><br>
  <input type="text" name="DateANDtime" hidden><br>
 <b>Upload your documents here</b><br>
  <label for="formFile" class="form-label"> Income Certificate:</label>
  <input class="form-control" type="file" name="Document" id="formFile">

  <input type="text" name="Userid" value=<?php echo $_SESSION["Userid"];?> hidden><br>
  <button class="btn btn-primary" type="submit" name=apply2>Submit</button>

</div> 
</form>
  <?php include('includes/footer.php')?>
    </form>
</body>


