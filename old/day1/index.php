<?php
/*
 * to make interpreter skip one line use // or #
 * to make interpreter skip block of code use at first /* and at the end of block use */
 /* */
//echo 'WELCOME FROM ECHO';
//echo ("ghjgjghjghjghj");
/*print 'WELCOME FROM PRINT';
print("ghjgjghjghjghj");*/
//echo"hi";
/*
 * echo is faster than print
 * echo can print more than one value
 * but print can only print one value
 * */
//echo"ali","ahmed","ashraf";
//print"ali","ahmed","ashraf";*/
//echo "ahmed";// to print string we use '' or ""
//echo 5;//to print integer we use raw integer 
/*echo true;
echo false;*/

/*
 * DATA TYPES
 * 1- SCALAR DATATYPE
 * [string - integer - float - double -boolean]
 * 2- COMPOUND DATATYPE
 * [ARRAY - OBJECT]
 * 3-SPECIAL DATATYPE
 * [RESOURCE - NULL]
 * */
//echo "as";echo 22, true;
/*class Person{}*/
//$club= "Al ahly";

/*$club=(bool)"d";
echo $club;
echo gettype($club);*/
//settype($club,'boolean');
//echo gettype($club);
/*const FAV_CLUB="al ahly";
const FAV_CLUB="zamalek";
echo FAV_CLUB;*/
/*$toto=25;
$age=&$toto;// we can use & to make alias name for the old variable
echo $toto;
$toto++;
echo $toto;
$toto=29;
echo $age;
unset($toto);
$toto=30;

echo $age;
// DONOT REPEAT  YOURSELF [DRY]
$blood='AB';
$AB="found";
echo $$blood;*/

/*
 * GLOBAL SCOOP
 * LOCAL SCOOP
 * PARAMETER SCOOP
 * STATIC SCOOP
 * */
//$age=25;//global scoop
function incAge(){
    static $age=25;//local scoop
    $age++;
    return "Happy Birt Date".$age;
}
// when we use return and echo
//echo gettype(incAge());
echo incAge()."<br>";
//CRON JOB
echo incAge()."<br>";
echo incAge();
$name=array();
echo'<h1>Wefalselcome $name</h1>' ;
if(empty($name)){
    echo "Yes it is empty";
}else{
    echo "No it is not empty";
}



