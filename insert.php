<?php
If(isset($_FILES['file'])){
    $file=$_FILES['file'];
    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $ext = strtolower($ext);


    if(!in_array($ext,['pdf'])){
        echo "<p style='color: red; font-family: verdana; background-color: lightgrey; font-size: 200%; text-align: center; '>".
         "Please upload file with pdf extension"."</p>";
    }
    elseif($file['size']> 5 * 1024 *1024){
        echo "<p style='color: red; font-family: verdana; background-color: lightgrey; font-size: 200%; text-align: center; '>". 
        "Please upload file that is 5MB less"."</p>";

    }
    elseif($file && (!in_array($ext,['pdf']))){
        echo "<p style='color: red; font-family: verdana; background-color: lightgrey; font-size: 200%; text-align: center; '>".
        "Please upload files with pdf extensions and of size of 5MB or less"."</p>";
    }
    else{
            //uploading in uploads folder
move_uploaded_file($file["tmp_name"],"uploads/".$file["name"]);

//redirecting back
header("Location:".$_SERVER["HTTP_REFERER"]);

    }


}
