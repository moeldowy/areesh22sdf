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
<?php
$id=$_GET['id'];
require_once "connection.php";
require_once "Student.php";
$select= $connection->prepare('SELECT * FROM students WHERE id=?');
$select->execute([$id]);
$select->setFetchMode(PDO::FETCH_CLASS,'Student');
$student=$select->fetch();
?>
<div style="margin-top: 30px;text-align: center">
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <label for="full_name">Full Name</label>
        <input type="text" id="full_name" name="full_name" value="<?=$student->full_name?>">
        <input type="hidden" name="id" value="<?=$student->id?>">
        <img width="80" height="80" src="img/<?= (!empty($student->image))?$student->image:"noimage.jpg";?>" />
        <br>
        <label for="your_image">Your Image</label>
        <input type="file" id="your_image" name="your_image"><br>
        <label for="address">Address</label>
        <select id="address" name="address">
            <option value="Luxor" <?=($student->address=='Luxor')?"selected":"";?>>Luxor</option>
            <option value="Cairo" <?=($student->address=='Cairo')?"selected":"";?>>Cairo</option>
            <option value="north_sinai" <?=($student->address=='north_sinai')?"selected":"";?>>North Sinai</option>
        </select><br>
        <label for="bio">Bio</label>
        <textarea id="bio" name="bio">
            <?=$student->bio?>
        </textarea><br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?=$student->email?>"><br>
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" value="<?=$student->phone?>"><br>
        <label for="skills">Skills</label>
        <?php
            $skills=$student->skills;
            $skills=explode(',',$skills);
        ?>
        <input type="checkbox" name="skills[]" id="skills" value="PHP"
            <?php
            if(in_array('PHP',$skills)){
                echo "checked";
            }
            ?>
        >PHP
        <input type="checkbox" name="skills[]"  value="MySql"
            <?php
            if(in_array('MySql',$skills)){
                echo "checked";
            }
            ?>
        >MySql
        <input type="checkbox" name="skills[]"  value="HTML"
            <?php
            if(in_array('HTML',$skills)){
                echo "checked";
            }
            ?>
        >HTML
        <input type="checkbox" name="skills[]"  value="CSS"
            <?php
            if(in_array('CSS',$skills)){
                echo "checked";
            }
            ?>
        >CSS<br>
        <label for="facebook">Facebook</label>
        <input type="text" id="facebook" name="facebook" value="<?=$student->facebook?>"><br>
        <label for="twitter">Twitter</label>
        <input type="text" id="twitter" name="twitter" value="<?=$student->twitter?>"><br>
        <label for="instagram">Instagram</label>
        <input type="text" id="instagram" name="instagram" value="<?=$student->instagram?>"><br>
        <input type="submit" value="Add">
    </form>
</div>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['full_name'])&&isset($_FILES['your_image'])){
        $id=$_POST['id'];
        $full_name=$_POST['full_name'];
        $address=$_POST['address'];
        $bio=$_POST['bio'];
        $email=$_POST['email'];
        $skills=$_POST['skills'];
        $skills=implode(',',$skills);
        $phone=$_POST['phone'];
        $facebook=$_POST['facebook'];
        $twitter=$_POST['twitter'];
        $instagram=$_POST['instagram'];
        //Manipulate with image upload
        $allowedExt=['png','jpg','gif','jpeg'];
        $fileName=$_FILES['your_image']['name'];
        $array=explode('.',$fileName);
        $ext=end($array);
        $fileTmp=$_FILES['your_image']['tmp_name'];
        if(in_array($ext,$allowedExt)){
            move_uploaded_file($fileTmp,'img/'.$fileName);
        }else{
            echo "You must upload images only";
        }
        $insert=$connection->prepare('UPDATE students SET full_name=?,address=?,bio=?,email=?,phone=?,skills=?,facebook=?,twitter=?,instagram=?,image=? WHERE id=?');
        $insert->execute([$full_name,$address,$bio,$email,$phone,$skills,$facebook,$twitter,$instagram,$fileName,$id]);
        header('Location: index.php');
    }else{
        echo "Full Name and Image are required";
    }

}else{
    echo "Fill Form First";
}

?>
</body>
</html>
CRUD SYSTEM
C = CREATE -> Insert
R = READ -> SELECT
U = Update
D = Delete