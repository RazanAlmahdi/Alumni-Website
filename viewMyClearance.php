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
					include('databaseConnection.php');
					$error = mysqli_connect_error();
					if($error != null)
						echo("There is a problem".$error);
                    
                    $currentSID = $_SESSION['SID'];
                    $sql = "Select * from clearance where SID = '".$currentSID."'";
                    
                    $result = mysqli_query($connection,$sql);
					
					echo "<table class='table table-striped'>";
					echo "<tr> <th> Clearance ID </th><th> Status </th> <th> Comment </th>";
					if(mysqli_num_rows($result) == 0)
					{
						echo "<tr> <td colspan=4> There are no messages recieved! </td> </tr>";
					}
					else{
						
						while( $row = mysqli_fetch_assoc($result) )
						{
							echo "<tr>";
							echo "<td>".$row['CID']."</td>";
							if($row['verified'] == 0){
                                echo "<td>Not verified</td>";
                            }
                            else{
                                echo "<td>Verified</td>";
                            }
                            echo "<td>".$row['comment']."</td>";
							echo "</tr>";
							
						}
					}//end else
					echo "</table>";
					
				 
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