<?php
$string='salah';
/*
if($string==='salah'){
    echo 'yes';
}
else{
  echo 'No';
}*/
//Alias If,for,switch .......
/*if($string==='salah'):
    echo'Yeees';
    echo 'Hiiii';
else:
    echo'Noooooo';
endif;
$names=['ali','esraa','sarah'];
foreach ($names as $name):
    echo $name."<br>";
    endforeach;*/
?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label for="color">Choose Your Color</label>
    <input type="color" id="color" name="color"><br>
    <label for="name">Your Name</label>
    <input type="text" name="name" id="name"><br>
    <input type="submit" value="Show">
</form>
<?php
$name1='Mohammed';
$name2='Salah';
echo nl2br("$name1\n $name2");
echo '<hr>';
echo str_shuffle($name2);
echo '<hr>';
echo str_repeat($name2." ",5);
echo '<hr>';
$string='mohammed salah ahmed';
$chunks=explode(' ',$string);
$firstName=$chunks[0];
$secondName=$chunks[1];
$lastName=$chunks[2];
echo $lastName;
var_dump($chunks);
echo '<hr>';
$names=['ali','ahmed','khaled'];
if(in_array('ali',$names)){
    echo "yes we found th name";
}else{
    echo "No we can not find that name";
}
$string='Mohammed Salah kamel';
$chunks=chunk_split($string,3);
var_dump($chunks);
if(isset($_POST['color'])&&isset($_POST['name'])){
    $color=$_POST['color'];
    $name=$_POST['name'];
    ?>
    <h1 style="color: <?= $color?>;">Welcome
        <?= trim($name);?></h1>
<?php
}
?>
