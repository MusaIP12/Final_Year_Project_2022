<?php
 
class Singleton {
                 
    private static $instance = null;
    private $random = null;   
    private $conn = null;
    private final function __construct() {
        //echo __CLASS__ . " initialize only once ";
    }

    //********************image to pic part************************ */
    public function generate(){
        $this->random = rand(1,30);
    }
     
    public static function getInstance() {
        session_start();
        if (!isset(self::$instance)) {
            self::$instance = new Singleton();
        }
         
        return self::$instance;
    }

    public function image(){
        if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $file_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose an Image extension eg JPEG or PNG file.";
        }
        
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"temp/"."name".$this->random.".jpg");
        }else{
           //print_r($errors);
           return $errors[0];
            }
        }
    }

    public function waitfile(){
        do {
            if (file_exists("pdf/name".$this->random.".pdf")) {
                echo "<div id='submit'><a href='pdf/name".$this->random.".pdf'>Download</a></div>";
                break;
            }
        } while(true);
    }

    public function convert(){
        echo shell_exec("python pdf.py ");
    }

    public function deletefiles(){
        echo shell_exec("python deletefiles.py");
    }
    

    /****************data base*********************/

    function createDbt($database){
        $this->conn = mysqli_connect("localhost", "root", "");
        if(!$this->conn){
            die(" Not Connected");
        }
        $sql = "CREATE DATABASE IF NOT EXISTS {$database}";
        if ($this->conn->query($sql) == TRUE) {
            return "Database created successfully";
        } else {
            return "Error creating database: " . $this->conn->error;
        }

    }

    function startDB($database){
        $this->conn = mysqli_connect("localhost", "root", "", "{$database}");
        if(!$this->conn){
            die(" Not Connected");
        }
        return $this->conn;
    }

    /***************Career part**************************/
    function createTableCareer($conn){
        // sql to create table
        $sql = "CREATE TABLE IF NOT EXISTS Career (
            id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name_title VARCHAR(100) NOT NULL,
            subjects VARCHAR(255) NOT NULL,
            major_descri TEXT NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";

        if ($conn->query($sql) === TRUE) {
            return "Table Career created successfully";
        } else {
            return "Error creating table: " . $conn->error;
        }

    }

    function createTableStat($conn){
        // sql to create table
        $sql = "CREATE TABLE IF NOT EXISTS stat (
            id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name_title VARCHAR(100) NOT NULL,
            name_date VARCHAR(100) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";

        if ($conn->query($sql) === TRUE) {
            return "Table Career created successfully";
        } else {
            return "Error creating table: " . $conn->error;
        }

    }

    //create table userregistration
    function createTableUserRegistration($conn){
        // sql to create table
        $sql = "CREATE TABLE IF NOT EXISTS userregistration (
            Id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(255) NOT NULL,
            p_assword VARCHAR(20) NOT NULL,
            user_email VARCHAR(64) NOT NULL,
            type_ VARCHAR(64) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";

        if ($conn->query($sql) == TRUE) {
            return "Table Career created successfully";
        } else {
            return "Error creating table: " . $conn->error;
        }

    }




    function insertIntoTableCareer($conn, $name_title, $major, $subjects=""){

        $sql = "INSERT INTO Career (name_title, major_descri, subjects)
        VALUES ('{$name_title}', '{$major}', '{$subjects}')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    function insertIntoTableStat($conn, $name, $date){

        $sql = "INSERT INTO stat (name_title, name_date)
        VALUES ('{$name}', '{$date}')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //insert new user in userregistration table
    function insertIntoTableUserRegistration($conn, $username, $p_assword, $user_email,$type_){

        $sql = "INSERT INTO userregistration (username, p_assword, user_email,type_)
        VALUES ('{$username}', '{$p_assword}', '{$user_email}','{$type_}')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    //check if user exist in userregistration table
    function checkUserExist($conn, $username){
        $query = "select * from userregistration where username = '{$username}'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        if($row){
            return true;
        }else{
            return false;
        }
    }

    function checkAdmin($conn, $type){
        $query = "select * from userregistration where type_ = '{$type}'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        if($row){
            return true;
        }else{
            return false;
        }

    }

    //sign in user
    function signInUser($conn, $username, $p_assword){
        $query = "select * from userregistration where username = '{$username}' and p_assword = '{$p_assword}'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        if($row){
            return true;
        }else{
            return false;
        }
    }

    //update stat database table
    function updateTableStat($conn, $name, $date){
        $sql = "UPDATE stat SET name_date = '{$date}' WHERE name_title = '{$name}'";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }


    function selectFromTableStat($conn){
        $query = "select * from stat";
        $result = mysqli_query($conn, $query);
        
        while($row = mysqli_fetch_assoc($result)){
            echo "<h1>{$row['name_title']}</h1>";
            echo "<h1>{$row['name_date']}</h1>";
        }
    }
    
    function getCareer($conn){
        $arr = array();
        $query = "select * from Career";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){
            $arr[$row['name_title']] = array($row['major_descri'], $row['subjects']);
            /*echo "<h1>{$row['name_tag']}</h1>";
            echo "<h1>{$row['name_title']}</h1>";
            echo "<h1>{$row['para']}</h1>";*/
        }

        return $arr;
    }

    function getCareerList($conn){
        $query = "select * from Career";
        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_assoc($result)){
            echo '<div style="margin: 2%;">';
            echo "<a style='margin: 2%;'>".$row['name_title']."</a>";
            echo '<a class="btn" onclick="refresh()" href="deletecareer.php?name='.$row['name_title'].'" style="color:red;">Delete</a>';
            echo '</div>';
        }
        
    }

    function deleteFromTableCareer($conn, $name_title){
        $sql = "DELETE FROM Career WHERE name_title='{$name_title}'";
        if("images/career/".$name_title.".jpg"){
            unlink("images/career/".$name_title.".jpg");
        }

        if ($conn->query($sql) === TRUE) {
            //echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    function getUniversityInfo($conn, $university){
        $query = "select * from stat WHERE name_title='{$university}'";
        $result = mysqli_query($conn, $query);

        
        while($row = mysqli_fetch_assoc($result)){
            $pr = $row['name_date'];
            echo "<p><b>Open/Closing Date: </b>.$pr.</p>";

            $date = $row['name_date'];
            array_push($this->dat, $date);
            if(is_numeric(substr($date, 1,1)) == 1){
                //
            }
            else{
                $date = strtotime("2 jan 2020");
            }
            //echo is_numeric(substr($date, 1,1));
            $name = $row['name_title'];
            $date = strtotime($date);
            $current = strtotime(date("d-M-Y"));
            //echo $date.":".$current."<br>";
            $left = $date - $current;
            if($left < 0){
                echo "<p style='color:red'>Applications: CLOSED</p>";
            }
            else{
                echo "<p style='color:green'>Applications: OPEN</p>";
            }
        }
    }

    private $state = array();
    private $dat = array();
    //get time from stat database and compare it with current time
    function compareTime($conn){
        $this->date = array();
        $query = "select * from stat";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){
            $date = $row['name_date'];
            array_push($this->dat, $date);
            if(is_numeric(substr($date, 1,1)) == 1){
                //
            }
            else{
                $date = strtotime("2 jan 2020");
            }
            //echo is_numeric(substr($date, 1,1));
            $name = $row['name_title'];
            $date = strtotime($date);
            $current = strtotime(date("d-M-Y"));
            //echo $date.":".$current."<br>";
            $left = $date - $current;
            if($left < 0){
                array_push($this->state, "<p style='color:red'>Applications: CLOSED</p>");
            }
            else{
                array_push($this->state, "<p style='color:green'>Applications: OPEN</p>");
            }
        }
    }




    //check for a value in stat database
    function checkStat($conn){
        $sql = "SELECT * FROM stat";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    //check if user is admin from database
    function userType($conn, $username){
        $query = "select * from userregistration where username = '{$username}'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        if($row){
            return $row['type_'];
            
        }
    }

    // sql to create table contact
    function createTableContact($conn){
        // sql to create table
        $sql = "CREATE TABLE IF NOT EXISTS contact (
            id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(250) NOT NULL,
            phone VARCHAR(11) NOT NULL,
            email VARCHAR(250) NOT NULL,
            usermessage MEDIUMTEXT NOT NULL
            )";

        if ($conn->query($sql) === TRUE) {
            return "Table contact created successfully";
        } else {
            return "Error creating table: " . $conn->error;
        }


}

    function insertIntoTableContact($conn, $name, $phone, $email, $message){

        $sql = "INSERT INTO contact (username, phone, email, usermessage)
        VALUES ('{$name}', '{$phone}', '{$email}','{$message}')";

        if ($conn->query($sql) === TRUE) {
            //echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        }

    function logout(){
        session_start();
        session_destroy();
        $_SESSION['username'] = null;
        $_SESSION['type'] = null;
        $_SESSION['loggedin'] = null;
        header("Location:index.php");
    }

    //set session
    function setSession($username, $type){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['type'] = $type;
        $_SESSION['loggedin'] = true;
    } 

    //get messeges from contact database
    function getMessages($conn){
        $query = "select * from contact";
        $result = mysqli_query($conn, $query);
        return $result;
        $arr = array();

        while($row = mysqli_fetch_assoc($result)){
            //echo '<div id="messaging" style="margin: 2%;">';
            //echo "<a style='margin: 2%;'> <b>username:</b> ".$row['username']."</a>"."<br>";
            //echo "<a style='margin: 2%;'> <b>phones:</b> ".$row['phone']."</a>"."<br>";
            //echo "<a style='margin: 2%;'> <b>email:</b> ".$row['email']."</a>"."<br>";
            //echo "<a style='margin: 2%;'> <b>message:</b> ".$row['usermessage']."</a>"."<br><br>";
            //echo '<a class="btn" onclick="refresh()" href="read.php?name='.$row['username'].'" style="color:red;">Delete</a>';
            //echo '</div>';

            $arr["<b>username:</b> ".$row['username']] = $row['username']; 
            return array($row['username'], $row['phone'], $row['email'], $row['usermessage']);
        }
    }

    //delete message from contact database
    function deleteMessage($conn, $name){
        $sql = "DELETE FROM contact WHERE username='{$name}'";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    //delete from table contact
    function deleteFromTableContact($conn, $name){
        $sql = "DELETE FROM contact WHERE username='{$name}'";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    
}
?>