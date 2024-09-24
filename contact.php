<?php include('includes/navbar.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="feedstyle.css">
</head>
<body>
    <div class="feedback-container">
        <h2>FEEDBACK</h2>
    <form id="feedback-form" action="" method="post">
        First Name:  <input type="text" name="firstName" required><br>
        Last Name:  <input type="text" name="lastName" required><br>  
        Email:  <input type="email" name="email" required><br>
        Feedback:  <textarea name="message"  required></textarea><br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    </div>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","root","tyla");
if($con)
{
    
}
else{
    echo "not connected";
}
if(isset($_POST["submit"]))
{
    $firstName=$_POST["firstName"];
    $lastName=$_POST["lastName"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    $insert=$con->query("INSERT INTO tyla.feedback (`firstName`,`lastName`,`email`,`message`)VALUES('$firstName','$lastName','$email','$message')");
    

if($insert){
    echo "<script>alert ('Feeedback Submitted'); </script>";

   }
}
?>
<?php include('includes/footer.php')?>