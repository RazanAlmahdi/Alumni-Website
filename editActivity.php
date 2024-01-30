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
        <h3>Edit Activity</h3>
        <form method="post" action="" id="form1">
            <p><label>Select Activity </label><br>
            <select id="activityID" name="activityID">

            <?php
                include('databaseConnection.php');
                $error = mysqli_connect_error();
                if($error != null)
                echo("There is a problem".$error);
                $SID = $_SESSION['SID'];
                
                $mysql = "Select activityID, title from activity where SID = '".$SID."'";
                $myresult = mysqli_query($connection,$mysql);

                while( $row = mysqli_fetch_array($myresult) )
                {
                    echo" <p><option value =".$row['activityID'].">".$row['title']."</option></p>";
                }
            ?>
        <input class="bttn" type="submit" value="Edit Activity">
            </form>
        <div>

        <?php
                    include('databaseConnection.php');
                    $error = mysqli_connect_error();
                    if($error != null)
                        echo("There is a problem".$error);
                    if(isset($_POST['activityID']) ){
                        $activityID = $_POST['activityID'];
        
                        $sql = "SELECT * from activity where activityID = ".$activityID."";
                        $result = mysqli_query($connection, $sql);
                        $row = mysqli_fetch_assoc($result);

						echo "<form method='post' action='updateactivity.php' id='form'>";
                        echo "<label> Type </label><br>";
                        echo "<select id='type' name='type'>";
                        echo "<option value=".$row['type']."> ".$row['type']."</option>";
                        echo "<option value='experience'> Experience</option>";
                        echo "<option value='community'> Community Service </option>";
                        echo "<option value='publication'> Publication</option>";
                        echo "<option value='awards'> Awards and Honors</option>";
                        echo "</select>";
                        echo "<br>";

                        echo "<br>";
						echo "<label> Title </label> <br>";
                        echo "<input  style='width:15em;' type='text' name='title' class='name' class='title' value ='".$row['title']."'>";
                        echo "<br></br>";

                        echo "<label>Begin Date</label>";
                        echo "<input type='date' class='date' name='beginDate' value ='".$row['dateBegin']."'>";
                        echo "<br><br>";
                        echo "<label>End Date</label>";
                        echo "<input type='date' class='date' name='endDate' value ='".$row['dateEnd']."'>";
                        echo "<br>";
                        echo "<br>";
						echo "<p><label> Location </label>";
						echo "<input type='text' id='lastName' name='location' value ='".$row['location']."'></p>";

                        echo "<label> Content </label> <br>";
                        echo "<input class='textarea' type='textarea' name='content' class='content' value ='".$row['content']."'>";
                        echo"<br>";

                        echo "<br>";
						echo "<input type='submit' name ='Save' value='Save'>";
						echo "<a href='profile.php'> Cancel</a>";
                        
						echo "<br>";

                        echo "<input type = 'hidden' id='activityID' name='activityID' value = ".$activityID.">";
						echo "</form>";
                        
                    }
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