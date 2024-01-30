<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Effat Alumni</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <script src="js/bookread.js"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/ourstyle.css" rel="stylesheet" />
        <link href="css/clubmembers.css" rel="stylesheet" />
        <link href="css/contactUs.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include "menu.php" ?>
        <!-- Masthead-->
        <img src="images/background.png" alt="Club logo" width="100%">
            <div class="container">
        <!-- Club Members-->
        <div class="text-center">
          <h1> Alumni </h1>
        </div>
        <?php
            session_start();


            include('databaseConnection.php');

            if($data===false)
            {
                die("connection error");
            }

            if (isset($_SESSION['SID']))
            {
                $SID = $_SESSION['SID'];
                $sql = "select * from members where SID = '".$SID."'";

                $result=mysqli_query($connection,$sql);

                $row=mysqli_fetch_array($result);

                if($row["accType"]=="admin")
                {
                    echo"<a class='viewMessage' href='viewMessages.php'>View Messages</a>";
                }

            }
            ?>
            <br><br>
        <?php
              include('databaseConnection.php');
              $error= mysqli_connect_error();
              if ($error != null) {
                echo "There is a problem ".$error;
              }
              $sql = "SELECT * from members";
              $result = mysqli_query($connection,$sql);
              if (mysqli_num_rows($result)==0) {
                echo "There are no members in the database.";
              } else {
                $row = mysqli_fetch_assoc($result);
                  echo "<div class='grid'>";
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='block'>";
                    if($row["accType"]==""){
                    echo "<p class='name' id='" .$row['SID']. "'>".$row['firstName']. " " .$row['lastName']."</a>";
                    echo "<p>".$row['department']."</p>";
                    echo "<p>".$row['graduationyear']."</p>";
                    echo "<p>".$row['about']."</p>";
                    echo "<form action= 'externalAlumniProfile.php' method='post' id='form'>";
                    echo "<input type = 'hidden' id='SID' name='SID' value ='" .$row['SID']. "'>";
                    echo "<input class='button first' type='submit' name='More' value='More'>";
                    echo "</form>";
                    }
                    echo "</div>";
                  }
                  echo "</div>";
              }

          ?>
        <br><br></div>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="text-lg-start">Copyright &copy; Effat Alumni 2022</div>

                </div>
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
