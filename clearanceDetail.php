<?php
error_reporting(0);
session_start();
if (isset($_SESSION['SID']))
            {
                $SID = $_SESSION['SID'];
                $sql = "select * from members where SID = '".$SID."'";
                include('databaseConnection.php');
                $result=mysqli_query($connection,$sql);

                $row=mysqli_fetch_array($result);

                if($row["accType"]!="admin")
                    header("Location:index.php");

            }
        else
            header("Location:index.php");
	
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
        <link href="css/ourstyle.css" rel="stylesheet" />

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
                $CID = $_POST['CID'];
                $sql = "select * from clearance where CID = '".$CID."'";
                $result = mysqli_query($connection,$sql);

                $row = mysqli_fetch_assoc($result);

                echo "<form class='form' action='verify.php' method='post' id='form'>";
                echo "<fieldset>";
                echo "<legend> Clearance </legend>";
                echo "<label> Name </label> <br>";
                echo "<input  type='text' name='fname' class='name' class='fname' value ='".$row['firstname']."'>";
                echo "<input type='text' name='lname' class='name' class='lname' value ='".$row['lastname']."'>";
                echo "<br></br>";
                echo"<label> ID </label><br>";
                echo"<input class='input' type='text' name='sID' id='sID' value ='".$row['SID']."'>";
                echo"<br></br>";
                echo "<label> Phone </label> <br>";
                echo"<input class='input' name = 'phone'  id='myPhone' type='tel' value ='".$row['phone']."'>";
                echo "<br></br>";
                echo "<label> College </label> <br>";
                echo"<select> class='input' id='college' name='college'>";
                echo "<selected='' value='".$row['college']."'> <option>".$row['college']."</option>";
                echo "</select>";
                echo "<br><br>";
                echo "<label>Year Graduated </label> <br>";
                echo "<select class='input' id='graduationYear' name='graduationYear'>";
                echo "<selected='' value='".$row['graduationyear']."'> <option> ".$row['graduationyear']."</option>";
                echo "</select>";
                echo "<br><br>";
                echo "<label> Department </label> <br>";
                echo "<select class='input' id='depatment' name='department'>";
                echo "<selected='' value='".$row['department']."'> <option>".$row['department']."</option>";
                echo "</select>";
                echo "<br><br>";
                echo "<label>Which method do you prefer to use for delivering your ID card, hard copy and soft copy of your graduation thesis, and recieve your diploma?:</label><br>";
                echo "<select class='input' id='method' name='method'>";
                echo"<selected='' value='".$row['method']."'> <option> ".$row['method']."</option>";
                echo"</select>";
                echo"<br><br>";
                echo "<label>I declare that information on this form is true, correct, and complete:</label><br>";
                echo "<input type='radio' id='declare1' name='declare' value='".$row['agreement']."'>";
                if($row['agreement'] == 0){
                    echo "<lable> I disagree </label>";
                }
                else{
                    echo "<lable> I agree </label>";
                }
                echo "<br><br>";
                echo " <label> Project/Thesis Title: </label> <br>";
                echo "<input  type='text' name='thesis' class='name' value ='".$row['thesistitle']."'>";
                echo "<br></br>";
                echo " <label> Supervisor </label> <br>";
                echo "<input  type='text' name='super' class='name' value ='".$row['supervisor']."'>";
                echo "<br></br>";
                echo "<labl> I submitted my research work for publication with my supervisor:</label><br>";
                echo "<input type='radio' id='publish1' name='publish' value='".$row['published']."'>";
                if($row['published'] == 0){
                    echo "<lable> No </label>";
                }
                else{
                    echo "<lable> Yes </label>";
                }
                echo "<br><br>";
                echo "<label>Country of Residence</label><br>";
                echo "<select class='input' id='country' name='country'>";
                echo"<selected='' value='".$row['country']."'><option> ".$row['country']."</option>";
                echo"</select>";
                echo"<br><br>";
                echo " <label> What are you currently doing?</label> <br>";
                echo "<input  type='text' name='job' class='name' value ='".$row['job']."'>";
                echo "<br></br>";
                echo "<label> Are you pursuing Post Graduate Studies?</label><br>";
                echo "<input type='radio' id='postgrad1' name='postgrad' value='".$row['postgrad']."'>";
                if($row['postgrad'] == 0){
                    echo "<lable> No </label>";
                }
                else{
                    echo "<lable> Yes </label>";
                }
                echo "<br><br>";
                echo "<label>Are you involved in Community Service Projects?</label><br>";
                echo "<input type='radio' id='community1' name='community' value='".$row['community']."'>";
                if($row['community'] == 0){
                    echo "<lable> No </label>";
                }
                else{
                    echo "<lable> Yes </label>";
                }
                echo "<br><br>";
                echo "<label>Are you working on publishing a research?</label><br>";
                echo "<input type='radio' id='research1' name='research' value='".$row['research']."'>";
                if($row['research'] == 0){
                    echo "<lable> No </label>";
                }
                else{
                    echo "<lable> Yes </label>";
                }
                echo "<br><br>";
                echo " <label> Effat Email </label> <br>";
                echo "<input class='input' type='email' name='efemail' id='efemail' value ='".$row['effatemail']."'>";
                echo "<br></br>";
                echo " <label> Personal Email </label> <br>";
                echo "<input class='input' type='email' name='efemail' id='efemail' value ='".$row['personalemail']."'>";
                echo "<br></br>";
                echo " <label> Comment </label> <br>";
                echo "<input class='input' type='textarea' name='comment' id='comment' placeholder='add comment'>";
                echo "<br></br>";
                echo "Verify</label><br>";
                echo "<input type='radio' id='verify1' name='verify' value='0'>";
                echo "<lable> No </label>";
                echo "<input type='radio' id='verify2' name='verify' value='1'>";
                echo "<lable> Yes </label>";
                echo "<br><br>";
                echo "<input type = 'hidden' id='CID' name='CID' value = ".$row['CID'].">";
                echo "<input class='button first' type='submit' name='submit' value='submit'>";
                echo"</fieldset>";
                echo"</form>";
                ?>
        </div>
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
