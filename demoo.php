<?php include('includes/navbar.php')?>
<html>
    <head>
        <title>Loans</title>
    </head>
    <body>
        <h1>PERSONAL LOAN</h1>
        <ul>
            <li>Minimum Paperwork Requirement</li>
            <li>Lowest Interest rate starting from 10.50%</li>
            <li>Get loan upto 5Lakh</li>
        </ul>
        <button type="submit" name="getLoan">APPLY NOW</button><br><br>
        <h1>BUISINESS LOAN</h1>
        <ul>
            <li>Get aloan worth upto 99% of the market value of the property</li>
            <li>Fulfil Every Need</li>
            <li>Bank loan against property will be processed quickly and easily</li>
        </ul>
        <button type="submit" name="getLoan" >APPLY NOW</button><br><br>
        <h1>EDUCATION LOAN</h1>
        <ul>
            <li>Loan Amount Ranging fron Rs.10Lakhs to Rs.75Lakhs</li>
            <li>Attractive student loan interest</li>
            <li>100%finance for course fee and other expenses </li>
        </ul>
        <button type="submit" name="getLoan" >APPLY NOW</button><br><br>
        
    </body>
</html>
<?php include('includes/footer.php')?>


















  1. Personal Loan

Description: The Personal Loan from Take Your Loan Anywhere offers you the flexibility to handle various personal expenses with ease. Whether you’re dealing with unexpected medical bills, planning a significant event, making home improvements, or simply consolidating existing debt, our app provides a streamlined process for obtaining the financial support you need. By using our app, you can apply for a loan and upload your documents securely online, eliminating the need for physical paperwork and bank visits. We aim to make personal financial management more accessible and convenient.

Eligibility Criteria:

Age: Applicants must be between 21 and 60 years old to ensure they are in a stable stage of life and able to manage repayment.
Income: A stable and verifiable source of income is required. This includes salaried employees, freelancers, or individuals with consistent self-employment income. Proof of income can be provided through recent pay stubs, bank statements, or income tax returns.
Employment Status: Full-time employment or a consistent self-employment status is necessary to demonstrate financial stability.
Credit History: A positive credit history is preferred to reflect a track record of responsible borrowing and repayment. However, we consider various factors, including income and employment, which may allow for exceptions.
Residency: Applicants must be legal residents of the country where our app is available to ensure compliance with local lending regulations.
2. Education Loan

Description: Our Education Loan is designed to help students and their families manage the costs associated with pursuing higher education. From covering tuition fees and buying textbooks to funding accommodation and other academic expenses, our loan service aims to alleviate the financial burden of education. The application process is fully digital, allowing students to apply and upload supporting documents online, which makes managing your education funding simpler and more efficient.

Eligibility Criteria:

Age: Typically, applicants should be between 16 and 35 years old. This range accommodates students at various stages of their educational journey, including undergraduate, graduate, and vocational studies.
Enrollment: You must be enrolled or accepted into a recognized educational institution. Proof of enrollment or an acceptance letter is required to process the loan application.
Course: Loans are available for a wide range of academic programs, including undergraduate, postgraduate, and vocational courses. The course must be at an accredited institution to qualify.
Income: A co-applicant, usually a parent or guardian, must have a stable income to support the loan application. This ensures that there is financial backing to assist with repayment.
Credit History: While the credit score of the co-applicant is an important factor, students with a limited credit history may still be eligible based on the financial stability of their co-applicant and the educational institution.
Residency: Applicants must be residents of the country where the app operates to comply with local lending laws.
3. Business Loan

Description: The Business Loan offered by Take Your Loan Anywhere is tailored to meet the financial needs of entrepreneurs and small business owners. Whether you’re launching a new business, expanding an existing operation, or investing in crucial business assets, our app simplifies the loan application process. By allowing you to apply and submit documents online, we streamline the journey from application to approval, making it easier for you to focus on growing your business.

Eligibility Criteria:

Age: Applicants must be at least 21 years old, which ensures they are legally capable of entering into a financial contract and managing business finances.
Business Type: Our loans are available to a diverse range of businesses, including startups, small and medium-sized enterprises (SMEs), and established companies. This flexibility helps accommodate different business needs and stages.
Business Duration: For established businesses, a minimum operational period of 1 year is generally required. Startups may also be eligible if they present a solid business plan and demonstrate potential for success.
Revenue: Evidence of business revenue and financial stability is necessary. This can include financial statements, tax returns, or bank statements showing a steady income stream.
Credit History: Both personal and business credit histories are reviewed. A strong credit history supports loan approval, though we also consider business potential and financial health.
Residency: The business owner must be a resident of the country where our app operates to ensure compliance with local regulations and lending practices.











<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <?php
session_start();
?>

<body>
    <style>
         * {
            margin: 0;
            padding: 0;
        }
        body{
            width:100%;
            height:100vh;
            background: url(uploads/images/loan.jpg);
            background-size:cover;
            background-position:center;
        }

        #navbar {
            background-color: black;
            padding: 20px;
            width:100%;
            display: flex;
            justify-content: space-around;
           
        }

        .nav-link {
            color: rgb(255, 255, 255);
            text-decoration: none;
            float:left;
        }

        .nav-link:hover {
            color: yellow
        }

        #navlogo {
            font-size: 20px;
            color: Yellow;
            font-weight: bolder;
            text-transform: uppercase;
            text-decoration: none;
            
        }
    </style>


    <div id="navbar">
        <div><a href="#" id="navlogo"><b>TYLA</b></a></div>

           
        <div><a class="nav-link" href="home.php">Home</a></div>

        <div><a class="nav-link" href="about.php">About</a></div>

        <div><a class="nav-link" href="contact.php">Contact</a></div>



        <?php
        if (isset($_SESSION['Userid'])) {
            if($_SESSION['role'] == "user")
            {
                ?>
                <div><a class="nav-link" href="loans.php">loans</a></div>
                <div><a class="nav-link" href="viewtransaction.php">My Loans</a></div>
                <div><a class="nav-link" href="logout.php">Logout</a></div>
                <div><a class="nav-link" href="">
                <img src="<?php echo $_SESSION['image']; ?>" alt="" style="width:3rem;height:3rem;object-fit:cover;border-radius:50px;">    
                Hello <?php echo $_SESSION['Userid']; ?></a></div>
                
                <?php

            }
            else if($_SESSION['role'] == "admin")
            {

                ?>
                <div><a class="nav-link" href="adminpanel.php">dashboard</a></div>
                <div><a class="nav-link" href="logout.php">Logout</a></div>
                <div><a class="nav-link" href="">
        
                Hello <?php echo $_SESSION['Userid']; ?></a></div>
                
                <?php
            }
            else if($_SESSION['role'] == "staff")
            {

                ?>
                <div><a class="nav-link" href="staffpanel.php">dashboard</a></div>
                <div><a class="nav-link" href="logout.php">Logout</a></div>
                <div><a class="nav-link" href="">
        
                Hello <?php echo $_SESSION['Userid']; ?></a></div>
                
                <?php
            }
           
        } else {
            ?>
            <div><a class="nav-link" href="register.php">Register</a></div>

            <div><a class="nav-link" href="login.php">Login</a></div>
            <?php
        }

        ?>


    </div>
  
    