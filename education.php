<?php include('includes/navbar.php')?>
<?php
$con=mysqli_connect("localhost","root","root","tyla");
if(!$con){
    echo "connection failed";
}
if(isset($_POST["apply3"])){
    $Document=$_FILES["Document"]["name"];
    $Document_tmp=$_FILES["Document"]["tmp_name"];
    $document_dest="uploads/document/".$Document;
    move_uploaded_file($Document_tmp,$document_dest);
    $LoanName="Educaation Loan";
    $TransactionStatus="Pending";
    $DateANDtime=date("Y-m-d H:i:s");
    $Userid=$_SESSION["Userid"];
    $insert=$con->query("INSERT INTO tyla.transaction (`Document`,`LoanName`,`TransactionStatus`,`DateANDtime`,`Userid`) VALUES ('$document_dest','$LoanName','$TransactionStatus','$DateANDtime','$Userid')");       
    if($insert){
        header("Location:loans.php");
    }
        echo mysqli_error($con);
    
}
?>
<style>
body{
    background:grey;
  }
  </style>
<body>
  <h2 style="text-align:center;">Educatioon Loan</h2>
  <p>Our Education Loan is designed to help students and their families manage the costs associated with pursuing higher education. From covering tuition fees and buying textbooks to funding accommodation and other academic expenses, our loan service aims to alleviate the financial burden of education. The application process is fully digital, allowing students to apply and upload supporting documents online, which makes managing your education funding simpler and more efficient.</p>
  <h4>Eligibility Criteria:</h4>
<p>Age: Typically, applicants should be between 16 and 35 years old. This range accommodates students at various stages of their educational journey, including undergraduate, graduate, and vocational studies. <br>
Enrollment: You must be enrolled or accepted into a recognized educational institution. Proof of enrollment or an acceptance letter is required to process the loan application. <br>
Course: Loans are available for a wide range of academic programs, including undergraduate, postgraduate, and vocational courses. The course must be at an accredited institution to qualify. <br>
Income: A co-applicant, usually a parent or guardian, must have a stable income to support the loan application. This ensures that there is financial backing to assist with repayment. <br>
Credit History: While the credit score of the co-applicant is an important factor, students with a limited credit history may still be eligible based on the financial stability of their co-applicant and the educational institution. <br>
Residency: Applicants must be residents of the country where the app operates to comply with local lending laws. <br>
</p> 
  <div class="mb-8">
    <form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="LoanName" value="Education Loan" hidden><br>
  <input type="text" name="TransactionStatus" hidden ><br>
  <input type="text" name="DateANDtime" hidden><br>
 <b>Upload your documents here</b><br>
  <label for="formFile" class="form-label">Admission Form:</label>
  <input class="form-control" type="file" name="Document" id="formFile">

  <input type="text" name="Userid" value=<?php echo $_SESSION["Userid"];?> hidden><br>
  <button class="btn btn-primary" type="submit" name=apply3>Submit</button>

</div> 
</form>
  <?php include('includes/footer.php')?>
    </form>
</body>


