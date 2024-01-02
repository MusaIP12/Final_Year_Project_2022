<?php

include_once "main.php";
$object = Singleton::getInstance();
$conn = $object->startDB("userregistration");
$object->compareTime($conn);


?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
</head>
<body>
<?php
include_once "template/nav.php";
if(isset($_SESSION['logged_in']) && $_SESSION['type_'] == "admin"){
	include_once "template/adminnav.php";
}
?>

    <section class="header">
        <div class="text-box">
            <h1>All South African highest institution of learning</h1>
            <p>Download prospectus, do online applications,
                visit their websites and also find all useful information that
                 you need about every public highest institutions of learning in South Africa.</p>
        </div>
        
    </section>

    <section class="universities">
    <div class="university">

        <h1>University</h1>
        <div class="row">
            <div class="course-col">
                <h3>Cape Peninsula University of Technology (CPUT)</h3>
                <p><a href="prospectus/CPUT-Prospectus-2023.pdf" target="_blank">Click here to download 2022/23 Prospectus</a></p>
                <p><b>Website:</b> <a href="https://www.cput.ac.za/" target="_blank">cput.ac.za</a></p>
                <p><b>Online application:</b> <a href="https://enroll.cut.ac.za/pls/prodi41/w99pkg.mi_login" target="_blank">click here</a></p>
				<p><b>Application Fee:</b> R100</p>
				<?php
				$object->getUniversityInfo($conn, "Cape Peninsula University of Technology (CPUT)");
				?>
				<p><b>Contact:</b> 021 959 6767</p>
				<p><b>Email:</b> <a href="mailto:info@cput.ac.za">info@cput.ac.za</a></p>
				<p><b>Location:</b> Western Cape, Cape Town</p>
            </div>
            <div class="course-col">
            <h3>Durban University of Technology (DUT)</h3>
                <p><a href="prospectus/DUT-Prospectus-2022.pdf" target="_blank">Click here to download 2022/23 Prospectus</a></p>
				<p><b>Website:</b> <a href="more-info/durban-university-of-technology.html" target="_blank"> dut.ac.za</a></p>
				<p><b>Online application:</b> <a href="https://mercury.dut.ac.za/pls/prodi41/w03pkg.call_dyn_val" target="_blank">click here</a></p>
				<p><b>Application Fee:</b> R220</p>
				<?php
				$object->getUniversityInfo($conn, "Durban University of Technology (DUT)");
				?>
				<p><b>Contact:</b> 031 373 2000</p>
				<p><b>Email:</b> <a href="mailto:info@dut.ac.za">info@dut.ac.za</a></p>
				<p><b>Location:</b> KwaZulu Natal, Durban &amp; Pietermaritzburg</p>
            </div>
            <div class="course-col">
            <h3>University of Johannesburg (UJ)</h3>
                <p><a href="prospectus/UJ_undergrad_prospectus2023_pages_for_digital_book.pdf" target="_blank">Click here to download 2021/22 Prospectus</a></p>
				<p><b>Website:</b> <a href="https://www.uj.ac.za" target="_blank">uj.ac.za</a></p>
				<p><b>Online application:</b> <a href="https://apply.online.uj.ac.za/Start-Now/Apply-Now" target="_blank">click here</a></p>
				<p><b>Application Fee:</b> R200, <b>Online:</b> Free</p>
				<?php
				$object->getUniversityInfo($conn, "University of Johannesburg (UJ)");
				?>
				<p><b>Contact:</b> 011 559 3129</p>
				<p><b>Email:</b> <a href="mailto:mylife@uj.ac.za">mylife@uj.ac.za</a></p>
				<p><b>Location:</b> Gauteng, Johannesburg</p>
            </div>
        </div>
        <a href="university.php" class="hero-btn">Click here for more</a>
    <h1 class="space"></h1>
</section>

<section class="colleges">
    <div class="college">

        <h1>College</h1>
        <div class="row">
            <div class="course-col">
            <h3>Lephalale TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://leptvetcol.edu.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, Diplomas</p>
				<p><b>Fields of Interest:</b> Engineering Studies, Hospitality, Information Technology, Office Administration, Business Studies, Multi-Disciplinary Drawing Office Practice</p>
				<p><b>Contact:</b> 014 763 2252</p>
				<p><b>Location:</b> Limpopo, </p>
				<p><b>Address:</b> </p>
			</div>
            <div class="course-col">
            <h3>Belgium Campus</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.belgiumcampus.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Diplomas, Degrees</p>
				<p><b>Fiels of Interest:</b> IT</p>
				<p><b>Contact:</b> 010 593 5368</p>
				<p><b>Location:</b> Gauteng, </p>
				<p><b>Address:</b> </p>
			</div>
            <div class="course-col">
            <h3>Ehlanzeni TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.ehlanzenicollege.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, Diplomas</p>
				<p><b>Fields of Interest:</b> Civil Engineering and Construction, Electrica Infrastructure Construction, Engineering and Related Design, Hospitality, Management, Human Resource Management, Management Assistant, Business Management, Marketing Management, Public Management, Educare</p>
				<p><b>Contact:</b> 013 590 0016</p>
				<p><b>Location:</b> Mpumalanga, Nelspruit</p>
				<p><b>Address:</b> </p>
			</div>
        </div>
        <a href="college.php" class="hero-btn">Click here for more</a>
        <h1 class="space"></h1>
    </div>
</section>


<?php
//footer
include_once "template/footer.php";
?>

<script>

var navLinks = document.getElementById("navLinks");

function showMenu(){
    navLinks.style.right = "0";
}

function hideMenu(){
    navLinks.style.right = "-300px";
}
</script>
</body>
</html>
