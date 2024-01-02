<?php

include "main.php";

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



?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>College</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
</head>
<?php
include_once "template/nav.php";
if(isset($_SESSION['logged_in']) && $_SESSION['type_'] == "admin"){
	include_once "template/adminnav.php";
}

?>
<section class="colleges" id="colleges_page" >
    <div class="college">

        <h1>College</h1>
        <div class="row">
            <div class="course-col">
            <h3>Buffalo City Public TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.bccollege.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Certificates, National Certificates, Diplomas</p>
				<p><b>Fields of Interest:</b> Finance, Economics and Accounting, School of Business, IT and Computer Science, Mechatronics, Office Administration, Tourism, Safety &amp; Society, School of Engineering, Electrical Infrastructure Construction, Business Studies, Business Management, Financial Management, Human Resources, Educare, Engineering, Management Assistant, Financial Management, Public Management, National Engineering Certificates</p>
				<p><b>Contact:</b> 043 704 9262 / 043 704 9201</p>
				<p><b>Location:</b> Eastern Cape, </p>
				<p><b>Address: </b>8 Lukin Rd, Selborne, East London, 5213</p>
			</div>
            <div class="course-col">
            <h3>College of the Transfiguration</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.cott.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Bachelors, Diploma</p>
				<p><b>Fields of Interest:</b> Theology</p>
				<p><b>Contact:</b> 046 622 3332</p>
				<p><b>Location:</b> Eastern Cape, </p>
				<p><b>Address: </b>13 Worcester St, Grahamstown, Makhanda, 6139</p>
			</div>
            <div class="course-col">
            <h3>Eastcape Midlands TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.emcol.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Certificates, Diplomas</p>
				<p><b>Fields of Interest:</b> Business, Engineering, Occupational</p>
				<p><b>Contact:</b> 041 995 2000</p>
				<p><b>Location:</b> Eastern Cape, </p>
				<p><b>Address: </b>44 Alsatian Rd, Glen Austin AH, Midrand, 1685</p>
			</div>
        </div>


        <div class="row">
            <div class="course-col">
            <h3>King Hintsa TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://kinghintsacollege.edu.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates</p>
				<p><b>Fields of Interest:</b> Engineering, Business, Information Technology, Travel &amp; Tourism, Marketing, Finance</p>
				<p><b>Contact:</b> 047 401 6400</p>
				<p><b>Location:</b> Eastern Cape, </p>
				<p><b>Address: </b>Idutywa, 5000</p>
			</div>
            <div class="course-col">
            <h3>King Sabata Dalindyebo TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://ksdcollege.edu.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates</p>
				<p><b>Fields of Interest:</b> Business Studies, Engineering Studies, Education, Travel &amp; Tourism, Safety &amp; Society, Hospitality</p>
				<p><b>Contact:</b> 047 505 100</p>
				<p><b>Location:</b> Eastern Cape, </p>
				<p><b>Address: </b>Rd, Cicira Village, R61, Mthatha, 5099</p>
			</div>
            <div class="course-col">
            <h3>Lovedale TVET College</h3>
				<p><a href="docs/LOVEDALE TVET.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.lovedalecollege.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, National Diplomas</p>
				<p><b>Fields of Interest:</b> Business Studies, Art &amp; Design, Farming Management, Human Resource Management, Engineering Studies, Management Studies</p>
				<p><b>Contact:</b> 043 604 0700</p>
				<p><b>Location:</b> Eastern Cape, </p>
				<p><b>Address:</b>1 Anatolia Row, Qonce, 5601</p>
			</div>
        </div>

        <div class="row">
            <div class="course-col">
            <h3>Port Elizabeth TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.pecollege.edu.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, National Diplomas</p>
				<p><b>Fields of Interest:</b> Business Studies, Engineering Studies, Utility Studies, Occupational Studies</p>
				<p><b>Contact:</b> 041 509 6000</p>
				<p><b>Location:</b> Eastern Cape, </p>
				<p><b>Address: </b>139 Russell Rd, Port Elizabeth Central, Gqeberha, 6001</p>
			</div>
            <div class="course-col">
            <h3>Stenden South Africa </h3>
				<p><a href="docs/STENDED SA.pdf">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="https://www.stenden.ac.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Degrees</p>
				<p><b>Fields of Interest:</b> Hotel Management, Disaster Management</p>
				<p><b>Contact:</b> 046 604 2200</p>
				<p><b>Location:</b> Eastern Cape, </p>
				<p><b>Address:</b>1 Grand St, Port Alfredo, 6170</p>
			</div>
            <div class="course-col">
            <h3>Academy of Training and Development</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="www.academyec.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Accredited Qualifications, National Certificates and Diplomas, Short Courses</p>
				<p><b>Fields of Interest:</b> Engineering Studies, Business Studies, Computer Studies, Matric Rewrite, Law Enforcement Programmes</p>
				<p><b>Contact:</b> 043 742 4439</p>
				<p><b>Location:</b> Eastern Cape, </p>
				<p><b>Address: </b>2nd Floor 136 2nd Floor, Nedbank Building, 71 Oxford St, East London, 5200</p>
			</div>
        </div>


        <div class="row">
            <div class="course-col">
            <h3>NCM Computer and Business Academy</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="www.ncmacademy.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, Certificates, Diplomas, Short Course Certificates</p>
				<p><b>Fields of Interest:</b> Business Management, Engineering Studies, Marketing Management, Public Management, Tourism, National Certificate Vocational, ICB Courses, Information Technology, Educare, Public Relations, Financial Management, Human Resources, Matric Rewrite, Corporate &amp; Computer Short Courses</p>
				<p><b>Contact:</b> 043 722 1241</p>
				<p><b>Location:</b> Eastern Cape, </p>
				<p><b>Address: </b>Alexandra Rd, Qonce, 5601</p>
			</div>
            <div class="course-col">
            <h3>Damelin - East London</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="www.damelin.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Short Skills Programmes, Certificates, Diplomas, Degrees</p>
				<p><b>Fields of Interest:</b> Commerce, Leisure and Information Technology, Creative Arts, Management Science and Communication</p>
				<p><b>Contact:</b> </p>
				<p><b>Location:</b> Eastern Cape, </p>
				<p><b>Address: </b>57-61 Union St, East London Cbd, East London, 5201</p>
			</div>
            <div class="course-col">
            <h3>Flavius Mareka TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.flaviusmareka.net" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates</p>
				<p><b>Fields of Interest:</b> Basic Computer Training, Hair Dressing, Engineering, Office Administration</p>
				<p><b>Contact:</b> 016 976 0815 / 016 976 0829</p>
				<p><b>Location:</b> Free State, </p>
				<p><b>Address: </b>Hertzog St, Sasolburg, 1947</p>
			</div>
        </div>


        <div class="row">
            <div class="course-col">
            <h3>Maluti TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://malutitvet.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates</p>
				<p><b>Fields of Interest:</b> Marketing Studies</p>
				<p><b>Contact:</b> 058 713 0612 / 087 941 3587</p>
				<p><b>Location:</b> Free State, </p>
				<p><b>Address: </b>MAMPOI ROAD PHUTHADITJHABA 9866 Private Bag X870 WITSIESHOEK 9870</p>
			</div>
            <div class="course-col">
            <h3>Motheo TVET College</h3>
				<p><a href="docs/MOTHEO TTT.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.motheotvet.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates</p>
				<p><b>Fields of Interest:</b> Business Studies, Engineering, Hair Care and Beauty Tech, Artisan and Skills</p>
				<p><b>Contact:</b> 051 406 9300</p>
				<p><b>Location:</b> Free State, </p>
				<p><b>Address:</b>P.O Box 4717, Randburg, 2125</p>
			</div>
            <div class="course-col">
            <h3>Qualitas Career Academy</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.qualitasworld.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Certificates, National Certificates, Diplomas</p>
				<p><b>Fields of Interest:</b> Architecture &amp; Construction, Hair &amp; Beauty, Electrical Engineering, Educare, Finance &amp; Accounting, Management, Administration &amp; Secretarial</p>
				<p><b>Contact:</b> 051 447 5412</p>
				<p><b>Location:</b> Free State, </p>
				<p><b>Address: </b>74 W Burger St, Bloemfontein Central, Bloemfontein, 9301</p>
			</div>
        </div>


        <div class="row">
            <div class="course-col">
            <h3>Dam Technical College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="www.damtraining.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, Short Courses, Diplomas, Certificates</p>
				<p><b>Fields of Interest:</b> Computer Studies, Technical Studies, Matric Rewrite, School of Policing</p>
				<p><b>Contact:</b> 011 339 4016 / 011 339 4679</p>
				<p><b>Location:</b> Free State, </p>
				<p><b>Address: </b>DAM Technical College Building, 102 De Korte St, Braamfontein, Johannesburg, 2001</p>
			</div>
            <div class="course-col">
            <h3>Belgium Campus</h3>
				<p><a href="docs/BELGIUM CAMPUS.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.belgiumcampus.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Diplomas, Degrees</p>
				<p><b>Fiels of Interest:</b> IT</p>
				<p><b>Contact:</b> 010 593 5368</p>
				<p><b>Location:</b> Gauteng, </p>
				<p><b>Address:</b>45A Long St K Park Cbd, Kempton park, 1619, Unit A Sibasa, Limpopo, 0970</p>
			</div>
            <div class="course-col">
            <h3>BMT College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.bmtcollege.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Certificates, Diplomas, Short Courses</p>
				<p><b>Fields of Interest:</b> Business Studies, Legal Studies, Financial Management, Health and Safety, Project Management, Human Resource Management, Logistics and Supply Chain Management</p>
				<p><b>Contact:</b> 010 010 0936</p>
				<p><b>Location:</b> Gauteng, </p>
				<p><b>Address:</b>147 Second Rd, Chart well, 2191</p>
			</div>
        </div>


        <div class="row">
            <div class="course-col">
            <h3>Centurion Academy</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="https://www.ca.ac.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Certificates, Higher Certificates, National Certificates, Diplomas, Degrees, CARA(Rugby)</p>
				<p><b>Fields of Interest:</b> Marketing and Public Relations, Electronic Engineering, Hospitality Management, Graphic Web &amp; Multimedia, Nature Management, Computer Programming, Computer Technology, Somatology, Sport Management, Tourism Management, Engineering Studies, Hairdressing, Early Child Development</p>
				<p><b>Contact:</b> 012 648 9700</p>
				<p><b>Location:</b> Gauteng, </p>
				<p><b>Address: </b>48 Charles De Gaulle Cres, Highveld, Centurion, 0046</p>
			</div>
            <div class="course-col">
            <h3>College of Production Technology (CPT)</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="https://www.cpt.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, Diplomas, Skills Programmes</p>
				<p><b>Fields of Interest:</b> Manufacturing &amp; Production, Supply Chain &amp; Logistics, Business and Management, Technical Studies, Technical/Engineering Courses</p>
				<p><b>Contact:</b> 0860 278 278</p>
				<p><b>Location:</b> Gauteng, </p>
				<p><b>Address: </b>14 Lakeview Crescent Kleinfontein Office Park, Pioneer Dr, Benoni Central, Benoni, 1501</p>
			</div>
            <div class="course-col">
            <h3>CTI Education Group</h3>
				<p><a href="docs/booklets/Not-Available" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="https://www.cti.ac.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Short Learning Programmes, Higher Certificates, Degrees</p>
				<p><b>Fields of Interest:</b> Commerce, Information Technology</p>
				<p><b>Contact:</b> 011 789 3178</p>
				<p><b>Location:</b> Gauteng, </p>
				<p><b>Address: </b>1D Umhlanga Ridge Blvd, Umhlanga, 4319</p>
			</div>
        </div>


        <div class="row">
            <div class="course-col">
            <h3>Midrand Graduate Institute (MGI)</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="https://www.pihe.ac.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b>  Foundation Programmes, Undergraduate Degrees, Postgraduate Degrees</p>
				<p><b>Fields of Interest:</b> English Language, Business Administation, Commerce and Accounting, Human Resource Management, Tourism, Arts and Graphic Design, Arts, Arts and Journalism, Sciences</p>
				<p><b>Contact:</b> 012 943 1001</p>
				<p><b>Location:</b> Gauteng, </p>
				<p><b>Address:</b> </p>
			</div>
            <div class="course-col">
            <h3>Monash South Africa</h3>
				<p><a href="docs/MONASH UNIVERSITY .pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="https://www.msa.ac.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Foundation Programme, Diplomas, Bachelors Degrees, Advanced Bachelors Degrees, Honours Degrees, Mas</p>
				<p><b>Fields of Interest:</b> Business, Engineering and Technology, Social and Health Sciences</p>
				<p><b>Contact:</b> 011 950 4009</p>
				<p><b>Location:</b> Gauteng, </p>
				<p><b>Address:</b>Private Bag X60, Roodepoort, 1725, South Africa</p>
			</div>
            <div class="course-col">
            <h3>Open Learning Group</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="https://www.olg.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Certificates, Higher Certificates, National Certificates, Diplomas, Degrees</p>
				<p><b>Fields of Interest:</b> Logistics and Supply Chain, Finance &amp; Commerce, Management &amp; Leadership, Teaching and Education</p>
				<p><b>Contact:</b> 011 670 4700</p>
				<p><b>Location:</b> Gauteng, </p>
				<p><b>Address: </b>Quadrum Office Park, 50 Constantia Blvd, Constantia Kloof, Johannesburg</p>
			</div>
        </div>


        <div class="row">
            <div class="course-col">
            <h3>Rosebank College</h3>
				<p><a href="docs/ROSEBANK COLLEGE .pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="https://www.rosebankcollege.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Degrees, Diplomas, Higher Certificates</p>
				<p><b>Fields of Interest:</b> Commerce, Information Technology, Humanities, Education</p>
				<p><b>Contact:</b> 011 403 2437</p>
				<p><b>Location:</b> Gauteng, </p>
				<p><b>Address:</b>Corporate Centre, 29 Bell Street, Nelspruit, 1200 and Braamfontein Centre, 23 Jorissen St, Johannesburg, 2017</p>
			</div>
            <div class="course-col">
            <h3>SANTS Private Higher Education Institution</h3>
				<p><a href="docs/SANTS COLLAGE.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.sants.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Diplomas, FET Certificates</p>
				<p><b>Fields of Interest:</b> Grade R Teaching, ECD</p>
				<p><b>Contact:</b> 087 353 2504</p>
				<p><b>Location:</b> Gauteng, </p>
				<p><b>Address:</b>13 Umgazi Rd, Menlo Park, Pretoria, 0081</p>
			</div>
            <div class="course-col">
            <h3>St Augustine Private Tertiary Institution of South Africa</h3>
				<p><a href="docs/ST AUGUSTIN COLLAGE .pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.staugustine.ac.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Degrees, Short Courses</p>
				<p><b>Fields of Interest:</b> Theology, Philosophy &amp; Applied Ethics, Education, Peace Studies, Undergraduate Studies</p>
				<p><b>Contact:</b> 011 380 9000</p>
				<p><b>Location:</b> Gauteng, </p>
				<p><b>Address: </b>53 Ley Rd, Victory Park, Johannesburg, 219</p>
			</div>
        </div>


        <div class="row">
            <div class="course-col">
            <h3>The Da Vinci Institute</h3>
				<p><a href="docs/DA VINCI TVET.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.davinci.ac.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Higher Certificates, Diplomas, BCom, Masters, PhD Degrees</p>
				<p><b>Fields of Interest:</b> Business Management, Management of Technology and Innovation</p>
				<p><b>Contact:</b> 011 608 1331</p>
				<p><b>Location:</b> Gauteng, </p>
				<p><b>Address:</b>16 Park Ave, Modderfontein, Lethabong, 1609</p>
			</div>
            <div class="course-col">
            <h3>Tshwane South College</h3>
				<p><a href="docs/TSHWANE TVET.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.tsc.edu.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates</p>
				<p><b>Fields of Interest:</b> Office Administration, Finance Economics and Accounting, Tourism, Hospitality, Engineering, Information Technology, Financial Management</p>
				<p><b>Contact:</b> 012 401 5000</p>
				<p><b>Location:</b> Gauteng, </p>
				<p><b>Address:</b>PO Box 151, Pretoria, 0001 </p>
			</div>
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
        </div>


        <div class="row">
            <div class="course-col">
            <h3>Letaba TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.letcol.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, Diplomas</p>
				<p><b>Fields of Interest:</b> Office Administration, Finance, Economics and Accounting, Office Administration, Generic Management, Business Management, Human Resource Management, Management Assistant, Tourism, Electrical Engineering</p>
				<p><b>Contact:</b> 015 307 5440</p>
				<p><b>Location:</b> Limpopo, </p>
				<p><b>Address: </b>1 Claude Wheatley St, Arbor Park, Tzaneen, 0850</p>
			</div>
            <div class="course-col">
            <h3>Mopani South East TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://mopanicollege.edu.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, Diplomas</p>
				<p><b>Fields of Interest:</b> Finance, Economics and Accounting, Hospitality, Management, Marketing, Office Administration, Tourism, Civil Engineering and Construction, Electrical Infrastructure Construction, Engineering and Related Design, Information Technology, Business Management, Financial Management, Management Assistant, Human Resource Management, Professional Cookery and Assistant Chef</p>
				<p><b>Contact:</b> 015 781 5721</p>
				<p><b>Location:</b> Limpopo, </p>
				<p><b>Address: </b>Haarlem Streets, Private Bag X01024, Phalaborwa, 1390</p>
			</div>
            <div class="course-col">
            <h3>Sekhukhune TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.sekfetcol.org" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, Diplomas</p>
				<p><b>Fields of Interest:</b> Business Studies, Engineering Studies, Computers</p>
				<p><b>Contact:</b> 013 269 0278</p>
				<p><b>Location:</b> Limpopo, </p>
				<p><b>Address:</b>Stand No. 676, Motetema
