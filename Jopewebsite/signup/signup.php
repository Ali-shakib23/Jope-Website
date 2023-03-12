<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login/loginStyle.css">
    <script src="./valid.js"> </script>
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
        <div id="card">
            <h2>Signup</h2>
            <br>
            <form onsubmit="return validation()" method="post" name="signupform" action="reg_handler.php">
                <label>Firstname</label>
                <br>
                <input type="text" name="firstname" placeholder="Firstname">
                <br><br>
                <label for="">Lastname</label>
                <br>
                <input type="text" name="lastname" placeholder="Lastname">
                <br><br>
                <label for="">Email</label>
                <br>
                <input type="text" placeholder="Email" name="email">
                <br><br>
                <label for="">Password</label>
                <br>
                <input type="password" placeholder="Password" name="password">
                <br><br>
                <label for="">confrim Password</label>
                <br>
                <input type="password" placeholder="confrimPassword" name="confirmpassword">
                <br><br>
                <a href="">Forget Password</a>
                <br><br>
                <input type="submit" value="Submit" style="background-color:  #0055d9; color: white;">
                <br> <br>

            </form>
            <a href="">Already have an account?</a>
        </div>
    </section>
</body>
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

</html>