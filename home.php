<?php include('includes/navbar.php')?>

<head>
    <style>
        body{
            font-family:Arial,sans-serif;
            width:100%;
            height:100vh;
            background: url(uploads/images/home.avif);
            background-size:cover;
            background-position:center;
        
        }
        .container{
            width:80%;
            margin:auto;
            overflow:hidden;
        }
        .main-content{
            padding:2rem 0;
        }
        h2{
            color:white;
            font-family:coper black;
        
        }
      
        .card{
            background:#fff;
            border-radius:8px;
            margin:1rem 0;
            padding:1rem 0;
            text-align: center;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }
        .card h4{
            margin-top:0;
        }
        .card p{
            color:#666;
        }

    </style>
</head>
<body>
    <div class="container main-content">
    <h2 style="text-align:center;"> <b>Why Choose TYLA??</b></h2>
       <div class="card">
        <h4>Lower Interest Rates</h4>
        <p>Get loans for multiple purposes at lower interest rates to suit your needs.</p>
        </div>
        <div class="card">
        <h4>Fast Processing and Disbursal</h4>
        <p>Apply online, check your eligibility and get money directly in your bank.</p>
        </div>
        <div class="card">
        <h4>100% Paperless</h4>
        <p>No paperwork or physical documentation is required,and you can apply and get a personal loan completely online.</p>
        </div>
        <div class="card">
        <h4>Safe,Secure and Transparent</h4>
        <p>Our loan application process is fullly secured and safe and there are no hidden charges.</p>
        </div>
    </div>
    
    <?php include('includes/footer.php')?>
