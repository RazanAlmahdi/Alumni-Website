<?php
session_start();
if(!isset($_SESSION["SID"]) )
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
        <link href="css/alumniProfile.css" rel="stylesheet" />

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
                $SID = $_SESSION['SID'];
                $sql = "select * from members where SID = '".$SID."'";
                $result = mysqli_query($connection,$sql);

                $row = mysqli_fetch_assoc($result);

                if($row["accType"]=="")
                {
                echo "<img src='images/profile.png' alt='profile' width='50em' height='50em'> <h2>".$row['firstName']." ".$row['lastName']."</h2>";
                echo "<h2>".$row['department']."</h2>";
                echo "<h2>".$row['graduationYear']."</h2>";
                echo "<p>Email: ".$row['personalEmail']."</p>";
                }
                ?>
                <h2> Experience </h2>
                <hr>
                <?php
                include('databaseConnection.php');

                $error = mysqli_connect_error();
                if($error != null)
                    echo("There is a problem".$error);
                $SID = $_SESSION['SID'];
                $sql = "select * from activity where SID = '".$SID."'";
                $result = mysqli_query($connection,$sql);

                while ($row = mysqli_fetch_assoc($result)) {
                if($row["type"]=="experience"){
                echo "<h3>" .$row['title']. "</h3>";
                echo "<hr>";
                echo "<p>" .$row['dateBegin']. " - " .$row['dateEnd']. "</p>";
                echo "<h3>" .$row['location']. "</h3>";
                echo "<p>" .$row['content']. "</p>";
                echo "<hr>";
                }
            }
                ?> 
                <h2> Community Service </h2>
                <hr>
                <?php 
                include('databaseConnection.php');

                $error = mysqli_connect_error();
                if($error != null)
                    echo("There is a problem".$error);
                $SID = $_SESSION['SID'];
                $sql = "select * from activity where SID = '".$SID."'";
                $result = mysqli_query($connection,$sql);

                while ($row = mysqli_fetch_assoc($result)) {
                if($row["type"]=="community"){
                
                echo "<h3>" .$row['title']. "</h3>";
                echo "<hr>";
                echo "<p>" .$row['dateBegin']. " - " .$row['dateEnd']. "</p>";
                echo "<h3>" .$row['location']. "</h3>";
                echo "<p>" .$row['content']. "</p>";
                echo "<hr>";
                }
            }
            ?>
                <h2> Publications </h2>
                <hr>
                <?php 
                include('databaseConnection.php');

                $error = mysqli_connect_error();
                if($error != null)
                    echo("There is a problem".$error);
                $SID = $_SESSION['SID'];
                $sql = "select * from activity where SID = '".$SID."'";
                $result = mysqli_query($connection,$sql);

                while ($row = mysqli_fetch_assoc($result)) {
                if($row["type"]=="publication"){
                echo "<h3>" .$row['title']. "</h3>";
                echo "<hr>";
                echo "<p>" .$row['dateBegin']. " - " .$row['dateEnd']. "</p>";
                echo "<h3>" .$row['location']. "</h3>";
                echo "<p>" .$row['content']. "</p>";
                echo "<hr>";
                }
            }
            ?>
                <h2> Homors and Awards </h2>
                <hr>
                <?php 
                include('databaseConnection.php');

                $error = mysqli_connect_error();
                if($error != null)
                    echo("There is a problem".$error);
                $SID = $_SESSION['SID'];
                $sql = "select * from activity where SID = '".$SID."'";
                $result = mysqli_query($connection,$sql);

                while ($row = mysqli_fetch_assoc($result)) {
                if($row["type"]=="awards"){
                
                echo "<h3>" .$row['title']. "</h3>";
                echo "<hr>";
                echo "<p>" .$row['dateBegin']. " - " .$row['dateEnd']. "</p>";
                echo "<h3>" .$row['location']. "</h3>";
                echo "<p>" .$row['content']. "</p>";
                echo "<hr>";
                }
            }
                ?>
                <?php
                include('databaseConnection.php');

                $error = mysqli_connect_error();
                if($error != null)
                    echo("There is a problem".$error);
                $SID = $_SESSION['SID'];
                $sql = "select * from members where SID = '".$SID."'";
                $result = mysqli_query($connection,$sql);

                $row = mysqli_fetch_assoc($result);

                if($row["accType"]=="")
                {
                    echo "<a href='editprofile.php'><p><button>Edit Profile</button></p></a></div>";
                    echo "<a href='newActivity.php'><p><button>Add Activity</button></a> <a href='editActivity.php'><button>Edit Activity</button></p></a></div>";
                    echo "<br>";
                    echo "<div class='profilebtns'><div class='MyBtns'><a href='logout.php'><p class='MyBtns loginBtn'>Logout</p></a></div>";
                    echo "<div class='MyBtns'><a href='deleteMember.php'><p class='MyBtns registerBtn'>Delete Account</p></a></div></div>";  
                }
                    
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