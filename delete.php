<?php

include "main.php";

try {
    $object = Singleton::getInstance();
} finally {
    //echo "something is wrong with your database";
}


if(isset($_GET["name"])) {

    try{
        header("Location:".$_SERVER["HTTP_REFERER"]);
        unlink($_GET["name"]);
        throw new Exception("File not deleted");
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
    finally{
        echo "File deleted";
    }

    //if not equal to error
    if($object->deleteFromTableCareer($conn, "{$_GET['name']}") != "error") {
        $object->deleteFromTableCareer($conn, "{$_GET['name']}");
    }
    else {
        header("Location:".$_SERVER["HTTP_REFERER"]);
        unlink($_GET["name"]);
    }
}

//redirecting back
//header("Location:".$_SERVER["HTTP_REFERER"]);
//unlink($_GET["name"]);
?>