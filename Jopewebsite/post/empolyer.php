
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./employerStyle.css">
    <script src="../navigation.js"></script>
</head>

<body>

    <div id="floatingImage">
        <img src="../burger-bar.png" onclick="openNav()">
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
                <img src="../jope logo.jpg" class="logo">
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
            <h2>Post A job To find the suitable candidate with Us</h2>
        </div>

        <div id="article2">
            <div class="card1">
                <form action="">
                    <label for="">Job Id</label>
                    <br> <br>
                    <input type="text" placeholder="Job Id" required>
                    <br><br>
                    <label for="">Job Title</label>
                    <br> <br>
                    <input type="text" placeholder="Android developer">
                    <br><br>
                    <label for="">JOB Type</label>
                    <br> <br>
                    <input type="radio">
                    <label> Full Time</label>
                    <br>
                    <input type="radio">
                    <label> Part Time</label>
                    <br>
                    <input type="radio">
                    <label> Freelance</label>
                    <br>
                    <input type="radio">
                    <label> Internship</label>
                    <br>
                    <br><br>
                    <label for="">Job Category</label>
                    <br> <br>
                    <input type="text" placeholder="ex Facebook.inc">
                    <br> <br>
                    <label for="">Location</label>
                    <br> <br>
                    <input type="email" placeholder="Cairo City" required>
                    <br><br>
                    <label for="">Company</label>
                    <br> <br>
                    <input type="text" placeholder="ex Facebook.inc">
                    <br><br>
                    <input style="background-color:#0055d9; color:white;" type="submit" name="" id="">
                </form>
            </div>

            <div class="card2">
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
