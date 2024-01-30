<?php
session_start();
if(!isset($_SESSION["SID"]) )
	header("Location:index.php");
    error_reporting(0);
?>
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
        <script src="js/editprofile.js"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
            <?php include "menu.php" ?>  

        <!-- Masthead-->
        <img src="images/background.png" alt="Club logo" width="100%">
            <div class="container">

        <!-- Content-->
        <div>

        <?php
                    $SID = $_SESSION['SID'];
					include('databaseConnection.php');
					$error = mysqli_connect_error();
					if($error != null)
						echo("There is a problem".$error);

                    

                    if(isset($_SESSION['SID']) )
                    {
 
                        $_SESSION['SID'] = $SID;
                        $currentSID = $_SESSION['SID'];
                        $sql = "Select * from members where SID = '".$currentSID."'";
						$result = mysqli_query($connection, $sql);
						$row = mysqli_fetch_assoc($result);

						echo "<form method='post' action='updateprofile.php' id='form'>";
						echo "<p><label> First Name: </label>";
						echo "<input type='text' id='firstName' name='firstName' value ='".$row['firstName']."'></p>";

                        echo "<br>";
						echo "<p><label> Last Name: </label>";
						echo "<input type='text' id='lastName' name='lastName' value ='".$row['lastName']."'></p>";

                        echo "<br>";
                       
						echo "<p><label> Effat Email: </label>";
						echo "<input type='email' id='efemail' name='efemail' value ='".$row['effatemail']."'></p>";
                        echo "<br>";
						echo "<p><label> Personal Email: </label>";
						echo "<input type='email' id='efemail' name='pemail' value ='".$row['personalEmail']."'></p>";

                        echo "<br>";
                        echo "<p><label> Phone: </label>";
						echo "<input type='tel' id='phone' name='phone' value ='".$row['phone']."'></p>";

                        echo "<br>";
						echo "<p><label> Password: </label>";
						echo "<input type='password' id='pass' name='pass' value ='".$row['pass']."'></p>";

                        echo "<label> College </label><br>";
                        echo "<select id='major' name='college'>";
                        echo "<option value=".$row['college']."> ".$row['college']."</option>";
                        echo "<option value='CollegeofEngineering'> College of Engineering</option>";
                        echo "<option value='CollegeofBusiness'> College of Business</option>";
                        echo "<option value='CollegeofHumanity'> College of Humanity</option>";
                        echo "<option value='CollegeofArchitectureandDesign'> College of Architecture and Design</option>";
                        echo "</select>";
                        echo "<br><br>";
                        echo "<label> Department </label><br>";
                        echo "<select id='major' name='department'>";
                        echo "<option value=".$row['department']."> ".$row['department']."</option>";
                        echo "<option value='Electrical and Computer Engineering'> Electrical and Computer Engineering</option>";
                        echo "<option value='English and Translation'> English and Translation</option>";
                        echo "<option value='Psychology'> Psychology</option>";
                        echo "<option value='Finance'> Finance</option>";
                        echo "<option value='Human Resources Manegement'> Human Resources Manegement</option>";
                        echo "<option value='Supply Chain Manegement'> Supply Chain Manegement</option>";
                        echo "<option value='Entrepreneurship'> Entrepreneurship</option>";
                        echo "<option value='Architecture'> Architecture</option>";
                        echo "<option value='Cinematic Art'> Cinematic Arts</option>";
                        echo "<option value='Design'> Design</option></select>";
                        echo "<br>";

                        echo "<br>";

                        echo "<label>Year Graduated </label> <br>";
                        echo "<select class='input' id='graduationYear' name='graduationYear'>";
                        echo "<selected='' value='".$row['graduationYear']."'> <option> ".$row['graduationYear']."</option>";
                        echo "<option value='2002'> 2003</option>";
                        echo "<option value='2003'> 2003</option>";
                        echo "<option value='2004'> 2004</option>";
                        echo "<option value='2005'> 2005</option>";
                        echo "<option value='2006'> 2006</option>";
                        echo "<option value='2007'> 2007</option>";
                        echo "<option value='2008'> 2008</option>";
                        echo "<option value='2009'> 2009</option>";
                        echo "<option value='2010'> 2010</option>";
                        echo "<option value='2011'> 2011</option>";
                        echo "<option value='2012'> 2012</option>";
                        echo "<option value='2013'> 2013</option>";
                        echo "<option value='2014'> 2014</option>";
                        echo "<option value='2015'> 2015</option>";
                        echo "<option value='2016'> 2016</option>";
                        echo "<option value='2017'> 2017</option>";
                        echo "<option value='2018'> 2018</option>";
                        echo "<option value='2019'> 2019</option>";
                        echo "<option value='2020'> 2020</option>";
                        echo "<option value='2021'> 2021</option>";
                        echo "<option value='2022'> 2022</option>";
                        echo "<option value='2023'> 2023</option>";
                        echo "<option value='2024'> 2024</option>";
                        echo "</select>";
                        echo "<br><br>";

                        echo "<p><label> About: </label>";
						echo "<input type='text' id='lastName' name='about' value ='".$row['about']."'></p>";

                        echo "<br>";

                        echo "<br>";
						echo "<input type='submit' name ='Save' value='Save'>";
						echo "<a href='profile.php'> Cancel</a>";
                        
						echo "<br>";

						echo "<input type = 'hidden' id='SID' name='SID' value = '".$SID."'>";
						
						echo "</form>";
                        
                    }
                    else
                    {
                        echo "<h4>Please <a href='login.php'>login</a> or <a href='joinUs.php'>join us</a> first to see this page.</h4>";
                    }
					error_reporting(0);
					?>

        </div>



</div>
<br><br>
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