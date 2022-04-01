<?php
include_once 'src/database.php';

$db=new Database();
$db->connect('groups');

if($db->insert("Organization",['name'=>'CaenSup2','domain'=>'caensup2.fr'])){
    echo 'Organisation ajoutée !';
};die();
$st=$db->query('SELECT COUNT(*) FROM `User`');
echo $st->fetchColumn(0);
echo "<hr>";


$st=$db->query('SELECT * FROM `User`');
foreach ($st as $row){
    echo $row['firstname']."<br>";
}

/*
while($row=$st->fetch()){
    echo $row[1]."<br>";
}
*/


/*
if(isset($_GET['delete'])){
    $delete=$_GET['delete'];
    $nb=deleteFrom($db,'user','suspended');
    echo "$nb supprimé(s)";
}
echo "<hr>";
$st=$db->query('SELECT COUNT(*) FROM `User` where suspended');
echo $st->fetchColumn(0);
*/