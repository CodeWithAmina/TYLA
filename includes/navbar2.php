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
  