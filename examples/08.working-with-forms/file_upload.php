<?php
if(count($_POST) > 0){

    //http://php.net/manual/en/book.imagick.php
    echo "<pre>".print_r($_POST, true)."</pre>\n<br />";
    echo "<pre>".print_r($_FILES, true)."</pre>\n<br />";

    move_uploaded_file($_FILES['myFiles']['tmp_name'], dirname(__FILE__).'/tmp/'.$_FILES['myFiles']['name']);
    ?>
    <img src="tmp/<?=$_FILES['myFiles']['name']?>" width="400" />
    <?php
}
?>
<form method="POST" enctype="multipart/form-data">
    File: <input type="file" name="myFiles" /><br />
    Name: <input type="text" name="name" /><br />
    <input type="submit" value="upload" />
</form>