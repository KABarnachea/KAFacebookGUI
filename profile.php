<?php
$con=new PDO("mysql:host=localhost;dbname=dbs","root","");
$query="SELECT * FROM tbls WHERE username='".$_GET["uname"]."'";
$result=$con->query($query);
while($data=$result->fetch(PDO::FETCH_BOTH)){
$uname=$data[0];
$pword=$data[1];
}
?>
<html>
<body>
<p> <?php echo $uname; ?></p>
<p> <?php echo $pword; ?></p>
</body>
</html>