</p>
			</div>
        </div>


        <div class="row">
            <div class="course-col">
            <h3>Southern African Wildlife College</h3>
				<p><a href="docs/ORBIT COLLAGE .pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.wildlifecollege.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Higher Certificates, National Certificates, Skills Programmes, Short Courses</p>
				<p><b>Fields of Interest:</b> Wildlife Area Management, Community, Youth Development and Access, Protected Are Integrity, Sustainable Use and Field Guiding</p>
				<p><b>Contact:</b> 015 793 7300</p>
				<p><b>Location:</b> Limpopo, </p>
				<p><b>Address:</b>Springvalley Farm 200KU, Kempis Nature Reserve, Orpen Road, Hoedspruit, 1380</p>
			</div>
            <div class="course-col">
            <h3>Vhembe TVET College</h3>
				<p><a href="docs/VHEMBE TVET.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="https://www.vhembecollege.edu.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, Diplomas</p>
				<p><b>Fields of Interest:</b> Business Studies, Engineering, Hospitality, Tourism, Clothing Production</p>
				<p><b>Contact:</b> 015 963 3156</p>
				<p><b>Location:</b> Limpopo, </p>
				<p><b>Address:</b>Unit A Sibasa, Limpopo, 0970</p>
			</div>
            <div class="course-col">
            <h3>Waterberg TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="https://www.waterbergcollege.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificated, Diplomas, Advanced Diplomas</p>
				<p><b>Fields of Interest:</b> Business Studies, Enginering Studies, IT and Computer Sciences</p>
				<p><b>Contact:</b> 015 491 9000/9007</p>
				<p><b>Location:</b> Limpopo, </p>
				<p><b>Address: </b>Private Bag x2449
