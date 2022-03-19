<?php
/*echo "<select>";
for($year=1900;$year<2023;$year++){
    echo "<option>$year</option>";
}
echo "</select>";*/
$data=array('ali',2);
//echo $data;//warning: array to string conversion
//indexed array start from 0
//$names1=array('Ahmed','Ali','Esraa');
$names=['zeze','toto','Sarah','Ahmed'];
/*echo"<pre>";
var_dump($names);
echo '</pre>';*/
//=> Fat Arrow
//-> arrow [access object data(property or method)]
//echo $names[2];
$count=count($names);
for($i=0;$i<$count;$i++){
    echo $names[$i]."<br>";  
}
echo "<hr>";
foreach ($names as $name){
    echo $name."<br>";
}
/*$club='zmalek';
echo $club;
$club='ahly';
echo $club;*/
//Associative Array
$family=[
    'father'=>'Ahmed',
    'mother'=>'zeze',
    'son1'=>'toto',
    'son2'=>'sarah',
];
echo"<hr>";
/*echo $names[3];
echo $family['father'];*/
foreach ($family as $key=>$value){
    echo $key.": ".$value."<br>";
}