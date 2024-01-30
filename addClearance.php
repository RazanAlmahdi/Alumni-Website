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

                        $firstName = $_POST['fname'];
                        $lastName = $_POST['lname'];
                        $SID = $_POST['sID'];
                        $phone = $_POST['phone'];
                        $department = $_POST['department'];
                        $method = $_POST['method'];
                        $agreement = $_POST['declare'];
                        $gyear = $_POST['graduationYear'];
                        $college= $_POST['college'];
                        $thesis = $_POST['thesis'];
                        $supervisor = $_POST['super'];
                        $publish = $_POST['publish'];
                        $country = $_POST['country'];
                        $job = $_POST['job'];
                        $postgrad = $_POST['postgrad'];
                        $community = $_POST['community'];
                        $research = $_POST['research'];
                        $pemail = $_POST['pemail'];
                        $efemail = $_POST['efemail'];

                        $sql = "insert into clearance (SID, firstName, lastName, phone, college, department, method, agreement, graduationYear, thesistitle, supervisor, published, country, job, postgrad, community, research, effatemail, personalEmail) values('".$SID."', '".$firstName."', '".$lastName."', '".$phone."', '".$college."','".$department."', '".$method."', '".$agreement."', '".$gyear."', '".$thesis."', '".$supervisor."', '".$publish."', '".$country."', '".$job."', '".$postgrad."', '".$community."','".$research."', '".$efemail."', '".$pemail."')";

                        if(mysqli_query($connection,$sql) )
                        {
                            echo "<h4> Your clearnce is succesfully submitted! </h4>";
                            
                        }
                        else
                        {
                            echo "<h4> An error occurred. Try again later! </h4>";

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
