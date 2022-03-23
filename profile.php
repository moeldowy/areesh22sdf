<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- this is the markup. you can change the details (your own name, your own avatar etc.) but don’t change the basic structure! -->
<?php 
require_once "connection.php";
require_once "Student.php";
$id=$_GET['id'];
// To protect your Prepare Statement from SQL injection We use placholder(?) or Bind PARAMETER (:param)
$select =$connection->prepare('SELECT * FROM STUDENTS WHERE id=?');
$select->execute([$id]);
$select->setFetchMode(PDO::FETCH_CLASS,'Student');
$student=$select->fetch();

?>
<aside class="profile-card">

    <header>

        <!-- here’s the avatar -->
        <a href="http://victory-design.ru/">
            <img src="img/<?= (!empty($student->image))?$student->image:"noimage.jpg";?>" />
        </a>

        <!-- the full name -->
        <h3><?php echo $student->full_name;?></h3>

        <!-- address -->
        <h5><?=$student->address;?></h5>

    </header>

    <!-- bit of a bio; who are you? -->
    <div class="profile-bio">

        <p><?=$student->bio;?></p>
        <div style="width: 100%;height: 50px;margin-top: 10px">
            <div style="float: left;width: 50%">
                Email:<?=$student->email;?>
            </div>
            <div style="float: right; width: 50%">
                Phone:<?=$student->phone;?>
            </div>
        </div>
        <div>
            skills:<?=$student->skills;?>
        </div>
    </div>

    <!-- some social links to show off -->
    <ul class="profile-social-links">

        <!-- twitter - el clásico  -->
        <li>
            <a href="<?=$student->facebook;?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg>
            </a>
        </li>

        <!-- twitter – use this one to link to your marketplace profile -->
        <li>
            <a href="<?=$student->twitter;?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
            </a>
        </li>

        <!-- Instagram - your codepen profile-->
        <li>
            <a href="<?=$student->instagram;?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21.231 0h-18.462c-1.529 0-2.769 1.24-2.769 2.769v18.46c0 1.531 1.24 2.771 2.769 2.771h18.463c1.529 0 2.768-1.24 2.768-2.771v-18.46c0-1.529-1.239-2.769-2.769-2.769zm-9.231 7.385c2.549 0 4.616 2.065 4.616 4.615 0 2.549-2.067 4.616-4.616 4.616s-4.615-2.068-4.615-4.616c0-2.55 2.066-4.615 4.615-4.615zm9 12.693c0 .509-.413.922-.924.922h-16.152c-.511 0-.924-.413-.924-.922v-10.078h1.897c-.088.315-.153.64-.2.971-.05.337-.081.679-.081 1.029 0 4.079 3.306 7.385 7.384 7.385s7.384-3.306 7.384-7.385c0-.35-.031-.692-.081-1.028-.047-.331-.112-.656-.2-.971h1.897v10.077zm0-13.98c0 .509-.413.923-.924.923h-2.174c-.511 0-.923-.414-.923-.923v-2.175c0-.51.412-.923.923-.923h2.174c.511 0 .924.413.924.923v2.175z" fill-rule="evenodd" clip-rule="evenodd"/></svg>
            </a>
        </li>

        <!-- add or remove social profiles as you see fit -->

    </ul>

</aside>
<!-- that’s all folks! -->
</body>
</html>