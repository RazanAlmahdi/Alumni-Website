<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Effat Alumni</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/ourstyle.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
            <?php include "menu.php" ?>
            <!-- Masthead-->
        <img src="images/background.png" alt="Club logo" width="100%">
            <div class="container">
             <?php
                    include('databaseConnection.php');
                    $error= mysqli_connect_error();
                    if ($error != null) {
                      echo "There is a problem ".$error;
                    }

                        $SID = $_POST['sID'];
                        $pass = $_POST['pass'];
                        $encrypted_pwd = md5($pass);
                        $firstName = $_POST['fname'];
                        $lastName = $_POST['lname'];
                        $pemail = $_POST['pemail'];
                        $phone = $_POST['phone'];
                        $efemail = $_POST['efemail'];
                        $department = $_POST['college'];
                        $college= $_POST['department'];
                        $gyear = $_POST['graduationYear'];
                        $about = $_POST['about'];

                        $sql = "insert into members (SID, pass, firstName, lastName, phone, effatemail, personalEmail, graduationYear, college, department, about) values('".$SID."', '".$encrypted_pwd."', '".$firstName."', '".$lastName."', '".$phone."','".$efemail."', '".$pemail."', '".$gyear."', '".$college."','".$department."', '".$about."')";

                        if(mysqli_query($connection,$sql) )
                        {
                            echo "<div class='block'>";
                            echo "<h4> Your account was created. Thank you! </h4>";
                            echo "<h4> Click on Login to login.</h4></div>";
                            echo "<div class='MyBtns'>";
                            echo "<a class='MyBtns loginBtn' href='login.php'>Log in</a></div>";
                        }
                        else
                        {
                            echo "<h4> An error occurred and your account could not be created. Try again later! </h4>";

                        }
                    





					?>
             </div>
					
        
        <br>
        <div class=" my-3 my-lg-0">
            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
        </div>
        <br>
        <?php include "contactus.php" ?>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="text-lg-start">Copyright &copy; Effat Alumni 2022</div>

                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
