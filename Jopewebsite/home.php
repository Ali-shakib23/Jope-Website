<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styling/style.css">
    <title>Jope</title>
    <script src="./navigation.js">
        /* Set the width of the side navigation to 250px */

    </script>
</head>

<body>
    <div id="floatingImage">
        <img src="./burger-bar.png" onclick="openNav()">
    </div>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <ul>
            <li> <a href="">ABOUT</a> </li>
            <li> <a href="">HOME</a> </li>
            <li> <a href="">MENTORS</a> </li>
            <li> <a href="">Categoires</a> </li>
            <li> <a href="">CONTACT</a> </li>
            <li> <a href="">Login</a> </li>
            <li> <a href="">Employer</a> </li>
        </ul>
    </div>
    <header>
        <div class="container">
            <nav>
                <img src="./jope logo.jpg" class="logo">
                <ul>
                    <li> <a href="">ABOUT</a> </li>
                    <li> <a href="">HOME</a> </li>
                    <li> <a href="">MENTORS</a> </li>
                    <li> <a href="">Categoires</a> </li>
                    <li> <a href="">CONTACT</a> </li>
                </ul>
                <ul id="apply">
                    <li> <a href="">Login</a> </li>
                    <li> <a href="">Employer</a> </li>
                </ul>
            </nav>

        </div>
    </header>

    <section>
        <div id="article1">
            <h2>Find the Suitable job vacancy
                <br>
                <div id="mid"> with us! </div>
            </h2>
            <br>
            <p>With Jope , There is always a Hope</p>
            <br>
            <form action="" class="searchBar">
                <input type="text" placeholder="search">
            </form>
        </div>

        <div id="article2">
            <h2>Why Jope?</h2>
            <div id="cards">
                <div class="card">
                    <h3>Employment oppurtunties</h3>
                    <br>
                    <p> Through us, You can connect with many companies that wants <br> talented people just like you!
                    </p>
                    <br>
                </div>
                <div class="card">
                    <h3>Proffessional Networking</h3>
                    <br>
                    <p> We provide a proffessional networking between Applicants and hiring <br> companies </p>
                    <br>
                </div>
                <div class="card">
                    <h3>Mentorship</h3>
                    <br>
                    <p>Friendly Mentors that can guide you to the rigth path
                    </p>
                    <br>
                </div>
            </div>

            <div id="article3">
                <h2>Our Companies Clients</h2>
                <div class="companies">
                    <img src="./companies.png" alt="">
                </div>
            </div>
        </div>
        <div id="article4">
            <h2>Recent Jobs</h2>
            <div id="full_latest">
                <div class="recent_jobs">
                <?php
                    include "config.php";
                    $viewjobs= "SELECT * FROM jobs";
                    $result=mysqli_query($con,$viewjobs);
                    
                    while (  $row=mysqli_fetch_array($result)){
                         echo "
                            <div>
                            <h3> <a href='viewjob.php?Jname=".$row["Jname"]."'> ".$row["Jname"]." </a> </h3>
                            <br>
                            <p> ".$row["Jcompany"]." -  ".$row["Jlocation"]."</p>
                            </div>
                            
                        ";
                        echo "<br>";
                    }
                ?>
                    <!-- <div>
                        <h3> <a href=""> Software Engineer</a> </h3>
                        <br>
                        <p> Microsoft - Smart Village </p>

                    </div>
                    <div class="choosing">
                        <a href="">Apply</a>
                        <form action="">
                            <input type="checkbox" value="Save">
                        </form>
                    </div>
                </div> -->

                <!-- <div class="recent_jobs">
                    <div>
                        <h3> <a href=""> Software Engineer</a> </h3>
                        <br>
                        <p> Microsoft - Smart Village </p>

                    </div>

                    <div class="choosing">
                        <a href="">Apply</a>
                        <form action="">
                            <input type="checkbox" value="Save">
                        </form>
                    </div>

                </div> -->

                <!-- <div class="recent_jobs">
                    <div>
                        <h3> <a href=""> Software Engineer</a> </h3>
                        <br>
                        <p> Microsoft - Smart Village </p>
                    </div>

                    <div class="choosing">
                        <a href="">Apply</a>
                        <form action="">
                            <input type="checkbox" value="Save">
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
        
    </section>

    <footer id="last">
        <div class="footer_content">
            <h3>For Candidates</h3>
            <ul>
                <li> <a href="">Register</a> </li>
                <li> <a href="">Find Jobs</a> </li>
                <li> <a href="">Search Jobs</a> </li>
            </ul>
        </div>
        <div class="footer_content">
            <h3>For Employers</h3>
            <ul>
                <li> <a href="">Find Candidates</a> </li>
                <li> <a href="">Terms and Policies</a> </li>
            </ul>
        </div>
        <div class="footer_content">
            <h3>Company</h3>
            <ul>
                <li> <a href="">ABOUT</a> </li>
                <li> <a href="">Team</a> </li>
                <li> <a href="">Term and Policies</a> </li>
                <li> <a href="">CONTACT</a> </li>
            </ul>
        </div>
        <div class="footer_content">
            <div class="card3">
                <h3>Contact Info</h3>
                <br>
                <h4>Address</h4>
                <br>
                <p>203 Fake St. Mountain View, San <br> Francisco, California, USA</p>
                <br>
                <h4>Phone</h4>
                <br>
                <a href="">+20 11234583773</a>
                <br> <br>
                <h4>Email Adderess</h4>
                <br>
                <a href="">jope@gmail.com</a>
            </div>
        </div>



    </footer>








</body>

</html>