Mokopane, 0600</p>
			</div>
        </div>



		<div class="row">
            <div class="course-col">
            <h3>Ehlanzeni TVET College</h3>
				<p><a href="docs/EHLANZENI TVET.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.ehlanzenicollege.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, Diplomas</p>
				<p><b>Fields of Interest:</b> Civil Engineering and Construction, Electrica Infrastructure Construction, Engineering and Related Design, Hospitality, Management, Human Resource Management, Management Assistant, Business Management, Marketing Management, Public Management, Educare</p>
				<p><b>Contact:</b> 013 590 0016</p>
				<p><b>Location:</b> Mpumalanga, Nelspruit</p>
				<p><b>Address:</b> </p>
			</div>
            <div class="course-col">
            <h3>Gert Sibande TVET College</h3>
				<p><a href="docs/GERT SIBANDE.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.gscollege.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, Diplomas</p>
				<p><b>Fields of Interest:</b> Office Administration, Electrical Infrastructure Construction, Civil Engineering Construction, Engineering 7 Related Design, Marketing, Finance, Economics &amp; Accounting, Generic Management, Technology &amp; Computer Science, Hospitality, Business Studies</p>
				<p><b>Contact:</b> 017 712 9040</p>
				<p><b>Location:</b> Mpumalanga, </p>
				<p><b>Address:</b> </p>
			</div>
            <div class="course-col">
            <h3>Nkangala TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.ntc.edu.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, Diplomas</p>
				<p><b>Fields of Interest:</b> Engineering Studies, Tourism, Office Administration, Information Technology and Computer Science, Hospitality, Financem Economics and Accounting, Business Management</p>
				<p><b>Contact:</b> 013 658 4700</p>
				<p><b>Location:</b> Mpumalanga, Nelspruit</p>
				<p><b>Address: </b>PO Box 2282, Witbank, 1035</p>
			</div>
        </div>



		<div class="row">
            <div class="course-col">
            <h3>Orbit College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.orbitcollege.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates</p>
				<p><b>Fields of Interest:</b> Engineering Studies, Business Studies, Hospitality and Tourism</p>
				<p><b>Contact:</b> 014 597 5502</p>
				<p><b>Location:</b> North West, </p>
				<p><b>Address:</b>Fatima Bharat St, Rusternburg, 0300, PO Box 151, Pretoria, 0001</p>
			</div>
            <div class="course-col">
            <h3>Potchefstroom Academy </h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.potchacademy.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Advanced Diplomas, Higher Diploma, Diplomas, Higher Certificate, Advanced Certificate, Short Course</p>
				<p><b>Fields of Interest:</b> Beauty Therapy, Therapeutic Reflexology, Therapeutic Aromatherapy, Therapeutic Massage, Interior Design &amp; Decorating, Photography, Nail Technology, Massage, Makeup Artistry, Hairdressing, Public Speaking, Trade Test</p>
				<p><b>Contact:</b> 018 294 9037/ 018 294 5581</p>
				<p><b>Location:</b> North West, </p>
				<p><b>Address: </b>59 Dr James Moroka Ave, Potchefstroom, 2535</p>
			</div>
            <div class="course-col">
            <h3>Taletso TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://taletso.edu.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, Diplomas</p>
				<p><b>Fields of Interest:</b> Agriculture, Economic Management, Engineering Studies, Hospitality and Tourism, Information Technology, Office Administration, Social Sciences</p>
				<p><b>Contact:</b> 018 384 2346 / 50</p>
				<p><b>Location:</b> North West, </p>
				<p><b>Address: </b>Kgora Building, Dr Albet Luthuli Drive, Mmabatho, 2735</p>
			</div>
        </div>



		<div class="row">
            <div class="course-col">
            <h3>Vuselela TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.vuselelacollege.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, Diplomas</p>
				<p><b>Fields of Interest:</b> Finance, Economics &amp; Accounting, Electrical Infrastructure Construction, IT &amp; Computer Science, Engineering &amp; Related Design, Civil Engineering &amp; Building Construction, Hospitality, Office Administration, Primary Agriculture, Business Management, Human Resource Management, Marketing Management, Tourism, Public Management</p>
				<p><b>Contact:</b> 018 406 7800</p>
				<p><b>Location:</b> North West, </p>
				<p><b>Address: </b>John Orr & Oliver Tambo Street, Neserhof, Klerksdorp, 2571</p>
			</div>
            <div class="course-col">
            <h3>Orbit College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.orbitcollege.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates</p>
				<p><b>Fields of Interest:</b> Engineering Studies, Business Studies, Hospitality and Tourism</p>
				<p><b>Contact:</b> 014 597 5502</p>
				<p><b>Location:</b> North West, </p>
				<p><b>Address:</b> </p>
			</div>
            <div class="course-col">
            <h3>Vuselela TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.vuselelacollege.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, Diplomas</p>
				<p><b>Fields of Interest:</b> Finance, Economics &amp; Accounting, Electrical Infrastructure Construction, IT &amp; Computer Science, Engineering &amp; Related Design, Civil Engineering &amp; Building Construction, Hospitality, Office Administration, Primary Agriculture, Business Management, Human Resource Management, Marketing Management, Tourism, Public Management</p>
				<p><b>Contact:</b> 018 406 7800</p>
				<p><b>Location:</b> North West, </p>
				<p><b>Address:</b> </p>
			</div>
        </div>



		<div class="row">
            <div class="course-col">
            <h3>ACT Cape Town</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.actcapetown.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Higher Certificate, Advanced Certificate, Short Course Certificates</p>
				<p><b>Fields of Interest:</b> Acting for Film, Auditioning for Camera, Standard American Accent, Standard English Accent, Professional Programme, Acting for Film Programme, Voice &amp; Speech Training</p>
				<p><b>Contact:</b> 021 419 7007</p>
				<p><b>Location:</b> Western Cape, </p>
				<p><b>Address:</b> First Floor, Sunrise House, 55 Morningside St, Pinelands, Cape Town, 7405</p>
			</div>
            <div class="course-col">
            <h3>Boland College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.bolandcollege.com" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> National Certificates, National Diplomas</p>
				<p><b>Fields of Interest:</b> Civil Engineering &amp; Building Contruction, Economic Management Sciences, Engineering Studies, Engineering &amp; Related Design, Hospitality &amp; Tourism, Information Technology &amp; Agriculture, Office Management Sciences, Safety and Security, Social Sciences</p>
				<p><b>Contact:</b> 021 886 7111 / 021 886 7112</p>
				<p><b>Location:</b> Western Cape, </p>
				<p><b>Address: </b>Bird Street Stellenbosch 7599</p>0
			</div>
            <div class="course-col">
            <h3>College of Cape Town (TVET)</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.cct.edu.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Certificates, Diplomas, Degrees</p>
				<p><b>Fields of Interest:</b> Art &amp; Design, Beauty Therapy, Building &amp; Civil Engineering, Business Studies, Education and Training, Electrical Engineering, Haircare, Hospitality, Information Technology &amp; Communication Technology, Mechanical Engineering, Travel &amp; Tourism</p>
				<p><b>Contact:</b> 021 404 6700 / 086 010 3682</p>
				<p><b>Location:</b> Western Cape, </p>
				<p><b>Address: </b>18 Jan Smuts Dr, Pinelands, Cape Town, 7405</p>
			</div>
        </div>


		<div class="row">
            <div class="course-col">
            <h3>College SA</h3>
				<p><a href="docs/COLLAGE SA.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="https://www.collegesa.edu.za/" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Short Course Certificates, Proficiency Certificates, Skills Certificates, National Certificates, FET</p>
				<p><b>Fields of Interest:</b> Accounting and Bookkeeping, Business Management &amp; Office Administration, Beauty Therapy, Computer, Child Day Care, Events Management, Graphic Design, Web Design, Photography, Tourism, Human Resource Management, Marketing, Occupational Health and Safety, Project Management, Secretarial &amp; Personal Assistant, Supply Chain, Engineering, Workplace Skills</p>
				<p><b>Contact:</b> 0861 663 663</p>
				<p><b>Location:</b> Western Cape, </p>
				<p><b>Address: </b>698A Steve Biko St, Pretoria, 0001 and Tygervalley, 1st Floor, Cape Town, 7538</p>
			</div>
            <div class="course-col">
            <h3>Concept Interactive</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://conceptinteractive.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Certificates, Diplomas, Short Courses</p>
				<p><b>Fields of Interest:</b> Interactive Graphics, Business Management, Entrepreneurship and New Technologies , Digital Marketing, Social Media and Design, Professional, Executive and Personal Assistants</p>
				<p><b>Contact:</b> 021 202 7890</p>
				<p><b>Location:</b> Western Cape, </p>
				<p><b>Address: </b>Tannery Park, 21-24 Belmont Road, Rosebank, Cape Town, 7700</p>
			</div>
            <div class="course-col">
            <h3>False Bay TVET College</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.falsebaycollege.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Certificates, National Certificates, National Diplomas</p>
				<p><b>Fields of Interest:</b> Business Studies, Engineering Studies, Hospitality &amp; Tourism, Information Technology, Education Studies, Yacht and Boat Building, 2D Animation, Safety &amp; Security</p>
				<p><b>Contact:</b> 021 788 8373</p>
				<p><b>Location:</b> Western Cape, </p>
				<p><b>Address: </b>Westlake Dr, Westlake, Cape Town, 7950</p>
			</div>
        </div>


		<div class="row">
            <div class="course-col">
            <h3>FEDISA</h3>
				<p><a href="docs/booklets/Not-Available.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.fedisa.co.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Diplomas, BA Degrees, Honours' Degrees</p>
				<p><b>Fields of Interest:</b> Fashion, Merchandising, Marketing and Media, Fashion</p>
				<p><b>Contact:</b> 021 424 0975</p>
				<p><b>Location:</b> Western Cape, </p>
				<p><b>Address:</b> </p>
			</div>
            <div class="course-col">
            <h3>George Whitefield College </h3>
				<p><a href="docs/GEORGE COLLAGE.pdf" target="_blank">Click here to download booklet</a></p>
				<p><b>Website:</b> <a href="http://www.gwc.ac.za" target="_blank">visit here</a></p>
				<p><b>DHET Registered:</b> Yes</p>
				<p><b>Level of Reward:</b> Higher Certificates, Bachelors</p>
				<p><b>Fields of Interest:</b> Theology</p>
				<p><b>Contact:</b>  021 788 1652</p>
				<p><b>Location:</b> Western Cape, </p>
				<p><b>Address:</b>34 Beach Rd, Muizenberg, Cape Town, 7950</p>
			</div>

        </div>
    </div>
</section>




<section class="footers">
    <div id="pic"></div>
    <footer>
        <div class="list">
            <p id="founder">Contact details of the creators</p>
            <ul>
                <li id="names"><b>NA KHUMALO</b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul>
            <ul>
                <li id="names"><b>NS MZOBE</b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul><ul>
                <li id="names"><b>T SIBEKO</b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul><ul>
                <li id="names"><b>BN HLOPHE</b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul><ul>
                <li id="names"><b>MI PHIRI  <b>    </b></b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul>
            </ul><ul>
                <li id="names"><b>T Mashaba</b></li>
                <li>
                    <div class="social">
                        <a href=""><i class="fa fa-github"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                </li>
            </ul><ul>
        </div>
    </footer>
    
</section>
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
