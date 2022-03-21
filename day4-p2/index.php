<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <label for="image">Your Image:</label>
        <input type="file" id="image" name="image">
        <input type="submit" value="Upload">
    </form>
        <?php
            if(isset($_FILES['image'])){
                $allowedExt=['png','jpg','gif','jpeg'];
                $fileName=$_FILES['image']['name'];
                $array=explode('.',$fileName);
                $ext=end($array);
                $fileTmp=$_FILES['image']['tmp_name'];
                if(in_array($ext,$allowedExt)){
                    move_uploaded_file($fileTmp,'img/'.$fileName);
                }else{
                    echo "You must upload images only";
                }
            }else{
                echo "Please Upload you file";
            }
        ?>
</body>
</html>