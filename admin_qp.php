<link rel="stylesheet" href="style.css">
<style>
    h4{
        text-align: center;
    }
    form{
        text-align: center;
    }
    p{
        text-align: center;
    }

</style>
<?php
include_once "template/nav.php";
include_once "template/adminnav.php";

//check if folder exists
if(!file_exists("uploads")){
    mkdir("uploads");
}

?>


<section class="addcareer">
    <div class="add">
        <h3>Upload Previous question papers</h3>

<br>
<form method="POST" action="insert.php" enctype="multipart/form-data">
    <input type="file" name="file" accept=".pdf">
    <br><br><br><br>
    <input type="submit" name="upload">
    <br><br><br><br>

</form>


<?php 
$files=scandir("uploads");
for($a=2;$a<count($files);$a++){
    ?>
    <p>
        <?php echo $files[$a]; ?> 
        <a href="uploads/<?php echo $files[$a];?>" download="<?php echo $files [$a];?>" >
        Download
        </a>  
        <a href="delete.php?name=uploads/<?php echo $files[$a];?>" style="color:red;">
        Delete
    </a>
    </p>
    <?php
}
?>

</div>

</section>

<?php
include_once "template/footer.php";
?>