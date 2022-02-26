<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/nav.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

<?php
  /* Database config */
$servername = "localhost";
$username = "theearns_us";
$password = "rYoQ1s60PFnM";
$db="theearns_dbke";
$conn = mysqli_connect($servername, $username, $password,$db);

  
   
	$o_uid = $_POST['sql'];
	echo $o_uid ;
    
	$sq = mysqli_query($conn, $o_uid);
 	$rw = mysqli_fetch_array($sq);
 
	$sq = mysqli_query($conn, "SELECT * FROM `game_timer` order by id"); 
  while ($rw = mysqli_fetch_array($sq)) {
    //  echo $rw['uid'];
  }
			$sw = mysqli_query($conn, "INSERT INTO `tptesttable` (`name`, `status`) VALUES ('tpk1',5)");
 
			if($sw){
				echo "<script>
				   console.log('l');
				</script>";
			}else{
				echo "<script>
				   alert('feaild')
				</script>";
			} 
  
		//	$sw = mysqli_query($conn, "UPDATE  `tptesttable` SET status=456 WHERE name='tpk1'");
 
		 
  

?>



</body>
</html>
