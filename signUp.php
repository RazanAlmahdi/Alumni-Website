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
        <form class="form" action="addMember.php" method="post" id="form">
          <fieldset>
            <legend> Sign Up </legend>
            <label> Your Name </label> <br>
            <input  type="text" name="fname" class="name" class="fname" placeholder="First Name">
            <input type="text" name="lname" class="name" class="lname" placeholder="Last Name">
            <br></br>
            <label> Effat Email </label> <br>
            <input class="input" type="email" name="efemail" id="efemail" placeholder="example@effat.sa">
            <br></br>
            <label> Personal Email </label> <br>
            <input class="input" type="email" name="pemail" id="pemail" placeholder="example@exmaple">
            <br></br>
            <label> Phone </label> <br>
            <input class="input" name = "phone"  id="myPhone" type="tel" placeholder="Your Phone *" />
            <br></br>
            <label> ID </label><br>
            <input class="input" type="text" name="sID" id="sID" placeholder="S20104400">
            <br></br>
            <label> Password </label> <br>
            <input class="input" type="password" name="pass" id="pass">
            <br></br>
            <label> Confirm Password </label> <br>
            <input class="input" type="password" name="pass" id="Confirmpass">
            <br></br>
            <label> College </label> <br>
            <select class="input" id="college" name="college">
                <option selected="" value=""> choose your college</option>
                <option value="CollegeofEngineering"> College of Engineering</option>
                <option value="CollegeofBusiness"> College of Business</option>
                <option value="CollegeofHumanity"> College of Humanity</option>
                <option value="CollegeofArchitectureandDesign"> College of Architecture and Design</option>
            </select>
            <br></br>
            <label> Department </label> <br>
            <select class="input" id="department" name="department">
                <option selected="" value=""> choose your department</option>
                <option value="ComputerScience"> Computer Science</option>
                <option value="ElectricalandComputerEngineering"> Electrical and Computer Engineering</option>
                <option value="EnglishandTranslation"> English and Translation</option>
                <option value="Psychology"> Psychology</option>
                <option value="Finance"> Finance</option>
                <option value="HumanResourcesManegement"> Human Resources Manegement</option>
                <option value="SupplyChainManegement"> Supply Chain Manegement</option>
                <option value="Entrepreneurship"> Entrepreneurship</option>
                <option value="Architecture"> Architecture</option>
                <option value="Cinematic Art"> Cinematic Arts</option>
                <option value="Design"> Design</option>
            </select>
            <br></br>
            <label> Year Graduated </label> <br>
            <select class="input" id="graduationYear" name="graduationYear">
            <option selected="" value=""> choose your year of graduation</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
            </select>
            <br></br>
            <label> About You</label> <br>
            <input class="textarea" type="textarea" name="about" class="about" placeholder="Write important information not stated above. ">
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
