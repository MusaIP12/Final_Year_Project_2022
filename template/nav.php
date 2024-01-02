<?php
//if logged in, display the logout button
if(isset($_SESSION['logged_in'])){
    $html =  '<section class="nav">
<nav>
    <div class="logo" id="logo">
        <h1>
            <a href="index.php">Tertiary Guardian</a>
        </h1>
    </div>
    <div class="nave-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
        <li id="active"><a href="index.php">Home</a></li>
        <li><a href="university.php">Universities</a></li>
        <li><a href="college.php">Colleges</a></li>
        <li><a href="career.php">Majors Descriptions</a></li>
        <li><a href="img2py.php">Picture To PDF</a></li>
        <li><a href="papers.php">G12 Question Papers</a></li>
        <li><a href="contact.php">Contact Us</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>
</nav>
</section>';

    printf($html);
}
else{
    echo '<section class="nav">
<nav>
    <div class="logo" id="logo">
        <h1>
        <a href="index.php">Tertiary Guardian</a>
        </h1>
    </div>
    <div class="nave-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li id="active"><a href="index.php">Home</a></li>
            <li><a href="university.php">Universities</a></li>
            <li><a href="college.php">Colleges</a></li>
            <li><a href="career.php">Majors Descriptions</a></li>
            <li><a href="img2py.php">Picture To PDF</a></li>
            <li><a href="papers.php">G12 Question Papers</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>
</nav>
</section>';
}
?>