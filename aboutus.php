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

        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About Us</h2>
                    <h3 class="section-subheading text-muted">The path of our Alumnus.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="images/book1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Foundation</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">When you graduate from EFFAT you become a lifelong member of the global alumni community. The global alumni network includes our Bachelor and Masters graduates.We value your impact personally and professionally, and recognize your global achievements. Whether your interests are in founding your own start-up, building a career in industry or academia, networking or volunteering for Effat.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="images/2.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Vision</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Effat University strives to be recognized among the world's higher educational institutions contributing to scientific discovery and innovation presenting solutions to societal challenges and serving as an agent of change that advances inspired leaders and scholars in fulfilling Queen Effat Al-Thunayan Al-Saud's vision.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="images/3.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Mission</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Effat University prepares aspirational and effective leaders of international quality who contribute to national and global progress by interweaving Effat University Core Values into an innovative education which creates a culture of broad inquiry, intellectual engagement, and valuable societal impact.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="images/4.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Where are you?</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Effat Alumni Website shares you achievements and you path in life with the world. From your contribution to your global progress. Its an opportunity to check on your fellow alumnus family. </p></div>
                        </div>
                    </li>
                    <?php
                if( !(isset($_SESSION['SID'])) && empty($_SESSION['SID']) )
                {
                    echo"<li class=timeline-inverted'><div class='timeline-image'><h4> <a class='bePart' href='signUp.php'>Stay<br>Connected<br>to Effat! </a></h4></div></li>";
                }
                ?>

                </ul>
            </div>
        </section>

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
