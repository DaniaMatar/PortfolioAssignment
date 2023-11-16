<?php

function VarExist($var){
    if (isset($var)){
        return $var;
    }else{
        header("location:../index.html");
    }
}

$user=new stdClass();

$user->fn=VarExist($_POST["firstname"]);
$user->ln=VarExist($_POST["lastname"]);
$user->email=VarExist($_POST["email"]);
$user->pass=VarExist($_POST["pass"]);
$user->sex=VarExist($_POST["sex"]);
$user->ageGroup=VarExist($_POST["ageGroup"]);
$user->language=VarExist($_POST["language"]);

InsertUserToDBfromObjet($user);

$usr=array();
$usr+=array("firstname"=>VarExist($_POST["firstname"]));
$usr+=array("lastname"=>VarExist($_POST["lastname"]));
$usr+=array("email"=>VarExist($_POST["email"]));
$usr+=array("pass"=>VarExist($_POST["pass"]));
$usr+=array("sex"=>VarExist($_POST["sex"]));
$usr+=array("ageGroup"=>VarExist($_POST["ageGroup"]));
$usr+=array("language"=>VarExist($_POST["language"]));
echo "<br>";
InsertUserToDBfromArray($usr);
echo $usr["firstname"];
function InsertUserToDBfromObjet($user){
    print_r($user);
}

function InsertUserToDBfromArray($user){
    print_r($user);
}
?>