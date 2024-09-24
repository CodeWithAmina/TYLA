<?php include('includes/navbar.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    width:100%;
    height:100vh;
    background: url(uploads/images/about.jpg);
    background-size:cover;
    background-position:center;

}

.container {
    width: 80%;
    margin: auto;
    overflow: hidden;
  
}



/* Main content styles */
.main-content {
    padding: 2rem 0;
}

h2 {
    color:white;
    font-family:coper black;
    text-align: center;
}

section {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 1rem 0;
    padding: 1rem;
}

section h3 {
    color: #333;
}

section p {
    color: #666;
    line-height: 1.6;
}

    </style>
</head>
<body >
<div class="container main-content">
        <h2>About Us</h2>
        <section>
            <p><b>TYLA-Take Your Loan Anywhere </b> is a platform that facilitates loan transactions between borrowers and personal 
            loan providers.
            All details are clearly stated upfront during  the Loan application.<br>
            Tyla is an Instant Loan provider where they can apply for a Personal Loan starting from ₹ 1,000 up to ₹ 5 Lakhs
             as per their requirement. 
            We aim to become the first choice when it comes to quick and convenient Personal Loans. The documentation 
            required is very minimal. </p>
        </section>
        <section>
            <h3>Our Mission</h3>
            <p>At TYLA, our mission is to provide accessible and affordable financial solutions to help you achieve your goals. Whether you're looking for personal, business, or home loans, we are here to assist you every step of the way.</p>
        </section>
        <section>
            <h3>Our Values</h3>
            <p>We believe in integrity, transparency, and customer-centric solutions. Our core values guide our approach to lending and customer relations, ensuring that you receive honest and effective support.</p>
        </section>
</DIV>
<?php include('includes/footer.php')?>