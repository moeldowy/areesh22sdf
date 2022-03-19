<?php
/*echo "<select>";
for($year=1900;$year<2023;$year++){
    echo "<option>$year</option>";
}
echo "</select>";*/
//$data=array('ali',2);
//echo $data;//warning: array to string conversion
//indexed array start from 0
//$names1=array('Ahmed','Ali','Esraa');
//$names=['zeze','toto','Sarah','Ahmed'];
/*echo"<pre>";
var_dump($names);
echo '</pre>';*/
//=> Fat Arrow
//-> arrow [access object data(property or method)]
//echo $names[2];
/*$count=count($names);
for($i=0;$i<$count;$i++){
    echo $names[$i]."<br>";  
}
echo "<hr>";
foreach ($names as $name){
    echo $name."<br>";
}*/
/*$club='zmalek';
echo $club;
$club='ahly';
echo $club;*/
//Associative Array
/*$family=[
    'father'=>'Ahmed',
    'mother'=>'zeze',
    'son1'=>'toto',
    'son2'=>'sarah',
];*/
//echo"<hr>";
/*echo $names[3];
echo $family['father'];*/
/*foreach ($family as $key=>$value){
    echo $key.": ".$value."<br>";
}
echo"<hr>";*/
//Multi Dimension Array
/*$family=[
    'father'=>'Ahmed',
    'mother'=>'zeze',
    'sons'=>['first'=>'toto','second'=>'sarah']
];*/
/*echo $family['sons']['second'];*/
/*foreach ($family as $value){
    if(is_array($value)){
    foreach ($value as $element){
        echo $element.'<br>';
    }
}else{
        echo $value."<br>";
    }
}*/
/*PHP contain predefined Associatives Array
// SUPER GLOBAL VARIABLES
//$_SERVER contain all server data
//$_GET or $_POST contain all request methods[GET or POST] data
//$_GET can be filled with Query string
*/
echo "<pre>";
/*var_dump($_SERVER);
echo $_SERVER['REQUEST_METHOD'];*/
//
?>
<form method="post" action="welcome.php">
    username:<input type="text" name="username"><br>
    Password:<input type="password" name="password">
    Gender:
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="submit" value="Click">
</form>
<?php
/*$club='zamalek';
$club='ahly';
echo $club;*/
$skills[]='PHP';
$skills[]='JAVA';

var_dump($skills);
?>




