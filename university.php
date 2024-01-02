<?php

include_once "main.php";
$object = Singleton::getInstance();
$conn = $object->startDB("userregistration");

//check if session has expired
if(isset($_SESSION['expire'])){
    if($_SESSION['expire'] < time()){
        session_destroy();
        header('location:login.php');
    }
	else{
		$_SESSION['expire'] = time() + 60*60;
	}
}

$object->compareTime($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>University</title>
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

<section class="universities" id="universities_page">
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

        <div class="row">
            <div class="course-col">
            <h3>Central University of Technology (CUT)</h3>
                <p><a href="prospectus/CUT-Prospectus-2017.pdf" target="_blank">Click here to download 2022/23 Prospectus</a></p>
				<p><b>Website:</b> <a href="https://www.cut.ac.za" target="_blank"> cut.ac.za</a></p>
				<p><b>Online application:</b> <a href="https://enroll.cut.ac.za/pls/prodi41/gen.gw1pkg.gw1view" target="_blank">click here</a></p>
				<p><b>Check application status:</b> <a href="https://enroll.cut.ac.za/pls/prodi41/w99pkg.mi_login" target="_blank">click here</a></p>
				<p><b>Application Fee:</b> Free</p>
				<?php
				$object->getUniversityInfo($conn, "Central University of Technology (CUT)");
				?>
				<p><b>Contact:</b> 051 507 3986</p>
				<p><b>Email:</b> <a href="mailto:ssepeng@cut.ac.za">ssepeng@cut.ac.za</a></p>
				<p><b>Location:</b> Free State, Bloemfontein Central</p>
			</div>
            <div class="course-col">
            <h3>Mongosuthu University of Technology (MUT)</h3>
                <p><a href="prospectus/MUT-Prospectus-2022.pdf" target="_blank">Click here to download 2021/22 Prospectus</a><p>
				<p><b>Website:</b> <a href="uni/mut/index.html" target="_blank">mut.ac.za</a></p>
				<p><b>Online application:</b> <a href="https://ierp.mut.ac.za/pls/prodi03/w99pkg.mi_login" target="_blank">click here</a></p>
				<p><b>Application Fee:</b> R200</p>
				<?php
				$object->getUniversityInfo($conn, "Mongosuthu University of Technology (MUT)");
				?>
				<p><b>Contact:</b> 031 819 9280</p>
				<p><b>Email:</b> <a href="mailto:info@mut.ac.za">info@mut.ac.za</a></p>
				<p><b>Location:</b> KwaZulu Natal, Umlazi</p>
            </div>
            <div class="course-col">
            <h3>Nelson Mandela University (NMU)</h3>
				<p><a href="https://myfuture.mandela.ac.za/Applicant-Score" target="_blank">APS Calculator</a></p>
                <p><a href="prospectus/NMU-Prospectus-2023.pdf" target="_blank">Click here to download 2021/22 Prospectus</a></p>
				<p><b>Website:</b> <a href="https://www.mandela.ac.za" target="_blank"> mandela.ac.za</a></p>
				<p><b>Online application:</b> <a href="https://applyonline.mandela.ac.za/Step1New.aspx" target="_blank">click here</a></p>
				<p><b>Application Fee:</b> Free</p>
				<?php
				$object->getUniversityInfo($conn, "Nelson Mandela University (NMU)");
				?>
				<p><b>Contact:</b> 041 504 1111</p>
				<p><b>Email:</b> <a href="mailto:info@mandela.ac.za">info@mandela.ac.za</a></p>
				<p><b>Location:</b> Eastern Cape, Port Elizabeth</p>
            </div>
        </div>

        <div class="row">
            <div class="course-col">
            <h3>North West University (NWU)</h3>
				<p><a href="prospectus/NWU-Prospectus.pdf" target="_blank">Click here to download 2021/22 Prospectus</a></p>
				<p><b>Website: </b><a href="https://www.nwu.ac.za" target="_blank">nwu.ac.za</a></p>
				<p><b>Online application:</b> <a href="https://vssweb.nwu.ac.za/aaa-webclient/AAAUnsecuredNewApplicationMenuWin.do#/top" target="_blank">click here</a></p>
				<p><b>Application Fee:</b> Free</p>
				<?php
				$object->getUniversityInfo($conn, "North West University (NWU)");
				?>
				<p><b>Contact:</b> 018 299 1111/2222</p>
				<p><b>Email:</b> <a href="mailto:nwu-serviceline@nwu.ac.za">serviceline@nwu.ac.za</a></p>
				<p><b>Location:</b> North West, Potchefstroom</p>
			</div>
            <div class="course-col">
            <h3>Rhodes University (RU)</h3>
				<p><a href="prospectus/Rhodes-Prospectus.pdf" target="_blank">Click here to download 2022/23 Prospectus</a></p>
				<p><b>Website: </b><a href="more-info/rhodes-university.html" target="_blank"> ru.ac.za</a></p>
				<p><b>application: </b><a href="https://ross.ru.ac.za/" target="_blank">click here</a></p>
				<p><b>Application Fee: </b>R100</p>
				<?php
				$object->getUniversityInfo($conn, "Rhodes University (RU)");
				?>
				<p><b>Contact: </b>046 603 8111</p>
				<p><b>Email: </b><a href="mailto:registrar@ru.ac.za">registrar@ru.ac.za</a></p>
				<p><b>Location: </b>Eastern Cape, Grahamstown</p>
            </div>
            <div class="course-col">
            <h3>Sefako Makgathos Health Sciences University (SMU)</h3>
				<p><a href="prospectus/SMU-Prospectus-2022-23.pdf" target="_blank">Click here to download 2022/23 Prospectus</a></p>
				<p><b>Website: </b><a href="uni/smu/index.html" target="_blank"> smu.ac.za</a></p>
				<p><b>Online application: </b><a href="uni/smu/apply/index.php" target="_blank">click here</a></p>
				<p><b>Application Fee: </b>R200</p>
				<?php
				$object->getUniversityInfo($conn, "Sefako Makgathos Health Sciences University (SMU)");
				?>
				<p><b>Contact: </b>012 521 5057/5059</p>
				<p><b>Email: </b><a href="mailto:apply@smu.ac.za">apply@smu.ac.za</a></p>
				<p><b>Location: </b>Gauteng, Pretoria</p>
            </div>
        </div>


        <div class="row">
            <div class="course-col">
            <h3>Sol Plaantje University (SPU)</h3>
				<p><a href="prospectus/SPU-Prospectus-2023.pdf" target="_blank">Click here to download 2022/23 Prospectus</a></p>
				<p><b>Website: </b><a href="https://www.spu.ac.za" target="_blank">spu.ac.za</a></p>
				<p><b>Online application: </b><a href="uni/spu/apply/index.html" target="_blank">click here</a></p>
				<p><b>Application Fee: </b>R100</p>
				<?php
				$object->getUniversityInfo($conn, "Sol Plaantje University (SPU)");
				?>
				<p><b>Contact: </b>053 491 0000</p>
				<p><b>Email: </b><a href="mailto:applications@spu.ac.za">applications@spu.ac.za</a></p>
				<p><b>Location: </b>Western Cape, Stellenbosch</p>
			</div>
            <div class="course-col">
            <h3>Stellenbosch University (SUN)</h3>
				<p><a href="prospectus/SUN-Prospectus-2023.pdf" target="_blank">Click here to download 2022/23 Prospectus</a></p>
				<p><b>Website: </b><a href="https://www.sun.ac.za" target="_blank"> sun.ac.za</a></p>
				<p><b>Online application: </b><a href="https://student.sun.ac.za/signup/" target="_blank">click here</a></p>
				<p><b>Application Fee: </b>R100</p>
				<?php
				$object->getUniversityInfo($conn, "Stellenbosch University (SUN)");
				?>
				<p><b>Contact: </b>021 808 9111</p>
				<p><b>Email: </b><a href="mailto:info@sun.ac.za">info@sun.ac.za</a></p>
				<p><b>Location: </b>Western Cape, Stellenbosch</p>
            </div>
            <div class="course-col">
            <h3>Tshwane University of Technology (TUT)</h3>
				<p><a href="prospectus/TUT-Course-Information-2023.pdf" target="_blank">Click here to download 2021/22 Prospectus</a></p>
				<p>Website: <a href="https://www.tut.ac.za" target="_blank"> tut.ac.za</a></p>
				<p>Online application: <a href="https://ienabler.tut.ac.za/pls/prodi41/gen.gw1pkg.gw1startup?x_processcode=ITS_OAP" target="_blank">click here</a></p>
				<p>Application Fee: R240</p>
				<?php
				$object->getUniversityInfo($conn, "Tshwane University of Technology (TUT)");
				?>
				<p>Contact: 086 110 2421</p>
				<p>Email: <a href="mailto:general@tut.ac.za">general@tut.ac.za</a></p>
				<p>Location: Gauteng, Pretoria</p>
            </div>
        </div>


        <div class="row">
            <div class="course-col">
            <h3>University of Cape Town (UCT)</h3>
				<p><a href="prospectus/UCT-Prospectus-2021.pdf" target="_blank">Click here to download 2021/22 Prospectus</a></p>
				<p>Website: <a href="https://www.uct.ac.za" target="_blank">uct.ac.za</a></p>
				<p>Online application: <a href="https://publicaccess.uct.ac.za/psp/public/EMPLOYEE/SA/c/UCT_PUBLIC_MENU.UCT_SS_APPL.GBL?" target="_blank">click here</a></p>
				<p>Application Fee: R200</p>
				<?php
				$object->getUniversityInfo($conn, "University of Cape Town (UCT)");
				?>
				<p>Contact: 021 650 9111</p>
				<p>Email: <a href="mailto:admission@uct.ac.za">admission@uct.ac.za</a></p>
				<p>Location: Western Cape, Cape Town</p>
			</div>
            <div class="course-col">
            <h3>University of Fort Hare (UFH)</h3>
				<p><a href="prospectus/UFH-Prospectus-2023.pdf" target="_blank">Click here to download 2022 Prospectus</a></p>
				<p>Website: <a href="https://www.ufh.ac.za" target="_blank">ufh.ac.za</a></p>
				<p>Online application: <a href="https://ienabler.ufh.ac.za/pls/prodi41/gen.gw1pkg.gw1view" target="_blank">click here</a></p>
				<p>Application Fee: R120, Late: R250</p>
				<?php
				$object->getUniversityInfo($conn, "University of Fort Hare (UFH)");
				?>
				<p>Contact: 040 602 2011</p>
				<p>Email: <a href="mailto:admissions@ufh.ac.za">admissions@ufh.ac.za</a></p>
				<p>Location: Eastern Cape, Fort Hare</p>
            </div>
            <div class="course-col">
            <h3>University of Free State (UFS)</h3>
				<p><a href="prospectus/UFS-undergraduate-prospectus-2023.pdf" target="_blank">Click here to download 2022/23 Prospectus</a></p>
				<p>Website: <a href="more-info/university-of-free-state.html" target="_blank">ufs.ac.za</a></p>
				<p>Online application: <a href="https://apply.ufs.ac.za/" target="_blank">click here</a></p>
				<p>Application Fee: Free</p>
				<?php
				$object->getUniversityInfo($conn, "University of Free State (UFS)");
				?>
				<p>Contact: 051 401 9111</p>
				<p>Email: <a href="mailto:info@ufs.ac.za">info@ufs.ac.za</a></p>
				<p>Location: Free State, Bloemfontein</p>
            </div>
        </div>


        <div class="row">
            <div class="course-col">
            <h3>University of KwaZulu Natal (UKZN)</h3>
				<p><a href="prospectus/UKZN-Prospectus-2021.pdf" target="_blank">Click here to download 2022/23 Prospectus</a></p>
				<p>Website: <a href="more-info/university-of-kwazulu-natal.html" target="_blank"> ukzn.ac.za</a></p>
				<p>Online application: <a href="forms/UKZN-2022-Applications.pdf" target="_blank">click here</a></p>
				<p>Application Fee: R200</p>
				<?php
				$object->getUniversityInfo($conn, "University of KwaZulu Natal (UKZN)");
				?>
				<p>Contact: 031 260 1111</p>
				<p>Email: <a href="mailto:enquiries@ukzn.ac.za">enquiries@ukzn.ac.za</a></p>
				<p>Location: KwaZulu Natal, Durban</p>
			</div>
            <div class="course-col">
            <h3>University of Limpopo (UL)</h3>
				<p><a href="prospectus/UL-Prospectus-2023.pdf" target="_blank">Click here to download 2022/23 Prospectus</a></p>
				<p>Website: <a href="more-info/university-of-limpopo.html" target="_blank">ul.ac.za</a></p>
				<p>Online application: <a href="https://ultrhe01.ul.ac.za/pls/prodi03/gen.gw1pkg.gw1startup?x_processcode=ITS_OAP">click here</a></p>
				<p>Application Fee: R200</p>
				<?php
				$object->getUniversityInfo($conn, "University of Limpopo (UL)");
				?>
				<p>Contact: 012 521 4058</p>
				<p>Email: <a href="mailto:enrolment@ul.ac.za">enrolment@ul.ac.za</a></p>
				<p>Location: Limpopo, Sovenga</p>
            </div>
            <div class="course-col">
            <h3>University of Mpumalanga (UMP)</h3>
				<p><a href="prospectus/UMP 2023 Full Prospectus ( Recent Update).pdf" target="_blank">Click here to download 2022/23 Prospectus</a></p>
				<p>Website: <a href="https://www.ump.ac.za" target="_blank">ump.ac.za</a></p>
				<p>Online application: <a href="https://ienabler.ump.ac.za/pls/prodi41/gen.gw1pkg.gw1startup?x_processcode=ITS_OAP" target="_blank">click here</a></p>
				<p>Check application status: <a href="https://ienabler.ump.ac.za/pls/prodi41/w99pkg.mi_login" target="_blank">click here</a></p>
				<p>Courses you qualify for: <a href="uni/ump/aps/" target="_blank">click here</a></p>
				<p>Application Fee: R150</p>
				<?php
				$object->getUniversityInfo($conn, "University of Mpumalanga (UMP)");
				?>
				<p>Contact: 013 002 0001</p>
				<p>Email: <a href="mailto:info@ump.ac.za">info@ump.ac.za</a></p>
				<p>Location: Mpumalanga, Nelspruit</p>
            </div>
        </div>


        <div class="row">
            <div class="course-col">
            <h3>University of Pretoria (UP)</h3>
				<p><a href="prospectus/UP-Prospectus.zip" target="_blank">Click here to download 2022/23 Prospectus</a></p>
				<p>Website: <a href="https://www.up.ac.za" target="_blank">up.ac.za</a></p>
				<p>Online application: <a href="https://www1.up.ac.za/uplogin/faces/login.jspx?bmctx=021843C5099ED188C20F16CEC40FB9E3&amp;contextType=external&amp;username=string&amp;password=secure_string&amp;challenge_url=https%3A%2F%2Fwww1.up.ac.za%2Fuplogin%2Ffaces%2Flogin.jspx&amp;request_id=-7539796306436797772&amp;authn_try_count=0&amp;locale=en_US&amp;resource_url=https%253A%252F%252Fwww1.up.ac.za%252Fwcportal%252Ffaces%252Fsso%253Fdonotredirect%253Dtrue" target="_blank">click here</a></p>
				<p>Application Fee: R300</p>
				<?php
				$object->getUniversityInfo($conn, "University of Pretoria (UP)");
				?>
				<p>Contact: 012 420 3111</p>
				<p>Email: <a href="mailto:ssc@up.ac.za">ssc@up.ac.za</a></p>
				<p>Location: Gauteng, Pretoria</p>
			</div>
            <div class="course-col">
            <h3>University of South Africa (UNISA)</h3>
				<p><a href="prospectus/UNISA-Prospectus.pdf" target="_blank">Click here to download 2021/22 Prospectus</a></p>
				<p>Website: <a href="more-info/university-of-south-africa.html" target="_blank">unisa.ac.za</a></p>
				<p>Online application: <a href="https://www.unisa.ac.za/sites/corporate/default/Apply-for-admission/Undergraduate-qualifications/What%27s-new-for-2020" target="_blank">click here</a></p>
				<p>Application Fee: R115</p>
				<?php
				$object->getUniversityInfo($conn, "University of South Africa (UNISA)");
				?>
				<p>Contact: 012 429 3111</p>
				<p>Email: <a href="mailto:info@unisa.ac.za">info@unisa.ac.za</a></p>
				<p>Location: Gauteng, Pretoria</p>
            </div>
            <div class="course-col">
            <h3>University of Venda (UNIVEN)</h3>
				<p><a href="prospectus/UNIVEN_Undergraduate_Brochure_2023.pdf" target="_blank">Click here to download 2022/23 Prospectus</a></p>
				<p>Website: <a href="https://www.univen.ac.za" target="_blank">univen.ac.za</a></p>
				<p>Online application: <a href="https://univenien.univen.ac.za/pls/prodi04/w99pkg.mi_login" target="_blank">click here</a></p>
				<p>Application Fee: R100</p>
				<?php
				$object->getUniversityInfo($conn, "University of Venda (UNIVEN)");
				?>
				<p>Contact: 015 962 8000</p>
				<p>Email: <a href="mailto:info@univen.ac.za">info@univen.ac.za</a></p>
				<p>Location: Limpopo, Venda</p>
            </div>
        </div>


        <div class="row">
            <div class="course-col">
            <h3>University of Western Cape (UWC)</h3>
				<p><a href="prospectus/UWC-Prospectus.pdf" target="_blank">Click here to download 2022/23 Prospectus</a></p>
				<p>Website: <a href="https://www.uwc.ac.za" target="_blank">uwc.ac.za</a></p>
				<p>Online application: <a href="https://student.uwc.ac.za/" target="_blank">click here</a></p>
				<p>Application Fee: Free</p>
				<?php
				$object->getUniversityInfo($conn, "University of Western Cape (UWC)");
				?>
				<p>Contact: 021 959 2911</p>
				<p>Email: <a href="mailto:helpdesk@uwc.ac.za">helpdesk@uwc.ac.za</a></p>
				<p>Location: Western Cape, Cape Town</p>
			</div>
            <div class="course-col">
            <h3>University of Witwatersrand (WITS)</h3>
				<p><a href="prospectus/WITS-Requirements-2022.pdf" target="_blank">Click here to download 2021/22 Prospectus</a></p>
				<p>Website: <a href="more-info/university-of-the-witwatersrand.html" target="_blank">wits.ac.za</a></p>
				<p>Online application: <a href="https://self-service.wits.ac.za/psc/csprodonl/UW_SELF_SERVICE/SA/c/VC_OA_LOGIN_MENU.VC_OA_LOGIN_FL.GBL?&amp;" target="_blank">click here</a></p>
				<p>Application Fee: R100</p>
				<?php
				$object->getUniversityInfo($conn, "University of Witwatersrand (WITS)");
				?>
				<p>Contact: 011 717 1888</p>
				<p>Email: <a href="mailto:itstudenthelp@wits.ac.za">itstudenthelp@wits.ac.za</a></p>
				<p>Location: Gauteng, Johannesburg, Braamfontein</p>
            </div>
            <div class="course-col">
            <h3>University of ZULULAND (UNIZULU)</h3>
				<p><a href="prospectus/UNIZULU-Prospectus-2021.pdf" target="_blank">Click here to download 2022/23 Prospectus</a></p>
				<p>Website: <a href="https://www.unizulu.ac.za" target="_blank">unizulu.ac.za</a></p>
				<p>Online application: <a href="https://jasper.unizulu.ac.za/pls/prodi41/w99pkg.mi_login" target="_blank">click here</a></p>
				<p>Application Fee: R220</p>
				<?php
				$object->getUniversityInfo($conn, "University of ZULULAND (UNIZULU)");
				?>
				<p>Contact: 035 902 6950</p>
				<p>Email: <a href="mailto:admissions@unizulu.ac.za">admissions@unizulu.ac.za</a></p>
				<p>Location: KwaZulu Natal, North of the Tugela River</p>
            </div>
        </div>


        <div class="row">
            <div class="course-col">
            <h3>Vaal University of Technology (VUT)</h3>
				<p><a href="prospectus/VUT-Prospectus-2023.pdf" target="_blank">Click here to download 2022/23 Prospectus</a></p><!--https://www.vut.ac.za/courses-and-programmes/-->
				<p><a href="forms/Re-Admission-Application-pdf.pdf" target="_blank">Download Application form</a></p>
				<p>Website: <a href="more-info/vaal-university-of-technology.html" target="_blank">vut.ac.za</a></p>
				<p>Online application: <a href="https://ienablerprod.vut.ac.za/pls/prodi41/gen.gw1pkg.gw1startup?x_processcode=ITS_OAP" target="_blank">click here</a></p>
				<p>Application Fee: R100</p>
				<?php
				$object->getUniversityInfo($conn, "Vaal University of Technology (VUT)");
				?>
				<p>Contact: 016 950 9924/9925</p>
				<p>Email: <a href="mailto:reception@vut.ac.za">reception@vut.ac.za</a></p>
				<p>Location: Gauteng, Vanderbijlpark</p>
			</div>
            <div class="course-col">
            <h3>Walter Sisulu University (WSU)</h3>
				<p><a href="prospectus/WSU-general-prospectus-updated.pdf" target="_blank">Click here to download 2021/22 Prospectus</a></p>
				<p>Website: <a href="more-info/walter-sisulu-university.html" target="_blank">wsu.ac.za</a></p>
				<p>Online application: <a href="https://ieweb.wsu.ac.za/pls/prodi41/gen.gw1pkg.gw1startup?x_processcode=ITS_OAP" target="_blank">click here</a></p>
				<p>Application Fee: Free</p>
				<?php
				$object->getUniversityInfo($conn, "Walter Sisulu University (WSU)");
				?>
				<p>Contact: 047 502 2843/3/8</p>
				<p>Email: <a href="mailto:info@wsu.ac.za">info@wsu.ac.za</a></p>
				<p>Location: Eastern Cape, Mthatha</p>
            </div>
            <div class="course-col">
            <h3>Central Application Office (CAO)</h3>
				<p><a href="cao/CAOrequirements.pdf" target="_blank">Click here to download 2021/22 Requirements</a></p>
				<p><a href="cao/CAOHandbook2022_web.pdf" target="_blank">Click here to download 2022 Handbook</a></p>
				<p>Website: <a href="cao/" target="_blank">cao.ac.za</a></p>
				<p>Online application: <a href="cao/apply/" target="_blank">click here</a></p>
				<p>Application Fee: <a href="cao/AdminFeeStructure-01APR2021.pdf" target="_blank">click here</a></p>
				<?php
				$object->getUniversityInfo($conn, "Central Application Office (CAO)");
				?>
				<p>Contact: 031 268 4444</p>
				<p>Email: <a href="mailto:enquiries@cao.ac.za">enquiries@cao.ac.za</a></p>
				<p>Location: Durban - Central Services Complex</p>
            </div>
        </div>
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
