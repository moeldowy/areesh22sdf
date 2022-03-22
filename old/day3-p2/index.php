<html>
<head>
    <link rel="stylesheet" type="text/CSS" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(!empty($_POST['username'])&&!empty($_POST['password'])){
            $username=$_POST['username'];$password=$_POST['password'];
            if($username=='ahmed'&& $password==123456){?>
                <div class="portfoliocard">
                    <div class="coverphoto"></div>
                    <div class="profile_picture"></div>
                    <div class="left_col">
                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name"><br>
                            <label for="location">Location</label>
                            <select name="location" id="location">
                                <option value="Egypt">Egypt</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Moroco">Moroco</option>
                            </select><br>
                            <label for="work">Work</label>
                            <textarea name="work" id="work"></textarea><br>
                            <label for="website">Website</label>
                            <input type="url" id="website" name="website"><br>
                            <label for="mail">Mail</label>
                            <input type="email" id="mail" name="mail"><br>
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone"><br>
                            <input type="submit" value="Show" name="show">
                            <input type="hidden" name="username" value="ahmed">
                            <input type="hidden" name="password" value="123456">
                        </form>
                    </div>
                    <div class="right_col">
                        <?php
                            if(isset($_POST['show'])){?>
                                <h2 class="name"><?=$_POST['name']?></h2>
                                <h3 class="location"><?=$_POST['location']?></h3>
                                <ul class="contact_information">
                                    <li class="work"><?=$_POST['work']?></li>
                                    <li class="website"><a class="nostyle" href="#"><?=$_POST['website']?></a></li>
                                    <li class="mail"><?=$_POST['mail']?></li>
                                    <li class="phone"><?=$_POST['phone']?></li>
                                </ul>
                           <?php }else{
                                echo "<center style='margin-top:100px; '>Please Fill The left form first</center>";
                            }
                        ?>

                    </div>
                </div>
            <?php }else{
                echo 'Wrong username or password';
                header('Refresh: 5;URL=login.php');
            }
        }else{
            header('Location: login.php');
        }

    }else{
        header('Location: login.php');
    }
?>

</body>
</html>
