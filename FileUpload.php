<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FileUpload</title>
</head>
<body>
<h3>Upload Foto Anda</h3>

    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="upload" id="upload">
        <input type="submit" value="Kirim" name="submit">
    </form>

    <?php
        if (isset($_POST["submit"])) {
            $upload = $_FILES["upload"]["name"];
            $tmp_name = $_FILES["upload"]["tmp_name"];
            move_uploaded_file($tmp_name, "img/".$upload);
        }    
    ?>
    <img widht="100rem" height="100rem"src="img/<?php echo $upload ?>" alt="">

</body>
</html>