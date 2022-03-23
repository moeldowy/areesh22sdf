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
require_once "Student.php";
require_once "connection.php";
$select=$connection->prepare('SELECT * FROM students');
$select->execute();
$students=$select->fetchAll(PDO::FETCH_CLASS,'Student');
/*var_dump($students);*/
?>
<h3>All students Data:</h3>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>


    <?php foreach ($students as $student):?>
        <tr>
            <td><?=$student->id?></td>
            <td><?= $student->full_name?></td>
            <td><?=$student->email?></td>
            <td><?=$student->phone?></td>
            <td>
                <a href="profile.php?id=<?=$student->id?>">
                    <!-- SHOW ICON by SVG-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="navy" d="M13 8h-8v-1h8v1zm0 2h-8v-1h8v1zm-3 2h-5v-1h5v1zm11.172 12l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z"/></svg></a>
                <a href="edit.php?id=<?=$student->id?>">
                    <!-- Edit ICON by SVG-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="darkorange" d="M8.424 12.282l4.402 4.399-5.826 1.319 1.424-5.718zm15.576-6.748l-9.689 9.804-4.536-4.536 9.689-9.802 4.536 4.534zm-6 8.916v6.55h-16v-12h6.743l1.978-2h-10.721v16h20v-10.573l-2 2.023z"/></svg></a>
                <a href="delete.php?id=<?=$student->id?>">
                    <!-- Delete ICON by SVG-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="red" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.597 17.954l-4.591-4.55-4.555 4.596-1.405-1.405 4.547-4.592-4.593-4.552 1.405-1.405 4.588 4.543 4.545-4.589 1.416 1.403-4.546 4.587 4.592 4.548-1.403 1.416z"/></svg></a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

<div style="margin-top: 30px;text-align: center">
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <label for="full_name">Full Name</label>
        <input type="text" id="full_name" name="full_name"><br>
        <label for="your_image">Your Image</label>
        <input type="file" id="your_image" name="your_image"><br>
        <label for="address">Address</label>
        <select id="address" name="address">
            <option value="Luxor">Luxor</option>
            <option value="Cairo">Cairo</option>
            <option value="north_sinai">North Sinai</option>
        </select><br>
        <label for="bio">Bio</label>
        <textarea id="bio" name="bio"></textarea><br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone"><br>
        <label for="skills">Skills</label>
        <input type="checkbox" name="skills[]" id="skills" value="PHP">PHP
        <input type="checkbox" name="skills[]"  value="MySql">MySql
        <input type="checkbox" name="skills[]"  value="HTML">HTML
        <input type="checkbox" name="skills[]"  value="CSS">CSS<br>
        <label for="facebook">Facebook</label>
        <input type="text" id="facebook" name="facebook"><br>
        <label for="twitter">Twitter</label>
        <input type="text" id="twitter" name="twitter"><br>
        <label for="instagram">Instagram</label>
        <input type="text" id="instagram" name="instagram"><br>
        <input type="submit" value="Add">
    </form>
</div>
<?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['full_name'])&&isset($_FILES['your_image'])){
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
            $insert=$connection->prepare('INSERT INTO students (full_name,address,bio,email,phone,skills,facebook,twitter,instagram,image) VALUES (?,?,?,?,?,?,?,?,?,?)');
            $insert->execute([$full_name,$address,$bio,$email,$phone,$skills,$facebook,$twitter,$instagram,$fileName]);           
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