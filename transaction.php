<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
           
           <label>Loan Name::</label><br>
           <label>Transaction Status::</label>
           <label>Date&time::</label>
           <input type="date"><br>
           <label>Documents::</label>
           <input type="text"><br>
           <label>Confirmation::</label>
           <input type="text"><br>
           <button type="submit" name="loans" >Continue</button>
    </form>
</body>
</html>
<?php
$conn=mysqli_connect("loct","root","root","tyla");
if(!$conn)
{
    echo "not connected";
}
if(isset($_POST["loans"])){
    $LoanName=$_POST["LoanName"];
    $
}