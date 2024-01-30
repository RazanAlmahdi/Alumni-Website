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
        <script src="js/myScript.js"></script>
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
        <!-- form -->
        <form class="form" action="addActivity.php" method="post" id="form">
          <fieldset>
            <legend> New Activity </legend>
            <label> Type </label> <br>
            <select class="input" id="college" name="type">
                <option selected="" value=""> choose your activity</option>
                <option value="experience"> Experience </option>
                <option value="community">Community Service</option>
                <option value="publication"> Publication</option>
                <option value="awards"> Awards and Honors</option>
            </select>
            <label> Title </label> <br>
            <input  type="text" name="title" class="name" class="title">
            <br></br>
            <label>Begin Date</label>
            <input type="date" class="date" name="beginDate">
            <br><br>
            <label>End Date</label>
            <input type="date" class="date" name="endDate">
            <br><br>
            <label> Location </label> <br>
            <input  type="text" name="location" class="name" class="location">
            <br></br>
            <label> Content </label> <br>
            <input class="textarea" type="textarea" name="content" class="content" placeholder="describe your activity ">
            <br></br>
            <input class="button first" type="submit" name="submit" value="submit">
            <input class="button second" type="reset" name="submit" value="reset">
          </fieldset>
        </form>
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
