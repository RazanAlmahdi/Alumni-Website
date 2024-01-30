<?php
if(!isset($_SESSION))
{
    session_start();
}
error_reporting(0);
?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" class="ournav"id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="images\logo.png" alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="alumniList.php">Alumni List</a></li>

                <?php
                include('databaseConnection.php');
                $SID = $_SESSION['SID'];
                if((isset($_SESSION['SID'])) && !empty($_SESSION['SID'])){
                if( $SID == "@2052" )
                {
                    echo "<li class='nav-item'><a class= 'nav-link' href= 'viewClearance.php'>Clearance</a></li>";

                    //if($accType=='admin')
                        //echo "<li class='nav-item'><a class= 'nav-link' href= 'manageEvents.php'>Manage Events</a></li>";
                    echo "<li class='nav-item'><a class= 'nav-link' href= 'profile.php'>Profile</a></li>";
                    echo "<li class='nav-item'><a class= 'nav-link' href= 'logout.php'>Logout</a></li>";
                }
                else{
                    echo "<li class='nav-item'><a class= 'nav-link' href= 'clearance.php'>Clearance</a></li>";
                    echo "<li class='nav-item'><a class= 'nav-link' href= 'alumniProfile.php'>Profile</a></li>";
                    echo "<li class='nav-item'><a class= 'nav-link' href= 'logout.php'>Logout</a></li>"; 
                }
                }
                
                ?>



            </ul>
        </div>
    </div>
</nav>
