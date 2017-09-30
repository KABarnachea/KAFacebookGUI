<?php
$con=new PDO("mysql:host=localhost;dbname=dbs","root","");
$query="SELECT * FROM tbls WHERE username='".$_POST["uname"]."' and password='".$_POST["pword"]."'";
$result=$con->query($query);       
$numrows=$result->rowCount();

if($numrows>=1){
header("location: profile.php?uname=".$_POST["uname"]);

}else{

header("location:index.php?login_attempt=nvfinvintbinb");
}
?>